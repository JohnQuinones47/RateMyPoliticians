-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2021 at 11:31 PM
-- Server version: 10.4.20-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u587940520_ratemyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `politicians`
--

CREATE TABLE `politicians` (
  `id` int(10) NOT NULL,
  `person` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_attribute_rates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_people` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `politicians`
--

INSERT INTO `politicians` (`id`, `person`, `comment`, `photo_url`, `attribute1`, `attribute2`, `attribute3`, `attribute4`, `total_attribute_rates`, `date_reg`, `email_people`, `office_address`, `phone`, `channel_type`, `channel_id`, `party`, `role`, `state`, `website`) VALUES
(34, 'Angus S. King, Jr.', 'Good Person', 'http://king.senate.gov/imo/media/image/Senator-King-Official-thumb.png', '5', '5', '5', '5', '20', '2021-10-19 23:27:34', NULL, '133 Hart Senate Office Building,Washington,DC,USA', '(202) 224-5344', 'YouTube', 'senatorangusking', 'Unaffiliated', NULL, 'DC', 'https://en.wikipedia.org/wiki/Angus_King');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `politicians`
--
ALTER TABLE `politicians`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `politicians`
--
ALTER TABLE `politicians`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
