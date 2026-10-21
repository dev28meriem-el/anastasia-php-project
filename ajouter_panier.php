<?php
session_start();
 include 'base.php';
 //verification qu une session est existe 
//creation la session
if(!isset($_SESSION['panier'])){
     // s'il n existe pas on va le creer 
     $_SESSION['panier']=array();
}
//recuperer id dans le lien
if(isset($_GET['Id_Produit'])){
    //recuperation du id
    $Id_Produit=$_GET['Id_Produit'];
    $qty = (int)$_GET['qty'];
    // verification du  existance des qunatite sous 1 et le rendre 1 
    if ($qty < 1) {
    $qty = 1;
}
    //verifier grace a id est ce que le produit y a il existe dans mysql
    $produit=$data->prepare('SELECT * FROM produit WHERE Id_Produit=?');
    $produit->execute([$Id_Produit]);
    $boucle=$produit->fetch();
    if(empty($boucle)){
        //si le produit n existe pas 
        echo "le produit n'existe pas";
    }
    //ajouter produit dans le panier (table);
    //  si il existe deja produit donc s il existe va etre incremente
    //s'il existe premier fois  
    if (isset($_SESSION['panier'][$Id_Produit])) {
    $_SESSION['panier'][$Id_Produit] += $qty;
} else {
    // sinon meme chose mais pour la premier fois 
    // s'il est la premier fois  
    $_SESSION['panier'][$Id_Produit] = $qty;
}
        header('location:Anastasia.php');
        exit();
}

?>