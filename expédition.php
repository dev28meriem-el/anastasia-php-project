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
  <title>Condition d'Expedition</title>
</head>
<body>
  <div class="div_animated">
    <div class="wrapper">
      <span>VOTRE COMMANDE LIVRÉE EN 24 À 48 HEURES OUVRABLES</span>
      <span> Une remise sur 10% de votre premier achat avec le code  <b>BEAUTY10</b></span>
      <span>Le prix de la livraison est de 35dh dans tout le Maroc.</span>
    </div>
  </div>
  <div class="first">
    <div class="div_logo" style="margin-top: 20px;">
      <h1 id="titre_de_site">ANASTASIA</h1>
    </div>
<ul class="list_right_icone">
  <li>
    <a href="Searching.php" id="searchBtn">
      <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
    </a>
  </li>
  <li>
    <a href="panier.php">
      <i class="fa-solid fa-cart-shopping"></i>
      <span class="span">
       <?= isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0 ?>
      </span>
    </a>
  </li>
  <li>
    <a href="login.php">
      <i class="fa-solid fa-user"></i>
    </a>
  </li>
</ul>
  </div>
  </div>
  <div class="second">
    <ul class="mini_list">
      <li><a href="Anastasia.php">accueil</a></li>
      <li><a href="femme-1.php">parfum Femme</a> </li>
      <li><a href="homme-1.php">parfum Homme</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php if(isset($_SESSION['Id_Cl']) && isset($_SESSION['Role_Cl'])){?>
          <li><a href="logout.php">Deconnexion</a> </li>
<?php } ?>
    </ul>
  </div>
    <div class="container">
         <h1>Politique d’expédition</h1>
    <p>
        Dernière mise à jour : [Date de la dernière mise à jour] <br>

Chez [Votre Boutique en Ligne de Parfums], nous nous engageons à fournir un service d'expédition fiable et transparent pour nos clients au Maroc. Veuillez lire attentivement notre politique d'expédition pour en savoir plus sur nos procédures et tarifs d'expédition. <br>

<b>1. Zones de Livraison </b><br>

Nous livrons nos produits dans tout le Maroc. Vous pouvez passer une commande depuis n'importe quelle région du pays, et nous ferons de notre mieux pour vous assurer une livraison rapide et sécurisée. <br>

<b>2. Frais d'Expédition </b><br>

2.1. Frais Standard : Les frais d'expédition standard au Maroc sont de [Montant en devise] pour les commandes de moins de [Montant minimum pour la livraison gratuite] en valeur. <br>

2.2. Livraison Gratuite : Pour les commandes d'une valeur égale ou supérieure à [Montant minimum pour la livraison gratuite], la livraison est gratuite. <br>

<b>3. Délais de Livraison</b> <br>

3.1. Traitement des Commandes : Nous nous efforçons de traiter toutes les commandes dans un délai de [Nombre de jours] jours ouvrables à compter de la réception du paiement. <br>

3.2. Livraison : Une fois votre commande traitée, le délai de livraison dépendra de votre emplacement. En général, les délais de livraison varient de [Plage de jours] jours ouvrables. <br>

<b>4. Méthodes d'expédition</b> <br>

Nous travaillons avec des prestataires de services de livraison réputés pour assurer une expédition fiable et sécurisée de vos produits. Vous recevez des informations de suivi de votre commande dès qu'elle aura été expédiée. <br>

<b>5. Informations de contact</b> <br>

Si vous avez des questions concernant notre politique d'expédition ou votre commande en cours, n'hésitez pas à nous contacter à [votre adresse e-mail de contact]. <br>

<b> 6. Suivi des Commandes</b> <br>

Vous pouvez suivre l'état de votre commande à tout moment en utilisant les informations de suivi fournies. Si vous avez des préoccupations concernant la livraison de votre commande, veuillez nous contacter. <br>

<b>7. Retours et Problèmes de Livraison </b><br>

Si vous recevez un produit endommagé ou défectueux, veuillez nous contacter dans les [Nombre de jours] jours suivant la réception pour organiser un retour ou un remplacement. <br>

<b> 8. Modification de la Politique d'Expédition </b></br>
Nous nous réservons le droit de modifier cette politique d'expédition à tout moment. Les modifications seront publiées sur notre site. <br>
    </p>

    </div>
     <div class="footer">
    <div class="row">
      <div class="col">
        <h1>Informations </h1>
        <p><a href="Searching.php">Rechercher</a></p><br>
         <p><a href="expédition.php">Politique d’expédition</a></p><br>
          <p><a href="Conditions d’utilisation.php">Conditions d’utilisation</a></p><br>
          <p><a href="Nous.php">A Propos De Nous</a></p><br>
        <p><a href="contact.php">Contact</a></p><br>
      </div>
      <div class="col ">
        <h1>Nous contacter</h1>
        <p>0611263037</p><br>
        <p>Anastasia@gmail.com</p><br>
        <p>Le service client est ouvert du Mardi au Samedi
          de 10h à 12h et de 14h à 17h30 (hors jours fériés)</p>
      </div>
      <div class="col">
        <h1>Nous suivre</h1>
        <div class="icon">
           <a href="Facebook.com"><i class="fab fa-facebook"></i></a>
          <a href="Instragram.com"><i class="fab fa-instagram"></i></a>
          <a href="Tiktok.com"><i class="fab fa-tiktok"></i></a>
          <a href="Twitter.com"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
     </div>
   </body>
</html>