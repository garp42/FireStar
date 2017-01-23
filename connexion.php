<?php 
require('banner.php');
?>
<div class="register-title">
	<h1>Se connecter</h1>
	<span>Pas encore inscrit ? <a href="register"><font color="#5A5D85"><b>Inscrivez-vous</b></font></a></span>
</div>
<div class="register">
	<center>
	<div class="account-register">
		<ul>
			<form action="" method="post">
				<li><label>Nom d'utilisateur ou email</label>
				<br/>
				<input type="text" name="username_email" id="username_email"></li>
				<li><label>Mot de passe</label>
				<br/>
				<input type="password" name="password" id="password"></li>
			</form>
		</ul>
	</div>
	</center>
</div>

<?php
require('footer.php');
?>