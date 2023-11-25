-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 03:23 PM
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
-- Database: `e-kaksha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `mail` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mail`, `password`) VALUES
('admin@imca.com', 'Admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `allocsub`
--

CREATE TABLE `allocsub` (
  `tid` int(50) NOT NULL,
  `sid` int(11) NOT NULL,
  `sname` varchar(54) NOT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allocsub`
--

INSERT INTO `allocsub` (`tid`, `sid`, `sname`, `sem`) VALUES
(1, 1, 'Computer Graphics', 6),
(1, 2, 'Operating System', 4),
(1, 3, 'Data Fetching', 9),
(2, 4, 'Python', 3),
(1, 6, 'Programming Using C', 0);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` bigint(255) NOT NULL,
  `fname` varbinary(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `tid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `fname`, `topic`, `sname`, `tid`) VALUES
(47, 0x5363686564756c696e672e646f6378, 'Scheduling', 'Operating System', 1),
(48, 0x4e756d65726963616c20546563686e69717565732e646f6378, 'NT', 'Computer Graphics', 1),
(49, 0x41737369676e6d656e742e646f6378, 'Assignment', 'Operating System', 1),
(50, 0x4c6561726e2048544d4c5f20456c656d656e747320616e64205374727563747572652043686561747368656574205f20436f6465636164656d792e706466, 'HTML', 'Computer Graphics', 1),
(51, 0x636f64652072657669657720616e64206d61696e74656e616e63652e646f6378, 'CR', 'Computer Graphics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(50) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `topic` varchar(225) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `tid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(225) NOT NULL,
  `tname` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `tname`) VALUES
(1, 'Semester is starting from 22/07/2022', 'Rasmita Padhi'),
(5, 'Final review of your 6th semester project is on 13/07/2022', 'admin'),
(6, 'Your Computer Graphics class is cancled for today', 'Rasmita Padhi');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(50) NOT NULL,
  `name` varchar(225) NOT NULL,
  `sem` int(2) NOT NULL,
  `link` varchar(225) DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `sem`, `link`, `time`) VALUES
(8, 'Operating System', 4, 'https//abcd.com', '08:06:00'),
(9, 'Programming Using C', 1, NULL, '00:00:00'),
(10, 'Computer Graphics', 6, 'https://meet.google.com/yrx-cenn-tov', '08:30:00'),
(12, 'Web Technology', 5, NULL, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Rasmita Padhi', 'rasmita123@gmail.com', 7658495123, 'Rasmita@1234'),
(2, 'Sam Nayak', 'sam123@gmail.com', 5896321470, 'Sam@1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `sem` int(2) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`name`, `email`, `mobile`, `id`, `sem`, `password`, `status`) VALUES
('abs', 'h@c', 12345, '123er', 0, 'ads', 'approved'),
('A Mishra', 'sanu123@gmail.com', 9861030877, '19IMCA001', 0, 'Sanu@1234', 'approved'),
('Abhisek Mishra', 'mishraabhisek14@gmail.com', 8895818595, '19IMCA003', 6, 'Abhisek@1234', 'approved'),
('trsjgxytdx', 'dhikoc@gmail', 89465, '654', 0, 'qwes', 'pending'),
('Anubhab NAyak', 'mahaguru2000@gmail.com', 7896541230, '963852741', 0, 'zxcvbnm', 'pending'),
('Lasani Prusty', 'dhikoc@gmail.com', 1234567890, '987654321', 0, 'asdfghjkl', 'pending'),
('Ashutosh Rath', 'rathashutosh11@gmail.com', 7001946020, 'sadfg7894', 0, 'Ashu@2004', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocsub`
--
ALTER TABLE `allocsub`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocsub`
--
ALTER TABLE `allocsub`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
