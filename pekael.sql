-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 08:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pekael`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal_instansi` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `asal_instansi`, `no_telepon`, `tanggal`, `perihal`, `status`) VALUES
(1, 'Ricky Aditya Bagaskara', 'Universitas Pakuan', '085156176146', '2022-09-14', 'Pengajuan Surat Magang', 'Diterima'),
(2, 'Muhammad Dikhrillah', 'Universitas Pakuan', '085151515151', '2022-09-14', 'Ngopi', 'Ditolak'),
(16, 'Henry', 'Pengadilan Agama Cibinong', '08721234587', '2022-09-19', 'rapat', 'Ditolak'),
(17, 'bakpao', 'Universitas Binus', '0812345678', '2022-09-30', 'pkl', 'Diterima'),
(18, 'sfs', 'sdfdsf', '3243243', '2022-08-30', 'wwwwww', 'Diterima'),
(19, 'fesfsf', 'dsfdsfsf', 'dsfdsfdsf', '2022-09-21', 'fsfdsfdsf', 'Diterima'),
(20, 'sdfdsfdsfs', 'fsdfsdfds', '3243242343', '2022-09-15', '2343242', 'Diterima'),
(21, 'epep', 'unpad', '08123129524', '2022-09-17', 'ngudud hungkul', 'Menunggu'),
(22, 'muhammad', 'universitas BSI', '081234584938', '2022-09-30', 'pengajuan penelitian', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(3, 'Faisal Nugraha', 'faisal@nugraha', '123'),
(5, 'isal', 'isal@isal', 'isal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
