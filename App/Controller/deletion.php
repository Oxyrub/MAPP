<?php

// NE MARCHE PAS, A DEBUGER !!!

session_start();
    // INCLUDES
    include_once("../Model/DatabaseFacade.php");
    include_once("../Model/User.php");

if (isset($_POST['delete']) && $_POST['delete'] == "true")
{
    $user = User::FromSession($_SESSION['user']);

    $db = new DatabaseFacade();
    $result = $db->DeleteUser($user->uti_id);
    //echo $result;
    if ($result == true)
    {
        session_destroy();
        header("Location: ../View/Accueil.php");
    }
}