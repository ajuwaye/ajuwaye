<?php

include '../configuration/config.php';
include '../models/proprietaire.php';


$nom = $_POST['nom'];
$prenom= $_POST['prenom'];
$adresse = $_POST['adresse'];
$numtel = $_POST['numTel'];
$email = $_POST['email'];

$proprietaire = new Proprietaire ($nom, $prenom,$adresse,  $numtel,$email);
if ($proprietaire -> enregistrerPropietaire()){
    header("Location:../views/enregistrerProprietaire.php");
}