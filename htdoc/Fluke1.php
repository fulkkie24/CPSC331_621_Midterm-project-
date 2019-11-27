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
for($row=1;$row<=4;$row++) {
	for($col=2;$col<=0+$row;$col++) {
		echo (" ");
	}
	
	for($col=$row;$col<=$row+1;$col++) {
		echo($row);
	}
		for($col=1;$col<=4-$row;$col++){
		echo ("**");
	}
	
	for($col=$row;$col<=$row+1;$col++) {
		echo ($row);
	}
	
echo "<br>";
}
?>

<?php include("footer.php"); ?>

