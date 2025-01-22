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
-- Database: `adminrogers_connect`
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
(11, '6769a48eb90f5_BOXING.jpg', '2024-12-23 17:57:34.758491'),
(23, 'BOXING (1).jpg', '2024-12-23 18:04:30.356459');

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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `appointment_id` text COLLATE utf8mb4_general_ci NOT NULL,
  `service` text COLLATE utf8mb4_general_ci NOT NULL,
  `location` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` text COLLATE utf8mb4_general_ci NOT NULL,
  `time` text COLLATE utf8mb4_general_ci NOT NULL,
  `Name` text COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` text COLLATE utf8mb4_general_ci NOT NULL,
  `customer_came` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `appointment_id`, `service`, `location`, `date`, `time`, `Name`, `Email`, `Phone`, `customer_came`) VALUES
(2, '2', 'Upgrade Existing Device', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2024-10-22', '22:13', 'test', 'test@gmail.com', '03414399', ''),
(39, '1', 'Preferred Service', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2024-12-24', '18:58', 'test test', 'Sathishkumar.subburam@wdna.ca', '6476389256', NULL),
(40, '1', 'Preferred Service', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2024-12-26', '05:38', 'sathishkumar subburam', 'sathishkumar.subburam@wdna.ca', '6476389256', NULL),
(41, '28', 'Preferred Service', 'airline', '2024-12-11', '09:56', 'test', 'test@gmail.com', '823643746374637', NULL),
(42, '28', 'Preferred Service', 'airline', '2024-12-28', '00:00', 'testing81', 'test@gmail.com', '8237643827463827', NULL),
(43, '28', 'Preferred Service', 'airline', '2024-12-31', '11:03', 'test91', 'test@gmail.com', '8923764438372', NULL),
(44, '28', 'Preferred Service', 'airline', '2025-01-01', '04:13', 'test92', 'test@gmail.com', '372367676', NULL),
(45, '28', 'Preferred Service', 'airline', '2024-12-26', '14:24', 'testing999', 'test@gmail.com', '343247632874', NULL),
(46, '28', 'Preferred Service', 'airline', '2024-12-25', '14:27', 'test11111', 'fsdfadf@gmail.com', '07441396181', NULL),
(47, '28', 'Preferred Service', 'airline', '2024-12-25', '14:35', 'test finance', 'fsdfadf@gmail.com', '07441396181', NULL),
(48, '0', 'Preferred Service', '', '2025-01-03', '16:01', 'Test', '', '', NULL),
(49, '0', 'Preferred Service', '', '2025-01-02', '12:11', '', '', '', NULL),
(50, '1', 'Preferred Service', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2025-01-03', '22:00', 'test ', 'test@test.com', '6476389256', NULL),
(51, '0', 'Preferred Service', '', '2025-01-06', '', '', '', '', NULL),
(52, '0', 'Preferred Service', 'airline', '2025-01-06', '13:31', 'test test', 'fsdfadf@gmail.com', '07441396181', NULL),
(53, '28', 'Preferred Service', 'airline', '2025-01-06', '12:38', 'test ', 'fsdfadf@gmail.com', '07441396181', NULL),
(54, '1', 'Preferred Service', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2025-01-06', '', 'dsadsfs', 'fdsfdsfddf@gmail.com', '6666666666', NULL),
(55, '0', 'Preferred Service', '', '2025-01-06', '', '', '', '', NULL),
(56, '1', 'Preferred Service', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2025-01-07', '', 'test', 'test@gm.com', '4378767215', NULL),
(57, '1', 'Preferred Service', '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4', '2025-01-07', '', 'test', 'test@gm.com', '4378767215', NULL),
(58, '0', 'Preferred Service', '', '2025-01-07', '', '', '', '', NULL),
(59, '19', 'Preferred Service', '55 Ontario Street, Unit K003, Milton, ON L9T 2M3', '2025-01-15', '', '', '', '', NULL),
(60, '8', 'Preferred Service', '84 Lynden Road, Unit K03, Brantford, ON N3R 6B8', '2025-01-15', '', '', '', '', NULL);

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
(8, '677c02788c283_43.jpg', '2025-01-06 16:19:04.574614'),
(9, '677c028037760_44.jpg', '2025-01-06 16:19:12.227792');

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
(1, '3-IN-1 Power Bundle ', '3-IN-1 Power Bundle - TUFF8 Case, Screen Protector & 20W Charger', '39.99', 'addon_1532_1732294608 (1).png', '2024-09-28 00:01:13.973916'),
(2, 'Device Protection ', 'Get 30% off device protection\r\n(PRICE DEPENDS ON PHONE)', '8', 'images (1).png', '2024-09-28 00:02:34.155493'),
(7, 'Rogers Mastercard ', 'Earn 2% unlimited cash back on all eligible non-U.S. dollar purchases if you have 1 qualifying service with Rogers', '0', 'details_Screenshot 2024-12-13 at 10.14.56 AM.png', '2024-09-28 00:10:34.020494');

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
(1, 'Get 60 GB Infinite data across Canada', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '35', 'st1.png', '2024-10-23 16:07:26.197887'),
(2, 'Get 100GB data across Canada & US', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '45', 'st2.png', '2024-10-23 16:07:55.194679'),
(3, 'Get 150 GB Canada, US and Mexico', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '55', 'st3.png', '2024-12-20 17:12:16.723972');

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
(4, 'Samsung Bundle ', 'Get the s24 plus the Tab A9 Plus ', '0', 'image_15492_17230687313478.png', '2024-12-23 18:58:37.481247'),
(5, 'Apple Bundle ', 'Get the iPhone 12 plus iPad 10th gen ', '14.13', 'Holiday-iPhone-12.png', '2024-12-23 19:09:08.230994');

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
(2, 'Get Samsung S24 ', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '0', '66faf4479248b_sam_1.jpg', '2024-12-20 17:16:22.511278'),
(4, 'Get Google Pixel 9 ', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '0', '6765a803874a7_product_127102_1724790096.png', '2024-12-20 17:23:15.554577'),
(5, 'Get iPhone 12', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '5', 'sam_3.png', '2024-12-20 17:16:39.114197'),
(6, 'Get Samsung S24 FE', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '0', '6765a9ab66f2c_product_131547_1728424806.png', '2024-12-20 17:30:19.422149'),
(7, 'Get the Galaxy Tab a9 Plus ', 'When you get any plan ', '0', '6765a89704d71_taba9.jpg', '2024-12-20 17:25:43.020443'),
(8, 'iPhone 16 ', 'when you activate an additional line and bring your own device, after discounts for 24 months.', '17', '6765a96a73d19_product_129891_1726275572.png', '2024-12-20 17:29:14.474843');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int NOT NULL,
  `vendor_id` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_id`, `username`, `password`) VALUES
(1, '1', 'test@gmail.com', '12345'),
(2, '2', 'test1@gmail.com', '12345'),
(3, '3', 'test2@gmail.com', '12345'),
(4, '4', 'test3@gmail.com', '12345'),
(5, '5', 'test4@gmail.com', '12345'),
(6, '6', 'test5@gmail.com', '12345'),
(7, '7', 'test6@gmail.com', '12345'),
(8, '8', 'test7@gmail.com', '12345'),
(9, '9', 'test8@gmail.com', '12345'),
(10, '10', 'test9@gmail.com', '12345'),
(11, '11', 'test10@gmail.com', '12345'),
(12, '12', 'test11@gmail.com', '12345'),
(13, '13', 'test12@gmail.com', '12345'),
(14, '14', 'test13@gmail.com', '12345'),
(15, '15', 'test14@gmail.com', '12345'),
(16, '16', 'test15@gmail.com', '12345'),
(17, '17', 'test16@gmail.com', '12345'),
(18, '18', 'test17@gmail.com', '12345'),
(19, '19', 'test18@gmail.com', '12345'),
(20, '20', 'test19@gmail.com', '12345'),
(21, '21', 'test20@gmail.com', '12345'),
(22, '22', 'test21@gmail.com', '12345'),
(23, '23', 'test22@gmail.com', '12345'),
(24, '24', 'test23@gmail.com', '12345'),
(25, '25', 'test24@gmail.com', '12345'),
(26, '26', 'test25@gmail.com', '12345'),
(27, '27', 'test26@gmail.com', '12345');

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
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
-- Indexes for table `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `bottom_banners`
--
ALTER TABLE `bottom_banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bundle`
--
ALTER TABLE `bundle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hot_byod`
--
ALTER TABLE `hot_byod`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `limited_offers`
--
ALTER TABLE `limited_offers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
