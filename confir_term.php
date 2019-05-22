<?php
session_start();
$image=$_GET['im'];
$bdd = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
$req = $bdd->query("SELECT src FROM images WHERE nom= '" . $_GET['im'] . "' ");
while($donnees = $req->fetch()){
			
if(isset($_POST['afficher'])) {
	
	if(!empty($_POST['marque']) AND !empty($_POST['model']) 
		
	AND !empty($_POST['options']) AND !empty($_POST['nbre_unite'])){
	
	$categories = 'Terminal';
	$equipement = 'Machine';
	$marque = $_POST['marque'];
	$model = $_POST['model'];
	$options = $_POST['options'];
	$nbre_unite = $_POST['nbre_unite'];
	echo 
	'
		<center>
			<h4> Voici votre commande :</h4>
			<ul>
			<li> image : <img style="width:50px;height:50px;border-radius:50px;" src="' . $donnees['src'] .'"/><br></li>
	
			<li> catégorie: '. $categories .'</li>
			<li> equipement: '. $equipement .'</li>
			<li> marque : '. $marque .'</li>
			<li> model: '. $model .'</li>
			<li> options: '. $options .'</li>
			<li> nbre_unite: '. $nbre_unite .'</li>
			<a href="com_supprt_comm.php">Finaliser votre commande </a>
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
}
?>
<!DOCTYPE html>
<html lang="fr">
<head> <title> detailer votre commande</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

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

</head>
<body>
<center>
<h4>Finaliser votre commande </h4>
<div >
<form name="commande" method="POST" action="confir_term.php?<?php $_GET['im'];?>">
<table>
		<tr>
			<td>
				<h4>Selectionner la marque :</h4>
			</td>
			<td>
				<select class="form-control" name="marque" size="4" value="<?php if(isset($_POST["marque"])) echo $_POST["marque"]; ?>">
					<option class="form-control" value="Apple"> Apple</option>
					<option class="form-control" value="Microsoft"> Microsoft</option>
					<option class="form-control" value="Toshiba"> Toshiba</option>
					<option class="form-control" value="Dell"> Dell</option>
					<option class="form-control" value="Lenovo"> Lenovo</option>
					<option class="form-control" value="HP"> HP</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Selectionner le model :</h4>
			</td>
			<td>
				<select class="form-control" name="model" size="2" value="<?php if(isset($_POST["model"])) echo $_POST["model"]; ?>">
					<option class="form-control" value="Mac Book Pro"> Mac Book Pro</option>
					<option class="form-control" value="Air Book"> Air Book</option>
					<option class="form-control" value="Microsoft Surface"> Microsoft Surface</option>
					<option class="form-control" value="Microsoft Laptop"> Microsoft Laptop</option>
					<option class="form-control" value="Toshiba Satellite Pro"> Toshiba Satellite Pro</option>
					<option class="form-control" value="Toshiba Satellite Radius"> Toshiba Satellite Radius</option>
					<option class="form-control" value="Alien War 17"> Alien War 17</option>
					<option class="form-control" value="Dell G5 Gaming Laptop">Dell G5 Gaming Laptop</option>
					<option class="form-control" value="Lenovo 81JW0001US Chromebook">Lenovo 81JW0001US Chromebook</option>
					<option class="form-control" value="Lenovo ideapad 15.6 Laptop">Lenovo ideapad 15.6 Laptop</option>
					<option class="form-control" value="HP Pavilion 15-cr0037wm X360">HP Pavilion 15-cr0037wm X360</option>
					<option class="form-control" value="HP 15 Silver Fusion Laptop">HP 15 Silver Fusion Laptop</option>
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
				<input class="form-control" type="number" name="nbre_unite" class="" placeholder="nombre d'unité"value="<?php if(isset($_POST['nbre_unite'])) echo $_POST['nbre_unite']; ?>">
			</td>
		</tr>
		<tr>
			<td><h4></h4></td>
			<td> <button class="form-control" type="submit" name="afficher">Afficher ma commande </button></td>
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
</div>

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
</body>
</html>