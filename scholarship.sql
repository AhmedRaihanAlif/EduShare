-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 01:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `serial_number` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagory_list`
--

CREATE TABLE `catagory_list` (
  `catagory_id` int(11) NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `no_of_catagory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
('ca', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `education_list`
--

CREATE TABLE `education_list` (
  `serial_number` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `ielts_score` varchar(255) NOT NULL,
  `gre_score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_list`
--

INSERT INTO `education_list` (`serial_number`, `student_name`, `university_name`, `dept`, `cgpa`, `ielts_score`, `gre_score`) VALUES
(1, 'Samia Ahmed Mim', 'United International University', 'EEE', '3.5', '6.5', 'Not Given'),
(2, 'Ahmed Raihan Alif', 'NSU', 'CSE', '3.0', '5.5', 'Not Given'),
(16, 'Salam Ahmed', 'Brac University', 'CSE', '3.5', '6.5', '400'),
(17, 'Sajia Islam', 'Ulab', 'CSE', '3.5', '6.5', 'Not Given'),
(18, 'Kalam', 'NSU', 'CSE', '3.5', '6.5', 'Not Given');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `full_name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`full_name`, `fname`, `pass`, `email`, `phonenumber`, `serial_number`, `passcode`) VALUES
('Ahmed Raihan Alif', 'Md.Abdul Baset', '2345', 'ahmedraihanalif@gmail.com', '01533581070', 1, 'scholarworld.com'),
('Anik Hasan', 'Md.Abdul Hakim', '123@', 'anik@gmail.com', '01533583375', 7, 'scholarworld.com');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_posts`
--

CREATE TABLE `scholarship_posts` (
  `serial_number` int(11) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_session` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `minimum_cgpa` varchar(255) NOT NULL,
  `minimum_ielts_score` varchar(255) NOT NULL,
  `minimum_gre_score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship_posts`
--

INSERT INTO `scholarship_posts` (`serial_number`, `university_name`, `catagory_name`, `post_date`, `post_session`, `deadline`, `minimum_cgpa`, `minimum_ielts_score`, `minimum_gre_score`) VALUES
(1, 'Canada University', 'CSE', '20212022', 'Summer22', '20232022', '3.5', '6.5', '200');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_posts_extra`
--

CREATE TABLE `scholarship_posts_extra` (
  `serial_number` int(11) NOT NULL,
  `minimum_cgpa` varchar(255) NOT NULL,
  `minimum_ielts` varchar(255) NOT NULL,
  `minimum_gre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship_posts_extra`
--

INSERT INTO `scholarship_posts_extra` (`serial_number`, `minimum_cgpa`, `minimum_ielts`, `minimum_gre`) VALUES
(1, '2.5', '6.0', '150'),
(2, '3.0', '6.0', '200');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `serial_number` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_mname` varchar(255) NOT NULL,
  `student_school` varchar(255) NOT NULL,
  `student_college` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_father_income` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`serial_number`, `student_name`, `student_fname`, `student_mname`, `student_school`, `student_college`, `student_address`, `student_father_income`) VALUES
(1, 'Samia Ahmed Mim', 'Md.Ahmed Hossain', 'Rebeka Sultana', 'Narsingdi govt. girls high school', 'Scholastica Model College', 'Narsingdi Sadar', '1200000'),
(2, 'Ahmed Raihan Alif', 'Md.Abdul Baset', 'Yesrin Akhter', 'Ideal School And College', 'Dhaka City College', 'Basaboo,Baddhomondir', '2300000'),
(6, 'Anik Mahabub', 'Md.Abdul Hakim', 'Noor e Begum', 'Abdul Kader Molla School', 'Dhaka College', 'Lalmatia,123Road,1121', '12000000'),
(10, 'Asif', 'Md.LATIF', 'Noor e Begum', 'Abdul Kader Molla School', 'Imperial College', 'Basaboo,Baddhomondir', '12000000'),
(11, 'Salam Ahmed', 'Md.Gias Uddin', 'Salma Begum', 'Holy Crossed School', 'Residential College', '53,Salambagh', '23000000'),
(12, 'Sajia Islam', 'Ahmed Hossain', 'Rokeya Begum', 'Norsingdi Girls school', 'Norsingdi City College', 'Norsingdi', '23000000'),
(13, 'Kalam', 'Abul', 'segun', 'Abs school', 'Imperial College', '53,Salambagh', '12000000');

-- --------------------------------------------------------

--
-- Table structure for table `university_details`
--

CREATE TABLE `university_details` (
  `serial_number` int(11) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `university_dept` varchar(255) NOT NULL,
  `university_semesterfee` varchar(255) NOT NULL,
  `university_mastersfee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_details`
--

INSERT INTO `university_details` (`serial_number`, `university_name`, `university_dept`, `university_semesterfee`, `university_mastersfee`) VALUES
(1, 'Canada University', 'CSE', '8000000', '500000'),
(2, 'Toronto University', 'EEE', '230000', '430000');

-- --------------------------------------------------------

--
-- Table structure for table `university_locations`
--

CREATE TABLE `university_locations` (
  `serial_number` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_province` varchar(255) NOT NULL,
  `country_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_locations`
--

INSERT INTO `university_locations` (`serial_number`, `postal_code`, `city_name`, `state_province`, `country_id`) VALUES
(1, 3412, 'Toronto', 'Mesala', 'ca'),
(2, 2345, 'Alaska', 'Tor', 'ca');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `serial_number` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`serial_number`, `full_name`, `username`, `pass`, `email`, `country`) VALUES
(1, 'Ahmed Raihan Alif', 'Aaliferror', '45gt@we', 'raihanalifuiu@gmail.com', 'Bangladesh'),
(4, 'Samia Ahmed', 'alif', 'samia@123', 'samiaahmed00555@gmail.com', 'Bangladesh'),
(5, 'Samia Ahmed', 'alif', 'samia@', 'samiaahmed00555@gmail.com', 'Bangladesh'),
(6, 'Tazkia Tasnim', 'tazkia', 'tazkiabahar12@q', 'tazkiatasnimbahar@gmail.com', 'Bangladesh'),
(7, 'Anik Hasan', 'anik', 'anik123@gmail.com', 'anik@gmail.com', 'Bangladesh'),
(8, 'Salam Ahmed', 'salam', 'salam123', 'salam@gmail.com', 'Bangladesh'),
(9, 'Sajia Islam ', 'auni', 'auni12345', 'auni@gmail.com', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `catagory_list`
--
ALTER TABLE `catagory_list`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `education_list`
--
ALTER TABLE `education_list`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `scholarship_posts`
--
ALTER TABLE `scholarship_posts`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `scholarship_posts_extra`
--
ALTER TABLE `scholarship_posts_extra`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `university_details`
--
ALTER TABLE `university_details`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `university_locations`
--
ALTER TABLE `university_locations`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`serial_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagory_list`
--
ALTER TABLE `catagory_list`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_list`
--
ALTER TABLE `education_list`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scholarship_posts`
--
ALTER TABLE `scholarship_posts`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `scholarship_posts_extra`
--
ALTER TABLE `scholarship_posts_extra`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `university_details`
--
ALTER TABLE `university_details`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `university_locations`
--
ALTER TABLE `university_locations`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
