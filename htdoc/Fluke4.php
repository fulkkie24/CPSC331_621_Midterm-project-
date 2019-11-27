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

for($i=1;$i<=4;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo ("*");
	}
	for($j=$i;$j>=2;$j--)
	{
		echo ($j);
	}
	for($j=1;$j<=$i;$j++)
	{
		echo ($j);
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>