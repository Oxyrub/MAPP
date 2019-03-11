<?php

    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");

    // print("Connexion OK<br/>");


    try
    {
        $db = new DatabaseFacade();
        $result = $db->GetUser($_POST['conexPseudo'], $_POST['conexPassword']);
    } catch (PDOException $e) {
        var_dump($e);
    }

    if ($result == false) {
        // print("Test KO<br/>");
        header("Location: ../View/index.php?auth=false");
        exit;
    }
    else {
        // print("Test OK<br/>");
        header("Location: ../View/Accueil.php");
        
        exit;
    }
?>