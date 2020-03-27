<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<header>
 		<div class="container">
  			<br>
       			<form action="" method="post">
   					<h2>APLIKASI PENDUDUK</h2><br>
				<label>Username :</label>
   				<input id="name" name="username" placeholder="username" type="text"> 
   				<label>Password :</label>
   				<input id="password" name="password" placeholder="password" type="password"> 
   				<center><input type="submit" name="submit" id="submit" value="Login"></center>
    			</form>
   		</div>
   	</header>
	<?php
		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = mysqli_query($conn,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");
			$cek = mysqli_num_rows($sql);
			if($cek == 1){
				$_SESSION['userweb']=$username;
				header("location:utama.php");
				exit;
			}else {
				echo "Maaf username atau password anda salah";
			}
		}
	?>
</body>
</html>