<?php
session_start();
if ( isset($_SESSION['name']) == false  ){
        // redirection vers la page profile si un utilisateur connecté
        header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <div class="bienvenue">
                <?php
                        
                        echo "Bienvenue ".$_SESSION['name']." dans la page profile <br>";   
                        echo "Votre email : ".$_SESSION['email'];
                        //echo $_SESSION['email'];



                    ?>
                    <a class="deconnexion" href="deconnexion.php" > Deconnexion </a>
    </div>
      

    <div class="myannonces">
               
    </div>
    
</body>
</html>
