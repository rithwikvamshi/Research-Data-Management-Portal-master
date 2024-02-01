-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2019 at 06:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `cabino` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `name`, `username`, `password`, `phoneno`, `email`, `designation`, `cabino`, `school`) VALUES
(1, 'Rtihwik Vamshi', 'rithwikvamshi', 'vamshi', '9154900079', 'rithwikvamshirv@gmail.com', 'Professor', '311-A23', 'Scope'),
(2, 'Archana T', 'archana', 'archana', '9876543210', 'archana.t@vit.ac.in', 'Assistant professor(senior)', '310-13A', 'Scope'),
(3, 'Abhinav Bande', 'abhinav', 'abhinav', '9345394378', 'abhinavbande@gmail.com', 'Professor', '412-A32', 'Scope'),
(4, 'Manoov R', 'manoov', 'manoov', '9456738657', 'manoorv@vit.ac.in', 'Assistant Professor', '212', 'Scope');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `employeeid` int(20) NOT NULL,
  `researchid` int(20) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `title` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`employeeid`, `researchid`, `startdate`, `enddate`, `title`, `status`) VALUES
(2, 4, '2019-03-16', '2019-04-12', 'Graph-Based Data Mining', 'completed'),
(2, 5, '2019-03-09', '2019-04-27', 'Web Engineering: a New Discipline for Development of Web-Based Systems', 'completed'),
(1, 8, '2019-03-22', '2019-03-30', 'Sign digit recognition', 'In progress'),
(2, 11, '2019-10-08', '2019-10-30', 'Cloud Computing Security Threats and Responses', 'In progress'),
(2, 15, '2019-07-09', '2019-12-13', 'Cloud Hooks: Security and Privacy Issues in Cloud Computing', 'Completed'),
(1, 16, '2019-06-06', '2020-05-21', 'Sign Language Recognition and Translation with Kinect', 'Completed'),
(1, 18, '2018-10-10', '2019-10-19', 'Color-based hands tracking system for sign language recognition', 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `employeeid` (`employeeid`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`researchid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `researchid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
