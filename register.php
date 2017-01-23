<?php
require('banner.php');
    if(isset($_POST['envoyer'])){
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);
        $password2 = sha1($_POST['password2']);
        if(!empty($username) AND !empty($email) AND !empty($password) AND !empty($password2)){
            if($password == $password2){
            	$req = $bdd->prepare("INSERT INTO user(email, username, password, password2) VALUES(?, ?, ?, ?)");
            	$req->execute(array($email, $username, $password, $password2));
        	}
        	else{
        		$error_password = '<font color="red">Les mots de passes sont différents</font>';
        	}
        }
        else{
        	$error_register = '<font color="red">Veuillez remplir tous les champs</font>';
        }
    }
?>

<div class="register-title">
	<h1>Créer un compte</h1>
	<span>Déjà inscrit ? <a href="connexion.php"><font color="#5A5D85"><b>Connectez-vous</b></font></a></span>
</div>
<div class="register">
	<div id="social-register">
        <h6>S'inscrire avec :</h6>
        <ul>
            <a href="#"><li><img src="icons/facebook3.png" alt="facebook" id="social-register-facebook"></li></a>
            <a href="#"><li><img src="icons/google+.png" alt="facebook" id="social-register-google"></li></a>
        </ul>
	</div>
    <div class="account-register">
        <h6>Ou créer un compte : </h6>
		<ul>
            <form action="" method="post">
                <li><label>Nom d'utilisateur</label>
                <br/><br/>
                <input type="text" name="username" id="username"></li>
                <li><label>Email</label>
                <br/><br/>
                <input type="email" name="email" id="email"></li>
                <li><label>Mot de passe</label>
                <br/><br/>
                <input type="password" name="password" id="password"></li>
                <li><label>Confirmer votre mot de passe</label>
                <br/><br/>
                <input type="password" name="password2" id="password2"></li>
                <br/><br/>
                <li><input type="submit" value="Envoyer" name="envoyer" id="send-submit"></li>
            </form>
		</ul>
    </div>
    <div id="register-info">
    	<h3>Pourquoi créer un compte ?</h3>
        <ul>
            <li><img src="icons/hd.png" height="40" width="40"> Avoir accès au contenu HD</li>
            <li><img src="icons/infinity.png"> Regarder les vidéos en illimités</li>
            <li><img src="icons/download.png"> Télécharger toutes les vidéos</li>
            <li><img src="icons/like.png"> Aimer une vidéo</li>
            <li><img src="icons/comment_001.png"> Commenter une vidéo</li>
            <li><img src="icons/forum.png"> Discuter dans le forum</li>
        </ul>
    </div>
</div>
<?php
    require('footer.php');
?>
