<?php
	include('banner.php');
?>
	<div id="wallpaper">
		<img src="img/kingkong.jpg" alt="wallpaper" id="wallpaper-img">
		<h1 id="wallpaper-title">KING KONG 2017</h1>
		<h3 id="wallpaper-title2">Coming soon</h3>
		<div id="login">
			<h1 id="login-title">Connectez-vous</h1>
			<a href="#"><div id="login-facebook">
				<img src="icons/facebook3.png" alt="facebook" id="facebook-icon">
				<span id="facebook-title">Connexion avec Facebook</span>
			</div></a>
			<a href="#"><div id="login-google">
				<img src="icons/google+.png" alt="google" id="google-icon">
				<span id="google-title">Connexion avec Google +</span>
			</div></a>
			<a href="#"><div id="login-mail">
				<img src="icons/logo.png" alt="mail" id="mail-icon">
				<span id="mail-title">Connexion normale</span>
			</div></a>
			<br/>
			<hr>
			<label>Pas encore inscrit ? <a href="register.php"><b>Créer un compte</b></a></label>
		</div>
	</div>
    <div id="main">
        <div id="top">
            <h3 id="top-title">Top</h3>
            <ul id="top-list">
                <a href="#"><li><img src="icons/eye.png" alt="most-viewed" id="most-viewed">
                <span>Plus regardés</span></li></a>
                <a href="#"><li><img src="icons/heart.png" alt="most-liked" id="most-liked">
                <span>Plus aimés</span></li></a>
                <a href="#"><li><img src="icons/comment.png" alt="most-commented" id="most-commented">
                <span>Plus commentés</span></li></a>
            </ul>
        </div>
        <div id="category">
            <h3 id="category-title">Parcourir les catégories</h3>
        </div>
        <div id="contain">
            <div id="contain-ctn">
                <img src="img/narcos.jpg" alt="contain-img" id="contain-img">
                <h3 id="contain-title">Narcos</h3>
                <img src="icons/eye.png" alt="view" id="contain-view"><span id="contain-view-title">1580</span>
                <img src="icons/comment.png" alt="comment" id="contain-comment"><span id="contain-comment-title">56</span>
                <img src="icons/heart.png" alt="like" id="contain-like"><span id="contain-like-title">125</span>
            </div>
        </div>
    </div>
<?php
    require('footer.php');
?>