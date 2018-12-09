-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2018 at 03:07 PM
-- Server version: 10.1.36-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicn57_lanparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekipa`
--

CREATE TABLE `ekipa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `ekipa`
--

INSERT INTO `ekipa` (`id`, `ime`, `game`) VALUES
(60, 'khjkhjk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `igralci`
--

CREATE TABLE `igralci` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `priimek` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `account_name` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `ekipa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `igralci`
--

INSERT INTO `igralci` (`id`, `ime`, `priimek`, `account_name`, `ekipa_id`) VALUES
(141, 'khjk', 'hjkh', 'hjkh', 60),
(142, 'hjk', 'jk', 'khjkhjkjhk', 60),
(143, 'jkhhjk', 'hjkhjk', 'kl,jkljiljkl', 60),
(144, 'hjkhj', 'hjk', 'khj', 60),
(145, 'hjkkhjk', 'hjkj', 'khjkhjkj', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekipa`
--
ALTER TABLE `ekipa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `igralci`
--
ALTER TABLE `igralci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekipa`
--
ALTER TABLE `ekipa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `igralci`
--
ALTER TABLE `igralci`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
