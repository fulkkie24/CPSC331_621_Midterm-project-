<?php 	session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> KuHug NarkAel </TITLE>

<style>
h1 {
  color: yellow;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}




.circle{ 
height: 250;  width: 250; border: 1px solid #F0F8FF; border-radius: 50%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); }
footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

	.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 8px 8px;
  cursor: pointer;
}

hr.pa {
  border-top: 3px dashed red;
}
input.sao{

	width: 60%;
}

tr.pa1 {
  border-top: 2px dashed blue;
}

table.pa2 {
  border: 3.5px dashed blue;
  
}



	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:#FA8072;
  color: white;
  padding: 12px 30px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
ul {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #1bc2a2;
}

ul li {
  display: block;
  position: relative;
  float: left;
  background: #1bc2a2;
}

/* This hides the dropdowns */


li ul { display: none; }

ul li a {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}

ul li a:hover { background: #2c3e50; }

/* Display the dropdown */


li:hover > ul {
  display: block;
  position: absolute;
}

li:hover li { float: none; }

li:hover a { background: #1bc2a2; }

li:hover li a:hover { background: #2c3e50; }

.main-navigation li ul li { border-top: 0; }

/* Displays second level dropdowns to the right of the first level dropdown */


ul ul ul {
  left: 100%;
  top: 0;
}

/* Simple clearfix */



ul:before,
ul:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}

ul:after { clear: both; }
</style>

<script>
 function num_key(evt){
	var iKeyCode;
	if(window.event){ // IE
		iKeyCode = evt.keyCode	
	}
	else if(evt.which){ // Netscape/Firefox/Opera
		iKeyCode = evt.which
	}

	if ((iKeyCode >= 48 && iKeyCode <= 57) || iKeyCode == 8 || iKeyCode == 46){  // 8 Backapace , 46 Delete
	return true;
	}
	else{
	return false;
	}
}

function checkID(id) { 
		if (id.length == 13){
			for(i=0, sum=0; i < 12; i++){
			sum += parseFloat(id.charAt(i))*(13-i); 
			}
			if ((11-sum%11)%10!=parseFloat(id.charAt(12))){
			alert('รหัสบัตรประชาชนไม่ถูกต้อง');
			document.getElementById("sp_result");
			}
			else {
			document.getElementById("sp_result");
			}
		}
}

</script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="css/S1.css">
   <link rel="stylesheet" href="css/stylesheet.css">
  
	<link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery.js"></script>
  
     <script src="js/bootstrap.min.js"></script>

</HEAD>
<center><body style="background-color:hsla(9, 100%, 64%, 0.1);"">

<TABLE   align="center" width="1024" border="0">
<TR>
	<TD colspan="3" align="center" >
	<IMG SRC="image/headerv1.jpg" WIDTH="1024" HEIGHT="160" BORDER="0" ALT="Header" style="border: 4px solid white;"></TD>
</TR>

<TR>
	<TD colspan="3"  >

<nav class="navbar navbar-inverse" style="background-color:white ; border: 4px solid white;" >
  <div class="container-fluid"  >
    <div class="navbar-header"  ></div>
        <ul class="nav nav-tabs">
        <!-- <li ><a href="index2.php">Home</a></li></font >
        <li><a href="profile.php">Profile</a></li>
        <li><a href="ex.php#">แนะนำกิจกรรมดีๆ</a></li>
        <li><a href="ex1.php">แนะนำสถานที่เที่ยว</a></li>
		<li><a href="Singup.php">SING UP</a></li>
		<li><a  href="Tablelist.php">TABLE LIST</a></li>
		<li><a  href="index.html">INTRO</a></li>
		<li><a  href="login.php">LOGING</a></li> -->


	
			<?php
		
			if (@$_SESSION["STATUS"] =="2") {?>
			
			
			<li><a  href="index.php"><font face = "RSU" >Home</a></li></font>
			<li><a href="ex.php"><font face = "RSU" >แนะนำกิจกรรมดีๆ</a></li></font>
			<li><a href="ex1.php"><font face = "RSU" >แนะนำสถานที่เที่ยว</a></li></font>
			<li><a href="profile.php"><font face = "RSU" >Profile BS</a></li></font>
			  <li><a ><font face = "RSU" >ผลงานเขียนโปรแกรม</a></font>
              


			 <ul> <li><a ><font face = "RSU" >JS</a></font>
             <ul><li><a href="jslibary.php"><font face = "RSU" >JS Librarise</a></font>
            </ul>

             <li><a ><font face = "RSU" >Inber Join && Grop By </a></font>
             <ul><li><a href="select19.php?t=1"><font face = "RSU" >Inber Join && Grop By</a></li></font>
            </ul></li>

            <li><a ><font face = "RSU" >IF Else </a></font>
            <ul><li><a href="if2.php"><font face = "RSU" >If employees</a></li></font>
            <li><a href="if3.php"><font face = "RSU" >If orderdetails</a></li></font>
            <li><a href="if4.php"><font face = "RSU" >If productstest</a></li></font>
            </ul></li>

             <li><a ><font face = "RSU" >Pyramid 1-36</a></font>
            <ul><li><a href="#"><font face = "RSU" >1-10</a></font>
        <ul>
          <li><a href="Fluke1.php"><font face = "RSU" >1</a></li></font>
          <li><a href="Fluke2.php"><font face = "RSU" >2</a></li></font>
          <li><a href="Fluke3.php"><font face = "RSU" >3</a></li></font>
		      <li><a href="Fluke4.php"><font face = "RSU" >4</a></li></font>
          <li><a href="Fluke5.php"><font face = "RSU" >5</a></li></font>
		      <li><a href="Fluke6.php"><font face = "RSU" >6</a></li></font>
          <li><a href="Fluke7.php"><font face = "RSU" >7</a></li></font>
          <li><a href="Fluke8.php"><font face = "RSU" >8</a></li></font>
		      <li><a href="Fluke9.php"><font face = "RSU" >9</a></li></font>
          <li><a href="Fluke10.php"><font face = "RSU" >10</a></li></font>
        </ul>


		<li><a href="#"><font face = "RSU" >11-20</a></font>
        <ul>
          <li><a href="Fluke11.php"><font face = "RSU" >11</a></li></font>
          <li><a href="Fluke12.php"><font face = "RSU" >12</a></li></font>
          <li><a href="Fluke13.php"><font face = "RSU" >13</a></li></font>
		  <li><a href="Fluke14.php"><font face = "RSU" >14</a></li></font>
          <li><a href="Fluke15.php"><font face = "RSU" >15</a></li></font>
		  <li><a href="Fluke16.php"><font face = "RSU" >16</a></li></font>
          <li><a href="Fluke17.php"><font face = "RSU" >17</a></li></font>
          <li><a href="Fluke18.php"><font face = "RSU" >18</a></li></font>
		  <li><a href="Fluke19.php"><font face = "RSU" >19</a></li></font>
          <li><a href="Fluke20.php"><font face = "RSU" >20</a></li></font>
        </ul>

		<li><a href="#"><font face = "RSU" >21-30</a></font>
        <ul>
           <li><a href="Fluke21.php"><font face = "RSU" >21</a></li></font>
          <li><a href="Fluke22.php"><font face = "RSU" >22</a></li></font>
          <li><a href="Fluke23.php"><font face = "RSU" >23</a></li></font>
		  <li><a href="Fluke24.php"><font face = "RSU" >24</a></li></font>
          <li><a href="Fluke25.php"><font face = "RSU" >25</a></li></font>
		  <li><a href="Fluke26.php"><font face = "RSU" >26</a></li></font>
          <li><a href="Fluke27.php"><font face = "RSU" >27</a></li></font>
          <li><a href="Fluke28.php"><font face = "RSU" >28</a></li></font>
		  <li><a href="Fluke29.php"><font face = "RSU" >29</a></li></font>
          <li><a href="Fluke30.php"><font face = "RSU" >30</a></li></font>
        </ul>

		<li><a href="#"><font face = "RSU" >31-36</a></font>
        <ul>
            <li><a href="Fluke31.php"><font face = "RSU" >31</a></li></font>
          <li><a href="Fluke32.php"><font face = "RSU" >32</a></li></font>
          <li><a href="Fluke33.php"><font face = "RSU" >33</a></li></font>
		  <li><a href="Fluke34.php"><font face = "RSU" >34</a></li></font>
          <li><a href="Fluke35.php"><font face = "RSU" >35</a></li></font>
		  <li><a href="Fluke36.php"><font face = "RSU" >36</a></li></font>
        </ul> 
        </ul></ul>

			 <li><a ><font face = "RSU" >NorthWind Code</a></font>

			 <ul> <li><a ><font face = "RSU" >Categories</a></font>
        <ul>
          <li><a href="cate_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="cateall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="cate_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		  <li><a ><font face = "RSU" >Customers</a></font>
       <ul>
          <li><a href="cus_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="cusall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="cus_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		<li><a ><font face = "RSU" >Employees</a></font>
       <ul>
          <li><a href="emp_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="empall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="emp_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		<li><a ><font face = "RSU" >Orders</a></font>
       <ul>
          <li><a href="ord_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="ordsall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="ord_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		<li><a ><font face = "RSU" >OrderdeTails</a></font>
       <ul>
          <li><a href="orde_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="ordeall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="orde_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		<li><a ><font face = "RSU" >Products</a></font>
       <ul>
          <li><a href="pro_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="proall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="pro_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		<li><a ><font face = "RSU" >Supliers</a></font>
       <ul>
          <li><a href="sup_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="supall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="sup_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

		<li><a ><font face = "RSU" >Shippers</a></font>
       <ul>
          <li><a href="sh_s2crtdb.php"><font face = "RSU" >CreateDB</a></li></font>
          <li><a href="shall7.php"><font face = "RSU" >Select/Insert/Delete/Update</a></li></font>
		  <li><a href="sh_s7drop.php"><font face = "RSU" >Drop</a></li></font>
		</ul>

        <li><a ><font face = "RSU" >Sales</a></font>
       <ul>
          <li><a href="myorderform.php"><font face = "RSU" >ระบบซื้อขาย</a></li></font>
		</ul>

		</ul>

        
			<li><a href="Singup.php"><font face = "RSU" >ADD User</a></li></font>
			<li><a  href="Tablelist.php"><font face = "RSU" >TABLE LIST</a></li></font>
			<li><a  href="logout.php"><font face = "RSU" >LOGOUT</a></li> </font>

      
      
   			<?php	} else if (@$_SESSION["STATUS"] =="1") { ?>
				
				<li><a  href="index.php"><font face = "RSU" >Home</a></li></font>
				<li><a href="ex.php"><font face = "RSU" >แนะนำกิจกรรมดีๆ</a></li></font>
				<li><a href="ex1.php"><font face = "RSU" >แนะนำสถานที่เที่ยว</a></li></font>
				<li><a ><font face = "RSU" >ผลงานเขียนโปรแกรม</a></font>


                <ul> <li><a ><font face = "RSU" >JS</a></font>
             <ul><li><a href="jslibary.php"><font face = "RSU" >JS Librarise</a></font>
            </ul>
				<li><a ><font face = "RSU" >Pyramid 1-36</a></font>

		<ul><li><a href="#"><font face = "RSU" >1-10</a></font>
        <ul>
          <li><a href="Fluke1.php"><font face = "RSU" >1</a></li></font>
          <li><a href="Fluke2.php"><font face = "RSU" >2</a></li></font>
          <li><a href="Fluke3.php"><font face = "RSU" >3</a></li></font>
		  <li><a href="Fluke4.php"><font face = "RSU" >4</a></li></font>
          <li><a href="Fluke5.php"><font face = "RSU" >5</a></li></font>
		  <li><a href="Fluke6.php"><font face = "RSU" >6</a></li></font>
          <li><a href="Fluke7.php"><font face = "RSU" >7</a></li></font>
          <li><a href="Fluke8.php"><font face = "RSU" >8</a></li></font>
		  <li><a href="Fluke9.php"><font face = "RSU" >9</a></li></font>
          <li><a href="Fluke10.php"><font face = "RSU" >10</a></li></font>
        </ul>


		<li><a href="#"><font face = "RSU" >11-20</a></font>
        <ul>
          <li><a href="Fluke11.php"><font face = "RSU" >11</a></li></font>
          <li><a href="Fluke12.php"><font face = "RSU" >12</a></li></font>
          <li><a href="Fluke13.php"><font face = "RSU" >13</a></li></font>
		  <li><a href="Fluke14.php"><font face = "RSU" >14</a></li></font>
          <li><a href="Fluke15.php"><font face = "RSU" >15</a></li></font>
		  <li><a href="Fluke16.php"><font face = "RSU" >16</a></li></font>
          <li><a href="Fluke17.php"><font face = "RSU" >17</a></li></font>
          <li><a href="Fluke18.php"><font face = "RSU" >18</a></li></font>
		  <li><a href="Fluke19.php"><font face = "RSU" >19</a></li></font>
          <li><a href="Fluke20.php"><font face = "RSU" >20</a></li></font>
        </ul>

		<li><a href="#"><font face = "RSU" >21-30</a></font>
        <ul>
           <li><a href="Fluke21.php"><font face = "RSU" >21</a></li></font>
          <li><a href="Fluke22.php"><font face = "RSU" >22</a></li></font>
          <li><a href="Fluke23.php"><font face = "RSU" >23</a></li></font>
		  <li><a href="Fluke24.php"><font face = "RSU" >24</a></li></font>
          <li><a href="Fluke25.php"><font face = "RSU" >25</a></li></font>
		  <li><a href="Fluke26.php"><font face = "RSU" >26</a></li></font>
          <li><a href="Fluke27.php"><font face = "RSU" >27</a></li></font>
          <li><a href="Fluke28.php"><font face = "RSU" >28</a></li></font>
		  <li><a href="Fluke29.php"><font face = "RSU" >29</a></li></font>
          <li><a href="Fluke30.php"><font face = "RSU" >30</a></li></font>
        </ul>

		<li><a href="#"><font face = "RSU" >31-36</a></font>
        <ul>
            <li><a href="Fluke31.php"><font face = "RSU" >31</a></li></font>
          <li><a href="Fluke32.php"><font face = "RSU" >32</a></li></font>
          <li><a href="Fluke33.php"><font face = "RSU" >33</a></li></font>
		  <li><a href="Fluke34.php"><font face = "RSU" >34</a></li></font>
          <li><a href="Fluke35.php"><font face = "RSU" >35</a></li></font>
		  <li><a href="Fluke36.php"><font face = "RSU" >36</a></li></font>
        </ul></ul></ul>

				<li><a href="UserProf.php"><font face = "RSU" >UserProfile</a></li></font>
				<li><a  href="logout.php"><font face = "RSU" >LOGOUT</a></li></font>

			<?php	} else  if(@$_SESSION["STATUS"] =="") { ?>
				
				<li><a  href="index.php"><font face = "RSU" >Home</a></li></font>
				<li><a href="ex.php"><font face = "RSU" >แนะนำกิจกรรมดีๆ</a></li></font>
				<li><a href="ex1.php"><font face = "RSU" >แนะนำสถานที่เที่ยว</a></li></font>
                <li><a href="jslibary.php"><font face = "RSU" >JS Libraries</a></li></font>
				<li><a href="Singup.php"><font face = "RSU" >SIGNUP</a></li></font>
				<li><a  href="login.php"><font face = "RSU" >LOGIN</a></li></font>
									<?php }?>
					
	

		<!--<?php	if($_SESSION["STATUS"] !=""){	?>
		<li><a  href="index.html">INTRO</a></li>
		<li><a href="ex.php">แนะนำกิจกรรมดีๆ</a></li>
        <li><a href="ex1.php">แนะนำสถานที่เที่ยว</a></li>
		<li><a  href="login.php">LOGOUT</a></li>
		<li><a href="ingup.php">SINGUP</a></li>
	
		 
		<?php }?> -->

		        </ul>
       </div>
  </div>
</nav>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

</script>

	</TD>
</TR>

<TD width="1700" style="border: 5px solid white;" >