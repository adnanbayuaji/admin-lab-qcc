-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 05:04 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `id_genre` varchar(10) NOT NULL,
  `id_rak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `tahun_terbit`, `id_genre`, `id_rak`) VALUES
('BK-0001', 'Bumi', 'Tere Liye', 2012, 'GR-0001', 'RK-0001'),
('BK-0002', 'Web Dinamis dengan PHP dan MYSql', 'Rudyanto Arief', 2011, 'GR-0001', 'RK-0001'),
('BK-0003', 'Web Dinamis dengan ASP.NET', 'Erick Kurniawan', 2012, 'GR-0002', 'RK-0001'),
('BK-0004', 'Ilmu Komunikasi', 'Deddy Mulyana', 2010, 'GR-0002', 'RK-0001'),
('BK-0005', 'Basic English Grammar', 'Betty Azar', 2010, 'GR-0001', 'RK-0002'),
('BK-0006', 'Multi Million Dollar', 'Adam Khoo', 2010, 'GR-0001', 'RK-0001'),
('BK-0007', 'Website Gratis', 'Adnan Rangga', 2010, 'GR-0001', 'RK-0003'),
('BK-0008', 'Trik Corel Draw', 'Ian Chandra K.', 2009, 'GR-0001', 'RK-0001'),
('BK-0009', 'S1 Graduate', 'Embassy UK', 2012, 'GR-0001', 'RK-0001'),
('BK-0010', 'Aplikasi WPF', 'Imam', 2010, 'GR-0001', 'RK-0001'),
('BK-0011', 'Koala Kumal', 'Andrea Hirata', 2010, 'GR-0001', 'RK-0001');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama`) VALUES
('GR-0001', 'Non Fiksi'),
('GR-0002', 'Fiksi'),
('GR-0003', 'Dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `jenis_kelamin`, `no_telepon`, `email`, `alamat`) VALUES
('PG-0001', 'Prasetyo Dwi S', 'Laki-Laki', '087627361524', 'pras.setyo@gmail.com', 'Tegal'),
('PG-0002', 'Adnan Bayu Aji', 'Laki-Laki', '089691825262', 'adnan.bayuaji@gmail.com', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE IF NOT EXISTS `rak` (
  `id_rak` varchar(10) NOT NULL,
  `no_baris` varchar(10) NOT NULL,
  `no_kolom` varchar(10) NOT NULL,
  `no_rak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `no_baris`, `no_kolom`, `no_rak`) VALUES
('RK-0001', '1', '2', '1'),
('RK-0002', 'B', 'B', 'B'),
('RK-0003', '4', '4', '4'),
('RK-0004', '2', '3', '5'),
('RK-0005', '1', '1', '2'),
('RK-0006', '1', '1', '1'),
('RK-0008', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
('US-0001', 'Adnan Bayu Aji', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('US-0002', 'Adnan Bayu Aji', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin'),
('US-0003', 'Prasetyo Dwi S', 'pras', '164361f78dbf22b529438ea4cc7f6496', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id_buku`), ADD KEY `id_genre` (`id_genre`), ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
 ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
 ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`),
ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
