-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2020 at 01:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iste`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '96e09e6d35444a4b24c0b0da4c0a82d4');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `class` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `heading`, `name`, `class`, `year`, `link`) VALUES
(1, 'NEW', 'SUJITH', 'COMPUTER SCIENCE', 2020, 'https://www.google.co.in/maps');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(22, '', '2020-09-12 13:46:19'),
(23, '', '2020-09-12 13:52:03'),
(24, '', '2020-09-12 13:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `image`, `date`) VALUES
(3, 'App Development Workshop', 'The ISTE students chapter of TKMCE conducted a 2 day workshop on App Development for the students of TKMCE. The workshop was held from 27th to 28th October at the CCFL Lab.', 'bhagya.jpg', '2020-09-14'),
(4, 'Gaming Royale', 'As part of the techno cultural fest HESTIA 2K19 held from 28th to 31st March 2019, the ISTE students chapter of TKMCE conducted the  Gaming Royale, a platform for entertainmental games that added a taste of enthusiasm to the tech fest.', 'royale.jpg', '2019-03-31'),
(5, 'Machine Learning', 'Machine Learning, is an application of Artificial Intelligence, focuses on the development of computer programs that can access data and use it learn for themselves. ISTE students chapter TKMCE conducted a 2 day workshop on Machine Learning.', 'machine.jpg', '2020-09-12'),
(6, 'Latest', 'This is a dummy text to check an event works or not for ISTE', 'fb_img_1569047483757.jpg', '2020-09-30'),
(8, 'Sujith V I', 'esdrfatgYHDXJASMKXCNKZXV SDFHJSNDF FLmlkkFOLDFlnlh;hawrkkdf', 'img_9015.jpg.jpg', '2020-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `execom`
--

CREATE TABLE `execom` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `category` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `execom`
--

INSERT INTO `execom` (`id`, `name`, `position`, `category`, `image`) VALUES
(1, 'DIVYA MARY', 'CHAIR CS THIRD YEAR', 'Senior Execom', 'img-20191029-wa0000.jpg'),
(2, 'SREEHARI', 'VICE CHAIRMAN\r\nPRODUCTION THIRD YEAR', 'Senior Execom', 'img_9016.jpg.jpg'),
(3, 'LEKSHMI', 'PROGRAM COORDINATOR\r\n\r\nECE THIRD YEAR', 'Junior Execom', 'lekshmi.jpg'),
(4, 'SANGEETH', 'DEVELOPER CIVIL THIRD YEAR', 'Web Developer', 'sangeeth-civil.jpg'),
(5, 'AISHA ', 'DESIGN  civil THIRD YEAR', 'Junior Execom', 'aisha.jpg'),
(6, 'SRUTHY ', 'DOCUMENTATION  EEE THIRD YEAR', 'Junior Execom', 'sruthy.jpg'),
(7, 'AKSHARA ', 'DOCUMENTATION  civil THIRD YEAR', 'Junior Execom', 'akshara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `month` varchar(15) NOT NULL DEFAULT 'Unknown',
  `year` int(5) NOT NULL DEFAULT 0,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `month`, `year`, `link`) VALUES
(1, 'September', 2020, 'https://maps.google.com/'),
(2, 'Unknown', 0, 'https://maps.google.com/'),
(3, 'Unknown', 0, 'https://maps.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `name`, `description`, `date`) VALUES
(1, 'Name', 'Desc', '2020-09-10 11:46:21'),
(2, 'Helo', 'Hi', '2020-09-10 11:46:21'),
(3, 'hello', 'Hello', '2020-09-10 11:46:21'),
(4, 'Name', 'Desc', '2020-09-10 11:57:27'),
(5, 'Helo', 'Hi', '2020-09-10 11:57:27'),
(6, 'hello', 'Hello', '2020-09-10 11:57:27'),
(7, 'Name', 'Desc', '2020-09-10 12:07:08'),
(8, 'Helo', 'Hi', '2020-09-10 12:07:09'),
(9, 'hello', 'Hello', '2020-09-10 12:07:09'),
(10, 'Name', 'Desc', '2020-09-10 12:32:07'),
(11, 'Helo', 'Hi', '2020-09-10 12:32:07'),
(12, 'hello', 'Hello', '2020-09-10 12:32:07'),
(13, 'Name', 'Desc', '2020-09-10 12:32:42'),
(14, 'Helo', 'Hi', '2020-09-10 12:32:42'),
(15, 'hello', 'Hello', '2020-09-10 12:32:42'),
(16, 'Name', 'Desc', '2020-09-10 12:37:23'),
(17, 'Helo', 'Hi', '2020-09-10 12:37:23'),
(18, 'hello', 'Hello', '2020-09-10 12:37:23'),
(19, 'Name', 'Desc', '2020-09-10 12:38:47'),
(20, 'Helo', 'Hi', '2020-09-10 12:38:47'),
(21, 'hello', 'Hello', '2020-09-10 12:38:47'),
(22, 'Name', 'Desc', '2020-09-10 12:40:01'),
(23, 'Helo', 'Hi', '2020-09-10 12:40:01'),
(24, 'hello', 'Hello', '2020-09-10 12:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `prefa` varchar(50) NOT NULL,
  `prefb` varchar(50) NOT NULL,
  `prefc` varchar(50) NOT NULL,
  `prefd` varchar(50) NOT NULL,
  `why` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `branch`, `batch`, `mobile`, `prefa`, `prefb`, `prefc`, `prefd`, `why`, `text`, `status`) VALUES
(1, 'Suji', 'sujith@gmail.com', 'CS', 'R4', '9961957849', 'sdfsd', 'sfdsdfg', 'sdfsdf', 'sdfcd', 'dsf', 'sdf', 1),
(2, 'Suji', 'sujith@gmail.com', 'CS', 'R4', '9961957849', 'sdfsd', 'sfdsdfg', 'sdfsdf', 'sdfcd', 'dsf', 'sdf', 1),
(3, 'Sujith', 'sujith@gmail.com', 'CS', 'R4', '9961957849', 'sdfsd', 'sfdsdfg', 'sdfsdf', 'sdfcd', 'dsf', 'sdf', 0),
(4, 'Suji', 'sujith@gmail.com', 'CS', 'R4', '9961957849', 'sdfsd', 'sfdsdfg', 'sdfsdf', 'sdfcd', 'dsf', 'sdf', 1),
(5, 'Suji', 'sujith@gmail.com', 'CS', 'R4', '9961957849', 'sdfsd', 'sfdsdfg', 'sdfsdf', 'sdfcd', 'dsf', 'sdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `execom`
--
ALTER TABLE `execom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `execom`
--
ALTER TABLE `execom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;