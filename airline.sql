-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 02:11 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_flight`
--

CREATE TABLE `data_flight` (
  `id` int NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_booking` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_penumpang` int NOT NULL,
  `kota_berangkat` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kota_tujuan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_flight`
--

INSERT INTO `data_flight` (`id`, `nama`, `kode_booking`, `jumlah_penumpang`, `kota_berangkat`, `kota_tujuan`, `tanggal`, `jam`) VALUES
(2, 'Felix', 'GA123', 3, 'Surabaya', 'Jakarta', '2025-11-25', '12:30:00'),
(3, 'Aaron', 'GA125', 10, 'Jakarta', 'Manado', '2025-11-28', '20:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama`, `username`, `email`, `password`, `alamat`) VALUES
('Aaron', 'adjun1234', 'aaron@gmail.com', '$2y$10$hHSKWVnnbIn1MnWt3ABkP.tv/OSrtKjGeS.GHjAqfucvOSyOTyZFq', 'wiyung'),
('Felix', 'Felix123', 'Felix123@gmail.com', '$2y$10$TwAZRDbLIeSF7lJT1FlB7eK5qgV1A5zkvLVevDybys1BITEf.WvIy', 'surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_flight`
--
ALTER TABLE `data_flight`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`kode_booking`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_flight`
--
ALTER TABLE `data_flight`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
