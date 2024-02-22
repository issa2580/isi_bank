<html>
<head><title>  prets </title>
<body>
<center><h1> effectuer une  prets </h1></center>
<form action="ajout_compte.php">
<p> id compte: <input type="integer" name="id client"></p>
<p> montant: <input type="integer" name="nom"></p>
<p> taux: <input type="integer" name="prenom"></p>
<p> solde: <input type="integer" name="numero"></p>
<p> Date debut: <input type="date" name="Date debut"></p>
<p>
<input type="submit" name="Actualiser" value="Actualiser" >
<center><input type="submit" name="valider" value="valider"></center>
</p>
</form>
<?php
//connexion
try{
	$objetPdo= new PDO('mysql:host=localhost;dbname=isi_bank;charset=utf8','root','');
}
catch(Exception $e ) {
	echo 'erreur de connection' ;
}


?>
<tr><td width="160"><a href="afficher_prets.php"> afficher les prets</a></td></tr>
</body>
</html>