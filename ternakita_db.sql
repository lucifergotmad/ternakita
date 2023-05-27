-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2023 at 10:45 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ternakita_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan_ternak`
--

CREATE TABLE `hewan_ternak` (
  `id` int NOT NULL,
  `nama_ternak` varchar(255) NOT NULL,
  `jumlah` int NOT NULL,
  `modal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hewan_ternak`
--

INSERT INTO `hewan_ternak` (`id`, `nama_ternak`, `jumlah`, `modal`) VALUES
(1, 'Sapi Jantan', 10, 900000),
(2, 'Sapi Betina', 15, 98000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan_ternak`
--
ALTER TABLE `hewan_ternak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hewan_ternak`
--
ALTER TABLE `hewan_ternak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
