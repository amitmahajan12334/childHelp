-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 03:36 PM
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
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `donation_money` int(11) DEFAULT NULL,
  `transection_id` varchar(68) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `phone_number`, `comment`, `donation_money`, `transection_id`) VALUES
(46, 'Amit Mahajan', 'amitmahajan12334@gmail.com', 2147483647, 'amit', 101, 'TRANS5785569'),
(47, 'shyam', 'ak@gmail.com', 1234567890, 'shyam', 43, 'TRANS93924222'),
(48, 'meet', 'meet@gmail.com', 2147483647, 'asdfghjknbvc ghjk', 546, 'TRANS13080971');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `NGO_name` varchar(255) NOT NULL,
  `NGO_email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `NGO_name`, `NGO_email`, `username`, `password`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'amit', 'amit@gmail.com', 'amit', 'amit'),
(9, 'amit', 'amit@gmail.com', 'abcd', 'amit'),
(10, 'amit', 'amit@gmail.com', 'abcd', 'amit'),
(11, 'amit', 'help@gmail.com', 'help123', 'a'),
(12, 'amit', 'help@gmail.com', 'help123', 'am'),
(13, '', '', '', ''),
(14, 'amit', 'hj@gmail.com', 'hj', 'hj'),
(15, 'amit', 'amit@gmail.com', 'a', 'a'),
(16, 'amit', 'amit@gmail.com', 'aa', 'aa'),
(17, 'sumit', 'sumit@gmail.com', 'sumit', 'sumit'),
(18, 'rahul', 'help@gmail.com', 'rahul', 'rahul'),
(19, 'rahul', 'help@gmail.com', 'rahulm', 'rahulm'),
(20, 'LAL', 'help@gmail.com', 'lala', 'kala'),
(21, 'himanshu', 'himanshu@gmail.com', 'himanshu', 'himanshu'),
(22, 'Helper', 'help@gmail.com', 'helper', 'helper'),
(23, 'ram', 'ram@gmail.com', 'ram', 'ram'),
(24, 'ram kumar', 'amit@gmail.com', 'ramkumar', 'ramkumar'),
(25, '', 'amitmahajan12334@gmail.com', '', ''),
(26, 'raja', 'amitmahajan12334@gmail.com', 'raja', 'raja'),
(27, '', 'amitmahajan12334@gmail.com', '', ''),
(28, 'Bring smile', 'bring@gmail.com', 'bringsmile123', 'amit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
