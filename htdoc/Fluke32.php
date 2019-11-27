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
	for($j=7;$j>=(6-$i);$j--)
	{
	echo (8-$j);
	}
	for($j=7;$j>=($i);$j--)
	{
	echo("*");
	}
	echo(8-$i);
	echo "<br>";
}
?>
<?php include("footer.php"); ?>