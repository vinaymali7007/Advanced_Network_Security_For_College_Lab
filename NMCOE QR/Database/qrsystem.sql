-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 09:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `caltime`
--

CREATE TABLE `caltime` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `prn` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `date1` date NOT NULL,
  `time1` varchar(50) NOT NULL,
  `time11` varchar(50) NOT NULL,
  `date2` date NOT NULL,
  `time2` varchar(50) NOT NULL,
  `time22` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caltime`
--

INSERT INTO `caltime` (`id`, `name`, `contact`, `prn`, `email`, `class`, `dept`, `date1`, `time1`, `time11`, `date2`, `time2`, `time22`) VALUES
(1, 'sumit patil', 9922746393, 1234, 'sumit9@gmail.com', 'BSC', 'CS', '2022-12-26', '17:15:13', '', '2023-03-13', '15:43:36', ''),
(2, 'Amit Patil', 8956231245, 123456, 'amit29@gmail.com', 'BSC', 'CS', '2022-12-26', '17:16:51', '', '2022-12-26', '19:17:16', ''),
(3, 'sumit patil', 9922746393, 1234, 'sumit9@gmail.com', 'BSC', 'CS', '2022-12-26', '17:16:51', '', '2023-03-13', '15:43:36', ''),
(4, 'sumit patil', 9922746393, 1234, 'sumit9@gmail.com', 'BSC', 'CS', '2023-03-13', '15:43:21', '', '2023-03-13', '15:43:36', ''),
(5, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-03-14', '11:54:57', '', '2023-06-29', '12:44:05', '1688022845'),
(6, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-03-14', '11:59:29', '', '2023-06-29', '12:44:05', '1688022845'),
(7, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-03-14', '12:05:42', '', '2023-06-29', '12:44:05', '1688022845'),
(8, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-03-14', '12:06:40', '', '2023-06-29', '12:44:05', '1688022845'),
(9, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-03-14', '12:07:41', '', '2023-06-29', '12:44:05', '1688022845'),
(10, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-03-14', '12:29:40', '', '2023-06-29', '12:44:05', '1688022845'),
(11, 'Sumit Amit Patil', 9865321245, 789456, 'sumit123@gmail.com', 'BSC', 'CS', '2023-03-16', '19:46:52', '', '2023-03-16', '19:47:11', ''),
(12, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-04-20', '13:03:15', '', '2023-06-29', '12:44:05', '1688022845'),
(13, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-04-20', '13:23:28', '', '2023-06-29', '12:44:05', '1688022845'),
(14, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-04-20', '13:24:03', '', '2023-06-29', '12:44:05', '1688022845'),
(15, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-04-20', '13:24:12', '', '2023-06-29', '12:44:05', '1688022845'),
(16, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-04-20', '13:42:55', '', '2023-06-29', '12:44:05', '1688022845'),
(17, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-04-21', '19:05:23', '', '2023-06-29', '12:44:05', '1688022845'),
(18, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-06-29', '838:59:59', '', '2023-06-29', '12:44:05', '1688022845'),
(19, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-06-29', '12:30:17', '', '2023-06-29', '12:44:05', '1688022845'),
(21, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-06-29', '1688022213', '', '2023-06-29', '12:44:05', '1688022845'),
(22, 'Amit Patil', 8956231245, 1234567, 'amit29@gmail.com', 'BSC 2', 'CS', '2023-06-29', '12:41:18', '1688022678', '2023-06-29', '12:44:05', '1688022845');

-- --------------------------------------------------------

--
-- Table structure for table `maintance_tbl`
--

CREATE TABLE `maintance_tbl` (
  `id` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `mdate` date NOT NULL,
  `image` varchar(500) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintance_tbl`
--

INSERT INTO `maintance_tbl` (`id`, `mname`, `mem_name`, `mdate`, `image`, `descr`) VALUES
(2, 'Am', 'amit', '2023-05-16', 'ab2.jpg', 'abcd'),
(3, 'Am', 'amit', '2023-05-16', 'images/img2023051673430.jpg', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prn` bigint(20) NOT NULL,
  `class` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `contact`, `email`, `prn`, `class`, `dept`, `status`) VALUES
(1, 'Amit Patil', 'Gadhinglaj', 8956231245, 'amit29@gmail.com', 1234567, 'BSC 2', 'CS', 1),
(5, 'Sumit Amit Patil', 'Gadhinglaj', 9865321245, 'sumit123@gmail.com', 789456, 'BSC', 'CS', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caltime`
--
ALTER TABLE `caltime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintance_tbl`
--
ALTER TABLE `maintance_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caltime`
--
ALTER TABLE `caltime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `maintance_tbl`
--
ALTER TABLE `maintance_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
