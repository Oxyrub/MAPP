<?php
    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");
    include_once("../Model/User.php");

    try
    {
        $db = new DatabaseFacade();
        $user = $db->GetUser($_POST['conexPseudo'], $_POST['conexPassword']);
    } catch (PDOException $e) {
        var_dump($e);
    }

    if ($user == false) {
        header("Location: ../View/index.php?auth=false");
        exit;
    }
    else {
        header("Location: ../View/Accueil.php");  
        session_start();
        $_SESSION['user'] = User::ToSession($user); 
        exit;
    }
?>