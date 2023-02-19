-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2023 at 02:14 PM
-- Server version: 10.3.35-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20266034_bookcab`
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
('Rishav Kumar', 'Sindri', 'Kolkata', '2022-12-07', '10:12:00.000000', '2022-12-07 07:12:36.913646'),
('', 'Ranchi', 'Kolkata', '2022-12-22', '00:00:00.000000', '2022-12-14 09:48:12.699995'),
('', 'Ranchi', 'Dhanbad', '2022-12-15', '10:00:00.000000', '2022-12-14 09:50:54.967164'),
('', 'Sindri', 'Dhanbad', '2022-12-14', '11:06:00.000000', '2022-12-14 10:05:50.491351'),
('Sonu Oraon', 'Sindri ', 'Gumla', '2022-12-14', '13:00:00.000000', '2022-12-14 12:19:56.804520'),
('Sonu Oraon', '', '', '0000-00-00', '00:00:00.000000', '2022-12-14 12:20:16.902194'),
('Pankaj Toppo', 'Sindri', 'Deoghar', '2022-12-25', '10:00:00.000000', '2022-12-24 00:15:03.526472'),
('Sonu Oraon', 'asidbik', 'asklas', '2023-01-08', '13:49:00.000000', '2023-01-08 11:47:57.328798'),
('Pankaj Toppo', 'Sindri', 'Sharpura', '2023-01-15', '10:00:00.000000', '2023-01-14 19:41:38.755154'),
('Pankaj Toppo', 'Sindri', 'Ramgarh', '2023-01-23', '10:00:00.000000', '2023-01-21 17:07:00.444219'),
('Nikhil Ronit Soreng', 'Sindri', 'Jamshedpur', '2023-01-24', '10:00:00.000000', '2023-01-22 08:59:30.767458'),
('Nikhil Ronit Soreng', 'Sindri', 'Jamshedpur', '2023-01-24', '10:00:00.000000', '2023-01-22 09:02:58.074204');

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
('Pankaj', 'pankajtoppo29@gmail.com', 'Hii! rishav, how are you ?', '2022-12-07 07:20:00.820064'),
('', '', '', '2022-12-14 12:22:53.143215'),
('Rishav', 'rajakrishav395@gmail.com', 'Hey, Rishav', '2023-01-14 19:43:55.861062'),
('Pankaj', 'pankajtoppo29@gmail.com', 'I want to book a cab for one week', '2023-01-21 17:08:34.628041'),
('Nikhil Ronit', 'nikhilronit@gmail.com', 'Hii', '2023-01-22 09:03:41.961535'),
('Nikhil Ronit', 'nikhilronit@gmail.com', 'Hii.', '2023-01-22 09:04:52.717898');

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
('NIkhil Singh', 'emnikhilsingh@gmail.com', '$2y$10$Cfwcl7EtjDGXAwbc9Mp.KuURdZwyBDSL5eM96OPWLQguGGHJ.Bbqu', 'user'),
('Nikhil Ronit Soreng', 'nikhilronit@gmail.com', '$2y$10$1HGD6F7utfIRpNmKFxkXkeIrnVxR01k36PUC5Attvw9PttlyJqtL2', 'user'),
('Pankaj Toppo', 'pankajtoppo29@gmail.com', '$2y$10$J1p8inEmhtTIaI1bTnW02en9gI4VfxvHAaP4QHx8lzyAvB.Lx4NNa', 'user'),
('Rishav Kumar', 'rajakrishav395@gmail.com', '$2y$10$1Z1RrA5O/CiEc5NO2EbKYuqccdBM30M1/R0DH3PWuVh6p39cwG9.S', 'admin'),
('Sonu Oraon', 'sonu@gmail.com', '$2y$10$1K24I0ioSX5J3ZH1OZ.ae.ZkFem6nFdnAWOuGDhsgo5R/peXhMAHm', 'user'),
('Vivekananda Bediya', 'vivek@gmail.com', '$2y$10$OIeTDgwD9q1CTX8i.5ngwuN/rT1KH0uyBr.SEnsNY0wFKRBxOSk1u', 'user');

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
