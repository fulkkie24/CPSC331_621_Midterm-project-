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
	for($k=$i;$k<=10-$i;$k++){
	echo ($k);
	}
	echo "<br>";
}

?>
<?php include("footer.php"); ?>
