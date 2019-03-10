<?php

    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");

    print("Connexion OK<br/>");

    //SQL Query
    $sql= "SELECT uti_nom, uti_cps FROM utilisateur";

    try
    {
        $db = new DatabaseFacade();
        $result = $db->connect()->query($sql);

        $infoResult = $result->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

    } catch (PDOException $e) {
        var_dump($e);
    }

    print("Query Pseudo : ".$infoResult[1]['uti_nom']."<br/>");
    print("Query Password : ".$infoResult[1]['uti_cps']."<br/>");

    print("Query OK<br/>");
    print("Pseudo : ".$_POST['conexPseudo']."<br/>");
    print("Password : ".$_POST['conexPassword']."<br/>");

    $test = false;
    for ($i=0; $i < count($infoResult); $i++) { 
        if ($_POST['conexPseudo'] == $infoResult[$i]["uti_nom"] && $_POST['conexPassword'] == $infoResult[$i]["uti_cps"]) {
            $test = true;
            print("Test OK<br/>");
            header("Location: ../View/Accueil.php");
            exit;
        }
    }
    if ($test == false) {
        print("Test KO<br/>");
        header("Location: ../View/Main.php");
        exit;
    }
?>