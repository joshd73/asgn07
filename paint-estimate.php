<!DOCTYPE html>
<!--	Author: Josh Dettloff
		Date:	10/20/2020
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	include('inc-rectangle-object.php');

	$length = $_POST['length'];
	$width = $_POST['width'];
	$height = $_POST['height'];

	$longWall = new Rectangle();
	$shortWall = new Rectangle();

	$longWall->setX($height);
	$longWall->setY($length);
	$shortWall->setX($height);
	$shortWall->setY($length);

	$totalArea = (2 * $longWall->getArea() ) + (2 * $shortWall->getArea() );
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>