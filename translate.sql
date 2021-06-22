-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2021 at 11:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `translate`
--

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `id` bigint(20) NOT NULL,
  `english_word` varchar(100) NOT NULL,
  `mankon_equivalent` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `audio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`id`, `english_word`, `mankon_equivalent`, `category`, `audio`) VALUES
(6, 'Good Morning', 'njwi-la', 'Greeting', ''),
(7, 'Good day', 'o jughe-ne', 'Greeting', ''),
(8, 'Good night', 'fuulieh-fo', 'Greeting', ''),
(9, 'How are you', 'abei-ne', 'Question', ''),
(10, 'How are you doing', 'o buu-ne', 'Question', ''),
(11, 'What is your name', 'e kum gho ne ke', 'Question', ''),
(12, 'What is the time', 'nyome ne ke', 'Question', ''),
(14, 'Where are you from', 'o lo ghe', 'Question', ''),
(15, 'Where are you going', 'o ghe ghee', 'Question', ''),
(16, 'What are you doing', 'o fa-ah ke', 'Question', ''),
(17, 'Where are you', 'o mey', 'Question', ''),
(19, 'My name is Frunwi', 'kum ghe ne Frunwi', 'Response', ''),
(20, 'I am fine', 'ma tsi shi-ne', 'Response', ''),
(21, 'I am from school', 'ma lo sucuru', 'Response', ''),
(22, 'Its 3:00pm', 'a ne be nyom bitare', 'Response', ''),
(23, 'I am going home', 'ma ghe tsu-ndah', 'Response', ''),
(24, 'I am reading', 'ma tong-ne nwaah-ne', 'Response', ''),
(25, 'I am at home', 'ma tche ndah', 'Response', ''),
(26, 'do you speak english', 'o ghame @kaare', 'Question', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'mugri', 'password'),
(8, 'shelton', 'password'),
(9, 'gilian', 'gilian'),
(10, 'Kurtish', 'pas'),
(14, 'chrome', 'chromepass'),
(15, 'cletus', 'laclengang'),
(20, 'alex', 'password'),
(21, 'nasser', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `translation`
--
ALTER TABLE `translation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
