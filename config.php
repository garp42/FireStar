<?php 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=firestar', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}