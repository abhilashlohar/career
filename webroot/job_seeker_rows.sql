-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 03:25 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_rows`
--

CREATE TABLE `job_seeker_rows` (
  `id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `degree_type` varchar(20) NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `percentage_cgpa` decimal(5,2) NOT NULL,
  `passed_out_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_seeker_rows`
--
ALTER TABLE `job_seeker_rows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_seeker_rows`
--
ALTER TABLE `job_seeker_rows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
