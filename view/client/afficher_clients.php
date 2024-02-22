<!DOCTYPE html>
<html>
<head>
	<title>liste Client</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
   <div class="container col-md-10 col-md-offset-1 spacer">
   	 <div class="panel panel-info">
   	 	<div class="panel-heading" style="text-align: center;">Affichage Clients</div>
   	 	<div class="panel-body">
   	 		<table class="table table-bordered table-striped">
   	 			<tr>
   	 		<th>Id</th>
   	 		<th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Email</th>
   	 		<th>Adresse</th>
            <th>Action </th>
   	 			</tr>
   	 			<tr>
   	 				<?php
                         while ($client=mysqli_fetch_row($liste)) {
                             echo "<tr>
                                      <td>$client[0]</td>
                                      <td>$client[1]</td>
                                      <td>$client[2]</td>
                                      <td>$client[3]</td>
                                      <td>$client[4]</td>
                                      <td>$client[5]</td>
                                      <td><a href='./controller/clientcontroller.php?id=$client[0]' class='btn btn-info btn-block'>Supprimer</a><td>
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