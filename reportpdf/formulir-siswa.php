<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_siswa";

	include "koneksi.php";
	
error_reporting(0);
if(isset($_POST['submit'])){
	if($_POST['nama'] == ""){
		$error['nama'] = "Nama tidak boleh kosong";
	}
	$nama = $_POST['nama'];
	if(!preg_match("/^[a-zA-Z -]*$/",$nama)){
		$error['nama'] = "Nama hanya boleh huruf dan spasi";
	}

	if(empty($_POST['jenis_kelamin'])){
		$error['jenis_kelamin'] = "Pilih salah satu data"; 
	}else{
		$jenis_kelamin = $_POST['jenis_kelamin'];
	}

	$nisn = $_POST['nisn'];
	if(empty($nisn)){
		$error['nisn'] = "NISN tidak boleh kosong";
	}
	elseif(!is_numeric($nisn)){
		$error['nisn'] = "NISN hanya boleh angka";
	}
	elseif((strlen($nisn) !=10)){
		$error['nisn'] = "NISN harus 10 karakter";
	}

	$nik = $_POST['nik'];
	if(empty($nik)){
		$error['nik'] = "NIK tidak boleh kosong";
	}
	elseif(!is_numeric($nik)){
		$error['nik'] = "NIK hanya boleh angka";
	}
	elseif((strlen($nik) !=16)){
		$error['nik'] = "NIK harus 16 karakter";
	}

	if($_POST['tempat_lahir'] == ""){
		$error['tempat_lahir'] = "Tempat Lahir tidak boleh kosong";
	}
	$tempat_lahir = $_POST['tempat_lahir'];
	if(!preg_match("/^[a-zA-Z -]*$/",$tempat_lahir)){
		$error['tempat_lahir'] = "Tempat Lahir hanya boleh huruf dan spasi";
	}

	$tanggal_lahir = $_POST['tanggal_lahir'];
	if(empty($tanggal_lahir)){
		$error['tanggal_lahir'] = "Tanggal Lahir tidak boleh kosong";
	} else {
		$tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
	}

	$no_akta = $_POST['no_akta'];
	if(empty($no_akta)){
		$error['no_akta'] = "NO Akta tidak boleh kosong";
	}
	elseif(!is_numeric($no_akta)){
		$error['no_akta'] = "NO Akta hanya boleh angka";
	}
	elseif((strlen($no_akta) !=16)){
		$error['no_akta'] = "NO Akta harus 16 karakter";
	}

	$agama = $_POST['agama'];
	if($agama == "NULL"){
		$error['agama'] = "Data tidak boleh kosong";
	}

	if($_POST['kewarganegaraan'] == ""){
		$error['kewarganegaraan'] = "Kewarganegaraan tidak boleh kosong";
	}
	$kewarganegaraan = $_POST['kewarganegaraan'];
	if(!preg_match("/^[a-zA-Z -]*$/",$kewarganegaraan)){
		$error['kewarganegaraan'] = "Kewarganegaraan hanya boleh huruf dan spasi";
	}

	$b_khusus = $_POST['b_khusus'];
	if($b_khusus == "NULL"){
		$error['b_khusus'] = "Data tidak boleh kosong";
	}

	$alamat = $_POST['alamat'];
	if(empty($alamat)){
		$error['alamat'] = "Alamat Jalan tidak boleh kosong";
	}

	$rt = $_POST['rt'];
	if(empty($rt)){
		$error['rt'] = "RT tidak boleh kosong";
	}
	elseif(!is_numeric($rt)){
		$error['rt'] = "RT hanya boleh angka";
	}
	elseif((strlen($rt) !=2)){
		$error['rt'] = "RT harus 2 karakter";
	}

	$rw = $_POST['rw'];
	if(empty($rt)){
		$error['rw'] = "RW tidak boleh kosong";
	}
	elseif(!is_numeric($rw)){
		$error['rw'] = "RW hanya boleh angka";
	}
	elseif((strlen($rw) !=2)){
		$error['rw'] = "RW harus 2 karakter";
	}

	$dusun = $_POST['dusun'];
	if(empty($dusun)){
		$error['dusun'] = "Dusun tidak boleh kosong";
	}

	$kelurahan = $_POST['kelurahan'];
	if(empty($kelurahan)){
		$error['kelurahan'] = "Kelurahan tidak boleh kosong";
	}

	$kecamatan = $_POST['kecamatan'];
	if(empty($kecamatan)){
		$error['kecamatan'] = "Kecamatan tidak boleh kosong";
	}

	$kode_pos = $_POST['kode_pos'];
	if(empty($kode_pos)){
		$error['kode_pos'] = "Kode Pos tidak boleh kosong";
	}
	elseif(!is_numeric($kode_pos)){
		$error['kode_pos'] = "Kode Pos hanya boleh angka";
	}
	elseif((strlen($kode_pos) !=5)){
		$error['kode_pos'] = "Kode Pos harus 5 karakter";
	}

	$lintang = $_POST['lintang'];
	if(empty($lintang)){
		$error['lintang'] = "Lintang tidak boleh kosong";
	}
	elseif(!is_numeric($lintang)){
		$error['lintang'] = "Lintang hanya boleh angka";
	}

	$bujur = $_POST['bujur'];
	if(empty($bujur)){
		$error['bujur'] = "Bujur tidak boleh kosong";
	}
	elseif(!is_numeric($bujur)){
		$error['bujur'] = "Bujur hanya boleh angka";
	}

	$tempat_tinggal = $_POST['tempat_tinggal'];
	if($tempat_tinggal == "NULL"){
		$error['tempat_tinggal'] = "Data tidak boleh kosong";
	}

	$m_transportasi = $_POST['m_transportasi'];
	if($m_transportasi == "NULL"){
		$error['m_transportasi'] = "Data tidak boleh kosong";
	}

	$no_kks = $_POST['no_kks'];

	$anak = $_POST['anak'];
	if(empty($anak)){
		$error['anak'] = "Data tidak boleh kosong";
	}

	$p_kps = $_POST['p_kps'];
	if(empty($_POST['p_kps'])){
		$error['p_kps'] = "Pilih salah satu data"; 
	}

	$no_kps = $_POST['no_kps'];

$sql = "INSERT INTO tb_siswa VALUES ('$nama','$jenis_kelamin','$nisn','$nik','$tempat_lahir','$tanggal_lahir','$no_akta','$agama','$kewarganegaraan','$b_khusus','$alamat','$rt','$rw','$dusun','$kelurahan','$kecamatan','$kode_pos','$lintang','$bujur','$tempat_tinggal','$m_transportasi','$no_kks','$anak','$p_kps','$no_kps')";
$query = mysqli_query($conn, $sql);

if($query){
	header('Location: formulir-siswa.php?status=sukses');
}else{
	echo "Gagal input data "/*. $sql . "<br>" . mysqli_error($conn)*/; }
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css"/>
	<title>Formulir Perserta Didik</title>
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
	<style>
		.error {color: #FF0000;}
	</style>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="h1">
<h3 class="h3-form">FORM PESERTA DIDIK</h3>
<br>
<form action="" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>Nama Lengkap</td>
		<td> : <input type="text" name="nama" placeholder="Nama Panjang" >
			<?php
			if(isset($error['nama'])){
				echo "<div class='error'>".$error['nama']."</div>";
			}
			?>
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td> : <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if(isset($jenis_kelamin) && $jenis_kelamin ='Laki-Laki') echo 'checked="checked"'; ?> > <label>Laki-Laki</label>
		<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if(isset($jenis_kelamin) && $jenis_kelamin ='Perempuan') echo 'checked="checked"'; ?>> <label>Perempuan</label>
		<?php
			if(isset($error['jenis_kelamin'])){
				echo "<div class='error'>".$error['jenis_kelamin']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>NISN</td>
		<td> : <input type="text" name="nisn" placeholder="NISN">
		<?php
			if(isset($error['nisn'])){
				echo "<div class='error'>".$error['nisn']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>NIK/ No. KITAS (untuk WNA)</td>
		<td> : <input type="text" name="nik" placeholder="NIK">
		<?php
			if(isset($error['nik'])){
				echo "<div class='error'>".$error['nik']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td> : <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
		<?php
			if(isset($error['tempat_lahir'])){
				echo "<div class='error'>".$error['tempat_lahir']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td> : <input type="text" id="input" size="15" name="tanggal_lahir" placeholder="Tanggal Lahir"><?php
			if(isset($error['tanggal_lahir'])){
				echo "<div class='error'>".$error['tanggal_lahir']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>No. Registrasi Akta Lahir</td>
		<td> : <input type="text" name="no_akta" placeholder="No Akta">
		<?php
			if(isset($error['no_akta'])){
				echo "<div class='error'>".$error['no_akta']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td> : <select name="agama" >
			<option value="NULL">-Pilih Agama-</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Katholik">Katholik</option>
			<option value="Budha">Budha</option>
			<option value="Hindu">Hindu</option>
			<option value="Kong Hu Cu">Kong Hu CU</option>
		</select>
		<?php
			if(isset($error['agama'])){
				echo "<div class='error'>".$error['agama']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Kewarganegaraan</td>
		<td> : <input type="text" name="kewarganegaraan" placeholder="Kewarganegaraan">
		<?php
			if(isset($error['kewarganegaraan'])){
				echo "<div class='error'>".$error['kewarganegaraan']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Bekebutuhan Khusus</td>
		<td> : <select name="b_khusus" >
			<option value="NULL">-Pilih-</option>
			<option value="Tidak" >Tidak</option>
			<option value="Netra" >Netra</option>
			<option value="Rungu" >Rungu</option>
			<option value="Grahita Ringan" >Grahita Ringan</option>
			<option value="Grahita Sedang">Grahit Sedang</option>
			<option value="Daksa Ringan" >Daksa Ringan</option>
			<option value="Daksa Sedang" >Daksa Sedang</option>
			<option value="Laras" >Laras</option>
			<option value="Wicara" >Wicara</option>
			<option value="Tuna Ganda" >Tuna Ganda</option>
			<option value="Hiperaktif" >Hiperaktif</option>
			<option value="Cerdas Istimewa" >Cerdas Istimewa</option>
			<option value="Bakat Istimewa" >Bakat Istimewa</option>
			<option value="Kesulitan Belajar" >Kesulitan Belajar</option>
			<option value="Indigo" >Indigo</option>
			<option value="Down Sindrom" >Down Sindrom</option>
			<option value="Autis" >Autis</option>
		</select>
		<?php
			if(isset($error['b_khusus'])){
				echo "<div class='error'>".$error['b_khusus']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Alamat Jalan</td>
		<td>: <input type="text" name="alamat" placeholder="Alamat Jalan">
		<?php
			if(isset($error['alamat'])){
				echo "<div class='error'>".$error['alamat']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>RT</td>
		<td>: <input type="text" name="rt" placeholder="RT">
		<?php
			if(isset($error['rt'])){
				echo "<div class='error'>".$error['rt']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>RW</td>
		<td>: <input type="text" name="rw" placeholder="RW">
		<?php
			if(isset($error['rw'])){
				echo "<div class='error'>".$error['rw']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Nama Dusun</td>
		<td>: <input type="text" name="dusun" placeholder="Dusun">
		<?php
			if(isset($error['dusun'])){
				echo "<div class='error'>".$error['dusun']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Nama Kelurahan/Desa</td>
		<td>: <input type="text" name="kelurahan" placeholder="Kelurahan">
		<?php
			if(isset($error['kelurahan'])){
				echo "<div class='error'>".$error['kelurahan']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>: <input type="text" name="kecamatan" placeholder="Kecamatan">
		<?php
			if(isset($error['kecamatan'])){
				echo "<div class='error'>".$error['kecamatan']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Kode Pos</td>
		<td>: <input type="text" name="kode_pos" placeholder="Kode Pos">
		<?php
			if(isset($error['kode_pos'])){
				echo "<div class='error'>".$error['kode_pos']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Lintang</td>
		<td>: <input type="text" name="lintang" placeholder="Lintang"><?php
			if(isset($error['lintang'])){
				echo "<div class='error'>".$error['lintang']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Bujur</td>
		<td>: <input type="text" name="bujur" placeholder="Bujur">
		<?php
			if(isset($error['bujur'])){
				echo "<div class='error'>".$error['bujur']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Tempat Tinggal</td>
		<td>: <select name="tempat_tinggal">
			<option value="NULL">-Pilih Tempat Tinggal-</option>
			<option value="Bersama Orang tua" >Bersama Orang tua</option>
			<option value="Wali" >Wali</option>
			<option value="Asrama" >Asrama</option>
			<option value="Panti Asuhan" >Panti Asuhan</option>
			<option value="Lainnya" >Lainnya</option>
			</select>
		<?php
			if(isset($error['tempat_tinggal'])){
				echo "<div class='error'>".$error['tempat_tinggal']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Moda Transportasi</td>
		<td>: <select name="m_transportasi" >
			<option value="NULL">-Pilih Transportasi-</option>
			<option value="Jalan Kaki" >Jalan Kaki</option>
			<option value="Kendaraan Pribadi" >Kendaraan Pribadi</option>
			<option value="Kendaraan Umum" >Kendaraan Umum</option>
			<option value="Jemputan Sekolah" >Jemputan Sekolah</option>
			<option value="Ojek" >Ojek</option>
		</select>
		<?php
			if(isset($error['m_transportasi'])){
				echo "<div class='error'>".$error['m_transportasi']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Nomor KKS </td>
		<td>: <input type="text" name="no_kks" placeholder = "Nomor KKS (jika ada)"></td>
	</tr>
	<tr>
		<td>Anak ke-</td>
		<td>: <input type="number" name="anak" placeholder="Masukkan Angka">
		<?php
			if(isset($error['anak'])){
				echo "<div class='error'>".$error['anak']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Penerima KPS/PKH</td>
		<td>: <input type="radio" name="p_kps" value="Iya" <?php if(isset($p_kps) && $p_kps ='Iya') echo 'checked="checked"'; ?>> <label>IYA</label>
			<input type="radio" name="p_kps" value="Tidak" <?php if(isset($p_kps) && $p_kps ='Tidak') echo 'checked="checked"'; ?>> <label>TIDAK</label>
		<?php
			if(isset($error['p_kps'])){
				echo "<div class='error'>".$error['p_kps']."</div>";
		}
		?></td>
	</tr>
	<tr>
		<td>Nomor KPS/PKH</td>
		<td>: <input type="text" name="no_kps" placeho<?php if(isset($p_kps) && $p_kps ='Iya') echo 'checked="checked"'; ?>lder = "Nomor KPS (jika ada)"></td>
	</tr>
</table>
<br>
<input type="submit" name="submit" value="Simpan">
<br><br>
<a href="data-siswa.php" class="btn1">Lihat Data</a>
</form>
</header>
</body>
</html>