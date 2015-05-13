<?php
include('include/connectDB.php');
$sqlStatement = "SELECT * FROM customers";
$result = mysql_query($sqlStatement, $dbConn);
//$customerRecord = mysql_fetch_array($result);
if(!$result)
{
	die('Error: ' . mysql_error());
}
while($row = mysql_fetch_array($result))
    $rows[] = $row;
foreach($rows as $row){ 
echo "<p>" . $row['customerID'] . " ";
echo $row['customerName']. " ";
echo $row['customerEmail']. "</p>";
}

include('include/closeDB.php');
?>