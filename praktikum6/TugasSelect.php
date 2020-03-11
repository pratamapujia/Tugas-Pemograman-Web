<?php
$servername = "localhost";
$username = "root";
$dbname = "my_data";

include "TugasKoneksi.php";
echo "<br>";

//menambahkan data
$sql = "SELECT id_bt, nama, email, isi from buku_tamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//output data di baris
	while($row = mysqli_fetch_assoc($result)){
		echo "NO : ".$row["id_bt"]. "<br> NAMA : ".$row["nama"]. "<br> EMAIL : ".$row["email"]."<br> ISI : ".$row["isi"]. "<br> ======================================= <br>";
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
	?>