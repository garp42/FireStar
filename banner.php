<?php
	require('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
	<div id="banner">
		<a href="index.php"><h1><font color="#E47516">Fire</font><font color="white">Star</font></h1></a>
		<a href="index.php"><img src="icons/logo.png" alt="logo" id="logo" height="64" width="64"></a>
		<input type="search" name="search-bar" id="search-bar" placeholder="Entrez votre recherche...">
		<a href="#"><img src="icons/search.png" alt="search" id="search-icon"></a>
		<a href="#"><img src="icons/account.png" alt="account-icon" id="account-icon"></a>
		<a href="#"><h3 id="account-title">COMPTE</h3></a>
		<a href="#"><img src="icons/explorer.png" alt="explorer-icon" id="explorer-icon"></a>
		<a href="#category"><h3 id="explorer-title">EXPLORATION</h3></a>
	</div>
	<div id="popup-wallpaper">
	    <div id="login-popup">
	        <h2>Connexion</h2>
	        <ul>
	            <li><label>Nom d'utilisateur ou email</label>
	            <br/>
	            <input type="text" name="username" class="username"></li>
	            <li><label>Mot de passe</label>
	            <br/>
	            <input type="text" name="password" class="password"></li>
	            <br/>
	            <input type="submit" name="envoyer" class="envoyer">
	        </ul>
	        <hr>
	        <ul id="social-connect">
	            <a href="#"><li><img src="icons/facebook3.png" alt="facebook-connect" id="fcb-connect"></li></a>
	            <a href="#"><li><img src="icons/google+.png" alt="google-connect" id="ggl-connect"></li></a>
	        </ul>
	    </div>
	</div>