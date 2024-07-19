<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy">

	<?php
	include('HeaderAdmin.php');
	include('Db.php');
	
	$query= mysql_query("Select Count(*)+1 as cnt From SpareTable", $con);
	$row = mysql_fetch_array($query);
	$Id="S" . sprintf("%03d",$row['cnt']);
	?>
		
	<form action="AddSpareCode.php" method="post">
		<table class="tbl" align="center">
			<tr>
				<td colspan="2" class="heading">SPARE ADDITION</td>
			</tr>
			<tr>
				<td><br></td> 
			</tr>
			<tr>
				<td align="right">Id:</td> <td><input type="text" name="txtId" value="<?php echo $Id; ?>"/></td>
			</tr>
			<tr>
				<td align="right">Name:</td> <td><input type="text" name="txtName"/></td>
			</tr>
			<tr>
				<td align="right">Price:</td> <td><input type="text" name="txtPrice"/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" /></td>
			</tr>
		</table>
	</form>

</body>

</html>