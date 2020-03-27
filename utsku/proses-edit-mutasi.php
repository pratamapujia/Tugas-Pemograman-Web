<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "db_penduduk";

    include "koneksi.php";

    if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
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
    
    // buat query update
    $sql = "UPDATE tb_mutasi SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir',pindah='$pindah',tanggal_pindah='$tanggal_pindah', datang='$datang', tanggal_datang='$tanggal_datang',keterangan='$keterangan' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data-mutasi.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>