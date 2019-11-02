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
      

    <div class="myinfo">
                <!-- formulaire du modification du profile -->
                <h1>Completer vos profile </h1>
                <form action="db/mod.php" method="POST">
                    <input type="text" name="phone" placeholder="Votre telephone"><br>
                    <textarea name="description" placeholder="Ajouter une descriptiuon courte de vous .."></textarea><br>
                    <input type="submit" value="Ajouter">

                </form>
    </div>

    <div class="completedInfo">
        <p class="alert"> Vos informations sont complete merci </p>

    </div>
    
</body>
</html>
