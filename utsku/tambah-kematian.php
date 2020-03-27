<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	// mengecek tombol simpan sudah diklik atau belum
	if(isset($_POST['submit'])){

		//mengambil data dari form
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
		$tanggal_meninggal = $_POST['tanggal_meninggal'];
		$tanggal_meninggal = date('Y-m-d', strtotime($tanggal_meninggal));

		//buat query
		$sql = "INSERT INTO tb_kematian (nama,jenis_kelamin,tanggal_lahir,tanggal_meninggal) VALUES ('$nama','$jenis_kelamin','$tanggal_lahir','$tanggal_meninggal')";
		$query = mysqli_query($conn, $sql);

		//mengecek query simpan
		if($query){
			header('Location: data-kematian.php?status=sukses');
		}else{
			echo "erorr";
		}
	}else {
		die("Akses dilarang....");
	}
?>