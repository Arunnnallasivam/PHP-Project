<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Address=$_POST["txtAddress"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtEMailId"];
	$Password=$_POST["txtPassword"];
		
	$qry="Insert Into EmployeeTable Values('". $Id ."','". $Name ."','". $Address ."','". $ContactNo ."','". $MailId ."','". $Password ."')";
	mysql_query($qry,$con) or die(mysql_error());
    echo "Data Processed Successfuly!<br/>";
    echo "<a href='AddEmployee.php'>Go Back</a>";
	mysql_close($con);
?>