<?php
	// get the side a, side b and height from the textfields
	$sideA = $_POST["side-a"];
  $sideB = $_POST["side-b"];
	$height = $_POST["height"];

	// calculate the volume
	$volume = (1/6) * $sideA * $sideB * $height;

  // round the volume to 2 decimal places
	$volume_rounded = number_format($volume, 2);
?>

<h3>Results:</h3>
The volume of the pyramid is <?php echo "$volume_rounded" ?>cm<sup>3</sup>.
