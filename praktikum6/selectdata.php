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
$sql = "SELECT kode, negara, champion from liga";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//output data di baris
	while($row = mysqli_fetch_assoc($result)){
		echo "kode : ".$row["kode"]. " - Negara : ".$row["negara"]. " - champion : ".$row["champion"]. "<br>";
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
	?>
</body>
</html>