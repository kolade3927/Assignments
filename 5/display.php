<html>
	<head>
		<title>Online Store - Update</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

  <header>
    <div class="logo">NIKE STORE INVENTORY</div>
    <div class="tabs">
      <a class="tab" href="display.php">Display</a>
      <a class="tab" href="newpurchase.html">New Purchase</a>
      <a class="tab" href="query.html">Query</a>
    </div><br/>
  </header>
<?php
	$db_host = "localhost"; // 127.0.0.1  
	$db_user = "kbamidele1";
	$db_pass = "kbamidele1";
	$db_name = "kbamidele1";

	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name); 
?>

<table border="1">
	<tr>
		<td>PurchaseNo</td>
		<td>SupplierID</td>
		<td>Date</td>
		<td>Quantity</td>
		<td>Description</td>
		<td>Price</td>
	</tr>
	<?php
		$sql = "SELECT * FROM purchases";
		$res = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($res)){
			echo("<tr>");
			echo("<td>".$row["Purchase_No"]."</td>");
			echo("<td>".$row["Supplier_ID"]."</td>");
			echo("<td>".$row["Date"]."</td>");
			echo("<td>".$row["Quantity"]."</td>");
			echo("<td>".$row["Description"]."</td>");
			echo("<td>".$row["Price"]."</td>");
			echo("</tr>");
		}
	?>
</table>

	</body>
</html>