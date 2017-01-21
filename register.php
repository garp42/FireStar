<?php
    require('banner.php');
    if(isset($_POST['username']) AND !empty($_POST['username'])
      AND isset($_POST['email']) AND !empty($_POST['email'])
      AND isset($_POST['password']) AND !empty($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $req = $bdd->query("INSERT INTO user(id, email, username, password) VALUES('', '$email', '$username', '$password')");
    }
?>

<div id="register-title">
	<h1>Créer un compte</h1>
	<span>Déjà inscrit ? <a href="#"><font color="#5A5D85"><b>Connectez-vous</b></font></a></span>
</div>
<div id="register">
	<div id="social-register">
        <h6>S'inscrire avec :</h6>
        <ul>
            <a href="#"><li><img src="icons/facebook3.png" alt="facebook" id="social-register-facebook"></li></a>
            <a href="#"><li><img src="icons/google+.png" alt="facebook" id="social-register-google"></li></a>
        </ul>
	</div>
    <div id="account-register">
        <h6>Ou créer un compte : </h6>
		<ul>
            <?php 
            if($req){
                echo 'OK';
            }
            else{
                echo 'NON';
            }
            ?>
            <form action="" method="post">
                <li><label>Nom d'utilisateur</label>
                <input type="text" placeholder="Nom d'utilisateur" name="username" id="username"></li>
                <li><label>Email</label>
                <input type="text" placeholder="Adresse email" name="email" id="email"></li>
                <li><label>Mot de passe</label>
                <input type="password" placeholder="Mot de passe" name="password" id="password"></li>
                <li><label>Confirmer votre mot de passe</label>
                <input type="password" placeholder="Confirmation mot de passe" name="password2" id="password2"></li>
                <br/>
                <li><input type="submit" value="Envoyer" id="send-submit"></li>
            </form>
		</ul>
    </div>
</div>
