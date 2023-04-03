<?php
	// get the radius from user input
	$radius = $_POST["sphere-radius"];
	// calculate the volume
	$volume= (4/3)*pi()*pow($radius, 3);
  $roundedVolume= round($volume, 2);
?>
<center>
  <!--Display results-->
  <h3>Results:</h3>
<?php echo "The volume of your sphere is "."$roundedVolume"."cm<sup>3</sup>."; ?>
</center>