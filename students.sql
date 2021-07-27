-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 06:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `rollno` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`rollno`, `name`, `sem`, `department`) VALUES
('123', 'Vidur Chettri', '3 sem', 'compuster science '),
('13uca003', 'Bidur', '1 sem', 'compuster science '),
('13uca004', 'Ravi', '1 sem', 'compuster science '),
('dasdd', 'sdasd', 'dasd', 'sadsa'),
('df', 'asdas', 'dsaasd', 'asdasd'),
('dfr', 'asdas', 'dsaasd', 'asdasd'),
('dfs', 'asdas', 'dsaasd', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
