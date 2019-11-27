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
	echo($i);
	echo("*");
	echo(($i*2)-1);
	echo("*");
	echo($i*2);
	echo "<br>";
}
?>
<?php include("footer.php"); ?>
