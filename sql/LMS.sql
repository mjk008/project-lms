-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2017 at 12:40 AM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `LMS_quotes`
--

CREATE TABLE `LMS_quotes` (
  `UID` int(11) NOT NULL,
  `quote` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LMS_quotes`
--

INSERT INTO `LMS_quotes` (`UID`, `quote`, `author`) VALUES
(1, 'We are here to put a dent in the universe. Otherwise why even be here?', 'Steve Jobs'),
(2, 'The only way to do great work is to LOVE what you do', 'Steve Jobs'),
(3, 'Your time is limited. Don\'t waste it living someone else\'s life', 'Steve Jobs'),
(4, 'You will never have this day again. Make it count', 'Anonymous'),
(5, 'Nothing worth having comes without a fight. You gotta beat the darkness until bleeds daylight', 'Unknown'),
(6, 'Be somebody nobody thought you could be', 'Unknown'),
(7, 'Be like a postage stamp. Stick to a thing till you get there. ', 'Josh Billings'),
(8, 'Be a voice. Not an echo.', 'Unknown'),
(9, 'Dont limit your challenges. Challenge your limits.', 'Unknown'),
(10, 'Live your beliefs and you can turn the world around.', 'Henry David'),
(10, 'The roots of education is bitter. But the fruit is sweet. ', 'Aristotle');

-- --------------------------------------------------------

--
-- Table structure for table `LMS_user`
--

CREATE TABLE `LMS_user` (
  `UID` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LMS_user`
--

INSERT INTO `LMS_user` (`UID`, `username`) VALUES
(103, 'udamliyanage'),
(104, 'udamsathsara');

-- --------------------------------------------------------

--
-- Table structure for table `LMS_user_data`
--

CREATE TABLE `LMS_user_data` (
  `username` varchar(32) DEFAULT NULL,
  `email` varchar(254) NOT NULL DEFAULT '',
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_directory` varchar(255) DEFAULT NULL,
  `public_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LMS_user_data`
--

INSERT INTO `LMS_user_data` (`username`, `email`, `firstname`, `lastname`, `class`, `password`, `user_directory`, `public_dir`) VALUES
('udamliyanage', 'udam1998@gmail.com', 'Udam', 'Liyanage', 12, '$2y$10$W/oV5KnRGugao26xQKwSd.I29Ftx3.fKgd5HO5S9WfAxHa4Fh2rfy', '/var/www/html/WorkGroup/namh3ejsrevajvbx2gdipo7alnvt5hbj', '/var/www/html/public/gr12'),
('udamsathsara', 'upendi@gmail.com', 'Udam', 'Liyanage', 12, '$2y$10$YjygtzfxD9hvELWkiUoBX./GNeblXf2VTdZV3KR3udEstSql.BKBG', '/var/www/html/WorkGroup/0ov8jho0pf36r6w0shms5qdk8f1zi0d9', '/var/www/html/public/gr12');

-- --------------------------------------------------------

--
-- Table structure for table `LMS_user_ip`
--

CREATE TABLE `LMS_user_ip` (
  `username` varchar(32) NOT NULL DEFAULT '',
  `ip` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `LMS_user_status`
--

CREATE TABLE `LMS_user_status` (
  `status_id` int(11) NOT NULL DEFAULT '0',
  `ID` int(11) DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LMS_user_status`
--

INSERT INTO `LMS_user_status` (`status_id`, `ID`, `user_status`, `ts`) VALUES
(4954, 104, 1, '0000-00-00 00:00:00'),
(5966, 103, 1, '2017-01-21 09:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `val` int(11) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `diff` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `val`, `ts`, `diff`) VALUES
(123, 456, '2017-01-22 11:00:15', '2017-01-22 16:30:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LMS_quotes`
--
ALTER TABLE `LMS_quotes`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `LMS_user`
--
ALTER TABLE `LMS_user`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `LMS_user_data`
--
ALTER TABLE `LMS_user_data`
  ADD PRIMARY KEY (`email`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `LMS_user_ip`
--
ALTER TABLE `LMS_user_ip`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `LMS_user_status`
--
ALTER TABLE `LMS_user_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LMS_quotes`
--
ALTER TABLE `LMS_quotes`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `LMS_user`
--
ALTER TABLE `LMS_user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `LMS_user_data`
--
ALTER TABLE `LMS_user_data`
  ADD CONSTRAINT `LMS_user_data_ibfk_1` FOREIGN KEY (`username`) REFERENCES `LMS_user` (`username`);

--
-- Constraints for table `LMS_user_ip`
--
ALTER TABLE `LMS_user_ip`
  ADD CONSTRAINT `LMS_user_ip_ibfk_1` FOREIGN KEY (`username`) REFERENCES `LMS_user_data` (`username`);

--
-- Constraints for table `LMS_user_status`
--
ALTER TABLE `LMS_user_status`
  ADD CONSTRAINT `LMS_user_status_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `LMS_user` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
