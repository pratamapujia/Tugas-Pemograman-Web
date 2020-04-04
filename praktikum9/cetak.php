<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_kontak";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Kontak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="h2">
		<div>
			<a href="kontak.html" class="btn2">Tambah Kontak</a>
		</div>
		<br>
		<h3 class="h3-cetak">Data Kontak</h3>
	<br>
	<table class="table" cellpadding="2" cellspacing="1" border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Kota</th>
				<th>Pesan</th>
				<th>Atribut</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM tb_kontak";
			$query = mysqli_query($conn, $sql);

			while ($mts = mysqli_fetch_array($query)) {
				echo "<tr>";

				echo "<td>".$mts['id']."</td>";	
				echo "<td>".$mts['nama']."</td>";
				echo "<td>".$mts['jenis_kelamin']."</td>";
				echo "<td>".$mts['email']."</td>";
				echo "<td>".$mts['alamat']."</td>";
				echo "<td>".$mts['kota']."</td>";
				echo "<td>".$mts['pesan']."</td>";

				echo "<td>";
				echo "<a href = 'cetak.php?id=".$mts['id']."'>Hapus</a> ";
				echo "</td>";

				echo "</tr>";
			}
			?>

			<?php
				if( isset($_GET['id']) ){
   				 	$id = $_GET['id'];
    				$sql = "DELETE FROM tb_kontak WHERE id=$id";
    				$query = mysqli_query($conn, $sql);
    				if( $query ){
        				header('Location: cetak.php');
    				} else {
        				die("gagal menghapus...");
    				}
				} else {
    				die("akses dilarang...");
				}
			?>

		</tbody>
	</table>
	</header>
</body>
</html>