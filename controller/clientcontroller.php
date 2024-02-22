 <?php
  require_once '../model/db.php';
  require_once '../model/client.php';

 if (isset($_POST['enregistrer'])) {
  /*
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $telephone=$_POST['telephone'];
     $email=$_POST['email'];
     $adresse=$_POST['adresse'];*/
     extract($_POST);

    ajoutClients($nom,$prenom,$telephone,$email,$adresse);
    header("location:http://localhost/isi_bank/?page=afficher_clients");
 }
/*if(isset($_POST['modifier'])){
  	extract($_POST);

  	updateClient($id, $nom, $prenom, $sexe, $datnais, $adr, $tel, $cni);
  	 header("location:http://localhost/bank/?page=listclient");

}
*/
if(isset($_GET['id'])){
	deleteClient($_GET['id']);
	header("location:http://localhost/isi_bank/?page=afficher_clients");
}
?>