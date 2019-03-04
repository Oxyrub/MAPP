<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="col-sm-3">
        <?php
        include("../Model/DatabaseFacade.php");

        $sql = "SELECT * FROM genres";
        try
        {
            $db = new DatabaseFacade();        
            $result = $db->connect()->query($sql);
                
            $genres = $result->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            if (!empty($genres)) echo $genres;

        } catch (PDOException $e) {
            var_dump($e);
        }   
        ?>
        </div>    
    </div>        
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</html>






