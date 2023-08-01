-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 08:15 PM
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
-- Database: `farhan243`
--

-- --------------------------------------------------------

--
-- Table structure for table `farhanuas`
--

CREATE TABLE `farhanuas` (
  `idvideo` varchar(10) NOT NULL,
  `judul` text NOT NULL,
  `creator` text NOT NULL,
  `description` longtext NOT NULL,
  `rating` float DEFAULT NULL,
  `viewer` int(50) DEFAULT NULL,
  `alamatvideo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `extend` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `extend`, `status`) VALUES
('farhan', '$2y$10$di/3MiT1erO5pyIqHY3KxeP', 'yUX5Z.aWbb5sxdqjtJMrvpUFvm7kv2', 'admin'),
('farhan23', '$2y$10$ln22VwgTr67N/P.2J5hDHeL', 'vswjmXjuUGMroYk0V7kvOPoIVvadU.', 'user'),
('farhan3', '$2y$10$PjIcbY94h2KCZlM5y5.Nq.W', '6quV2T97SMmgySbfxYSt1FHFIRi5ju', 'user'),
('sese', '$2y$10$il90.DjrhELxsy7/dDDoZuK', 'qWdjY9sJWsHok/YP2jSKEgRoP4GYbG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
