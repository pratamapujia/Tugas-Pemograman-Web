<?php
$servername = "localhost";
$username = "root";
$dbname = "db_siswa";

include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM tb_siswa WHERE nik is NOT NULL AND nik");
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html = '<table border="1" width="100%">
<tr>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>NISN</th>
<th>NIK</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>No Akta</th>
<th>Agama</th>
<th>Kewarganegaraan</th>
<th>Berkebutuhan Khusus</th>
<th>Alamat Jalan</th>
<th>RT</th>
<th>RW</th>
<th>Nama Dusun</th>
<th>Nama Kelurahan</th>
<th>Kecamatan</th>
<th>Kode Pos</th>
<th>Lintang</th>
<th>Bujur</th>
<th>Tempat Tinggal</th>
<th>Moda Transportasi</th>
<th>Nomor KKS</th>
<th>Anak Ke</th>
<th>Penerima KPS/PKH</th>
<th>No KPS/PKH</th>
</tr>';
while($row = mysqli_fetch_array($query))
{
$html .= "<tr>
<td>".$row['nama']."</td>
<td>".$row['jenis_kelamin']."</td>
<td>".$row['nisn']."</td>
<td>".$row['nik']."</td>
<td>".$row['tempat_lahir']."</td>
<td>".$row['tanggal_lahir']."</td>
<td>".$row['no_akta']."</td>
<td>".$row['agama']."</td>
<td>".$row['kewarganegaraan']."</td>
<td>".$row['b_khusus']."</td>
<td>".$row['alamat']."</td>
<td>".$row['rt']."</td>
<td>".$row['rw']."</td>
<td>".$row['dusun']."</td>
<td>".$row['kelurahan']."</td>
<td>".$row['kecamatan']."</td>
<td>".$row['kode_pos']."</td>
<td>".$row['lintang']."</td>
<td>".$row['bujur']."</td>
<td>".$row['tempat_tinggal']."</td>
<td>".$row['m_transportasi']."</td>
<td>".$row['no_kks']."</td>
<td>".$row['anak']."</td>
<td>".$row['p_kps']."</td>
<td>".$row['no_kps']."</td>
</tr>";
}
$html .= "</html>";
$dompdf->loadhtml($html);
//setting ukuran dan orientasi kertas
$dompdf->setpaper('A1','landscape');
//Rendering dari html ke pdf
$dompdf->render();
//melakukan output file Pdf
$dompdf->stream('data_siswa.pdf');
?>