<?php include("header.php"); ?>

<form action=cate_s4insert.php>
<input name=cateid value=>
<input name=cname value=>
<input name=con value=>
<input type=submit value=cate_s4insert.php>
</form>
<?php

if (!isset($_GET['cateid']) || !isset($_GET['comname'])) exit;
require("cate_s1connect.php");
$sql="insert into $tb values('".$_GET['cateid']."','".$_GET['cname']."','".$_GET['con']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
<?php include("footer.php"); ?>