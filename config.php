<?php 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=firestar', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

echo "<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";

?>