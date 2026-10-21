<?php
session_start();
include 'base.php';
$total=0;
//suppression d un produit  a partir du panier
//si la variable id existe 
if(isset($_GET['del'])){
    $id_del=$_GET['del'];
//suppression
    unset($_SESSION['panier'][$id_del]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="parfum-Femme.css">
    <title>Page de Panier</title>
</head>
<body>
   <?php require("../ELazri_Meriem_CC3_SWD/header.php");?>

  <?php 
     if(isset( $_SESSION['Role_Cl']) && isset($_SESSION['Id_Cl'])){
      echo "la Connexion le nom d'Admin:   ".$_SESSION['Nom_Cl']?><br><?php echo "Le prenom d'Admin:".$_SESSION['Prenom_Cl']; 
  } ?>
   <div class=" table-responsive">
<table   class=" table table-bordered" >

<tr>
    <th>Nom</th>
    <th>Prix</th>
    <th>Image</th>
    <th>Quantité</th>
    <th>Action</th>
</tr>
<?php
// si le panier n existe pas 
if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = [];
}
//liste des produits
//s il y a des colonnes
    //recuperer les collonnes
if(empty($_SESSION['panier'])){
    echo "Votre panier est vide";
}
else{
  // panier est un table associative cles et values
    $Ads = array_keys($_SESSION['panier']);
    // rendre en chaine caractere 
    $ids = implode(',', $Ads);
 
//verifier s il n y a pas des colonnes dans tableaux
    $verifier = $data->query("SELECT * FROM produit WHERE Id_Produit IN ($ids)");
  
    //liste des produits avec foreach boucle 
    foreach($verifier  as $prd):
// calcul du total;
    $quantite = $_SESSION['panier'][$prd['Id_Produit']];
        $total += $prd['Prix_Prd'] * $quantite;
?>
<tr>
<td><?= $prd['Nom_Prd'] ?></td>
<td><?= $prd['Prix_Prd'] ?> dh </td>
<td><img src="images/<?= $prd['Image_Prd'] ?>" width="80"></td>
<!-- //quantity -->
<td><?= $_SESSION['panier'][$prd['Id_Produit']] ?></td>
<!-- ?on peut ecrire quelconque nom = $prd['colonne key primary'] -->
<td><a href="Panier.php?del=<?= $prd['Id_Produit'] ?>" class="btn btn-primary">Supprimer</a></td>
</tr>

<?php endforeach; }?>

<tr>
    <th colspan="4">TOTAL:</th>
    <th><?= $total ?> dh</th>
</tr>

</table>
   </div>
<?php
if(isset($_POST['validation'])){
    header('location:chekout.php');
}
?>
<form action="" method="POST">
    <a href="chekout.php" name='validation' class="btn btn-dark">valider la commande</a>
</form>
<br><br><br>
<br><br><br>
  <?php require("../ELazri_Meriem_CC3_SWD/footer.php");?>

</body>
</html>