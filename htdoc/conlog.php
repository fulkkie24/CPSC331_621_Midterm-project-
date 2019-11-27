<?php
	session_start();
	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "";
	$dbName = "singup";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM table1 WHERE singup = '".mysql_real_escape_string($_POST['user'])."' and Password = '".mysql_real_escape_string($_POST['pass'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $objResult["id"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "2")
			{
				header("Tablelist.php");
			}
			else
			{
				header("index.html");
			}
	}
	
		mysqli_close($conn);
?>

	