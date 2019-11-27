<?php include("yheader.php"); ?>
<TABLE  align="center" width="624" height="800" border="1">
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "asuna55120";
	$dbName = "singup";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn,'UTF8');

$sql = "UPDATE table1 SET 
			id = '".$_POST["id"]."' ,
			user = '".$_POST["user"]."' ,
			pass = '".$_POST["pass"]."' ,
			numh = '".$_POST["numh"]."' ,
			sex = '".$_POST["sex"]."',
			fullname = '".$_POST["fullname"]."',
			phonenum = '".$_POST["phonenum"]."',
			email = '".$_POST["email"]."'
			WHERE id = '".$_POST["id"]."' ";

			$query = mysqli_query($conn,$sql);

	

	if($query) {
	 echo "Record update successfully";

	}

?>
</table>
<?php include("yfooter.php"); ?>

