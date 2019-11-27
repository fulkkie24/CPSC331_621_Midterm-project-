<?php
	
	session_start();
	 include("connectdb.php");
	$sql = "SELECT * FROM table1 WHERE USER = '".mysqli_real_escape_string($conn,$_POST['user'])."'and PASS = '".mysqli_real_escape_string($conn,$_POST['pass'])."' ";
	$objQuery = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);



	if(!$objResult)
	{	
				
			include("header1.php");
			echo "<br><br><br><center>กรุณาใส่ให้ถูกต้อง<br><br><br>";
			include("footer.php");
	}
	else
	{
			$_SESSION["ID"] = $objResult["ID"];
			$_SESSION["USER"] = $objResult["USER"];
			$_SESSION["STATUS"] = $objResult["STATUS"];
			
			$ID = $objResult['ID']; 
			session_write_close();

			if($objResult["STATUS"] == "2")
			{
				echo  header("location: Tablelist.php");
				//header("location: Tablelist.php");
			}
			else
			{
				 echo header("location: UserProf.php");
			}

			
			
	
	}
	mysqli_close($conn);
?> 