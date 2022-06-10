-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 06:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `street`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(3) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `a_password` varchar(25) NOT NULL,
  `a_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_name`, `a_email`, `a_password`, `a_phone`) VALUES
(1, 'sahil', 'sm269189@gmail.com', '12345', '9087654321');

-- --------------------------------------------------------

--
-- Table structure for table `area_table`
--

CREATE TABLE `area_table` (
  `aid` int(25) NOT NULL,
  `a_zipcode` int(25) NOT NULL,
  `aname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_table`
--

INSERT INTO `area_table` (`aid`, `a_zipcode`, `aname`) VALUES
(1, 380008, 'Maninagar'),
(2, 380052, 'Memnagar'),
(3, 380009, 'Navrangpura'),
(4, 380007, 'Paldi');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item_category`
--

CREATE TABLE `menu_item_category` (
  `item_category_id` int(3) NOT NULL,
  `item_category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_item_category`
--

INSERT INTO `menu_item_category` (`item_category_id`, `item_category_name`) VALUES
(1, 'abcd'),
(2, 'Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item_name`
--

CREATE TABLE `menu_item_name` (
  `item_name_id` int(3) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_category` int(3) NOT NULL,
  `item_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_item_name`
--

INSERT INTO `menu_item_name` (`item_name_id`, `item_name`, `item_category`, `item_description`) VALUES
(2, 'Cheese Pizza', 2, 'Pizza cheese encompasses several varieties and types of cheeses and dairy products that are designed and manufactured for use specifically on pizza. These include processed and modified cheese such as mozzarella-like processed cheeses and mozzarella variants.');

-- --------------------------------------------------------

--
-- Table structure for table `menu_registration`
--

CREATE TABLE `menu_registration` (
  `menu_id` int(3) NOT NULL,
  `stall_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `name_id` int(3) NOT NULL,
  `item_image` text NOT NULL,
  `item_price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_registration`
--

INSERT INTO `menu_registration` (`menu_id`, `stall_id`, `category_id`, `name_id`, `item_image`, `item_price`) VALUES
(10, 2, 2, 2, '20211115_123020.jpg', 150);

-- --------------------------------------------------------

--
-- Table structure for table `payment_service`
--

CREATE TABLE `payment_service` (
  `service_id` int(3) NOT NULL,
  `stall_id` int(3) NOT NULL,
  `cash_service` int(1) NOT NULL,
  `scan_pay` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stall_category_table`
--

CREATE TABLE `stall_category_table` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stall_category_table`
--

INSERT INTO `stall_category_table` (`category_id`, `category_name`) VALUES
(2, 'Fast Food'),
(3, 'Ice Cream');

-- --------------------------------------------------------

--
-- Table structure for table `stall_images`
--

CREATE TABLE `stall_images` (
  `image_id` int(4) NOT NULL,
  `stall_id` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stall_images`
--

INSERT INTO `stall_images` (`image_id`, `stall_id`, `image`) VALUES
(2, 2, '20211115_123020.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stall_registration`
--

CREATE TABLE `stall_registration` (
  `stall_id` int(3) NOT NULL,
  `vendor_id` int(3) NOT NULL,
  `stall_name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `registration_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `address_line_3` text NOT NULL,
  `area_id` int(3) NOT NULL,
  `stall_category_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stall_registration`
--

INSERT INTO `stall_registration` (`stall_id`, `vendor_id`, `stall_name`, `description`, `opening_time`, `closing_time`, `registration_date`, `status`, `address_line_1`, `address_line_2`, `address_line_3`, `area_id`, `stall_category_id`) VALUES
(1, 0, 'Prem@Mevad', 'A rich, sweet, creamy frozen food made from variously flavored cream and milk products churned or stirred to a smooth consistency during the freezing process and often containing gelatin, eggs, fruits, nuts, etc.', '17:00:00', '23:00:00', '2022-03-22', 1, 'Parth Empire', 'Opp. Rambaug Police Station', 'Maninagar', 1, 3),
(2, 5, 'Prem Mevad', 'A rich, sweet, creamy frozen food made from variously flavored cream and milk products churned or stirred to a smooth consistency during the freezing process and often containing gelatin, eggs, fruits, nuts, etc.', '16:24:00', '22:30:00', '2022-03-22', 1, ' Parth Empire', 'Opp. Rambaug Police Station', 'Maninagar', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `uid` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `uemail` varchar(25) NOT NULL,
  `ucontact` varchar(25) NOT NULL,
  `upassword` varchar(32) NOT NULL,
  `uimage` text NOT NULL,
  `uarea` int(11) NOT NULL,
  `ustatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_registration`
--

CREATE TABLE `vendor_registration` (
  `vid` int(5) NOT NULL,
  `vname` varchar(25) NOT NULL,
  `vemail` varchar(25) NOT NULL,
  `vcontact` varchar(10) NOT NULL,
  `vpassword` varchar(32) NOT NULL,
  `vimage` text NOT NULL,
  `varea` int(5) NOT NULL,
  `vstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_registration`
--

INSERT INTO `vendor_registration` (`vid`, `vname`, `vemail`, `vcontact`, `vpassword`, `vimage`, `varea`, `vstatus`) VALUES
(5, 'Sahil Mansuri', 'sm269189@gmail.com', '9638190867', '827ccb0eea8a706c4c34a16891f84e7b', '', 3, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `area_table`
--
ALTER TABLE `area_table`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `menu_item_category`
--
ALTER TABLE `menu_item_category`
  ADD PRIMARY KEY (`item_category_id`);

--
-- Indexes for table `menu_item_name`
--
ALTER TABLE `menu_item_name`
  ADD PRIMARY KEY (`item_name_id`);

--
-- Indexes for table `menu_registration`
--
ALTER TABLE `menu_registration`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `payment_service`
--
ALTER TABLE `payment_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `stall_category_table`
--
ALTER TABLE `stall_category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `stall_images`
--
ALTER TABLE `stall_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `stall_registration`
--
ALTER TABLE `stall_registration`
  ADD PRIMARY KEY (`stall_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area_table`
--
ALTER TABLE `area_table`
  MODIFY `aid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_item_category`
--
ALTER TABLE `menu_item_category`
  MODIFY `item_category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_item_name`
--
ALTER TABLE `menu_item_name`
  MODIFY `item_name_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_registration`
--
ALTER TABLE `menu_registration`
  MODIFY `menu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_service`
--
ALTER TABLE `payment_service`
  MODIFY `service_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stall_category_table`
--
ALTER TABLE `stall_category_table`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stall_images`
--
ALTER TABLE `stall_images`
  MODIFY `image_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stall_registration`
--
ALTER TABLE `stall_registration`
  MODIFY `stall_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  MODIFY `vid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
