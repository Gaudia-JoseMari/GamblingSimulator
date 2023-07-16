-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 04:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gambling`
--

-- --------------------------------------------------------

--
-- Table structure for table `masteritem`
--

CREATE TABLE `masteritem` (
  `masteritem_id` int(10) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `collection` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `rarity` varchar(20) NOT NULL,
  `game` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masteritem`
--

INSERT INTO `masteritem` (`masteritem_id`, `item_name`, `item_type`, `collection`, `price`, `rarity`, `game`, `image`) VALUES
(1, 'AUG_Death_by_Puppy', 'AUG', 'CS20', 8.23, 'Classified', 'CSGO', 'AUG_Death_by_Puppy.png'),
(2, 'AWP_Wildfire', 'AWP', 'CS20', 119.87, 'Covert', 'CSGO', 'AWP_Wildfire.png'),
(3, 'Dual_Berettas_Elite_1.6', 'Dual_Berettas', 'CS20', 0.16, 'Industrial', 'CSGO', 'Dual_Berettas_Elite_1.6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masteritem`
--
ALTER TABLE `masteritem`
  ADD PRIMARY KEY (`masteritem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masteritem`
--
ALTER TABLE `masteritem`
  MODIFY `masteritem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
