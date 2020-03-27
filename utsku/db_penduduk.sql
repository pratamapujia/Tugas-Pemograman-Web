-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2020 pada 15.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('userLurah', 'admin'),
('userRT', 'admin'),
('userRW', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_meninggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kematian`
--

INSERT INTO `tb_kematian` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tanggal_meninggal`) VALUES
(4, 'Bagas', 'Laki-Laki', '2000-03-02', '2011-03-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` varchar(15) CHARACTER SET latin1 NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) CHARACTER SET latin1 NOT NULL,
  `pindah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tanggal_pindah` varchar(20) CHARACTER SET latin1 NOT NULL,
  `datang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tanggal_datang` varchar(20) CHARACTER SET latin1 NOT NULL,
  `keterangan` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mutasi`
--

INSERT INTO `tb_mutasi` (`id`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `pindah`, `tanggal_pindah`, `datang`, `tanggal_datang`, `keterangan`) VALUES
(7, 'Budiyanto', 'Laki-Laki', '1982-03-02', 'Surabaya', '-', '-', 'Surabaya', '26 Februari 2000', 'aku sehat'),
(8, 'Puji Istiani', 'Perempuan', '2020-03-04', 'Surabaya', '-', '-', 'Surabaya', '30 Agustus 2000', 'karena aku sehat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) CHARACTER SET latin1 NOT NULL,
  `no_kk` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) CHARACTER SET latin1 NOT NULL,
  `agama` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pendidikan` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pekerjaan` varchar(15) CHARACTER SET latin1 NOT NULL,
  `status_perkawinan` varchar(15) CHARACTER SET latin1 NOT NULL,
  `kewarganegaraan` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nama_ayah` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nama_ibuk` varchar(30) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `telpon` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id`, `nik`, `no_kk`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `kewarganegaraan`, `nama_ayah`, `nama_ibuk`, `alamat`, `rt`, `rw`, `telpon`, `email`) VALUES
(6, '3515182608000005', '3515167890563334', 'Pratama Puji Ariyanto', 'Laki-Laki', '2020-03-04', 'Sidoarjo', 'Islam', 'SMK', 'Mahasiswa', 'Belum Menikah', 'Indonesia', 'Budiyanto', 'Puji Istiani', 'Jl. Tropodo 1 Barat No 319B', 20, 2, '081553566510', 'pujiistini123@gmail.com'),
(7, '81739291238123', '1231242355345', 'Shofwan Hadi F', 'Laki-Laki', '1982-03-02', 'Sidoarjo', 'islam', 'SMK', 'Mahasiswa', 'Belum Menikah', 'Indonesia', 'Budiyanto', 'Siti Jamilin', 'Jl. Tropodo 1 Barat No 319B', 20, 2, '083830694069', 'pujiistiani123@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`,`no_kk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kematian`
--
ALTER TABLE `tb_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
