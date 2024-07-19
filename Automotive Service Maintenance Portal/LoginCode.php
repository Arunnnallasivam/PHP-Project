<?php
    session_start();
    include('Db.php');
	
	$Username = $_POST["txtUsername"];
	$Password = $_POST["txtPassword"];
	$Type = $_POST["ddType"];
	
	if($Type == "admin"){
		$query= mysql_query("Select Count(*) as data From AdminTable Where Username = '". $Username ."' and Password = '". $Password ."' ", $con);
		$row = mysql_fetch_array($query);
		if($row['data']==1){
			$_SESSION["username"] = $Username;
            header('location:HomeAdmin.php');
		}
		else{
           echo "Invalid Credentials!<br/>";
           echo "<a href='Login.php'>Go Back</a>";
		}
	}
	else if($Type == "customer"){
	$query= mysql_query("Select Count(*) as data From CustomerTable Where CusID = '". $Username ."' and Password = '". $Password ."' ", $con);
		$row = mysql_fetch_array($query);
		if($row['data']==1){
			$_SESSION["username"]=$Username;
			header('location:HomeCustomer.php');
		}
		else{
           echo "Invalid Credentials!<br/>";
           echo "<a href='Login.php'>Go Back</a>";
		}
	}
	else if($Type == "employee"){
	$query= mysql_query("Select Count(*) as data From EmployeeTable Where EmpID = '". $Username ."' and Password = '". $Password ."' ", $con);
		$row = mysql_fetch_array($query);
		if($row['data']==1){
			$_SESSION["username"]=$Username;
			header('location:HomeEmployee.php');
		}
		else{
           echo "Invalid Credentials!<br/>";
           echo "<a href='Login.php'>Go Back</a>";
		}
	}
	mysql_close($con);
?>