<?php 

	require_once('../model/db.php');
	require_once('../model/authentifie.php');
	/*
if (isset($_POST['ajouter'])) {
	extract($_POST);
	 ajoutAgents($login,$password);
}*/
	if (isset($_POST['valider'])) {
		extract($_POST);

			$agents = verifie_agent($login, $password);

			$agent = mysqli_fetch_row($agents);
			print_r($agent);

		if (!empty($agent[1])) {
			header('Location: http://localhost/isi_bank/?page=""');
		}else{
			echo "<div class='alert alert-danger text-center'>
				Echec d'authentification
			</div>";
			header('Location:http://localhost/isi_bank/?ok=false');
			exit();
		}
	}

 ?>