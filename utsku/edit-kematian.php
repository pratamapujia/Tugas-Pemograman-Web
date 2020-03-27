<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	if (!isset($_GET['id'])) {
		header('Location: data-kematian.php');
	}
	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_kematian WHERE id=$id";
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
	<title>Form Edit Kematian</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
   	$(function() {
     	$( "#input" ).datepicker({
     	changeMonth: true,
     	changeYear: true
     	});
   	});
   	$(function() {
     	$( "#input2" ).datepicker({
     	changeMonth: true,
     	changeYear: true
     	});
   	});
	</script>
</head>
<body>
	<header>
		<h3>Form Edit Data Kematian</h3>
	</header>
	<form action="proses-edit-kematian.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $mts['id']?>"/>
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" value="<?php echo $mts['nama']?>"/>
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
				<label for="tanggal_meninggal">Tanggal Lahir: </label>
				<input type="text" id="input2" name="tanggal_meninggal" value="<?php echo $mts['tanggal_meninggal']?>"/>
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