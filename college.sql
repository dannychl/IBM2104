-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 03:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `picsource` varchar(100) DEFAULT NULL,
  `linksource` varchar(100) DEFAULT NULL,
  `altimg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `location`, `rating`, `picsource`, `linksource`, `altimg`) VALUES
(1, 'INTI International College Kuala Lumpur', 'Kuala Lumpur', 5, 'inti-logo.png', 'intipage.html', 'INTI Logo'),
(2, 'SEGI University & College', 'Penang', 4.5, 'segi.png', 'segipage.html', 'SEGI Logo'),
(3, 'Tunku Abdul Rahman University College', 'Penang', 4.5, 'tarc.png', 'tarcpage.html', 'TARC Logo'),
(4, 'Sunway College', 'Penang', 4.5, 'sunway.png', 'sunwaypage.html', 'Sunway Logo'),
(5, 'Disted College', 'Penang', 4.5, 'disted.png', 'distedpage.html', 'Disted Logo'),
(6, 'cincai', 'johor', 1, 'segi.png', 'https://www.google.com', 'cincai img');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
