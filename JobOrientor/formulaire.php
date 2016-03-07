<?php 
if(empty($_SESSION)){
	session_start();
}
if(empty($_SESSION['NumPageQuizz'])){
$_SESSION['NumPageQuizz']=1;
$_SESSION['NumPageQuizz']['TabAnswer']; 
}
require 'header.php'
?>;

<body>
<div class="container">
	 <div class="row">
        <form role="form"  action="answer.php" method="post"   enctype ="multipart/form-data"> 
				<div class="welcom" align="center">
					   <h2>Répondez aux questions suivantes:</h2><br/></br>
					   <h1>SELECT question FROM BDD</h1></br></br></br>
				</div>
				
				     <div class="form-group" align="center">
						  <input type="submit" id="1" class="btn btn-info" value="Réponse 1"/> 
					 </div>
					 </br>
					 <div class="form-group" align="center">
						  <input type="submit" id="2" class="btn btn-info" value="Réponse 2"/>  
					 </div>
					 </br>
					 <div class="form-group" align="center">
						  <input type="submit" id="3" class="btn btn-info" value="Réponse 3"/>
					 </div>
					 </br>
					 <div class="form-group" align="center">
						  <input type="submit" id="4" class="btn btn-info" value="Réponse 4"/>
					 </div>
					 </br>
					 </br>
					 </br>
					 </br>
					 </br>
					 <div class="row">
					 <div class="col-sm-2 col-sm-offset-1  form-group">
					 <?php
					  if($_SESSION['NumPageQuizz'] != 1){
					  $buttonPrec ='<input type="submit" id="5" class="btn btn-danger" value="Revenir à la question précédente"/>';
					  echo $buttonPrec;
					  }
					  ?>
					  </div>
					  <div class="col-sm-1 col-sm-offset-3 form-group"> 
						   <h3><?php if (isset($_SESSION['NumPageQuizz'])) echo $_SESSION['NumPageQuizz'];?>/10</h3>
					  </div>
					  <div class="col-sm-2 col-sm-offset-2 form group">
					   <input type="submit" id="6" class="btn btn-success" value="Revenir au menu"/>
                      </div>						  
                      </div>					 
				
</form>
</div>
</div>
</body>
</html>