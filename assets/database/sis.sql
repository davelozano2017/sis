-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 08:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `subject`, `description`) VALUES
(18, 'Activity 1', 'Activity 1'),
(19, 'Activity 2', 'Activity 2'),
(20, 'Activity 3', 'Activity 3'),
(21, 'Activity 4', 'Activity 4'),
(22, 'Activity 5', 'Activity 5');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `title`, `start`, `end`, `description`) VALUES
(3, 'Event 1', '2018-03-18', '2018-03-18', 'Event 1'),
(4, 'Event 2', '2018-03-19', '2018-03-19', 'Event 2'),
(5, 'Event 3', '2018-03-20', '2018-03-21', 'Event 3'),
(6, 'Event 4', '2018-03-22', '2018-03-26', 'Event 4'),
(7, 'Event 5', '2018-03-30', '2018-04-04', 'Event 5');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `guardian_id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `level`, `description`) VALUES
(7, 'Section 1', 'Grade 1', 'Section 1'),
(8, 'Section 2', 'Grade 1', 'Section 2'),
(9, 'Section 3', 'Grade 1', 'Section 3'),
(10, 'Section 4', 'Grade 1', 'Section 4'),
(11, 'Section 5', 'Grade 1', 'Section 5'),
(12, 'Section 1', 'Grade 2', 'Section 1'),
(13, 'Section 2', 'Grade 2', 'Section 2'),
(14, 'Section 3', 'Grade 2', 'Section 3'),
(15, 'Section 4', 'Grade 2', 'Section 4'),
(16, 'Section 5', 'Grade 2', 'Section 5'),
(17, 'Section 1', 'Grade 3', 'Section 1'),
(18, 'Section 2', 'Grade 3', 'Section 2'),
(19, 'Section 3', 'Grade 3', 'Section 3'),
(20, 'Section 4', 'Grade 3', 'Section 4'),
(21, 'Section 5', 'Grade 3', 'Section 5'),
(22, 'Section 1', 'Grade 4', 'Section 1'),
(23, 'Section 2', 'Grade 4', 'Section 2'),
(24, 'Section 3', 'Grade 4', 'Section 3'),
(25, 'Section 4', 'Grade 4', 'Section 4'),
(26, 'Section 5', 'Grade 4', 'Section 5'),
(27, 'Section 1', 'Grade 5', 'Section 1'),
(28, 'Section 2', 'Grade 5', 'Section 2'),
(29, 'Section 3', 'Grade 5', 'Section 3'),
(30, 'Section 4', 'Grade 5', 'Section 4'),
(31, 'Section 5', 'Grade 5', 'Section 5'),
(32, 'Section 1', 'Grade 6', 'Section 1'),
(33, 'Section 2', 'Grade 6', 'Section 2'),
(34, 'Section 3', 'Grade 6', 'Section 3'),
(35, 'Section 4', 'Grade 6', 'Section 4'),
(36, 'Section 5', 'Grade 6', 'Section 5'),
(37, 'Section 1', 'Grade 7', 'Section 1'),
(38, 'Section 2', 'Grade 7', 'Section 2'),
(39, 'Section 3', 'Grade 7', 'Section 3'),
(40, 'Section 4', 'Grade 7', 'Section 4'),
(41, 'Section 5', 'Grade 7', 'Section 5'),
(42, 'Section 1', 'Grade 8', 'Section 1'),
(43, 'Section 2', 'Grade 8', 'Section 2'),
(44, 'Section 3', 'Grade 8', 'Section 3'),
(45, 'Section 4', 'Grade 8', 'Section 4'),
(46, 'Section 5', 'Grade 8', 'Section 5');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `students_id` int(11) NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `guardian_id`, `LRN`, `surname`, `firstname`, `middlename`, `gender`, `contact`, `email`, `address`) VALUES
(3, 13, '100552246558', 'Cabuga', 'Jeddahlyn', 'Linzag', 'Female', '9265691158', 'cabugajeddahlyn@gmail.com', 'Maligaya Park Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjects_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjects_id`, `name`, `description`) VALUES
(3, 'Subject 1', 'Subject 1'),
(4, 'Subject 2', 'Subject 2\r\n'),
(5, 'Subject 3', 'Subject 3'),
(6, 'Subject 4', 'Subject 4'),
(7, 'Subject 5', 'Subject 5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `educational_background` varchar(1000) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `image`, `name`, `contact`, `email`, `educational_background`, `username`, `password`, `role`, `status`) VALUES
(1, '', 'John David Sadia Lozano', '95557739522', 'lozanojohndavid@gmail.com', '', 'user', '$2y$10$kLhzbN/aym2nlnFcLyIlv.k664o89apCGqmLEox0sE9E1tpURhZva', 0, 0),
(12, '', 'Adora Lozano', '9265691158', 'adoralozano@gmail.com', '', 'adora', '$2y$10$H5mkM/ihzwUDp8LZDv3ZjORvaGk9sCTSgdHit3Z7c684COibBZ9Ci', 2, 0),
(13, '', 'Mario Cabuga', '9265691158', 'mariocabuga@gmail.com', '', 'mariocabuga', '$2y$10$UCHlXU.n0gJVzGnWkhOTgusICqjy1lA7q7So4hkj8iTMHvjozXmd.', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `violations_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`violations_id`, `name`, `description`) VALUES
(2, 'Violation 1', 'Violation 1'),
(3, 'Violation 2', 'Violation 2'),
(4, 'Violation 3', 'Violation 3'),
(5, 'Violation 4', 'Violation 4'),
(6, 'Violation 5', 'Violation 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`guardian_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjects_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`violations_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `guardian_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `violations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
