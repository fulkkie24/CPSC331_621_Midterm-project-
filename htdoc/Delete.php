<?php include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

	$strid = $_GET["id"];
	$sql = "DELETE FROM table1
			WHERE id = '".$strid."' ";

	

	$query = mysqli_query($conn,$sql);



	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}

	mysqli_close($conn);
?>



</TABLE>
<?php include("yfooter.php"); ?>