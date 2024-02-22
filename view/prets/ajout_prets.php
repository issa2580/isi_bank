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
  			<form method="POST" action="./controller/pretscontroller.php">
 
    
       <div class="form-group row">
         <div class="col-md-3"> 
            <label>Id_compte:</label>
         </div>
        <div class="col-md-9">
          <select name="id_compte">
                  
                  <option>Choisir l'id du compte</option>
                  <?php
                    while($compte = mysqli_fetch_row($listecmpt))
                    {
                      echo "<option>$compte[0]</option>";
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
          <input type="number" name="montant" class="form-control">
        </div>
     </div>

        <div class="form-group row">
            <div class="col-md-3">
              <label>Taux:</label>
            </div>
            <div class="col-md-9">
                <input type="number" name="taux" class="form-control">
             </div>
          </div>
    
       <div class="form-group row">
          <div class="col-md-3">
            <label>Solde:</label>
          </div>
           <div class="col-md-9">
            <input type="number" name="solde" class="form-control">
          </div>
       </div>

  				<div class="form-group row">
             <div class="col-md-3">
  					   <label>Date_debut:</label>
             </div>
              <div class="col-md-9">
  					   <input type="date" name="date_debut" class="form-control">
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