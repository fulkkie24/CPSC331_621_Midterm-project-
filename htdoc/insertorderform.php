<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}?>
<?php $dt = new DateTime(); ?>
<center>

<form action=insertorderprocess.php name=orderform2 method=post >

รหัส order <input name=orderid value=<?php echo $_POST["orderid"]; ?> readonly><br/>
รหัส ลูกค้า  <input name=custid value=<?php echo $_POST["custid"]; ?> readonly><br/>
รหัส พนักงาน <input name=emplid value=<?php echo $_POST["emplid"]; ?> readonly><br/>
รหัส ผู้ส่ง <input name=ship value=<?php echo $_POST["ship"]; ?> readonly><br/>
ว/ด/ป         <input name=datetime value=<?php echo $dt->format('Y/m/d H:i:s'); ?> readonly><br/><br/>

<script type="text/javascript">
function getprice() {  
  var xmlHttp;
  try { xmlHttp=new XMLHttpRequest(); } catch (e) {
  try { xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
  try { xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) { return false; } } }
  xmlHttp.onreadystatechange=function() {
    if(xmlHttp.readyState==4) { document.orderform2.price.value=xmlHttp.responseText; }
  }
  xmlHttp.open("GET","mygetprice.php?proid=" + document.orderform2.proid.value  , true);
  xmlHttp.send(null);
}
</script>
<hr class=pa>
รหัส สินค้า <input name="proid" onkeyup="getprice();" autocomplete="off"  value ="1101"><br/><br/>
จำนวนสินค้า <input name=	"quan" autocomplete="off"  ><br/><br/>
ราคาสินค้า  <input name="price" autocomplete="off"  ><br/><br/>
<input type=submit value=orderdetail_process>
</form></center>
<?php include("footer.php"); ?>