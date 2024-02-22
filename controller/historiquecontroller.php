 <?php
  require_once '../model/db.php';
  require_once '../model/historique.php';

 if (isset($_POST['effectuer'])) {
     extract($_POST);

   ajoutHistoriques($numero_compte,$montant,$taux,$solde,$date_debut,$date_fin);
    header("location:http://localhost/isi_bank/?page=historiques_prets");
 }

if(isset($_GET['id'])){
	deleteHistorique($_GET['id']);
	header("location:http://localhost/isi_bank/?page=historiques_prets");
}
?>