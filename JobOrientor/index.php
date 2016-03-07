<?php 

if (isset($_POST['student'])){
	header ("Location: formulaire.php");
}

if (isset($_POST['employer'])){
	/*header ("Location: formulaire.php");*/
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Orienter Job - Le job étudiant parfait</title>		
	<link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="css/index.css" />
	<script type="javascript">
	
	</script>
</head>
<body>
	<div class="main-container">
		<header id="topBar" class="topbar">
			<div class="container">
				<div class="row">
					<section class="col-sm-12">
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container">
								<div>
									<em>
										Les cookies nous permettent de fournir et améliorer les services de Job Orientor. 
										En continuant à utiliser notre site, vous acceptez notre 
										<a href="#null">Politique d’utilisation des cookies</a>.
									</em>
									<!--<form class="navbar-form pull-right" onSubmit="return false;">										
										<button type="submit" class="btn btn-primary" style="width:50%">Ok</button>
									</form>-->
								</div>
								<div id="reference" class="navbar-header">
									<a class="navbar-brand" href="index.php"><img src="css/images/LogoSite/LogoT.png" /></a>
									<h1 class="navbar-text">Job Orientor</h1>
								</div>
								<ul class="nav navbar-nav">
									<li id="login"><a href="index.php?login">
										<img src="css/images/autres/ess.png" />
										<!-- mettre en commentaire -->
										<span>Se connecter</span></a>
									<li></li>
									<li id="register"><a href="index.php?register">
										<img src="css/images/autres/cros.png" />
										<span>S'inscrire</span></a>
									</li>
								</ul>
							</div>
						</nav>
					</section>
				</div>
			</div>
		</header>
		<article>
			<div align="center">
				Ce site déterminera le job étudiant le plus adéquat pour vous (jobiste).
				Il permet égalemment de trouver le jobiste qu'il vous faut (employeur/société).
			</div>
		</article>
		<aside>
			<div id="status" class="alert alert-success">
				<div>
					<h1>Je suis un </h1>
					<form method="post" action="index.php">
						<button type="submit" class="btn btn-success" id="student" name="student">étudiant</button><br /><br />
						<button type="submit" class="btn btn-info" id="employer" name="student">employeur</button>
					</form>
				</div><br /><br />
			</div>
		</aside>
	</div>
</body>
</html>

