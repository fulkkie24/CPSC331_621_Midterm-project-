<?php include("header.php"); ?>

<?php $mysqli = new mysqli('sql313.epizy.com', 'epiz_24433388', 'J6oFOlF1t8bl9YA', 'epiz_24433388_fulkkie23');

//$count = "select * from  employees WHERE  (empid = '".1004."')" ;	
//$query = mysqli_query($mysqli,$count) or die ($count);
//$a = mysqli_fetch_array($query);

$result = $mysqli->query("select * from orderdetails ");
//$result2 = $mysqli->query("select * from employees where empid = 1001");
//$count  = $query->empid;

//if($count <= 1004){
  while($row = $result->fetch_assoc()){
  		//echo "<h3>ID < 1004</h3>";
    	if($row['unitprice'] < 100 && $row["unitprice"] > 40){

    		echo "<center>"; 
    		echo "<h3> Unitprice < 100 && > 40 </h3> "." <br/> ";
            echo "ID : ".$row['productid']." , "; 
            echo "Price : ".$row['unitprice']." , "; 
            echo "Quantity : ".$row['quantity']." <br/> "; 
            echo "</center>";


            
    }
    //echo "<h3>ID > 1003</h3>";
    	else if($row['unitprice'] > 100){ 
    			echo "<center>"." <br/> "; 
    			echo "<h3>Hello Unitprice > 100 </h3> "." <br/> ";
    		    echo "ID : ".$row['productid']." , "; 
            	echo "Price : ".$row['unitprice']." , "; 
            	echo "Quantity : ".$row['quantity']." <br/> "; 
            	 echo "</center>";
	}

}
?>


 <?php include("footer.php"); ?>