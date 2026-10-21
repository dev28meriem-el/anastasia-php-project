<?php
session_start();
    include "base.php";
 $stmt="SELECT * FROM produit WHERE section='' AND categorie='femme' limit 9 ";
  $select=$data->prepare($stmt);
  $select->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Ole&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="parfum-Femme.css">
  <link rel="stylesheet" href="CssParFem.css">
  <title>Page de femme</title>
  <style>
    .pagination .disabled {
    pointer-events: none; 
    opacity: 0.5;        
    cursor: not-allowed;
}
  </style>
</head>
<body>
     <?php 
     require("../ELazri_Meriem_CC3_SWD/header.php");
if (isset($_SESSION['Id_Cl']) && isset($_SESSION['Role_Cl'])) {
if ($_SESSION['Role_Cl'] == 'admin') {
    echo "Connexion Admin : " . $_SESSION['Nom_Cl'] . "<br>";
    echo "Prénom Admin : " . $_SESSION['Prenom_Cl'];

} elseif ($_SESSION['Role_Cl'] == 'user') {

    echo "Connexion User : " . $_SESSION['Nom_Cl'] . "<br>";
    echo "Prénom User : " . $_SESSION['Prenom_Cl'];

} 
}  
    ?>
  <div class="container">
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

    </div>
  <div class="pagination">
    <a href="femme-1.php" class="arrow disabled" >&#10094;</a>
    <a href="femme-1.php" class="active">1</a>
    <a href="femme_2.php">2</a>
    <a href="femme_2.php" class="arrow">&#10095;</a>
  </div>
    <?php  require("../ELazri_Meriem_CC3_SWD/footer.php");?>
</body>

</html>