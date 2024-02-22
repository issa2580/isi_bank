<?php

 if (isset($_GET['page'])){
  require_once 'menu.php';

   switch ($_GET['page']) {

   	     case 'authentification':
   	       require_once 'authentification.php';
   		     break;

   case 'ajout_clients':
           require_once 'view/client/ajout_clients.php';
           break;

         case 'afficher_clients':
           require_once 'model/db.php';
           require_once 'model/client.php';
           $liste=afficher_Clients();
           require_once 'view/client/afficher_clients.php';
           break;

         case 'edit_clients':
           require_once ('model/db.php');
           require_once ('model/client.php');
           $liste=getClientById($_GET['id']);
           $client=mysqli_fetch_row($liste);
           require_once ('view/client/edit_clients.php');
           break;

          case 'ajout_prets':
            require_once 'model/db.php';
            require_once 'model/compte.php';
            $listecmpt=afficher_Comptes();
            require_once 'view/prets/ajout_prets.php';
            break;

            case 'afficher_prets':
            require_once 'model/db.php';
            require_once 'model/prets.php';
            $listeprets=afficherPrets();
            require_once 'view/prets/afficher_prets.php';
            break;
           
           case 'afficher_historiques':
            require_once 'model/db.php';
            require_once 'model/prets.php';
            $listeprets=afficherPrets();
            require_once 'view/prets/afficher_historiques.php';
            break;
         case 'ajouter_compte':
           require_once 'model/db.php';
           require_once 'model/client.php';
           $liste =afficher_Clients();
           require_once 'view/compte/ajouter_compte.php';
           break;

      case 'afficher_comptes':
           require_once 'model/db.php';
           require_once 'model/compte.php';
           $listecmpt=afficher_Comptes();
           require_once 'view/compte/afficher_comptes.php';
           break; 

          case 'editcompte':
          require_once('model/db.php');
          require_once('model/compte.php');
          require_once('model/client.php');
          $liste = afficher_Clients();
          $tab = getCompteById($_GET['id']);
          $compte = mysqli_fetch_row($tab);
          require_once('view/compte/editcompte.php');
          break;
   }
 }
          else {
 	           require_once 'authentification.php';
 }