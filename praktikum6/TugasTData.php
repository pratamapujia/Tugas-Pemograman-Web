<?php
$servername = "localhost";
$username = "root";
$dbname = "my_data";

include "TugasKoneksi.php";
echo "<br>";
//menambahkan data
$sql = "INSERT INTO buku_tamu (nama, email, isi)
values ('Indira','indira@gmail.com','Happy Wedding semoga cepet punya momongan')";

if (mysqli_query($conn, $sql)){
	echo "Insert Data Successfully";
} else {
	echo "Error Insert Data: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
	?>