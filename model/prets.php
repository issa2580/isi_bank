<?php 
function ajoutPrets($id_compte,$montant,$taux,$solde,$date_debut){
  $sql="INSERT INTO prets VALUES(null,'$id_compte','$montant','$taux','$solde','$date_debut')";
  return executeSQL($sql);
}
function afficherPrets(){
      $sql="SELECT * FROM prets";
      return executeSQL($sql);
	}
	 function deletePrets($id){
    $sql= "DELETE FROM prets WHERE id = $id";
    return executeSQL($sql);
  }
 ?>

