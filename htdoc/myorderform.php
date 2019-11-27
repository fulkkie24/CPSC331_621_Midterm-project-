<?php include("header.php"); ?>

<?php
if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
?>
<center>
<?php
$lastorderid = 1;
if((int)phpversion() >= 7) {
  $connect = new mysqli("sql313.epizy.com", "epiz_24433388", "J6oFOlF1t8bl9YA", "epiz_24433388_fulkkie23");
  $result = $connect->query("select ordid from orders order by ordid desc limit 0,1");  
  if ($result->num_rows > 0) 
    if($row = $result->fetch_assoc()) $lastorderid = $row['ordid'] + 1;
  $connect->close(); 
} else {
  $connect = mysql_connect("sql313.epizy.com","epiz_24433388", "J6oFOlF1t8bl9YA");          
  $result = mysql_db_query("epiz_24433388_fulkkie23","select ordid from orders order by orderid desc limit 0,1");  
  if (mysql_num_rows($result) > 0)
    if ($row = mysql_fetch_object($result)) $lastorderid = $row->orderid + 1;
  mysql_close($connect);  
}
?>
<form action=insertorderform.php method=post>
เลข Order <input name=orderid value="<?php echo $lastorderid; ?>"><br/><br/>
รหัส ลูกค้า <input name=custid autocomplete="off" value ="0101"><br/><br/>
รหัส พนักงาน <input name=emplid autocomplete="off" value ="1001"><br/><br/>
รหัส ผู้ส่ง <input name=ship autocomplete="off" value ="0101"><br/><br/>
<input type=submit value=order_process>
</form>
<?php include("footer.php"); ?>