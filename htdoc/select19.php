<?php include("header.php"); ?>
<?php
/* 
Script_name : Northwind.php
Source_code : http://www.thaiall.com/perlphpasp/source.pl?9141
Version 1.2560-09-24
###########################
- Use function_exists for mysql_connect
- Test mysqli() on PHP 7.1 and PHP 5.6 
- Test mysql_connect() on PHP 5.6 because it failed on PHP 7.1 
- Can use php=7 and php=5 to control testing with XAMPP from https://www.apachefriends.org
- Northwind.mdb for mysql in SQL format was shared in http://www.thaiall.com/mysql/northwindwithsqlfile.zip
- Use "mytable" from http://www.thaiall.com/web2/rsp62.css
- Can read about subquery at http://www.dofactory.com/sql/subquery
- Test SQL command - online on https://www.w3schools.com/sql/sql_join_inner.asp
- Test SQL command - offline on http://www.alexnolan.net/software/mdb_viewer_plus.htm (Copyright 2004 - 2013)
########################### 
Requirement before start this script
- Download : http://www.thaiall.com/mysql/northwindwithsqlfile.zip
- Import northwindfromphpmyadmin.sql in to MySQL 
*/

/* Section 1 : Configuration */
$host = "sql313.epizy.com"; 
$uname = "epiz_24433388";
$upass 		= "J6oFOlF1t8bl9YA";
$db = "epiz_24433388_fulkkie23"; 


/* Section 2 : Variable */
$maxField		= 	10; 
$lineperpage	= 	25;
$linenumber		= 	true;
if(isset($_GET["p"])) $currentpage = $_GET["p"]; else $currentpage = 1;
if((int)phpversion() >= 7) $php7 = true; else $php7 = false;
if(isset($_GET["php"])) { if($_GET["php"] == "7") $php7 = true; else $php7 = false; }
$mytable = "<style>	
.mytable { margin-left:auto; margin-right:auto; }
.mytable td {padding:3px; border-bottom: 1px solid #dddddd; }
.mytable tr:nth-child(even) {background-color: #ddffdd}
.mytable tr:nth-child(odd) {background-color: #ffffdd}
.mytable tr:hover {background-color: #ddddff}
</style>";

/* Section 3 : Connection */
if($php7) {
	$connect = new mysqli($host, $uname, $upass, $db);
	if ($connect->connect_error) die("Connection failed: " . $connect->connect_error);
} else {
	if (function_exists('mysql_connect')) {	
		if(!$connect = mysql_connect($host, $uname, $upass)) die("Connect failed : ");
	} else {
		die("function mysql_connect : not exist in PHP");
	}
}

/* Section 4 : SQL Command */
$sql_type 	= 	0; // SQL type
if(isset($_GET["t"])) {
	$sql_type = $_GET["t"];
	switch ($_GET["t"]) {	
	/* 1 - start here  */
	case "1": $sql="
	select * from productstest
	"; break;	

	

	case "10": $sql="
	select orderid, count(productid) as Countproductid from `orderdetails` group by orderid
	"; break;

	case "11": $sql="
	select Pname, count(SupID) as CountSum from `productstest` group by Pname
	"; break;

	case "12": $sql="
	select empid, count(cusid) as CountCusID from `orders` group by empid
	"; break;
	
	/* 14 - inner join 2 way */
	case "14": $sql="
	select orders.cusid, `orderdetails`.*, productstest.* 
	from (orders inner join `orderdetails` on orders.ordid = `orderdetails`.orderid 
	inner join productstest on `orderdetails`.productid = productstest.PID) 
	where `orderdetails`.unitprice > 20
	"; break; // testing : [pass] in phpmyadmin but [fail] in MDBviewerplus			
	
	case "15": $sql="
	select categories.categoryid, `suppliers`.*, productstest.* 
	from (categories inner join `productstest` on categories.categoryid = `productstest`.cateid 
	inner join suppliers on `productstest`.SupID = suppliers.supid) 
	where `productstest`.UP < 100
	"; 
	 break; // testing : [pass] in phpmyadmin but [fail] in MDBviewerplus

	 case "16": $sql="
	select categories.categoryid, `orderdetails`.*, productstest.* 
	from (categories inner join `productstest` on categories.categoryid = `productstest`.cateid 
	inner join orderdetails on `productstest`.PID = orderdetails.productid) 
	
	"; 
	 break; // testing : [pass] in phpmyadmin but [fail] in MDBviewerplus			
	
	}
}	

/* Section 5 : Display data */
if(isset($_GET["sql"]) && $_GET["sql"] == "show") die($sql);
if($php7) { 
	$result = $connect->query($sql);
	if ($result->num_rows == 0) die("Query : failed<br/>" . $sql);
	$numField = mysqli_num_fields($result);
	if($numField < $maxField) $maxField = $numField;	
	echo $mytable . "<table class='mytable'><tr style='background-color:black;color:white;'>";
	if($linenumber) echo "<td>no.</td>";			
	$i = 0;
	while ($fieldinfo=mysqli_fetch_field($result)) {
		if ($i++ < $maxField) echo "<td style='text-align:center'>" . $fieldinfo->name . "</td>";
	}
	echo "</tr>";	
	$cntrec=1;
	$totalRec = mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)) { 
		if ($cntrec >=firstrec($totalRec,$lineperpage,$currentpage) && $cntrec <=lastrec($totalRec,$lineperpage,$currentpage)) {
			echo "<tr>";
			if($linenumber) echo "<td>$cntrec</td>";
			for ($i=0; $i<$maxField ; $i++ ) { echo "<td>$row[$i]</td>"; }
			echo "</tr>";
		}
		$cntrec++;
	}	
	echo "</table>";	
	for($i=1;$i<=totalpage($totalRec,$lineperpage);$i++) {
		if ($i == $currentpage) 
			echo "$i : ";
		else
			echo "<a href='?t=$sql_type&p=$i'>$i</a> : ";
	}
	echo "Total $totalRec records";	
	$connect->close();
} else {	
	if (!$result=mysql_db_query($db,$sql)) die("Query : failed<br/>".$sql);
	$numField = mysql_num_fields($result);
	if($numField < $maxField) $maxField = $numField;
	echo "<style>table,th,td {border: 1px solid #dddddd;border-spacing:1px}</style>";
	echo "<table style='border-style:solid;border-width:2px;border-color:blue'><tr>";
	if($linenumber) echo "<td>no.</td>";			
	for ($i=0; $i<$maxField ; $i++ ) {
		echo "<td style='background-color:#ffffdd;text-align:center'>" . mysql_field_name($result, $i) . "</td>";
	}
	echo "</tr>";	
	$cntrec=1;
	$totalRec = mysql_num_rows($result);
	while ($row = mysql_fetch_array($result)) { 
		if ($cntrec >=firstrec($totalRec,$lineperpage,$currentpage) && $cntrec <=lastrec($totalRec,$lineperpage,$currentpage)) {
			echo "<tr>";
			if($linenumber) echo "<td>$cntrec</td>";
			for ($i=0; $i<$maxField ; $i++ ) { echo "<td>$row[$i]</td>"; }
			echo "</tr>";
		}
		$cntrec++;
	}	
	// while ($row = mysql_fetch_assoc($result)) { echo $row["CustomerID"]; }
	echo "</table>";	
	for($i=1;$i<=totalpage($totalRec,$lineperpage);$i++) {
		if ($i == $currentpage) 
			echo "$i : ";
		else
			echo "<a href='?t=$sql_type&p=$i'>$i</a> : ";
	}
	echo "Total $totalRec records";	
	mysql_close($connect);
}
echo '<br/><a href="?t=1&php=7">PHP7 Select</a> : <a href="?t=14&php=7">Inner Join 3Tabile 01</a> : <a href="?t=15&php=7">Inner Join 3Tabile 02</a> : <a href="?t=16&php=7">Inner Join 3Tabile 03</a> : <a href="?t=10&php=7">Grop 01</a> : <a href="?t=11&php=7">Grop 02</a> : <a href="?t=12&php=7">Grop 03</a>';

function totalpage($totalrec,$lpp) { return ceil($totalrec / $lpp); }
function firstrec($totalrec,$lpp,$page) { return (($lpp * ($page - 1) + 1) > $totalrec ? 1 : ($lpp * ($page - 1) + 1)); }
function lastrec($totalrec,$lpp,$page) { return (($lpp * $page) > $totalrec ? $totalrec : ($lpp * $page)); }
?>
 <?php include("footer.php"); ?>