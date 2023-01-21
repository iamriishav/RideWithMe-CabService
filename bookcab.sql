-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 10:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookcab`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcab`
--

CREATE TABLE `bookcab` (
  `user` varchar(30) NOT NULL,
  `pickup` varchar(50) NOT NULL,
  `dropto` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `booking_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookcab`
--

INSERT INTO `bookcab` (`user`, `pickup`, `dropto`, `date`, `time`, `booking_time`) VALUES
('Rishav Kumar Rajak', 'Sindri', 'Dhanbad', '2022-12-05', '20:00:00.000000', '2022-12-05 19:15:33.049442'),
('Pankaj Toppo', 'Sindri', 'Ranchi', '2022-12-06', '06:20:00.000000', '2022-12-05 19:16:26.566503'),
('Vivekananda', 'Sindri', 'Ranchi', '2022-12-31', '12:00:00.000000', '2022-12-05 19:17:19.494738'),
('Rishav Kumar', 'Dhanbad', 'Kolkata', '2022-12-07', '09:00:00.000000', '2022-12-07 07:07:13.481210'),
('Rishav Kumar', 'Sindri', 'Kolkata', '2022-12-07', '10:12:00.000000', '2022-12-07 07:12:36.913646');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `email`, `message`, `date_time`) VALUES
('Rishav', 'rajakrishav395@gmail.com', 'Hii, how are you ?', '2022-12-05 14:20:51.528922'),
('Pankaj', 'pankajtoppo29@gmail.com', 'Hii! rishav, how are you ?', '2022-12-07 07:20:00.820064');

-- --------------------------------------------------------

--
-- Table structure for table `user947`
--

CREATE TABLE `user947` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user947`
--

INSERT INTO `user947` (`name`, `email`, `password`, `usertype`) VALUES
('Pankaj Toppo', 'pankajtoppo29@gmail.com', '$2y$10$5cXRclY4HjH41nKR0mCJ6Oj588KqguZ2IuV2CT4tlQsDDymNd0tKu', 'user'),
('Rishav Kumar', 'rajakrishav395@gmail.com', '$2y$10$1Z1RrA5O/CiEc5NO2EbKYuqccdBM30M1/R0DH3PWuVh6p39cwG9.S', 'admin'),
('Vivekananda Bediya', 'vivek@gmail.com', '$2y$10$XNzokWcUHBb1wSNMyQgZRuxhEYAy7fET5y0dKhZqjKwHMriBB4Ewu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user947`
--
ALTER TABLE `user947`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
