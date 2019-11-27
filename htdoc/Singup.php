<?php include("header.php"); ?>
<TABLE  align="center" width="624" height="800" border="1">

<form action="Connsingup.php" method="post" name="SignUp">
<center> <font face = "RSU" ><h1><span class="label label-danger">From SignUp</span></h1><br></center> 

<center><div >
   <br> <label for="user">User</label>
    <br><input type="text" id="user" style="width:50%" name="user" placeholder="Your User.." >

    <br><label for="lname" >Password</label>
    <br><input type="password" id="pass" style="width:50%" name="pass"    placeholder="Your Password.."   >
    <br>
	<br><label for="lname">Number Human 13</label>
    <br><input type="text" id="numh"style="width:50% " name="numh" minlength="13" maxlength="13" onKeyPress="return num_key(event);" onkeyUp="checkID(this.value);" placeholder="Your HumerNumber.." >
	
    <br><label for="lname">Sex</label><br>
   <select id="sex" style="width:50%" name="sex">
     <br> <option value="female">Female</option>
      <br><option value="male">Male</option>
		</select><br>
        
   <br> <label for="lname">Fullname</label>
   <br> <input type="text" id="sullname"style="width:50%" name="fullname" placeholder="Your Namee.." >
	
    <br> <label for="lname">  PhoneNumber</label>
    <br><input type="text" id="phonenum" style="width:50%" name="phonenum" placeholder="Your PhoneNumber.." >
	
		
      <br> <label for="lname">Email</label>
   <br> <input  type="email" style="width:50%" id="email" name="email"  placeholder="Your Email.."  ><br>


	 <br> <label for="lname">บ้านเลขที่</label>
    <br><input type="text" id="hno" style="width:50%" name="hno" placeholder="Your text.." >
	   <br> <label for="lname">หมู่ที่</label>
    <br><input type="text" id="mu" style="width:50%" name="mu" placeholder="Your text.." >
	      <br> <label for="lname">ชื่อหมู่บ้าน</label>
    <br><input type="text" id="vilname" style="width:50%" name="vilname" placeholder="Your text.." >
	   <br> <label for="lname">ถนน</label>
   <br> <input type="text" id="road" style="width:50%" name="road" placeholder="Your text.." >
	    <br><label for="lname">ตำบล</label>
   <br> <input type="text" id="district" style="width:50%" name="district" placeholder="Your text.." >
	    <br><label for="lname">อำเภอ</label>
   <br><input type="text" id="parish"style="width:50%"  name="parishl" placeholder="Your text.." >
	   <br> <label for="lname">จังหวัด</label>
   <br> <input type="text" id="province" style="width:50%" name="province" placeholder="Your text.." >
	    <br><label for="lname">รหัสไปรษณีย์</label>
  <br>  <input type="text" id="postalcode" style="width:50%" name="postalcode" placeholder="Your text.." >
  
	   <br> <input type="submit"  value="Submit">
		</form>
	

</div></div>
</TABLE>

 <?php include("footer.php"); ?>





