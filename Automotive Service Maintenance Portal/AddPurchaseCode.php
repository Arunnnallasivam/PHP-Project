<?php
	include('Db.php');
	
	$InvoiceNo=$_POST["txtInvoiceNo"];
	$SupplierID=$_POST["ddSupplier"];
	$SpareID=$_POST["ddSpare"];
	$PurchasePrice=$_POST["txtPurchasePrice"]; 
	$SellingPrice=$_POST["txtSellingPrice"];
	$Quantity=$_POST["txtQuantity"]; 
	$Total=$_POST["txtTotal"]; 

	$query= mysql_query("Select CompanyName From SupplierTable Where SupplierID = '". $SupplierID ."' ", $con);
	$row = mysql_fetch_array($query);
	$SupplierName = $row['CompanyName'];

	$query= mysql_query("Select * From SpareTable Where SpareID = '". $SpareID ."' ", $con);
	$row = mysql_fetch_array($query);
	$SpareName=$row['SpareName'];

	$qry="Insert Into PurchaseTable Values('". $InvoiceNo ."','". $SupplierID ."','". $SupplierName ."','". $SpareID ."','". $SpareName ."','". $PurchasePrice ."','". $SellingPrice ."','". $Quantity ."','". $Total ."')";

	if(mysql_query($qry,$con))
	{
		$qry="Update SpareTable Set Stock = Stock + '". $Quantity ."' Where SpareID = '". $SpareID ."' ";
		mysql_query($qry,$con) or die(mysql_error());
		
		$qry="Update SpareTable Set Price = '". $SellingPrice ."' Where SpareID = '". $SpareID ."' ";
		mysql_query($qry,$con) or die(mysql_error());
	}
	else
	{
		die(mysql_error());
	}

    mysql_close($con);

    echo "Data Processed Successfuly!<br/>";
    echo "<a href='AddPurchase.php'>Go Back</a>";
	
?>