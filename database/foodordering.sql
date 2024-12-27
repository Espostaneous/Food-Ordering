-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 04:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `price` bigint(12) NOT NULL,
  `qty` bigint(12) NOT NULL,
  `total` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `p_id`, `u_id`, `price`, `qty`, `total`) VALUES
(7, 4, '12345', 40, 2, 80),
(31, 23, '21270', 45, 3, 135),
(32, 18, '21270', 20, 2, 40),
(33, 7, '21270', 35, 4, 140);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `p_id`, `u_id`, `name`, `mobile`, `email`, `location`) VALUES
(101, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(102, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(103, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(104, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(105, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(106, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(107, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(108, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(112, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(113, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(118, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(119, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'Purok 7, San Miguel, Manolo Fortich, Bukidnon'),
(124, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(125, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(126, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(127, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(128, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(129, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(130, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(131, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(132, 6, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(134, 8, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(135, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(136, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(137, 6, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(139, 8, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(141, 4, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(142, 5, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(143, 6, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(145, 8, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(147, 23, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(148, 23, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon'),
(150, 23, '21270', 'Gian', 912345678, 'aek@gmail.com', 'San Miguel, Manolo Fortich, Bukidnon');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `assigned_orders` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `status`, `assigned_orders`) VALUES
(1, 'John', 'Doe', 'john@gmail.com', 'johnexample', '1234567890', '123 Street, Manolo Fortich', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `food_cat`
--

CREATE TABLE `food_cat` (
  `id` bigint(12) NOT NULL,
  `catnm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `food_cat`
--

INSERT INTO `food_cat` (`id`, `catnm`) VALUES
(1, 'main dishes'),
(2, 'main dishes'),
(3, 'main dishes'),
(4, 'main dishes'),
(5, 'main dishes'),
(6, 'main dishes'),
(7, 'pancit dishes'),
(8, 'pancit dishes'),
(9, 'pancit dishes'),
(10, 'pancit dishes'),
(11, 'pancit dishes'),
(12, 'pancit dishes'),
(13, 'vegetables dishes'),
(14, 'vegetables dishes'),
(15, 'vegetables dishes'),
(16, 'vegetables dishes'),
(17, 'soup dishes'),
(18, 'soup dishes'),
(19, 'soup dishes'),
(20, 'soup dishes'),
(56, 'tava');

-- --------------------------------------------------------

--
-- Table structure for table `food_parcel`
--

CREATE TABLE `food_parcel` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `food_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(12) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(6) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `title`, `description`, `price`, `image`) VALUES
(4, 'main dishes', 'mechado', 'sauce made from shrimp, toppings such as boiled eggs, shrimp, smoked fish flakes, and crunchy chicharon.', 35, 'mimg/mechado.jpg'),
(5, 'main dishes', 'arroz caldo', 'flavored with ginger, garlic, and chicken, often topped with boiled eggs, scallions, and fried garlic.', 40, 'mimg/arroz caldo.jpg'),
(6, 'main dishes', 'batchoy', 'noodle soup made with pork, liver, and crushed chicharon, served in a flavorful broth.', 50, 'mimg/la-paz-batchoy.jpg'),
(7, 'main dishes', 'lechon kawali', 'a crispy, deep-fried pork belly dish, seasoned and served with a side of dipping sauce.', 35, 'mimg/lechon kawali.jpg'),
(8, 'main dishes', 'adobo', 'meat braised in soy sauce, vinegar, garlic, and spices, offering a savory and tangy flavor.', 30, 'mimg/adobo.jpg'),
(9, 'main dishes', 'kaldereta', 'made with meat, potatoes, carrots, and bell peppers, simmered in a rich tomato-based sauce.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 35, 'mimg/kaldereta.jpg'),
(10, 'pancit dishes', 'pancit malabon', 'noodle dish with thick noodles, shrimp sauce, and assorted toppings like shrimp, eggs, and chicharon.', 30, 'mimg/pancit malabon.jpg'),
(11, 'pancit dishes', 'pancit sotanghon', 'made with chicken, shrimp, and vegetables, often flavored with soy sauce and garlic.', 25, 'mimg/pancit sotanghon.jpg'),
(12, 'pancit dishes', 'pancit bihon', 'made with thin rice noodles, vegetables, chicken, shrimp, and pork, flavored with soy sauce and garlic.', 20, 'mimg/pancit bihon.jpg'),
(13, 'pancit dishes', 'mami', 'made with tender egg noodles, a flavorful and savory broth, toppings such as chicken, pork, or beef.', 35, 'mimg/mami.jpg'),
(14, 'pancit dishes', 'pancit palabok', 'rice noodles, garlic sauce, shrimp, pork, chicharon, boiled eggs, and green onions.', 15, 'mimg/pancit palabok.jpg'),
(15, 'pancit dishes', 'lomi', 'meat like pork, chicken, and shrimp, often topped with vegetables and boiled eggs.', 20, 'mimg/lomi.jpg'),
(16, 'vegetables dishes', 'pinakbet', 'made with sautéed squash, eggplant, bitter melon, okra, and string beans, simmered in shrimp or fish sauce.', 15, 'mimg/pinakbet.jpg'),
(17, 'vegetables dishes', 'kare kare', 'made with oxtail, beef, or pork, with vegetables like eggplant, string beans, and bok choy.', 15, 'mimg/kare kare.jpg'),
(18, 'vegetables dishes', 'tortang talong', 'made by grilling eggplants, dipping them in beaten eggs, and pan-frying until golden.', 20, 'mimg/tortang talong.jpg'),
(19, 'vegetables dishes', 'ginataang monggo', 'made with toasted mung beans, glutinous rice, and coconut milk, sweetened with sugar.', 20, 'mimg/ginataang monggo.jpg'),
(20, 'soup dishes', 'beef nilaga', 'made with tender beef chunks, potatoes, corn, cabbage, and other vegetables.', 55, 'mimg/beef nilaga.jpg'),
(21, 'soup dishes', 'bulalo', 'made with bone-in beef shank, simmered for hours to extract rich flavors from the marrow.', 45, 'mimg/bulalo.jpg'),
(22, 'soup dishes', 'tinolang manok', 'made with chicken pieces, ginger, green papaya, and chili leaves, simmered in a clear, savory broth.', 40, 'mimg/tinolang manok.jpg'),
(23, 'soup dishes', 'sinigang na hipon', 'made with shrimp, vegetables, and tamarind, giving it a tangy and savory flavor.', 45, 'mimg/sinigang na hipon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(12) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userid`, `password`, `email`, `name`) VALUES
(6, '12345', 'akolangto', 'aek@gmail.com', 'Gian'),
(7, '21270', 'akolangto', 'aek@gmail.com', 'Gian'),
(8, '21270', 'akolangto', 'aek@gmail.com', 'Gian'),
(9, '21270', 'akolangto', 'aek@gmail.com', 'Gian');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `description`) VALUES
(6, 'John D.', 'Exellent', 'The food is absolutely delicious! I ordered the Batchoy, and it was perfect. Delivery was fast too!'),
(7, 'Dave T.', 'Exellent', 'Super impressed by the quality and taste of the food. A must-try for anyone craving Filipino dishes!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `food_cat`
--
ALTER TABLE `food_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_cat`
--
ALTER TABLE `food_cat`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
