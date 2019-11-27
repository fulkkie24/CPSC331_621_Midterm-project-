<?php include("header.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TABLE  align="center" width="624" height="800" border="1">

<Center><h1> เพิ่มข้อมูลเสร็จสิ้น</h1></Center>
<Center><h2>สิ่งที่คุณเพิ่มไปคือ...</h2></Center>

<?php include("connectdb.php"); ?>
<?php



foreach($_POST as $key => $val) // All Key & Value
{
	echo $key . " : " . $val . "<br>";
}





// Create connection



// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn,'UTF8');



$sql = "INSERT INTO table1 ( user, pass, numh, sex,fullname, phonenum, email,status) 
VALUES ('".$_POST["user"]."','".$_POST["pass"]."','".$_POST["numh"]."','".$_POST["sex"]."','".$_POST["fullname"]."','".$_POST["phonenum"]."','".$_POST["email"]."','1')";
$query = mysqli_query($conn,$sql);

$sql = "INSERT INTO table2 (hno, mu, vilname, road, dist, parish, province,postcode) 
VALUES('".$_POST["hno"]."','".$_POST["mu"]."','".$_POST["vilname"]."','".$_POST["road"]."','".$_POST["district"]."','".$_POST["district"]."','".$_POST["province"]."','".$_POST["postalcode"]."')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
</TABLE>
 <?php include("footer.php"); ?>
