<?php 
function ajoutCompte($numero_compte,$id_client,$nature,$solde,$date_douverture){
  $sql="INSERT INTO comptes VALUES(null,'$numero_compte','$id_client','$nature','$solde','$date_douverture')";
  return executeSQL($sql);
}
function afficher_Comptes(){
     $sql="SELECT * FROM comptes";
     return executeSQL($sql);
	}
	function deleteCompte($id){
	 $sql="DELETE * FROM compte where id =$id";
	 return executeSQL($sql);
	}
 ?>

