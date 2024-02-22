 <?php
  require_once '../model/db.php';
  require_once '../model/prets.php';

 if (isset($_POST['effectuer'])) {
     extract($_POST);
    ajoutPrets($id_compte,$montant,$taux,$solde,$date_debut);
    header("location:http://localhost/isi_bank/?page=afficher_prets");
 }

if(isset($_GET['id'])){
	deletePrets($_GET['id']);
	header("location:http://localhost/isi_bank/?page=afficher_prets");
}
?>