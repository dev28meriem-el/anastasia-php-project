<?php
session_start();
include "base.php";
if (isset($_POST['connecter'])) {
  $Email_Cl = $_POST['Email_Cl'];
  $Password_Cl = $_POST['Password_Cl'];
  $sql = "SELECT * FROM client
    WHERE Email_Cl=?";
  $afficher = $data->prepare($sql);
  $afficher->execute([$Email_Cl]);
  if ($afficher->rowcount() > 0) {
    $utilisateur = $afficher->fetch();
    $_SESSION['Id_Cl'] = $utilisateur['Id_Cl'];
    $_SESSION['Nom_Cl'] = $utilisateur['Nom_Cl'];
    $_SESSION['Prenom_Cl'] = $utilisateur['Prenom_Cl'];
    $_SESSION['Role_Cl'] = $utilisateur['Role_Cl'];
    if ($utilisateur['Role_Cl'] == 'admin') {
      header("location:pageAdmin.php");
    } else {
      header("location:pageUser.php");
    }
  } else {
               header("location:contact.php");
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
  <title>Page de Connection</title>
</head>
<body>
 <?php    require("../ELazri_Meriem_CC3_SWD/header.php"); ?>
  <div class="container">
  <div class="row">
    <div class="col-lg-5  col-md-10 col-sm-12">
       <form action="" method="POST" class="form-box px-5 py-4">
        <h2 class="text-center mb-4">Connexion</h2>
    Email: <input type="text"  class="form-control mb-3" placeholder="Entrer un Email" name="Email_Cl"><br>
    Mot de passe: <input type="text"  class="form-control mb-3"  placeholder="Entrer un mot de passe" name="Password_Cl"><br>
    <input type="submit" name="connecter" value="Connexion"  class="btn form-control"><br>
  </form>
    </div>
  </div>
 </div>
<?php    require("../ELazri_Meriem_CC3_SWD/footer.php"); ?>
</body>

</html>