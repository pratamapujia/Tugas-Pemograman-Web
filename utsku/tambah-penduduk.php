<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	// mengecek tombol simpan sudah diklik atau belum
	if(isset($_POST['submit'])){

		//mengambil data dari form
		$nik = $_POST['nik'];
		$no_kk = $_POST['no_kk'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
		$tempat_lahir = $_POST['tempat_lahir'];
		$agama = $_POST['agama'];
		$pendidikan = $_POST['pendidikan'];
		$pekerjaan = $_POST['pekerjaan'];
		$status_perkawinan = $_POST['status_perkawinan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibuk = $_POST['nama_ibuk'];
		$alamat = $_POST['alamat'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$telpon = $_POST['telpon'];
		$email = $_POST['email'];

		//buat query
		$sql = "INSERT INTO tb_penduduk (nik,no_kk,nama,jenis_kelamin,tanggal_lahir,tempat_lahir,agama,pendidikan,pekerjaan,status_perkawinan,kewarganegaraan,nama_ayah,nama_ibuk,alamat,rt,rw,telpon,email) VALUES ('$nik','$no_kk','$nama','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$agama','$pendidikan','$pekerjaan','$status_perkawinan','$kewarganegaraan','$nama_ayah','$nama_ibuk','$alamat','$rt','$rw','$telpon','$email')";
		$query = mysqli_query($conn, $sql);

		//mengecek query simpan
		if($query){
			header('Location: data-penduduk.php?status=sukses');
		}else{
			echo "erorr";
		}
	}else {
		die("Akses dilarang....");
	}
?>