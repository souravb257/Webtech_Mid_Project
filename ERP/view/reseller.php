<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<div class="row">
  <div class="column" style="background-color:#fff;">
    <h2>Reseller Home<hr></h2>
            <a href="home.php">Dashboard</a><br>
			<a href="home.php">See order details</a><br>
			<a href="login.php">Logout</a><br>
			
  </div>
  <div class="column" style="background-color:#fff;">
    <fieldset>
			<legend><h3>Available Product</h3></legend>
			<table>
  <tr>
    <th>Available Product</th>
    <th>Price</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>abc</td>
    <td>10000</td>
    <td><a href="order.php">Order Now</a><br></td>
  </tr>
  <tr>
    <td>def</td>
    <td>120000</td>
    <td><a href="order.php">Order Now</a><br></td>
  </tr>
  <tr>
    <td>abcd</td>
    <td>220000</td>
    <td>Out of stock</td>
  </tr>
  <tr>
    <td>abcde</td>
    <td>20000</td>
    <td><a href="order.php">Order Now</a><br></td>
  </tr>
  
</table>
			
	</fieldset>
  </div>
</div>

</body>
</html>
