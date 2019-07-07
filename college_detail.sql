-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 05:38 PM
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
-- Table structure for table `college_detail`
--

CREATE TABLE `college_detail` (
  `detail_id` int(3) NOT NULL,
  `description` text,
  `type` varchar(255) DEFAULT NULL,
  `intake` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `no_of_course` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `college_id` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_detail`
--

INSERT INTO `college_detail` (`detail_id`, `description`, `type`, `intake`, `location`, `no_of_course`, `map`, `college_id`) VALUES
(1, 'INTI International University is located at Putra Nilai, Negeri Sembilan. Once known as the INTI University College, their partnership with the Laureate International Universities allows the once university college an upgrade to full university status in 2010. The university now offers a wide range of programmes ranging from pre-university and foundation studies to postgraduate degrees. INTI has a total of 6 campuses throughout Malaysia. Under the partnership with the Laureate International Universities, students at INTI IU are provided an international exposure as courses will be learned together with international students and guests lecturers from across the world. INTI students can opt for a full semester abroad in one of the Laureate Institutions as they study in INTI.', 'Private College', 'Jan, Apr, May, Aug', 'Penang', '0', 'https://maps.google.it/maps?q=INTI International College Penang&output=embed', 1),
(2, 'This is SEGI college', 'Private College', 'Jan, Apr, May, Aug', 'Penang', '0', '	\r\nhttps://maps.google.it/maps?q=SEGI College Penang&output=embed', 2),
(3, 'This is TARUC', 'Private College', 'Jan, Apr, May, Aug', 'Penang', '0', 'https://maps.google.it/maps?q=Tunku Abdul Rahman University College Penang&output=embed', 3),
(4, 'This is Sunway College', 'Private College', 'Jan, Apr, May, Aug', 'Penang', '0', 'https://maps.google.it/maps?q=Sunway College&output=embed', 4),
(5, 'This is DISTED college', 'Private College', 'Jan, Apr, May, Aug', 'Penang', '0', 'https://maps.google.it/maps?q=Disted College&output=embed', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_detail`
--
ALTER TABLE `college_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `college_id` (`college_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_detail`
--
ALTER TABLE `college_detail`
  MODIFY `college_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_detail`
--
ALTER TABLE `college_detail`
  ADD CONSTRAINT `college_detail_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
