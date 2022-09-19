-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 05:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rantbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `ranttable`
--

CREATE TABLE `ranttable` (
  `rantid` int(254) NOT NULL,
  `rant` text NOT NULL,
  `rdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranttable`
--

INSERT INTO `ranttable` (`rantid`, `rant`, `rdate`) VALUES
(26, 'Annnnyong tangaaa ', '01/25/2022 03:55:02 am'),
(27, 'YAWAAAAAAAA ! ', '01/25/2022 03:58:45 am'),
(1, 'We dont lose friends over politics, we lose friends over morals and values.\r\n\r\n-D.Manigo', '06/07/2022 06:00:12 am'),
(1, 'PUTANGINANG PROJECT YUNN !!! ', '06/07/2022 02:23:31 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `did` int(11) NOT NULL,
  `dfirstname` varchar(50) NOT NULL,
  `dlastname` varchar(50) NOT NULL,
  `dusername` varchar(30) NOT NULL,
  `dpassword` varchar(110) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `dgender` varchar(20) NOT NULL,
  `dnumber` varchar(20) NOT NULL,
  `demail` varchar(30) NOT NULL,
  `profilep` varchar(50) NOT NULL,
  `coverp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`did`, `dfirstname`, `dlastname`, `dusername`, `dpassword`, `daddress`, `dgender`, `dnumber`, `demail`, `profilep`, `coverp`) VALUES
(1, 'Auriel James', 'Fernandez', '@aurieljames11', '$2y$10$cR2RDVR.pAa5z7nex2KGE.I77.NlzZtYaVUvSzTbrIn17/K4DRl7e', 'Pogonlomboy Mangatarem, Pangasinan', 'Male', '09994171454', 'aurieljames11@gmail.com', 'styles/images/uploads/profile/1.jpg', 'styles/images/uploads/cover/1.jpg'),
(26, 'Chaeyoung', 'Son', '@chae', '$2y$10$wirHdls2BumRiU789iJTjuZLN0g/xMr1MoGt6SOCszVxwUwwloLEC', 'Korea', 'female', '09994171454', 'cae@gmail.com', 'styles/images/uploads/profile/26.jpeg', 'styles/images/uploads/cover/26.jpg'),
(27, 'Tzuyu', 'Chou', '@tzuyu', '$2y$10$v7AAUXofF08lfjcrExs8MOv.ekcFbA01K4Xl3BDrtGpjZK0TE6Tny', 'Korea', 'female', '09994171454', 'tzuyu@gmail.com', 'styles/images/uploads/profile/27.jpg', 'styles/images/uploads/cover/27.jpg'),
(28, 'ZANA', 'Minatozaki', '@sana', '$2y$10$J97iREaElwgJC/zS0qSLuOuS94v3CQCN.O2s.ncRB0RNKfj2dbhnC', 'Korea', 'female', '09994171454', 'sana@gmail.com', 'styles/images/uploads/profile/28.png', 'styles/images/uploads/cover/28.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
