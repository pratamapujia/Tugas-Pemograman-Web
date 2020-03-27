<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	if (!isset($_GET['id'])) {
		header('Location: data-mutasi.php');
	}
	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_mutasi WHERE id=$id";
	$query = mysqli_query($conn, $sql);
	$mts = mysqli_fetch_assoc($query);
	if( mysqli_num_rows($query) < 1 ){
    	die("data tidak ditemukan...");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css"/>
	<title>Form Edit Mutasi</title>
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
</head>
<body>
	<header>
		<h3>Form Edit Data Mutasi</h3>
	</header>
	<form action="proses-edit-mutasi.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $mts['id']?>"/>
			<p>
				<label for="nama_lengkap">Nama: </label>
				<input type="text" name="nama_lengkap" value="<?php echo $mts['nama_lengkap']?>"/>
			</p>
			<p>
        		<label for="jenis_kelamin">Jenis Kelamin: </label>
            	<?php $jenis_kelamin = $mts['jenis_kelamin']; ?>
            	<label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($jenis_kelamin == 'Laki-Laki') ? "checked": "" ?>> Laki-laki</label>
        	    <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        	</p>
        	<p>
				<label for="tanggal_lahir">Tanggal Lahir: </label>
				<input type="text" id="input" name="tanggal_lahir" value="<?php echo $mts['tanggal_lahir']?>"/>
			</p>
			<p>
				<label for="tempat_lahir">Tempat Lahir: </label>
				<input type="text" name="tempat_lahir" value="<?php echo $mts['tempat_lahir']?>"/>
			</p>
			<p>
				<label for="pindah">Pindah: </label>
				<input type="text" name="pindah" value="<?php echo $mts['pindah']?>"/>
			</p>
			<p>
				<label for="tanggal_pindah">Tanggal Pindah: </label>
				<input type="text" name="tanggal_pindah" value="<?php echo $mts['tanggal_pindah']?>"/>
			</p>
			<p>
				<label for="datang">Datang: </label>
				<input type="text" name="datang" value="<?php echo $mts['datang']?>"/>
			</p>
			<p>
				<label for="tanggal_datang">Tanggal Datang: </label>
				<input type="text" name="tanggal_datang" value="<?php echo $mts['tanggal_datang']?>"/>
			</p>
			<p>
				<label for="keterangan">Keterangan: </label>
				<input type="text" name="keterangan" value="<?php echo $mts['keterangan']?>"/>
			</p>
			<p>
           		<input type="submit" value="Simpan" name="simpan" />
        	</p>
		</fieldset>
	</form>	
	<br>
	<a href="utama.php">HOME</a>
</body>
</html>