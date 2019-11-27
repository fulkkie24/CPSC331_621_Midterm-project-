<?php
session_start();

//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
$host     = "sql313.epizy.com";
$db       = "epiz_24433388_fulkkie23";  
$tb       = "orderdetails"; 
$user     = "epiz_24433388"; 
$password = "J6oFOlF1t8bl9YA";    
$create_table_sql = "create table Orderdetails (orderid char(4),productid char(40),unitprice char(40),quantity char(40),discount char(40))";

Connc();




function Connc() {
	global $host,$db,$tb,$user,$password,$create_table_sql;
if (isset($_REQUEST{'action'})) $act = $_REQUEST{'action'}; else $act = "";
if (strlen($act) == 0 || $act == "del" || $act == "edit") {
  $conn = new mysqli($host, $user, $password, $db);
  if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
  $r = $conn->query("select * from $tb");
  if(!$r) { die("no result<br/>".$create_table_sql); } //   if($r->num_rows == 0) { die("no result"); } 
  echo "<table>";
  while ($o = $r->fetch_object()) {
    if (isset($_REQUEST{'id'}) && $_REQUEST{'id'}  == $o->orderid) $chg = " style='background-color:#f9f9f9"; else $chg = " readonly style='background-color:#ffffdd";
    echo "<tr><form action='' method=post>
      <td><input name=id size=5 value='".	$o->orderid . "' style='background-color:#dddddd' readonly></td>
      <td><input name=a size=40 value='". $o->productid . "' $chg'></td>
      <td><input name=b size=20 value='". $o->unitprice . "' $chg;text-align:right'></td>
	  <td><input name=c size=20 value='". $o->quantity . "' $chg;text-align:right'></td>
	  <td><input name=d size=20 value='". $o->discount . "' $chg;text-align:right'></td>
      <td>";
    if (isset($_REQUEST{'id'}) && $_REQUEST{'id'} == $o->orderid) {
      if ($act == "del") echo "<input type=submit name=action value='del : confirm' style='height:40;background-color:yellow'>";
      if ($act == "edit") echo "<input type=submit name=action value='edit : confirm' style='height:40;background-color:#aaffaa'>";
    } else {
      echo "<input type=submit name=action value='del' style='height:26'> <input type=submit name=action value='edit' style='height:26'>";
    }
    echo "</td></form></tr>";
  }	
  echo "<tr><form action='' method=post><td><input name=id size=5></td><td><input name=a size=40></td><td><input name=b size=20></td><td><input name=c size=20></td></td><td><input name=d size=20></td><td><input type=submit name=action value='add' style='height:26'></td><td><button type='submit' formaction='index.php'>Click Back</button></td></tr>
  </form></table>";
  if (isset($_SESSION["msg"])) echo "<br>".$_SESSION["msg"];
  $_SESSION["msg"] = ""; 
  exit;
} 

if ($act == "add") {
    checknum($_REQUEST{'c'});
    checkid($_REQUEST{'a'},"Insert");
  $q  = "insert into $tb values('". $_REQUEST{'id'} . "','". $_REQUEST{'a'} . "','". $_REQUEST{'b'} . "','". $_REQUEST{'c'} . "','". $_REQUEST{'d'} . "')";
  $conn = new mysqli($host, $user, $password, $db);
  $r = $conn->query($q);
  if ($r) $_SESSION["msg"] = "insert : completely";
  $conn->close();
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}

if ($act == "del : confirm") {
    checkid($_REQUEST{'c'},"Insert");
  $q  = "delete from $tb where orderid ='". $_REQUEST{'id'} . "'";
  $conn = new mysqli($host, $user, $password, $db);
  $r = $conn->query($q);
  if ($r) $_SESSION["msg"] = "delete : completely";
  $conn->close();
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}

if ($act == "edit : confirm") {
    checknum($_REQUEST{'c'});
  $q  = "update $tb set productid ='". $_REQUEST{'a'} . "', unitprice ='". $_REQUEST{'b'} . "', quantity ='". $_REQUEST{'c'} . "', discount ='". $_REQUEST{'d'} . "' where orderid =" . $_REQUEST{'id'};
  $conn = new mysqli($host, $user, $password, $db);
  $r = $conn->query($q);
  if ($r) $_SESSION["msg"] = "edit : completely";
  $conn->close();
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}
}

function checknum($num){
  	if ($num < 1 || $num > 100) {
	echo "<meta http-equiv=refresh content='3;url=".$_SERVER["SCRIPT_NAME"]."'>";
	echo "Can not input $num จะกลับไปหน้าเดิมใน 3วิ";
	exit;
}
}


function checkid($id,$msg){
	$sql = ("select * from productstest where PID ='".$id."' ");
	$conn = new mysqli("sql313.epizy.com", "epiz_24433388", "J6oFOlF1t8bl9YA", "epiz_24433388_fulkkie23");
	$r = $conn -> query($sql);
	echo "<table>";
	if ($obj = $r->fetch_object()) {
	echo "<meta http-equiv=refresh content='3;url=".$_SERVER["SCRIPT_NAME"]."'>";
	echo $obj->PID.": Can not $msg จะกลับไปหน้าเดิมใน 3วิ";
	exit;
}
}
?>