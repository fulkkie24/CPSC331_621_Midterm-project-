<?php include("header.php"); ?>
<center>
<?php
/*¿ÅØê¤ ÃËÑÊ¹È. 6008111004*/


for($i=1; $i <= 7; $i++) {
 
 for($k=1;$k<=7 - $i + 1;$k++){ 
 			echo ("&nbsp;&nbsp;");
 }
 for($k=1; $k <=$i ; $k++) { 
  echo ( $k ); 
 }
 echo ( $i );
 for($k=$i; $k >= 1 ; $k--) { 
  echo ( $k ); 
 }
 echo "<br>";
}

?>
<?php include("footer.php"); ?>
