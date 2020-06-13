-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 13, 2020 at 07:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Hotel_Booking_Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Hotel_Reservations`
--

CREATE TABLE `Hotel_Reservations` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `From_Date` date NOT NULL,
  `To_Date` date NOT NULL,
  `Room_Number` int(11) NOT NULL,
  `Room_Service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Hotel_Reservations`
--


