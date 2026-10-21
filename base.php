<?php

    $servicelocal='localhost';
    $username='root';
    $password='';
    $dbname='parfumerie';
    try{
    $data= new PDO("mysql:host=$servicelocal;dbname=$dbname",$username,$password);
    $data->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception  $error){
    echo'mauvais connection'.$error->getMessage();
}
?>