-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2025 at 06:04 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbtikon`
--

CREATE TABLE `tbtikon` (
  `id_tikon` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telpn` varchar(50) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbtikon`
--

INSERT INTO `tbtikon` (`id_tikon`, `nama`, `email`, `password`, `telpn`, `jenis`, `jumlah`, `metode`, `fasilitas`, `catatan`) VALUES
(1, 'Rico Ardi Saputra', 'bigbos@gmail.com', '12345', '08138349823', 'VVIP', 10, 'Dana', 'Paket Makan', 'catatan2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbtikon`
--
ALTER TABLE `tbtikon`
  ADD PRIMARY KEY (`id_tikon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbtikon`
--
ALTER TABLE `tbtikon`
  MODIFY `id_tikon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
