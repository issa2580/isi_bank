<html>
<head><title> ajout </title>
<body>
<center><h1> Ajout client </h1></center>
<form action="ajout_compte.php">
<p> nom: <input type="text" name="nom"></p>
<p> prenom: <input type="text" name="prenom"></p>
<p> telephone: <input type="integer" name="telephone"></p>
<p> email: <input type="text" name="email"></p>
<p> adresse: <input type="text" name="adresse"></p>
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
//Preparation de la requete
$pdoStat= $objetPdo->prepare('INSERT INTO clients VALUES(:nom, :prenom, :telephone, :email, :adresse)');
//on lie chaque marqueur a une valeur
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAN_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAN_STR);
$pdoStat->bindValue(':telephone', $_POST['telephone'], PDO::PARAN_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAN_STR);
$pdoStat->bindValue(':adresse', $_POST['adresse'], PDO::PARAN_STR);
//execution de la requete prepare
$executeIsok = $pdoStat->execute();
if($executeIsok){
	$message='le client a etais ajout dans la base de donnéé';
}
else{
	$message='ehec de l\insertion';
}
//recuperation des resultatat
$resulat= $pdoStat->fetchAll();
?>
<tr><td width="160"><a href="ajout_compte.php"> Ajout compte</a></td></tr>
</body>
</html>