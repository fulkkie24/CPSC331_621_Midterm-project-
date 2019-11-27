
<Center><h1> <font face = "RSU" >ตารางการข้อมูลใน SingUp</h1></Center></font>

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "";
	$dbName = "singup";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "SELECT * FROM table1";
	
	mysqli_set_charset($conn,'UTF8');

	$query = mysqli_query($conn,$sql);
	

?>
<table  class="table table-striped"  width="800" height="250" align="center" border="2">
<center> <font face = "RSU" ><h1><span class="label label-danger">Table  Data All User </span></h1><br></center> 
  <tr  >
    <th width="15"> <div align="center">ID </div></th>
    <th width="100"> <div align="center">User</div></th>
    <th width="150"> <div align="center">Pass </div></th>
    <th width="200"> <div align="center">เลข ปชช </div></th>
    <th width="80"> <div align="center">เพศ </div></th>
    <th width="500"> <div align="center">ชื่อ-สกุล </div></th>
	<th width="150"> <div align="center">เบอร์ ทรศ </div></th>
	<th width="150"> <div align="center">อีเมล </div></th>
	<th width="150"> <div align="center">สถานะ </div></th>
	<th width="50"> <div align="center">Edit</div></th>
	<th width="50"> <div align="center">Delete</div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr class="pa1">
    <td align="center"><div align="center"><?php echo $result["ID"];?></div></td>
    <td align="center"><?php echo $result["USER"];?></td>
    <td align="center"><?php echo $result["PASS"];?></td>
    <td align="center"><div align="center"><?php echo $result["NUMH"];?></div></td>
    <td align="center"><?php echo $result["SEX"];?></td>
    <td align="center"><?php echo $result["FULLNAME"];?></td>
	<td align="center"><?php echo $result["PHONENUM"];?></td>
	<td align="center"><?php echo $result["EMAIL"];?></td>
	<td align="center"><?php echo $result["STATUS"];?></td>
	<td align="center"><a href="JavaScript:if(confirm('Confirm Edit?')==true){window.location='V1.php?id=<?php echo $result["ID"];?>';}">Edit</a></td>
	<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Delete3.php?ID=<?php echo $result["ID"];?>';}">Delete</a></td>
  </tr>

<?php
}
?>

<?php
mysqli_close($conn);
?>
</table>