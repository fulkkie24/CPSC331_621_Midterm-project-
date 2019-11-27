<?php include("header.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TABLE  align="center" width="624" height="800" border="1">
<Center><h1> เลือกการแก้ไข ข้อมูล</h1></Center>
<?php
?>

<TR >
	<TD valign="top center">

	<?php
	if($_GET['tb'] == 1){
		include("Update.php");
	}
	if($_GET['tb'] == 2){
		include("Update2.php");
	}
			 
	?>
	
	</TD>

</TR>






</TABLE>
<?php include("footer.php"); ?>