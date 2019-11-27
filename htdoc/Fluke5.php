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
	for($j=1;$j<=(4-$i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($i);
	for($j=2;$j<=$i;$j++)
	{
	echo ("**");
	}
	echo ($i);
	echo "<br>";
}
for($i=3;$i>=1;$i--)
{
	for($j=1;$j<=(4-$i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo($i);
	for($j=2;$j<=$i;$j++)
	{
	echo ("**");
	}
	echo ($i);
	echo "<br>";
}
?>
<?php include("footer.php"); ?>