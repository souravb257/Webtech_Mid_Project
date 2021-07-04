<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<h2>Dashboard</h2>


  <div class="column" style="background-color:#fff;">
      <a href="home.php">Dashboard</a><br>
			<a href="fileuploadform.php">product image upload</a><br>
      <a href="productdetails.php">Product Details</a><br>
			<a href="editprofile.php">Edit Profile</a><br>
      <a href="reseller.php">Order Product from Reseller</a><br>
			<a href="login.php">Logout</a><br>
		
	<h1>Welcome to the dashboard! <?=$_SESSION['user']['username']?> </h1>
	<table>
  <tr>
    <th>Order List</th>
    <th>Price</th>
    <th>Tracking</th>
  </tr>
  <tr>
    <td>Pran Fruto</td>
    <td>10000</td>
    <td>On the way</td>
  </tr>
  <tr>
    <td>Choklet</td>
    <td>120000</td>
    <td>Recived</td>
  </tr>
  <tr>
    <td>Soft Drinks</td>
    <td>220000</td>
    <td>On the way</td>
  </tr>
  <tr>
    <td>Product</td>
    <td>20000</td>
    <td>Recived</td>
  </tr>
  
</table>
<table>
  <tr>
    <th>Cancel Order List</th>
    <th>Price</th>
    <th>Tracking</th>
  </tr>
  <tr>
    <td>Buiscuit</td>
    <td>50000</td>
    <td>Canceled</td>
  </tr>
  <tr>
    <td>Chips</td>
    <td>220000</td>
    <td>Canceled</td>
  </tr>
  <tr>
    <td>Product</td>
    <td>120000</td>
    <td>Canceled</td>
  </tr>
  
</table>
   

</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>