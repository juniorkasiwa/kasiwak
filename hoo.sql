-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 09:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'junior', '$2y$10$TMs8Kbbm1miNdTJCtv'),
(2, 'mebo', '$2y$10$XPoEnwNTCNbmwDnHGN'),
(3, '', '$2y$10$8c9hWZwUtDyV15vANY'),
(4, '', '$2y$10$CnpJsvyu8/rpwOFxTC'),
(5, 'hope', '$2y$10$GU/arCAhh5JK4PNvq2'),
(6, '', '$2y$10$ft7IwE6bpUG56VxOv5'),
(7, 'hope', '$2y$10$Y/a2FV/hbeNwtn8e4V'),
(8, 'mebo', '$2y$10$gb3WdqAjCI35I0CBkX'),
(9, '', '$2y$10$BYIHBrnNlDLB1pnKR9'),
(10, '', '$2y$10$GsbaUPghPeSbN3Ymxi'),
(11, 'mebo', '$2y$10$nNdCJg53qYqoi47xCD'),
(12, 'mebo', '$2y$10$A/XHI3QJeDNL8c7mxF'),
(13, 'mebo', '$2y$10$cRVJKcpdNlvI.3zH4l'),
(14, 'mebo', '$2y$10$wbd7odnY7X.QF6JFjP'),
(15, 'mebo', '$2y$10$trmhZNIBYcc3lgDpOC'),
(16, 'mebo', '$2y$10$1L.T1be2MyC0d74hhW'),
(17, 'mebo', '$2y$10$Ubsz9ZC4GZWkF7VpQp'),
(18, 'mebo', '$2y$10$rB5ei72WvKYMZMMztI'),
(19, 'mebo', '$2y$10$ZQmZ6ZxHlg5xMEhSzn'),
(20, 'mebo', '$2y$10$xEVt8dgoXHIqiCKn6x'),
(21, 'mebo', '$2y$10$NMdeZEqi52IeIrnC/Q'),
(22, 'mebo', '$2y$10$Inw438Wd32p/oqxbUB'),
(23, 'lebat', '$2y$10$QpqZ1YMaupOZHpa1or'),
(24, 'mebo', '$2y$10$p0kX0s7uWbhkSq6xC4'),
(25, 'jules', '$2y$10$FNq0cVKZLsHNQ2QS8.');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `fashion` varchar(255) NOT NULL,
  `dance` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL,
  `craft` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `fashion`, `dance`, `music`, `gallery`, `art`, `craft`) VALUES
(1, 'fashion', 'dance', 'music', 'gallery', 'art', 'craft');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirm_password` varchar(25) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `confirm_password`, `create_datetime`) VALUES
(1, 'mebo', '340e427cc38c97bfb7024fe52', '', '', '2022-09-27 11:24:51'),
(2, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', 'd41d8cd98f00b204e9800998e', '2022-09-27 11:30:40'),
(3, '', '', 'd41d8cd98f00b204e9800998e', 'd41d8cd98f00b204e9800998e', '2022-09-27 11:38:05'),
(4, '', '', 'd41d8cd98f00b204e9800998e', 'd41d8cd98f00b204e9800998e', '2022-09-27 11:38:45'),
(5, '', '', 'd41d8cd98f00b204e9800998e', 'd41d8cd98f00b204e9800998e', '2022-09-27 11:38:49'),
(6, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-09-27 11:39:23'),
(7, 'junior', 'juniorkasiwa7@gmail.com', '7ae8008165d48aefe7d264991', '7ae8008165d48aefe7d264991', '2022-09-28 06:58:03'),
(8, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-10-05 13:10:21'),
(9, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-10-11 07:02:32'),
(10, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-10-11 07:11:18'),
(11, 'junior', 'juniorkasiwa7@gmail.com', '7ae8008165d48aefe7d264991', '7ae8008165d48aefe7d264991', '2022-10-11 07:35:38'),
(12, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-10-25 06:22:22'),
(13, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-10-25 06:22:48'),
(14, 'mebo', 'hopelebat@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152', '2022-10-25 06:23:25'),
(15, 'mebo', 'hopelebat@gmail.com', 'e807f1fcf82d132f9bb018ca6', 'e807f1fcf82d132f9bb018ca6', '2022-10-25 06:24:22'),
(16, 'lebat', 'hopelebat@gmail.com', '6eea9b7ef19179a06954edd0f', '6eea9b7ef19179a06954edd0f', '2022-10-25 06:25:23'),
(17, 'ABC', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd83', '81dc9bdb52d04dc20036dbd83', '2022-10-25 07:56:51'),
(18, 'ABC', 'juniorkasiwa4@gmail.com', '81dc9bdb52d04dc20036dbd83', '81dc9bdb52d04dc20036dbd83', '2022-10-25 07:57:33'),
(19, 'ABC', 'juniorkasiwa4@gmail.com', '81dc9bdb52d04dc20036dbd83', '81dc9bdb52d04dc20036dbd83', '2022-10-25 07:57:35'),
(20, 'ABC', 'juniorkasiwa4@gmail.com', '81dc9bdb52d04dc20036dbd83', '81dc9bdb52d04dc20036dbd83', '2022-10-25 07:57:35'),
(21, 'ABC', 'juniorkasiwa4@gmail.com', '81dc9bdb52d04dc20036dbd83', '81dc9bdb52d04dc20036dbd83', '2022-10-25 07:57:35'),
(22, 'ABC', 'juniorkasiwa4@gmail.com', '81dc9bdb52d04dc20036dbd83', '81dc9bdb52d04dc20036dbd83', '2022-10-25 07:57:36'),
(23, 'lebat', 'hopelebat@gmail.com', '6eea9b7ef19179a06954edd0f', '6eea9b7ef19179a06954edd0f', '2022-10-25 07:58:10'),
(24, 'mebo', 'merabhope17@gmail.com', '340e427cc38c97bfb7024fe52', '340e427cc38c97bfb7024fe52', '2022-10-25 08:06:30'),
(25, '', '', 'd41d8cd98f00b204e9800998e', 'd41d8cd98f00b204e9800998e', '2022-10-28 09:06:29'),
(26, 'makasi', 'juniorkasiwa7@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152', '2022-10-31 08:59:00'),
(27, 'lebat', 'hopelebat@gmail.com', '6eea9b7ef19179a06954edd0f', '6eea9b7ef19179a06954edd0f', '2022-10-31 10:18:06'),
(28, 'jules', 'juniorkasiwa4@gmail.com', '58e537189c53a9d3969e87955', '58e537189c53a9d3969e87955', '2022-11-01 07:38:06'),
(29, 'jules', 'juniorkasiwa4@gmail.com', 'ec1a6cd45603b4beba6b7c244', 'ec1a6cd45603b4beba6b7c244', '2022-11-01 07:38:33'),
(30, 'junior', 'juniorkasiwa4@gmail.com', '7ae8008165d48aefe7d264991', '7ae8008165d48aefe7d264991', '2022-11-17 06:49:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
