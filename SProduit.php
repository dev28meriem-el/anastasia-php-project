<?php
session_start();
include'base.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Ole&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="parfum-Femme.css">
    <link rel="stylesheet" href="form.css">
    <title>page d'affichage de produit </title>
</head>

<body>
<?php
   require("../ELazri_Meriem_CC3_SWD/header.php");
   if(!isset( $_SESSION['Role_Cl']) && !isset($_SESSION['Id_Cl'])){
      header('location:login.php');
     }
  else{
      echo "la Connexion le nom d'Admin:".$_SESSION['Nom_Cl']?><br><?php echo "Le prenom d'Admin:".$_SESSION['Prenom_Cl']; 
  }
?> 
   <?php
    $message = '';
    if (isset($_POST['Ajouter'])) {
        $Nom_Prd = $_POST['Nom_Prd'];
        $Prix_Prd = $_POST['Prix_Prd'];
        $Image_Prd = $_FILES['Image_Prd']['name'];
        $tmp_name = $_FILES['Image_Prd']['tmp_name'];
        $destination = "images/" . $Image_Prd;
        $Description_Prd = $_POST['Description_Prd'];
         $categorie = $_POST['categorie'];
        $section = $_POST['section'];
        if (!empty($_POST['Nom_Prd']) && !empty($_POST['Prix_Prd']) && !empty($_FILES['Image_Prd']) && !empty($_POST['Description_Prd']) && !empty($_POST['categorie'])&& !empty($_POST['categorie'])) {
            move_uploaded_file($tmp_name, $destination);
            $sql = "INSERT INTO  produit(Nom_Prd,Prix_Prd,Image_Prd,Description_Prd,categorie,section) VALUES (?,?,?,?,?,?)";
            $ajouter = $data->prepare($sql);
            $ajouter->execute([$Nom_Prd, $Prix_Prd, $Image_Prd, $Description_Prd,$categorie,$section]);
        }
    }
    ?>
     <div class="container">
  <div class="row">
    <div class="col-lg-5  col-md-10 col-sm-12">
          <form action="" method="POST" enctype="multipart/form-data" class="form-box px-5 py-4">
        <h2 class="text-center mb-4">Ajouter un Produit</h2>
    Nom: <input type="text" name="Nom_Prd" class="form-control  mb-3" placeholder="Entrer Votre produit"><br>
        Prix: <input type="text" name="Prix_Prd" class="form-control mb-3"    placeholder="Entrer le Prix"><br>
        Image: <input type="file" name="Image_Prd" class="form-control mb-3" ><br>
        Description: <input type="text" name="Description_Prd" class="form-control mb-3"   placeholder="Entrer la description"><br>
        categorie: <input type="text" name="categorie" class="form-control mb-3"   placeholder="Entrer la categorie"><br>
        section: <input type="text" name="section" class="form-control mb-3"    placeholder="Entrer la section"><br>
        <input type="submit" value="Ajouter" name="Ajouter"  class="btn form-control"><br>
    </form>
    </div>
  </div>
 </div>
  <?php require("../ELazri_Meriem_CC3_SWD/footer.php");?>
</body>

</html>