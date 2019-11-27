<?php include("header.php"); ?>
<?php


//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<TABLE  align="center" width="624" height="800" border="1">

<!--<?php include("Select.php"); ?>

<?php include("Select2.php"); ?>
<br><br><br><br> -->
<Center><h1> <font face = "RSU" >ตารางการข้อมูลใน SingUp</h1></Center></font>
<center> <font face = "RSU" ><h1><span class="label label-danger">Table  Data All User </span></h1><br></center> 

<center><div class="well">
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" >Show</button>     
  <div id="demo" class="collapse"><br>

<?php include("Select3.php"); ?>

</div></div>

<?php include("footer.php"); ?>