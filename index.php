<!DOCTYPE html>
<html>
<head>
	<title> page dynamique </title>
</head>
<body>
	<h1> site dynamique en PHP </h1>
	 <?php include("pages/includes/menu.php"); ?>
	<?php echo  "bienvenue <br>";

	function surface($c){
		$s=$c*$c;
		return $s;
	}
	
	echo 'la surface est :' .surface(5);

	 ?>
	  <?php include("pages/includes/footer.php"); ?>


</body>
</html>