-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 08:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eviro`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_phone` varchar(13) DEFAULT NULL,
  `user_message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_name`, `user_email`, `user_phone`, `user_message`) VALUES
(2, 'ghfh', 'fghfgh', 'fghfgh', 'fghgfh'),
(3, '', '', '', ''),
(6, 'Test', 'testt@gmail.xom', '999999999', 'test '),
(7, 'bhupinder', 'hello@test.com', '999999999', 'test..'),
(8, 'fsdf', 'sdaf', 'asf', 'sdaf'),
(9, 'rwer', 'wer', 'wer', 'wr'),
(10, 'fsdf', 'sdfasd', 'sdfsd', 'sdf'),
(11, 'amrik', 'amriksingh@intersoftprofessional.com', 'test', 'amriksingh@intersoftprofessional.com amriksingh@intersoftprofessional.com'),
(12, 'hello', 'fdsfa', 'asdf', 'afsdfsdfasdf'),
(13, 'sdf', 'sadf@gmail.com', 'df', 'asdfdsfdfads'),
(14, '34', 'dgf@gmail.com', '343434234324', 'fsdffsdf'),
(15, '456', '45456', '345324456', '345456'),
(16, 'hello', 'dgf@gmail.com', '6454556787', 'fdgfdsgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(20) NOT NULL,
  `user_question` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `user_question`) VALUES
(1, 'hello '),
(2, 'sdffs'),
(3, 'gvk'),
(4, 'why?'),
(5, 'SDFASDF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
