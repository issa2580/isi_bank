<?php 
function ajoutHistoriques($numero_compte,$montant,$taux,$solde,$date_debut,$date_fin){
  $sql="INSERT INTO historique_prets VALUES(null,'$numero_compte','$montant','$taux','$solde','$date_debut','$date_fin')";
  return executeSQL($sql);
}
function afficherHistoriques(){
      $sql="SELECT * FROM historique_prets";
      return executeSQL($sql);
	}
	
 ?>

