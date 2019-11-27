<?php
ini_set('display_errors', 0); 
$host = "sql313.epizy.com"; 
$uname = "epiz_24433388";
$upass 		= "J6oFOlF1t8bl9YA";
$db = "epiz_24433388_fulkkie23"; 
$tb			= "Customers";
$dbstatus 	= 0;
myConnect();
       
function myConnect() {
	global $db,$host,$uname,$upass,$connect,$dbstatus;	
    //echo  $db,$host,$uname,$upass,$connect,$dbstatus;
	if((int)phpversion() >= 7) {
		$connect = new mysqli($host, $uname, $upass, $db);
		if ($connect->connect_error) $connect = new mysqli($host, $uname, $upass); else $dbstatus = 1;
        
		if ($connect->connect_error) die("Connection failed: " . $connect->connect_error);
	} else {
		if(!$connect = mysql_connect($host,$uname,$upass)) die("Connect failed : ");
          
	}
}

?>

