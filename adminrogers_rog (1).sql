-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2025 at 01:45 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminrogers_rog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sathishkumar@gmail.com', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `file`, `updated_at`) VALUES
(6, '6718f5e0b1175_67040e93cf49b_d_5.webp', '2024-10-23 13:10:56.726115'),
(7, 'image 2.png', '2024-10-16 18:13:55.143364');

-- --------------------------------------------------------

--
-- Table structure for table `blogsign`
--

CREATE TABLE `blogsign` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogsign`
--

INSERT INTO `blogsign` (`id`, `username`, `password`, `time`) VALUES
(1, 'admin', '10qpalzm!)QPALZM!@#$%', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_banners`
--

CREATE TABLE `bottom_banners` (
  `id` int NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bottom_banners`
--

INSERT INTO `bottom_banners` (`id`, `file`, `updated_at`) VALUES
(8, 'd_3.webp', '2024-10-07 17:01:19.351423'),
(9, '670414223affc_down2.webp', '2024-10-07 17:02:26.242991');

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE `bundle` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_general_ci,
  `short_description` text COLLATE utf8mb4_general_ci,
  `price` text COLLATE utf8mb4_general_ci,
  `file` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`id`, `title`, `short_description`, `price`, `file`, `updated_at`) VALUES
(1, 'Google Pixel 9 Pro', 'AI-Powered Performance Powered by Google’s latest Tensor chip, the Pixel 9 offers smooth, efficient multitasking security.', '15', 'product_131580_1728507426.png', '2024-09-28 00:01:13.973916'),
(2, 'Google Pixel 9 Pro', 'AI-Powered Performance Powered by Google’s latest Tensor chip, the Pixel 9 offers smooth, efficient multitasking security.', '20', '1.png', '2024-09-28 00:02:34.155493'),
(7, 'Google Pixel 9 Pro', 'AI-Powered Performance Powered by Google’s latest Tensor chip, the Pixel 9 offers smooth, efficient multitasking security.', '19', 'product_131580_1728507426.png', '2024-09-28 00:10:34.020494');

-- --------------------------------------------------------

--
-- Table structure for table `hot_byod`
--

CREATE TABLE `hot_byod` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_general_ci,
  `short_description` text COLLATE utf8mb4_general_ci,
  `price` text COLLATE utf8mb4_general_ci,
  `file` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_byod`
--

INSERT INTO `hot_byod` (`id`, `title`, `short_description`, `price`, `file`, `updated_at`) VALUES
(1, 'Get 60 GB Infinite data across Canada', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '35', 'st1.png', '2024-10-23 16:13:55.485965'),
(2, 'Get 100GB data across Canada & US', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '45', 'st2.png', '2024-10-23 16:14:06.815917'),
(3, 'Get 150 GB data across Canada, US', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '55', 'st3.png', '2024-10-23 16:14:17.292758');

-- --------------------------------------------------------

--
-- Table structure for table `limited_offers`
--

CREATE TABLE `limited_offers` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `price` text COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `limited_offers`
--

INSERT INTO `limited_offers` (`id`, `title`, `short_description`, `price`, `file`, `updated_at`) VALUES
(4, 'Apple iPhone 16 Pro', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '32', '1.png', '2024-10-16 15:29:00.802790'),
(5, 'Apple iPhone 14 Plus', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '10', '21.png', '2024-10-16 15:29:39.635274'),
(6, 'Samsung Galaxy S24+', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '11.66', '31.png', '2024-10-16 15:30:21.049656');

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

CREATE TABLE `line` (
  `id` int NOT NULL,
  `quote` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `line`
--

INSERT INTO `line` (`id`, `quote`) VALUES
(2, 'Enjoy exclusive discounts on the latest smartphones and wireless plans with the Rogers Preferred Program.');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int NOT NULL,
  `logo` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_NO` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Facebook_link` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Twitter_link` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Instagram_link` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Youtube_link` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `Address`, `Email`, `Phone_NO`, `Facebook_link`, `Twitter_link`, `Instagram_link`, `Youtube_link`, `time`) VALUES
(1, 'EVENIZER', 'Jl. Sunset Road No.815, Kuta', 'evenizer@domain.com', ' (+62) 81 2345 1234', '', '', '', '', '2024-03-20 16:30:09.168892'),
(2, 'TECHIONIK', '15 Martin Rd, Dagenham RM8 2XH, UK', 'admin@techionik.com', '+44 7441 396181', '', '', '', '', '2024-03-21 16:23:03.461679');

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

CREATE TABLE `samsung` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_general_ci,
  `short_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `Price` text COLLATE utf8mb4_general_ci,
  `file` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`id`, `title`, `short_description`, `Price`, `file`, `updated_at`) VALUES
(2, 'Get Samsung S24 128GB', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '20', '66faf4479248b_sam_1.jpg', '2024-10-23 16:12:20.004694'),
(4, 'Get Google Pixel 8A 128GB', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '5', 'sam_2.jpg', '2024-10-17 16:27:44.511205'),
(5, 'Get iPhone 14 Plus 128GB', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '10', 'sam_3.png', '2024-10-17 16:27:50.040823'),
(6, 'Get Samsung S23  128GB', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '10', '67192235ed20c_sam_4.jpg', '2024-10-23 16:20:05.971978'),
(7, 'Get Google Pixel 9 128GB', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '30', 'sam_5.jpg', '2024-10-23 16:20:19.560661'),
(8, 'Get Google Pixel 8 128GB', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '0', 'sam_6.jpg', '2024-10-17 16:28:07.775261');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogsign`
--
ALTER TABLE `blogsign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_banners`
--
ALTER TABLE `bottom_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle`
--
ALTER TABLE `bundle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_byod`
--
ALTER TABLE `hot_byod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limited_offers`
--
ALTER TABLE `limited_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogsign`
--
ALTER TABLE `blogsign`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bottom_banners`
--
ALTER TABLE `bottom_banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bundle`
--
ALTER TABLE `bundle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hot_byod`
--
ALTER TABLE `hot_byod`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `limited_offers`
--
ALTER TABLE `limited_offers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `line`
--
ALTER TABLE `line`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
