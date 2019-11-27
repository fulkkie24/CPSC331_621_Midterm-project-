<?php include("header.php"); ?>
<?php 
if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
if((int)phpversion() >= 7) {
 $connect = new mysqli("sql313.epizy.com", "epiz_24433388", "J6oFOlF1t8bl9YA", "epiz_24433388_fulkkie23");
} else {
$connect = mysql_connect("sql313.epizy.com","epiz_24433388", "J6oFOlF1t8bl9YA");    
}
if(isset($_POST["custid"])) {
$sql = "insert into myorders_temp values (" .
$_POST["orderid"] . "," .
$_POST["custid"] . "," .
$_POST["emplid"] . "," .
$_POST["datetime"] . ",'" .
$_POST["ship"] . "')";
if((int)phpversion() >= 7) {
  $result = $connect->query($sql);
} else {
  $result = mysql_db_query("epiz_24433388_fulkkie23",$sql);
}
if($result === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
}
echo "<br/>";
$sql = "insert into myorderdetails_temp values (" .
//$_POST["orderid"] . "," .
//$_POST["proid"] . "," .
//$_POST["quan"] . "," .
//$_POST["price"] . ",0"
//$_POST["discount"] . ")";

$_POST["orderid"] . "," .
$_POST["proid"] . "," .
$_POST["quan"] . "," .
$_POST["price"] . "," .'0'.")";

if((int)phpversion() >= 7) {
  $result = $connect->query($sql);  
} else {
  $result = mysql_db_query("epiz_24433388_fulkkie23",$sql);  
}
if($result === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
if((int)phpversion() >= 7) {
  $result = $connect->query("select * from productstest where PID = " . $_POST["proid"]); 
} else {
  $result = mysql_db_query("epiz_24433388_fulkkie23","select * from productstest where PID = " . $_POST["proid"]);  
}
if((int)phpversion() >= 7) {
  if ($result->num_rows > 0 && $row = $result->fetch_assoc()) { 
    $quan= $row["QPU"]; 
    $sql="update	 productstest set QPU =".($quan - $_POST["quan"]) ." where PID =".$_POST["proid"]; 
    $result_pro = $connect->query($sql);

  }
} else {
  if (mysql_num_rows($result) > 0 && $row = mysql_fetch_assoc($result)) { 
    $quan = $row["QPU"]; 
    $sql="update productstest set QPU=".($quan - $_POST["quan"]) ." where PID =".$_POST["proid"]; 
    $result_pro = mysql_db_query("epiz_24433388_fulkkie23",$sql);  
	;
  }
}  
if($result === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
?>
<script type="text/javascript">
function getprice() {  
  var xmlHttp;
  try { xmlHttp=new XMLHttpRequest(); } catch (e) {
  try { xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
  try { xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) { return false; } } }
  xmlHttp.onreadystatechange=function() {
    if(xmlHttp.readyState==4) { document.orderform.price.value=xmlHttp.responseText; }
  }
  xmlHttp.open("GET","mygetprice.php?proid=" + document.orderform.proid.value  , true);
  xmlHttp.send(null);
}
</script>
<hr class='pa' ><br/>
<form name=orderform action=insertorderprocess.php method=post>
หมายเลข Order		<input name=orderid value=<?php echo $_POST["orderid"]; ?> readonly>
วันเวลา ณ ปัจจุบัน		<input name=datetime value=<?php echo date('Y/m/d H:i:s'); ?> readonly><br/>
รหัส สินค้า					<input name=proid onkeyup="getprice();" autocomplete="off" value ="1101"><br/>
ราคาส่วนลด				<input name= discount  value ="รอปรับปรุงระบบ" style="background-color:#dddddd;"><br/>
จำนวนสินค้าที่ต้องการซื้อ <input name=quan autocomplete="off" value ="1"><br/><!-- allows the browser to predict the value -->
ราคาสินค้า						<input name=price readonly style="background-color:#dddddd;"><br/>
									<input type=submit value=orderdetail_process>
</form>
<?php
echo "<hr class='pa' ><center>";
if((int)phpversion() >= 7) {
  $result = $connect->query("select * from myorderdetails_temp");
 // echo $result->num_rows . "<ol>";
 $i =1;
  if ($result->num_rows > 0) {
    $sum = 0;  
    while($row = $result->fetch_assoc()) {
      $sum += ($row['quantity'] * $row['unitprice']);  
      echo  " <li> ลำดับที่ $i 	[productid = " . $row['productid'] . " ] ".  $row['quantity'] .  " * " . 
      $row['unitprice'] . " = " . ($row['quantity'] * $row['unitprice']) . "</li>";
	  $i++;
    } 
  }
  $connect->close();   
} else {
  $result = mysql_db_query("epiz_24433388_fulkkie23","select * from myorderdetails_temp");
  echo mysql_num_rows($result) . "<ol>";
  if (mysql_num_rows($result) > 0) {
    $sum = 0;   
    while($row = mysql_fetch_assoc($result)) {
      $sum += ($row['quantity'] * $row['unitprice']);     
      echo  "<li> [productid = " . $row['productid'] . " ] ".  $row['quantity'] .  " * " . 
      $row['unitprice'] . " = " . ($row['quantity'] * $row['unitprice']) . "</li>";
    } 
  }
  mysql_close($connect);  
}

echo "<br/>sum = $sum</ol>";
echo "<hr class='pa' ><a href=insertorderconfirm.php>confirm this order and save</a>" ;
echo "<br/><a href=myorderform.php>back</a>" ;
?>
<?php include("footer.php"); ?>