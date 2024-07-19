<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy">
	
	<?php
	include('HeaderEmployee.php');
	include('Db.php');
	session_start();
	?>
	

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<div >	

		<br/>
		<br/>
		Select Service No:
		<br/>
		<select name='ddServiceNo'>
			<option value=''>Select</option>
			<?php
			$query = mysql_query("Select * From ServiceMaster Where EmployeeAssigned = '" . $_SESSION['username'] ."' ",$con);
			While($r = mysql_fetch_array($query))
			{
				echo "<option value='". $r['ServiceNo'] ."' "; 

					if(isset($_REQUEST['ddServiceNo']) && $_REQUEST['ddServiceNo'] == $r['ServiceNo'])
					{
						echo "Selected ";
					}  

				echo ">". $r['ServiceNo'] . ':' . $r['CusName'] ."</option>";
			}
			?>
		</select>
		<input type="Submit" Value="Submit" class='btn_delete' />

		<br/>
		<br/>

		<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{

			$ServiceNo = $_REQUEST['ddServiceNo'];

			if(isset($_REQUEST['btnAdd']))
			{
				
				$SpareID  = $_REQUEST['ddSpare'];
				$Qty  = $_REQUEST['txtQty'];

				$query = mysql_query("Select MAX(Sno) as data From ServiceTrans", $con);
				$row = mysql_fetch_array($query);
				$Sno = $row['data']+1;

				$query = mysql_query("Select SpareName From SpareTable Where SpareID = '$SpareID' ", $con);
				$data = mysql_fetch_array($query);
				$SpareName = $data['SpareName'];

				$query = mysql_query("Select Price From SpareTable Where SpareID = '$SpareID' ", $con);
				$data = mysql_fetch_array($query);
				$Price = $data['Price'];

				$Total = $Price * $Qty;

				mysql_query("Insert Into ServiceTrans(Sno,ServiceNo,SpareID, SpareName, Price, Quantity, Total) Values('". $Sno ."','". $ServiceNo ."','". $SpareID ."','". $SpareName."','". $Price."','". $Qty."','". $Total."')", $con); 

				mysql_query("Update SpareTable Set Stock = Stock - '". $Qty ."' Where SpareID = '". $SpareID ."' ",$con);

			}

			echo "<select name='ddSpare'>;
				<option value=''>Select Spare</option>";
					$query= mysql_query("Select SpareID,SpareName From SpareTable",$con);
					while($r = mysql_fetch_array($query))
					{
						echo"<option value=". $r['SpareID'] .">". $r['SpareName'] ."</option>";
					}
			echo "</select>";

			echo "<input type='text' name='txtQty' placeholder='Quantity' />";
			echo "<input type='submit' name='btnAdd' value='Add Spare' class='btn_orange' />";

			echo "<table class='mygrid' style='margin-top: 20px;'' align='center'><tr><th>SpareID</th><th>SpareName</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";

			$query = mysql_query("Select * From ServiceTrans Where ServiceNo = '". $ServiceNo ."' ",$con);
			While($r = mysql_fetch_array($query))
			{
				echo "<tr><td>" . $r['SpareID'] . "</td><td>" . $r['SpareName'] . "</td><td>" . $r['Price'] . "</td><td>" . $r['Quantity'] . "</td><td>" . $r['Total'] . "</td>";
			}

			echo "<table>";

		}

		?>

	</div>
	</form>
	
</body>

</html>