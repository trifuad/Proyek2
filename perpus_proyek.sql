-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2020 pada 07.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(2, 'Inayati', 'admin2', 'c84258e9c39059a89ab77d846ddab909'),
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `nama_anggota`, `gender`, `no_telp`, `alamat`, `email`, `password`) VALUES
(1, 'bening', 'Bening Sukmaningrum', 'Perempuan', '082190223410', 'Turen, Malang', 'bening@gmail.com', 'ce60a0e18edc482f6c3cbd2fa1544c04'),
(2, 'anggota', 'Anggota', 'Laki-Laki', '0812237891910', 'Malang', 'senyumina@gmail.com', 'dfb9e85bc0da607ff76e0559c62537e8'),
(32, 'inaa', 'Ina', 'Perempuan', '0812237891910', 'Malang', 'senyumina@gmail.com', 'inaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(35) NOT NULL,
  `thn_terbit` date NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('Rak 1','Rak 2','Rak 3') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `status_buku` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul_buku`, `pengarang`, `thn_terbit`, `penerbit`, `isbn`, `jumlah_buku`, `lokasi`, `gambar`, `tgl_input`, `status_buku`) VALUES
(26, 8, 'Ayat - Ayat Cinta', 'Haryani', '2017-10-29', 'BSI CUY ANJAY', '1113147464', 12, 'Rak 1', 'gambar1560109811.jpg', '2019-03-27', '1'),
(5, 8, 'Dilan 1990', 'Pidi Baiq', '2013-05-05', 'CV.Indo Kreasi', '3553234454', 26, 'Rak 1', 'gambar1554435238.PNG', '2019-03-27', '1'),
(6, 4, 'Public Speaking', 'Pambudi Prasetyo', '2015-06-06', 'Aldi Pustaka', '843594759', 95, 'Rak 2', 'gambar1555855623.jpg', '2019-01-24', '1'),
(7, 3, 'Trik SQL', 'Ahdim Makaren', '2014-07-07', 'Wacana Ria', '54234762', 1, 'Rak 1', 'gambar1539747068.jpg', '2019-03-23', '1'),
(8, 6, 'Kemurnian Agama', 'Pambudi Prasetyo', '2014-08-08', 'Aldi Pustaka', '980958607', 0, 'Rak 3', 'gambar1539747079.jpg', '2018-07-24', '1'),
(9, 3, 'Web Programming ', 'Ahdim Makaren', '2012-09-09', 'Wacana Ria', '12121314', 73, 'Rak 2', 'gambar1554436963.jpg', '2019-03-27', '1'),
(10, 3, 'Dasar Pemrograman Java', 'Rudi Hartono', '2017-03-02', 'Unjung Pena', '12345345', 5, 'Rak 2', 'gambar1554436894.jpg', '2018-05-08', '1'),
(33, 1, 'ioejfiofj', 'oijfeiofjeiofjioejiofj', '2018-10-27', 'oijiioejfioejf', '453439457', 100, 'Rak 2', 'gambar1562258670.png', '2019-07-04', '1'),
(21, 8, 'Hujan', 'Fiqisulaiman', '2016-10-29', 'Gramedia', '1117474543', 97, 'Rak 2', 'gambar1553077127.PNG', '2019-03-20', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_pinjam` varchar(5) NOT NULL,
  `denda` double NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `id_buku` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sains'),
(2, 'Hobby'),
(3, 'Komputer'),
(4, 'Komunikasi'),
(5, 'Hukum'),
(6, 'Agama'),
(7, 'Populer'),
(8, 'Bahasa'),
(9, 'Komik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriprofil`
--

CREATE TABLE `kategoriprofil` (
  `id_kategoriprofil` int(11) NOT NULL,
  `nama_kategoriprofil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoriprofil`
--

INSERT INTO `kategoriprofil` (`id_kategoriprofil`, `nama_kategoriprofil`) VALUES
(1, 'Profil'),
(2, 'Penghargaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id_pinjam` varchar(5) DEFAULT NULL,
  `tgl_pencatatan` datetime DEFAULT NULL,
  `id_anggota` int(4) DEFAULT NULL,
  `id_buku` int(4) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` double DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `total_denda` double DEFAULT NULL,
  `status_pengembalian` varchar(15) DEFAULT NULL,
  `status_peminjaman` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id_pinjam`, `tgl_pencatatan`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `denda`, `tgl_pengembalian`, `total_denda`, `status_pengembalian`, `status_peminjaman`) VALUES
('PJ001', '2019-04-12 00:00:00', 25, 11, '2019-04-12', '2019-04-26', 1000, '2019-05-26', 30000, '1', '1'),
('PJ063', '2019-09-01 00:00:00', 25, 21, '2019-09-01', '2019-09-15', 1000, '2020-11-09', 0, '1', '1'),
('PJ063', '2020-11-06 00:00:00', 2, 5, '2020-11-06', '2020-11-20', 1000, '2020-11-09', 0, '1', '1'),
('PJ065', '2020-11-09 00:00:00', 2, 6, '2020-11-09', '2020-11-23', 1000, '2020-11-10', 0, '1', '1'),
('PJ065', '2020-11-09 00:00:00', 2, 7, '2020-11-09', '2020-11-23', 1000, '2020-11-10', 0, '1', '1'),
('PJ067', '2020-11-09 00:00:00', 2, 9, '2020-11-09', '2020-11-23', 1000, '2020-12-18', 25000, '1', '1'),
('PJ067', '2020-11-09 00:00:00', 2, 8, '2020-11-09', '2020-11-23', 1000, '2020-12-18', 25000, '1', '1'),
('PJ069', '2020-12-18 00:00:00', 2, 6, '2020-12-18', '2021-01-01', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali'),
('PJ071', '2020-12-18 00:00:00', 2, 26, '2020-12-18', '2021-01-01', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali'),
('PJ071', '2020-12-18 00:00:00', 2, 7, '2020-12-18', '2021-01-01', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali'),
('PJ071', '2020-12-18 00:00:00', 2, 10, '2020-12-18', '2021-01-01', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali'),
('PJ073', '2020-12-24 00:00:00', 2, 6, '2020-12-24', '2021-01-07', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali'),
('PJ073', '2020-12-24 00:00:00', 2, 7, '2020-12-24', '2021-01-07', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` varchar(5) NOT NULL,
  `tanggal_input` datetime NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `total_denda` double NOT NULL DEFAULT '0',
  `status_peminjaman` enum('Booking','Selesai','Belum Selesai') DEFAULT 'Belum Selesai',
  `status_pengembalian` enum('Kembali','Belum Kembali') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggal_input`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `tgl_pengembalian`, `total_denda`, `status_peminjaman`, `status_pengembalian`) VALUES
('PJ001', '2019-04-12 23:04:47', 25, '2019-04-12', '2019-04-26', '2019-05-26', 30000, 'Booking', 'Kembali'),
('PJ002', '2019-04-12 23:04:47', 0, '2019-04-12', '2019-04-26', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ003', '2019-04-13 21:04:47', 25, '2019-04-13', '2019-04-27', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ004', '2019-04-13 21:04:48', 0, '2019-04-13', '2019-04-27', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ005', '2019-04-21 20:04:34', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ006', '2019-04-21 20:04:35', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ007', '2019-04-21 20:04:36', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ008', '2019-04-21 20:04:37', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ009', '2019-04-21 20:04:11', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ010', '2019-04-21 20:04:12', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ011', '2019-04-21 20:04:20', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ012', '2019-04-21 20:04:20', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ013', '2019-04-21 20:04:43', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ014', '2019-04-21 20:04:44', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ015', '2019-04-21 21:04:28', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ016', '2019-04-21 21:04:29', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ017', '2019-04-21 21:04:00', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ018', '2019-04-21 21:04:00', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ019', '2019-04-21 21:04:22', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ020', '2019-04-21 21:04:23', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ021', '2019-04-21 21:04:41', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ022', '2019-04-21 21:04:41', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ023', '2019-04-21 21:04:47', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ024', '2019-04-21 21:04:47', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ025', '2019-04-21 21:04:57', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ026', '2019-04-21 21:04:57', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ027', '2019-04-21 21:04:16', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ028', '2019-04-21 21:04:16', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ029', '2019-04-21 21:04:55', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ030', '2019-04-21 21:04:55', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ031', '2019-04-21 21:04:05', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ032', '2019-04-21 21:04:05', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ033', '2019-04-21 21:04:41', 25, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ034', '2019-04-21 21:04:42', 0, '2019-04-21', '2019-05-05', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ035', '2019-04-22 12:04:50', 25, '2019-04-22', '2019-05-06', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ036', '2019-04-22 12:04:50', 0, '2019-04-22', '2019-05-06', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ037', '2019-05-14 10:05:11', 25, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ038', '2019-05-14 10:05:11', 0, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ039', '2019-05-14 10:05:12', 0, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ040', '2019-05-14 10:05:31', 25, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ041', '2019-05-14 10:05:31', 0, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ042', '2019-05-14 10:05:31', 0, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ043', '2019-05-14 10:05:21', 25, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ044', '2019-05-14 10:05:21', 0, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ045', '2019-05-14 10:05:22', 0, '2019-05-14', '2019-05-28', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ046', '2019-05-26 02:05:20', 25, '2019-05-26', '2019-06-09', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ047', '2019-05-26 02:05:21', 0, '2019-05-26', '2019-06-09', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ048', '2019-05-26 02:05:21', 0, '2019-05-26', '2019-06-09', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ049', '2019-06-09 03:06:21', 25, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ050', '2019-06-09 03:06:22', 0, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ051', '2019-06-09 03:06:32', 25, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ052', '2019-06-09 03:06:33', 0, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ053', '2019-06-09 03:06:50', 25, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ054', '2019-06-09 03:06:50', 0, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ055', '2019-06-09 03:06:01', 25, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ056', '2019-06-09 03:06:01', 0, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ057', '2019-06-09 03:06:46', 25, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ058', '2019-06-09 03:06:46', 0, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ059', '2019-06-09 03:06:31', 25, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ060', '2019-06-09 03:06:32', 0, '2019-06-09', '2019-06-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ061', '2019-06-11 22:06:49', 25, '2019-06-11', '2019-06-25', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ062', '2019-06-11 22:06:49', 0, '2019-06-11', '2019-06-25', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ063', '2020-11-09 12:11:17', 2, '2020-11-09', '2020-11-23', '2020-11-09', 0, 'Booking', 'Kembali'),
('PJ064', '2020-11-09 12:11:18', 0, '2020-11-09', '2020-11-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ065', '2020-11-09 12:11:07', 2, '2020-11-09', '2020-11-23', '2020-11-10', 0, 'Booking', 'Kembali'),
('PJ066', '2020-11-09 12:11:08', 0, '2020-11-09', '2020-11-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ067', '2020-11-09 12:11:23', 2, '2020-11-09', '2020-11-23', '2020-12-18', 25000, 'Booking', 'Kembali'),
('PJ068', '2020-11-09 12:11:24', 0, '2020-11-09', '2020-11-23', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ069', '2020-12-18 09:12:12', 2, '2020-12-18', '2021-01-01', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ070', '2020-12-18 09:12:12', 0, '2020-12-18', '2021-01-01', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ071', '2020-12-18 09:12:41', 2, '2020-12-18', '2021-01-01', '0000-00-00', 0, 'Booking', 'Belum Kembali'),
('PJ072', '2020-12-18 09:12:41', 0, '2020-12-18', '2021-01-01', '0000-00-00', 0, 'Booking', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `id_kategoriprofil` int(11) NOT NULL,
  `judul_profil` varchar(50) NOT NULL,
  `isi_satu` varchar(200) NOT NULL,
  `isi_dua` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `id_kategoriprofil`, `judul_profil`, `isi_satu`, `isi_dua`, `gambar`, `tgl_input`) VALUES
(1, 1, 'bening sukma', 'Untuk cPanel: Jika Anda ingin pengguna database yang sama memiliki akses ke database yang diubah namanya, Anda harus mencatat nama pengguna yang sudah ditetapkan ke database, yang mungkin mirip atau t', 'Di cPanel, klik MySQL Databases . Gulir ke bawah ke bagian Database Saat Ini di halaman. Temukan database yang akan Anda ganti namanya, dan catat atau ingat pengguna database yang sudah ditetapkan ke ', 'gambar1607784498.png', '2020-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pinjam` varchar(5) NOT NULL,
  `tgl_pencatatan` datetime NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `id_buku` int(4) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` double NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `total_denda` double NOT NULL,
  `status_pengembalian` varchar(15) NOT NULL,
  `status_peminjaman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_pinjam`, `tgl_pencatatan`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `denda`, `tgl_pengembalian`, `total_denda`, `status_pengembalian`, `status_peminjaman`) VALUES
('PJ073', '2020-12-24 00:00:00', 2, 6, '2020-12-24', '2021-01-07', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali'),
('PJ073', '2020-12-24 00:00:00', 2, 7, '2020-12-24', '2021-01-07', 1000, '0000-00-00', 0, 'Belum Selesai', 'Belum Kembali');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kategoriprofil`
--
ALTER TABLE `kategoriprofil`
  ADD PRIMARY KEY (`id_kategoriprofil`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategoriprofil`
--
ALTER TABLE `kategoriprofil`
  MODIFY `id_kategoriprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
