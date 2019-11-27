<?php 
include("header.php"); ?>

<form action="CheckLog.php" method="post" name="test">
<center> <font face = "RSU" ><h1><span class="label label-danger">From LOGING</span></h1><br></center> 

<div ><center>
	
	<br> <label for="user">User</label>
    <br><input type="text" id="user" name="user" placeholder="Your User.." style="width:40%" > <br>
	<br><label for="pass">Password</label>
    <br><input type="Password" id="pass" name="pass"   placeholder="Your Pass.." style="width:40%" >
	
	<BR><BR><BR><input type="submit"  value="Login">
  </form>
</div>
<?php include("footer.php"); ?>
