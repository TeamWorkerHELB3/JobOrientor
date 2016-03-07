// PAGE QUI VA METTRE REPONSE DANS TABLEAU ET ORIENTER L'UTILISATEUR SELON LE BOUTON SUR LEQUEL IL A CLIQUE
<?php

session_start();

if(!isset($_SESSION['NumPageQuizz'])))
{
	
	header('Location: index.php'); 
}

if($_SESSION['NumPageQuizz'] == 10)
{
	
	header('Location: calculResultat.php');
	
}

if($_POST['id'] == 1 || $_POST['id'] == 2 || $_POST['id'] == 3 || $_POST['id'] == 4 )
{
	$_SESSION['NumPageQuizz']['TabAnswer'] = $_POST['id'];
	$_SESSION['NumPageQuizz']++;
	header('Location: formulaire.php');
	
}

if($_POST['id'] == 5)
{
	
	$_SESSION['NumPageQuizz']['TabAnswer'] = null;
	$_SESSION['NumPageQuizz']--;
	header('Location: formulaire.php');
	
}

if($_POST['id'] == 6)
{

	header('Location: index.php');
	
}



?>