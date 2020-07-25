-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 25, 2020 at 08:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Name` varchar(20) NOT NULL,
  `Assign` varchar(20) NOT NULL,
  `Resource` int(11) NOT NULL,
  `Deadline` date NOT NULL,
  `Skill` varchar(20) NOT NULL,
  `Allocation` varchar(20) DEFAULT NULL,
  `progress` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Name`, `Assign`, `Resource`, `Deadline`, `Skill`, `Allocation`, `progress`) VALUES
('Clothes', 'no', 300, '2020-08-03', 'Tailer', 'Seeta', NULL),
('Pickle', 'no', 200, '2020-09-04', 'Food Item', 'Geeta', NULL),
('Pots', 'yes', 900, '2020-09-01', 'Handcraft', 'Meema', NULL),
('Cups', 'yes', 200, '2020-09-01', 'Handcraft', 'Seema', NULL),
('Decorative_Items', 'no', 100, '2020-10-05', 'Handcraft', NULL, NULL),
('Papad', 'yes', 500, '2020-10-01', 'Cooking', 'Reema', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
