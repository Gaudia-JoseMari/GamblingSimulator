-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 12:04 PM
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
(3, 'Dual_Berettas_Elite_1.6', 'Dual_Berettas', 'CS20', 0.16, 'Industrial', 'CSGO', 'Dual_Berettas_Elite_1.6.png'),
(4, 'Snakebite_Case', 'Case', 'Snakebite', 0.49, 'Consumer', 'CSGO', 'Snakebite_Case.png'),
(5, 'CS20_Case', 'Case', 'CS20', 4, 'Consumer', 'CSGO', 'CS20_Case.png'),
(6, 'FAMAS_Commemoration', 'FAMAS', 'CS20', 15.23, 'Covert', 'CSGO', 'FAMAS_Commemoration.png'),
(7, 'FAMAS_Decommissioned', 'FAMAS', 'CS20', 0.36, 'Mil-spec', 'CSGO', 'FAMAS_Decommissioned.png'),
(8, 'Five-SeveN_Buddy', 'Five_seveN', 'CS20', 1.23, 'Restricted', 'CSGO', 'Five-SeveN_Buddy.png'),
(9, 'Glock-18_Sacrifice', 'Glock-18', 'CS20', 4.92, 'Mil_Spec', 'CSGO', 'Glock-18_Sacrifice.png'),
(10, 'M249_Aztec', 'M249', 'CS20', 0.42, 'Restricted', 'CSGO', 'M249_Aztec.png'),
(11, 'MAC-10_Classic_Crate', 'MAC-10', 'CS20', 0.2, 'Mil-Spec', 'CSGO', 'MAC-10_Classic_Crate.png'),
(12, 'MAG-7_Popdog', 'MAG-7', 'CS20', 0.97, 'Mil-spec', 'CSGO', 'MAG-7_Popdog.png'),
(13, 'MP5-SD_Agent', 'MP5-SD', 'CS20', 10.84, 'Restricted', 'CSGO', 'MP5-SD_Agent.png'),
(14, 'MP9_Hydra', 'MP9', 'CS20', 8.11, 'Classified', 'CSGO', 'MP9_Hydra.png'),
(15, 'P90_Nostalgia', 'P90', 'CS20', 10.64, 'Classified', 'CSGO', 'P90_Nostalgia.png'),
(16, 'P250_Inferno', 'P250', 'CS20', 2.29, 'Restricted', 'CSGO', 'P250_Inferno.png'),
(17, 'SCAR-20_Assault', 'SCAR-20', 'CS20', 0.23, 'Mil-Spec', 'CSGO', 'SCAR-20_Assault.png'),
(18, 'Tec-9_Flash_Out', 'Tec-9', 'CS20', 0.1, 'Industrial', 'CSGO', 'Tec-9_Flash_Out.png'),
(19, 'UMP-45_Plastique', 'UMP-45', 'CS20', 0.53, 'Restricted', 'CSGO', 'UMP-45_Plastique.png');

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
  MODIFY `masteritem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
