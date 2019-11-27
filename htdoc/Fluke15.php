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

for($i=5;$i>=1;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
	echo (6-$i);
	}
	for($j=1;$j<=(6-$i);$j++)
	{
	echo ("&nbsp;&nbsp;&nbsp;");
	}
	for($j=1;$j<=$i;$j++)
	{
	echo (6-$i);
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>