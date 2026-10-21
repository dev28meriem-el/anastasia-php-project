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
    .container h1 {
      display: flex;
      justify-content: center;
    }

    img {
      width: 100%;
      height: 400px;
    }

    p {
      text-align: center;
    }
  </style>
  <title>A Propos De Nous </title>
</head>
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
    <h1>Anastasia</h1>
    <img src="img/logo.png" alt="">
    <p><b>Voyagez avec Nous dans :</b><br>
      l'ultime destination pour les amoureux de parfums de luxe.</p>
    <hr>
    <div class="description">
      <h1> QUI SOMMES-NOUS ?</h1>

      <p>Bienvenue chez ANASTASIA, votre destination dédiée à l'univers du parfum et de l'élégance. Nous sélectionnons avec soin des fragrances raffinées pour femmes et hommes, afin d'offrir à chacun l'opportunité de trouver le parfum qui lui ressemble. <br>

        Chez ANASTASIA, nous croyons que le parfum est bien plus qu'une simple senteur. Il révèle une personnalité, accompagne les moments importants de la vie et laisse une empreinte inoubliable. C'est pourquoi nous mettons à votre disposition une collection de parfums choisis pour leur qualité, leur caractère et leur capacité à susciter des émotions. <br>

        Notre objectif est de rendre l'expérience d'achat simple, agréable et accessible à tous. Que vous soyez à la recherche d'un parfum intemporel, d'une nouvelle signature olfactive ou d'un cadeau d'exception, ANASTASIA vous accompagne dans votre choix. <br>

        Nous nous engageons à vous offrir des produits de qualité, un service fiable et une livraison rapide partout au Maroc. <br>

        Découvrez notre univers, explorez nos collections et laissez-vous séduire par des fragrances qui subliment chaque instant. <br>

        ANASTASIA — L'élégance en chaque parfum.</p>

    </div>
  </div>
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