<?php
session_start();
include 'base.php';
$sql = 'SELECT * FROM produit';
$afficher = $data->prepare($sql);
$afficher->execute();
$res = $afficher->fetchAll();
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
  <style>
    table {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      border-top: none;
    }

    @media (min-width: 790px) {
      .table-responsive{
        font-size: 1.5rem;
      }
    }

    table th {
      background-color: black;
      color: white;
    }

    table td:hover {
      background-color: gray;
      color: white;
    }

    table td:last-child:hover {
      background-color: transparent;
    }

    a {
      text-decoration: none;
    }

    #btn1:hover,
    #btn2:hover {
      color: white;
      background-color: gray;
      text-decoration: none;
    }

    #btn1 {
      background-color: red;
      color: white;
    }

    #btn2 {
      background-color: blue;
      color: white;
    }
  </style>
  <title>Lecture principale des produits</title>
</head>

<body>
  <?php
     require("../ELazri_Meriem_CC3_SWD/header.php");
  if (!isset($_SESSION['Role_Cl']) && !isset($_SESSION['Id_Cl'])) {
    header('location:login.php');
  } else {
    echo "la Connexion le nom d'Admin:" . $_SESSION['Nom_Cl'] ?><br><?php echo "Le prenom d'Admin:" . $_SESSION['Prenom_Cl'];
                                                                  } ?>
  <br><br><br>
  <div class="table-responsive">
    <table class=" table table-bordered">
      <tr>
        <th>Nom d'image</th>
        <th>Le prix d'image</th>
        <th>Image</th>
        <th>Description d'image</th>
        <th>Categorie</th>
        <th>Section</th>
        <th>Action</th>
      </tr>
      <?php foreach ($res as $produit): ?>
        <tr>
          <td><?= $produit['Nom_Prd'] ?></td>
          <td><?= $produit['Prix_Prd'] ?></td>
          <td><?= $produit['Image_Prd'] ?></td>
          <td><?= $produit['Description_Prd'] ?></td>
          <td><?= $produit['categorie'] ?></td>
          <td><?= $produit['section'] ?></td>
          <td>
            <a href="SupprimerP.php?Id_Produit=<?= $produit['Id_Produit'] ?>" id="btn1">supprimer</a>
            <a href="ModifierP.php?Id_Produit=<?= $produit['Id_Produit'] ?>" id="btn2">modifier</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
  <br><br><br>
 <?php     require("../ELazri_Meriem_CC3_SWD/footer.php");?>
</body>

</html>