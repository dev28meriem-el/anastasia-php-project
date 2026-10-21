<?php
    session_start(); 
    include"base.php";
if(!isset($_SESSION['Id_Cl'])){
    header('location:login.php');
}
if($_SESSION['Role_Cl']!='user'){
    header("location:login.php");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="parfum-Femme.css">
  <style>
       h1{
      text-align: center;
    }
    .link{
      display: flex;
      justify-content: center;
      margin-top: 50px;
      gap: 10px;
    }
    .link> a{
      background-color: black;
      border: 1px solid black;
      color: white;
      text-decoration: none;
      padding: 30px;
    }
      .link> a:hover{
      background-color: goldenrod;
      border: 1px solid black;
      color: white;
      text-decoration: none;
      padding: 30px;
    }
  </style>
  <title>page de l'utilisateur</title>
</head>

<body>
      <?php require("../ELazri_Meriem_CC3_SWD/header.php");?>

    <h1>page de l'Utilisateur </h1>
          <?php        echo "la Connexion le nom d'User:".$_SESSION['Nom_Cl']?><br><?php echo "Le prenom d'User:".$_SESSION['Prenom_Cl']; 
 ?>
    <div class="link">
           <a href="Anastasia.php?Id_Cl=<?php echo $_SESSION['Id_Cl'] ?>">page d'accueil</a><br>
</div>
<br><br><br>
  <?php require("../ELazri_Meriem_CC3_SWD/footer.php");?>
</body>

</html>