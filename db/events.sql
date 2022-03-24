-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 04:03 PM
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
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` varchar(22) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(44) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `concent` varchar(11) NOT NULL,
  `date_added` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `username`, `email`, `gender`, `phone`, `password`, `concent`, `date_added`) VALUES
(2, 's', 'admin', 'admin@admin.com', 'm', '09717624112', '81dc9bdb52d04dc20036dbd8313ed055', 'on', '2022-03-24 13:01:03.017000'),
(3, 'o', 'test', 'test@test.com', 'f', '7777777777', '12345', 'on', '2022-03-24 18:51:28.403325'),
(4, 's', 'test1', 'test123@test.com', 'm', '789798787', '81dc9bdb52d04dc20036dbd8313ed055', 'on', '2022-03-24 19:00:23.567626'),
(5, 's', 'test99', 'test99@test.com', 'm', '', 'd41d8cd98f00b204e9800998ecf8427e', 'on', '2022-03-24 19:29:19.406959');

-- --------------------------------------------------------

--
-- Table structure for table `usertoken`
--

CREATE TABLE `usertoken` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `token` varchar(11) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertoken`
--

INSERT INTO `usertoken` (`id`, `email`, `token`, `date_created`) VALUES
(3, 'admin@admin.com', 'ungf52bxjj', '2022-03-24 17:40:52.727628'),
(4, 'test@test.com', 'db50vzx95k', '2022-03-24 18:51:58.073700'),
(5, 'test99@test.com', 'zfjia7mj7n', '2022-03-24 19:34:09.187766');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertoken`
--
ALTER TABLE `usertoken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertoken`
--
ALTER TABLE `usertoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
