-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 03:45 PM
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
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `id` int(255) NOT NULL,
  `childName` varchar(255) NOT NULL,
  `childAge` varchar(255) NOT NULL,
  `parents` enum('yes','no','don''t') NOT NULL,
  `education` enum('primary','notEducated') NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`id`, `childName`, `childAge`, `parents`, `education`, `image`) VALUES
(1, '', '2', '', '', ''),
(2, 'shivam', '11', '', '', ''),
(3, 'asdfg', '234', '', '', 'Array'),
(4, 'shivam', '5', '', '', 'logo.png'),
(5, 'wer', '3', '', '', 'donation-bg.jpg'),
(6, 'karan', '2', 'yes', 'primary', 'logo.png'),
(7, 'zoya', '3', 'yes', 'notEducated', 'Screenshot (57).png'),
(8, 'zzzzzzzzz', '2', 'yes', 'notEducated', 'Screenshot (62).png'),
(9, 'zzzzzzzzzzz2', '2', 'yes', 'notEducated', 'Screenshot (63).png'),
(10, 'zoya5', '4', 'yes', 'notEducated', 'Screenshot (68).png'),
(11, 'zoya4', '4', 'no', 'primary', 'Screenshot (67).png'),
(12, 'zoya6', '6', 'yes', 'notEducated', 'Screenshot (64).png');

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
(48, 'meet', 'meet@gmail.com', 2147483647, 'asdfghjknbvc ghjk', 546, 'TRANS13080971'),
(49, 'Ajay', 'ajay12334@gmail.com', 12345678, 'asd tyuio ghjk', 65, 'TRANS42249529');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `email`, `username`, `password`) VALUES
(1, 'Pragati Rath NGO', 'Jhansi, Budh Vihar Colony, Nagra, Jhansi, Uttar Pradesh 284003', '25.4282626', '78.5128558', NULL, 'pragatirath123', 'pragatirath123'),
(2, 'Pratha Parivartan', 'Ratanpur Nagar, Nagra, Jhansi, Uttar Pradesh 284003', '25.4274071', '78.529872', '', 'pratha123', 'pratha123'),
(3, 'Smile Foundation', 'J Civil Lines, Jhansi, Uttar Pradesh 284001', '25.4427182', '78.5649485', NULL, 'smile123', 'smile123'),
(4, 'R Foundation NGO', 'ITI, S 82, Siddheshwar Nagar, Jhansi, Uttar Pradesh 284003', '25.4561008', '78.5767156', NULL, 'rngo123', 'rngo123'),
(5, 'Muskan NGO', 'Plot No. 3, Pocket, 2, Pocket 3, Sector B, Vasant Kunj, New Delhi, Delhi 110070', '28.6231926', '77.1976791', NULL, 'muskan123', 'muskan123'),
(6, 'MIW Foundation NGO', 'B-38/5, Ramesh Nagar Rd, Double Storey II, Ramesh Nagar, New Delhi, Delhi 110015', '28.6231926', '77.1976791', NULL, 'delhimiw123', 'delhimiw123'),
(7, 'speed NGO', '40, Jawala Nagar, Maqsudan, Jalandhar, Punjab 144008', '31.3070742', '75.5512603', NULL, 'speed123', 'speed123'),
(8, 'mini NGO', '28, ext, kpt road, Maharaja Garden, Raja Garden Colony, Basti Bawa Khel, Jalandhar, Punjab 144002', '31.3070742', '75.5512603', NULL, 'mini123', 'mini123'),
(9, 'Pahal NGO', 'First Floor, 31-32 New Vivekanand Park,, Nandanpur Rd, Sudarshan Park, Maqsudan, Jalandhar, Punjab 144008', '31.3070742', '75.5512603', NULL, 'pahal123', 'pahal123'),
(10, 'MIW Foundation NGO', '20 Steal House Colony, Cantt Rd, Jalandhar, Punjab 144005', '31.3070742', '75.5512603', NULL, 'jalandharcanttmiw123', 'jalandharcanttmiw123'),
(11, 'MIW Foundation NGO', '4th Floor, Chamber No.444 Lawyer Chamber Complex, No.2, Punjab 141001', '30.905907', '75.6014876', NULL, 'laywermiw123', 'laywermiw123'),
(12, 'Abraham Vikas Foundation', 'Tehsil, Main Bazar Vpo, Khadur Sahib, Goindwal Sahib, Punjab 143422', '31.1664259', '75.386812', NULL, 'abraham123', 'abraham123');

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
(28, 'Bring smile', 'bring@gmail.com', 'bringsmile123', 'amit'),
(29, 'ram', 'ram@gmail.com', 'ram123', 'ram@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
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
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
