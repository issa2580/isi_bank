<!DOCTYPE html>
<html>
<head>
	<title>liste Prets</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
   <div class="container col-md-10 col-md-offset-1 spacer">
   	 <div class="panel panel-info">
   	 	<div class="panel-heading" style="text-align: center;">Affichage Historique Prets</div>
   	 	<div class="panel-body">
   	 		<table class="table table-bordered table-striped">
   	 			<tr>
   	 		<th>Id</th>
   	 		<th>Id_compte</th>
            <th>Montant</th>
            <th>Taux</th>
            <th>Solde</th>
				<th>Reste</th>
            <th>date_debut</th>
            <th>Action </th>
   	 			</tr>
   	 			<tr>
   	 				<?php
                         while ($hprets=mysqli_fetch_row($listeprets)) {
									$rest=$hprets[4]-$hprets[2];
                             echo "<tr>
                                      <td>$hprets[0]</td>
                                      <td>$hprets[1]</td>
                                      <td>$hprets[2]</td>
                                      <td>$hprets[3]</td>
                                      <td>$hprets[4]</td>
                                      <td>$rest</td>
												  <td>$hprets[5]</td>
                                      <td><a href='./controller/pretscontroller.php?id=$hprets[0]' class='btn btn-info btn-block'>Supprimer</a><td>
                                  </tr>";
                         }
   	 				?>
   	 			</tr>
   	 		</table>
   	 	</div>
   	 </div>
   </div>
</body>
</html>