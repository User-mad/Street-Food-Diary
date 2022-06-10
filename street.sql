-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 06:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
(4, 380007, 'Paldi'),
(9, 380006, 'Ambavadi'),
(10, 363610, 'Anjali'),
(11, 380015, 'Prahlad Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(3) NOT NULL,
  `vendor_id` int(3) NOT NULL,
  `b_title` varchar(25) NOT NULL,
  `b_description` text NOT NULL,
  `b_image` text NOT NULL,
  `b_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `vendor_id`, `b_title`, `b_description`, `b_image`, `b_date`) VALUES
(1, 5, 'Curry Hummus', 'I made this lovely curry hummus because I wanted to put it on a wrap (and I DID put it on a wrap and you’re going to love that wrap – patience, grasshopper), but then it was so beautiful and tasted so yummy that I thought the curry hummus deserved its own post. I would absolutely consider this a summertime stocked-fridge staple since it makes an impromptu mid-morning snack or a spur-of-the-moment happy hour a total reality in your life. And luckily, it uses ingredients that many of us POYers probably have on hand at any given moment.', 'Curry-Hummus.jpg', '2022-04-13'),
(2, 5, 'New Tornado Fries', 'Tornado potatoes  also called twist potatoes or tornado fries, are a popular street food in South Korea, originally developed by Jeong Eun Suk of Agricultural Hoeori Inc. It is a deep fried spiral-cut whole potato on a skewer, brushed with various seasonings such as onion, cheese, or honey. Some varieties have spliced sausages in between them.', 'tornadofries.jpg', '2022-04-21');

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
(2, 'Pizza'),
(3, 'Burger'),
(4, 'Noodles'),
(5, 'Sandwich'),
(6, 'Juice'),
(7, 'Maggie');

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
(2, 'Cheese Pizza', 2, 'Pizza cheese encompasses several varieties and types of cheeses and dairy products that are designed and manufactured for use specifically on pizza. These include processed and modified cheese such as mozzarella-like processed cheeses and mozzarella variants.'),
(3, 'Veg Sandwich', 5, 'Vegetable sandwich is a type of vegetarian sandwich consisting of a vegetable filling between bread. There are no set requirements other than the use of vegetables, and sandwiches may be toasted or untoasted.'),
(4, 'Lemon Juice', 6, 'The juice extracted by crushing the pulp of lemon fruit. Lemon juice is most commonly used in a drink called lemonade which is made by using lemon juice'),
(5, 'Cheese Maggie', 7, 'Cheese Maggi is a delicious twist to your ultimate comfort food Masala Maggi where cheese and green chili are added to make it super cheesy'),
(6, 'Veg Maggie', 7, 'Veg Maggi is a delicious twist to your ultimate comfort food Masala Maggi where cheese and green chili are added to make it super healthy and full of vegetables.'),
(7, 'Pasta Maggie', 7, 'A combination of pasta and maggie with full of vegetables and super tasty and liked by most of the people.');

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
(10, 2, 2, 2, '20211115_123020.jpg', 150),
(11, 3, 7, 5, 'chesemagie.jpg', 90),
(12, 3, 7, 6, 'vegmagie.jpg', 50),
(13, 3, 7, 7, 'pastamagie.jpg', 120);

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

--
-- Dumping data for table `payment_service`
--

INSERT INTO `payment_service` (`service_id`, `stall_id`, `cash_service`, `scan_pay`) VALUES
(1, 2, 1, 0),
(2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stall_id` int(3) NOT NULL,
  `title` varchar(35) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `user_id`, `stall_id`, `title`, `description`, `image`, `date`) VALUES
(3, 1, 2, 'Best Ice-cream', 'It was an Amazing Experience.', '20211115_123020.jpg', '2022-04-20'),
(4, 1, 2, 'Nice Ice-creams', 'Must go and visit this Vendor.', '20211115_123020.jpg', '2022-04-21');

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
(3, 'Ice Cream'),
(4, 'Juice Center'),
(5, 'Tea Stall'),
(6, 'Maggie Center');

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
(3, 2, 'Curry-Hummus.jpg');

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
(2, 5, 'Prem Mevad', 'A rich, sweet, creamy frozen food made from variously flavored cream and milk products churned or stirred to a smooth consistency during the freezing process and often containing gelatin, eggs, fruits, nuts, etc.', '16:24:00', '22:30:00', '2022-03-22', 1, ' Parth Empire', 'Opp. Rambaug Police Station', 'Maninagar', 1, 3),
(3, 6, 'Food Street', 'Maggi is one easy-to-make comfort dish we all love. But Maggi always tastes better in the mountains, ain’t so? And when the aromatic noodles are coupled with piping-hot chai, that’s true emotion. The lofty heights, the slopes, the cold winds and the picturesque views make the simple combination of chai and Maggi come heartily alive. Here is a list of 7 hilltop stalls in India that serve absolutely delicious Maggi and tea.', '10:00:00', '22:30:00', '2022-04-21', 1, '506,100 Feet Rd', 'Chinar Bungalows', 'Prahlad Nagar, Ahmedabad', 11, 6);

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
  `uimage` text DEFAULT NULL,
  `uarea` int(5) NOT NULL,
  `ustatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`uid`, `uname`, `uemail`, `ucontact`, `upassword`, `uimage`, `uarea`, `ustatus`) VALUES
(1, 'Sahil', 'sm269189@gmail.com', '9876543210', '827ccb0eea8a706c4c34a16891f84e7b', 'NULL', 1, 1);

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
(5, 'Sahil Mansuri', 'sm269189@gmail.com', '9638190867', '827ccb0eea8a706c4c34a16891f84e7b', '', 3, 'active'),
(6, 'Rutvik', 'rutu1803@gmail.com', '8758205765', '827ccb0eea8a706c4c34a16891f84e7b', '', 11, 'active');

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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

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
  MODIFY `aid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_item_category`
--
ALTER TABLE `menu_item_category`
  MODIFY `item_category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_item_name`
--
ALTER TABLE `menu_item_name`
  MODIFY `item_name_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_registration`
--
ALTER TABLE `menu_registration`
  MODIFY `menu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_service`
--
ALTER TABLE `payment_service`
  MODIFY `service_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stall_category_table`
--
ALTER TABLE `stall_category_table`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stall_images`
--
ALTER TABLE `stall_images`
  MODIFY `image_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stall_registration`
--
ALTER TABLE `stall_registration`
  MODIFY `stall_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  MODIFY `vid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
