<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	if (!isset($_GET['id'])) {
		header('Location: data-penduduk.php');
	}
	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_penduduk WHERE id=$id";
	$query = mysqli_query($conn, $sql);
	$pndk = mysqli_fetch_assoc($query);
	if( mysqli_num_rows($query) < 1 ){
    	die("data tidak ditemukan...");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css"/>
	<title>Form Edit Penduduk</title>
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
		<h3>Form Edit Data Penduduk</h3>
	</header>
	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $pndk['id']?>"/>
			<p>
            	<label for="nik">NIK: </label>
            	<input type="text" name="nik" value="<?php echo $pndk['nik'] ?>" />
        	</p>
			<p>
				<label for="no_kk">No KK: </label>
				<input type="text" name="no_kk" value="<?php echo $pndk['no_kk']?>"/>
			</p>
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" value="<?php echo $pndk['nama']?>"/>
			</p>
			 <p>
        		<label for="jenis_kelamin">Jenis Kelamin: </label>
            	<?php $jenis_kelamin = $pndk['jenis_kelamin']; ?>
            	<label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($jenis_kelamin == 'Laki-Laki') ? "checked": "" ?>> Laki-laki</label>
        	    <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        	</p>
        	<p>
				<label for="tanggal_lahir">Tanggal Lahir: </label>
				<input type="text" id="input" name="tanggal_lahir" value="<?php echo $pndk['tanggal_lahir']?>"/>
			</p>
			<p>
				<label for="tempat_lahir">Tanggal Lahir: </label>
				<input type="text" name="tempat_lahir" value="<?php echo $pndk['tempat_lahir']?>"/>
			</p>
			<p>
            	<label for="agama">Agama: </label>
            	<?php $agama = $pndk['agama']; ?>
            	<select name="agama">
               		<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                	<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Islam</option>
                	<option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Kristen</option>
                	<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
	                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
    	            <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
        	    </select>
	        </p>
    	    <p>
        	    <label for="pendidikan">Pendidikan: </label>
            	<?php $pendidikan = $pndk['pendidikan']; ?>
            	<select name="pendidikan">
                	<option <?php echo ($pendidikan == 'SD') ? "selected": "" ?>>SD</option>
                	<option <?php echo ($pendidikan == 'SMP') ? "selected": "" ?>>SMP</option>
                	<option <?php echo ($pendidikan == 'SMA') ? "selected": "" ?>>SMA</option>
                	<option <?php echo ($pendidikan == 'SMK') ? "selected": "" ?>>SMK</option>
                	<option <?php echo ($pendidikan == 'S1') ? "selected": "" ?>>S1</option>
            	</select>
        	</p>
        	<p>
				<label for="pekerjaan">Pekerjaan: </label>
				<input type="text" name="pekerjaan" value="<?php echo $pndk['pekerjaan']?>"/>
			</p>
			<p>
            	<label for="status_perkawinan">Status Perkawinan: </label>
            	<?php $status_perkawinan = $pndk['status_perkawinan']; ?>
            	<select name="status_perkawinan">
            	    <option <?php echo ($status_perkawinan == 'Menikah') ? "selected": "" ?>>Menikah</option>
                	<option <?php echo ($status_perkawinan == 'Belum Menikah') ? "selected": "" ?>>Belum Menikah</option>
                	<option <?php echo ($status_perkawinan == 'Duda') ? "selected": "" ?>>Duda</option>
                	<option <?php echo ($status_perkawinan == 'Janda') ? "selected": "" ?>>Janda</option>
           		</select>
        	</p>
        	<p>
				<label for="kewarganegaraan">kewarganegaraan: </label>
				<input type="text" name="kewarganegaraan" value="<?php echo $pndk['kewarganegaraan']?>"/>
			</p>
			<p>
				<label for="nama_ayah">Nama Ayah: </label>
				<input type="text" name="nama_ayah" value="<?php echo $pndk['nama_ayah']?>"/>
			</p>
			<p>
				<label for="nama_ibuk">Nama Ibuk: </label>
				<input type="text" name="nama_ibuk" value="<?php echo $pndk['nama_ibuk']?>"/>
			</p>
			<p>
				<label for="alamat">Alamat: </label>
				<input type="text" name="alamat" value="<?php echo $pndk['alamat']?>"/>
			</p>
			<p>
				<label for="rt">RT: </label>
				<input type="text" name="rt" value="<?php echo $pndk['rt']?>"/>
			</p>
			<p>
				<label for="rw">Rw: </label>
				<input type="text" name="rw" value="<?php echo $pndk['rw']?>"/>
			</p>
			<p>
				<label for="telpon">No Telepon: </label>
				<input type="text" name="telpon" value="<?php echo $pndk['telpon']?>"/>
			</p>
			<p>
				<label for="email">Email: </label>
				<input type="text" name="email" value="<?php echo $pndk['email']?>"/>
			</p>
			<p>
           		<input type="submit" value="Simpan" name="simpan" />
        	</p>
		</fieldset>
		<br>
	<a href="utama.php">HOME</a>
	</form>
</body>
</html>