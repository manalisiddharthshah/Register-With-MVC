-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 12:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `Username`, `Password`) VALUES
(1, 'abc', 'abc'),
(4, 'Manali Shah', 'manali@1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(11) NOT NULL,
  `interest` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `gender`, `dob`, `address`, `country`, `interest`) VALUES
(33, 'Sub zero', 'subzero@mortalkombet', '4468785753', '', '2018-11-21', 'Mortal kombet', 'Austrelia', 'comp'),
(34, 'Kaileena', 'kaileena@princeofper', '9979194539', 'Female', '0000-00-00', 'Prince of Percia', 'India', 'comp');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_name` varchar(30) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `stu_add` varchar(50) NOT NULL,
  `stu_age` int(5) NOT NULL,
  `stu_std` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_name`, `roll_no`, `stu_add`, `stu_age`, `stu_std`) VALUES
('Manali', 53, 'Himali tower', 20, 3),
('Sanjay', 11, 'abc', 20, 3),
('Kaustubh', 12, 'yash tower', 20, 3),
('Aditi', 63, 'cdfd', 20, 3),
('Malav', 61, 'akshar', 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentcouse`
--

CREATE TABLE `studentcouse` (
  `couse_id` int(5) NOT NULL,
  `roll_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcouse`
--

INSERT INTO `studentcouse` (`couse_id`, `roll_no`) VALUES
(1, 61),
(2, 63),
(3, 11),
(4, 12),
(1, 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
