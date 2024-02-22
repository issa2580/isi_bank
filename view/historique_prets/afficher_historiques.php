<!DOCTYPE html>
<html>
<head>
	<title>liste Historique_Prets</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
   <div class="container col-md-10 col-md-offset-1 spacer">
   	 <div class="panel panel-info">
   	 	<div class="panel-heading" style="text-align: center;">historiques Prets</div>
   	 	<div class="panel-body">
   	 		<table class="table table-bordered table-striped">
   	 			<tr>
   	 		<th>Id</th>
				<th>Numero</th>
            <th>Montant</th>
            <th>Taux</th>
            <th>Solde</th>
            <th>date_debut</th>
            <th>Date_fin</th>
            <th>Action </th>
   	 			</tr>
   	 			<tr>
   	 				<?php
                         while ($histo=mysqli_fetch_row($listhisto)) {
                             echo "<tr>
                                      <td>$histo[0]</td>
                                      <td>$histo[1]</td>
                                      <td>$histo[2]</td>
                                      <td>$histo[3]</td>
                                      <td>$histo[4]</td>
                                      <td>$histo[5]</td>
                                      <td>$histo[6]</td>
                                      
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