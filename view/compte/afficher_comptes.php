<!DOCTYPE html>
<html>
<head>
	<title>liste Compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
   <div class="container col-md-10 col-md-offset-1 spacer">
   	 <div class="panel panel-info">
   	 	<div class="panel-heading" style="text-align: center;">Affichage Comptes</div>
   	 	<div class="panel-body">
   	 		<table class="table table-bordered table-striped">
   	 			<tr>
   	 				<th>Id</th>
   	 				<th>Numero</th>
						<th>Id_client</th>
						<th>Nature</th>
						<th>Solde</th>
						<th>Date_d'ouverture</th>
						<th>Action </th>
   	 			</tr>
   	 			<tr>
   	 				<?php
                         while ($compte=mysqli_fetch_row($listecmpt)) {
                             echo "<tr>
                                      <td>$compte[0]</td>
                                      <td>$compte[1]</td>
                                      <td>$compte[2]</td>
                                      <td>$compte[3]</td>
                                      <td>$compte[4]</td>
												  <td>$compte[5]</td>
                                      <td><a href='./controller/comptecontroller.php?id=$compte[0]' class='btn btn-info btn-block'>Supprimer</a><td>
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