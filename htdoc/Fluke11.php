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
	for($j=1;$j<=(5-$i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($i);
	for($j=2;$j<=$i;$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($i);
	echo "<br>";
}


?>
<?php include("footer.php"); ?>
