<?php require 'header.php' ?>
<?php require ("param/db.php") ?>
 <body>
	 <div class="container">
	 <div class="row">
		<section class="col-sm-6">
              <form role="form"  method="post"   enctype ="multipart/form-data"> 
				<div class="welcom"align="center">
					   <h1> Job Orientor</h1>
					   <h2 >Inscrivez-vous ! </h2><br/>
				</div>
				<div class="text_color">
				     <div class="form-group" >
						  <label for="log">login</label>
						  <input type="text" class="form-control" id="log" name ="login" placeholder="Entrer votre login "value="<?php if(isset($login)){echo $login;} ?>">
					 </div>
					 <div class="form-group" >
						  <label for="name">Nom</label>
						  <input type="text" class="form-control" id="name" name ="name" placeholder="Entrer votre nom "value="<?php if(isset($name)){echo $name;} ?>">
					 </div>
					 <div class="form-group" >
						  <label for="pren">Prenom</label>
						  <input type="text" class="form-control" id="pren" name ="surname" placeholder="Entrer votre Prenom :"value="<?php if(isset($surname)){echo $surname;} ?>">
					 </div>
					 <div class="form-group" >
						  <label for="dat">Date de naissance</label>
						  <input type="date" class="form-control" id="dat" name ="date" placeholder="Entrer votre date de naissance"value="<?php if(isset($date)){echo $date;} ?>" >
					 </div>
					 <div class="form-group" >
						  <label for="email">Email</label>
						  <input type="email" class="form-control" id="email1" name ="email1" placeholder="Entrez votre email"value="<?php if(isset($email1)){echo $email1;} ?>">
					 </div>
					 <div class="form-group" >
						  <label for="email2">Confirmez votre Email</label>
						  <input type="email" class="form-control" id="email2" name ="email2" placeholder="Confirmation email"value="<?php if(isset($email2)){echo $email2;} ?>">
					 </div>
					  <div class="radio" class="form-group" >
						  <label for="statut">Statut</label>
						  <label><input type="radio" id ="statut" name ="statut" value ="search">Je Cherche</label>
						  <label><input type="radio" id = "statut" name ="statut" value ="propose">Je propose</label>
					 </div>
					 <div class="form-group" >
						  <label for="password1">Mot de passe</label>
						  <input type="password" class="form-control" id="password1" name ="password1" placeholder="Entrez votre mot de passe">
					 </div>
					 <div class="form-group">
						  <label for="password2">Confirmez mot de passe</label>
						  <input type="password" class="form-control" id="password2" name ="password2" placeholder="Confirmation mot de passe">
					 </div>
					 <button type="submit"  name="validate">Valider</button>
			  </div>
		</form> 
       </section>
	   <footer class="row">
				<div class=" col-lg-12">© Retrouvez vous chez jobOrienter!</div>
	   </footer>

	  </div> 
	 </div>
</body>
</html>

<?php

$sErreur;

	if( isset( $_SESSION['id'] ))
	{
			header("Location:profil.php");	
			exit();
	}
    if(isset($_POST['validate']))
	{
			
		$login = htmlspecialchars($_POST['login']);
		$name = htmlspecialchars($_POST['name']);
		$surname = htmlspecialchars($_POST['surname']);
		$email1 = htmlspecialchars($_POST['email1']);
		$email2 = htmlspecialchars($_POST['email2']);
		$password1 = md5($_POST['password1']);
		$password2= md5($_POST['password2']);
		


	  if(!empty($_POST['login']) AND !empty($_POST['name']) AND !empty($_POST['surname']) AND !empty($_POST['date']) AND
		!empty($_POST['email1']) AND !empty($_POST['email2']) AND!empty($_POST['password1']) AND !empty($_POST['password2'])
		AND !empty($_POST['statut']))
       		
		{
           
			$loginLong = strlen($login);
			if($loginLong <= 255)
			{
			   $reqlog= $dbh ->prepare("SELECT * FROM membre WHERE login = ?");
			   $reqlog ->execute(array($login));
			   $cpt = $reqlog -> rowCount();
			   if($cpt==0)
	           {	   
					if($email1==$email2)
					{		
					  $reqem= $dbh ->prepare("SELECT * FROM membre WHERE mail = ?");
					   $reqem ->execute(array($email2));
					   $cpt2 = $reqem -> rowCount();
					  if($cpt2==0)  
					  {
						if(filter_var($email2,FILTER_VALIDATE_EMAIL))
					   {  
						   if($password1 == $password2)
						     { 
											$insernew = $dbh->prepare("INSERT INTO membre (login,password,nom,prenom,date,statut,email) VALUES(?,?,?,?,?,?,?)");
											$insernew ->execute(array($login,$password2,$name,$surname,$_POST['date'],$_POST['statut'],$email2));
					                 		 echo '<div class="alert alert-success">
												 <strong>Felicitation!</strong> Votre compte a bien été crée ! "
												 </div></br>';
											header("Location: connexion.php");
											exit();
								
							 }
						  else
						  {
							$sErreur = "les mots de passe ne sont pas identiques";
						  }
					   }
					 }
					  else
					  {
						$sErreur = "Adresse email existente";
					  }
					}						  
					else
					{
				     $sErreur = "l'adresse email n'est pas identique";
					}
				}
			    else
				{
				 $sErreur ="login déja utilisé";
				}
			}
			else
			{
			  $sErreur = "Votre login ne doit pas dépasser plus de 255 caractères";
			}
		}
		else 
		{
		$sErreur = "Veuillez remplir tous les champs";
		}		
	}
	if(isset($sErreur))
	{
	  echo '<div class="alert alert-danger"><strong>'.$sErreur.'</strong></div>';
	}

?>
