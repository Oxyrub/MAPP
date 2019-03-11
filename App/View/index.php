<?php
    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");

    $db = new DatabaseFacade();
    $db->GetUser("Campa Bernard", "mdpcampan");

?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Style/Main.css">
    </head>
    <body class="bodyBg">
        <div class="container">
            <div class="row header_banner">
                <div class="offset-sm-4 col-sm-4">
                    <h1 class="header_title">MyMusicDansLaPeau</h1>
                </div>
            </div>
            <div class="row designForm">
                <div class="offset-sm-2 col-sm-4 connexZone">
                    <form action="../Controller/connexion.php" method="post">
                        <h3> Connexion </h3>
                        <div class="form-group">
                            <input name="conexPseudo" type="text" class="form-control" id="conexPseudo" placeholder="Enter pseudo">
                        </div>
                        <div class="form-group">
                            <input name="conexPassword" type="password" class="form-control" id="conexPassword" placeholder="Password">
                        </div>
                        <?php if (isset($_GET['auth'])) {
                                if ($_GET['auth'] == "false") { ?>
                                    <p class="failConnex"> Pseudo ou mot de passe incorrect ! </p>
                        <?php } }  ?>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
                <div class="col-sm-4 inscZone">
                    <form action="../Controller/inscription.php" method="post">
                        <h3> Inscription </h3>
                        <div class="form-group">
                            <label for="" class="col-10">Email*</label>
                            <input type="email" class="form-control" id="inscEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-10">Pseudo*</label>
                            <input type="text" class="form-control" id="inscPseudo" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-10">Password*</label>
                            <input type="password" class="form-control" id="inscPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-10">Confirm password*</label>
                            <input type="password" class="form-control" id="inscConfirmPassword"  required>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-10">Date de naissance*</label>
                            <input type="date" class="form-control" id="inscdateNaiss" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-10">Compte Facebook</label>
                            <input type="text" class="form-control" id="inscFacebook">
                        </div>
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </form>
                </div>
            </div>
        </div>    
        
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../Bootstrap/js/bootstrap.js"></script>
    <script src="../JS/Dynam.js"></script>
</html>






