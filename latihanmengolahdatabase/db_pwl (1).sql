-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 05:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `NID_Dosen` char(13) DEFAULT NULL,
  `Nama_Dosen` varchar(50) DEFAULT NULL,
  `TmptLahir_Dosen` varchar(50) DEFAULT NULL,
  `TglLahir_Dosen` date DEFAULT NULL,
  `Alamat_Dosen` varchar(50) DEFAULT NULL,
  `No_HP` varchar(15) DEFAULT NULL,
  `HomeBase` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `NID_Dosen`, `Nama_Dosen`, `TmptLahir_Dosen`, `TglLahir_Dosen`, `Alamat_Dosen`, `No_HP`, `HomeBase`) VALUES
(1, '1239301382381', 'Dosen 1', 'Palangka Raya', '1976-02-04', 'JL. Dimana Saja', '082237651823', 'Manajemen Informatika'),
(2, '8347238198236', 'Dosen 2', 'Kasongan', '1980-04-09', 'JL. Saja DImana', '082137550863', 'Teknik Informatika'),
(3, '8383741823983', 'Dosen 3', 'Purukcahu', '1989-02-06', 'JL. Aku Dimana', '085353559883', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Nim` char(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Prodi` varchar(100) DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `Nim`, `Email`, `Prodi`, `Foto`) VALUES
(1, 'Kamaludin', 'E2057401023', 'ryuzakyzx@ymail.com', 'Manajemen Informatika', 'fotokml.jpg'),
(2, 'Udin', 'E2057401004', 'udinnn@ymail.com', 'Teknik Informatika', 'fotoudin.jpg'),
(3, 'Kemal', 'E2057401033', 'kemal@ymail.com', 'Sistem Informaasi', 'fotokemal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
