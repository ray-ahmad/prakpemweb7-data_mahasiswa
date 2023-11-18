-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2023 at 06:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_prodi` varchar(4) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kode_prodi`) VALUES
(121130079, 'Diego', 'EL'),
(121140001, 'Nasrul Alfin', 'IF'),
(121140002, 'Rayhan Ahmad Rizalullah', 'IF'),
(121140013, 'Attar Akram', 'IF'),
(121140024, 'Muhammad Addin', 'IF'),
(121140027, 'Putri', 'IF'),
(121140028, 'Leonardo Alfontus Mende Sirait', 'IF'),
(121140042, 'Vania Angelica', 'IF'),
(121140052, 'Natasya Ate', 'IF'),
(121140057, 'Stefen Tjung', 'IF'),
(121140068, 'Arsyadana Estu', 'IF'),
(121140119, 'Muhammad Qaessar', 'IF'),
(121140139, 'Muhammad Faisal Safira', 'IF'),
(121140149, 'Muhammad Aryo Bimo', 'IF'),
(121140179, 'Farhan Apri', 'IF'),
(121140193, 'Carlos Piero', 'IF'),
(121150097, 'John Doe', 'GL'),
(121160047, 'Swiper', 'MA'),
(121190034, 'Muhammad Rakeen', 'TI'),
(121190068, 'Siti', 'TI'),
(121240009, 'Abdul', 'AR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
