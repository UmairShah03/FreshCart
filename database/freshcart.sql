-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 09:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `slug` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `mega-title` varchar(100) NOT NULL,
  `meda_des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`id`, `image`, `c_name`, `slug`, `date`, `description`, `status`, `mega-title`, `meda_des`) VALUES
(1, 'baby-care.png', '', 'no ', '2023-06-26', '', 'option1', 'wefewf', 'wefewf'),
(2, 'baby-care.png', 'baby care ', 'no ', '2023-06-26', '', 'option1', 'wefewf', 'wefewf'),
(3, 'baby-care.png', 'baby care ', 'no ', '2023-06-26', '', 'option1', 'wefewf', 'wefewf'),
(4, 'category-bakery-biscuits.jpg', 'oreo ', 'no ', '2023-06-20', 'wqdwqdwq', 'option2', 'wefewf', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
