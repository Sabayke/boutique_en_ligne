<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_web', 'root', '');

if(isset($_POST['inscription'])) 
{

   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $login = htmlspecialchars($_POST['login']);
   $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
   $mot_de_passe1 =htmlspecialchars($_POST['mot_de_passe1']);
    
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['login']) AND !empty($_POST['mot_de_passe']) AND !empty($_POST['mot_de_passe1']))
   {
	if($mot_de_passe == $mot_de_passe1){
 $insertclient = $bdd->prepare("INSERT INTO auth(nom, prenom, login, mot_de_passe) VALUES(?, ?, ?, ?)");
 $insertclient->execute(array($nom, $prenom, $login, $mot_de_passe));
 $erreur= "Votre compte a bien été créé ! <a href=\"connexion.php\">Se connecter</a>";
   }
   else { $erreur="le deux mots de passe ne sont pas identique ";}
   
   }else {
      $erreur= "Tous les champs doivent être complétés !";
   }
   
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
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
		<form action="inscription.php" method="post">
		
		<div class="top-margin">
			<tr>
				<td>
					Nom :
				</td>
				<td>
					<input type="text" name="nom" class="form-control">
				</td>
			</tr>
			</div>
			<div class="top-margin">
			<tr>
				<td>
					Prenom :
				</td>
				<td>
					<input type="text" name="prenom" class="form-control">
				</td>
			</tr>
			</div>
			
			<div class="top-margin">
			<tr>
				<td>
					login :
				</td>
				<td>
					<input type="text" name="login" class="form-control">
				</td>
			</tr>
			</div>
			<div class="top-margin">
			<tr>
				<td>
					password :
				</td>
				<td>
					<input type="password" name="mot_de_passe" class="form-control">
				</td>
			</tr>
			</div>
			<div class="top-margin">
			<tr>
				<td>
					Confirmer votre password :
				</td>
				<td>
					<input type="password" name="mot_de_passe1" class="form-control">
				</td>
			</tr>
			</div>
			<div class="top-margin">
			<?php
				echo "<p style='color:red'></p>";
				 if(isset($erreur)) {
				 echo '<font color="red">'.$erreur."</font>";
				 } 
				?>
			</div>
			<tr>
				<td></td>
				<td>
					<button class="btn btn-action" name="inscription" type="submit">inscription</button>
				</td>
			</tr>
			</div>
		</form>
	</table>
	</center></body>
</html>