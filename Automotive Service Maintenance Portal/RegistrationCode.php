<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Address=$_POST["txtAddress"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtEMailId"];
	$Password=$_POST["txtPassword"];
		
	$qry="Insert Into CustomerTable Values('". $Id ."','". $Name ."','". $Address ."','". $ContactNo ."','". $MailId ."','". $Password ."')";
	mysql_query($qry,$con) or die(mysql_error());
    echo "Data Processed Successfuly!<br/>";
    echo "<a href='Registration.php'>Go Back</a>";
	mysql_close($con);
?>