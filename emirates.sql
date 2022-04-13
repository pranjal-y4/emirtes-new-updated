-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 05:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emirates`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_list`
--

CREATE TABLE `airlines_list` (
  `airline_id` int(11) NOT NULL,
  `airline_name` varchar(20) NOT NULL,
  `airline_source` varchar(30) NOT NULL,
  `airline_dest` varchar(30) NOT NULL,
  `airline_availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines_list`
--

INSERT INTO `airlines_list` (`airline_id`, `airline_name`, `airline_source`, `airline_dest`, `airline_availability`) VALUES
(1, 'Emirates SkyCargo', 'Laos', 'Hong Kong', 23),
(2, 'Unique Air', 'Korea', 'Laos', 25),
(3, 'Unique Air', 'Korea', 'Myanmar', 48),
(4, 'Emirates SkyCargo', 'Hong Kong', 'India', 37),
(5, 'Sky bizz', 'Cambodia', 'Thailand', 37),
(6, 'Etihad Cargo	', 'Vietnam', 'Japan', 47),
(7, 'Maximus Air Cargo', 'Cambodia', 'Korea', 27),
(8, 'Unique Air', 'India', 'Cambodia', 35),
(9, 'Emirates SkyCargo', 'Myanmar', 'India', 52),
(10, 'Unique Air', 'Laos', 'Hong Kong', 30),
(11, 'Maximus Air Cargo', 'Laos', 'Singapore', 45),
(12, 'Sky bizz', 'India', 'Singapore', 44),
(13, 'Unique Air', 'Thailand', 'Japan', 49),
(14, 'Maximus Air Cargo', 'Cambodia', 'Japan', 42),
(15, 'Sky bizz', 'Myanmar', 'Thailand', 31),
(16, 'Sky bizz', 'Japan', 'Hong Kong', 49),
(17, 'Emirates SkyCargo', 'Singapore', 'Laos', 37),
(18, 'Vistara', 'Hong Kong', 'Cambodia', 57),
(19, 'Maximus Air Cargo', 'Hong Kong', 'Myanmar', 28),
(20, 'Emirates SkyCargo', 'India', 'Japan', 55),
(21, 'Unique Air', 'Japan', 'Hong Kong', 49),
(22, 'Etihad Cargo	', 'Thailand', 'Vietnam', 43),
(23, 'Vistara', 'Myanmar', 'Korea', 53),
(24, 'Vistara', 'Japan', 'Korea', 35),
(25, 'Unique Air', 'Singapore', 'Vietnam', 28),
(26, 'Maximus Air Cargo', 'Myanmar', 'Japan', 20),
(27, 'Maximus Air Cargo', 'Hong Kong', 'Cambodia', 56),
(28, 'Sky bizz', 'India', 'Thailand', 25),
(29, 'Emirates SkyCargo', 'Korea', 'Myanmar', 30);

-- --------------------------------------------------------

--
-- Table structure for table `booked_flight`
--

CREATE TABLE `booked_flight` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `airline_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `depart` varchar(10) NOT NULL,
  `arrival` varchar(10) NOT NULL,
  `trip-start` varchar(20) NOT NULL,
  `dir_lay` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(20) NOT NULL,
  `usersEmail` varchar(30) NOT NULL,
  `usersUid` varchar(20) NOT NULL,
  `usersPwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines_list`
--
ALTER TABLE `airlines_list`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `booked_flight`
--
ALTER TABLE `booked_flight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `airline_id` (`airline_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines_list`
--
ALTER TABLE `airlines_list`
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `booked_flight`
--
ALTER TABLE `booked_flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_flight`
--
ALTER TABLE `booked_flight`
  ADD CONSTRAINT `booked_flight_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersId`),
  ADD CONSTRAINT `booked_flight_ibfk_2` FOREIGN KEY (`airline_id`) REFERENCES `airlines_list` (`airline_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
