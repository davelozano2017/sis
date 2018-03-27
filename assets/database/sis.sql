-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 01:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

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
-- Table structure for table `assign_grades`
--

CREATE TABLE `assign_grades` (
  `assign_grades_id` int(11) NOT NULL,
  `teachers_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subjects_id` int(11) NOT NULL,
  `first` int(3) NOT NULL,
  `second` int(3) NOT NULL,
  `third` int(3) NOT NULL,
  `fourth` int(3) NOT NULL,
  `average` int(3) NOT NULL,
  `school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_grades`
--

INSERT INTO `assign_grades` (`assign_grades_id`, `teachers_id`, `students_id`, `section_id`, `subjects_id`, `first`, `second`, `third`, `fourth`, `average`, `school_year`) VALUES
(49, 16, 3, 7, 3, 100, 0, 0, 0, 0, '2017 - 2018'),
(50, 16, 4, 7, 3, 100, 100, 100, 100, 0, '2017 - 2018'),
(51, 16, 5, 7, 3, 100, 0, 0, 0, 0, '2017 - 2018'),
(52, 16, 3, 7, 5, 100, 100, 100, 100, 0, '2017 - 2018'),
(53, 16, 4, 7, 5, 100, 0, 0, 0, 0, '2017 - 2018'),
(54, 16, 5, 7, 5, 100, 100, 100, 100, 0, '2017 - 2018'),
(55, 16, 3, 7, 4, 100, 100, 100, 100, 0, '2017 - 2018'),
(56, 16, 4, 7, 4, 100, 0, 0, 0, 0, '2017 - 2018'),
(57, 16, 5, 7, 4, 100, 100, 100, 100, 0, '2017 - 2018');

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `assign_students_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `assign_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`assign_students_id`, `section_id`, `students_id`, `school_year`, `assign_status`) VALUES
(19, 7, 4, '2017 - 2018', 0),
(23, 7, 3, '2017 - 2018', 0),
(26, 7, 5, '2017 - 2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `assign_teachers`
--

CREATE TABLE `assign_teachers` (
  `assign_teachers_id` int(11) NOT NULL,
  `teachers_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subjects_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_teachers`
--

INSERT INTO `assign_teachers` (`assign_teachers_id`, `teachers_id`, `section_id`, `subjects_id`) VALUES
(47, 16, 7, 3),
(48, 16, 7, 4),
(49, 16, 7, 5),
(51, 17, 12, 3);

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
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `school_year_id` int(11) NOT NULL,
  `school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`school_year_id`, `school_year`) VALUES
(1, '2017 - 2018');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `level`, `description`) VALUES
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
  `address` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `guardian_id`, `LRN`, `surname`, `firstname`, `middlename`, `gender`, `contact`, `email`, `address`, `school_year`) VALUES
(3, 13, '100552246558', 'Cabuga', 'Jeddahlyn', 'Linzag', 'Female', '9265691158', 'cabugajeddahlyn@gmail.com', 'Maligaya Park Quezon City', '2017 - 2018'),
(4, 12, '100212112121', 'Lozano', 'John Rey', 'Sadia', 'Male', '9555115522', 'johnreylozano@gmail.com', 'Holy Spirit Quezon City', '2017 - 2018'),
(5, 13, '100355485216', 'Cabuga', 'Mariss', 'Linzag', 'Female', '9265691158', 'marisscabuga@gmail.com', 'Maligaya Park Quezon City', '2017 - 2018'),
(6, 12, '100233665533', 'Lozano', 'David James ', 'Sadia', 'Male', '09221112211', 'davidjames@gmail.com', 'Quezon City', '2017 - 2018');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjects_id` int(11) NOT NULL,
  `subjects_name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjects_id`, `subjects_name`, `description`) VALUES
(3, 'Mother Tongue', 'Mother Tongue'),
(4, 'Filipino', 'Filipino'),
(5, 'English', 'English'),
(6, 'Mathematics', 'Mathematics'),
(7, 'Science &amp; Health	', 'Science &amp; Health	'),
(8, 'Sibika at Kultura', 'Sibika at Kultura'),
(9, 'MSEP', 'MSEP'),
(10, 'Christian Living', 'Christian Living'),
(11, 'Computer Education', 'Computer Education');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `LRNN` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `educational_background` varchar(1000) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `LRNN`, `image`, `name`, `contact`, `email`, `gender`, `educational_background`, `username`, `password`, `role`, `status`) VALUES
(1, '', 'profile.png', 'John David Sadia Lozano', '95557739522', 'lozanojohndavid@gmail.com', 'Male', '', 'user', '$2y$10$toJr7Hf7/Nqh/0eVrvWTwuU7FwI20tpAsb2jWpKV8vTXVPhrYy3Gy', 0, 0),
(12, '', '29314236_1612201735523472_798227871054168064_o.png', 'Adora Lozano', '9265691158', 'adoralozano@gmail.com', 'Female', '', 'adora', '$2y$10$oo2exxLphukoduH3mnE7l.TQGbNYCXPVtku8R/u79/hrFaugoSxPO', 2, 0),
(13, '', '', 'Mario Cabuga', '9265691158', 'mariocabuga@gmail.com', 'Male', '', 'mariocabuga', '$2y$10$UCHlXU.n0gJVzGnWkhOTgusICqjy1lA7q7So4hkj8iTMHvjozXmd.', 2, 0),
(16, '', '26229924_10212713287919615_1832668951219208602_n.jpg', 'Sajer Broncano', '09555773922', 'sajerbroncano@gmail.com', 'Male', 'lorem', 'sajer', '$2y$10$p3lQ2yohynZBq9c1jx7nq.n1p/C7j2Z22YL83vtv9YWJcCmg6uO3O', 1, 0),
(17, '', '12439460_1107630092605028_8197726260371805381_n.jpg', 'Arjeth Pascual', '091255448884', 'arjethpascual.23.ap@gmail.com', 'Male', 'lorem', 'arjeth', '$2y$10$nWzeWXUhztWDI8JuXhpLqOq/epKvic6VErtj6k3xUmkq6HwCMB9Aa', 1, 0),
(18, '', '15966257_1353966278001605_5752146725594554274_n.jpg', 'Jade Batal', '09125544778', 'jadebatal@gmail.com', 'Male', 'lorem', 'jade', '$2y$10$ccs7e/BS9o8J6PGHDk6c8u0j2lFSgJ/h8PQdIG0SJffm1U1m/VL.m', 1, 0),
(19, '', '', 'Angelica Bawe Capuchino', '09221155445', 'angelica@gmail.com', 'Female', 'Graduate', 'angelica', '$2y$10$O.vMTCsItwzPj11j9hUgIeQnbx/tubJs02yPP5tTei.bICgZbFkA2', 1, 0),
(20, '100552246558', '', 'Jeddahlyn Linzag Cabuga', '9265691158', 'cabugajeddahlyn@gmail.com', 'Female', '', 'jeddah', '$2y$10$7DXokHkNljBMpua0N/F7..uS1IErfK4j4VRrb/bS01TdqIDTwpRii', 3, 0),
(22, '100212112121', '', 'John Rey Sadia Lozano', '09555115522', 'johnreylozano@gmail.com', 'Male', '', 'johnrey', '$2y$10$p5jORXgGyKTYWmrQZSF7tOUwDN0xxQxrHG9ePKb0GzI3wgQl0zf86', 3, 0),
(23, '100233665533', '', 'David James  Sadia Lozano', '09221112211', 'davidjames@gmail.com', '', '', 'davidjames', '$2y$10$0n6yHXDhE6BpI5DUWXWIbuR8DMI8YzJvF79T7pIiHP81PYEHij/py', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `violations_id` int(11) NOT NULL,
  `LRN` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `school_year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`violations_id`, `LRN`, `description`, `school_year`) VALUES
(12, '100552246558', 'test', '2017 - 2018'),
(13, '100552246558', 'asdasdas', '2017 - 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `assign_grades`
--
ALTER TABLE `assign_grades`
  ADD PRIMARY KEY (`assign_grades_id`);

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`assign_students_id`);

--
-- Indexes for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  ADD PRIMARY KEY (`assign_teachers_id`);

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
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`school_year_id`);

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
-- AUTO_INCREMENT for table `assign_grades`
--
ALTER TABLE `assign_grades`
  MODIFY `assign_grades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `assign_students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  MODIFY `assign_teachers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `school_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `violations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
