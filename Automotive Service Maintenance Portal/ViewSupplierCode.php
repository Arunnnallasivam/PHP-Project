<?php
	include('Db.php');

    $Id = "";
    foreach($_POST as $name => $content){
    $Id = $name;
    }
	//$Id = array_keys($_POST)[0];
	$qry="Delete From SupplierTable Where SupplierId = '". $Id ."' ";
	mysql_query($qry,$con) or die(mysql_error());
	header('location:ViewSupplier.php');
?>