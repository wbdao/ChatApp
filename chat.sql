-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 11:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(2, 1494011163, 1562214131, 'hellow'),
(3, 1494011163, 1562214131, 'hi abdalla'),
(4, 1562214131, 1105752556, 'hi'),
(5, 1105752556, 1562214131, 'hellow'),
(6, 1562214131, 1105752556, 'how are'),
(7, 1105752556, 1562214131, 'i\'m fine thanks'),
(8, 1494011163, 1105752556, 'hiii'),
(9, 1105752556, 1562214131, 'hi'),
(10, 1562214131, 1105752556, 'no'),
(11, 1105752556, 1494011163, 'hoo'),
(12, 1494011163, 1105752556, 'hiedfg'),
(13, 1562214131, 1105752556, 'kolotg'),
(14, 1105752556, 1562214131, 'oh yes'),
(15, 1562214131, 1105752556, 'ok you just'),
(16, 1105752556, 1562214131, 'may be'),
(17, 1105752556, 1562214131, 'hi'),
(18, 1105752556, 1562214131, 'hussein'),
(19, 1562214131, 1494011163, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1562214131, 'hossein', 'sddfa', 'abdulla15982@gmail.com', '123456', '1630746828IMG_20190213_184612.jpg', 'Active now'),
(2, 1105752556, 'Abdalla', 'mabrouk', 'abdap@email.com', 'yukvcacda', '1630747208n234.jpg', 'Offline now'),
(4, 1494011163, 'abdalla', 'medo', 'abdulla15982@gmail.coma', 'dsvwdvwdv', '1630747628IMG_20210903_130651.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
