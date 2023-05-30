-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 04:21 AM
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
-- Database: `koffie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` tinyint(1) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `akses`, `created_at`, `updated_at`) VALUES
(1, 'axsel', 'axsel@gmail.com', '$2y$10$sU2SxdloGaW3a6ZxD85X0Oey1ISIitQdxPjEMg/pQQ/9AuDxCNtw6', 2, '2023-05-30', '0000-00-00'),
(2, 'rico', 'rico@gmail.com', '$2y$10$YszG5MPfw4LYXmckP7wHhu9IacPL0/V1aSV/Cod25reZKrWYtBAOW', 2, '2023-05-30', '0000-00-00'),
(3, 'koffie', 'koffie@gmail.com', '$2y$10$pS3u6PbrlDm4GxgeBbNZFuUNB/mlYutUQ7DaIgbdZR3dV.lo3K3si', 1, '2023-05-30', '0000-00-00'),
(4, 'someone', 'someone@gmail.com', '$2y$10$sv6xE5Tz/H5B1aZEHvyJtOKC.LBrJy26FjDTXtOa1MSMl6ipURbxa', 2, '2023-05-30', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
