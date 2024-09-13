-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkb_lecture`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number_phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `number_phone`, `address`, `nidn`, `nip`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Noni Aprillia ', 88221415, 'JL.Mawar', 12345, 230102045, 1, '2024-09-13 06:28:35', '2024-09-13 06:28:35', '2024-09-13 06:28:35'),
(2, 'Tika Kuswardani', 8987024, 'JL. Sumingkir', 123456, 230102046, 2, '2024-09-13 06:30:46', '2024-09-13 06:30:46', '2024-09-13 06:30:46'),
(3, 'Ferina Sheren', 823296894, 'JL. Pasir Emas', 34567, 230202036, 3, '2024-09-13 06:33:47', '2024-09-13 06:33:47', '2024-09-13 06:33:47'),
(4, 'Devia Herena Kippuw', 895323875, 'JL. Perkutut', 45678, 230102045, 4, '2024-09-13 06:35:51', '2024-09-13 06:35:51', '2024-09-13 06:35:51'),
(5, 'abc', 123, 'JL.Mawar', 321, 123, 12, '2024-09-13 08:57:15', '2024-09-13 08:57:15', '2024-09-13 08:57:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
