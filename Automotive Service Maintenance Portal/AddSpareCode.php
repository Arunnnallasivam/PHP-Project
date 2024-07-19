<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Price=$_POST["txtPrice"];
	
	
		
	$qry="Insert Into SpareTable Values('". $Id ."','". $Name ."','". $Price ."',0)";
	mysql_query($qry,$con) or die(mysql_error());
    mysql_close($con);
	echo "Data Processed Successfuly!<br/>";
    echo "<a href='AddSpare.php'>Go Back</a>";
?>