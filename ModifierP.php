<?php
session_start();
include 'base.php';
$msg = '';
//modification
if (isset($_POST['modifier'])){
      $Id_Produit = $_GET['Id_Produit'];
    $Prix_Prd = $_POST['Prix_Prd'];
      if(!empty( $_POST['Prix_Prd'])){
    $del = 'UPDATE produit SET Prix_Prd=? WHERE Id_Produit=?';
    $modify = $data->prepare($del);
    $modify->execute([$Prix_Prd, $Id_Produit]);
    header('location:LectureP.php');
    exit();
  }
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
  
    <title>modification des produits</title>
</head>
<body>
   <?php
     require("../ELazri_Meriem_CC3_SWD/header.php");?>
  <br><br><br>
        <div class="container">
  <div class="row">
    <div class="col-lg-5  col-md-10 col-sm-12">
       <form action="" method="GET" class="form-box px-5 py-4">
        <h2 class="text-center mb-4">Modification du Prix</h2>
     prix: <input  type="text"  name="Prix_Prd" placeholder="Entrer un prix..."  class="form-control mb-3" ><br>
         <?php echo $msg; ?><br>
    <input type="submit" value="mettre a jour"  name="modifier"  class="btn form-control"><br>
  </form>
    </div>
  </div>
 </div>
  <?php
     require("../ELazri_Meriem_CC3_SWD/footer.php");?>
</body>

</html>