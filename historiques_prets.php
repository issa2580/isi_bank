<?php
//Ouvrire une connection a la base de donnée
$objetPdo= new Pdo('mysql:nost=localhost;dbname=isi_bank','root','');
//Preparation de la requete
$pdoStat= $objetPdo->prepare('select * from clients ');
//execution de la requete
$executeIsok = $pdoStat->execute();
//recuperation des resultatat
$resultat= $pdoStat->fetchAll();
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
<ul>
       <?php foreach ($resultat as $resultat):  ?>
			<li>
			<?= $resulat['id'] ?>-<?= $resulat['numero_compte'] ?>-<?= $resulat['montant'] ?>-<?= $resulat['taux'] ?>-<?= $resulat['solde'] ?>-<?= $resulat['date_debut'] ?>-<?= $resulat['date_fin'] ?>
	        </li>
	   <?php endforeach; ?>
</ul>
<tr><td width="160"><a href="afficher_clients.php"> Historiques des prets</a></td></tr>

</body>