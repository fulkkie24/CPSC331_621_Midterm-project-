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
	echo ($i);
	for($j=1;$j<=(($i*2)-1);$j++)
	{
	echo ("*");
	}
	for($j=1;$j<=(6-$i);$j++)
	{
	echo ($i );
	}
    echo "<br>";
}
?>
<?php include("footer.php"); ?>