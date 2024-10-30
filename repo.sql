-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 10:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Yunus Isah', 'yunusisah123@gmail.com', '12345', '2023-06-06 06:16:13'),
(2, 'admin', 'admin@gmail.com', '12345', '2023-06-13 12:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `supervisor_name` varchar(50) NOT NULL,
  `project_year` date NOT NULL,
  `file` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`id`, `title`, `student_name`, `supervisor_name`, `project_year`, `file`, `create_at`) VALUES
(3, 'Design and implementation of Repo', 'Aminu Aliyu Bello', 'Prof. Abdulwahad Lawal', '2023-06-08', '836-ADEBESIN TOBI TOSIN.pdf', '2023-06-08 10:20:57'),
(4, 'design and implementation of project repository for final year students pdf files', 'Aminu Aliyu', 'Prof. Abdulwahad Lawal', '1999-02-03', '8030-certificate.pdf', '2023-06-13 12:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_tbl`
--

CREATE TABLE `supervisor_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor_tbl`
--

INSERT INTO `supervisor_tbl` (`id`, `staff_id`, `name`, `email`, `password`, `created_at`) VALUES
(2, '74737', 'Aliyu Aminu Bello', 'amin@gmail.com', '12345', '2023-06-08 10:18:31'),
(3, '123', 'Yunus', 'umar@gmail.com', '12345', '2023-06-08 12:50:36'),
(4, '1111', 'Yunus Isah ', 'umaradamuharande@gmail.com', '12345', '2023-06-13 12:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_tbl`
--
ALTER TABLE `supervisor_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisor_tbl`
--
ALTER TABLE `supervisor_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
