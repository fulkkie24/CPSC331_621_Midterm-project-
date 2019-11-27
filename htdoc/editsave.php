<?php	session_start();  if(!isset($_SESSION["uch"])){	echo "<CENTER><FONT SIZE=5 COLOR=red>กรุณา Login!</FONT><BR><FONT SIZE=5 color=yelloe ><A HREF=logout.php>กลับหน้า Login</A></FONT></CENTER>"; exit();	} 

	include("connectdb.php");
	$sql = "UPDATE customer SET name = '".$_POST["txtname"]."' , surname = '".$_POST["txtsurname"]."' , type = '".$_POST["txttype"]."', editdate=NOW() WHERE id = '".$_POST["txtid"]."' ";
	$query = mysqli_query($conn,$sql);
	if($query){
	echo "<script type='text/javascript'>";
	echo "alert('Save  Succesfuly');";
	echo "window.location = 'list.php' ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Save again');";
	echo "</script>";
}
	mysqli_close($conn);
?>
