<?php
    // INCLUDES 
    include_once("../Model/DatabaseFacade.php");
    include_once("../Model/User.php");
    include_once("../Model/Albums.php");

    try
    {
        $db = new DatabaseFacade();
        $music = $db->RetrieveDataList();
        // var_dump($music);
        // echo(count($music));
    } catch (PDOException $e) {
        var_dump($e);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Style/index.css">
        <link rel="stylesheet" type="text/css" href="../Style/accueil.css">
    </head>
    <body class="bodyBg">
        <div class="calcList">
            <div class="row">
                <div class="offset-sm-4 col-sm-4 headAccueil">
                    <h1> Accueil ! </h1>  
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="offset-sm-1 col-sm-3">
                            <h3> Nom </h3>
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            <h3> Année </h3>
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            <h3> Prix </h3>
                        </div>
                    </div>
                     <?php for ($i=0; $i < count($music); $i++) { ?>
                         <div class="row">
                            <div class="offset-sm-1 col-sm-3">
                                <p> <?php echo($music[$i]['alb_nom']) ?> </p>
                            </div>
                            <div class="offset-sm-1 col-sm-3">
                                <p> <?php echo($music[$i]['alb_annee']) ?> </p>
                            </div>
                            <div class="offset-sm-1 col-sm-3">
                                <p> <?php echo($music[$i]['alb_prix']) ?> </p>
                            </div>
                        </div>
                     <?php } ?>
                </div>
            </div>

        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../Bootstrap/js/bootstrap.js"></script>
    <script src="../JS/Dynam.js"></script>
</html>