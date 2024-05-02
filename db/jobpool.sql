-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 07:01 AM
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
(3, 'einfochip', 'mumbai', 'sys engg', '30000', '1522671593Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf', 1),
(4, 'einfochip', 'banglore', 'developer', '3lakh', '1522764413registration.pdf', 1);

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
(9, 3, 'BE', 'solapur', 'WIT', 570, '75', '1522757624Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf'),
(10, 4, '10th', 'Kolhapur board', 'New English School', 591, '92.55', '1522763722registration.pdf'),
(11, 4, '12th', 'Kolhapur board', 'MRJC', 456, '75.54', '1522763761registration.pdf'),
(12, 4, 'BE', 'Solapur University', 'WIT', 1250, '70.55', '1522763815registration.pdf'),
(13, 5, '10th', 'Takshashila sen. school', 'takshashila sen school', 350, '70', '1523023924CRC_ResumePreparation.pdf'),
(14, 5, '12th', 'Takshashila sen. school', 'takshashila', 400, '80', '1523023956CRC_ResumePreparation.pdf'),
(15, 5, 'BE', 'solapur ', 'wit', 400, '68', '1523024011CRC_ResumePreparation.pdf'),
(16, 7, '10th', 'rajasthan board', 'Hind Zinc School', 548, '84', '1523284934CRC_ResumePreparation.pdf'),
(17, 7, '12th', 'rajasthan board', 'arihan sr. sec. school', 584, '75', '1523285333CRC_ResumePreparation.pdf'),
(18, 7, 'BE', 'solapur university', 'WIT college', 584, '84', '1523285430CRC_ResumePreparation.pdf'),
(19, 8, '10th', 'ssc', 'shinde', 67, '68', '1643888033dose2.pdf'),
(20, 8, '12th', 'hsc', 'hgj', 78, '87', '1643888067e4664977fa827291f2f159f42d13ed18.pdf'),
(21, 8, 'BE', 'solapur', 'orchid', 89, '90', '1643888105dose2.pdf');

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
(1, 1, 1, 'selected on project and communication ', '1522756630'),
(2, 4, 1, 'good', '1522764306'),
(3, 5, 2, 'best', '1523024308');

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

CREATE TABLE `tpo` (
  `tpo_id` int(10) NOT NULL,
  `tpo_name` varchar(200) NOT NULL,
  `tpo_pass` varchar(500) NOT NULL,
  `tpo_salt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo`
--

INSERT INTO `tpo` (`tpo_id`, `tpo_name`, `tpo_pass`, `tpo_salt`) VALUES
(1, 'tpo', 'e10adc3949ba59abbe56e057f20f883e', '1b746ba38415ba184541541e0d4941d9d0695e37d2ae6799d34a9c0afe5e12bf17de8d7465159e965aa2710ddfaa7c8bf3cdd0a5b19680cd2b9253f0a0a7814e');

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
  `enroll` bigint(15) NOT NULL,
  `dob` varchar(100) NOT NULL,
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

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_pass`, `u_contact`, `enroll`, `dob`, `u_salt`, `u_email2`, `location`, `mobno`, `keyskills`, `status`, `resume`, `photo`, `flag`) VALUES
(1, 'manali', 'manali@g.c', '$2y$10$MrbyYzLuhik4V3J/m96IHut2T1QddrB.otheKGzipHIQPY8A1agXe', 987654321, 0, '', '18567aaca99ca0b1f98344c8415b4d73d4e6b32e6bfb34eeac5f3f7fb710bacb106f3e8acf2d36d66e7c8382f25224fe3efadadc5eac0a3a9f84bf374d041cfc', 'map@g.c', 'solapur', 9876543210, 'c,cpp,php', 'student', '1522656533Beti Bachao Beti Padhao Scheme.pdf', '1522656533images (1).jpg', 5),
(2, 'neha', 'neha@g.c', '$2y$10$26fBSPNZYAhQDskbUM4GdONBGCZSG2D5hI2jBKucH6Wn0TaC5eZ1q', 987654322, 0, '', '834fc2f177435b77d02160e495f92978461d6a7f7fa11b3e5df675140c53c239cadbc17b91bc71583bca09642796c8c603a16aaf60421c00fbd0ce43989d015c', 'neha123@g.c', 'sp', 9123456780, 'php', 'employee', '1522658038Capacity Building to Enhance Competitiveness of Indian Agriculture and Registration of Organic ProductsAbroad.pdf', '1522658038Screenshot_2017-12-24-11-53-28.png', 4),
(3, 'pushkar', 'pushkar@g.c', '$2y$10$0mVtPN3z1X7yJV.oUwgAt.oWPCRjYew7AwwKe30zGvsRn4vLPq376', 9876543211, 0, '', '607ece0445b5ff545e5faf5120b94d317dc927286118e947fa63d5a972c03c6f7c933d0e0effba729a4e47b864ae97c117cb67e4ebaec98fa60aa5d0a9d92aa0', 'p.a.p@gmail.com', 'sp', 9876543212, 'c,cpp,php,java', 'student', '1522757515Beti Bachao Beti Padhao Scheme.pdf', '1522757515hritik.png', 4),
(4, 'Prajakta', 'prajaktashah96@gmail.com', '$2y$10$1OZqKGXNypU6E5U0/azJleI0/q0uNJaI/s4iMsVr0EjruJCVwWP1a', 8888906566, 0, '', '5436de6c25595c8ad2264a0dc580a9502005eed2bdfba40d7e1133a0a7d814f28dbfca51d66e2b46342b90e62b3e8921d8ca9255828e23628947f8ba53664c72', 'prajaktashah96@gmail.com', 'Solapur', 8888906566, 'c, c++, java, php', 'student', '1522763631registration.pdf', '1522763631user1.png', 5),
(5, 'atendrajain13', 'atendrajain13@gmail.com', '$2y$10$MrbyYzLuhik4V3J/m96IHut2T1QddrB.otheKGzipHIQPY8A1agXe', 7898803537, 0, '', '4b41238ae8378c4e37407d0fb96c125e9d4990ea54884759419cecde9c20658986e0b81c63095c0acd5768642086d569faeb7a80ef56a0516ee1622542889236', 'atendrajain13@gmail.com', 'Solapur', 7898803537, 'java,php', 'student', '1523023837CRC_ResumePreparation.pdf', '15230238371522952433download (3).jpg', 5),
(6, '', '', '$2y$10$yyr7H4JPTZPluAtbxWJPYOcHEGQbrMbTJiTP/GbLGUVqgosrrDGWq', 0, 0, '', '', '', '', 0, '', '', '', '', 0),
(7, 'rajesh katare', 'rajesh.katare9@gmail.com', '$2y$10$blDlsQxjCkjdVRf5Ic9cKu9QY/cqJttMDottIE65/qZk9cytqm1dm', 8007026979, 0, '', 'a387e106404fbff809fdd3e551718984cdfac9feaaf8b22e9d08277b4157c42e29a979145af52d5ea3fc2e89b53504f689ac1f493d295be3b6bdaf8794f89374', 'bchirag07@gmail.com', 'solapur', 9468631031, 'java,php', 'student', '1523284488CRC_ResumePreparation.pdf', '1523284488img-07.jpg', 4),
(8, 'adarsh', 'adarsh@gmail.com', '$2y$10$yMZd.FacMs8kaHAgOQdsV.TdGmKgDkNHSzB0yb6BbQMqxfVg/3mUW', 7777777777, 5778999, '2022-02-24', '576ca67ab98c97c42474a85817b020055d43582825698dbb79b89e6ffb0c49f6cde433a1012e6f226a72364bc6fcbf41d3fa2bca347444141e98901c9769c9e6', 'gharkul', 'solapur', 777777777, 'php', 'student', '1643888004dose2.pdf', '1643888004logo.png', 4);

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
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `exp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tpo`
--
ALTER TABLE `tpo`
  MODIFY `tpo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
