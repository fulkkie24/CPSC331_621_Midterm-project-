<?php include("header.php"); ?>
<?php include("connectdb.php"); ?>
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);



	$sql = "SELECT * FROM table1 WHERE id=".$_GET['id'];
	$sql2 = "SELECT * FROM table2 WHERE id2=".$_GET['id'];
	mysqli_set_charset($conn,'UTF8');
	
	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);



 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

   $result2=mysqli_fetch_array($query2,MYSQLI_ASSOC);
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<TABLE  align="center" width="624" height="800" border="1">

<form action="SaveEdit3.php?id=" method="post" name="SingUp">

<center><h1>From SingUp Edit</h1></center>

<div class="container">
<label for="user">ID Table</label>
	<input type="hidden" name="id" value="<?php echo $result["ID"];?>"><?php echo $result["ID"];?></td><br>

	<br><label for="lname">Status</label>
	 <select id="status" name="status">
	<?php 
	if($result['STATUS'] == '1') {
		echo "<option value=2>Admin</option><option selected=selected value=1>User</option>";
	}
	if($result['STATUS'] == '2') {
		echo "<option selected=selected value=2>Admin</option><option  value=1>User</option>";
	}
	?>
	 </select><br>

      <br><label for="user">User</label>
    <input type="text" name="user" size="20" value="<?php echo $result["USER"];?>">

    <label for="lname" >Password</label><br><br>
    <input type="text" name="pass" size="20" value="<?php echo $result["PASS"];?>">
    <br><br>
    
	<label for="lname">Number Human 13</label>
    <input type="text" name="numh" size="2" value="<?php echo $result["NUMH"];?>">
	
    <label for="lname">Sex</label>


    <select id="sex" name="sex">
	<?php 
	if($result['SEX'] == 'male') {
		echo "<option value=female>Female</option><option selected=selected value=male>Male</option>";
	}
	if($result['SEX'] == 'female') {
		echo "<option selected=selected value=female>Female</option><option  value=male>Male</option>";
	}
	?>
	 </select><br>
        
    <label for="lname">Fullname</label>
    <input type="text" name="fullname" size="5" value="<?php echo $result["FULLNAME"];?>">
	
    <label for="lname">PhoneNumber</label>
    <input type="text" name="phonenum" size="5" value="<?php echo $result["PHONENUM"];?>"><br><br>
	
    <label for="lname">Email</label>
    <input type="text" name="email" size="5" value="<?php echo $result["EMAIL"];?>"><br><br>

	    <label for="lname">บ้านเลขที่</label>
   <input type="text" name="hno" size="5" value="<?php echo $result2["HNO"];?>">
	    <label for="lname">หมู่ที่</label>
  <input type="text" name="mu" size="5" value="<?php echo $result2["MU"];?>">
	    <label for="lname">ชื่อหมู่บ้าน</label>
   <input type="text" name="vilname" size="5" value="<?php echo $result2["VILNAME"];?>">
	    <label for="lname">ถนน</label>
   <input type="text" name="road" size="5" value="<?php echo $result2["ROAD"];?>">
	    <label for="lname">ตำบล</label>
    <input type="text" name="dist" size="5" value="<?php echo $result2["DIST"];?>">
	    <label for="lname">อำเภอ</label>
    <input type="text" name="parish" size="5" value="<?php echo $result2["PARISH"];?>">
	    <label for="lname">จังหวัด</label>
    <input type="text" name="province" size="5" value="<?php echo $result2["PROVINCE"];?>">
	    <label for="lname">รหัสไปรษณีย์</label>
    <input type="text" name="postcode" size="5" value="<?php echo $result2["POSTCODE"];?>">
    </tr>
  
	    <input type="submit"  value="Submit">
		</form>
	</form>

</div></div>
</TABLE>

 <?php include("footer.php"); ?>





