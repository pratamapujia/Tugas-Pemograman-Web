<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_siswa";
	$conn = mysqli_connect($servername, $username, "", $dbname);

	if (mysqli_connect_errno()){
		echo "Gagal Terhubung dengan database: ".mysqli_connect_error();
		exit();
	}
	//echo "KONEKSI BERHASIL <br>";
?>