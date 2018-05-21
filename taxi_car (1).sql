-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 04:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_email` varchar(100) NOT NULL,
  `b_depart` varchar(100) NOT NULL,
  `b_arrive` varchar(100) NOT NULL,
  `b_date` varchar(100) NOT NULL,
  `b_time` varchar(100) NOT NULL,
  `b_pay` varchar(100) NOT NULL,
  `b_type` varchar(100) NOT NULL,
  `b_card` varchar(100) NOT NULL,
  `b_payment` varchar(100) NOT NULL,
  `b_receive` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_name`, `b_email`, `b_depart`, `b_arrive`, `b_date`, `b_time`, `b_pay`, `b_type`, `b_card`, `b_payment`, `b_receive`) VALUES
(6, 'b f', 'bfg', 'Wilayah Persekutuan', 'Sabah', '2016-11-29', '00:00', 'Online', 'Public Bank', '576', '55', 'yes'),
(7, 'Nabilah Ruza', 'nabilahruza@gmail.com', 'Johor', 'Johor', '2016-12-07', '14:03', 'Online', 'Bank Islam', '123456', '60', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_phone` varchar(100) NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `f_msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_phone`, `f_email`, `f_msg`) VALUES
(2, 'NURFARIZAN', '1116523933', 'farizanzailani95@gmail.com', 'gbsdvxcf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(100) NOT NULL,
  `log_name` varchar(100) NOT NULL,
  `log_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `log_name`, `log_pass`) VALUES
(3, 'farizanzailani95@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `lost_property`
--

CREATE TABLE `lost_property` (
  `l_id` int(10) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `l_email` varchar(100) NOT NULL,
  `l_phone` varchar(100) NOT NULL,
  `l_add1` varchar(100) NOT NULL,
  `l_add2` varchar(100) NOT NULL,
  `l_month` varchar(100) NOT NULL,
  `l_day` varchar(100) NOT NULL,
  `l_year` varchar(100) NOT NULL,
  `l_time` varchar(100) NOT NULL,
  `l_lost` varchar(100) NOT NULL,
  `l_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_property`
--

INSERT INTO `lost_property` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_add1`, `l_add2`, `l_month`, `l_day`, `l_year`, `l_time`, `l_lost`, `l_desc`) VALUES
(3, 'ZAILANI', 'gvhg', '67657', 'LOT 2245,TAMAN SRI NAL,', 'LOT 2245,TAMAN S', 'June', '14', '657', '56t65', 'tyhfhg', ' hghcch');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_dob` varchar(100) NOT NULL,
  `r_phone` varchar(100) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_pass` varchar(100) NOT NULL,
  `r_confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `r_name`, `r_dob`, `r_phone`, `r_email`, `r_pass`, `r_confirm`) VALUES
(2, 'NURFARIZAN ZAILANI', '04-02-1995', '123331123', 'farizanzailani95@gmail.com', '12345', '12345'),
(3, 'sam', '03-12', '21415426436', 'sam@gmail.com', '123', '123'),
(4, 'Nabilah Ruza', '29-04-1996', '012-6591011', 'nabilahruza@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `lost_property`
--
ALTER TABLE `lost_property`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lost_property`
--
ALTER TABLE `lost_property`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
