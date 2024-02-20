<html>
<head>
	<title>Add Users</title>
</head>

 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>penjualanID</td>
				<td><input type="text" name="penjualanID"></td>
			</tr>
			<tr> 
				<td>tanggal_penjualan</td>
				<td><input type="date" name="tanggal_penjualan"></td>
			</tr>
			<tr> 
				<td>total_harga</td>
				<td><input type="text" name="total_harga"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO `penjualan`(`penjualanID`, `tanggal_penjualam`, `total_harga`) VALUES ('[value-1]','[value-2]','[value-3]')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>