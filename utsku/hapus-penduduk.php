<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_penduduk WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if( $query ){
        header('Location: data-penduduk.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>