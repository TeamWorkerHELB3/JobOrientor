<?php
$host='localhost';
$user='TeamWorker';
$pass='1234';
$db='TeamWorker';

// De�finition des variables de connexion
$dsn = "mysql:host=$host;dbname=$db";

//**************************************
// connexion � mysql et � la db
//**************************************
try 
{
	$dbh = new PDO($dsn, $user, $pass); //db handle
} 
catch (PDOException $e) 
{
	die( "Erreur ! : " . $e->getMessage() );
}	
?>