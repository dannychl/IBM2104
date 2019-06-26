-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_details`
--
ALTER TABLE `college_details`
  ADD KEY `college_id` (`college_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_details`
--
ALTER TABLE `college_details`
  ADD CONSTRAINT `college_details_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
