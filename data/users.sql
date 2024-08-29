-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdte_65_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL COMMENT 'ลำดับ',
  `users_prefix` varchar(255) NOT NULL COMMENT 'คำนำหน้า',
  `users_name` varchar(255) NOT NULL COMMENT 'ชื่อจริง',
  `users_lastname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `users_mail` varchar(255) NOT NULL COMMENT 'เมล',
  `users_password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `users_date` date NOT NULL COMMENT 'วันเดือนปีเกิด',
  `users_sex` varchar(10) NOT NULL COMMENT 'เพศ',
  `users_code` varchar(30) NOT NULL COMMENT 'รหัสนักเรียน',
  `users_phone` varchar(30) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `users_add` text NOT NULL COMMENT 'ที่อยู่',
  `users_regis` datetime NOT NULL COMMENT 'วันเดือนปีเวลาที่สมัคร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับ';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
