-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2025 at 12:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapangan_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jam_mulai` time(2) NOT NULL,
  `jam_selesai` time(2) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_pembayaran` enum('Proses','Lunas') NOT NULL,
  `id_lapangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_customer`, `tgl_booking`, `jam_mulai`, `jam_selesai`, `total_bayar`, `status_pembayaran`, `id_lapangan`) VALUES
(2, 2, '2025-12-03', '16:00:00.00', '18:00:00.00', 90000, 'Lunas', 19),
(20, 5, '2025-12-01', '19:32:00.00', '22:32:00.00', 210000, 'Lunas', 18);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `no_hp`, `email`) VALUES
(1, 'ilham', '0857328976', 'ilhan@gmail.com'),
(2, 'ahmad', '0813548978', 'ahmad@gmail.com'),
(5, 'Rifa', '08965432189', 'rifa@gmail.com'),
(6, 'rehan', '08965432178', 'rehan@gmail.com'),
(7, 'sanjaya', '089765431268', 'sanjaya@gmail.cm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ilhanalfarizy', 'ilhan');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_lapangan`
--

CREATE TABLE `tipe_lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `tipe_lapangan` varchar(50) NOT NULL,
  `harga_per_jam` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_lapangan`
--

INSERT INTO `tipe_lapangan` (`id_lapangan`, `tipe_lapangan`, `harga_per_jam`) VALUES
(18, 'Interlock', 70000),
(19, 'Vinyl', 90000),
(20, 'Sintetis', 80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tipe_lapangan`
--
ALTER TABLE `tipe_lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tipe_lapangan`
--
ALTER TABLE `tipe_lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
