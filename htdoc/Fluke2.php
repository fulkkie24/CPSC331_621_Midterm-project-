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
	for($j=$i;$j<=$i;$j++)
	{
	echo($i);
	echo($i+1);
	echo($i+2);
	}
	for($j=1;$j<=$i+2;$j++)
	{
	echo("*");
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>