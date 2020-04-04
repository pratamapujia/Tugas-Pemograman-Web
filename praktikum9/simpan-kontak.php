<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_kontak";

	include "koneksi.php";

	if(isset($_POST['submit'])){

		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$pesan = $_POST['pesan'];
		
		$sql = "INSERT INTO tb_kontak (nama,jenis_kelamin,email,alamat,kota,pesan) VALUES ('$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
		$query = mysqli_query($conn, $sql);

		if($query){
			header('Location: kontak.html?status=sukses');
		}else{
			echo"ERORR";;
		}
	}else {
		die("Akses dilarang....");
	}
?>