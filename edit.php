<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$ipenjualanIDd = $_POST['penjualanID'];
	
	$penjualanID=$_POST['penjualanID'];
	$tanggal_penjualam=$_POST['tanggal_penjualam'];
	$total_harga=$_POST['total_harga'];
		
	// update user datapenju
	$result = mysqli_query($mysqli, " UPDATE `penjualan` SET `penjualanID`='[value-1]',`tanggal_penjualam`='[value-2]',`total_harga`='[value-3]' WHERE 1 penjualanID=$penjualanID");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$penjualanID = $_GET['penjualanID'];
 
// Fetech user data based on id
$result = mysqli_query ($mysqli, "SELECT * FROM penjualan");
 
while($user_data = mysqli_fetch_array($result))
{
	$penjualanID = $user_data['penjualanID'];
	$tanggal_penjualam = $user_data['tanggal_penjualam'];
	$total_harga = $user_data['total_harga'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>penjualanID</td>
				<td><input type="text" name="penjualanID" value=<?php echo $penjualanID;?>></td>
			</tr>
			<tr> 
				<td>tanggal_penjualam</td>
				<td><input type="date" name="tanggal_penjualam" value=<?php echo $tanggal_penjualam;?>></td>
			</tr>
			<tr> 
				<td>total_harga</td>
				<td><input type="text" name="total_harga" value=<?php echo $total_harga;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="penjualanID" value=<?php echo $_GET['penjualanID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>