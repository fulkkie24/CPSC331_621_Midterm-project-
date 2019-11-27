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
	for($j=5;$j>=(($i*2)-$i);$j--)
	{
	echo ($i);
	}
	for($j=5;$j>=(6-$i);$j--)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>