<!DOCTYPE html>
<html>
<head>
	<title>Authentification</title>
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
	<?php 
		if (isset($_GET['ok'])) {
			if ($_GET['ok'] == "false") {
			echo "<div class='alert alert-danger text-center'>
				Echec d'Authentification
			</div>";
		   }
		}
	 ?>
	<div class="container col-md-5 col-md-offset-4 spacer">
		<div class="panel panel-info">
			<div class="panel-heading navbar-left">Authentification</div><br><br>
			<div class="panel-body">
				<form action="./controller/authentificationcontroller.php" method="post">
					<div class="form-group row">
						<div class="col-md-3">
							<label>Login : </label>
						</div>
						<div class="col-md-9">
							<input type="text" name="login" class="form-control" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label>password : </label>
						</div>
						<div class="col-md-9">
							<input type="password" name="password" class="form-control" required>
						</div>
					</div>
					
					<button type="reset" class="btn btn-info">Actualiser</button>
					<button type="submit" name="valider" class="btn btn-info pull-right">Valider</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>