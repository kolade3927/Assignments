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

	$errors = array();
	if(!empty($_POST['save-button'])){
		if(!empty($_POST['PurchaseNo'])){
			$PurchaseNo = $_POST['PurchaseNo'];
		}else{
			$errors[] = "Please provide the purchase number!";	
		}
		if(!empty($_POST['SupplierID'])){
			$SupplierID = $_POST['SupplierID'];
		}else{
			$errors[] = "Please provide the supplier ID!";	
		}
		if(!empty($_POST['Date'])){
			$Date = $_POST['Date'];
		}else{
			$errors[] = "Please provide the Date!";	
		}
		if(!empty($_POST['Quantity'])){
			$Quantity = $_POST['Quantity'];
		}else{
			$errors[] = "Please provide the Quantity!";	
		}
		if(!empty($_POST['Description'])){
			$Description = $_POST['Description'];
		}else{
			$errors[] = "Please provide the Description!";	
		}
		if(!empty($_POST['Price'])){
			$Price = $_POST['Price'];
		}else{
			$errors[] = "Please provide the Price!";	
		}
		if(!is_numeric($_POST['Quantity'])){
			$errors[] = "Quantity must be a number!";
		}
		if(!is_numeric($_POST['Price'])){
			$errors[] = "Price must be a number!";
		}

		if(count($errors) == 0){
			$sql = "INSERT INTO purchases (Purchase_No,Supplier_ID,`Date`,Quantity,Description,Price)VALUES('$PurchaseNo','$SupplierID','$Date',$Quantity,'$Description',$Price)";
			mysqli_query($conn,$sql);
			header("location: display.php");
		}else{
			foreach($errors as $error){
				echo($error."<br>");
			}
			echo("<a href='newpurchase.html'>Back</a>");
		}
	}

?>
</body>
</html>