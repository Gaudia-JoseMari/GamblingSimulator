-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 03:48 PM
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `masteritem_id` int(10) NOT NULL,
  `item_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `user_id`, `masteritem_id`, `item_name`) VALUES
(2, 0, 13, 'MP5-SD Agent'),
(3, 0, 16, 'P250 Inferno'),
(4, 0, 21, 'CZ75-Auto Circaetus'),
(5, 0, 13, 'MP5-SD Agent'),
(6, 0, 7, 'FAMAS Decommissioned'),
(7, 0, 12, 'MAG-7 Popdog'),
(8, 0, 6, 'FAMAS Commemoration'),
(9, 0, 7, 'FAMAS Decommissioned'),
(10, 0, 10, 'M249 Aztec'),
(11, 0, 11, 'MAC-10 Classic Crate'),
(12, 0, 30, 'Nova Windblown'),
(13, 0, 24, 'Glock-18 Clear Polymer'),
(14, 0, 22, 'Desert Eagle Trigger Discipline'),
(15, 0, 33, 'SG 553 Heavy Metal'),
(16, 0, 11, 'MAC-10 Classic Crate'),
(17, 0, 17, 'SCAR-20 Assault'),
(18, 1, 25, 'M4A4 In Living Color'),
(19, 1, 9, 'Glock-18 Sacrifice'),
(20, 1, 13, 'MP5-SD Agent'),
(21, 1, 27, 'MAC-10 Button Masher'),
(22, 1, 26, 'M249 O.S.I.P.R.'),
(23, 1, 36, 'XM1014 XOXO'),
(24, 1, 23, 'Galil AR Chromatic Aberration'),
(25, 1, 31, 'P250 Cyber Shell'),
(26, 1, 32, 'R8 Revolver Junk Yard'),
(27, 1, 35, 'USP-S The Traitor'),
(28, 1, 32, 'R8 Revolver Junk Yard'),
(29, 1, 36, 'XM1014 XOXO'),
(30, 1, 16, 'P250 Inferno'),
(31, 1, 3, 'Dual Berettas Elite 1.6'),
(32, 1, 35, 'USP-S The Traitor'),
(33, 1, 24, 'Glock-18 Clear Polymer'),
(34, 1, 34, 'UMP-45 Oscillator'),
(35, 1, 21, 'CZ75-Auto Circaetus'),
(36, 1, 20, 'AK-47 Slate'),
(37, 1, 25, 'M4A4 In Living Color'),
(38, 1, 32, 'R8 Revolver Junk Yard'),
(39, 1, 22, 'Desert Eagle Trigger Discipline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fr_user_id` (`user_id`),
  ADD KEY `fr_masteritem_id` (`masteritem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fr_masteritem_id` FOREIGN KEY (`masteritem_id`) REFERENCES `masteritem` (`masteritem_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
