<?php
include('include/connectDB.php');
$sqlStatement = "SELECT * FROM customers";
$result = mysql_query($sqlStatement, $dbConn);
$customerRecord = mysql_fetch_array($result);
if(!$customerRecord)
{
	die('Error: ' . mysql_error());
}
echo "<p>Customer ID: ". $customerRecord['customerID'] . "</p>";
echo "<p>Customer Name: ". $customerRecord['customerName'] . "</p>";
echo "<p>Customer Email: ". $customerRecord['customerEmail'] . "</p>";

include('include/closeDB.php');
?>