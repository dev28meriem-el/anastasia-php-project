<?php
session_start();
    include"base.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
     <!-- font family -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Ole&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="parfum-Femme.css">
  <style>
    h5,p{
        text-align: center;
        font-weight: border;
    }
    .message>p{
        color: green;
    }
    body{
        background-color: #f2e7e7;
    }
  </style>
  <title>validation du commande</title>
</head>
<body>
    <?php
     require("../ELazri_Meriem_CC3_SWD/header.php");?>

  <br><br><br>
  <div class="message">
 <h5>Votre commande a été validée avec succès</h5>
<br>
<p>
Merci pour votre confiance.  
Nous vous contacterons par email avec les détails de votre commande.
</p>
  </div>
  <br><br><br>
   <?php
     require("../ELazri_Meriem_CC3_SWD/footer.php");?>

  </body>

</html>
