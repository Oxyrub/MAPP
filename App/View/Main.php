<?php
    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");

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
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
                <div class="col-sm-4 inscZone">
                    <form action="../Controller/inscription.php" method="post">
                        <h3> Inscription </h3>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inscEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inscPseudo" placeholder="Pseudo">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inscPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inscConfirmPassword" placeholder="Confirm password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inscNationality" placeholder="Nationality">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inscNumber" placeholder="Phone Number">
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






