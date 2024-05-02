-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 02:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobpool`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmpny`
--

CREATE TABLE `cmpny` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_positn` varchar(200) NOT NULL,
  `c_salary` varchar(200) NOT NULL,
  `c_criteria` text NOT NULL,
  `c_flag` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmpny`
--

INSERT INTO `cmpny` (`c_id`, `c_name`, `c_address`, `c_positn`, `c_salary`, `c_criteria`, `c_flag`) VALUES
(1, 'infosys', 'pune', 's/w engg', '27000', '1522667304Beti Bachao Beti Padhao Scheme.pdf', 1),
(2, 'wipro', 'benglore', 'tester', '20000', '1522671059Central Sector Scholarship of Top Class Education For SC students.pdf', 1),
(3, 'einfochip', 'mumbai', 'sys engg', '30000', '1522671593Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `std` varchar(500) NOT NULL,
  `university` varchar(500) NOT NULL,
  `college` varchar(500) NOT NULL,
  `marks` int(10) NOT NULL,
  `percentage` varchar(500) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `u_id`, `std`, `university`, `college`, `marks`, `percentage`, `result`) VALUES
(1, 1, '10th', 'solapur', 'S.H.N', 450, '87', '1522656583Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf'),
(2, 1, '12th', 'solapur', 'walchand', 555, '80', '1522656613Central Sector Scholarship of Top Class Education For SC students.pdf'),
(3, 1, 'BE', 'sp', 'wit', 550, '78', '1522656641Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf'),
(4, 2, '10th', 'pune', 's.h.n', 450, '70', '1522658110Central Sector Scholarship of Top Class Education For SC students.pdf'),
(5, 2, '12th', 'pune', 'walchand', 500, '75', '1522658134Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf'),
(6, 2, 'BE', 'sp', 'wit', 460, '72', '1522658159Central Sector Scholarship of Top Class Education For SC students.pdf'),
(7, 3, '10th', 'Pune', 'S.H.N.highschool', 570, '78', '1522757566Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf'),
(8, 3, '12th', 'pune', 'Walchand', 600, '80', '1522757595Central Sector Scholarship of Top Class Education For SC students.pdf'),
(9, 3, 'BE', 'solapur', 'WIT', 570, '75', '1522757624Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `exp_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `compny` varchar(200) NOT NULL,
  `dignity` varchar(200) NOT NULL,
  `years` varchar(200) NOT NULL,
  `salery` varchar(200) NOT NULL,
  `excerti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`exp_id`, `u_id`, `compny`, `dignity`, `years`, `salery`, `excerti`) VALUES
(1, 2, 'infy', 's/w engg', '1', '27000', '1522658088Beti Bachao Beti Padhao Scheme.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `r_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `comment` text NOT NULL,
  `r_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`r_id`, `u_id`, `c_id`, `comment`, `r_time`) VALUES
(1, 1, 1, 'selected on project and communication ', '1522756630');

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

CREATE TABLE `tpo` (
  `tpo_id` int(10) NOT NULL,
  `tpo_name` varchar(200) NOT NULL,
  `tpo_pass` varchar(200) NOT NULL,
  `tpo_salt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo`
--

INSERT INTO `tpo` (`tpo_id`, `tpo_name`, `tpo_pass`, `tpo_salt`) VALUES
(1, 'WIT', 'ffe8db02f84bb5eef48af176ab2f6e6b', '85d87752b8c9fa15c6e569cd88fac7edcb3a3f95ad481b133fd60a1ad2cd187f0d4cb4b46ae97eb8411a6988eb3d501d988e11454f872e5131c77c1badc99702');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_pass` varchar(200) NOT NULL,
  `u_contact` bigint(15) NOT NULL,
  `u_salt` text NOT NULL,
  `u_email2` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `mobno` bigint(10) NOT NULL,
  `keyskills` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `resume` text NOT NULL,
  `photo` text NOT NULL,
  `flag` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_pass`, `u_contact`, `u_salt`, `u_email2`, `location`, `mobno`, `keyskills`, `status`, `resume`, `photo`, `flag`) VALUES
(1, 'manali', 'manali@g.c', '$2y$10$MrbyYzLuhik4V3J/m96IHut2T1QddrB.otheKGzipHIQPY8A1agXe', 987654321, 'f752659fa940c92855029e26eb8fafba34758d273505007d1d2099ed000a55654d1a7911db46eb2ec64d7423580eac2b8560c2da8d853f6ab645b057646d3b7d', 'map@g.c', 'solapur', 9876543210, 'c,cpp,php', 'student', '1522656533Beti Bachao Beti Padhao Scheme.pdf', '1522656533images (1).jpg', 5),
(2, 'neha', 'neha@g.c', '$2y$10$26fBSPNZYAhQDskbUM4GdONBGCZSG2D5hI2jBKucH6Wn0TaC5eZ1q', 987654322, '834fc2f177435b77d02160e495f92978461d6a7f7fa11b3e5df675140c53c239cadbc17b91bc71583bca09642796c8c603a16aaf60421c00fbd0ce43989d015c', 'neha123@g.c', 'sp', 9123456780, 'php', 'employee', '1522658038Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf', '1522658038Screenshot_2017-12-24-11-53-28.png', 4),
(3, 'pushkar', 'pushkar@g.c', '$2y$10$0mVtPN3z1X7yJV.oUwgAt.oWPCRjYew7AwwKe30zGvsRn4vLPq376', 9876543211, '607ece0445b5ff545e5faf5120b94d317dc927286118e947fa63d5a972c03c6f7c933d0e0effba729a4e47b864ae97c117cb67e4ebaec98fa60aa5d0a9d92aa0', 'p.a.p@gmail.com', 'sp', 9876543212, 'c,cpp,php,java', 'student', '1522757515Beti Bachao Beti Padhao Scheme.pdf', '1522757515hritik.png', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmpny`
--
ALTER TABLE `cmpny`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tpo`
--
ALTER TABLE `tpo`
  ADD PRIMARY KEY (`tpo_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmpny`
--
ALTER TABLE `cmpny`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `exp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tpo`
--
ALTER TABLE `tpo`
  MODIFY `tpo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
