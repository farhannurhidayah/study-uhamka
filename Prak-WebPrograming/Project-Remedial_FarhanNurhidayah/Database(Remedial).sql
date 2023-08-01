-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 04:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `indonesia`
--

CREATE TABLE `indonesia` (
  `id` int(50) NOT NULL,
  `nama_pulau` varchar(50) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indonesia`
--

INSERT INTO `indonesia` (`id`, `nama_pulau`, `nama_provinsi`, `nama_kota`) VALUES
(1, 'Sumatra', 'Nanggroe Aceh Darussalam', 'Banda Aceh'),
(2, 'Sumatra', 'Nanggroe Aceh Darussalam', 'Sabang'),
(3, 'Sumatra', 'Nanggroe Aceh Darussalam', 'Langsa'),
(4, 'Sumatra', 'Nanggroe Aceh Darussalam', 'Subulussalam'),
(5, 'Jawa', 'Jawa Barat', 'Bandung'),
(6, 'Jawa', 'Jawa Barat', 'Cimahi'),
(7, 'Jawa', 'Jawa Barat', 'Sukabumi'),
(8, 'Jawa', 'Jawa Barat', 'Cirebon'),
(9, 'Jawa', 'Jawa Barat', 'Bogor'),
(10, 'Jawa', 'Jawa Barat', 'Tasikmalaya'),
(11, 'Jawa', 'Jawa Barat', 'Banjar'),
(12, 'Jawa', 'Jawa Barat', 'Depok'),
(13, 'Jawa', 'Jawa Barat', 'Bekasi'),
(14, 'Kalimantan', 'Kalimantan Barat', 'Pontianak'),
(15, 'Kalimantan', 'Kalimantan Barat', 'Singkawang'),
(16, 'Kalimantan', 'Kalimantan Barat', 'Melawi'),
(17, 'Bali', 'Bali', 'Denpasar'),
(18, 'Bali', 'Bali', 'Badung'),
(19, 'Bali', 'Bali', 'Klungkung'),
(20, 'Bali', 'Bali', 'Buleleng'),
(21, 'Bali', 'Bali', 'Tabanan'),
(22, 'bali', 'bali', 'Ubud'),
(23, 'bali', 'bali', 'samosir');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kode_kota` int(11) NOT NULL,
  `kode_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kode_kota`, `kode_provinsi`, `nama_kota`) VALUES
(1, 4, 'Bandung'),
(2, 8, 'Denpasar'),
(3, 8, 'Badung'),
(5, 4, 'Cimahi'),
(7, 8, 'Klungkung'),
(11, 8, 'Buleleng'),
(21, 8, 'Tabanan'),
(30, 4, 'sukabumi'),
(31, 2, 'Banda Aceh'),
(35, 2, 'Sabang'),
(44, 2, 'Langsa'),
(47, 2, 'Subulussalam'),
(51, 4, 'Cirebon'),
(60, 4, 'Bogor'),
(61, 4, 'Tasikmalaya'),
(63, 4, 'Banjar'),
(64, 4, 'Depok'),
(72, 4, 'Bekasi'),
(81, 7, 'Pontianak'),
(91, 7, 'Singkawang'),
(96, 7, 'Melawi');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_provinsi` int(11) NOT NULL,
  `kode_pulau` int(11) NOT NULL,
  `nama_provinsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kode_provinsi`, `kode_pulau`, `nama_provinsi`) VALUES
(2, 4, 'Nanggroe Aceh Darussalam'),
(4, 1, 'Jawa Barat'),
(7, 3, 'Kalimantan Barat'),
(8, 2, 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `kode_pulau` int(11) NOT NULL,
  `nama_pulau` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`kode_pulau`, `nama_pulau`) VALUES
(1, 'Jawa'),
(2, 'Bali'),
(3, 'Kalimantan'),
(4, 'Sumatra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indonesia`
--
ALTER TABLE `indonesia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kode_kota`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kode_provinsi`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`kode_pulau`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indonesia`
--
ALTER TABLE `indonesia`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kode_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `kode_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `kode_pulau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
