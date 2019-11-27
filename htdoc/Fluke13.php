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

for($i=1;$i<=5;$i++) {
	for($k=2;$k<=$i;$k++) {
	echo ("&nbsp;&nbsp;");
	}
	for($k=11;$k>=11;$k--){
		echo ($k-$i-$i);
	}
	for($k=10;$k>=6+$i;$k--){
		echo ($k-$i-$i);
	}
	for($k=5;$k>=1+$i;$k--){
		echo ($k-$i);
	}

	echo "<br>";
}

?>
<?php include("footer.php"); ?>