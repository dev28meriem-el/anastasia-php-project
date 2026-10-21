<?php
session_start();
include 'base.php';
$messag='';
if(!empty($_SESSION['panier'])){
      $Ads = array_keys($_SESSION['panier']);
    $ids = implode(',', $Ads);
    $affichage= $data->query("SELECT * FROM produit WHERE Id_Produit IN ($ids)");
}
else{
    $messag="Produit introuvable";
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
  <link rel="stylesheet" href="form.css">
    <title>Validation du commande</title>
</head>
<body>
    <?php
     require("../ELazri_Meriem_CC3_SWD/header.php");?>
  <div class="container">
     <div class="table-responsive">
   <table class="table table-bordered">
        <tr>
            <th>Nom de produit </th>
            <th>prix de produit</th>
            <th>image de produit</th>
            <th>la quantite</th>
            <th>Total</th>
        </tr>
        
         <?php  while($line= $affichage->fetch()): ?>

        <tr>
            <td><?php echo $line['Nom_Prd'] ?></td>
            <td><?php echo $line['Prix_Prd'] ?> dh</td>
            <td><img src="images/<?php echo $line['Image_Prd']; ?>" width="100"></td>
            <!-- recuperer les quantites -->
             <td><?php echo $_SESSION['panier'][$line['Id_Produit']];?></td>
             <td><?php echo intval($line['Prix_Prd'])*($_SESSION['panier'][$line['Id_Produit']])?> dh</td>
        </tr>
<?php endwhile?>
            </table>
     </div>
            <br>
  <?php
   if (isset($_POST['Ajouter'])) {
    $Nom_Cl = $_POST['Nom_Cl'];
    $Prenom_Cl= $_POST['Prenom_Cl'];
    $Email_Cl = $_POST['Email_Cl'];   
    $Password_Cl = $_POST['Password_Cl'];
    $hasher=password_hash($Password_Cl,PASSWORD_DEFAULT);
    if(!empty($_POST['Nom_Cl']) && !empty($_POST['Prenom_Cl']) && !empty($_POST['Email_Cl'])  && !empty($_POST['Password_Cl'])){
    $sql = "INSERT INTO  client(Nom_Cl,Prenom_Cl,Email_Cl,Password_Cl) VALUES(?,?,?,?)";
    $insert = $data->prepare($sql);
    $insert->execute([$Nom_Cl,$Prenom_Cl,$Email_Cl, $hasher]);
    header('location:validation.php');
    if(!filter_var($Email_Cl,FILTER_VALIDATE_EMAIL)){
         $message="email est incorrect";
    }
    }
    else{
      $message="les champs obligatoires";
    }
  }
  
  ?>
  <div class="row">
    <div class="col-lg-5  col-md-10 col-sm-12">
       <form action="" method="POST" class="form-box px-5 py-4">
        <h2 class="text-center mb-4">Ajouter un Client</h2>
  Nom : <input type="text"  class="form-control mb-3" placeholder="Entrer Votre Nom" name="Nom_Cl" ><br>
  Prenom: <input type="text"  class="form-control mb-3"  placeholder="Entrer Votre prenom" name="Prenom_Cl"><br>
        Email: <input type="text"  class="form-control mb-3"  placeholder="Entrer Votre Email" name="Email_Cl"><br>
    Mot de passe: <input type="text"  class="form-control mb-3"  placeholder="Entrer Votre mot de passe" name="Password_Cl"><br>

    <input type="submit" value="valider votre commande" name="Ajouter"  class="btn form-control"><br>
  </form>
    </div>
  </div>
  </div>
    <?php echo  $messag?>
 <?php
     require("../ELazri_Meriem_CC3_SWD/footer.php");?>

</body>   
</html>