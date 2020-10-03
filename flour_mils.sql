-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 10:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flour_mils`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `Cart_id` int(5) NOT NULL,
  `Order_id` int(10) NOT NULL,
  `Product_id` int(5) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `Imagepath` varchar(500) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Total_price` bigint(50) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `temp` varchar(40) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`Cart_id`, `Order_id`, `Product_id`, `productname`, `brand`, `description`, `Imagepath`, `price`, `quantity`, `Total_price`, `email`, `temp`, `date_time`) VALUES
(28, 1014, 864, 'Slogan T-shirts', '17', 'fools-around-green-t-shirt', 'fools-around-green-t-shirt.jpg', 499, 1, 499, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(29, 1015, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(24, 1012, 776, 'Formal shirts', '13', 'peter-england-white-formal-shirt', 'peter-england-white-formal-shirt(2).jpg', 1799, 1, 1799, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(25, 1013, 777, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(26, 1013, 779, 'Formal shirts', '13', 'peter-england-puprle-formal-shirt', 'peter-england-puprle-formal-shirt.jpg', 1000, 1, 1000, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(27, 1013, 782, 'Formal shirts', '13', 'peter-england-light-pink-formal-shirt', 'peter-england-light-pink-formal-shirt.jpg', 999, 2, 1998, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(30, 1016, 792, 'Formal shirts', '13', 'peter-england-white-formal-shirt', 'peter-england-white-formal-shirt(2).jpg', 1799, 1, 1799, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(31, 1016, 877, 'Western Wall', '28', 'classic-braided-neck-maxi-dress', 'classic-braided-neck-maxi-dress.jpg', 1100, 1, 1100, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(32, 1016, 960, 'Indo-Ethnic Kurtas', '28', 'elegant-floral-print-long-chiffon-top', 'elegant-floral-print-long-chiffon-top.jpg', 795, 1, 795, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(33, 1016, 969, 'Tshirts-Shirts-Tunics-maxi-gow', '29', 'harpa-off-white-shirt', 'harpa-off-white-shirt.jpg', 999, 1, 999, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(34, 1016, 938, 'Saris', '27', 'shonaya-beige-brown-designer-saree', 'shonaya-beige-brown-designer-saree.jpg', 2450, 1, 2450, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(35, 1017, 792, 'Formal shirts', '13', 'peter-england-white-formal-shirt', 'peter-england-white-formal-shirt(2).jpg', 1799, 1, 1799, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(36, 1018, 841, 'Round neck T-shirts', '20', 'pepe-jeans-grey-melange-round-neck-tshirt', 'pepe-jeans-grey-melange-round-neck-tshirt.jpg', 699, 1, 699, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(37, 1018, 840, 'Round neck T-shirts', '17', 'nologo-cotton-green-round-neck-t-shirt', 'nologo-cotton-green-round-neck-t-shirt(1).jpg', 1399, 1, 1399, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(38, 1019, 852, 'V-neck T-shirts', '17', '1st-attitude-royal-blue-v-neck-t-shirt', '1st-attitude-royal-blue-v-neck-t-shirt.jpg', 499, 1, 499, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(39, 1019, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(40, 1019, 840, 'Round neck T-shirts', '17', 'nologo-cotton-green-round-neck-t-shirt', 'nologo-cotton-green-round-neck-t-shirt(1).jpg', 1399, 1, 1399, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(41, 1020, 820, 'Full sleeve Tees', '17', 'no-logo-black-full-sleeves-henley-t-shirt', 'no-logo-black-full-sleeves-henley-t-shirt.jpg', 699, 1, 699, 'abeer@gmail.com', '', '2018-09-25 08:03:41'),
(42, 1021, 879, 'Western Wall', '23', 'red-tulle-fishtail-sleeveless-long-party-dress', 'red-tulle-fishtail-sleeveless-long-party-dress.jpg', 1025, 1, 1025, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(43, 1022, 854, 'V-neck T-shirts', '20', 'rigo-black-v-neck-t-shirt', 'rigo-black-v-neck-t-shirt_002.jpg', 599, 1, 599, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(44, 1023, 852, 'V-neck T-shirts', '17', '1st-attitude-royal-blue-v-neck-t-shirt', '1st-attitude-royal-blue-v-neck-t-shirt.jpg', 499, 2, 998, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(45, 1023, 840, 'Round neck T-shirts', '17', 'nologo-cotton-green-round-neck-t-shirt', 'nologo-cotton-green-round-neck-t-shirt(1).jpg', 1399, 1, 1399, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(46, 1023, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(47, 1024, 794, 'Formal shirts', '13', 'peter-england-sky-blue-formal-shirt', 'peter-england-sky-blue-formal-shirt(1).jpg', 1099, 1, 1099, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(48, 1024, 792, 'Formal shirts', '13', 'peter-england-white-formal-shirt', 'peter-england-white-formal-shirt(2).jpg', 1799, 2, 3598, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(49, 1025, 795, 'Formal shirts', '13', 'peter-england-puprle-formal-shirt', 'peter-england-puprle-formal-shirt.jpg', 1000, 1, 1000, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(50, 1027, 794, 'Formal shirts', '13', 'peter-england-sky-blue-formal-shirt', 'peter-england-sky-blue-formal-shirt(1).jpg', 1099, 1, 1099, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(53, 1029, 794, 'Formal shirts', '13', 'peter-england-sky-blue-formal-shirt', 'peter-england-sky-blue-formal-shirt(1).jpg', 1099, 2, 2198, 'aftab@gmail.com', '', '2018-09-25 08:03:41'),
(52, 1029, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'aftab@gmail.com', '', '2018-09-25 08:03:41'),
(54, 1030, 794, 'Formal shirts', '13', 'peter-england-sky-blue-formal-shirt', 'peter-england-sky-blue-formal-shirt(1).jpg', 1099, 1, 1099, 'arsalan@gmail.com', '', '2018-09-25 08:03:41'),
(55, 1030, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 2, 2898, 'arsalan@gmail.com', '', '2018-09-25 08:03:41'),
(56, 1030, 798, 'Formal shirts', '13', 'peter-england-light-pink-formal-shirt', 'peter-england-light-pink-formal-shirt.jpg', 999, 3, 2997, 'arsalan@gmail.com', '', '2018-09-25 08:03:41'),
(57, 1031, 795, 'Formal shirts', '13', 'peter-england-puprle-formal-shirt', 'peter-england-puprle-formal-shirt.jpg', 1000, 1, 1000, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(58, 1031, 798, 'Formal shirts', '13', 'peter-england-light-pink-formal-shirt', 'peter-england-light-pink-formal-shirt.jpg', 999, 1, 999, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(77, 1047, 794, 'Formal shirts', '13', 'peter-england-sky-blue-formal-shirt', 'peter-england-sky-blue-formal-shirt(1).jpg', 1099, 2, 2198, 'aftab@gmail.com', '', '2018-09-25 08:03:41'),
(76, 1046, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 2, 2898, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(75, 1046, 794, 'Formal shirts', '13', 'peter-england-sky-blue-formal-shirt', 'peter-england-sky-blue-formal-shirt(1).jpg', 1099, 1, 1099, 'syed.sanam007@gmail.com', '', '2018-09-25 08:03:41'),
(78, 1048, 798, 'Formal shirts', '13', 'peter-england-light-pink-formal-shirt', 'peter-england-light-pink-formal-shirt.jpg', 999, 1, 999, 'aftab@gmail.com', '', '2018-09-26 14:44:06'),
(79, 1048, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 5, 7245, 'aftab@gmail.com', '', '2018-09-26 14:44:06'),
(80, 1049, 793, 'Formal shirts', '13', 'peter-england-royal-blue-formal-shirt', 'peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'aftab@gmail.com', '', '2018-09-27 10:14:01'),
(81, 1050, 1180, 'Nayab', '34', 'Nayab Flour Atta 10kg ', 'flour10kg.jpg', 800, 1, 800, 'aftab@gmail.com', '', '2018-09-27 15:24:20'),
(82, 1051, 1181, 'Super Fine', '34', ' Super Fine 10kg', 'superfineatta.jpg', 850, 1, 850, 'aftab@gmail.com', '', '2018-09-27 15:34:13'),
(83, 1054, 1182, 'FIne', '34', ' Fine atta 10kg', 'fineatta.jpg', 900, 1, 900, 'aftab@gmail.com', '', '2018-10-04 16:31:39'),
(84, 1055, 1181, 'Super Fine', '34', ' Super Fine 10kg', 'superfineatta.jpg', 850, 1, 850, 'aftab@gmail.com', '', '2018-10-14 07:54:34'),
(85, 1055, 1182, 'FIne', '34', ' Fine atta 10kg', 'fineatta.jpg', 900, 1, 900, 'aftab@gmail.com', '', '2018-10-14 07:54:34'),
(86, 1056, 1180, 'Nayab', '34', 'Nayab Flour Atta 10kg ', 'flour10kg.jpg', 800, 5, 4000, 'aftab@gmail.com', '', '2018-10-14 19:17:16'),
(87, 1056, 1182, 'FIne', '34', ' Fine atta 10kg', 'fineatta.jpg', 900, 6, 5400, 'aftab@gmail.com', '', '2018-10-14 19:17:16'),
(88, 1057, 1181, 'Super Fine', '34', ' Super Fine 10kg', 'superfineatta.jpg', 850, 1, 850, 'admin@gmail.com', '', '2018-10-20 06:14:08'),
(89, 1057, 1182, 'FIne', '34', ' Fine atta 10kg', 'fineatta.jpg', 900, 1, 900, 'admin@gmail.com', '', '2018-10-20 06:14:08'),
(90, 1058, 1182, 'FIne', '34', ' Fine atta 10kg', 'fineatta.jpg', 900, 1, 900, 'admin@gmail.com', '', '2018-10-21 06:52:09'),
(91, 1058, 1181, 'Super Fine', '34', ' Super Fine 10kg', 'superfineatta.jpg', 850, 2, 1700, 'admin@gmail.com', '', '2018-10-21 06:52:09'),
(92, 1059, 1182, 'FIne', '34', ' Fine atta 10kg', 'fineatta.jpg', 900, 1, 900, 'rashid@gmail.com', '', '2018-10-21 17:15:10'),
(93, 1059, 1183, 'test', '34', ' dfghjkl', 'reset password.PNG', 100, 2, 200, 'rashid@gmail.com', '', '2018-10-21 17:15:10'),
(94, 1060, 1181, 'Super Fine', '34', ' Super Fine 10kg', 'superfineatta.jpg', 850, 1, 850, 'aftab@gmail.com', '', '2018-10-24 15:52:02'),
(95, 1061, 1181, 'Super Fine', '34', ' Super Fine 10kg', 'superfineatta.jpg', 850, 1, 850, 'aftab@gmail.com', '', '2018-10-25 18:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactus_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contact_no` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactus_id`, `name`, `email`, `subject`, `message`, `Date`, `contact_no`) VALUES
(7, 'xyz', 'xyz@gmail.com', 'GOOD', 'NICE', '2018-10-14 08:05:32', '123456789'),
(8, 'Hammad', 'hammad@gmail.com', 'FeedBack', 'This programming is nice', '2018-10-21 07:01:49', '03445058196');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `mobile_no`, `email_id`, `address`, `password`, `role`, `status`, `picture`, `Date`) VALUES
(1, 'Aftab', 'Khan', '123456789', 'aftab@gmail.com', 'Pakistan', '123', 'Owner', 1, 'umair.jpg', '2018-10-27 14:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(258) NOT NULL,
  `status` varchar(20) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `status`, `Date`) VALUES
(1, 'Test Title', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.', 'Activate', '2018-10-28 09:42:19'),
(2, 'Test Title2', ' Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil \r\n							impedit quo minus id quod maxime placeat facere possimus, omnis voluptas \r\n							assumenda est.', 'Activate', '2018-10-25 18:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(10) NOT NULL,
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip_code` int(10) NOT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `ShippingAddress` varchar(40) DEFAULT NULL,
  `ShippingMethod` varchar(20) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL,
  `TypeOfCreditcard` varchar(25) DEFAULT '                  -',
  `NameOnCC` varchar(30) DEFAULT '                   -',
  `CCNo` bigint(50) DEFAULT NULL,
  `CVV` int(5) DEFAULT NULL,
  `ExpirationDate` varchar(20) DEFAULT NULL,
  `Order_Ammount` bigint(50) NOT NULL,
  `temp` varchar(50) DEFAULT NULL,
  `OrderDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Email_id` varchar(40) DEFAULT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `FirstName`, `LastName`, `Email`, `Country`, `State`, `City`, `Zip_code`, `contactNo`, `ShippingAddress`, `ShippingMethod`, `PaymentMethod`, `TypeOfCreditcard`, `NameOnCC`, `CCNo`, `CVV`, `ExpirationDate`, `Order_Ammount`, `temp`, `OrderDateTime`, `Email_id`, `order_status`) VALUES
(1051, 'Aftab', 'khan', 'aftab@gmail.com', 'Pakistan', 'Abc', 'Islamabad', 123, '03004785963', 'abc', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 850, '', '2018-09-27 15:34:13', 'aftab@gmail.com', 'Pending'),
(1054, 'Aftab', 'khan', 'aftab@gmail.com', 'Pakistan', 'Abc', 'Islamabad', 12, '03004785963', 'abc', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 900, '', '2018-10-28 09:38:22', 'aftab@gmail.com', 'Approved'),
(1055, 'Aftab', 'khan', 'aftab@gmail.com', 'Pakistan', 'abc', 'Islamabad', 12, '03004785963', 'Abc', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 1750, '', '2018-10-27 08:54:15', 'aftab@gmail.com', 'Approved'),
(1056, 'Aftab', 'khan', 'aftab@gmail.com', 'India', 'Gujarat', 'Vadodara', 12, '3005887761', 'pak', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 9400, '', '2018-10-26 16:54:00', 'aftab@gmail.com', 'Approved'),
(1057, 'admin', 'admin', 'admin@gmail.com', 'India', 'Islamabad', 'Islamabad', 12, '3005887761', 'pak', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 1750, '', '2018-10-26 16:13:58', 'admin@gmail.com', 'Approved'),
(1058, 'admin', 'admin', 'admin@gmail.com', 'Pakistan', 'ABC', 'Islamabad', 12, '123456789', 'Gulraz street 3', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 2600, '', '2018-10-25 20:30:47', 'admin@gmail.com', 'Approved'),
(1059, 'Rashid', 'khan', 'rashid@gmail.com', 'Pakistan', 'abc', 'Islamabad', 12, '1223456789', 'Abc', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 1100, '', '2018-10-22 19:58:11', 'rashid@gmail.com', 'Approved'),
(1060, 'Aftab', 'khan', 'aftab@gmail.com', 'India', 'Islamabad', 'Islamabad', 12, '12345698', 'pak', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 850, '', '2018-10-24 15:54:06', 'aftab@gmail.com', 'Approved'),
(1061, 'Aftab', 'khan', 'aftab@gmail.com', 'Pakistan', 'abc', 'Islamabad', 12, '03004785963', 'D I Khan', '0', 'Free Shipping', '                  -', '                   -', NULL, NULL, NULL, 850, '', '2018-10-25 18:32:48', 'aftab@gmail.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `product_category_id` int(20) UNSIGNED NOT NULL,
  `ProductType` varchar(30) NOT NULL,
  `product_brand_id` int(11) UNSIGNED NOT NULL,
  `Price` int(10) NOT NULL,
  `Imagepath` varchar(500) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `gender`, `product_category_id`, `ProductType`, `product_brand_id`, `Price`, `Imagepath`, `Description`, `stock`) VALUES
(1180, 'Men', 38, 'Nayab', 34, 800, 'flour10kg.jpg', 'Nayab Flour Atta 10kg ', 40),
(1181, 'Men', 38, 'Super Fine', 34, 850, 'superfineatta.jpg', ' Super Fine 10kg', 44),
(1182, 'Men', 38, 'FIne', 34, 900, 'fineatta.jpg', ' Fine atta 10kg', 32),
(1183, 'Men', 38, 'test', 34, 100, 'reset password.PNG', ' dfghjkl', 46),
(1184, 'Men', 40, 'test', 34, 100, 'reset password.PNG', ' dfghjkl', 50);

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `product_brand_id` int(11) UNSIGNED NOT NULL,
  `product_brand_name` varchar(30) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`product_brand_id`, `product_brand_name`, `Date`) VALUES
(34, 'Sarhad', '2018-09-27 14:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(20) UNSIGNED NOT NULL,
  `product_category_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `gender`, `Date`) VALUES
(38, 'Flour', 'abc', '2018-10-14 08:03:50'),
(39, 'White Flour', 'Men', '2018-09-27 14:57:44'),
(40, 'Souji', 'Men', '2018-09-27 14:57:52'),
(41, 'Chokar', 'Men', '2018-09-27 14:58:02'),
(42, 'Maida', 'Men', '2018-09-27 14:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--

CREATE TABLE `sales_invoice` (
  `sales_invoice_id` int(11) UNSIGNED NOT NULL,
  `User_id` int(5) NOT NULL,
  `employee_id` int(11) UNSIGNED DEFAULT NULL,
  `total_amount` int(5) NOT NULL,
  `total_items` int(5) NOT NULL,
  `paid` int(20) NOT NULL,
  `change_amount` int(5) NOT NULL DEFAULT '0',
  `profit` int(20) NOT NULL DEFAULT '0',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoice`
--

INSERT INTO `sales_invoice` (`sales_invoice_id`, `User_id`, `employee_id`, `total_amount`, `total_items`, `paid`, `change_amount`, `profit`, `creation_date`) VALUES
(76, 63, 1, 1100, 2, 0, 0, 0, '2018-10-22 19:27:32'),
(77, 63, 1, 1100, 2, 0, 0, 0, '2018-10-22 19:37:28'),
(78, 57, 1, 9400, 2, 0, 0, 0, '2018-10-22 19:52:34'),
(79, 63, 1, 1100, 2, 0, 0, 0, '2018-10-22 19:58:10'),
(80, 57, 1, 850, 1, 0, 0, 0, '2018-10-24 15:54:06'),
(81, 57, 1, 850, 1, 0, 0, 0, '2018-10-25 18:32:48'),
(82, 62, 1, 2600, 2, 0, 0, 0, '2018-10-25 20:30:47'),
(83, 62, 1, 1750, 2, 0, 0, 0, '2018-10-26 16:13:58'),
(84, 57, 1, 9400, 2, 0, 0, 0, '2018-10-26 16:54:00'),
(85, 57, 1, 1750, 2, 0, 0, 0, '2018-10-27 08:54:15'),
(86, 57, 1, 900, 1, 0, 0, 0, '2018-10-28 09:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice_items`
--

CREATE TABLE `sales_invoice_items` (
  `sales_invoice_item_id` int(11) UNSIGNED NOT NULL,
  `sales_invoice_id` int(11) UNSIGNED DEFAULT NULL,
  `Product_id` int(5) DEFAULT NULL,
  `item_quantity` int(5) NOT NULL,
  `total` int(30) NOT NULL,
  `profit` int(11) NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoice_items`
--

INSERT INTO `sales_invoice_items` (`sales_invoice_item_id`, `sales_invoice_id`, `Product_id`, `item_quantity`, `total`, `profit`, `Date`) VALUES
(141, 76, 1182, 1, 900, 1, '2018-10-22 19:27:32'),
(142, 76, 1183, 2, 100, 1, '2018-10-22 19:27:32'),
(143, 77, 1182, 1, 900, 1, '2018-10-22 19:37:28'),
(144, 77, 1183, 2, 100, 1, '2018-10-22 19:37:29'),
(145, 78, 1180, 5, 800, 1, '2018-10-22 19:52:34'),
(146, 78, 1182, 6, 900, 1, '2018-10-22 19:52:34'),
(147, 79, 1182, 1, 900, 1, '2018-10-22 19:58:10'),
(148, 79, 1183, 2, 100, 1, '2018-10-22 19:58:11'),
(149, 80, 1181, 1, 850, 1, '2018-10-24 15:54:06'),
(150, 81, 1181, 1, 850, 1, '2018-10-25 18:32:48'),
(151, 82, 1182, 1, 900, 1, '2018-10-25 20:30:47'),
(152, 82, 1181, 2, 850, 1, '2018-10-25 20:30:47'),
(153, 83, 1181, 1, 850, 1, '2018-10-26 16:13:58'),
(154, 83, 1182, 1, 900, 1, '2018-10-26 16:13:58'),
(155, 84, 1180, 5, 800, 1, '2018-10-26 16:54:00'),
(156, 84, 1182, 6, 900, 1, '2018-10-26 16:54:00'),
(157, 85, 1181, 1, 850, 1, '2018-10-27 08:54:15'),
(158, 85, 1182, 1, 900, 1, '2018-10-27 08:54:15'),
(159, 86, 1182, 1, 900, 1, '2018-10-28 09:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `signuptable`
--

CREATE TABLE `signuptable` (
  `User_id` int(5) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `ContactNo` varchar(12) NOT NULL,
  `EmailId` varchar(40) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `DateAndTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remaining_amount` int(10) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signuptable`
--

INSERT INTO `signuptable` (`User_id`, `FirstName`, `LastName`, `Gender`, `ContactNo`, `EmailId`, `Password`, `DateAndTime`, `remaining_amount`, `address`, `country`, `state`, `city`) VALUES
(56, 'walkin', 'customer', 'walkin', '0000000000', 'walkincustomer@gmail.com', 'walkin', '2018-10-27 16:12:11', 0, 'Behria Town phase 8', 'Pakistan', 'Abc', 'Islamabad'),
(57, 'Aftab', 'khan', 'Male', '03004785963', 'aftab@gmail.com', '123', '2018-10-27 16:12:57', 0, 'Behria Town phase 7', 'Pakistan', 'Abc', 'Islamabad'),
(62, 'admin', 'admin', 'Male', '123456789', 'admin@gmail.com', '123', '2018-10-20 05:52:02', 0, 'Gulraz street 3', 'Pakistan', 'ABC', 'Islamabad'),
(63, 'Rashid', 'khan', 'Male', '1223456789', 'rashid@gmail.com', '123', '2018-10-21 17:12:54', 0, 'Pakistan Islamabad H#62', 'Pakistan', 'ABC', 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `temp_sales_invoice`
--

CREATE TABLE `temp_sales_invoice` (
  `sales_invoice_id` int(11) UNSIGNED NOT NULL,
  `User_id` int(5) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `total_amount` int(5) NOT NULL,
  `total_items` int(5) NOT NULL,
  `paid` int(20) UNSIGNED NOT NULL,
  `change_amount` int(5) NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_sales_invoice_items`
--

CREATE TABLE `temp_sales_invoice_items` (
  `sales_invoice_item_id` int(11) UNSIGNED NOT NULL,
  `sales_invoice_id` int(11) DEFAULT NULL,
  `Product_id` int(5) DEFAULT NULL,
  `item_quantity` int(5) NOT NULL,
  `total` int(30) NOT NULL,
  `profit` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`Cart_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `product_category_id` (`product_category_id`),
  ADD KEY `product_brand_id` (`product_brand_id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`product_brand_id`),
  ADD KEY `item_brand_id` (`product_brand_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`),
  ADD KEY `item_category_id` (`product_category_id`);

--
-- Indexes for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD PRIMARY KEY (`sales_invoice_id`),
  ADD KEY `sales_invoice_id` (`sales_invoice_id`),
  ADD KEY `salesmen_id` (`employee_id`);

--
-- Indexes for table `sales_invoice_items`
--
ALTER TABLE `sales_invoice_items`
  ADD PRIMARY KEY (`sales_invoice_item_id`),
  ADD KEY `sales_invoice_item_id` (`sales_invoice_item_id`),
  ADD KEY `sales_invoice_id` (`sales_invoice_id`),
  ADD KEY `item_name_id` (`Product_id`);

--
-- Indexes for table `signuptable`
--
ALTER TABLE `signuptable`
  ADD PRIMARY KEY (`EmailId`),
  ADD UNIQUE KEY `User_id` (`User_id`);

--
-- Indexes for table `temp_sales_invoice`
--
ALTER TABLE `temp_sales_invoice`
  ADD PRIMARY KEY (`sales_invoice_id`);

--
-- Indexes for table `temp_sales_invoice_items`
--
ALTER TABLE `temp_sales_invoice_items`
  ADD PRIMARY KEY (`sales_invoice_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `Cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactus_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1062;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1185;
--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `product_brand_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  MODIFY `sales_invoice_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `sales_invoice_items`
--
ALTER TABLE `sales_invoice_items`
  MODIFY `sales_invoice_item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `signuptable`
--
ALTER TABLE `signuptable`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `temp_sales_invoice`
--
ALTER TABLE `temp_sales_invoice`
  MODIFY `sales_invoice_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp_sales_invoice_items`
--
ALTER TABLE `temp_sales_invoice_items`
  MODIFY `sales_invoice_item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_brand_id`) REFERENCES `product_brand` (`product_brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`product_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
