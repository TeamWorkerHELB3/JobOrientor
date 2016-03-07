<?php require 'header.php' ?>
 <div class="container">
	 <div class="row">
	 <section class="col-sm-6">
		<form action="connexion.php" method="GET">
			<div class="welcom"align="center">
					   <h1> TeamWorker</h1>
					   <h2 >Connectez-vous ! </h2><br/>
			</div>
			<table>
				<tr>
					<td>Login</td><td><input type="text" name="login" required /></td>
				</tr>
				<tr>
					<td>Mot de passe</td><td><input type="password" name="password" required /></td>
				</tr>
				<tr>
					<td>Se souvenir de moi ?</td><td><input type="checkbox" name="souvenir" /></td>
				</tr>
				<tr>
					<td><a href="recuperation.php">Mot de passe oublié?</a></td>
				<tr>
					<td><input type="submit" name="validation" value="Se connecter"/></td>
					<td><input type="reset" name="reset" value="Effacer" /></td>
				</tr>
			</table>
		</form>
	</section>
	   <footer class="row">
				<div class=" col-lg-12">© Retrouvez vous chez jobOrienter!</div>
	   </footer>

	  </div> 
</div>
		
<?php
require ("param/db.php");
$sErreur;
if(isset($_GET['validation']))
{
	$sLogin = htmlspecialchars($_GET['login']);
	$sPassword  = md5($_GET['password']);
	$sQuery = "SELECT * FROM membre WHERE login='{$sLogin}' AND password='{$sPassword}'";
	$stmt = $dbh->prepare($sQuery);
	$stmt->execute(array($sLogin,$sPassword));
	$iNbResultat = $stmt->rowCount();
	if($iNbResultat>0)
	{
		if(isset($_GET['souvenir']))
		{
			setcookie('login',$sLogin ,time()+365*24*3600,null,null,false,true);
			setcookie('password',$sPassword ,time()+365*24*3600,null,null,false,true);
			
		}
		
		session_start();
		$_SESSION["login"] = $sLogin;
		$stmt = $dbh->prepare("SELECT User_Id FROM membre WHERE login=?");
		$stmt->execute(array($sLogin));
		$result = $stmt->fetch();
		$_SESSION['User_Id'] = $result[0];
		header("Location: user.php?page=profil");
	}
	else
	{
		echo '<span style="color:red">Mauvais login ou Mauvais mot de passe</span>';
	}
	$dbh = NULL;
}



