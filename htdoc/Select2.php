<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "";
	$dbName = "singup";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "SELECT * FROM table2";
	
	mysqli_set_charset($conn,'UTF8');

	$query = mysqli_query($conn,$sql);
	
?>

<table class="table table-striped" width="800" height="250" align="center" border="2">
<center> <font face = "RSU" ><h1><span class="label label-danger">Table Data Location </span></h1><br></center> 
  <tr  >
    <th width="15"> <div align="center">ID </div></th>
    <th width="100"> <div align="center">บ้านเลขที่</div></th>
    <th width="150"> <div align="center">หมู่ที่ </div></th>
    <th width="200"> <div align="center">ชื่อหมู่บ้าน </div></th>
    <th width="80"> <div align="center">ถนน </div></th>
    <th width="500"> <div align="center">ตำบล</div></th>
	<th width="150"> <div align="center">อำเภอ</div></th>
	<th width="150"> <div align="center">จังหวัด </div></th>
	<th width="50"> <div align="center">รหัส ปณ. </div></th>
	  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr class="pa1">
     <td  align="center"><div align="center"><?php echo $result["ID2"];?></div></td>
    <td  align="center"><?php echo $result["HNO"];?></td>
    <td  align="center"><?php echo $result["MU"];?></td>
    <td  align="center"><div align="center"><?php echo $result["VILNAME"];?></div></td>
    <td  align="center"><?php echo $result["ROAD"];?></td>
    <td  align="center"><?php echo $result["DIST"];?></td>
	<td  align="center"><?php echo $result["PARISH"];?></td>
	<td  align="center"><?php echo $result["PROVINCE"];?></td>
	<td  align="center"><?php echo $result["POSTCODE"];?></td>
	  </tr>

<?php
}
?>

<?php
mysqli_close($conn);
?>
</table>
