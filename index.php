<?php
session_start();
if ( isset($_SESSION['name']) ){
        // redirection vers la page profile si un utilisateur connecté
        header('location:profile.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> Buyer.com : home </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
        <nav class="navbar" >
            <!-- start nav -->
            <div class="logo">
                    <!-- start nav -->
                    <a href="index.php" >Buyer.com</a>
                    <!-- end nav -->
            </div>

            <ul class="menu">
                 <!-- start menu -->
                <li><a href="#" id="login" > Login </a></li>
                <li><a href="#" id="register" > Register </a></li>
                 <!-- end menu -->
            </ul>
            <!-- end nav -->
        </nav>

        <section>
            <!-- start section -->
                <div class="formcontent">


                        
                                <?php if ( isset( $_GET['msg'] ) ){
                                        print '<div class="success">';        
                                        $msg = $_GET['msg'];
                                        echo $msg;
                                        print '</div>';
                                } ?>
                        
                        
                        
                        
                        
                                <?php if ( isset( $_GET['msgerror'] ) ){
                                        print '<div class="error">';
                                        $msgerror = $_GET['msgerror'];
                                        echo $msgerror;
                                        print '</div>';
                                } ?>
                        
                        
                        
                       


                        <div class="register"  >
                                <h2>Register form</h2>
                                
                                <form action="db/add.php" method="POST">
                                    <div class="inputGroup">
                                            <input type="text" name="nom" placeholder="Tapper votre nom içi ...">
                                    </div>  
                                    <div class="inputGroup">
                                            <input type="email" name="email" placeholder="Tapper votre email içi ...">
                                    </div>  
                                    <div class="inputGroup">
                                            <input type="password" name="password" placeholder="Tapper votre mot de passe içi ...">
                                    </div>  
                                    <div class="inputGroup">
                                            <input type="password" name="rpassword" placeholder="Repeter votre mot de passe içi ...">
                                    </div>
                                    <div class="inputGroup">
                                            <input type="submit" class="submit" value="register">
                                            <input type="reset" class="reset" value="delete">
                                    </div>   

                                </form>



                        </div>

                        <div class="login" >
                                <h2>Login form</h2>
                                
                                <form action="db/login.php" method="POST">
                                     
                                    <div class="inputGroup">
                                            <input type="email" name="email" placeholder="Tapper votre email içi ...">
                                    </div>  
                                    <div class="inputGroup">
                                            <input type="password" name="password" placeholder="Tapper votre mot de passe içi ...">
                                    </div>  
                                    
                                    <div class="inputGroup">
                                            <input type="submit" class="submit" value="login">
                                            <input type="reset" class="reset" value="delete">
                                    </div>   

                                </form>

                        </div>
                </div>
            <!-- end section -->
        </section>
        <!--  JS FILES -->
        <script src="js/jquery.js"></script>
        <script src="js/custom.js"></script>
        <script>
                <?php if ( isset( $_GET['form'] ) && $_GET['form'] == "register"){ ?>
                        // l'index doit chargé la formulaire de registre
                        $('.register').css("display","block");
                        $('.login').css("display","none");
                                    
                <?php }else if (isset( $_GET['form']) && $_GET['form'] == "login" ){ ?>
                        // l'index doit chargé la formulaire de login
                        $('.register').css("display","none");
                        $('.login').css("display","block");
                <?php }  ?>
         
                           
</body>
</html>