-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 06:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionista`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `title` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `timestamp`) VALUES
(1, 'nishi', 'nishi@gmail.com', 'hello fashionista', '2022-11-08'),
(2, 'riya', 'riya@gmail.com', 'hello fashionista', '2022-11-08'),
(3, 'riya', 'riya@gmail.com', 'hello fashionista', '2022-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `price`, `image`, `timestamp`) VALUES
(5, 'Shirt', 'Men', 1000, 'm4.jpeg.jpg', '2022-11-15 14:35:18'),
(6, 'Shirt', 'Men', 2000, 'm9.jpg', '2022-11-15 14:35:53'),
(7, 'Shirt', 'Men', 500, 'm11.jpeg.jpg', '2022-11-15 14:36:19'),
(8, 'Formal Suit', 'Men', 5000, 'm1.jpeg.jpg', '2022-11-15 14:37:50'),
(9, 'Formal', 'Men', 4000, 'm5.jpg', '2022-11-15 14:38:31'),
(10, 'Sherwani', 'Men', 15000, 'm6.jpg', '2022-11-15 14:39:13'),
(11, 'Kurta Set', 'Men', 800, 'm7.jpeg.jpg', '2022-11-15 14:40:12'),
(12, 'T-shirt', 'Men', 550, 'm3.jpeg.jpg', '2022-11-15 14:40:47'),
(13, 'T-shirt', 'Men', 689, 'm10.jpg', '2022-11-15 14:41:22'),
(14, 'Jacket', 'Men', 999, 'm8.jpg', '2022-11-15 14:41:54'),
(15, 'Girl', 'kids', 500, 'k1.jpeg.jpg', '2022-11-15 14:43:10'),
(16, 'Dress', 'kids', 1000, 'k2.jpeg.jpg', '2022-11-15 14:43:38'),
(17, 'Dress', 'kids', 699, 'k3.jpeg.jpg', '2022-11-15 14:44:37'),
(18, 'Gown', 'kids', 5000, 'k4.jpeg.jpg', '2022-11-15 14:46:33'),
(19, 'Boy', 'kids', 599, 'k9.jpeg.jpg', '2022-11-15 14:49:02'),
(20, 'Boy', 'kids', 999, 'k6.jpeg.jpg', '2022-11-15 14:50:33'),
(21, 'Short Dess', 'Women', 599, 'w1.jpeg.jpg', '2022-11-15 14:51:21'),
(22, 'Short Dress', 'Women', 899, 'w2.jpeg.jpg', '2022-11-15 14:51:49'),
(23, 'Black Short Dress', 'Women', 999, 'w3.jpeg.jpg', '2022-11-15 14:52:30'),
(24, 'Gown', 'Women', 899, 'w4.jpeg.jpg', '2022-11-15 14:53:08'),
(25, 'Skirt', 'Women', 699, 'w6.jpeg.jpg', '2022-11-15 14:53:45'),
(26, 'Short Dress', 'Women', 999, 'w7.jpeg.jpg', '2022-11-15 14:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `password` int(50) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contact`, `address`, `pincode`, `password`, `timestamp`) VALUES
(1, 'nishi', 'nishi@gmail.com', 2147483647, 'indira nagri', 462022, 2022, '2022-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
