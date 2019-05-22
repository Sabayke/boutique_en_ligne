<?php session_start();


$bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
	$categories = $_SESSION['categories'];
    $equipement = $_SESSION['equipement'];
	$marque     = $_SESSION['marque'];
    $model      = $_SESSION['model'];
	$options    = $_SESSION['options'];
    $nbre_unite = $_SESSION['nbre_unite'];
	$login= $_SESSION['login'];	
		if(isset($_POST['confirmer'])){
				$etat_commande= 'commande enregistré';
				$insertcomm = $bdd->prepare
				("INSERT INTO commande(categories, equipement, marque, model, options, nbre_unite, etat_commande, login_client)
				VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
				$insertcomm ->execute(array($categories, $equipement, $marque, $model, $options, $nbre_unite, $etat_commande, $login));
			echo "la commande est enregistré avec succées\n";
			echo '<a href="profil.php"> Votre profil</a>';
		}
		elseif(isset($_POST['annuler'])) {
				$etat_commande= 'commande annulé';
				$insertcomm = $bdd->prepare
				("INSERT INTO commande(categories, equipement, marque, model, options, nbre_unite, etat_commande)
				VALUES(?, ?, ?, ?, ?, ?, ?)");
				$insertcomm ->execute(array($categories, $equipement, $marque, $model, $options, $nbre_unite, $etat_commande));
			echo "la commande est annulé"; 
			header("location: accueil.php");
			}
		
?>
<DOCTYPE html>
<html lang="fr">
<head>
	<title>Finaliser votre commande</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
<center >
		<body>		
				<h4> Veuillez confirmer votre commande </h4>
				
				<form method="post" action="com_supprt_comm.php">
					<tr>
						<td> <button class="form-control" type="submit" name="confirmer">Confirmer</button></td>
						<td> <button class="form-control" type="submit" name="annuler">Annuler</button></td>
					</tr>
				</form>
		</body>
</center>
</html>
