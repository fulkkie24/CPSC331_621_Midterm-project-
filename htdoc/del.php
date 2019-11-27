<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include("connectdb.php");

	$sql = "UPDATE customer SET status = '0' WHERE id = '".$_GET["id"]."' ";
	$query = mysqli_query($conn,$sql);

	if($query){
	echo "<script type='text/javascript'>";
	echo "alert('Delete  Succesfuly');";
	echo "window.location = 'index.php' ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Delete again');";
	echo "</script>";
}

	mysqli_close($conn);
?>
