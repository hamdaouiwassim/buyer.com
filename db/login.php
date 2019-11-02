<?php

$email = $_POST['email'];
$password = $_POST['password'];

// integration du fichier connexion.php
include("connexion.php");
// Connexion vers la base de donnes
$dbh = connectToDb();

// Preparation du requette d'insertion 
$requette = "SELECT * FROM users WHERE ( email = '$email' AND password = '$password' )";
// executer la requette 
$result = $dbh->query($requette);

if ( $result->rowCount() > 0 ){
    //echo "utilisateur exist";

    // Data from databse
    $user = $result->fetch();
     

    $id = $user["id"];
    
    
    // Initiation du session
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user["name"];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user["password"];
    $_SESSION['description'] = $user["description"];
    $_SESSION['role'] = $user["role"];
    $_SESSION['phone'] = $user["phone"];
    $_SESSION['created_at'] = $user["created_at"];
    $_SESSION['last_login'] = $user["last_login"];
    
    // Modification du date last_login
    $last_login = date("Y-m-d h:i:s");
    
    
    // preparation du la requette sql 
    $requette = "UPDATE users SET last_login = '$last_login' where id = '$id' ";
    // excution de la requette
    $dbh->query($requette);

    // redirection vers la page profile
    header('location:../profile.php'); 
    

}else{
    echo "verifier vos coordonnes";
}




