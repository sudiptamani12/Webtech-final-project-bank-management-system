-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 07:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_no` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `c_id`, `date`, `status`) VALUES
('acc-1', 'C-1', '2021-08-01', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `mobile`, `email`, `address`, `age`, `dob`, `gender`, `status`) VALUES
('A-1', 'rakib', '12345612358', 'nil@ymail.com', 'dhaka, bangladesh', '21', '2000-05-06', 'Male', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `acc_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `dob`, `age`, `mobile`, `address`, `email`, `gender`, `image`, `acc_no`, `status`) VALUES
('C-1', 'akash', '2021-08-03', '21', '654651', 'dhaka, bangladesh', 'sk@gmail.com', 'Male', '../../storage/user_image/C-1.jpg', 'acc-1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `e_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `salary` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `name`, `dob`, `salary`, `address`, `gender`, `email`, `mobile`, `status`) VALUES
('E-1', 'sakin', '2021-08-01', '12222', 'dhaka, bangladesh', 'Male', 'man@gmail.com', '12345625499', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `r_id` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `a_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `l_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `acc_no` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`l_id`, `c_id`, `acc_no`, `amount`, `remarks`) VALUES
('l-1', 'C-1', 'acc-1', '12222222', '10%'),
('l-2875039', 'C-12', 'acc-13245', '100000', '20%');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `type`, `ans`, `status`) VALUES
('A-1', '123', 'admin', 'test', 'active'),
('E-1', '123', 'employee', 'test', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `trans_history`
--

CREATE TABLE `trans_history` (
  `t_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_history`
--

INSERT INTO `trans_history` (`t_id`, `c_id`, `amount`, `date`) VALUES
('t-1', 'C-1', '12222222', '2021-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `v_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `name`, `email`, `phone`, `nid`, `status`) VALUES
('V-1', 'shumon', 'jh@gmail.com', '3245234623', '98729849', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_no`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_history`
--
ALTER TABLE `trans_history`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
