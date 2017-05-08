<?php
	require_once("BD.php");
	$con=mysqli_connect($servidor,$usuario,$pass,$bd) or die("Imposible conectar a la BD"); 
	mysqli_set_charset($con,"utf8");
?>