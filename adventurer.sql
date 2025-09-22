-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2025 at 02:15 AM
-- Server version: 9.1.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crude`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventurer`
--

DROP TABLE IF EXISTS `adventurer`;
CREATE TABLE IF NOT EXISTS `adventurer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Class` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weapon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weapon_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Level` int NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adventurer`
--

INSERT INTO `adventurer` (`id`, `Name`, `Class`, `Weapon`, `Weapon_Name`, `Level`, `deleted_at`) VALUES
(10, 'Nero', 'Swordsman', '322467e49d5a787134c6d35567520d962d888403.jpg', 'Mistsplitter Reforge', 100, NULL),
(2, 'Picy', 'Archer', '4bdbfcbe46b50d7c934090aba5a0affc7cdf436b.jpg', 'Polar Star', 80, NULL),
(5, 'Pangkoy', 'Archer', '8e3a31b89c56367dc545dd9217d500d814139909.jpg', 'Elegy For The End', 100, NULL),
(4, 'Rey', 'Mage', '45e8db7b381a534a4f7f059420696205389a4e8c.jpg', 'Tome of the Eternal Flow', 75, NULL),
(7, 'lex', 'Archer', '94ff7a01e5b3a31884fba6ba9835fc9fef7703e7.jpg', 'Amo\'s Bow', 90, NULL),
(12, 'Kinich', 'Heavy Swordsman', 'dea55510fb23e839887ba2bb70cca38d1c5b5321.jpg', 'Fang of The Mountain King', 90, NULL),
(9, 'Jayar', 'Swordsman', '006aa2dbf0447619e6fc81a59f9ac9d13e0758f6.jpg', 'Haran Geppaku Futsu', 100, NULL),
(13, 'Mavuika', 'Heavy Swordsman', '6745b7734cfaa29ae10a788f8b6fe4ba2dccdd76.jpg', 'A Thousand Blazing Suns', 90, NULL),
(14, 'Arleccino', 'Spearman', '6a1972693d8e2290c94c23e7ac54ab72db01960c.jpg', 'Crimson Moon', 90, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
