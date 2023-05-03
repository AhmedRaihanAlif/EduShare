-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 10:36 PM
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
-- Database: `adventuregame`
--

-- --------------------------------------------------------

--
-- Table structure for table `uiuexpress`
--

CREATE TABLE `uiuexpress` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `attempt` int(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uiuexpress`
--

INSERT INTO `uiuexpress` (`id`, `username`, `attempt`, `time`) VALUES
(1, 'Alif', 5, '9-55-23'),
(2, 'Kamal', 14, '2-50-23'),
(3, 'Jamal', 9, '4-06-43'),
(4, 'Samia', 21, '2-50-23'),
(5, 'Asif', 19, '4-06-43');

-- --------------------------------------------------------

--
-- Table structure for table `uiuexpresslogin`
--

CREATE TABLE `uiuexpresslogin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uiuexpress`
--
ALTER TABLE `uiuexpress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uiuexpresslogin`
--
ALTER TABLE `uiuexpresslogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uiuexpress`
--
ALTER TABLE `uiuexpress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uiuexpresslogin`
--
ALTER TABLE `uiuexpresslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
