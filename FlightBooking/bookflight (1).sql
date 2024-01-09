-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 04:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookflight`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_flight`
--

CREATE TABLE `book_flight` (
  `book_from` varchar(90) NOT NULL,
  `book_to` varchar(90) NOT NULL,
  `book_depart` date NOT NULL,
  `book_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_flight`
--

INSERT INTO `book_flight` (`book_from`, `book_to`, `book_depart`, `book_return`) VALUES
('a', 'b', '2023-04-13', '2023-04-21'),
('a', 'b', '2023-04-19', '2023-04-29'),
('Test', 'test', '2023-04-19', '2023-04-15'),
('testing', 'testing', '2023-04-27', '2027-10-30'),
('aaaa', 'vbbb', '2023-04-22', '2023-04-27'),
('pppp', 'yyyyy', '2023-04-21', '2023-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `hashed_password` varchar(999) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `email`, `password`, `role`, `hashed_password`, `status`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', '', '1'),
(4, 'testing3@testing.com', '$2y$10$jZ0ykAxD/vWc.Lj0B2Muwed0Ubi71QIKVuMClM4Mpy0mC0aPvRAH.', '', '', '1'),
(5, 'testing@admin', '12345', 'admin', '', '1'),
(6, 'berces@email.com', '$2y$10$zSX/dBpI3q85sxF6VR87o.hCUHNIDxhRODHYSV3X1ugAcrI7SfIkq', 'admin', '', '1'),
(7, 'berces2@email.com', '$2y$10$8n0nriD43yHi0AxAW2Ew6OH86yy.zbrx7eQe8pfqzT2SBPsfLCS2q', '', '', '1'),
(8, 'berces3@email.com', '$2y$10$RddAyfETGlvdgZFuKa8dkuutmI5q9X3H/G2Auk39UTqrpeoKX6JKu', 'user', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
