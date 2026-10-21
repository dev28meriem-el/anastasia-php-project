<?php 
session_start();
include 'base.php';
if(isset($_GET['Id_Produit'])){
    $Id_Produit = $_GET['Id_Produit'];
    $select = $data->prepare("SELECT * FROM produit WHERE Id_Produit=?");
    $select->execute([$Id_Produit]);
    $ss = $select->fetch();
    }
else{
    echo "Produit Epuise";
}
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
  <link rel="stylesheet" href="details.css">
  <title>Page de details du Parfum</title>
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
    $qty = 1;
    if (isset($_GET['qty'])) {
      $qty = (int)$_GET['qty'];
    } 

    ?>

    <div class="container">
      <div class="contenu">
        <div class="left-part">
          <img src="images/<?php echo $ss['Image_Prd'] ?>" alt="">
        </div>
        <div class="right-part">
          <h1><?php echo $ss['Nom_Prd'] ?></h1>
          <hr>
          <h1>100 ml </h1>
          <h6> <?php echo $ss['Prix_Prd'] ?> dh</h6>
          <hr>
          
          <div class="panier-div">
            <div class="progression_du_prix">
              <!-- progressionn du nombre du produit  -->
               <!-- formulaire  -->
              <form  method="GET" action="ajouter_panier.php">
                <input  type="hidden" name="Id_Produit" value="<?=  $ss['Id_Produit'] ?>"><br>
                <div class="counter" name="counter">
                 Quantite: <input type="number"  min="1" name="qty" value="1">
                </div>
              
            </div>
            <p><b><?php echo $ss['Prix_Prd'] ?> dh</b></p>
          </div>
          <div class="button">
           
            <input type="submit" value="Ajouter en panier" id='panier' class="btn btn-warning" name='panier' >
          </div>
          </form>
          <div class="conseils">
            <div class="left-part">
              <p><i class="fa-solid fa-lock"></i>Paiement securise</p>
              <p><i class="fa-solid fa-truck"></i> Livraison gratuite</p>
            </div>
            <div class="right-part">
              <p><i class="fas fa-tags"></i> Paiement en 4 fois sans frais paypal </p>
              <p><i class="fa-solid fa-clock"></i>Livraison:24 ou 48h les jours ouvres</p>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="text">
        <h1><b>Description </b></h1>
        <h2><?php   echo $ss['Description_Prd'] ?></h2>
        <p>« Ce parfum incarne l'élégance et le raffinement à travers une composition harmonieuse de notes soigneusement sélectionnées. Sa fragrance unique révèle une personnalité affirmée
           et laisse un sillage mémorable. 
          Idéal pour toutes les occasions, il apporte une touche de charme, de confiance et de sophistication à chaque instant de la journée. »</p>
      </div>
          <hr>
          <h1 class="par">Un parfum</h1>
<p>C'est une matière première naturelle vivante, qui continue sa macération.

La fragrance que vous achetez aujourd'hui va acquérir sa force & sa rondeur au fur et à mesure de sa conservation.

Temps et macération: le secret d'un élixir.</p>

<h2>- Pierre Montale</h2>
      
      
    </div>
<?php     require("../ELazri_Meriem_CC3_SWD/footer.php");?>
  </body>

  </html>