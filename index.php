<?php include('assets/insert.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jackie's Jewelry</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/jackie.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<h2>&nbsp;</h2>

  <div align="center"><img src="images/jackie_logo.jpg" width="542" height="87" />
    <img src="images/jackie_logo2.jpg" width="150" height="111" /> </div>
	<p>&nbsp;</p>
  <div id="nav">
  <a href="index.html">Home</a>
  <a href="jackie.html">About Jackie</a>
  <a href="services.html">Jackie's Services</a>
  <a href="products.html">Shop</a>
   <a href="tips.html">Jewelry Making</a>
  <a href="contact.html">Contact Jackie</a>
  <a href="showUser.php">Show Customers</a>
</div>
<div id="content">
<div style="width:600px; float:right;">
<div style="width:500px; float:right; padding:1px; margin-right:10px;">
<p>Add a new customer to Jackie's Jewelery database:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table>
<tr>
<td><hr />
Enter customer's full name:<br />
Last name, First name, Middle or other<br />
Examples:
<ul>
<li>Smith, John</li>
<li>Morrisey, Edward III</li>
<li>Chen, Kimmie X.</li>
</ul>
</td>
<td><input type="text" name="customerName" size="35"/>
</td>
</tr>
<tr>
<td><hr />
Enter customer's email address:
<br />Include full address<br />
Examples:
<ul>
<li>john.smith@yahoo.com</li>
<li>EddieD@gbdmail.net</li>
<li>chen.kim@myschool.edu</li>
</ul>
</td>
<td><input type="text" name="customerEmail" size="35" />
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center;">
<input type="submit" name="frmAddCustomer" />
</td>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</body>
</html>