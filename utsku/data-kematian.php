<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Kematian</title>
	<link rel="stylesheet" type="text/css" href="dk.css">
</head>
<body>
	<nav>
		<a href="utama.php" class="btn1">HOME</a>
	</nav>
	<header>
		<div>
			<a href="Kematian.php" class="btn2">Tambah Data Kematian</a>
		</div>
		<br>
		<h3>Data Kematian</h3>
	<br>
	<table border="0.5">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama Lenkap</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Tanggal Meninggal</th>
				<th>Atribut</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM tb_kematian";
			$query = mysqli_query($conn, $sql);

			while ($mts = mysqli_fetch_array($query)) {
				echo "<tr>";

				echo "<td>".$mts['id']."</td>";	
				echo "<td>".$mts['nama']."</td>";
				echo "<td>".$mts['jenis_kelamin']."</td>";
				echo "<td>".date('d-m-Y', strtotime($mts["tanggal_lahir"]))."</td>";
				echo "<td>".date('d-m-Y', strtotime($mts["tanggal_meninggal"]))."</td>";
				
				echo "<td>";
				echo "<a href = 'edit-kematian.php?id=".$mts['id']."'>Edit</a> | ";
				echo "<a href = 'hapus-kematian.php?id=".$mts['id']."'>Hapus</a> ";
				echo "</td>";

				echo "</tr>";
			}
			?>

		</tbody>
	</table>
	</header>
</body>
</html>