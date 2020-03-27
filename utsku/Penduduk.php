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
	<title>Tambah Penduduk</title>
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
	<link rel="stylesheet" type="text/css" href="penduduk.css">
</head>
<body>
	<div class="judul">
		<h2>TAMBAHKAN DATA PENDUDUK</h2>
	</div>
	<header>
	<h3>INPUT DATA</h3>
	<br>
	<form action="tambah-penduduk.php" method="post">
		<table>
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>No KK</td>
				<td><input type="text" name="no_kk"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
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
				<td>Agama</td>
				<td><select name="agama">
						<option value="islam">Islam</option>
						<option value="kristen">Kristen</option>
						<option value="katolik">Katolik</option>
						<option value="hindu">Hindu</option>
						<option value="budha">Budha</option>
						<option value="atheis">Atheis</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td><select name="pendidikan">
					<option value="SD">SD</option>
					<option value="SMP">SMP</option>
					<option value="SMA">SMA</option>
					<option value="SMK">SMK</option>
					<option value="S1">S1</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td><select name="status_perkawinan"> 
						<option value="Menikah">Menikah</option>
						<option value="Belum Menikah">Belum Menikah</option>
						<option value="Duda">Duda</option>
						<option value="Janda">Janda</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td><input type="text" name="kewarganegaraan"></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td><input type="text" name="nama_ayah"></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td><input type="text" name="nama_ibuk"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>RT</td>
				<td><input type="text" name="rt"></td>
			</tr>
			<tr>
				<td>RW</td>
				<td><input type="text" name="rw"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="telpon"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="Simpan">
		<br><br>
	<a href="data-penduduk.php" class="btn2">Lihat Semua Data Penduduk</a>
	</form>
	</header>
	<a href="utama.php" class="btn1">HOME</a>
</body>
</html>