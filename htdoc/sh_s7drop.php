<?php include("header.php"); ?>
<?php

//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
?>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
require("sh_s1connect.php");
$sql = "drop database $db";
if((int)phpversion() >= 7) {
	$connect->close();
	$connect = mysqli_connect($host, $uname, $upass);
	if (mysqli_query($connect, $sql)) 
		echo "Drop database : succeeded";
	else 
		echo "Drop database : failed " . mysqli_error($connect);
	$connect->close();
} else {
	if (!$result=mysql_query($sql,$connect))
		echo "Drop database : failed";
	else
		echo "Drop database : succeeded";
	mysql_close($connect);
}
?>
<input type='button' onclick="location.href='index.php'" value='back'>
<?php include("footer.php"); ?>