<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css"/>
	<title>Tambah Mutasi</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
   	$(function() {
     	$( "#input" ).datepicker({
     	changeMonth: true,
     	changeYear: true
     	});
   	});
	</script>
	<link rel="stylesheet" type="text/css" href="mutasi.css">
</head>
<body>
	<div class="judul">
		<h2>TAMBAHKAN DATA MUTASI</h2>
	</div>
	<header>
	<h3>INPUT DATA</h3>
	<br>
	<form action="tambah-mutasi.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</td>
				<td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" id="input" size="15" name="tanggal_lahir"/></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="tetx" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Pindah Ke</td>
				<td><input type="text" name="pindah"></td>
			</tr>
			<tr>
				<td>Tanggal Pindah</td>
				<td><input type="text" name="tanggal_pindah"/></td>
			</tr>
			<tr>
				<td>Datang Dari</td>
				<td><input type="text" name="datang"></td>
			</tr>
			<tr>
				<td>Tanggal Datang</td>
				<td><input type="text" name="tanggal_datang"/></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><textarea name="keterangan" cols="20" rows="3"></textarea></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="Simpan">
		<br><br>
	<a href="data-mutasi.php" class="btn2">Lihat Semua Data Mutasi</a>
	<br>
	</form>
	</header>
	<a href="utama.php" class="btn1">HOME</a>
</body>
</html>