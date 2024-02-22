<!DOCTYPE html>
<html>
<head>
	<title>Ajout client</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
  <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
  <div class="container col-md-6 col-md-offset-3 dioubotron spacer">
  	<div class="panel panel-info">
  		<div class="panel-heading center">Ajout Prets</div>
  		<div class="panel-body">
  			<form method="POST" action="./controller/historiquecontroller.php">
 
    
       <div class="form-group row">
         <div class="col-md-3"> 
            <label>Numero_compte:</label>
         </div>
        <div class="col-md-9">
          <select name="numero_compte">
                  
                  <option>Choisir l'id du compte</option>
                  <?php
                    while($compte = mysqli_fetch_row($listecmpt))
                    {
                      echo "<option>$compte[1]</option>";
                    }
                  ?>
                </select>
        </div>
      </div>
      <div class="form-group row">
         <div class="col-md-3"> 
            <label>Nom:</label>
         </div>
        <div class="col-md-9">
          <select name="nom">
                  
                  <option>Choisir nom du client</option>
                  <?php
                    while($client=mysqli_fetch_row($liste))
                    {
                      echo "<option>$client[1]</option>";
                    }
                  ?>
                </select>
        </div>
      </div>

      <div class="form-group row">
         <div class="col-md-3"> 
            <label>Prenom:</label>
         </div>
        <div class="col-md-9">
          <select name="prenom">
                  
                  <option>Choisir prenom du client</option>
                  <?php
                    while($client=mysqli_fetch_row($liste))
                    {
                      echo "<option>$client[2]</option>";
                    }
                  ?>
                </select>
        </div>
      </div>
      
      <div class="form-group row">
         <div class="col-md-3"> 
            <label>Montant:</label>
         </div>
        <div class="col-md-9">
           <select name="montant">
                  
                  <option>Choisir montant compte</option>
                  <?php
                    while($prets=mysqli_fetch_row($listeprets))
                    {
                      echo "<option>$prets[2]</option>";
                    }
                  ?>
                </select>
        </div>
     </div>

        <div class="form-group row">
            <div class="col-md-3">
              <label>Taux:</label>
            </div>
            <div class="col-md-9">
                 <select name="taux">
                  
                  <option>Selectionner un taux</option>
                  <?php
                    while($prets=mysqli_fetch_row($listeprets))
                    {
                      echo "<option>$prets[3]</option>";
                    }
                  ?>
                </select>
             </div>
          </div>
    
       <div class="form-group row">
          <div class="col-md-3">
            <label>Solde:</label>
          </div>
           <div class="col-md-9">
             <select name="solde">
                  
                  <option>Choisir solde compte</option>
                  <?php
                   while($prets=mysqli_fetch_row($listeprets))
                    {
                      echo "<option>$prets[4]</option>";
                    }
                  ?>
                </select>
          </div>
       </div>

  				<div class="form-group row">
             <div class="col-md-3">
  					   <label>Date_debut:</label>
             </div>
              <div class="col-md-3">
  					   <select name="date_debut">
                  
                  <option>selectionner une date</option>
                  <?php
                   while($prets=mysqli_fetch_row($listeprets))
                    {
                      echo "<option>$prets[5]</option>";
                    }
                  ?>
                </select>
              </div>
  				</div>
        
        <div class="form-group row">
             <div class="col-md-3">
               <label>Date_fin:</label>
             </div>
              <div class="col-md-3">
               <input type="date" name="date_fin" class="form-control">
              </div>
          </div><br>

           <div class="col-md-6">
				     <button type="reset" name="actualiser" class="btn btn-info">Actualiser</button>
           </div>
           <div class="col-md-6">
              <button type="submit" name="effectuer" class="btn btn-info">Effectuer</button>
            </div>

         
  			</form>
  		</div>
  	</div>
  </div>
</body>
</html>