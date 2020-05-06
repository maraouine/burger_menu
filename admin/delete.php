<?php
     require 'database.php';

     if(!empty($_GET['id']))
     {
         $id = checkInput($_GET['id']);
     }

    if(!empty($_POST))
    {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $statement=$db->prepare("DELETE FROM items WHERE id=?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: index.php");
    }
     function checkInput ($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Delete item</title>
         <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>

    </head>
    
    
    <body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>  Burger menu <span class="glyphicon glyphicon-cutlery"></span></h1>
        <div class="container admin">
            <div class="row">
                    <h1><strong>Supprimer un item  </strong></h1>
                    <br>
                    <form class="form" role="form" action="delete.php" method="post">
                         <input type="hidden" name="id" value="<?php echo $id ?>" />
                         <p class="alert alert-warning"> Etes vous sur de vouloir supprimer ? </p>
                         <div class="form-actions">
                            <button type="submit" class="btn btn-warning">Oui</button>
                            <a class="btn btn-default" href="index.php">Non</a>
                        </div>
                    </form>                   
                                
            </div>
        </div>
    </body>
</html>