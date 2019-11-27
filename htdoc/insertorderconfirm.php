<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}?>
<?php 
if((int)phpversion() >= 7) {
   $connect = new mysqli("sql313.epizy.com", "epiz_24433388", "J6oFOlF1t8bl9YA", "epiz_24433388_fulkkie23");
} else {
   $connect = mysql_connect("sql313.epizy.com","epiz_24433388", "J6oFOlF1t8bl9YA");     
}
$sql = "insert into orders select * from myorders_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
$sql = "insert into orderdetails select * from myorderdetails_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
$sql = "delete from myorders_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
$sql = "delete from myorderdetails_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
if((int)phpversion() >= 7) $connect->close(); else $r = mysql_close($connect);
?>
<br/><a href=myorderform.php>new orderid</a>
<?php include("footer.php"); ?>