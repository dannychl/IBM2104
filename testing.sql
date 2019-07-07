-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 05:50 PM
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
  `altimg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `location`, `rating`, `picsource`, `altimg`) VALUES
(1, 'INTI International College Kuala Lumpur', 'Kuala Lumpur', 5, 'inti-logo.png', 'INTI Logo'),
(2, 'SEGI University & College', 'Penang', 4.5, 'segi.png', 'SEGI Logo'),
(3, 'Tunku Abdul Rahman University College', 'Penang', 4.5, 'tarc.png', 'TARC Logo'),
(4, 'Sunway College', 'Penang', 4.5, 'sunway.png', 'Sunway Logo'),
(5, 'Disted College', 'Kuala Lumpur', 4.5, 'disted.png', 'Disted Logo'),
(6, 'ahbeng', 'Johor', NULL, 'inti-logo.png', 'ahbeng pic'),
(7, '<h1><b>Fuck</b></h1>', 'Johor', NULL, 'inti-logo.png', 'ahbeng pic');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

CREATE TABLE `college_details` (
  `description` text,
  `type` varchar(20) DEFAULT NULL,
  `intake` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `no_of_course` int(11) DEFAULT NULL,
  `map` varchar(255) NOT NULL,
  `college_id` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`description`, `type`, `intake`, `location`, `no_of_course`, `map`, `college_id`) VALUES
('INTI International University is located at Putra Nilai, Negeri Sembilan. Once known as the INTI University College, their partnership with the Laureate International Universities allows the once university college an upgrade to full university status in 2010. The university now offers a wide range of programmes ranging from pre-university and foundation studies to postgraduate degrees. INTI has a total of 6 campuses throughout Malaysia. Under the partnership with the Laureate International Universities, students at INTI IU are provided an international exposure as courses will be learned together with international students and guests lecturers from across the world. INTI students can opt for a full semester abroad in one of the Laureate Institutions as they study in INTI.', 'Private College', 'Jan, Apr, May, Aug', 'Penang', 0, 'https://maps.google.it/maps?q=INTI International College Penang&output=embed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `college_id` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `college_id`) VALUES
(1, 'DICTN', 1),
(2, 'DITN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `rateIndex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `rateIndex`) VALUES
(1, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `pass`, `admin`) VALUES
(1, 'Superman', 'LEONG', 'YONG PENG', 'yongpeng0304@gmail.com', '01234', 1),
(6, 'haha', 'LEONG', 'PENG', 'yongpeng0304@gmail.com', '12345', 0),
(7, 'yxing', 'leong', 'yong xing', 'cincai@gmail.com', '12345', 0),
(8, 'cincai', 'cincai', 'cincai', 'cincai', 'cincai', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_details`
--
ALTER TABLE `college_details`
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_details`
--
ALTER TABLE `college_details`
  ADD CONSTRAINT `college_details_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
