<?php include("header.php"); ?>

<?php $mysqli = new mysqli('sql313.epizy.com', 'epiz_24433388', 'J6oFOlF1t8bl9YA', 'epiz_24433388_fulkkie23');

//$count = "select * from  employees WHERE  (empid = '".1004."')" ;	
//$query = mysqli_query($mysqli,$count) or die ($count);
//$a = mysqli_fetch_array($query);

$result = $mysqli->query("select * from productstest ");
//$result2 = $mysqli->query("select * from employees where empid = 1001");
//$count  = $query->empid;

//if($count <= 1004){
  while($row = $result->fetch_assoc()){
  		//echo "<h3>ID < 1004</h3>";
    	if($row['PID'] < 1103 && $row["PID"] > 0){

    		echo "<center>"; 
    		echo "<h3> ProductID < 1103  </h3> "." <br/> ";
            echo "ID : ".$row['PID']." , "; 
            echo "Name : ".$row['Pname']." , "; 
            echo "SupID : ".$row['SupID']." <br/> "; 
            echo "</center>";


            
    }
    //echo "<h3>ID > 1003</h3>";
    	else if($row['UP'] > 99){ 
    			echo "<center>"." <br/> "; 
    			echo "<h3>Hello Price> 99 </h3> "." <br/> ";
    		   	echo "ID : ".$row['PID']." , "; 
            	echo "Name : ".$row['Pname']." , "; 
            	echo "Price : ".$row['UP']." <br/> "; 
            	echo "</center>";
	}

}
?>


 <?php include("footer.php"); ?>