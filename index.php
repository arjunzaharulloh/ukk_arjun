<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penjualan");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
        <label for="sel1">Kata Kunci:</label>
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control"  required/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Cari">
    </div>
    </form>
<body>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>penjualanID</th> <th>tanggal_penjualan</th> <th>total_harga</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['penjualanID']."</td>";
        echo "<td>".$user_data['tanggal_penjualam']."</td>";
        echo "<td>".$user_data['total_harga']."</td>";    
        echo "<td><a href='edit.php? penjualanID=$user_data[penjualanID]'>Edit</a> | <a href='delete.php?penjualanID=$user_data[penjualanID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>