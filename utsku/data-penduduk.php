<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Penduduk</title>
	<link rel="stylesheet" type="text/css" href="dp.css">
</head>
<body>
	<nav>
		<a href="utama.php" class="btn1">HOME</a>
	</nav>
	<header>
		<div>
			<a href="Penduduk.php" class="btn2">Tambah Penduduk</a>
		</div>
		<h3>Data Penduduk</h3>
	<br>
	<table border="0.5">
		<thead>
			<tr>
				<th>NO</th>
				<th>NIK</th>
				<th>No KK</th>
				<th>Nama Lenkap</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Tempat Lahir</th>
				<th>Agama</th>
				<th>Pendidikan</th>
				<th>Pekerjaan</th>
				<th>Status Perkawinan</th>
				<th>Kewarganegaraan</th>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
				<th>Alamat</th>
				<th>RT</th>
				<th>RW</th>
				<th>No Telpon</th>
				<th>Email</th>
				<th>Atribut</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM tb_penduduk";
			$query = mysqli_query($conn, $sql);

			while ($pndk = mysqli_fetch_array($query)) {
				echo "<tr>";

				echo "<td>".$pndk['id']."</td>";	
				echo "<td>".$pndk['nik']."</td>";
				echo "<td>".$pndk['no_kk']."</td>";
				echo "<td>".$pndk['nama']."</td>";
				echo "<td>".$pndk['jenis_kelamin']."</td>";
				echo "<td>".date('d-m-Y', strtotime($pndk["tanggal_lahir"]))."</td>";
				echo "<td>".$pndk['tempat_lahir']."</td>";
				echo "<td>".$pndk['agama']."</td>";
				echo "<td>".$pndk['pendidikan']."</td>";
				echo "<td>".$pndk['pekerjaan']."</td>";
				echo "<td>".$pndk['status_perkawinan']."</td>";
				echo "<td>".$pndk['kewarganegaraan']."</td>";
				echo "<td>".$pndk['nama_ayah']."</td>";
				echo "<td>".$pndk['nama_ibuk']."</td>";
				echo "<td>".$pndk['alamat']."</td>";
				echo "<td>".$pndk['rt']."</td>";
				echo "<td>".$pndk['rw']."</td>";
				echo "<td>".$pndk['telpon']."</td>";
				echo "<td>".$pndk['email']."</td>";

				echo "<td>";
				echo "<a href = 'edit-penduduk.php?id=".$pndk['id']."'>Edit</a> | ";
				echo "<a href = 'hapus-penduduk.php?id=".$pndk['id']."'>Hapus</a> ";
				echo "</td>";

				echo "</tr>";
			}
			?>

		</tbody>
	</table>
	<br>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</header>
</body>
</html>