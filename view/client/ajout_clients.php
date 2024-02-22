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
  		<div class="panel-heading center">Ajout Client</div>
  		<div class="panel-body">
  			<form method="POST" action="./controller/clientcontroller.php">
 
    
       <div class="form-group row">
         <div class="col-md-3"> 
            <label>Nom:</label>
         </div>
        <div class="col-md-9">
          <input type="text" name="nom" class="form-control">
        </div>
      </div>
      
      <div class="form-group row">
         <div class="col-md-3"> 
            <label>Prenom:</label>
         </div>
        <div class="col-md-9">
          <input type="text" name="prenom" class="form-control">
        </div>
     </div>

        <div class="form-group row">
            <div class="col-md-3">
              <label>Telephone:</label>
            </div>
            <div class="col-md-9">
                <input type="text" name="telephone" class="form-control">
             </div>
          </div>
    
       <div class="form-group row">
          <div class="col-md-3">
            <label>Email:</label>
          </div>
           <div class="col-md-9">
            <input type="text" name="email" class="form-control">
          </div>
       </div>

  				<div class="form-group row">
             <div class="col-md-3">
  					   <label>Adresse:</label>
             </div>
              <div class="col-md-3">
  					   <input type="text" name="adresse" class="form-control">
              </div>
  				</div><br>
        
           <div class="col-md-6">
				     <button type="reset" name="actualiser" class="btn btn-info">Actualiser</button>
           </div>
           <div class="col-md-6">
              <button type="submit" name="enregistrer" class="btn btn-info">Enregistrer</button>
            </div>

         
  			</form>
  		</div>
  	</div>
  </div>
</body>
</html>