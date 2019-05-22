<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_web', 'root', '');

if(isset($_POST['connexion'])) 
{
   $login = htmlspecialchars($_POST['login']);
   $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
   
   if(!empty($login) AND !empty($mot_de_passe)) 
   {
     $requser = $bdd->prepare("SELECT * FROM auth WHERE login = ? AND mot_de_passe= ?");
     $requser->execute(array($login, $mot_de_passe));
      
	 $userexist = $requser->rowCount();
     if($userexist == 1) 
		{
			$_SESSION['login']=$login;
		  $userinfo = $requser->fetch();
		  header("location: accueil.php");
		}else {
			$erreur= "Veuillez verifier vous informations";
		}
	}else {
		$erreur= "Tous les champs doivent être complétés !";
}
}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire-accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css" >
	<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
	<center>
	<table>
	<form  method="post" action="connexion.php">
	
	<div class="top-margin">
		<tr>
			<td>
			<label>	Login :<span class="text-danger">*</span></label>
			</td>
		
		 	<td>
			 <input type="text" name="login" class="form-control">	
			</td>
			
			<div class="top-margin">
		</tr>
			<tr>
			<td>
				<label> Mot de passe : <span class="text-danger">*</span> </label>
			</td>
		<td>
			<input type="password" name="mot_de_passe" class="form-control">
		</td>
		</tr>
	</div>
	
	<div class="top-margin">
	<?php
		echo "<p style='color:red'></p>";
		    if(isset($erreur)) {
		    echo '<font color="red">'.$erreur."</font>";
		      }?>
	</div>
	<div class="top-margin">
		<tr>
			<td>
			<a href="inscription.php">Inscription</a>
				
			</td>
			
		<td>
			<button class="btn btn-action" name="connexion" type="submit">connexion</button>
			
		</td>
		
		</tr>
		</div>
		 
		
		
	</form>	
	</table>
	</center>
</body>
</html>