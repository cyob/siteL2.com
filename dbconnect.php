<?php 
try{ 
	$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
	$db=new PDO('mysql:host=127.0.0.1; dbname=monsite','root','');
	$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); //Mettre les noms des champs en majuscule
	$db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Lancer des exceptions en cas d'erreurs 
	
   }
   catch(PDOException $e) {
	   die('Erreur : '.$e->getMessage());
	    }
?>