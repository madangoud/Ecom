-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 07:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `product` varchar(11) NOT NULL,
  `color` varchar(10000) NOT NULL,
  `pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `Name`, `model`, `cost`, `product`, `color`, `pic`) VALUES
(5, 'one Plus', 'Nord', 32000, 'Mobile', 'Blue', 'images/nord.jfif'),
(2, 'oppo', 'reno', 45000, 'Mobile', 'Black', 'images/oppo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `product` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `pic` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Name`, `model`, `cost`, `product`, `color`, `pic`) VALUES
(1, 'IPhone', 'XR', 45000, 'Mobile', 'Black', 'images/ixr.jpg'),
(2, 'oppo', 'reno', 45000, 'Mobile', 'Black', 'images/oppo.jpg'),
(3, 'Samsung ', 'M31', 15000, 'Mobile', 'bluee', 'images/m31s.jpg'),
(4, 'Mac', 'Air 3', 100000, 'Laptop', 'White', 'images/mac.jpg'),
(5, 'one Plus', 'Nord', 32000, 'Mobile', 'Blue', 'images/nord.jfif'),
(6, 'one Plus', 'Nord', 45000, 'Mobile', 'Blue', 'images/oneplus8t.jfif'),
(1, 'apple', 'watch 5', 20000, 'watch', 'balck', 'images/watch1.jpg'),
(6, 'oppo', 'a52 ', 25000, 'mobile', 'black', 'images/oppoa52.jfif'),
(8, 'Sony', 'QLED', 60000, 'Television', 'Black', 'images/sonytv.jpg'),
(8, 'LG', '4K LED', 40000, 'Television', 'Black', 'images/lg.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `pic` (`pic`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
