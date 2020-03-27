<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "db_penduduk";

	include "koneksi.php";

	if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
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
    $rw= $_POST['rw'];
    $telpon = $_POST['telpon'];
    $email = $_POST['email'];

    // buat query update
    $sql = "UPDATE tb_penduduk SET nik='$nik',no_kk='$no_kk',nama='$nama',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir',agama='$agama',pendidikan='$pendidikan', pekerjaan='$pekerjaan', status_perkawinan='$status_perkawinan',kewarganegaraan='$kewarganegaraan',nama_ayah='$nama_ayah',nama_ibuk='$nama_ibuk',alamat='$alamat',rt='$rt',rw='$rw',telpon='$telpon',email='$email' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data-penduduk.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>