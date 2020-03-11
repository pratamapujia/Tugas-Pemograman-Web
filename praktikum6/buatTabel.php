<?php
$servername = "localhost";
$username = "root";
$dbname = "my_data";

//create koneksi
$conn = mysqli_connect($servername, $username,"",$dbname);

//cek koneksi
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

//create tabel
$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3)
)";
if (mysqli_query($conn, $sql)){
	echo "Tabel Create Successfully";
} else {
	echo "Error Creating Tabel: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>