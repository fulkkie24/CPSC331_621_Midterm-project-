<?php include("header.php"); ?>
<?php

$myForm = '<body>
<form action="ord_s5delete.php">
<input name="delid" value=".....">
<input type="submit" value="ord_s5delete.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("ord_s1connect.php");
$sql="delete from $tb ";
$sql.="where ordid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location:index.php");
	mysql_close($connect);
}
?>
<?php include("footer.php"); ?>