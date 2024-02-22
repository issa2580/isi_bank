<?php
  function ajoutClients($nom,$prenom,$telephone,$email,$adresse){
   $sql="INSERT INTO clients VALUES(null,'$nom','$prenom','$telephone','$email','$adresse')";
   return executeSQL($sql);
  }
  
  function afficher_Clients(){
  $sql="SELECT * FROM clients";
  	return executeSQL($sql);
  }

/*
   function getClientById($id){
      $sql = "SELECT * FROM client WHERE id = $id";
      return executeSQL($sql);
   }
   
   function updateClient($id, $nom, $prenom, $sexe, $datnais, $adr, $tel, $cni){
   	$sql = "UPDATE client SET nom = '$nom',prenom = '$prenom',sexe = '$sexe',datnais = '$datnais',adr = '$adr',tel = '$tel', cni = '$cni' WHERE id = $id ";
   	return executeSQL($sql);
   }
*/

   function deleteClient($id){
    $sql= "DELETE FROM clients WHERE id = $id";
    return executeSQL($sql);
  }
  