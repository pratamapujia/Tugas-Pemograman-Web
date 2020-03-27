<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	// mengecek tombol simpan sudah diklik atau belum
	if(isset($_POST['submit'])){

		//mengambil data dari form
		$nama_lengkap = $_POST['nama_lengkap'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
		$tempat_lahir = $_POST['tempat_lahir'];
		$pindah = $_POST['pindah'];
		$tanggal_pindah = $_POST['tanggal_pindah'];
		$datang = $_POST['datang'];
		$tanggal_datang = $_POST['tanggal_datang'];
		$keterangan = $_POST['keterangan'];

		//buat query
		$sql = "INSERT INTO tb_mutasi (nama_lengkap,jenis_kelamin,tanggal_lahir,tempat_lahir,pindah,tanggal_pindah,datang,tanggal_datang,keterangan) VALUES ('$nama_lengkap','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$pindah','$tanggal_pindah','$datang','$tanggal_datang','$keterangan')";
		$query = mysqli_query($conn, $sql);

		//mengecek query simpan
		if($query){
			header('Location: data-mutasi.php?status=sukses');
		}else{
			echo "erorr";
		}
	}else {
		die("Akses dilarang....");
	}
?>