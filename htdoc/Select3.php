<!--<Center><h1> <font face = "RSU" >ตารางการข้อมูลใน SingUp</h1></Center></font>-->
<?php include("connectdb.php"); ?>
<?php


//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
?>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$sql = "SELECT * FROM table1";
	$sql2 = "SELECT * FROM table2";
	mysqli_set_charset($conn,'UTF8');

	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);

?>

			
			<table  class="table table-striped"  width="800" height="250" align="center" border="2"><center> <font face = "RSU" >
			<h1><span class="label label-danger">Table  Data  </span></h1><br></center>

<Center>
  <tr >
    <th width="15"> <div align="center">ID </div></th>
    <th width="100"> <div align="center">User</div></th>
    <th width="150"> <div align="center">Pass </div></th>
    <th width="200"> <div align="center">เลข ปชช </div></th>
    <th width="80"> <div align="center">เพศ </div></th>
    <th width="500"> <div align="center">ชื่อ-สกุล </div></th>
	<th width="150"> <div align="center">เบอร์ ทรศ </div></th>
	<th width="150"> <div align="center">อีเมล </div></th>
	<th width="150"> <div align="center">ที่อยู่ </div></th>
	<th width="50"> <div align="center">สถานะ</div></th>
	<th width="50"> <div align="center">รหัส ปณ</div></th>
	<th width="50"> <div align="center">Edit</div></th>
	<th width="50"> <div align="center">Delete</div></th>
  </tr>


			<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<?php
		//echo $_SESSION['ID'];die;
	if ($_SESSION["STATUS"] !="0") {?>

   
	<tr class="pa1">
    <td align="center"><div align="center"><?php echo $result["ID"];?></div></td>
    <td align="center"><?php echo $result["USER"];?></td>
    <td align="center"><?php echo $result["PASS"];?></td>
    <td align="center"><div align="center"><?php echo $result["NUMH"];?></div></td>
    <td align="center"><?php echo $result["SEX"];?></td>
    <td align="center"><?php echo $result["FULLNAME"];?></td>
	<td align="center"><?php echo $result["PHONENUM"];?></td>
	<td align="center"><?php echo $result["EMAIL"];?></td>
<?php
($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC))
?>
	<td align="center"><div align="center">
   บ้านเลขที่ : <?php echo $result2["HNO"];?><br>
   หมู่ที่ : <?php echo $result2["MU"];?><br>
	ชื่อหมู่บ้าน :<?php echo $result2["VILNAME"];?><br>
   ถนน : <?php echo $result2["ROAD"];?><br>
    ตำบล :<?php echo $result2["DIST"];?><br>
	อำเภอ :<?php echo $result2["PARISH"];?><br>
	จังหวัด :<?php echo $result2["PROVINCE"];?><br>

	<td align="center"><?php echo $result["STATUS"];?>

	<td align="center">ไปรษณีย์ :<?php echo $result2["POSTCODE"];?></td></div>

	<td align="center"><a href="JavaScript:if(confirm('Confirm Edit?')==true){window.location='V1.php?id=<?php echo $result["ID"];?>';}">Edit</a></td>
	<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Delete3.php?ID=<?php echo $result["ID"];?>';}">Delete</a></td>
  </tr>
	<?php }?>


<?php
}
?>

<?php
mysqli_close($conn);
?>
</table>