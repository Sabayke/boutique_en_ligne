
<?php
session_start();

if(isset($_POST['deconnexion'])){

session_destroy();
header("location: connexion.php");
}
?>