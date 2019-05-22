<?php
session_start();
//	$mon_image= $_GET['im'];
	//echo $mon_image;;
if(isset($_POST['afficher'])) {
	
	if(!empty($_POST['marque']) AND !empty($_POST['model']) 
		
	AND !empty($_POST['options']) AND !empty($_POST['nbre_unite'])){
	
	$categories = 'Materiel interconnexion';
	$equipement = $_POST['equipement'];
	$marque = $_POST['marque'];
	$model = $_POST['model'];
	$options = $_POST['options'];
	$nbre_unite = $_POST['nbre_unite'];
	
	echo 
	'

		<center>
		<h4> Voici votre commande :</h4>
		<ul>
		<li> catégorie: '. $categories .'</li>
		<li> equipement: '. $equipement .'</li>
		<li> marque : '. $marque .'</li>
		<li> model: '. $model .'</li>
		<li> options: '. $options .'</li>
		<li> nbre_unite: '. $nbre_unite .'</li>
		<a href="materiel.php">Finaliser votre commande </a>
				'.$mon_image.'
		</ul>
		</center>
		';
	
	$_SESSION['categories'] = $categories;
    $_SESSION['equipement'] = $equipement;
	$_SESSION['marque']     = $marque;
    $_SESSION['model']      = $model;
	$_SESSION['options']    = $options;
    $_SESSION['nbre_unite'] = $nbre_unite;
	
	}
	else {
		$erreur = "veuillez remplir les champs obligatoire ";
		
	}
	
}
?>
<!DOCTYPE html>
<html lang="fr">
<head> <title> detailer votre commande</title>
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
<body>
<center>
<h4>Finaliser votre commande </h4>
<div class="panel-body">
<form name="commande" method="post" action="confirm_inter.php">
<table>
		<tr>
			<td>
				<h4>Selectionner l'équipement :</h4>
			</td>
			<td>
				<select class="form-control" name="equipement" size="4" value="<?php if(isset($_POST["equipement"])) echo $_POST["equipement"]; ?>">
					<option value="Routeur" class="form-control"> Routeur</option>
					<option value="Hub" class="form-control"> Hub</option>
					<option value="Switch" class="form-control"> Switch</option>
					<option value="Pont Cisco" class="form-control"> Pont Cisco</option>
					<option value="Modem Cisco" class="form-control"> Modem Cisco</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Selectionner la marque :</h4>
			</td>
			<td>
				<select class="form-control" name="marque" size="4" value="<?php if(isset($_POST["marque"])) echo $_POST["marque"]; ?>">
					<option value="Cisco" class="form-control"> Cisco</option>
					<option value="Huawei" class="form-control"> Huawei</option>
					<option value="Assus" class="form-control"> Assus</option>
					<option value="Dell" class="form-control"> Dell</option>
					<option value="LinkSys" class="form-control"> LinkSys</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Selectionner le model :</h4>
			</td>
			<td>
				<select class="form-control" name="model" size="2" value="<?php if(isset($_POST["model"])) echo $_POST["model"]; ?>">
					<option class="form-control" value="Cisco c2900"> Cisco c2900</option>
					<option class="form-control" value="Cisco c7200"> Cisco c7200</option>
					<option class="form-control" value="Huawei B890 4G LTE"> Huawei B890 4G LTE</option>
					<option class="form-control" value="Huawei 3G smart hub b68l"> Huawei 3G Smart Hub B68l</option>
					<option class="form-control" value="Assus XG-U2008 10 BaseT Switch"> Assus XG-U2008 10 BaseT Switch</option>
					<option class="form-control" value="Assus XG-U2019 10 BaseT Switch"> Assus XG-U2019 10 BaseT Switch</option>
					<option class="form-control" value="Linksys WAP54G Wireless-G Access"> Linksys WAP54G Wireless-G Access</option>
					<option class="form-control" value="Linksys WAP300N Wireless Access">Linksys WAP300N Wireless Access</option>
					<option class="form-control" value="Vodafone modem">Vodafone modem</option>
					<option class="form-control" value="Orange modem">Orange Modem</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4> Selectionner les options :</h4>
			</td>
			<td>
				<select class="form-control" name="options" size="3" value="<?php if(isset($_POST["options"])) echo $_POST["options"];?>">
					<option class="form-control" value="Nouveau"> Nouveau</option>
					<option class="form-control" value="Déjà utilise">Déjà utilisé</option>
					<option class="form-control" value="Occasion"> Occasion</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4> Nombre d'unité</h4>
			</td>
			<td>
				<input type="number" name="nbre_unite" class="form-control" value="<?php if(isset($_POST['nbre_unite'])) echo $_POST['nbre_unite']; ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td> <button class="form-control" type="submit" name="afficher">Afficher ma commande</button></td>
		</tr>
		
		<div>
			<?php echo "<p style='color:red'></p>";
		    if(isset($erreur)) {
				echo '<font color="red">'.$erreur."</font>";
		      }?>
		</div>
</table>
</form>
</center>
</div>
</body>
</html>

