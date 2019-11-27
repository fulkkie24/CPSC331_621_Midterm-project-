<?php	include("yheader.php"); ?>
<?php if(!isset($_SESSION["uch"])){	echo "<CENTER><FONT SIZE=5 COLOR=red>กรุณา Login!</FONT><BR><FONT SIZE=5 color=yelloe ><A HREF=logout.php>กลับหน้า Login</A></FONT></CENTER>"; exit();	}  ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
ini_set('display_errors', 1);
error_reporting(~0);

include("connectdb.php");

   $strid = null;

   if(isset($_GET["id"]))
   {
	   $strid = $_GET["id"];
   }
  
   $sql = "SELECT * FROM customer WHERE id = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<form action="editsave.php" name="frmAdd" method="post">
<table width="284" border="1">
  <tr>
    <th width="120">id</th>
    <td width="238"><input type="hidden" name="txtid" value="<?php echo $result["id"];?>"><?php echo $result["id"];?></td>
    </tr>
  <tr>
    <th width="120">name</th>
    <td><input type="text" name="txtname" size="20" value="<?php echo $result["name"];?>"></td>
    </tr>
  <tr>
    <th width="120">surname</th>
    <td><input type="text" name="txtsurname" size="20" value="<?php echo $result["surname"];?>"></td>
    </tr>
		 <tr>
	    <th width="120">Username</th>
    <td><input type="text" name="uname" size="20" value="<?php echo $result["uname"];?>"></td>
    </tr>
		 <tr>
	    <th width="120">Password</th>
    <td><input type="text" name="upass" size="20" value="<?php echo $result["upass"];?>"></td>
    </tr>
		  <tr>
    <th width="120">Type</th>
    <td>
<select  class="form-control" name="txttype" >
<option value="<?php echo $result["type"];?>"><?php if($result["type"]==1){ echo "user1"; }else if($result["type"]==2){ echo "user2"; }else{ echo "admin"; }?></option>
<option value="1">- user1 -</option>
<option value="2">- user2 -</option>
<option value="3">- admin -</option>
</select>

</td>
    </tr>
    </table>
  <input type="submit" name="submit" value="submit">
</form>
<?php
mysqli_close($conn);
?>

<?php include("yfooter.php"); ?>