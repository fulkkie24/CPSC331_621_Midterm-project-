<?php include("header.php"); ?>
</TABLE >
<?php


//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 0 )
{
    
	header("location: logout.php");
	exit();
}
?>
<?php /*
	
	if($_SESSION['ID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['STATUS'] != "USER")
	{
		echo "This page for User only!";
		exit();
	}	
	
	mysqli_connect("127.0.0.1","root","");
	mysqli_select_db("singup");
	$strSQL = "SELECT * FROM table1 WHERE ID = '".$_SESSION('ID')."' ";
	$objQuery = mysqli_query($strSQL);
	$objResult = mysqli_fetch_array($objQuery); */
?>

<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

	include("connectdb.php");

	$sql = "SELECT * FROM table1 WHERE ID =".$_SESSION['ID'];
	$sql2 = "SELECT * FROM table2 WHERE ID2 =".$_SESSION['ID'];
	mysqli_set_charset($conn,'UTF8');
	
	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);



	$result=mysqli_fetch_array($query,MYSQLI_ASSOC);

	$result2=mysqli_fetch_array($query2,MYSQLI_ASSOC); 
?>





<hr class="pa" style="width:65%">
<form action="SaveEdit3.php?id=" method="post" name="SingUp">

<center><h1>From User Profile</h1></center>
<center>
<div class="container">
<label for="user">ID Table</label>
	<input type="hidden" style="width:50%" name="id" value="<?php echo $result["ID"];?>"><?php echo $result["ID"];?></td><br>

	<br><label for="lname">Status</label><br><br>
	 <select id="status" style="width:50%" name="status">
	<?php 

	if($result['STATUS'] == '1') {
		echo "<option selected=selected value=1>User</option></select>";
	}
	
	?>
<?php ?>


<div>
   <br><label for="lname">User</label><br><br>
    <input type="text" style="width:50%" name="user" size="20" value="<?php echo $result["USER"];?>">
</div>
    <label for="lname" >Password</label><br><br>
    <input type="text"  style="width:50%" name="pass" size="20" value="<?php echo $result["PASS"];?>">
    <br><br>
    
	<label for="lname">Number Human 13</label><br><br>
    <input type="text" style="width:50%" name="numh" size="2" value="<?php echo $result["NUMH"];?>"><br><br>
	
    <label for="lname">Sex</label><br><br>

    <select id="sex" style="width:50%" name="sex">
	<?php 
	if($result['SEX'] == 'male') {
		echo "<option value=female>Female</option><option selected=selected value=male>Male</option>";
	}
	if($result['SEX'] == 'female') {
		echo "<option selected=selected value=female>Female</option><option  value=male>Male</option>";
	}
	?>
	 </select><br><br><br>
        
    <label for="lname">Fullname</label><br><br>
    <input type="text" style="width:50%" name="fullname" size="5" value="<?php echo $result["FULLNAME"];?>"><br><br>
	
    <label for="lname">PhoneNumber</label><br><br>
    <input type="text" style="width:50%" name="phonenum" size="5" value="<?php echo $result["PHONENUM"];?>"><br><br>
	
    <label for="lname">Email</label><br><br>
    <input type="text" style="width:50%" name="email" size="5" value="<?php echo $result["EMAIL"];?>"><br><br>

	    <label for="lname">บ้านเลขที่</label><br><br>
   <input type="text" style="width:50%" name="hno" size="5" value="<?php echo $result2["HNO"];?>"><br><br>
	    <label for="lname">หมู่ที่</label><br><br>
  <input type="text" style="width:50%" name="mu" size="5" value="<?php echo $result2["MU"];?>"><br><br>
	    <label for="lname">ชื่อหมู่บ้าน</label><br><br>
   <input type="text" style="width:50%" name="vilname" size="5" value="<?php echo $result2["VILNAME"];?>"><br><br>
	    <label for="lname">ถนน</label><br><br>
   <input type="text" style="width:50% " name="road" size="5" value="<?php echo $result2["ROAD"];?>"><br><br>
	    <label for="lname">ตำบล</label><br><br>
    <input type="text" style="width:50%" name="dist" size="5" value="<?php echo $result2["DIST"];?>"><br><br>
	    <label for="lname">อำเภอ</label><br><br>
    <input type="text" style="width:50%" name="parish" size="5" value="<?php echo $result2["PARISH"];?>"><br><br>
	    <label for="lname">จังหวัด</label><br><br>
    <input type="text" style="width:50%" name="province" size="5" value="<?php echo $result2["PROVINCE"];?>"><br><br>
	    <label for="lname">รหัสไปรษณีย์</label><br><br>
    <input type="text" style="width:50%" name="postcode" size="5" value="<?php echo $result2["POSTCODE"];?>"><br><br>
    </tr>
  
	    <input type="submit"  value="Submit">
		</form>


</div></div><hr class="pa" style="width:65%">


 <?php include("footer.php"); ?>





