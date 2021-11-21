-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2021 at 05:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Buku_table`
--

CREATE TABLE `Buku_table` (
  `id` int(100) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Buku_table`
--

INSERT INTO `Buku_table` (`id`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(185, 'Matematika Diskrit', 'Mubeth_1202190125', 2020, 'Adalah sebuah buku ajaran matematika diskrit paling terlengkap', 'dc1d871fc872832c10bf58aaef8f7ba4.jpg_720x720q80.jpg_.jpeg', 'Array', 'Indonesia'),
(588, 'Tom and Jerry', 'Mubeth_1202190125', 2020, 'Sebuah buku komik anak anak ', '9780593306444.jpeg', 'Nothing', 'Indonesia'),
(608, 'Kalkulus', 'Mubeth_1202190125', 2019, 'Ini adalah sebuah buku mata kuliah ajaran kalkulus', 'download.jpeg', 'Array', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Buku_table`
--
ALTER TABLE `Buku_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
