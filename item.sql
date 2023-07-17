-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 05:08 AM
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
  `item_name` varchar(100) NOT NULL,
  `date_received` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

UPDATE `item` SET `item_id` = 2,`user_id` = 0,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = '2023-07-17 02:46:43' WHERE `item`.`item_id` = 2;
UPDATE `item` SET `item_id` = 3,`user_id` = 0,`masteritem_id` = 16,`item_name` = 'P250 Inferno',`date_received` = NULL WHERE `item`.`item_id` = 3;
UPDATE `item` SET `item_id` = 4,`user_id` = 0,`masteritem_id` = 21,`item_name` = 'CZ75-Auto Circaetus',`date_received` = NULL WHERE `item`.`item_id` = 4;
UPDATE `item` SET `item_id` = 5,`user_id` = 0,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 5;
UPDATE `item` SET `item_id` = 6,`user_id` = 0,`masteritem_id` = 7,`item_name` = 'FAMAS Decommissioned',`date_received` = NULL WHERE `item`.`item_id` = 6;
UPDATE `item` SET `item_id` = 7,`user_id` = 0,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 7;
UPDATE `item` SET `item_id` = 8,`user_id` = 0,`masteritem_id` = 6,`item_name` = 'FAMAS Commemoration',`date_received` = NULL WHERE `item`.`item_id` = 8;
UPDATE `item` SET `item_id` = 9,`user_id` = 0,`masteritem_id` = 7,`item_name` = 'FAMAS Decommissioned',`date_received` = NULL WHERE `item`.`item_id` = 9;
UPDATE `item` SET `item_id` = 10,`user_id` = 0,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 10;
UPDATE `item` SET `item_id` = 11,`user_id` = 0,`masteritem_id` = 11,`item_name` = 'MAC-10 Classic Crate',`date_received` = NULL WHERE `item`.`item_id` = 11;
UPDATE `item` SET `item_id` = 12,`user_id` = 0,`masteritem_id` = 30,`item_name` = 'Nova Windblown',`date_received` = NULL WHERE `item`.`item_id` = 12;
UPDATE `item` SET `item_id` = 13,`user_id` = 0,`masteritem_id` = 24,`item_name` = 'Glock-18 Clear Polymer',`date_received` = NULL WHERE `item`.`item_id` = 13;
UPDATE `item` SET `item_id` = 14,`user_id` = 0,`masteritem_id` = 22,`item_name` = 'Desert Eagle Trigger Discipline',`date_received` = NULL WHERE `item`.`item_id` = 14;
UPDATE `item` SET `item_id` = 15,`user_id` = 0,`masteritem_id` = 33,`item_name` = 'SG 553 Heavy Metal',`date_received` = NULL WHERE `item`.`item_id` = 15;
UPDATE `item` SET `item_id` = 16,`user_id` = 0,`masteritem_id` = 11,`item_name` = 'MAC-10 Classic Crate',`date_received` = NULL WHERE `item`.`item_id` = 16;
UPDATE `item` SET `item_id` = 17,`user_id` = 0,`masteritem_id` = 17,`item_name` = 'SCAR-20 Assault',`date_received` = NULL WHERE `item`.`item_id` = 17;
UPDATE `item` SET `item_id` = 18,`user_id` = 1,`masteritem_id` = 25,`item_name` = 'M4A4 In Living Color',`date_received` = NULL WHERE `item`.`item_id` = 18;
UPDATE `item` SET `item_id` = 19,`user_id` = 0,`masteritem_id` = 9,`item_name` = 'Glock-18 Sacrifice',`date_received` = NULL WHERE `item`.`item_id` = 19;
UPDATE `item` SET `item_id` = 20,`user_id` = 1,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 20;
UPDATE `item` SET `item_id` = 21,`user_id` = 1,`masteritem_id` = 27,`item_name` = 'MAC-10 Button Masher',`date_received` = NULL WHERE `item`.`item_id` = 21;
UPDATE `item` SET `item_id` = 22,`user_id` = 1,`masteritem_id` = 26,`item_name` = 'M249 O.S.I.P.R.',`date_received` = NULL WHERE `item`.`item_id` = 22;
UPDATE `item` SET `item_id` = 23,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 23;
UPDATE `item` SET `item_id` = 24,`user_id` = 1,`masteritem_id` = 23,`item_name` = 'Galil AR Chromatic Aberration',`date_received` = NULL WHERE `item`.`item_id` = 24;
UPDATE `item` SET `item_id` = 25,`user_id` = 1,`masteritem_id` = 31,`item_name` = 'P250 Cyber Shell',`date_received` = NULL WHERE `item`.`item_id` = 25;
UPDATE `item` SET `item_id` = 26,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 26;
UPDATE `item` SET `item_id` = 27,`user_id` = 1,`masteritem_id` = 35,`item_name` = 'USP-S The Traitor',`date_received` = NULL WHERE `item`.`item_id` = 27;
UPDATE `item` SET `item_id` = 28,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 28;
UPDATE `item` SET `item_id` = 29,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 29;
UPDATE `item` SET `item_id` = 30,`user_id` = 1,`masteritem_id` = 16,`item_name` = 'P250 Inferno',`date_received` = NULL WHERE `item`.`item_id` = 30;
UPDATE `item` SET `item_id` = 31,`user_id` = 1,`masteritem_id` = 3,`item_name` = 'Dual Berettas Elite 1.6',`date_received` = NULL WHERE `item`.`item_id` = 31;
UPDATE `item` SET `item_id` = 32,`user_id` = 1,`masteritem_id` = 35,`item_name` = 'USP-S The Traitor',`date_received` = NULL WHERE `item`.`item_id` = 32;
UPDATE `item` SET `item_id` = 33,`user_id` = 1,`masteritem_id` = 24,`item_name` = 'Glock-18 Clear Polymer',`date_received` = NULL WHERE `item`.`item_id` = 33;
UPDATE `item` SET `item_id` = 34,`user_id` = 1,`masteritem_id` = 34,`item_name` = 'UMP-45 Oscillator',`date_received` = NULL WHERE `item`.`item_id` = 34;
UPDATE `item` SET `item_id` = 35,`user_id` = 1,`masteritem_id` = 21,`item_name` = 'CZ75-Auto Circaetus',`date_received` = NULL WHERE `item`.`item_id` = 35;
UPDATE `item` SET `item_id` = 36,`user_id` = 1,`masteritem_id` = 20,`item_name` = 'AK-47 Slate',`date_received` = NULL WHERE `item`.`item_id` = 36;
UPDATE `item` SET `item_id` = 37,`user_id` = 1,`masteritem_id` = 25,`item_name` = 'M4A4 In Living Color',`date_received` = NULL WHERE `item`.`item_id` = 37;
UPDATE `item` SET `item_id` = 38,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 38;
UPDATE `item` SET `item_id` = 39,`user_id` = 1,`masteritem_id` = 22,`item_name` = 'Desert Eagle Trigger Discipline',`date_received` = NULL WHERE `item`.`item_id` = 39;
UPDATE `item` SET `item_id` = 40,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 40;
UPDATE `item` SET `item_id` = 41,`user_id` = 1,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 41;
UPDATE `item` SET `item_id` = 42,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 42;
UPDATE `item` SET `item_id` = 43,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 43;
UPDATE `item` SET `item_id` = 44,`user_id` = 1,`masteritem_id` = 9,`item_name` = 'Glock-18 Sacrifice',`date_received` = NULL WHERE `item`.`item_id` = 44;
UPDATE `item` SET `item_id` = 45,`user_id` = 0,`masteritem_id` = 3,`item_name` = 'Dual Berettas Elite 1.6',`date_received` = NULL WHERE `item`.`item_id` = 45;
UPDATE `item` SET `item_id` = 46,`user_id` = 1,`masteritem_id` = 19,`item_name` = 'UMP-45 Plastique',`date_received` = NULL WHERE `item`.`item_id` = 46;
UPDATE `item` SET `item_id` = 47,`user_id` = 1,`masteritem_id` = 19,`item_name` = 'UMP-45 Plastique',`date_received` = NULL WHERE `item`.`item_id` = 47;
UPDATE `item` SET `item_id` = 48,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 48;
UPDATE `item` SET `item_id` = 49,`user_id` = 1,`masteritem_id` = 8,`item_name` = 'Five-SeveN Buddy',`date_received` = NULL WHERE `item`.`item_id` = 49;
UPDATE `item` SET `item_id` = 50,`user_id` = 1,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 50;
UPDATE `item` SET `item_id` = 51,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 51;
UPDATE `item` SET `item_id` = 52,`user_id` = 1,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 52;
UPDATE `item` SET `item_id` = 53,`user_id` = 0,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 53;
UPDATE `item` SET `item_id` = 54,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 54;
UPDATE `item` SET `item_id` = 55,`user_id` = 1,`masteritem_id` = 11,`item_name` = 'MAC-10 Classic Crate',`date_received` = NULL WHERE `item`.`item_id` = 55;
UPDATE `item` SET `item_id` = 56,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 56;
UPDATE `item` SET `item_id` = 57,`user_id` = 1,`masteritem_id` = 18,`item_name` = 'Tec-9 Flash Out',`date_received` = NULL WHERE `item`.`item_id` = 57;
UPDATE `item` SET `item_id` = 58,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 58;
UPDATE `item` SET `item_id` = 59,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 59;
UPDATE `item` SET `item_id` = 60,`user_id` = 1,`masteritem_id` = 11,`item_name` = 'MAC-10 Classic Crate',`date_received` = NULL WHERE `item`.`item_id` = 60;
UPDATE `item` SET `item_id` = 61,`user_id` = 0,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 61;
UPDATE `item` SET `item_id` = 62,`user_id` = 0,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 62;
UPDATE `item` SET `item_id` = 63,`user_id` = 1,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 63;
UPDATE `item` SET `item_id` = 64,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 64;
UPDATE `item` SET `item_id` = 65,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 65;
UPDATE `item` SET `item_id` = 66,`user_id` = 1,`masteritem_id` = 16,`item_name` = 'P250 Inferno',`date_received` = NULL WHERE `item`.`item_id` = 66;
UPDATE `item` SET `item_id` = 67,`user_id` = 1,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 67;
UPDATE `item` SET `item_id` = 68,`user_id` = 1,`masteritem_id` = 7,`item_name` = 'FAMAS Decommissioned',`date_received` = NULL WHERE `item`.`item_id` = 68;
UPDATE `item` SET `item_id` = 69,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 69;
UPDATE `item` SET `item_id` = 70,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 70;
UPDATE `item` SET `item_id` = 71,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 71;
UPDATE `item` SET `item_id` = 72,`user_id` = 0,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 72;
UPDATE `item` SET `item_id` = 73,`user_id` = 1,`masteritem_id` = 7,`item_name` = 'FAMAS Decommissioned',`date_received` = NULL WHERE `item`.`item_id` = 73;
UPDATE `item` SET `item_id` = 74,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 74;
UPDATE `item` SET `item_id` = 75,`user_id` = 1,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 75;
UPDATE `item` SET `item_id` = 76,`user_id` = 1,`masteritem_id` = 8,`item_name` = 'Five-SeveN Buddy',`date_received` = NULL WHERE `item`.`item_id` = 76;
UPDATE `item` SET `item_id` = 77,`user_id` = 1,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 77;
UPDATE `item` SET `item_id` = 78,`user_id` = 1,`masteritem_id` = 17,`item_name` = 'SCAR-20 Assault',`date_received` = NULL WHERE `item`.`item_id` = 78;
UPDATE `item` SET `item_id` = 79,`user_id` = 1,`masteritem_id` = 17,`item_name` = 'SCAR-20 Assault',`date_received` = NULL WHERE `item`.`item_id` = 79;
UPDATE `item` SET `item_id` = 80,`user_id` = 1,`masteritem_id` = 8,`item_name` = 'Five-SeveN Buddy',`date_received` = NULL WHERE `item`.`item_id` = 80;
UPDATE `item` SET `item_id` = 81,`user_id` = 1,`masteritem_id` = 9,`item_name` = 'Glock-18 Sacrifice',`date_received` = NULL WHERE `item`.`item_id` = 81;
UPDATE `item` SET `item_id` = 82,`user_id` = 1,`masteritem_id` = 9,`item_name` = 'Glock-18 Sacrifice',`date_received` = NULL WHERE `item`.`item_id` = 82;
UPDATE `item` SET `item_id` = 83,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 83;
UPDATE `item` SET `item_id` = 84,`user_id` = 0,`masteritem_id` = 8,`item_name` = 'Five-SeveN Buddy',`date_received` = NULL WHERE `item`.`item_id` = 84;
UPDATE `item` SET `item_id` = 85,`user_id` = 1,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 85;
UPDATE `item` SET `item_id` = 86,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 86;
UPDATE `item` SET `item_id` = 87,`user_id` = 1,`masteritem_id` = 20,`item_name` = 'AK-47 Slate',`date_received` = NULL WHERE `item`.`item_id` = 87;
UPDATE `item` SET `item_id` = 88,`user_id` = 1,`masteritem_id` = 26,`item_name` = 'M249 O.S.I.P.R.',`date_received` = NULL WHERE `item`.`item_id` = 88;
UPDATE `item` SET `item_id` = 89,`user_id` = 1,`masteritem_id` = 23,`item_name` = 'Galil AR Chromatic Aberration',`date_received` = NULL WHERE `item`.`item_id` = 89;
UPDATE `item` SET `item_id` = 90,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 90;
UPDATE `item` SET `item_id` = 91,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 91;
UPDATE `item` SET `item_id` = 92,`user_id` = 1,`masteritem_id` = 17,`item_name` = 'SCAR-20 Assault',`date_received` = NULL WHERE `item`.`item_id` = 92;
UPDATE `item` SET `item_id` = 93,`user_id` = 1,`masteritem_id` = 19,`item_name` = 'UMP-45 Plastique',`date_received` = NULL WHERE `item`.`item_id` = 93;
UPDATE `item` SET `item_id` = 94,`user_id` = 1,`masteritem_id` = 3,`item_name` = 'Dual Berettas Elite 1.6',`date_received` = NULL WHERE `item`.`item_id` = 94;
UPDATE `item` SET `item_id` = 95,`user_id` = 1,`masteritem_id` = 34,`item_name` = 'UMP-45 Oscillator',`date_received` = NULL WHERE `item`.`item_id` = 95;
UPDATE `item` SET `item_id` = 96,`user_id` = 1,`masteritem_id` = 25,`item_name` = 'M4A4 In Living Color',`date_received` = NULL WHERE `item`.`item_id` = 96;
UPDATE `item` SET `item_id` = 97,`user_id` = 1,`masteritem_id` = 23,`item_name` = 'Galil AR Chromatic Aberration',`date_received` = NULL WHERE `item`.`item_id` = 97;
UPDATE `item` SET `item_id` = 98,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 98;
UPDATE `item` SET `item_id` = 99,`user_id` = 1,`masteritem_id` = 20,`item_name` = 'AK-47 Slate',`date_received` = NULL WHERE `item`.`item_id` = 99;
UPDATE `item` SET `item_id` = 100,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 100;
UPDATE `item` SET `item_id` = 101,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 101;
UPDATE `item` SET `item_id` = 102,`user_id` = 1,`masteritem_id` = 29,`item_name` = 'Negev dev texture',`date_received` = NULL WHERE `item`.`item_id` = 102;
UPDATE `item` SET `item_id` = 103,`user_id` = 1,`masteritem_id` = 34,`item_name` = 'UMP-45 Oscillator',`date_received` = NULL WHERE `item`.`item_id` = 103;
UPDATE `item` SET `item_id` = 104,`user_id` = 1,`masteritem_id` = 25,`item_name` = 'M4A4 In Living Color',`date_received` = NULL WHERE `item`.`item_id` = 104;
UPDATE `item` SET `item_id` = 105,`user_id` = 1,`masteritem_id` = 33,`item_name` = 'SG 553 Heavy Metal',`date_received` = NULL WHERE `item`.`item_id` = 105;
UPDATE `item` SET `item_id` = 106,`user_id` = 0,`masteritem_id` = 6,`item_name` = 'FAMAS Commemoration',`date_received` = NULL WHERE `item`.`item_id` = 106;
UPDATE `item` SET `item_id` = 107,`user_id` = 0,`masteritem_id` = 19,`item_name` = 'UMP-45 Plastique',`date_received` = NULL WHERE `item`.`item_id` = 107;
UPDATE `item` SET `item_id` = 108,`user_id` = 0,`masteritem_id` = 29,`item_name` = 'Negev dev texture',`date_received` = NULL WHERE `item`.`item_id` = 108;
UPDATE `item` SET `item_id` = 109,`user_id` = 0,`masteritem_id` = 33,`item_name` = 'SG 553 Heavy Metal',`date_received` = NULL WHERE `item`.`item_id` = 109;
UPDATE `item` SET `item_id` = 110,`user_id` = 1,`masteritem_id` = 31,`item_name` = 'P250 Cyber Shell',`date_received` = NULL WHERE `item`.`item_id` = 110;
UPDATE `item` SET `item_id` = 111,`user_id` = 1,`masteritem_id` = 23,`item_name` = 'Galil AR Chromatic Aberration',`date_received` = NULL WHERE `item`.`item_id` = 111;
UPDATE `item` SET `item_id` = 112,`user_id` = 1,`masteritem_id` = 25,`item_name` = 'M4A4 In Living Color',`date_received` = NULL WHERE `item`.`item_id` = 112;
UPDATE `item` SET `item_id` = 113,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 113;
UPDATE `item` SET `item_id` = 114,`user_id` = 1,`masteritem_id` = 34,`item_name` = 'UMP-45 Oscillator',`date_received` = NULL WHERE `item`.`item_id` = 114;
UPDATE `item` SET `item_id` = 115,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 115;
UPDATE `item` SET `item_id` = 116,`user_id` = 1,`masteritem_id` = 24,`item_name` = 'Glock-18 Clear Polymer',`date_received` = NULL WHERE `item`.`item_id` = 116;
UPDATE `item` SET `item_id` = 117,`user_id` = 1,`masteritem_id` = 21,`item_name` = 'CZ75-Auto Circaetus',`date_received` = NULL WHERE `item`.`item_id` = 117;
UPDATE `item` SET `item_id` = 118,`user_id` = 1,`masteritem_id` = 23,`item_name` = 'Galil AR Chromatic Aberration',`date_received` = NULL WHERE `item`.`item_id` = 118;
UPDATE `item` SET `item_id` = 119,`user_id` = 1,`masteritem_id` = 21,`item_name` = 'CZ75-Auto Circaetus',`date_received` = NULL WHERE `item`.`item_id` = 119;
UPDATE `item` SET `item_id` = 120,`user_id` = 1,`masteritem_id` = 26,`item_name` = 'M249 O.S.I.P.R.',`date_received` = NULL WHERE `item`.`item_id` = 120;
UPDATE `item` SET `item_id` = 121,`user_id` = 1,`masteritem_id` = 32,`item_name` = 'R8 Revolver Junk Yard',`date_received` = NULL WHERE `item`.`item_id` = 121;
UPDATE `item` SET `item_id` = 122,`user_id` = 1,`masteritem_id` = 31,`item_name` = 'P250 Cyber Shell',`date_received` = NULL WHERE `item`.`item_id` = 122;
UPDATE `item` SET `item_id` = 123,`user_id` = 1,`masteritem_id` = 22,`item_name` = 'Desert Eagle Trigger Discipline',`date_received` = NULL WHERE `item`.`item_id` = 123;
UPDATE `item` SET `item_id` = 124,`user_id` = 1,`masteritem_id` = 34,`item_name` = 'UMP-45 Oscillator',`date_received` = NULL WHERE `item`.`item_id` = 124;
UPDATE `item` SET `item_id` = 125,`user_id` = 1,`masteritem_id` = 29,`item_name` = 'Negev dev texture',`date_received` = NULL WHERE `item`.`item_id` = 125;
UPDATE `item` SET `item_id` = 126,`user_id` = 1,`masteritem_id` = 22,`item_name` = 'Desert Eagle Trigger Discipline',`date_received` = NULL WHERE `item`.`item_id` = 126;
UPDATE `item` SET `item_id` = 127,`user_id` = 1,`masteritem_id` = 29,`item_name` = 'Negev dev texture',`date_received` = NULL WHERE `item`.`item_id` = 127;
UPDATE `item` SET `item_id` = 128,`user_id` = 1,`masteritem_id` = 26,`item_name` = 'M249 O.S.I.P.R.',`date_received` = NULL WHERE `item`.`item_id` = 128;
UPDATE `item` SET `item_id` = 129,`user_id` = 1,`masteritem_id` = 30,`item_name` = 'Nova Windblown',`date_received` = NULL WHERE `item`.`item_id` = 129;
UPDATE `item` SET `item_id` = 130,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 130;
UPDATE `item` SET `item_id` = 131,`user_id` = 1,`masteritem_id` = 36,`item_name` = 'XM1014 XOXO',`date_received` = NULL WHERE `item`.`item_id` = 131;
UPDATE `item` SET `item_id` = 132,`user_id` = 1,`masteritem_id` = 35,`item_name` = 'USP-S The Traitor',`date_received` = NULL WHERE `item`.`item_id` = 132;
UPDATE `item` SET `item_id` = 133,`user_id` = 1,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 133;
UPDATE `item` SET `item_id` = 134,`user_id` = 1,`masteritem_id` = 9,`item_name` = 'Glock-18 Sacrifice',`date_received` = NULL WHERE `item`.`item_id` = 134;
UPDATE `item` SET `item_id` = 135,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 135;
UPDATE `item` SET `item_id` = 136,`user_id` = 1,`masteritem_id` = 18,`item_name` = 'Tec-9 Flash Out',`date_received` = NULL WHERE `item`.`item_id` = 136;
UPDATE `item` SET `item_id` = 137,`user_id` = 1,`masteritem_id` = 6,`item_name` = 'FAMAS Commemoration',`date_received` = NULL WHERE `item`.`item_id` = 137;
UPDATE `item` SET `item_id` = 138,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 138;
UPDATE `item` SET `item_id` = 139,`user_id` = 1,`masteritem_id` = 13,`item_name` = 'MP5-SD Agent',`date_received` = NULL WHERE `item`.`item_id` = 139;
UPDATE `item` SET `item_id` = 140,`user_id` = 1,`masteritem_id` = 3,`item_name` = 'Dual Berettas Elite 1.6',`date_received` = NULL WHERE `item`.`item_id` = 140;
UPDATE `item` SET `item_id` = 141,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 141;
UPDATE `item` SET `item_id` = 142,`user_id` = 1,`masteritem_id` = 19,`item_name` = 'UMP-45 Plastique',`date_received` = NULL WHERE `item`.`item_id` = 142;
UPDATE `item` SET `item_id` = 143,`user_id` = 1,`masteritem_id` = 19,`item_name` = 'UMP-45 Plastique',`date_received` = NULL WHERE `item`.`item_id` = 143;
UPDATE `item` SET `item_id` = 144,`user_id` = 1,`masteritem_id` = 17,`item_name` = 'SCAR-20 Assault',`date_received` = NULL WHERE `item`.`item_id` = 144;
UPDATE `item` SET `item_id` = 145,`user_id` = 1,`masteritem_id` = 7,`item_name` = 'FAMAS Decommissioned',`date_received` = NULL WHERE `item`.`item_id` = 145;
UPDATE `item` SET `item_id` = 146,`user_id` = 1,`masteritem_id` = 14,`item_name` = 'MP9 Hydra',`date_received` = NULL WHERE `item`.`item_id` = 146;
UPDATE `item` SET `item_id` = 147,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 147;
UPDATE `item` SET `item_id` = 148,`user_id` = 1,`masteritem_id` = 6,`item_name` = 'FAMAS Commemoration',`date_received` = NULL WHERE `item`.`item_id` = 148;
UPDATE `item` SET `item_id` = 149,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 149;
UPDATE `item` SET `item_id` = 150,`user_id` = 0,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 150;
UPDATE `item` SET `item_id` = 151,`user_id` = 1,`masteritem_id` = 18,`item_name` = 'Tec-9 Flash Out',`date_received` = NULL WHERE `item`.`item_id` = 151;
UPDATE `item` SET `item_id` = 152,`user_id` = 1,`masteritem_id` = 15,`item_name` = 'P90 Nostalgia',`date_received` = NULL WHERE `item`.`item_id` = 152;
UPDATE `item` SET `item_id` = 153,`user_id` = 1,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 153;
UPDATE `item` SET `item_id` = 154,`user_id` = 1,`masteritem_id` = 11,`item_name` = 'MAC-10 Classic Crate',`date_received` = NULL WHERE `item`.`item_id` = 154;
UPDATE `item` SET `item_id` = 155,`user_id` = 1,`masteritem_id` = 2,`item_name` = 'AWP Wildfire',`date_received` = NULL WHERE `item`.`item_id` = 155;
UPDATE `item` SET `item_id` = 156,`user_id` = 1,`masteritem_id` = 12,`item_name` = 'MAG-7 Popdog',`date_received` = NULL WHERE `item`.`item_id` = 156;
UPDATE `item` SET `item_id` = 157,`user_id` = 1,`masteritem_id` = 17,`item_name` = 'SCAR-20 Assault',`date_received` = NULL WHERE `item`.`item_id` = 157;
UPDATE `item` SET `item_id` = 158,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 158;
UPDATE `item` SET `item_id` = 159,`user_id` = 1,`masteritem_id` = 16,`item_name` = 'P250 Inferno',`date_received` = NULL WHERE `item`.`item_id` = 159;
UPDATE `item` SET `item_id` = 160,`user_id` = 1,`masteritem_id` = 8,`item_name` = 'Five-SeveN Buddy',`date_received` = NULL WHERE `item`.`item_id` = 160;
UPDATE `item` SET `item_id` = 161,`user_id` = 1,`masteritem_id` = 16,`item_name` = 'P250 Inferno',`date_received` = NULL WHERE `item`.`item_id` = 161;
UPDATE `item` SET `item_id` = 162,`user_id` = 0,`masteritem_id` = 1,`item_name` = 'AUG Death by Puppy',`date_received` = NULL WHERE `item`.`item_id` = 162;
UPDATE `item` SET `item_id` = 163,`user_id` = 1,`masteritem_id` = 10,`item_name` = 'M249 Aztec',`date_received` = NULL WHERE `item`.`item_id` = 163;
UPDATE `item` SET `item_id` = 164,`user_id` = 1,`masteritem_id` = 8,`item_name` = 'Five-SeveN Buddy',`date_received` = '2023-07-17 02:50:53' WHERE `item`.`item_id` = 164;

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
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

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
