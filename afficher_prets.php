<?php
//Ouvrire une connection a la base de donnée
$objetPdo= new Pdo('mysql:nost=localhost;dbname=isi_bank','root','');
//Preparation de la requete
$pdoStat= $objetPdo->prepare('select * from prets ;');
//execution de la requete
$executeIsok = $pdoStat->execute();
//recuperation des resultatat
$resulat= $pdoStat->fetchAll();
?>
<!doctype Html>
<html lang="fr">
<head>
<meta harset="UTF-8">
<meta name="Viewport"
      content="width=divice=width, user=scalable=no, initial=scale=1.0,maximum=scale=1.0
	  , minimum-scale=1.0">
	  <meta http-equiv="x=UA=Compatible" content="ie=edge">
	  <title> Clients </title>
</head>
<body>
<h1>Listes des clients </h1>
       <?php foreach ($resulat as $resulat):  ?>
			<li>
			<?= $resulat['id'] ?>-<?= $resulat['id_compte'] ?>-<?= $resulat['montant'] ?>-<?= $resulat['taux'] ?>-<?= $resulat['solde'] ?>-<?= $resulat['date_debut'] ?>
	        </li>
	   <?php endforeach; ?>


</body>