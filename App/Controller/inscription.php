<?php
    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");   

    

    if (LoginIsValid($_POST['inscPseudo']) == false)
    {
        header("Location: ../View/index.php?login=false");
        exit;
    }    
    try
    {       
        $db = new DatabaseFacade();         
    } 
    catch (PDOException $e) 
    {
        var_dump($e);
    }
    
    $result = $db->InsertUser($_POST['inscEmail'], $_POST['inscdateNaiss'], $_POST['inscPassword'],$_POST['inscPseudo'], $_POST['inscFacebook']);

    if ($result == false) {
        header("Location: ../View/index.php?insc=false");
        exit;
    }
    else {
        header("Location: ../View/Accueil.php");        
        exit;
    }


    //Functions
    function LoginIsValid($login)
    {
        if (($handle = fopen("../Resources/invalid_logins.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 8000, ",")) !== FALSE) {
                $num = count($data);
                for ($c=0; $c < $num; $c++) {
                    $match = preg_match('/'.preg_quote($data[$c]).'/i', $login);
                    if ($match != 0) break;
                }
            }
            fclose($handle);
            if ($match != 0) return false;
            else return true;            
        }
    }
?>