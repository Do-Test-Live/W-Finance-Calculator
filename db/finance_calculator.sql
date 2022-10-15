-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 10:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan_apply`
--

CREATE TABLE `loan_apply` (
  `id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `identy_num` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `contact_num` varchar(25) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `applicant_type` varchar(100) NOT NULL,
  `loan_amount` double(10,2) NOT NULL,
  `other_info` varchar(1500) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_apply`
--

INSERT INTO `loan_apply` (`id`, `c_name`, `e_name`, `identy_num`, `dob`, `contact_num`, `pay_method`, `applicant_type`, `loan_amount`, `other_info`, `inserted_at`, `updated_at`) VALUES
(1, 'GGG', 'DDD', 'DDD', '2022-10-05', '85472552782', 'Cash', 'Existing customers', 5000.00, ' weafae  YWSr hgg ESr tys gywzag ar yzr ygwsr hsarha', '2022-10-15 13:57:53', '2022-10-15 07:57:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan_apply`
--
ALTER TABLE `loan_apply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_apply`
--
ALTER TABLE `loan_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
