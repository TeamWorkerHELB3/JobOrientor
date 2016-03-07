<?php 
if(empty($_SESSION)){
	session_start();
}
require 'header.php';
?>
<body>
<div class="container">
			<div class="welcom" align="center">
					   <h2>Listes des métiers proposés:</h2><br/></br>
			</div>
               <form role="form" action="Listes_offres.php" method="post"   enctype ="multipart/form-data"> 
				<div class="row">
                   <label for="selectJob">Choisissez un métiers:</label>
                      <select class="col-sm-2 form-control" id="SelJob" name="selectJob" onchange=<?php GetElementBDD();?>>
						 <option selected> -- </option>
  						 <option>Métiers1</option>
                         <option>Métiers2</option>
                         <option>Métiers3</option>
                         <option>Métiers4</option>
                     </select>
				</div>
</form>
</div>
</body>
</html>

<?php

function GetElementBDD()
{
	
	if($_POST['SelJob']!= 1)
	{
		
		//SELECT * FROM metiers;
		
	}
	
}
?>