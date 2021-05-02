-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 07:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `adm_name` varchar(50) NOT NULL,
  `adm_pass` varchar(50) NOT NULL,
  `adm_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adm_name`, `adm_pass`, `adm_email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Nike'),
(4, 'Adidas'),
(5, 'Asley'),
(6, 'Kartell'),
(7, 'LG'),
(8, 'Whirlpool');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_id` varchar(70) NOT NULL,
  `qty` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `ip_address`, `user_id`, `qty`) VALUES
(1, 2, '::1', '3', 1),
(2, 3, '::1', '2', 1),
(3, 2, '::1', '2', 1),
(4, 3, '::1', '3', 1),
(5, 4, '::1', '3', 1),
(6, 8, '::1', '3', 1),
(7, 14, '::1', '3', 1),
(8, 15, '::1', '3', 1),
(9, 16, '192.168.56.1', '3', 1),
(10, 4, '192.168.56.1', '2', 1),
(11, 17, '192.168.56.1', '2', 1),
(12, 1, '192.168.56.1', '5', 1),
(13, 13, '192.168.56.1', '5', 1),
(14, 3, '192.168.56.1', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Furnitures'),
(3, 'Clothes'),
(4, 'Home Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(255) NOT NULL,
  `p_category` int(255) NOT NULL,
  `p_brand` int(255) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_category`, `p_brand`, `p_name`, `p_price`, `p_image`) VALUES
(1, 2, 5, 'Bedroom Sheet', 3499, 'bedroom-furniture-250x250.jpg'),
(2, 2, 6, 'Asain - Furniture', 4999, 'asian-furniture-250x250.jpg'),
(3, 2, 6, 'Single Bed', 7499, 'f4.jpg'),
(4, 2, 5, 'Table & Chairs', 1999, 'amer-furniture.jpg'),
(5, 3, 4, 'Men\'s Black Shirt', 399, 'dress_shirt_PNG.png'),
(6, 3, 3, 'Ladies Casual Dress ', 899, '7475-ladies-casual-dresses-summer-two-colors-pleated.jpg'),
(7, 3, 3, 'Black Coat ', 2599, 'pm13.jpg'),
(8, 3, 4, 'Black Jeans', 2599, 'pt5.jpg'),
(9, 1, 1, 'Headphone', 59999, 'product051.png'),
(10, 1, 1, 'Iphone 6', 85000, 'http___pluspng.com_img-png_iphone-6s-png-iphone-6s-gold-64gb-1000.png'),
(11, 1, 1, 'Macbook Air ', 1500000, 'product03.png'),
(12, 1, 2, 'Samsung Ipad', 10000, 'ipad_sam.jpg'),
(13, 1, 2, 'Samsung S21', 76999, 'sams21.jpg'),
(14, 4, 8, 'Refrigerator', 15999, 'Home Appliancesll.jpg'),
(15, 4, 7, 'Iron', 4999, 'iron2.jpg'),
(16, 4, 7, 'Mixer Grinder', 3999, 'singer-mixer-grinder-mg-46-medium_4bfa018096c25dec7ba0af40662856ef.jpg'),
(17, 4, 8, 'Washing Machine', 7999, 'washing 012.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'Priyansh', '456', 'kn@Nk'),
(2, 'Ayan', '456', 'kn@Nk'),
(3, 'Riya', 'querty', 'asd@dffd'),
(4, 'Prakhar', 'gfg', 'asae@JNj'),
(5, 'Rishabh', 'dfg', 'djfn@hn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
