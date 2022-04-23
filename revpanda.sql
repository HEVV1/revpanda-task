-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 05:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revpanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_a`
--

CREATE TABLE `table_a` (
  `id` int(11) NOT NULL,
  `texts` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_a`
--

INSERT INTO `table_a` (`id`, `texts`) VALUES
(3, 'Simple a text'),
(4, 'Another a text'),
(5, 'Just a text'),
(17, 'Hello World'),
(21, 'Just wonderful text'),
(22, 'Some text');

-- --------------------------------------------------------

--
-- Table structure for table `table_b`
--

CREATE TABLE `table_b` (
  `id` int(11) NOT NULL,
  `texts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_b`
--

INSERT INTO `table_b` (`id`, `texts`) VALUES
(1, 3123),
(2, 931245),
(3, 43124),
(8, 1010101);

-- --------------------------------------------------------

--
-- Table structure for table `table_c`
--

CREATE TABLE `table_c` (
  `id` int(11) NOT NULL,
  `texts` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_c`
--

INSERT INTO `table_c` (`id`, `texts`) VALUES
(1, 'Help with this c text'),
(2, 'Love coding c'),
(3, 'random stuff'),
(4, 'C text'),
(5, 'Some text in c field');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_a`
--
ALTER TABLE `table_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_b`
--
ALTER TABLE `table_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_c`
--
ALTER TABLE `table_c`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_a`
--
ALTER TABLE `table_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `table_b`
--
ALTER TABLE `table_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_c`
--
ALTER TABLE `table_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
