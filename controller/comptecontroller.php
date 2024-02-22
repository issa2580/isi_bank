<?php 
require_once '../model/db.php';
require_once '../model/client.php';
require_once '../model/compte.php';
if (isset($_POST['enregistrer'])) {
	extract($_POST);
 ajoutCompte($numero_compte,$id_client,$nature,$solde,$date_douverture);
 header("location:http://localhost/isi_bank/?page=afficher_comptes");

}

if(isset($_GET['id'])) {
	deleteCompte($_GET['id']);
	header("location:http://localhost/isi_bank/?page=afficher_comptes");
}
 ?>