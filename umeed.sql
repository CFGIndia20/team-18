-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 09:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `products` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `TotalProducts` int(11) NOT NULL,
  `ProductMade` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(128) NOT NULL,
  `position` int(2) NOT NULL,
  `mobile` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `passwrd`, `position`, `mobile`) VALUES
('Rohit', 'a130a41ddfa0f53fc56ae93f77b935f7623eaf793477e5b9da526c1ff7c1281bb27720a51d7283091edc329d0aa432b3cda3d784d053e265316a7635c2cab42d', 1, 8850237301);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`products`);

--
-- Indexes for table `trackproduct`
--
ALTER TABLE `trackproduct`
  ADD KEY `mobile_fk` (`mobile`),
  ADD KEY `product_fk` (`productName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mobile`);

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
