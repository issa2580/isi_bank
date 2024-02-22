<html>
<head><title> ajout compte </title>
<body>
<center><h1> Ajout compte </h1></center>
<form action="ajout_compte.php">
<p> id client: <input type="integer" name="id client"></p>
<p> nom: <input type="text" name="nom"></p>
<p> prenom: <input type="text" name="prenom"></p>
<p> numero: <input type="integer" name="numero"></p>
<p> Account: <input type="text" name="Account"></p>
<p> Date ouverture: <input type="date" name="Date ouverture"></p>
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

</body>
</html>