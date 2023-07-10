-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostan`
--

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `NIK` bigint(11) NOT NULL,
  `Nama` text NOT NULL,
  `NoHP` int(11) NOT NULL,
  `AlamatAsal` text NOT NULL,
  `KodeUnit` int(11) NOT NULL,
  `TanggalMasuk` date NOT NULL,
  `TanggalKeluar` date NOT NULL,
  `BesarPembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`NIK`, `Nama`, `NoHP`, `AlamatAsal`, `KodeUnit`, `TanggalMasuk`, `TanggalKeluar`, `BesarPembayaran`) VALUES
(150080, 'laura saint', 812345678, 'jambi', 2, '2023-05-01', '2023-05-31', 500000),
(567890, 'Doni', 8931231, 'Jambi', 2, '2023-05-02', '2023-06-01', 700000),
(17111312423424, 'Tasya Rufaidah', 896340647, 'Bengkulu, Indonesia', 1, '2023-05-25', '2023-05-31', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `rumah_kost`
--

CREATE TABLE `rumah_kost` (
  `KodeUnit` int(11) NOT NULL,
  `NamaUnit` varchar(100) NOT NULL,
  `HargaSewa` int(11) NOT NULL,
  `StatusKost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumah_kost`
--

INSERT INTO `rumah_kost` (`KodeUnit`, `NamaUnit`, `HargaSewa`, `StatusKost`) VALUES
(1, 'Kosan Rusman', 700000, 'bebas'),
(2, 'kosan syariah', 500000, 'wanita'),
(3, '', 0, ''),
(89, 'Kosan Tasya', 900000, 'Bebas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `rumah_kost`
--
ALTER TABLE `rumah_kost`
  ADD PRIMARY KEY (`KodeUnit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `NIK` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17111312423425;

--
-- AUTO_INCREMENT for table `rumah_kost`
--
ALTER TABLE `rumah_kost`
  MODIFY `KodeUnit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
