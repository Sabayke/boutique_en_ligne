<?php
session_start();

$bdd = new mysqli("localhost", "root", "", "projet_web");
$login= $_SESSION['login'];
$requete ="SELECT id_commande, categories,equipement, marque, model, options, nbre_unite,etat_commande FROM commande where login_client= '" . $login ."' ORDER BY id_commande";
$resultat = $bdd->query($requete);

			echo '<h2> Votre profil: </h2>
				
				<h3> votre login </h3>
				<h3>' . $login . '</h3> 
				<form method="POST" action="deconnexion.php">
				<button name="deconnexion"> Deconnexion</button>
				</form>
				';
				
				
if ($resultat->num_rows > 0) {
while($row = $resultat->fetch_assoc()){ 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
		mes commandes
		</title>
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
		<center>
		<body>
		
			<table>
				
				<tr>
					<td><label> id de la commande : </label></td>
					<td> <?php echo $row['id_commande']; ?></td>
				</tr>
				<tr>
					<td> <label> Catégorie du produit : </label> </td>
					<td> <?php echo $row['categories']; ?></td>
				</tr>
				<tr>
					<td> <label> L'équipement choisi :</label> </td>
					<td> <?php echo $row['equipement']; ?></td>
				</tr>
				<tr>
					<td> <label> Nom de la marque : </label> </td>
					<td> <?php echo $row['marque']; ?></td>
				</tr>
				<tr>
					<td> <label> Le model chosi </label> </td>
					<td> <?php echo $row['model']; ?></td>
				</tr>
				<tr>
					<td> <label> Option </label> </td>
					<td> <?php echo $row['options']; ?></td>
				</tr>
				<tr>
					<td> <label> La quantité : </label> </td>
					<td> <?php echo $row['nbre_unite']; ?></td>
				</tr>
				<tr>
					<td> <label> L'état de votre commande : </label> </td>
					<td> <?php echo $row['etat_commande']; ?></td></br></br>
				</tr>
				</table>
		</body>
		</center>
</html>
<?php
}
}else{
	echo "vous n'avez pas encore effectué une commande\n";
    echo '<a href="accueil.php">Cliquer ici pour effectuer une commande </a>';echo'</br>';
    
}

?>