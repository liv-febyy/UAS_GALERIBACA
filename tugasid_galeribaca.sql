-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2025 at 03:54 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasid_galeribaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_bacaan`
--

CREATE TABLE `daftar_bacaan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `book_id` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `book_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `progress` varchar(255) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_read` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `daftar_bacaan`
--

INSERT INTO `daftar_bacaan` (`id`, `username`, `book_id`, `createdAt`, `updatedAt`, `book_name`, `author`, `genre`, `progress`, `imagepath`, `status`, `last_read`) VALUES
(2, 'user', 'OL30297379W', '2025-07-15 14:02:14', '2025-07-15 14:14:55', 'Unicorn Coloring Book', 'kids M. shop notebook', '', '100', 'OL41804213M', 'completed', NULL),
(3, 'user', 'OL11619549W', '2025-07-15 14:07:28', '2025-07-15 14:16:06', 'Action group', 'Mazhar Kalim.', '', '20', '', 'paused', NULL),
(4, 'user', 'OL11619549W', '2025-07-15 14:12:23', '2025-07-15 14:12:23', 'Action group', 'Mazhar Kalim.', '', '0', '', 'reading', NULL),
(5, 'user', 'OL17314168W', '2025-07-15 14:13:49', '2025-07-15 14:13:49', 'Animals Talk', 'Arthur Dorros', '', '0', 'OL25888154M', 'reading', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_riwayat_bacaan`
--

CREATE TABLE `daftar_riwayat_bacaan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `book_id` varchar(100) NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_wishlist_bacaan`
--

CREATE TABLE `daftar_wishlist_bacaan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `book_id` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `book_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `progress` varchar(255) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_read` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `daftar_wishlist_bacaan`
--

INSERT INTO `daftar_wishlist_bacaan` (`id`, `username`, `book_id`, `createdAt`, `updatedAt`, `book_name`, `author`, `genre`, `progress`, `imagepath`, `status`, `last_read`) VALUES
(1, 'via', NULL, '2025-07-15 13:57:08', '2025-07-15 13:57:08', 'A story, a story', 'Gail E. Haley', 'Children\'s stories,Folklore,Juvenile fiction,picture books,juvenile literature,African folktale,tricksters,Caldecott Medal,Children\'s fiction,Animals, fiction,Folklore, africa,Picture books for children,collectionID:caldecott70,Onyame (Akan deity),Sky god', '0', 'OL2928981W', 'reading', NULL),
(2, 'user', 'OL30297379W', '2025-07-15 14:03:18', '2025-07-15 14:03:18', 'Unicorn Coloring Book', 'kids M. shop notebook', '', '0', 'OL41804213M', 'reading', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `interests` text DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstName`, `lastName`, `interests`, `createdAt`, `updatedAt`) VALUES
(2, 'via', 'liviafebrianti46@gmail.com', '$2y$10$VStxrTBlThBH/zrc2maXnuawUDYEXuVUtiGAyTHq1zyv5zycqMHiq', 'Livia', 'febrianti', 'Non-Fiction, Biography, Poetry', '2025-07-14 12:18:03', '2025-07-14 12:18:03'),
(4, 'user', 'user@mail.com', '$2y$10$F/XYT1SPrfRdOhxHKWH5DumxtPQypFX/dpAgeDNkRjVbBltXUV6F.', 'user', 'creator', 'Fiction, Comics', '2025-07-15 14:01:37', '2025-07-15 14:01:37'),
(6, 'Feby', 'febrianti@email.com', '$2y$10$boT8Zu6O3BvKFupLTbjsxeu0XdPu0vtMDRRfC5re6aQA4lpgb9ifa', 'Livia', 'Febrianti', 'Fiction, Mystery, Fantasy', '2025-07-15 15:23:02', '2025-07-15 15:23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_bacaan`
--
ALTER TABLE `daftar_bacaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_riwayat_bacaan`
--
ALTER TABLE `daftar_riwayat_bacaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_wishlist_bacaan`
--
ALTER TABLE `daftar_wishlist_bacaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_bacaan`
--
ALTER TABLE `daftar_bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_riwayat_bacaan`
--
ALTER TABLE `daftar_riwayat_bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_wishlist_bacaan`
--
ALTER TABLE `daftar_wishlist_bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
