<?php include("header.php"); ?>

<?php include("connectdb.php"); ?>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);



	mysqli_set_charset($conn,'UTF8');

	$strid = $_GET["ID"];
	$sql = "DELETE FROM table1
			WHERE id = '".$strid."' ";

	$strid2 = $_GET["ID"];
	$sql2 = "DELETE FROM table2
			WHERE id2 = '".$strid2."' ";
		

	
			

	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);


	if(mysqli_affected_rows($conn)) {
		echo "<table align=center width=500 border=0><tr align=center><br><br><br><br><td><h1>Record delete successfully</h1><br><br><br><a  class= button href = Tablelist.php>กลับไปหน้าตารางแสดงผล</a><br><br><br><br></td></tr></table>";
		 	}

	mysqli_close($conn);
?>



<?php include("footer.php"); ?>