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
-- Table structure for table `job_seekers`
--

CREATE TABLE `job_seekers` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `located_city` varchar(20) NOT NULL,
  `skill_set` varchar(100) NOT NULL,
  `job_profile` varchar(50) NOT NULL,
  `profile_document` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`id`, `email`, `password`, `name`, `mobile_no`, `located_city`, `skill_set`, `job_profile`, `profile_document`, `created_on`) VALUES
(1, 'ashish@gmail.com', '$2y$10$xMXvmyPVbhwUy43ZS8EWDehvDcmNqiE7t6jPiCanbXc4JdLGggstq', '', '', '', '', '', '', '2017-07-08 10:33:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_seekers`
--
ALTER TABLE `job_seekers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
