<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
<script type="text/javascript">
function Message() {
    alert ("Registration successfull!");
}
</script>
</head>

<body id="bdy">

	<?php
	include('HeaderAdmin.php');
	include('Db.php');
	$query= mysql_query("Select Count(*)+1 as data From SupplierTable", $con);
	$row = mysql_fetch_array($query);
	$Id="S" . sprintf("%03d",$row['data']);
	?>
	<form action="AddSupplierCode.php" method="post">
		<table class="tbl" align="center">
			<tr>
				<td colspan="2" class="heading">SUPPLIER ADDITION</td>
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
				<td align="right">Contact No:</td> <td><input type="text" name="txtContactNo"/></td>
			</tr>
			<tr>
				<td align="right">Mail Id:</td> <td><input type="text" name="txtMailId"/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" onclick="Message();"/></td>
			</tr>
		</table>
	</form>
			

</body>

</html>