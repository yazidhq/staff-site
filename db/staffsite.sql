-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 05:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffsiteform`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffsite`
--

CREATE TABLE `staffsite` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `lembaga` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nopeg` varchar(255) NOT NULL,
  `mengajar` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `kampus` varchar(255) NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tipeacc` varchar(255) NOT NULL,
  `hinggatgl` varchar(255) NOT NULL,
  `pil1` varchar(255) NOT NULL,
  `pil2` varchar(255) NOT NULL,
  `altern` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `acc_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffsite`
--

INSERT INTO `staffsite` (`id`, `nama`, `email`, `ttl`, `lembaga`, `jabatan`, `nopeg`, `mengajar`, `nohp`, `kampus`, `gedung`, `lantai`, `status`, `tipeacc`, `hinggatgl`, `pil1`, `pil2`, `altern`, `pass`, `ktp`, `acc_status`) VALUES
(89, 'Sukardi', 'asd@asd.asd', '1622-12-13', 'Teknik', 'Bos', '002', '2022-11-06', '91283092', 'Kampus G', 'Gedung 1', 'Lantai 1', 'Staff Honorer', 'Account Sementara', '2022-11-14', 'sukardi', 'sukardi', '', 'sukardi123', '6385b1ac9bfeb.jpg', 1),
(90, 'Sumanto', 'sinta@gmail.com', '1622-12-13', 'Kedokteran', 'Bosss', '001', '2022-11-08', '91283092', 'Kampus G', 'Gedung 1', 'Lantai 1', 'Staff Tetap', 'Account Baru', '2022-11-14', 'smanto', 'sumanto', '', 'sumanto123', '6385b19cefb56.jpg', 1),
(93, 'Anton Sineng', 'anton@gmail.com', '2022-11-10', 'KEDOKTERAN', 'Boss', '005', '2022-11-18', '001001001', 'Kampus G', 'Gedung 1', 'Lantai 1', 'Staff Luar Biasa', 'Account Sementara', '2022-11-16', 'anton123', 'anton456', '', 'anton789', '6385b18ba3910.jpg', 0),
(122, 'Sukardi', 'asd@asd.asd', '1622-12-13', 'Teknik', 'Bos', '002', '2022-11-06', '91283092', 'Kampus G', 'Gedung 1', 'Lantai 1', 'Staff Honorer', 'Account Sementara', '2022-11-14', 'sukardi', 'sukardi', '', 'sukardi123', '6385b1ac9bfeb.jpg', 0),
(123, 'Sumantoooo', 'sinta@gmail.com', '1622-12-13', 'Kedokteran', 'Bosss', '001', '2022-11-08', '91283092', 'Kampus G', 'Gedung 1', 'Lantai 2', 'Staff Tetap', 'Account Baru', '2022-11-14', 'smanto', 'sumanto', '', 'sumanto123', '6385b19cefb56.jpg', 0),
(125, 'Mikel', 'mikel@gmail.com', '2022-12-02', 'SASTRA', 'Dosen', '012', '2022-11-02', '091283092', 'Kampus G', 'Gedung 1', 'Lantai 1', 'Staff Tetap', 'Account Baru', '', 'mikel213', 'mikel456', '', 'mikel789', '6385b179e7dbe.jpg', 1),
(128, 'Ahmad Trisua', 'ahmad@gmail.com', '2022-11-04', 'KEDOKTERAN', 'Dosen', '120', '2022-11-03', '091283092', 'Kampus D', 'Gedung 1', 'Lantai 2', 'Staff Luar Biasa', 'Account Sementara', '2022-11-25', 'ahmad123', 'ahmad456', '', 'ahmad789', '6386fd6b3658e.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffsite`
--
ALTER TABLE `staffsite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffsite`
--
ALTER TABLE `staffsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
