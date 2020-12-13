-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 11:54 AM
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
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_group`
--

CREATE TABLE `create_group` (
  `c_id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_course` varchar(255) NOT NULL,
  `c_meetingtime` varchar(255) NOT NULL,
  `c_meetingmethod` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_group`
--

INSERT INTO `create_group` (`c_id`, `c_name`, `c_course`, `c_meetingtime`, `c_meetingmethod`, `c_email`) VALUES
(4, 'Osama Fayyaz', 'Web Development', '2020-12-12T18:18', 'Online in BlackBoard', 'Osama123@gmail.com'),
(5, 'Khalil', 'Android Development ', '2020-12-15T21:20', 'Online in BlackBoard', 'khalil123@gmail.com'),
(6, 'Osama', 'Web designer', '2020-12-18T07:42', 'Online in zoom', 'Osama998@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_group`
--
ALTER TABLE `create_group`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_group`
--
ALTER TABLE `create_group`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
