<!DOCTYPE html>
<html>
<head>
	<title>Ajout Compte</title>
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	 <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
	<div class="container col-md-8 col-md-offset-2 spacer">
		<div class="panel panel-info">
			<div class="panel-heading navbar-right">Ajout compte</div><br><br>
			<div class="panel-body">
				<form method="post" action="./controller/comptecontroller.php" >
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<div class="col-md-3">
									<label>Id_client : </label>
								</div>
								<div class="col-md-8">
									<select name="id_client">
										<option>Choisir l'id du client</option>
										<?php
											while($client = mysqli_fetch_row($liste))
											{
											echo "<option>$client[0]</option>";
											}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<div class="col-md-3">
									<label>Numero : </label>
								</div>
								<div class="col-md-8">
								<input type="number" name="numero_compte" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-3">
									<label>Date d'ouverture: </label>
								</div>
								<div class="col-md-8">
									<input type="date" name="date_douverture" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-3">
									<label>Nature : </label>
								</div>
								<div class="col-md-8">
									<select name="nature">
										<option>Courant</option>
										<option>Epargne</option>
									</select>
								</div>
							</div>
								<div class="form-group row">
								<div class="col-md-3">
									<label>Sold : </label>
								</div>
								<div class="col-md-8">
									<input type="text" name="solde" class="form-control" required>
								</div>
								<div class="form-group row">
							</div>
								
						</div>
					</div>
					<button type="reset" class="btn btn-info">Actualiser</button>
					<button type="submit" name="enregistrer" class="btn btn-info pull-right">Enregistrer</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>