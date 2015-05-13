<?php

include("include/connectDB.php");
if(isset($_POST['frmAddCustomer']))
{
	$sqlStatement = "INSERT INTO customers (customerName, customerEmail) VALUES ('$_POST[customerName]', ' $_POST[customerEmail]')";
	if (!mysql_query($sqlStatement, $dbConn))
	{
		die('Error: ' . mysql_error());
	}
	echo "<h2>RECORD ADDED</h2>";
	include("include/closeDB.php");
}
?>