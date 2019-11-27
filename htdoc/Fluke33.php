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

for($i=1;$i<=4;$i++){
for($j=$i;$j<=4+1;$j++){
 echo ("&nbsp;&nbsp;");
}
for($j=1;$j<=$i*2-1;$j++){
echo ("*");
}
echo "<br>";
}
for($i=1;$i<4;$i++){
for($j=1;$j<=$i+2;$j++){
 echo ("&nbsp;&nbsp;");
}
for($j=$i;$j<=(4-1)*2-$i;$j++){
echo ("*");
}
echo "<br>";
}
?>
<?php include("footer.php"); ?>