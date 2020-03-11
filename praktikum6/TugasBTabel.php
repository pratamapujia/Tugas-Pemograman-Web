<?php
$servername = "localhost";
$username = "root";
$dbname = "my_data";

include "TugasKoneksi.php";

echo "<br>";
//create tabel
$sql = "CREATE TABLE buku_tamu (
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(30) NOT NULL,
isi TEXT)";
if (mysqli_query($conn, $sql)){
	echo "Tabel Create Successfully";
} else {
	echo "Error Creating Tabel: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>