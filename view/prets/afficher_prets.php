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
   	 	<div class="panel-heading" style="text-align: center;">Affichage Prets</div>
   	 	<div class="panel-body">
   	 		<table class="table table-bordered table-striped">
   	 			<tr>
   	 				<th>Id</th>
   	 				<th>Id_compte</th>
            <th>Montant</th>
            <th>Taux</th>
            <th>Solde</th>
            <th>date_debut</th>
            <th>Action </th>
   	 			</tr>
   	 			<tr>
   	 				<?php
                         while ($prets=mysqli_fetch_row($listeprets)) {
                             echo "<tr>
                                      <td>$prets[0]</td>
                                      <td>$prets[1]</td>
                                      <td>$prets[2]</td>
                                      <td>$prets[3]</td>
                                      <td>$prets[4]</td>
                                      <td>$prets[5]</td>
                                      <td><a href='./controller/pretscontroller.php?id=$prets[0]' class='btn btn-info btn-block'>Supprimer</a><td>
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