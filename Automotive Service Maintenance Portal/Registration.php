<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('Header.php');
	include('Db.php');
	$query= mysql_query("Select Count(*)+1 as data From CustomerTable", $con);
	$row = mysql_fetch_array($query);
	$Id="C" . sprintf("%03d",$row['data']);
	?>
	<form action="RegistrationCode.php" method="post">
		<table class="tbl" align="center">
			<tr>
				<td colspan="6" class="heading">CUSTOMER REGISTRATION</td>
			</tr>
			<tr>
				<td><br></td> 
			</tr>
			<tr>
				<td align="right">ID:</td> <td><input type="text" name="txtId" value="<?php echo $Id; ?>"/></td>
			</tr>
			<tr>
				<td align="right">Name:</td> <td><input type="text" name="txtName"/></td>
			</tr>
			<tr>
				<td align="right">Address:</td> <td><textarea name="txtAddress" ></textarea></td>
			</tr>
			<tr>
				<td align="right">Contact No:</td> <td><input type="text" pattern="[0-9]{10}" name="txtContactNo"/></td>
			</tr>
			<tr>
				<td align="right">Mail Id:</td> <td><input type="email" name="txtEMailId"/></td>
			</tr>
			<tr>
				<td align="right">Password:</td> <td><input type="password" name="txtPassword"/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" /></td>
			</tr>
		</table>
	</form>
			

</body>

</html>