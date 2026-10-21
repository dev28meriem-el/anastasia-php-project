<?php
session_start();
include 'base.php';
$filter = $data->prepare('SELECT* FROM produit ORDER BY Id_Produit DESC');
if (isset($_GET['searching']) && !empty($_GET['searching'])) {
    $rechercher = htmlspecialchars($_GET['searching']);
    $filter = $data->query('SELECT * FROM produit WHERE Nom_Prd Like "%' . $rechercher . '%" ORDER BY Id_Produit DESC');
}
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
  <link rel="stylesheet" href="form.css">
  <title>Page de Recherche </title>
</head>
<body>
  <?php    require("../ELazri_Meriem_CC3_SWD/header.php"); ?>
      <div class="container">
  <div class="row">
    <div class="col-lg-5  col-md-10 col-sm-12">
       <form action="" method="GET" class="form-box px-5 py-4">
        <h2 class="text-center mb-4">Connexion</h2>
    Rechercher: <input  type="search" name="searching"  class="form-control mb-3" placeholder="Rechercher "><br>
    <input type="submit"  value="Rechercher" name="Filtrer"  class="btn form-control"><br>
  </form>
    </div>
  </div>
 </div>
    <section>
         <section class="list-parfum">
        <?php
        if ($filter->rowCount() > 0) {
            while ($Line = $filter->fetch()) { ?>
                <div class="card">
                    <a href="ImageAcc1.php"> <img src="images/<?php echo $Line['Image_Prd'] ?>" alt=""></a>
                    <h3 class="card-title"><?php echo $Line['Nom_Prd'] ?></h3>
                    <p class="card-description">
                        <?php echo $Line['Description_Prd'] ?><br><?php echo $Line['Prix_Prd'] ?></p>
                    <a href="ajouter_panier.php?Id_Produit=<?= $Line['Id_Produit'] ?>" id='panier' class="btn btn-warning" name='panier'><i class="fa-solid fa-bag-shopping" id="ic-panier"></i>Ajouter en panier</a>
                </div>
            <?php  }?>
         </section>
       <?php } else { ?>
            <p class="h1 text-center">Aucun Produit trouve</p>

        <?php  }
        ?>
    </section>
   <?php    require("../ELazri_Meriem_CC3_SWD/footer.php"); ?>
</body>

</html>