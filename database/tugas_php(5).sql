-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 03:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `nopol` varchar(10) NOT NULL,
  `namamobil` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`nopol`, `namamobil`, `foto`, `harga`, `status`) VALUES
('B123C', 'Avanza', 'a.jpg', 400000, 'ada'),
('A456X ', 'APV', 'v.jpg', 300000, 'ada'),
('A123WD', 'Alphard', '1wedd.jpg', 1000000, 'ada'),
('B9087MNC', 'Mini Cooper', '1minicpr.jpg', 700000, 'ada'),
('A7867BP', 'Mini Bus Pariwisata', '1minibus.jpg', 1600000, 'ada'),
('B45prt', 'Sport', '1sport1.jpg', 1250000, 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `nama` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(40) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`nama`, `email`, `website`, `komentar`) VALUES
('', 'cek@gmail.com', '', 'askjfkajsd'),
('assaa', 'asaa@gmail.com', 'asdf', 'ssds'),
('eka', 'eka123@gmail.com', 'belum hosting', 'Kerenn');

-- --------------------------------------------------------

--
-- Table structure for table `trankembali`
--

CREATE TABLE `trankembali` (
  `idtransaksi` varchar(12) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trankembali`
--

INSERT INTO `trankembali` (`idtransaksi`, `nopol`, `denda`) VALUES
('201812190001', 'A456X ', 400000),
('201812190002', 'B123C', 0),
('201901060001', 'A123WD', 0),
('201901060002', 'A456X ', 1),
('201901060003', 'A123WD', 0),
('201901060004', 'B123C', 0),
('201901060005', 'A456X ', 0),
('201901060006', 'A456X ', 0),
('201901060007', 'B123C', 0),
('201901060008', 'B123C', 2000),
('201901060009', 'B123C', 2000),
('201901060010', 'B123C', 2000),
('201901060011', 'B123C', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` varchar(12) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `lama` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `nopol`, `lama`, `total`) VALUES
('201812100002', 'B123C', 5, 2000000),
('201812100001', 'A456X ', 6, 1800000),
('201812100003', 'A456X ', 2, 600000),
('201110110001', 'B123C', 5, 2000000),
('201812120001', 'A456X ', 7, 2100000),
('201812120002', 'A456X ', 5, 1500000),
('201812120003', 'A456X ', 2, 600000),
('201812150001', 'A456X ', 4, 1200000),
('201812150002', 'A456X ', 8, 2400000),
('201901060001', 'A123WD', 1, 1000000),
('201901060002', 'A123WD', 2, 2000000),
('201901060003', 'A456X ', 2, 600000),
('201901060004', 'B123C', 3, 1200000),
('201901060005', 'A456X ', 2, 600000),
('201901060006', 'A456X ', 2, 600000),
('201901060007', 'A456X ', 2, 600000),
('201901060008', 'A456X ', 2, 600000),
('201901060009', 'B123C', 2, 800000),
('201901060010', 'B123C', 2, 800000),
('201901060011', 'A456X ', 2, 600000),
('201901060012', 'B123C', 2, 800000),
('201901060013', 'B123C', 3, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idu` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hak_akses` enum('admin','member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idu`, `nama`, `username`, `password`, `hak_akses`) VALUES
(0, 'member', 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member'),
(0, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
