<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Address=$_POST["txtAddress"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtMailId"];
		
	$qry="Insert Into SupplierTable Values('". $Id ."','". $Name ."','". $Address ."','". $ContactNo ."','". $MailId ."')";
	mysql_query($qry,$con) or die(mysql_error());
    echo "Data Processed Successfuly!<br/>";
    echo "<a href='AddSupplier.php'>Go Back</a>";
	mysql_close($con);
?>