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
for($i=1;$i<=3;$i++) {
	for($k=1;$k<=4-$i;$k++){
		echo ($i+$k-1);
	}
	for($k=1;$k<=$i;$k++){
		echo ("*");
	}
	for($k=2;$k<=$i;$k++){
		echo ("*");
	}
	for($k=3;$k>=$i;$k--){
		echo ($k);
	}
	echo "<br>";
}
for($i=2;$i>=1;$i--) {
	for($k=1;$k<=4-$i;$k++){
		echo ($i+$k-1);
	}
	for($k=1;$k<=$i;$k++){
		echo ("*");
	}
	for($k=3;$k<=1+$i;$k++){
		echo ("*");
	}
	
	for($k=3;$k>=$i;$k--) {
		echo ($k);
	}

	echo "<br>";
}

?>
<?php include("footer.php"); ?>