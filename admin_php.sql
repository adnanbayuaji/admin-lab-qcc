-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Des 2017 pada 00.15
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE IF NOT EXISTS `alat` (
  `idalat` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`idalat`, `nama`) VALUES
('GR-0001', 'Komputer'),
('GR-0002', 'Meja'),
('GR-0003', 'Kursi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pencatatan`
--

CREATE TABLE IF NOT EXISTS `detail_pencatatan` (
`iddetail` int(11) NOT NULL,
  `idpencatatan` varchar(10) NOT NULL,
  `idnama` varchar(10) NOT NULL,
  `idalat` varchar(10) NOT NULL,
  `kondisi` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data untuk tabel `detail_pencatatan`
--

INSERT INTO `detail_pencatatan` (`iddetail`, `idpencatatan`, `idnama`, `idalat`, `kondisi`) VALUES
(1, 'TP-0008', 'MH-0002', 'GR-0001', 'K'),
(2, 'TP-0008', 'MH-0002', 'GR-0002', 'K'),
(3, 'TP-0008', 'MH-0002', 'GR-0003', 'K'),
(4, 'TP-0008', 'MH-0003', 'GR-0001', 'K'),
(5, 'TP-0008', 'MH-0003', 'GR-0002', 'K'),
(6, 'TP-0008', 'MH-0003', 'GR-0003', 'K'),
(7, 'TP-0009', 'MH-0001', 'GR-0001', 'B'),
(8, 'TP-0009', 'MH-0001', 'GR-0002', 'B'),
(9, 'TP-0009', 'MH-0001', 'GR-0003', 'B'),
(10, 'TP-0010', 'MH-0002', 'GR-0001', 'B'),
(11, 'TP-0010', 'MH-0002', 'GR-0002', 'C'),
(12, 'TP-0010', 'MH-0002', 'GR-0003', 'K'),
(13, 'TP-0010', 'MH-0003', 'GR-0001', 'B'),
(14, 'TP-0010', 'MH-0003', 'GR-0002', 'B'),
(15, 'TP-0010', 'MH-0003', 'GR-0003', 'B'),
(16, 'TP-0011', 'MH-0001', 'GR-0001', 'B'),
(17, 'TP-0011', 'MH-0001', 'GR-0002', 'B'),
(18, 'TP-0011', 'MH-0001', 'GR-0003', 'B'),
(19, 'TP-0015', 'MH-0002', 'GR-0001', 'B'),
(20, 'TP-0015', 'MH-0002', 'GR-0002', 'B'),
(21, 'TP-0015', 'MH-0002', 'GR-0003', 'C'),
(22, 'TP-0015', 'MH-0003', 'GR-0001', 'B'),
(23, 'TP-0015', 'MH-0003', 'GR-0002', 'C'),
(24, 'TP-0015', 'MH-0003', 'GR-0003', 'B'),
(26, 'TP-0017', 'MH-0001', 'GR-0002', 'B'),
(27, 'TP-0017', 'MH-0001', 'GR-0003', 'B'),
(28, 'TP-0019', 'MH-0001', 'GR-0001', 'B'),
(29, 'TP-0019', 'MH-0001', 'GR-0002', 'B'),
(30, 'TP-0019', 'MH-0001', 'GR-0003', 'B'),
(31, 'TP-0020', 'MH-0001', 'GR-0001', 'B'),
(32, 'TP-0020', 'MH-0001', 'GR-0002', 'B'),
(33, 'TP-0020', 'MH-0001', 'GR-0003', 'C'),
(34, 'TP-0021', 'MH-0002', 'GR-0001', 'B'),
(35, 'TP-0021', 'MH-0002', 'GR-0002', 'B'),
(36, 'TP-0021', 'MH-0002', 'GR-0003', 'C'),
(37, 'TP-0021', 'MH-0003', 'GR-0001', 'B'),
(38, 'TP-0021', 'MH-0003', 'GR-0002', 'B'),
(39, 'TP-0021', 'MH-0003', 'GR-0003', 'C'),
(40, 'TP-0022', 'MH-0001', 'GR-0001', 'B'),
(41, 'TP-0022', 'MH-0001', 'GR-0002', 'B'),
(42, 'TP-0022', 'MH-0001', 'GR-0003', 'B'),
(43, 'TP-0022', 'MH-0002', 'GR-0001', 'B'),
(44, 'TP-0022', 'MH-0002', 'GR-0002', 'B'),
(45, 'TP-0022', 'MH-0002', 'GR-0003', 'B'),
(46, 'TP-0022', 'MH-0003', 'GR-0001', 'B'),
(47, 'TP-0022', 'MH-0003', 'GR-0002', 'B'),
(48, 'TP-0022', 'MH-0003', 'GR-0003', 'B'),
(49, 'TP-0022', 'MH-0004', 'GR-0001', 'B'),
(50, 'TP-0022', 'MH-0004', 'GR-0002', 'B'),
(51, 'TP-0022', 'MH-0004', 'GR-0003', 'B'),
(52, 'TP-0022', 'MH-0005', 'GR-0001', 'B'),
(53, 'TP-0022', 'MH-0005', 'GR-0002', 'B'),
(54, 'TP-0022', 'MH-0005', 'GR-0003', 'B'),
(55, 'TP-0022', 'MH-0006', 'GR-0001', 'B'),
(56, 'TP-0022', 'MH-0006', 'GR-0002', 'B'),
(57, 'TP-0022', 'MH-0006', 'GR-0003', 'B'),
(58, 'TP-0022', 'MH-0007', 'GR-0001', 'B'),
(59, 'TP-0022', 'MH-0007', 'GR-0002', 'B'),
(60, 'TP-0022', 'MH-0007', 'GR-0003', 'B'),
(61, 'TP-0022', 'MH-0008', 'GR-0001', 'B'),
(62, 'TP-0022', 'MH-0008', 'GR-0002', 'B'),
(63, 'TP-0022', 'MH-0008', 'GR-0003', 'B'),
(64, 'TP-0022', 'MH-0009', 'GR-0001', 'B'),
(65, 'TP-0022', 'MH-0009', 'GR-0002', 'B'),
(66, 'TP-0022', 'MH-0009', 'GR-0003', 'B'),
(67, 'TP-0022', 'MH-0010', 'GR-0001', 'B'),
(68, 'TP-0022', 'MH-0010', 'GR-0002', 'B'),
(69, 'TP-0022', 'MH-0010', 'GR-0003', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `idmahasiswa` varchar(10) NOT NULL,
  `namamhs` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tingkat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmahasiswa`, `namamhs`, `jeniskelamin`, `notelp`, `email`, `alamat`, `tingkat`) VALUES
('MH-0001', 'Amanina Ulya', 'Perempuan', '089617266252', 'amanina.ulya@gmail.com', 'Jakarta Utara', 1),
('MH-0002', 'Doni Septrian', 'Laki-Laki', '081111232454', 'donisep23@gmail.com', 'Jakarta Utara', 1),
('MH-0003', 'Mela Hidayah', 'Perempuan', '089678253123', 'mela.hidayah@gmail.com', 'Purworejo', 1),
('MH-0004', 'Muthia Kandza', 'Perempuan', '089726372122', 'kandzamuthia@gmail.com', 'Purbalingga', 1),
('MH-0005', 'Nindy Okta ', 'Perempuan', '087222124536', 'nindyokta@gmail.com', 'Madiun', 1),
('MH-0006', 'Noerlisna A', 'Laki-Laki', '089627839123', 'noerlis@gmail.com', 'Klaten', 1),
('MH-0007', 'Rachmad Rizky', 'Laki-Laki', '089691827363', 'rahmadrizky@gmail.com', 'Sidoarjo', 1),
('MH-0008', 'Taqiyah C', 'Perempuan', '089729827121', 'taqiyah23@gmail.com', 'Surabaya', 1),
('MH-0009', 'Farah Hana', 'Perempuan', '08927361234', 'farahhana@gmail.com', 'Jakarta Utara', 1),
('MH-0010', 'Syamas Zahran', 'Laki-Laki', '081223564778', 'syamaszahran@gmail.com', 'Jakarta Utara', 1),
('MH-0011', 'Aditya F', 'Laki-Laki', '089628371218', 'adityafri@gmail.com', 'Indramayu', 2),
('MH-0012', 'Adnan Bayu Aji', 'Laki-Laki', '089691825262', 'adnan.bayuaji@gmail.com', 'Sidoarjo', 2),
('MH-0013', 'Daniel Wijaya', 'Laki-Laki', '089628123999', 'danielwijaya@gmail.com', 'Jakarta Utara', 2),
('MH-0014', 'Candra Bagus', 'Laki-Laki', '089692817822', 'candra@gmail.com', 'Pati', 2),
('MH-0015', 'Kristina H', 'Perempuan', '08322341415', 'kristinnahuta@gmail.com', 'Bekasi', 2),
('MH-0016', 'Yudha Arfian', 'Laki-Laki', '089783928123', 'yudha@gmail.com', 'Surabaya', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencatatan`
--

CREATE TABLE IF NOT EXISTS `pencatatan` (
  `idpencatatan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `tingkat` int(11) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pencatatan`
--

INSERT INTO `pencatatan` (`idpencatatan`, `tanggal`, `tingkat`, `catatan`) VALUES
('TP-0001', '2017-11-11', 3, NULL),
('TP-0002', '2017-11-11', 3, NULL),
('TP-0003', '2017-11-11', 3, NULL),
('TP-0004', '2017-11-11', 3, NULL),
('TP-0005', '2017-11-11', 3, NULL),
('TP-0006', '2017-11-11', 3, NULL),
('TP-0007', '2017-11-11', 3, NULL),
('TP-0008', '2017-11-11', 3, NULL),
('TP-0009', '2017-11-12', 2, NULL),
('TP-0010', '2017-11-12', 3, NULL),
('TP-0011', '2017-11-12', 2, NULL),
('TP-0012', '2017-12-10', 2, NULL),
('TP-0013', '2017-12-10', 1, NULL),
('TP-0014', '2017-12-10', 3, NULL),
('TP-0015', '2017-12-10', 3, NULL),
('TP-0020', '2017-12-13', 2, 'Bisa Kasih Catatan'),
('TP-0021', '2017-12-16', 3, 'Cari Dataaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('TP-0022', '2017-12-18', 1, 'Kerusakan Meja Adnan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
('US-0001', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('US-0002', 'pic', 'pic', 'ed09636a6ea24a292460866afdd7a89a', 'pic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
 ADD PRIMARY KEY (`idalat`);

--
-- Indexes for table `detail_pencatatan`
--
ALTER TABLE `detail_pencatatan`
 ADD PRIMARY KEY (`iddetail`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`idmahasiswa`);

--
-- Indexes for table `pencatatan`
--
ALTER TABLE `pencatatan`
 ADD PRIMARY KEY (`idpencatatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pencatatan`
--
ALTER TABLE `detail_pencatatan`
MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
