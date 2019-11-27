<?php
if((int)phpversion() >= 7) {
  $connect = new mysqli("sql313.epizy.com", "epiz_24433388", "J6oFOlF1t8bl9YA", "epiz_24433388_fulkkie23");
  $result = $connect->query("select UP from productstest where PID =" . $_GET["proid"]);
 // if ($result->num_rows >0) 
    if($row = $result->fetch_assoc()) echo $row['UP'];
  $connect->close();  
} else {  
  $connect = mysql_connect("sql313.epizy.com","epiz_24433388", "J6oFOlF1t8bl9YA");                     
  $result = mysql_db_query("productstest","select UP from productstes where PID =" . $_GET["proid"]);  
  if ($row = mysql_fetch_object($result)) echo $row->UP;
  mysql_close($connect);
} 
?>

