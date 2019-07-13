-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 10:49 AM
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
-- Database: `project`
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
  `bannersource` varchar(100) DEFAULT NULL,
  `altimg` varchar(50) DEFAULT NULL,
  `logo_source` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `location`, `rating`, `picsource`, `bannersource`, `altimg`, `logo_source`) VALUES
(1, 'INTI International College', 'Kuala Lumpur', 5, 'INTI-logo.jpg', 'INTI-banner.jpg', 'INTI Logo', 'inti.png'),
(2, 'SEGI University & College', 'Penang', 4.5, 'SEGI-logo.png', 'SEGI-banner.jpg', 'SEGI Logo', 'segi.png'),
(3, 'Tunku Abdul Rahman University College', 'Penang', 4.5, 'TARUC-logo.jpg', 'TARUC-banner.jpg', 'TARC Logo', 'tarc.png'),
(4, 'Sunway College', 'Penang', 4.5, 'SUNWAY-logo.png', 'SUNWAY-banner.jpg', 'Sunway Logo', 'sunway.png'),
(5, 'Disted College', 'Penang', 4.5, 'DISTED-logo.png', 'DISTED-banner.jpg', 'Disted Logo', 'disted.png');

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

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `college_id` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `mode`, `level`, `duration`, `fee`, `college_id`) VALUES
(1, 'Bachelor Of Information Technology (University Of Wollongong, Uow)', 'Full-Time', 'Degree', 36, 79500, 1),
(2, 'Bachelor Of Computer Science (University Of Wollongong, Uow)', 'Full-Time', 'Degree', 36, 79500, 1),
(3, 'Bachelor Of Computer Science (Hons) In Network & Mobile Computing', 'Full-Time', 'Degree', 36, 58470, 1),
(4, 'Bachelor Of Business Information Technology (Hons)', 'Full-Time', 'Degree', 36, 58470, 1),
(5, 'Diploma in Information Technology', 'Full-Time', 'Diploma', 24, NULL, 2),
(6, 'Executive Diploma in Information Technology', 'Part-Time', 'Diploma', 18, NULL, 2),
(7, 'BSc (Hons) Computing (3+0)', 'Full-Time', 'Degree', 36, NULL, 2),
(8, 'Diploma in Science (Computer Science and Management Mathematics)', 'Full-Time', 'Diploma', 24, 15000, 3),
(9, 'Diploma in Science (Computer Science and Computer Mathematics)', 'Full-Time', 'Diploma', 24, 15400, 3),
(10, 'Diploma in Science (Information Systems Engineering)', 'Full-Time', 'Diploma', 24, 15400, 3),
(11, 'Diploma in Science (Buisiness Information Systems)', 'Full-Time', 'Diploma', 24, 15200, 3),
(12, 'Diploma in Information Technology', 'Full-Time', 'Diploma', 24, 28300, 4),
(13, 'Bachelor of Science (Hons) in Information Technology', 'Full-Time', 'Degree', 36, 57300, 4),
(14, 'Bachelor of Science (Hons) in Computer Science', 'Full-Time', 'Degree', 36, 57300, 4),
(15, 'Bachelor of Science (Hons) in Information Systems', 'Full-Time', 'Degree', 36, 57300, 4),
(16, 'Diploma in Business Information Technology', 'Full-Time', 'Diploma', 24, 32032, 5),
(17, 'Diploma in Computer Science', 'Full-Time', 'Diploma', 24, 33520, 5),
(18, 'Japanese Transfer Programme', 'Full-Time', 'Degree', 36, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `time` date DEFAULT NULL,
  `comment` text,
  `college_id` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `time`, `comment`, `college_id`) VALUES
(1, '2019-07-01', 'This is a line of comment.', 1),
(2, '2019-07-13', 'fuck u tm gagaga hahahaha', 1),
(3, '2019-07-13', 'fuck you TM, mcd,pizza, kfc,blah lbha lbhalbhabajlbjalbhaljldasjdfoiajsfoidasnfndaskfjoasidfmksaldgmlksdfasjfoipwemklfasndgkvlasfj', 1);

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
(8, 'cincai', 'cincai', 'cincai', 'cincai', 'cincai', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_detail`
--
ALTER TABLE `college_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
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
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `college_detail`
--
ALTER TABLE `college_detail`
  MODIFY `college_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_detail`
--
ALTER TABLE `college_detail`
  ADD CONSTRAINT `college_detail_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
