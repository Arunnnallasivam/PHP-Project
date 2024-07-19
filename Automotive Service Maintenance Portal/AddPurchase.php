<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
    <script type="text/javascript">
	function total()
	{
		document.getElementsByName('txtTotal')[0].value = (document.getElementsByName('txtPurchasePrice')[0].value) * (document.getElementsByName('txtQuantity')[0].value);
	}
    </script>
</head>

<body id="bdy">

	<?php
	include('HeaderAdmin.php');
	include('Db.php');
	?>
		
	<form action="AddPurchaseCode.php" method="post" >
		<table class="tbl" align="center">
			<tr>
				<td colspan="2" class="heading">SPARE PURCHASE</td>
			</tr>
			<tr>
				<td><br></td> 
			</tr>
			<tr>
				<td align="right">Invoice No:</td> <td><input type="text" name="txtInvoiceNo" /></td>
			</tr>
			<tr>
				<td align="right">SupplierID:</td> 
				<td>
				<select name="ddSupplier">
				<?php
				$query = mysql_query ("Select SupplierID, CompanyName From SupplierTable",$con);
				echo "<option value=''>Select</option>";
				while($r = mysql_fetch_array($query))
				{
					echo "<option value= ".$r['SupplierID']. ">".$r['CompanyName']."</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr> 
			<td align="right">ProductID:</td>
				<td>
				<select name="ddSpare">
				<?php
				$query = mysql_query ("Select SpareID, SpareName From SpareTable",$con);
				echo "<option value=''>Select</option>";
				while($r = mysql_fetch_array($query))
				{
					echo "<option value= ".$r['SpareID']. ">".$r['SpareName']."</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td align="right">Purchase Price:</td> <td><input type="text" name="txtPurchasePrice" OnInput="total();" /></td>
			</tr>
			<tr>
				<td align="right">Selling Price:</td> <td><input type="text" name="txtSellingPrice" /></td>
			</tr>
			<tr>
				<td align="right">Quantity:</td> <td><input type="text" name="txtQuantity" OnInput="total();"/></td>
			</tr>
			<tr>
				<td align="right">Total:</td> <td><input type="text" name="txtTotal" /></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit"/></td>
			</tr>
		</table>
	</form>

</body>

</html>