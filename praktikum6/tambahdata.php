<!DOCTYPE html>
<html>
<body>
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

//menambahkan data
$sql = "INSERT INTO liga (kode, negara, champion)
values ('jer','jerman','4')";

if (mysqli_query($conn, $sql)){
	echo "Insert Data Successfully";
} else {
	echo "Error Insert Data: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
	?>
</body>
</html>