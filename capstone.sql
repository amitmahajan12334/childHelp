-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

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
  `parents` enum('yes','no','dont') NOT NULL,
  `education` enum('primary','notEducated') NOT NULL,
  `image` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`id`, `childName`, `childAge`, `parents`, `education`, `image`, `lat`, `lng`, `status`) VALUES
(59, 'Amit Mahajan', '5', 'no', 'notEducated', 'uploaded/pexels-bess-hamiti-35537.jpg', '25.451743', '78.5941198', 0),
(60, 'Karan Patel', '6', 'yes', 'notEducated', 'uploaded/pexels-daria-shevtsova-789786.jpg', '25.451743', '78.5941198', 0),
(61, 'Meet1', '3', 'dont', 'notEducated', 'uploaded/pexels-jessica-lewis-189857.jpg', '21.519177', '70.441285', 0),
(62, 'Meet2', '4', 'yes', 'notEducated', 'uploaded/pexels-jonas-mohamadi-1416736.jpg', '21.519177', '70.441285', 0),
(63, 'Ajay', '9', 'yes', 'notEducated', 'uploaded/pexels-pixabay-289923.jpg', '25.4517314', '78.5941246', 1),
(64, 'amit rai', '3', 'yes', 'notEducated', 'uploaded/IMG_20200226_142014.jpg', '31.1471305', '75.34121789999999', 0),
(65, 'amit1', '1', 'yes', 'notEducated', 'uploaded/IMG_8761.JPG', '25.451790199999998', '78.5941053', 1),
(66, 'amit0', '2', 'yes', 'notEducated', 'uploaded/pexels-pixabay-36029.jpg', '25.4517912', '78.59410559999999', 1),
(67, 'siva', '7', 'yes', 'notEducated', 'uploaded/pexels-pixabay-48794.jpg', '31.1471305', '75.34121789999999', 0),
(68, 'abcd', '3', 'yes', 'notEducated', 'uploaded/pexels-rebecca-zaal-764681.jpg', '31.1471305', '75.34121789999999', 0),
(69, 'abcd2', '2', 'yes', 'primary', 'uploaded/pexels-daniel-edeke-1442751.jpg', '31.1471305', '75.34121789999999', 0),
(70, 'zz', '3', 'dont', 'primary', 'uploaded/pexels-agung-pandit-wiguna-1320701.jpg', '25.451790199999998', '78.5941051', 1),
(71, 'Meet4', '4', 'yes', 'primary', 'uploaded/pexels-bess-hamiti-35537.jpg', '21.519177', '70.441285', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(5, 'Rohit ', 'bpsrohitmalik@gmail.com', 'abcd3', 'i am a good person.');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `donation_money` varchar(255) DEFAULT NULL,
  `transection_id` varchar(68) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `phone_number`, `comment`, `donation_money`, `transection_id`) VALUES
(77, 'Amit Mahajan', 'amitmahajan12334@gmail.com', '2147483647', 'i love my country', '101', 'TRANS20559339'),
(78, 'amit', 'amitmahajan264889@gmail.com', '2147483647', 'hehehe', '54', 'TRANS49790997'),
(79, 'meet', 'meet@gmail.com', '2147483647', 'lululu', '67', 'TRANS16060138'),
(80, 'Sumit', 'sumit@gmail.com', '7376132434', 'heha', '19', 'TRANS36178369'),
(81, 'Rohit', 'bpsrohitmalik@gmail.com', '7404421215', 'I am the best boy.', '101', 'TRANS97540919');

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
  `password` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `email`, `username`, `password`, `phone_number`) VALUES
(1, 'Pragati Rath NGO', 'Jhansi, Budh Vihar Colony, Nagra, Jhansi, Uttar Pradesh 284003', '25.4282626', '78.5128558', 'teamflaregamingofficial@gmail.com', 'pragatirath123', 'pragatirath123', '1234567890'),
(2, 'Pratha Parivartan', 'Ratanpur Nagar, Nagra, Jhansi, Uttar Pradesh 284003', '25.4274071', '78.529872', 'amitmahajan264889@gmail.com', 'pratha123', 'pratha123', '3214567890'),
(3, 'Smile Foundation', 'J Civil Lines, Jhansi, Uttar Pradesh 284001', '25.4427182', '78.5649485', 'laluyadav.264889@gmail.com', 'smile123', 'smile123', '9874567890'),
(4, 'R Foundation NGO', 'ITI, S 82, Siddheshwar Nagar, Jhansi, Uttar Pradesh 284003', '25.4561008', '78.5767156', 'laluyadav.264889@gmail.com', 'rngo123', 'rngo123', '4564567890'),
(5, 'Muskan NGO', 'Plot No. 3, Pocket, 2, Pocket 3, Sector B, Vasant Kunj, New Delhi, Delhi 110070', '28.6231926', '77.1976791', 'ylalu0678@gmail.com', 'muskan123', 'muskan123', '4567899870'),
(6, 'MIW Foundation NGO', 'B-38/5, Ramesh Nagar Rd, Double Storey II, Ramesh Nagar, New Delhi, Delhi 110015', '28.6231926', '77.1976791', 'amitmahajan264889@gmail.com', 'delhimiw123', 'delhimiw123', '12345676589'),
(7, 'speed NGO', '40, Jawala Nagar, Maqsudan, Jalandhar, Punjab 144008', '31.3070742', '75.5512603', 'amitmahajan12334@gmail.com', 'speed123', 'speed123', '9876543210'),
(8, 'mini NGO', '28, ext, kpt road, Maharaja Garden, Raja Garden Colony, Basti Bawa Khel, Jalandhar, Punjab 144002', '31.3070742', '75.5512603', 'amitmahajan264889@gmail.com', 'mini123', 'mini123', '7376132434'),
(9, 'Pahal NGO', 'First Floor, 31-32 New Vivekanand Park,, Nandanpur Rd, Sudarshan Park, Maqsudan, Jalandhar, Punjab 144008', '31.3070742', '75.5512603', 'laluyadav.264889@gmail.com', 'pahal123', 'pahal123', '9876456782'),
(10, 'MIW Foundation NGO', '20 Steal House Colony, Cantt Rd, Jalandhar, Punjab 144005', '31.3070742', '75.5512603', 'teamflaregamingofficial@gmail.com', 'jalandharcanttmiw123', 'jalandharcanttmiw123', '9845678742'),
(11, 'MIW Foundation NGO', '4th Floor, Chamber No.444 Lawyer Chamber Complex, No.2, Punjab 141001', '30.905907', '75.6014876', 'amitmahajan123340@gmail.com', 'laywermiw123', 'laywermiw123', '6378982435'),
(12, 'Abraham Vikas Foundation', 'Tehsil, Main Bazar Vpo, Khadur Sahib, Goindwal Sahib, Punjab 143422', '31.1664259', '75.386812', 'amitmahajan123340@gmail.com', 'abraham123', 'abraham123', '6498756178'),
(15, 'Manav Paryavan Seva Trust', 'AMBEDKAR NAGAR, BILKHA ROAD, OPP. AMBEDKAR BHAVAN, STREET NO.3, JUNAGADH, PIN-362001', '21.496086', '70.468863', 'email', 'mpst123', 'mpst123', '9078563421'),
(16, 'Humankind', 'Humankind, F/3, Nanakram Super Market, Ramnagar, Sabarmati, Ahmedabad', '23.084332 ', '72.591336', 'email', 'kind123', 'kind123', '8967452345'),
(17, 'amit', 'shivaji nagr', '1243', '12334', 'amit@gmail.com', 'amit123', 'amit123', '123456789'),
(18, 'amit', 'edba qeed', '1234', '456789', 'amit1@gmail.com', 'amit1', 'amit1', '7376132434'),
(19, 'shivam', '', '', '', 'shivam@gmail.com', 'shivam123', 'shivam123', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'amitmahajan12334@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(255) NOT NULL,
  `child_id` int(255) NOT NULL,
  `ngo_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `child_id`, `ngo_id`) VALUES
(8, 63, 1),
(13, 66, 3),
(14, 70, 3),
(16, 65, 3),
(17, 71, 3),
(18, 71, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
