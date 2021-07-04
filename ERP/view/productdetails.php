<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<h2>All Product Details</h2>


  <div class="column" style="background-color:#fff;">
      <a href="home.php">Dashboard</a><br>
			<a href="login.php">Logout</a><br>
		
	
	<table>
  <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Stock</th>
  </tr>
  <tr>
    <td>Pran Fruto</td>
    <td>10000</td>
    <td>In</td>
  </tr>
  <tr>
    <td>Choklet</td>
    <td>120000</td>
    <td>Out</td>
  </tr>
  <tr>
    <td>Soft Drinks</td>
    <td>220000</td>
    <td>In</td>
  </tr>
   <tr>
    <td>Buiscuit</td>
    <td>50000</td>
    <td>In</td>
  </tr>
   <tr>
    <td>Chips</td>
    <td>220000</td>
    <td>Out</td>
  </tr>
  <tr>
    <td>Abc</td>
    <td>40000</td>
    <td>Out</td>
  </tr>
   <tr>
    <td>Def</td>
    <td>60000</td>
    <td>Out</td>
  </tr>
   <tr>
    <td>Abcd</td>
    <td>20000</td>
    <td>Out</td>
  </tr>
   <tr>
    <td>Abcde</td>
    <td>12000</td>
    <td>In</td>
  </tr>
  
</table>
</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>