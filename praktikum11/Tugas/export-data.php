<?php
$servername = "localhost";
$username = "root";
$dbname = "db_siswa";

include "koneksi.php";

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','Nama');
$sheet->setCellValue('B1','Jenis Kelamin');
$sheet->setCellValue('C1','NISN');
$sheet->setCellValue('D1','NIK');
$sheet->setCellValue('E1','Tempat Lahir');
$sheet->setCellValue('F1','Tanggal Lahir');
$sheet->setCellValue('G1','No Akta');
$sheet->setCellValue('H1','Agama');
$sheet->setCellValue('I1','Kewarganegaraan');
$sheet->setCellValue('J1','Berkebutuhan Khusus');
$sheet->setCellValue('K1','Alamat Jalan');
$sheet->setCellValue('L1','RT');
$sheet->setCellValue('M1','RW');
$sheet->setCellValue('N1','Nama Dusun');
$sheet->setCellValue('O1','Nama Kelurahan');
$sheet->setCellValue('P1','Kecamatan');
$sheet->setCellValue('Q1','Kode Pos');
$sheet->setCellValue('R1','Lintang');
$sheet->setCellValue('S1','Bujur');
$sheet->setCellValue('T1','Tempat Tinggal');
$sheet->setCellValue('U1','Moda Transportasi');
$sheet->setCellValue('V1','Nomor KKS');
$sheet->setCellValue('W1','Anak Ke');
$sheet->setCellValue('X1','Penerima KPS/PKH');
$sheet->setCellValue('Y1','No KPS/PKH');

$query = mysqli_query($conn,"SELECT * FROM tb_siswa WHERE nik is NOT NULL AND nik");
$i = 2;
while($row = mysqli_fetch_array($query)){

	$sheet->setCellValue('A'.$i, $row['nama']);
	$sheet->setCellValue('B'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('C'.$i, $row['nisn']);
	$sheet->setCellValue('D'.$i, $row['nik']);
	$sheet->setCellValue('E'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('F'.$i, $row['tanggal_lahir']);
	$sheet->setCellValue('G'.$i, $row['no_akta']);
	$sheet->setCellValue('H'.$i, $row['agama']);
	$sheet->setCellValue('I'.$i, $row['kewarganegaraan']);
	$sheet->setCellValue('J'.$i, $row['b_khusus']);
	$sheet->setCellValue('K'.$i, $row['alamat']);
	$sheet->setCellValue('L'.$i, $row['rt']);
	$sheet->setCellValue('M'.$i, $row['rw']);
	$sheet->setCellValue('N'.$i, $row['dusun']);
	$sheet->setCellValue('O'.$i, $row['kelurahan']);
	$sheet->setCellValue('P'.$i, $row['kecamatan']);
	$sheet->setCellValue('Q'.$i, $row['kode_pos']);
	$sheet->setCellValue('R'.$i, $row['lintang']);
	$sheet->setCellValue('S'.$i, $row['bujur']);
	$sheet->setCellValue('T'.$i, $row['tempat_tinggal']);
	$sheet->setCellValue('U'.$i, $row['m_transportasi']);
	$sheet->setCellValue('V'.$i, $row['no_kks']);
	$sheet->setCellValue('W'.$i, $row['anak']);
	$sheet->setCellValue('X'.$i, $row['p_kps']);
	$sheet->setCellValue('Y'.$i, $row['no_kps']);
	$i++;
}
	$styleArray = ['borders' => ['allBorders' => ['borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],],];
	$i = $i - 1;
	$sheet->getStyle('A1:Y'.$i)->applyFromArray($styleArray);
	$writer = new Xlsx($spreadsheet);
	$writer->save('Report Data Siswa.xlsx');
?>