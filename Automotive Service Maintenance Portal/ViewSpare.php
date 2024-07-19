<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy">
	
	<?php
	include('HeaderAdmin.php');
	include('Db.php');
	?>

	<form action="" method="POST">
	<table class="mygrid" align="center">
		
		<tr><td colspan="4">SPARE STOCK DETAILS<br><br><td><tr>
		
		<tr><th>SpareID</th><th>SpareName</th><th>Price</th><th>Stock</th></tr>
		
		<?php
		$query = mysql_query("Select * From SpareTable",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['SpareID'] . "</td><td>" . $r['SpareName'] . "</td><td>" . $r['Price'] . "</td><td>" . $r['Stock'] . "</td><</tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	
	</form>
	
</body>

</html>