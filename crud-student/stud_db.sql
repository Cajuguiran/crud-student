-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 04:07 AM
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
-- Database: `stud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud`
--

CREATE TABLE `tbl_stud` (
  `id` int NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `middle` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_stud`
--

INSERT INTO `tbl_stud` (`id`, `firstname`, `lastname`, `middle`, `address`, `email`, `course`) VALUES
(1, 'Pedro', 'Penduko', 'D', 'Blk95. Sitio Maligaya', 'new@yahoo.com', 'CRIM'),
(2, 'Juan', 'Dela Cruz', 'D.', 'Brgy. Maguyo', 'Skyline@yahoo.com', 'EDUC'),
(4, 'Rocky', 'Balboa', 'U', '400Street', 'boxing@yahoo.com', 'PolSci');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_stud`
--
ALTER TABLE `tbl_stud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_stud`
--
ALTER TABLE `tbl_stud`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
