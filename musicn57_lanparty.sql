-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 06:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
(60, 'ekipa 1', 2),
(62, 'ekipa 2', 2),
(63, 'ekipa 3', 2),
(64, 'ekipa 4', 2),
(65, 'ekipa 5', 2),
(66, 'ekipa 6', 2),
(67, 'ekipa 7', 2),
(68, 'ekipa 8', 2),
(71, 'ekipa 1', 1),
(72, 'ekipa 2', 1),
(73, 'ekipa 3', 1),
(74, 'ekipa 4', 1),
(75, 'ekipa 5', 1),
(76, 'ekipa 6', 1),
(77, 'ekipa 7', 1),
(78, 'ekipa 8', 1);

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
(145, 'hjkkhjk', 'hjkj', 'khjkhjkj', 60),
(146, 'oi', 'oiho', 'oih', 62),
(147, 'hoi', 'hoi', 'ihoi', 62),
(148, 'oih', 'oih', 'hoih', 62),
(149, 'hoi', 'hoi', 'oi', 62),
(150, 'hoi', 'ho', 'hoi', 62),
(151, 'oj', 'obnuoi', 'on', 63),
(152, 'biub', 'iub', 'biuo', 63),
(153, 'ubiu', 'biu', 'iubi', 63),
(154, 'biu', 'biu', 'biu', 63),
(155, 'biu', 'biu', 'biu', 63),
(156, 'ou', 'ounoiu', 'ojn', 64),
(157, 'oin', 'oin', 'nin', 64),
(158, 'oino', 'ini', 'oin', 64),
(159, 'ion', 'oin', 'ni', 64),
(160, 'in', 'n', 'oino', 64);

-- --------------------------------------------------------

--
-- Table structure for table `round_one`
--

CREATE TABLE `round_one` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `round_three`
--

CREATE TABLE `round_three` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `round_three`
--

INSERT INTO `round_three` (`id`, `team_id`) VALUES
(1, 68),
(2, 63);

-- --------------------------------------------------------

--
-- Table structure for table `round_two`
--

CREATE TABLE `round_two` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `round_two`
--

INSERT INTO `round_two` (`id`, `team_id`) VALUES
(1, 60),
(2, 63),
(3, 65),
(4, 68);

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`id`, `team_id`) VALUES
(1, 63);

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
-- Indexes for table `round_one`
--
ALTER TABLE `round_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `round_three`
--
ALTER TABLE `round_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `round_two`
--
ALTER TABLE `round_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekipa`
--
ALTER TABLE `ekipa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `igralci`
--
ALTER TABLE `igralci`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `round_one`
--
ALTER TABLE `round_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `round_three`
--
ALTER TABLE `round_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `round_two`
--
ALTER TABLE `round_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
