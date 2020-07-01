<?php
session_start();
require('dbconnect.php');
//Reception des données du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$Sexe=$_POST['Sexe'];
$telephone=$_POST['Telephone'];
$Adressemail=$_POST['Adresse Mail'];

echo $nom."<br>".$prenom."<br>".$Sexe."<br>".$telephone."<br>".$Adressemail;

$insert=$db->prepare("INSERT INTO contacts( nom, prenom, sexe, telephone, adresse mail) VALUES(?;?;?;?,?)");
$insert->execute(array($nom,$prenom,$Sexe,$telephone,$Adressemail));

header('Location:inscription.php');	
?>