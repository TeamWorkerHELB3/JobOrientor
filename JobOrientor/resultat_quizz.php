<?php

require 'header.php'

?>
<body>
<div class="container">
<div class="row">
<form role="form"  method="post"   enctype ="multipart/form-data"> 
				<div class="welcom" align="center">
					   <h2>Quizz terminé! Voici les différents métiers que l'on vous propose:</h2><br/></br>
				</div>
			    <div class="row">
				  <div class="col-sm-2 col-sm-offset-1 form-group">
						  <input type="submit" id="1" class="btn btn-Succes" value="Métier 1"/> 
			      </div>
				</div>
				</br>
				<div class="row">
				  <div class="col-sm-2 col-sm-offset-1 form-group">
						  <input type="submit" id="1" class="btn btn-Succes" value="Métier 2"/> 
			      </div>
				</div>
				</br>
				<div class="row">
				  <div class="col-sm-2 col-sm-offset-1 form-group">
						  <input type="submit" id="1" class="btn btn-Succes" value="Métier 3"/> 
			      </div>
				</div>
				</br>
				<div class="row">
				  <div class="col-sm-2 col-sm-offset-1 form-group">
						  <input type="submit" id="1" class="btn btn-Succes" value="Métier 4"/> 
			      </div>
				</div>
				</br>
				</br>
			    </br>
				<div class="row">
				  <div class="col-sm-2 col-sm-offset-1  form-group">
				   <button type="button" class="btn btn-primary" onclick="location.href='formulaire.php'">Recommencer test</button>
				  </div>
				  <div class="col-sm-1 col-sm-offset-3 form-group"> 
					<button type="button" class="btn btn-info" onclick="location.href='offres.php'">Voir les offres</button>
				  </div>
				  <div class="col-sm-1 col-sm-offset-3 form-group"> 
					<button type="button" class="btn btn-danger" onclick="location.href='acceuil.php'">Revenir au menu</button>
				  </div>
				
				</div>


</form>
</div>
</div>


</body>
</html>