<?php include("header.php"); ?>
<?php


//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 0 )
{
    
	header("location: logout.php");
	exit();
}
?>
<center>
<?php
for($row=1;$row<=5;$row++) {
	echo ("*");
	for($col=1;$col<=5-$row;$col++) {
		echo ("*");	
	}
	
	for($col=1;$col<=$row;$col++){
		echo (6-$row);
	}
	for($col=2;$col<=$row;$col++){
		echo (6-$row);
	}
	for($col=0;$col<=5-$row;$col++) {
		echo ("*");	
	}

	echo "<br>";
}
?>
<?php include("footer.php"); ?>