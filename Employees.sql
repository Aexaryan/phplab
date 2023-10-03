-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2023 at 06:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Alex2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `OrgzNumber` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`OrgzNumber`, `firstName`, `lastName`, `salary`, `department`, `gender`, `description`) VALUES
(1, 'John', 'Doe', 55000.00, 'IT', 'male', 'Lead developer with 5 years experience'),
(2, 'Jane', 'Smith', 60000.00, 'Design', 'female', 'Senior graphic designer'),
(3, 'Alice', 'Brown', 48000.00, 'HR', 'female', 'HR specialist with expertise in recruitment'),
(4, 'Bob', 'Johnson', 52000.00, 'Finance', 'male', 'Accountant with a keen eye for detail'),
(5, 'Charlie', 'Davis', 65000.00, 'IT', 'male', 'Network engineer'),
(6, 'Donna', 'Evans', 53000.00, 'Sales', 'female', 'Top salesperson for the west region'),
(7, 'Edward', 'Clark', 62000.00, 'Marketing', 'male', 'Digital marketing strategist'),
(8, 'Fiona', 'Baker', 57000.00, 'Sales', 'female', 'Sales executive with expertise in B2B sales'),
(9, 'George', 'Allen', 71000.00, 'IT', 'male', 'Database administrator'),
(10, 'Hannah', 'Adams', 59000.00, 'HR', 'female', 'Employee relations specialist'),
(11, 'Ian', 'Jones', 64000.00, 'Finance', 'male', 'Financial analyst with a focus on stock market'),
(12, 'Jenna', 'Campbell', 67000.00, 'Design', 'female', 'UX/UI designer with a modern approach'),
(13, 'Kyle', 'Roberts', 69000.00, 'IT', 'male', 'Software tester'),
(14, 'Linda', 'Mitchell', 60000.00, 'Marketing', 'female', 'Content marketer with SEO expertise'),
(15, 'Mike', 'Phillips', 58000.00, 'Finance', 'male', 'Tax consultant'),
(16, 'Nina', 'Richardson', 56000.00, 'Sales', 'female', 'Sales executive with a background in IT products'),
(17, 'Oscar', 'Hughes', 63000.00, 'IT', 'male', 'Front-end developer'),
(18, 'Patty', 'Turner', 54000.00, 'HR', 'female', 'Training and development manager'),
(19, 'Quentin', 'Peters', 61000.00, 'Marketing', 'male', 'Market research analyst'),
(20, 'Rita', 'Carter', 50000.00, 'Sales', 'female', 'Customer relations manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`OrgzNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
