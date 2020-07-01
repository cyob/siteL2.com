<!DOCTYPE html>
<html>
<head>
	<title>Inscriptions</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("Menu.php"); ?>
	<center><h1>Inscription</h1></center>
 <form method="post" action="form.php">
  <fieldset>
   <center><p1><legend>Informations personnelles:</legend></p1></center>
    <div class="champ">
      <label for="nom">Nom de famille :</label>
      <input type="text" id="nom" name="nom" minlength="2" maxlength="30" required placeholder="saisir votre nom"> 
    </div>
    <div class="champ">
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" minlength="2" maxlength="25" required placeholder="saisir votre prenom">
    </div>
    <div class="champ">
      <label for="Sexe">Sexe :</label>
      <input type="Sexe" id="Sexe" name="Sexe" required placeholder="saisir votre sexe">
    </div>
    <div class="champ">
      <label for="Telephone">Telephone :</label>
      <input type="Telephone" id="Telephone" name="Telephone" min="16" max="99" placeholder="saisir votre numero">
     </div>
	  <div class="champ">
      <label for="Adresse Mail">Adresse Mail :</label>
      <input type="Adresse Mail" id="Adresse Mail" name="Adresse Mail" required placeholder="saisir votre adresse mail">
    </div>
	 <input type="Submit" name="envoyer>	
</body>
</html>