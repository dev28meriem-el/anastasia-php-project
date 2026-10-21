     <div class="div_animated">
    <div class="wrapper">
      <span>VOTRE COMMANDE LIVRÉE EN 24 À 48 HEURES OUVRABLES</span>
      <span> Une remise sur 10% de votre premier achat avec le code   <b>BEAUTY10</b></span>
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