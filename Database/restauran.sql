-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 04:23 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restauran`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin1', 'eman123'),
(3, 'admin', 'admin'),
(4, 'eman', 'eman');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `id_makanan` tinyint(5) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(15) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `jenis` enum('makanan','minuman') NOT NULL,
  `harga` int(7) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_menu`, `keterangan`, `jenis`, `harga`, `gambar`) VALUES
(2, 'Docang', 'merupakan perpaduan dari lontong, daun singkong, t', 'makanan', 15000, 'docang.jpg'),
(3, 'Empal Gentong', 'Empal gentong adalah makanan khas cirebon yang san', 'makanan', 45000, 'empal_gentong.jpg'),
(4, 'Teh Poci', ' teh yang diseduh secara khas dalam poci dan cangk', 'minuman', 5000, 'teh_poci.jpg'),
(5, 'Sate Kalong', 'Sate ini terbuat dari daging kerbau yang dihaluska', 'makanan', 20000, 'sate_kalong.jpg'),
(7, 'Tahu gejrot', 'Tahu gejrot adalah makanan yang terbuat dari tahu', 'makanan', 10000, '03012019144453tahu_gejrot.jpg'),
(8, 'Es Kelapa', 'Es kelapa adalah minuman yang cocok diminum saat cuaca panas', 'minuman', 10000, '03012019145200es_kelapa.jpg'),
(9, 'Es Teh Manis', 'Es Teh manis sangat cocok untuk anda yang kehausan', 'minuman', 3000, '03012019145300es_teh.jpg'),
(10, 'Es jeruk', 'Es Jeruk sangat segar untuk diminum pada siang hari', 'minuman', 5000, '03012019145355es_jeruk.jpg'),
(11, 'Cendol', 'Cendol sangat cocok untuk anda yang sedang kelaparan atau dijadikan makanan penutup', 'minuman', 5000, '03012019145509cendol.jpg'),
(12, 'Nasi Lengko', 'Nasi Lengko sudah populer untuk warga cirebon', 'makanan', 15000, '03012019145905nasi_lengko.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` tinyint(8) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `judul`, `email`, `pesan`) VALUES
(1, 'adadwad', 'adwadaw', 'sdawdawdaw', 'awdawda'),
(2, 'sa', 'adaw', 'adaw', 'adawdawfae'),
(4, 'adadwad', 'daw', 'aww', 'wdaw'),
(5, 'adadwad', 'daw', 'muhamad.eman8@gmail.com', 'daaaa'),
(6, 'muhamad', 'makanan', 'eman@gmail.com', 'pesan nasi lengko 2');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `Id_reservasi` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` enum('menunggu','diterima','ditolak','sudah bayar') NOT NULL,
  PRIMARY KEY (`Id_reservasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`Id_reservasi`, `nama`, `no_telp`, `alamat`, `tanggal`, `keterangan`, `status`) VALUES
(1, 'paimo', 758647321, 'benran asli jogja', '2019-01-09', 'saya memesan tempat untuk makan untuk 20 orang', 'sudah bayar'),
(2, 'panjul', 897656637, 'asal dari magelang', '2019-05-12', 'pesan meja untuk 5 orang', 'ditolak'),
(4, 'eman', 80989, 'jogja', '2019-02-13', 'beli bebek goreng 1', 'sudah bayar'),
(5, 'muhamad eman', 89757568, 'cirebon jeh', '2019-01-08', 'pesan nasi lengko dan tempat untuk 20 orang', 'sudah bayar'),
(6, 'sulaeman', 85628263, 'sementara jogja', '2019-01-17', 'pesan nasi jamblang, sate kalong dan tempatnya unt', 'ditolak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
