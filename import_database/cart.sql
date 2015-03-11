-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2015 at 06:14 PM
-- Server version: 5.00.15
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL auto_increment,
  `product_code` varchar(60) character set utf8 NOT NULL,
  `product_category` varchar(8) character set utf8 NOT NULL,
  `product_type` varchar(8) character set utf8 NOT NULL,
  `product_name` varchar(120) character set utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_category`, `product_type`, `product_name`, `price`, `quantity`) VALUES
(1, 'PD1001', 'Curry', 'Veg', 'drumsticks curry', 20, 10),
(2, 'PD1002', 'Curry', 'Veg', 'masaledar green peas gravy', 20, 10),
(3, 'PD1003', 'Curry', 'Veg', 'mullangi pesarapappu koora', 20, 10),
(4, 'PD1004', 'Curry', 'Veg', 'Gobi Tomato curry(Gobi tamater ki sabzi)  ', 20, 10),
(5, 'PD1005', 'Curry', 'Veg', 'Bhendi fry     ', 20, 10),
(6, 'PD1006', 'Curry', 'Veg', 'Kaju Paneer Pasanda', 20, 10),
(7, 'PD1007', 'Curry', 'Veg', 'Brinjal Curry with grated coconut/Vankaya cobbari thurumu curry', 20, 10),
(8, 'PD1008', 'Curry', 'Veg', 'Bhindi Tomato curry/Bendakaya Tamata koora', 20, 10),
(9, 'PD1009', 'Curry', 'Veg', 'Grated carrot curry', 20, 10),
(10, 'PD1010', 'Curry', 'Veg', 'Boondi curry', 20, 10),
(11, 'PD1011', 'Curry', 'Non-Veg', 'Lamb Brain Masala gravy curry/Brain Iguru koora', 50, 10),
(12, 'PD1012', 'Curry', 'Non-Veg', 'Keema-drumsticks Curry(Keema Mulakkada Koora)', 50, 10),
(13, 'PD1013', 'Curry', 'Non-Veg', 'Mutton Brain Fry/Bheja fry', 50, 10),
(14, 'PD1014', 'Curry', 'Non-Veg', 'Gongura Chicken/Chicken with sorrel leaves', 50, 10),
(15, 'PD1015', 'Curry', 'Non-Veg', 'Hyderabadi Fish curry', 50, 10),
(16, 'PD1016', 'Curry', 'Non-Veg', 'Fish fry', 50, 10),
(17, 'PD1017', 'Rice', 'Veg', 'Vangi Bhath', 30, 10),
(18, 'PD1018', 'Rice', 'Veg', 'Beetroot Biryani', 30, 10),
(19, 'PD1019', 'Rice', 'Veg', 'Veg. Pulao/Vegetable biryani', 30, 10),
(20, 'PD1020', 'Rice', 'Veg', 'Tomato rice', 30, 10),
(21, 'PD1021', 'Rice', 'Veg', 'Tamarind rice (Pulihora)', 30, 10),
(22, 'PD1022', 'Rice', 'Veg', 'Coconut rice with Raita', 30, 10),
(23, 'PD1023', 'Rice', 'Veg', 'Curd Rice (Perugu annam)', 30, 10),
(24, 'PD1024', 'Rice', 'Veg', 'Jeera rice', 30, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) character set utf8 NOT NULL,
  `password` varchar(255) character set utf8 NOT NULL,
  `email` varchar(60) character set utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'siva', '5f4dcc3b5aa765d61d8327deb882cf99', 'sivapolisetty@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
