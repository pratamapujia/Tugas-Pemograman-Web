<?php
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$IPK = $_POST['IPK'];
$Jurusan = $_POST['Jurusan'];
$TTL = $_POST['TTL'];
$JK = $_POST['JK'];
$Alamat = $_POST['Alamat'];

if ($NPM == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Nama == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($IPK == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Jurusan == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($TTL == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($JK == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Alamat == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} else{
	echo "NPM      : $npm<br>";
	echo "Nama     : $Nama<br>";
	echo "IPK      : $IPK<br>";
	echo "Jurusan  : $Jurusan<br>";
	echo "Tempat dan Tanggal Lahir : $TTL<br>";
	echo "Jenis Kelamin : $JK<br>";
	echo "Alamat : $Alamat<br>";
}
?>