<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Style/index.css">
    </head>
    <body class="bodyBg">         
        <div class="container">

            <div class="row header_banner">
                <div class="offset-sm-4 col-sm-4">
                    <h1 class="header_title">Mon compte</h1>
                </div>
            </div>

            <div class="row designForm">
                <div class="offset-sm-2 col-sm-8 back_box">
                    <h3>Modifier mes informations : </h3>
                    <div class="form-group">
                        <label for="" class="col-10">Email</label>
                        <input type="email" class="form-control" id="inscEmail" name="inscEmail" placeholder="patrick.smith@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-10">Pseudo</label>
                        <input type="text" class="form-control" id="inscPseudo" name="inscPseudo" placeholder="Patrick" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-10">Mot de passe</label>
                        <input type="email" class="form-control" id="inscEmail" name="inscEmail" placeholder="******" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-10">Date de naissance</label>
                        <input type="date" class="form-control" id="inscdateNaiss" name="inscdateNaiss" required>
                    </div>
                </div>                
            </div>

            <div class="row gap"></div>

            <div class="row designForm">
                <div class="offset-sm-2 col-sm-8 back_box">
                <form action="../Controller/deletion.php" method="post" >
                    <label for="" class="col-sm-10">Supprimer mon compte :</label> 
                    <input type="hidden" name="delete" value="true"/>                   
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    
                <form>                    
                </div>                
            </div>

        </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../Bootstrap/js/bootstrap.js"></script>
    <script src="../JS/Dynam.js"></script>
</html>