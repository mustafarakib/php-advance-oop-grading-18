-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 12:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grading_system_b45`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`id` int(11) NOT NULL,
  `name` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `mark_bangla` float NOT NULL,
  `mark_english` float NOT NULL,
  `mark_math` float NOT NULL,
  `grade_bangla` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `grade_english` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `grade_math` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `roll`, `mark_bangla`, `mark_english`, `mark_math`, `grade_bangla`, `grade_english`, `grade_math`) VALUES
(1, 'A', '22', 66, 66, 66, 'B+', 'B+', 'B+'),
(2, 'dfsf', 's fd', 3, 4, 3, 'F', 'F', 'F'),
(3, 'fds', '45', 65, 89, 98, 'B+', 'A+', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
