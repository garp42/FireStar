<?php 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=sharefree', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}