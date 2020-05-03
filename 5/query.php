<html>
	<head>
		<title>Online Store - Update</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
<?php 
	$db_host = "localhost"; // 127.0.0.1  
	$db_user = "kbamidele1";
	$db_pass = "kbamidele1";
	$db_name = "kbamidele1";

	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name); 

	$SupplierID = "";
	if(!empty($_POST['search-button'])){
		$SupplierID = $_POST['SupplierID'];
	}
	$sql = "SELECT * FROM purchases WHERE Supplier_ID = '".$SupplierID."'";
	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res)==0){
		echo("Error! There is no record matching with the provided supplier ID!");
	}else{
?>
		<table border="1">
			<tr>
				<td>Date</td>
				<td>Description</td>
				<td>Price</td>
			</tr>
			<?php
			
				while($row = mysqli_fetch_array($res)){
					echo("<tr>");
					echo("<td>".$row["Date"]."</td>");
					echo("<td>".$row["Description"]."</td>");
					echo("<td>".$row["Price"]."</td>");
					echo("</tr>");
				}
			?>
		</table>
<?php
	}
?>

	</body>
</html>