-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 05:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_muaerna`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `kode_akun` int(100) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `posisi` varchar(10) DEFAULT NULL,
  `laba_rugi` varchar(10) DEFAULT NULL,
  `pm` varchar(10) DEFAULT NULL,
  `grup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`kode_akun`, `nama_akun`, `posisi`, `laba_rugi`, `pm`, `grup`) VALUES
(11, 'Kas', 'L', 'N', '0', 'debit'),
(12, 'Piutang', 'L', 'N', '0', 'debit'),
(13, 'Perlengkapan', 'L', 'N', '0', 'debit'),
(14, 'Peralatan', 'L', 'N', '0', 'debit'),
(15, 'Prive', NULL, 'N', '1', 'debit'),
(21, 'Utang Usaha', 'R', 'N', '0', 'kredit'),
(31, 'Modal', 'R', 'N', '1', 'kredit'),
(41, 'Pendapatan MUAERNA', NULL, 'T', '0', 'kredit'),
(51, 'Beban Listrik', NULL, 'B', '0', 'debit'),
(52, 'Beban Telfon', NULL, 'B', '0', 'debit'),
(53, 'Beban Internet\r\n', NULL, 'B', '0', 'debit'),
(54, 'Beban Sewa', NULL, 'B', '0', 'debit'),
(55, 'Beban Gaji', NULL, 'B', '0', 'debit'),
(56, 'Beban Serba-Serbi', NULL, 'B', '0', 'debit'),
(57, 'Beban Air', NULL, 'B', '0', 'debit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`kode_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
