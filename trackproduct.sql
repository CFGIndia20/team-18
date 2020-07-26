-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 05:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `trackproduct`
--

CREATE TABLE `trackproduct` (
  `productName` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `hour` int(11) NOT NULL,
  `productsMade` int(11) NOT NULL,
  `imageURL` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackproduct`
--

INSERT INTO `trackproduct` (`productName`, `dates`, `hour`, `productsMade`, `imageURL`, `mobile`) VALUES
('cup', '2020-08-11', 20, 4, 'background1.jpg', 8850237301),
('soft toy', '2020-07-28', 22, 13, 'handicraft_day1.jpg', 8850237301);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trackproduct`
--
ALTER TABLE `trackproduct`
  ADD KEY `mobile_fk` (`mobile`),
  ADD KEY `product_fk` (`productName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trackproduct`
--
ALTER TABLE `trackproduct`
  ADD CONSTRAINT `mobile_fk` FOREIGN KEY (`mobile`) REFERENCES `users` (`mobile`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`productName`) REFERENCES `product` (`products`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
