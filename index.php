<!DOCTYPE html>
<html>
    <head>
        <title>Burger menu</title>
                <meta charset="utf-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>

    </head>
    
    <body>
      
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>  Burger menu <span class="glyphicon glyphicon-cutlery"></span></h1>
        
        <div class="container admin">
            <div>
                <form action="checkUser.php" method="POST">
                <h1>Connexion</h1>
                
                <div class="form-group">
                     <label><b>Nom d'utilisateur <span class="required-input">*</span></b></label>
                    <input class="form-control" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>   
                </div>
               
                <div class="form-group">
                     <label><b>Mot de passe <span class="required-input">*</span></b></label>
                     <input class="form-control" type="password" placeholder="Entrer le mot de passe" name="password" required>  
                </div>
                <div class="form-group">
                     <label ><span class="required-input">*</span> Champs obligatoire</label>
                </div>
                 <div class="form-actions">
                        <a class="btn btn-primary btn-lg pull-right" href="connexion.php">Connexion</a>
                </div>
                    <div class="form-actions">
                        <a class="btn btn-secondary btn-lg pull-right" href="createUsers.php"><span class="glyphicon glyphicon-plus"></span>  Première commande </a>
                    </div>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
            </div>
        

        </div>
        
    </body>

    
</html>