<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "db_penduduk";

    include "koneksi.php";

    if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
    $tanggal_meninggal = $_POST['tanggal_meninggal'];
    $tanggal_meninggal = date('Y-m-d', strtotime($tanggal_meninggal));
    
    // buat query update
    $sql = "UPDATE tb_meninggal SET nama='$nama',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',tanggal_meninggal='$tanggal_meninggal' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data-kematian.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>