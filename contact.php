<?php 
 session_start();
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
  <title>Page de Contact</title>
</head>
<body>

  <?php
  include "base.php";
 require("../ELazri_Meriem_CC3_SWD/header.php");
  $message = '';                           
  if (isset($_SESSION['Id_Cl']) && isset($_SESSION['Role_Cl'])) {
if ($_SESSION['Role_Cl'] == 'admin') {
    echo "Connexion Admin : " . $_SESSION['Nom_Cl'] . "<br>";
    echo "Prénom Admin : " . $_SESSION['Prenom_Cl'];
} elseif ($_SESSION['Role_Cl'] == 'user') {
    echo "Connexion User : " . $_SESSION['Nom_Cl'] . "<br>";
    echo "Prénom User : " . $_SESSION['Prenom_Cl'];
}                                

}  
  if (isset($_POST['Ajouter'])) {
    $Nom_Cl = $_POST['Nom_Cl'];
    $Prenom_Cl= $_POST['Prenom_Cl'];
     $Email_Cl = $_POST['Email_Cl'];   
    $Password_Cl = $_POST['Password_Cl'];  
    $hasher=password_hash($Password_Cl,PASSWORD_DEFAULT);
    if(!empty($_POST['Nom_Cl']) && !empty($_POST['Prenom_Cl']) && !empty($_POST['Email_Cl'])  && !empty($_POST['Password_Cl'])){
    $sql = "INSERT INTO  client(Nom_Cl,Prenom_Cl,Email_Cl,Password_Cl) VALUES(?,?,?,?)";
    $insert = $data->prepare($sql);
    $insert->execute([$Nom_Cl,$Prenom_Cl,$Email_Cl,$hasher]);
    if(!filter_var($Email_Cl,FILTER_VALIDATE_EMAIL)){
         $message="email est incorrect";
    }
    }
  }
  
  

  ?>
 <div class="container">
  <div class="row">
    <div class="col-lg-5  col-md-10 col-sm-12">
       <form action="" method="POST" class="form-box px-5 py-4">
        <h2 class="text-center mb-4">Contact</h2>
         <?php echo $message?><br>
    Nom: <input type="text" name="Nom_Cl" class="form-control mb-3" placeholder="Entrer votre Nom"><br>
    Prenom: <input type="text" name="Prenom_Cl" class="form-control mb-3"  placeholder="Entrer votre Prenom"><br>
    email: <input type="email" name="Email_Cl" class="form-control mb-3" placeholder="Entrer votre Email"><br>
    mot de passe: <input type="text" name="Password_Cl" class="form-control mb-3"placeholder="Entrer votre Mot de Passe"><br>
    <input type="checkbox" class="mb-3"><label><small>Envoyez-moi des nouvelles et des offres par e-mail</small></label><br>
    <input type="submit" value="Ajouter" name="Ajouter"  class="btn form-control"><br>
  </form>
    </div>
  </div>
 </div>
 <br><br><br>
 <br><br>
 <?php    require("../ELazri_Meriem_CC3_SWD/footer.php"); ?>
      
</body>
</html>