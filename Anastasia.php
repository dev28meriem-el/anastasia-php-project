<?php
session_start();
    include "base.php";
 $stmt="SELECT * FROM produit WHERE section='Nouveautes' LIMIT 5";
  $select=$data->query($stmt);
  $select->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Ole&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="parfum-Femme.css">
  <title>Anastasia</title>
</head>
<body>
 <?php
     require("../ELazri_Meriem_CC3_SWD/header.php");?>
  <div class="slider-wrapper">
    <div class="slider">
      <img src="img/wal1.png" alt="">
      <img src="img/wall2.png" alt="">
      <img src="img/wal3.png" alt="">
    </div>
  </div>
  <hr> 
   <?php 
if (isset($_SESSION['Id_Cl']) && isset($_SESSION['Role_Cl'])) {
if ($_SESSION['Role_Cl'] == 'admin') {
    echo "Connexion Admin : " . $_SESSION['Nom_Cl'] . "<br>";
    echo "Prénom Admin : " . $_SESSION['Prenom_Cl'];
}                                                             
}  
    ?>
 
    <h1 class="title-section">Nouveautes</h1>
      <section class="list-parfum">
  <?php  while($Line=$select->fetch()){?>
     <div class="card">
   <a href="detailsPr.php?Id_Produit=<?= $Line['Id_Produit'] ?>"> <img src="images/<?php  echo $Line['Image_Prd'] ?>" alt=""></a>
    <h6 class="card-title"><?php  echo $Line['Nom_Prd'] ?></h6>
    <p class="card-description">
      <?php  echo $Line['Description_Prd'] ?><br><?php  echo $Line['Prix_Prd'] ?> dh</p>
            <a href="ajouter_panier.php?Id_Produit=<?= $Line['Id_Produit'] ?>" id='panier' class="btn btn-50" name='panier'  ><i class="fa-solid fa-bag-shopping" id="ic-panier"></i>Ajouter en panier</a>
</div>
<?php  } ?>
      </section>
      
    <a href="tout1.php" class="btn btn-dark " id="parfum">Tout</a>

  <?php 
 $stmt="SELECT * FROM produit WHERE section='Meilleurs Vente Du Parfum' LIMIT 5";
  $select=$data->query($stmt);
  $select->execute();
?>
 <h1 class="title-section">Meilleurs Vente Du Parfum</h1>
  <section class="list-parfum">
    <?php  while($Line=$select->fetch()){?>
     <div class="card">
   <a href="detailsPr.php?Id_Produit=<?= $Line['Id_Produit'] ?>"> <img src="images/<?php  echo $Line['Image_Prd'] ?>" alt=""></a>
    <h6 class="card-title"><?php  echo $Line['Nom_Prd'] ?></h6>
    <p class="card-description">
      <?php  echo $Line['Description_Prd'] ?><br><?php  echo $Line['Prix_Prd'] ?> dh</p>
            <a href="ajouter_panier.php?Id_Produit=<?= $Line['Id_Produit'] ?>" id='panier' class="btn btn-50" name='panier'  ><i class="fa-solid fa-bag-shopping" id="ic-panier"></i>Ajouter en panier</a>
</div>
<?php  } ?>

  </section>
    <a href="tout2.php" class="btn btn-dark " id="parfum">Tout</a>
  <?php 
 $stmt="SELECT * FROM produit WHERE section='Tendances' LIMIT 5";
  $select=$data->query($stmt);
  $select->execute();
?>
  </section>
      <h1 class="title-section">Tendances</h1>
        <section class="list-parfum">
   <?php  while($Line=$select->fetch()){?>
     <div class="card">
   <a href="detailsPr.php?Id_Produit=<?= $Line['Id_Produit'] ?>"> <img src="images/<?php  echo $Line['Image_Prd'] ?>" alt=""></a>
    <h6 class="card-title"><?php  echo $Line['Nom_Prd'] ?></h6>
    <p class="card-description">
      <?php  echo $Line['Description_Prd'] ?><br><?php  echo $Line['Prix_Prd'] ?> dh</p>
            <a href="ajouter_panier.php?Id_Produit=<?= $Line['Id_Produit'] ?>" id='panier' class="btn btn-50" name='panier'  ><i class="fa-solid fa-bag-shopping" id="ic-panier"></i>Ajouter en panier</a>
</div>
<?php  } ?>
  </section>
    <?php 
 $stmt="SELECT * FROM produit WHERE section='Coffrets' LIMIT 5";
  $select=$data->query($stmt);
  $select->execute();
?>

    <a href="tout3.php" class="btn btn-dark " id="parfum">Tout</a>
      <h1 class="title-section">Coffrets</h1>

        <section class="list-parfum">
  <?php  while($Line=$select->fetch()){?>
     <div class="card">
   <a href="detailsPr.php?Id_Produit=<?= $Line['Id_Produit'] ?>"> <img src="images/<?php  echo $Line['Image_Prd'] ?>" alt=""></a>
    <h6 class="card-title"><?php  echo $Line['Nom_Prd'] ?></h6>
    <p class="card-description">
      <?php  echo $Line['Description_Prd'] ?><br><?php  echo $Line['Prix_Prd'] ?> dh</p>
            <a href="ajouter_panier.php?Id_Produit=<?= $Line['Id_Produit'] ?>" id='panier' class="btn btn-50" name='panier'  ><i class="fa-solid fa-bag-shopping" id="ic-panier"></i>Ajouter en panier</a>
</div>
<?php  } ?>
  </section>
    <a href="tout4.php" class="btn btn-dark " id="parfum">Tout</a>
  <br><br><br>
    <div class="publication">
    <img src="img/pubAcc1.png" alt="" class="pub_img">
   </div><br><br><br>
  <div class="container">
     <div class="text">
     <h1><b>Anastasia</b></h1>
    <pre>Chez Anastasia, nous sommes passionnés par l'art du parfum. Nos parfums sont bien plus que de simples flacons ;
       ce sont des histoires conçues qui se déroulent de manière unique sur chaque porteur.</pre>
   </div>
  </div>
   <?php
     require("../ELazri_Meriem_CC3_SWD/footer.php");?>

</body>
</html>