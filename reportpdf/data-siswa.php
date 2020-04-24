<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_siswa";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="h2">
		<div>
			<a target="_blank" href="report-data.php">Report Data Ke PDF</a>
			<br>
			<a href="formulir-siswa.php" class="btn2">Tambah Siswa</a>
		</div>
		<br>
		<h3 class="h3-cetak">Data Siswa</h3>
	<br>
	<table class="table" cellpadding="2" cellspacing="1" border="1">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>NISN</th>
				<th>NIK</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>No Akta</th>
				<th>Agama</th>
				<th>Kewarganegaraan</th>
				<th>Berkebutuhan Khusus</th>
				<th>Alamat Jalan</th>
				<th>RT</th>
				<th>RW</th>
				<th>Nama Dusun</th>
				<th>Nama Kelurahan</th>
				<th>Kecamatan</th>
				<th>Kode Pos</th>
				<th>Lintang</th>
				<th>Bujur</th>
				<th>Tempat Tinggal</th>
				<th>Moda Transportasi</th>
				<th>Nomor KKS</th>
				<th>Anak Ke</th>
				<th>Penerima KPS/PKH</th>
				<th>No KPS/PKH</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM tb_siswa WHERE nik is NOT NULL AND nik";
			$query = mysqli_query($conn, $sql);

			while ($cek = mysqli_fetch_array($query)) {
				echo "<tr>";
	
				echo "<td>".$cek['nama']."</td>";
				echo "<td>".$cek['jenis_kelamin']."</td>";
				echo "<td>".$cek['nisn']."</td>";
				echo "<td>".$cek['nik']."</td>";
				echo "<td>".$cek['tempat_lahir']."</td>";
				echo "<td>".$cek['tanggal_lahir']."</td>";
				echo "<td>".$cek['no_akta']."</td>";
				echo "<td>".$cek['agama']."</td>";
				echo "<td>".$cek['kewarganegaraan']."</td>";
				echo "<td>".$cek['b_khusus']."</td>";
				echo "<td>".$cek['alamat']."</td>";
				echo "<td>".$cek['rt']."</td>";
				echo "<td>".$cek['rw']."</td>";
				echo "<td>".$cek['dusun']."</td>";
				echo "<td>".$cek['kelurahan']."</td>";
				echo "<td>".$cek['kecamatan']."</td>";
				echo "<td>".$cek['kode_pos']."</td>";
				echo "<td>".$cek['lintang']."</td>";
				echo "<td>".$cek['bujur']."</td>";
				echo "<td>".$cek['tempat_tinggal']."</td>";
				echo "<td>".$cek['m_transportasi']."</td>";
				echo "<td>".$cek['no_kks']."</td>";
				echo "<td>".$cek['anak']."</td>";
				echo "<td>".$cek['p_kps']."</td>";
				echo "<td>".$cek['no_kps']."</td>";

				echo "</tr>";
			}
			?>

		</tbody>
	</table>
	</header>
</body>
</html>