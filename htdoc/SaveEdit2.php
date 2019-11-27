<?php include("yheader.php"); ?>
<TABLE  align="center" width="624" height="800" border="1">
<?php

	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "asuna55120";
	$dbName = "singup";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn,'UTF8');


$sql2 = "UPDATE table2 SET 
			id2 = '".$_POST["id2"]."' ,
			hno = '".$_POST["hno"]."' ,
			mu = '".$_POST["mu"]."' ,
			vilname = '".$_POST["vilname"]."' ,
			road = '".$_POST["road"]."',
			dist = '".$_POST["dist"]."',
			parish = '".$_POST["parish"]."',
			province = '".$_POST["province"]."',
			postcode = '".$_POST["postcode"]."'
			WHERE id2 = '".$_POST["id2"]."' ";

		$query2 = mysqli_query($conn,$sql2);

	

	if($query2) {
	 echo "Record update successfully";
	}

 ?>

</TABLE>


<?php include("yfooter.php"); ?>