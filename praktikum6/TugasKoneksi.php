<!DOCTYPE html>
<html>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "my_data";
	$conn = mysqli_connect($servername, $username, "", $dbname);

	//cek koneksi
	if (mysqli_connect_errno()){
		echo "Failed to Connect to MySQL: ".mysqli_connect_error();
		exit();
	}
	echo "KONEKSI BERHASIL <br>";
	?>

</body>
</html>