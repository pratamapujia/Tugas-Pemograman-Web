<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mutasi</title>
	<link rel="stylesheet" type="text/css" href="dm.css">
</head>
<body>
	<nav>
		<a href="utama.php" class="btn1">HOME</a>
	</nav>
	<header>
		<div>
			<a href="Mutasi.php" class="btn2">Tambah Mutasi</a>
		</div>
		<br>
		<h3>Data Mutasi</h3>
	<br>
	<table border="0.5">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama Lenkap</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Tempat Lahir</th>
				<th>Pindah Ke</th>
				<th>Tanggal Pindah</th>
				<th>Datang Dari</th>
				<th>Tanggal Datang</th>
				<th>Keterangan</th>
				<th>Atribut</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM tb_mutasi";
			$query = mysqli_query($conn, $sql);

			while ($mts = mysqli_fetch_array($query)) {
				echo "<tr>";

				echo "<td>".$mts['id']."</td>";	
				echo "<td>".$mts['nama_lengkap']."</td>";
				echo "<td>".$mts['jenis_kelamin']."</td>";
				echo "<td>".date('d-m-Y', strtotime($mts["tanggal_lahir"]))."</td>";
				echo "<td>".$mts['tempat_lahir']."</td>";
				echo "<td>".$mts['pindah']."</td>";
				echo "<td>".$mts['tanggal_pindah']."</td>";
				echo "<td>".$mts['datang']."</td>";
				echo "<td>".$mts['tanggal_datang']."</td>";
				echo "<td>".$mts['keterangan']."</td>";
				
				echo "<td>";
				echo "<a href = 'edit-mutasi.php?id=".$mts['id']."'>Edit</a> | ";
				echo "<a href = 'hapus-mutasi.php?id=".$mts['id']."'>Hapus</a> ";
				echo "</td>";

				echo "</tr>";
			}
			?>

		</tbody>
	</table>
	</header>
</body>
</html>