<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";
	$conn = mysqli_connect($servername, $username, "", $dbname);

	//cek koneksi
	if (mysqli_connect_errno()){
		echo "Gagal Terhubung dengan database: ".mysqli_connect_error();
		exit();
	}
	//echo "KONEKSI BERHASIL <br>";
?>