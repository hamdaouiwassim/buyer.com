<?php



// Affichage des donnes du $_POST;
var_dump($_POST);
// Recuperation des donnes a partir du formaulaire

$nom = $_POST['nom'];    
$email = $_POST['email'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];

if (strlen($password) < 8 ){
    // declarer un variable contient le message d'erreur
    $msgerror = " le mot de passe doit contenir aux minimum 8 caracteres";
    // retourner vers l'index
    header('location:../index.php?msgerror='.$msgerror.'&form=register');
    exit();

}





// integration du fichier connexion.php
include("connexion.php");
// Connexion vers la base de donnes
$dbh = connectToDb();
echo "<br>la chaine de connexion est =>";
var_dump($dbh);
echo "<br>";

$created_at = date('Y-m-d h:i:s');

// Preparation du requette d'insertion 
$requette = "INSERT INTO users (name,email,password,created_at) VALUES ('$nom','$email','$password','$created_at' )";
// executer la requette 
$result = $dbh->query($requette);

if ($result){
    $msgsuccess = " l'utilisateur ajouté avec success'";
    header("location:../index.php?msg=".$msgsuccess);
}
//var_dump($result);
