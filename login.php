<!DOCTYPE html>
<html>
<head>
 <title>LOGIN</title>

</head>
 
 <?php 
 if(isset($_GET['pesan'])){
 if($_GET['pesan'] == "gagal"){
 echo "Login gagal! username dan password salah!";
 }else if($_GET['pesan'] == "logout"){
 echo "Anda telah berhasil logout";
 }else if($_GET['pesan'] == "belum_login"){
 echo "Anda harus login untuk mengakses halaman admin";
 }
 
 header("Location: index.php");
 }
 ?>
 <br/>
 <br/>
 <form method="post" action="cek_login.php">
 <table>
 <tr>
 <td>Username</td>
 <td>:</td>
 <td><input type="text" name="username" placeholder="Masukkan username"></td>
 </tr>
 <tr>
 <td>Password</td>
 <td>:</td>
 <td><input type="password" name="password" placeholder="Masukkan password"></td>

 </table> 
 </form>
 <body>
	<a href="index.php">LOGIN</a>
	<br/><br/>
</body>
</html>