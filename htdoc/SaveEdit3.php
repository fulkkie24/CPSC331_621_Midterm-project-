<?php include("header.php"); ?>
<?php include("connectdb.php"); ?>
<?php

	ini_set('display_errors', 1);
	error_reporting(~0);


	mysqli_set_charset($conn,'UTF8');

$sql = "UPDATE table1 SET 
			user = '".$_POST["user"]."' ,
			pass = '".$_POST["pass"]."' ,
			numh = '".$_POST["numh"]."' ,
			sex = '".$_POST["sex"]."',
			fullname = '".$_POST["fullname"]."',
			phonenum = '".$_POST["phonenum"]."',
			email = '".$_POST["email"]."',
			status = '".$_POST["status"]."'
			WHERE id = '".$_POST["id"]."' ";

$sql2 = "UPDATE table2 SET 
			hno = '".$_POST["hno"]."' ,
			mu = '".$_POST["mu"]."' ,
			vilname = '".$_POST["vilname"]."' ,
			road = '".$_POST["road"]."',
			dist = '".$_POST["dist"]."',
			parish = '".$_POST["parish"]."',
			province = '".$_POST["province"]."',
			postcode = '".$_POST["postcode"]."'
			WHERE id2 = '".$_POST["id"]."' ";

		
			$query = mysqli_query($conn,$sql);
			$query2 = mysqli_query($conn,$sql2);


	

	if($query) {
	
	echo "<table align=center width=500 border=0><tr align=center><br><br><br><br><td><h1>Record update successfully</h1><br><br><br><a  class= button href = ex1.php?ID=id>กลับไปหน้าแรก</a><br><br><br><br></td></tr></table>";
		
		


	}

?>

<?php include("footer.php"); ?>