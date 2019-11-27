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

for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=(8-$i);$j++)
	{
	echo ("*");
	}
	echo ($i);
	for($j=1;$j<=($i);$j++)
	{
	echo ("*");
	}
	echo (8-$i);
	echo "<br>";
}

?>
<?php include("footer.php"); ?>