<?php 
session_start();
if(isset($_POST['afficher'])) {
	
	if(!empty($_POST['marque']) AND !empty($_POST['model']) 
		
	AND !empty($_POST['options']) AND !empty($_POST['nbre_unite'])){
	
	$categories = 'support de communication';
	$equipement = 'Cable RJ45';
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
		<a href="com_supprt_comm.php">Finaliser votre commande </a>
		</ul>
		</center>'
		;
	
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
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css" >
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<center>
<h4>Finaliser votre commande </h4>
<div>
<form name="commande" method="post" action="support_comm.php">
<table>
		<tr>
			<td>
				<h4>Selectionner la marque :</h4>
			</td>
			<td>
				<select class="form-control" name="marque" size="4" value= "<?php if(isset($_POST["marque"])) echo $_POST["marque"]; ?>">
					<option class="form-control" value="Conrad France"> Conrad France</option>
					<option class="form-control" value="Cisco USA"> Cisco USA</option>
					<option class="form-control" value="Huawei Chine"> Huawei Chine</option>
					<option class="form-control" value="Stäubli Allemagne"> Stäubli Allemagne </option>
					<option class="form-control" value="Normequipe France"> Normequipe France</option>
					<option class="form-control" value="SoluProTeach Espagne"> SoluProTeach Espagne</option>
					<option class="form-control" value="SeneCable Senegal"> SeneCable Senegal</option>
					<option class="form-control" value="RsPro Canada"> RsPro Canada</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Selectionner le model :</h4>
			</td>
			<td>
				<select class="form-control" name="model" size="2" value="<?php if(isset($_POST["model"])) echo $_POST["model"]; ?>">
					<option class="form-control" value="T568A"> T568A</option>
					<option class="form-control" value="T568B"> T568B</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4> Selectionner les options :</h4>
			</td>
			<td>
				<select class="form-control" name="options" size="3" value="<?php if(isset($_POST["options"])) echo $_POST["options"];?>">
					<option class="form-control" value="nouveau"> Nouveau</option>
					<option class="form-control" value="deja_utilise">Déjà utilisé</option>
					<option class="form-control" value="occasion"> Occasion</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4> Nombre d'unité</h4>
			</td>
			<td>
				<input class="form-control" type="number" name="nbre_unite" class="" value="<?php if(isset($_POST['nbre_unite'])) echo $_POST['nbre_unite']; ?>">
			</td>
		</tr>
		<tr>
		<td></td>
			<td> <button class="form-control" type="submit" name="afficher">Afficher ma commande</button></td>
		</tr>
		</div>
		<div>
			<?php echo "<p style='color:red'></p>";
		    if(isset($erreur)) {
				echo '<font color="red">'.$erreur."</font>";
		      }?>
		</div>
</table>
</form>
</center>

</body>
</html>
