-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 07:17 PM
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
  `LRN` varchar(25) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `LRN`, `activity`, `description`) VALUES
(23, '100552246558', 'aasda', 'asdasdads'),
(24, '100552246558', 'asdad', 'asdasd'),
(25, '100552246558', 'asdasd', 'asdasdasd'),
(26, '100355485216', 'adasd', 'asdads'),
(27, '100355485216', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `assign_awards`
--

CREATE TABLE `assign_awards` (
  `awards_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `guardians_id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL,
  `fourth` varchar(255) NOT NULL,
  `s_y` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_awards`
--

INSERT INTO `assign_awards` (`awards_id`, `stud_id`, `guardians_id`, `first`, `second`, `third`, `fourth`, `s_y`) VALUES
(6, 9, 34, 'Best in first', 'Best in second', 'Best in third', 'Best in fourth', '');

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
  `sy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(25, 4, 7, '2017 - 2018', 0),
(26, 6, 7, '2018 - 2019', 0),
(27, 9, 7, '2019 - 2020', 0),
(28, 10, 7, '2020 - 2021', 0),
(29, 12, 7, '2021 - 2022', 0),
(30, 14, 7, '2022 - 2023', 0);

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
(52, 24, 4, 3),
(53, 24, 4, 4),
(54, 24, 4, 5),
(55, 24, 4, 6),
(56, 24, 4, 7),
(57, 24, 4, 8),
(58, 24, 4, 9),
(59, 24, 4, 10),
(60, 24, 4, 11);

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
(7, 'Event 5', '2018-03-30', '2018-04-04', 'Event 5'),
(8, 'sss', '2018-04-24', '2018-04-22', '22'),
(10, 'aaaa', '2018-04-28', '2018-04-29', 'asdasdasd');

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
(1, '2022 - 2023');

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
(1, 'Nursery', 'Nursery', 'Nursery'),
(2, 'Kinder', 'Kinder', 'Kinder'),
(3, 'Preparatory', 'Preparatory', 'Preparatory'),
(4, 'Matthew', 'Grade 1', 'Matthew'),
(5, 'Mark', 'Grade 1', 'Mark'),
(6, 'Luke', 'Grade 2', 'Luke'),
(7, 'John', 'Grade 2', 'John'),
(8, 'Acts', 'Grade 3', 'Acts'),
(9, 'Romans', 'Grade 3', 'Romans'),
(10, 'Corinthians', 'Grade 4', 'Corinthians'),
(11, 'Galatians', 'Grade 4', 'Galatians'),
(12, 'Philippians', 'Grade 5', 'Philippians'),
(13, 'Ephesians', 'Grade 5', 'Ephesians'),
(14, 'Colossians', 'Grade 6', 'Colossians'),
(15, 'Timothy', 'Grade 7', 'Timothy'),
(16, 'Philemon', 'Grade 8', 'Philemon'),
(17, 'James', 'Grade 9', 'James'),
(18, 'Peter', 'Grade 10', 'Peter'),
(19, 'Genesis', 'Grade 11', 'Genesis'),
(20, 'Exodus', 'Grade 11', 'Exodus'),
(21, 'Deuteronomy', 'Grade 12', 'Deuteronomy');

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
  `school_year` varchar(255) NOT NULL,
  `stats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `guardian_id`, `LRN`, `surname`, `firstname`, `middlename`, `gender`, `contact`, `email`, `address`, `school_year`, `stats`) VALUES
(7, 35, '100554422779', 'Ocampo', 'Lorenzo Adam', 'P.', 'Male', '09991790616', 'a@aa.co', '35 a. Bonifacio St. Mendez, Cavite', '2017 - 2018', 1),
(9, 34, '100221155118', 'Almanzor', 'Mark Xander', '', 'Male', '09274599427', '', 'Market Site Galicia 2, Mendez Cavite', '2017 - 2018', 0),
(10, 36, '100225511515', 'Marquez', 'Godwin Pius', 'A.', 'Male', '09178616373', '', '063 Balagbag Ma. Kahoy LejosIndang ,Cavite', '2017 - 2018', 0),
(11, 37, '100336699882', 'Pe&ntilde;alba', 'David', '', 'Male', '09173442947', '', '105 panungyan II Mendez, Cavite', '2017 - 2018', 0),
(12, 38, '100336644771', 'Tiania', 'Joaquin Ynigo', '', 'Male', '09196578562', '', '67 Patutong Malaki North tag. City', '2017 - 2018', 0);

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
(20, '100552246558', '', 'Jeddahlyn Linzag Cabuga', '9265691158', 'cabugajeddahlyn@gmail.com', 'Female', '', 'jeddah', '$2y$10$XXwJbVNvcvQXve2ylNpCXenNvJVcQNyCv.rUxQfNyXGfbBLKY7DoG', 3, 0),
(22, '100212112121', '', 'John Rey Sadia Lozano', '09555115522', 'johnreylozano@gmail.com', 'Male', '', 'johnrey', '$2y$10$p5jORXgGyKTYWmrQZSF7tOUwDN0xxQxrHG9ePKb0GzI3wgQl0zf86', 3, 0),
(23, '100233665533', '', 'David James  Sadia Lozano', '09221112211', 'davidjames@gmail.com', '', '', 'davidjames', '$2y$10$0n6yHXDhE6BpI5DUWXWIbuR8DMI8YzJvF79T7pIiHP81PYEHij/py', 3, 0),
(24, '', '', 'Gilan R. Avelida ', '0999579123', 'ghilanguro@gmai.com', '', 'unknown', 'Gilan', '$2y$10$giLBGpm.IDuYqHHc4w17Su0wX1/jakiMpsKtKEeeVFSiSo1VmPPi2', 1, 0),
(25, '', '', 'Whallen Fijer Pasco ', '09184673877', 'teacherwhallen@gmail.com', '', 'unknown', 'Whallen', '$2y$10$43PoVy5xxJTgDj3mY.srxOuQxZJzVIpGg/hqUgoXuZ6cPqjT.ire2', 1, 0),
(26, '', '', 'Myma P. Deo ', '09193351935', 'myrnadeo@yahoo.com', '', 'unknown', 'Myma', '$2y$10$H.6sAgR1ibYZKFjh6CYJI.oZyZ3BJi/wdajU8YGWodQ/0KZT48tB.', 1, 0),
(27, '', '', 'Mirasol L. Dimaranan', '09393857525', 'lala_boyet@yahoo.com', '', 'unknown', 'Mirasol', '$2y$10$lw2ubgbvHBnAOTLpoyDXq.CiQEtkf.YmJ8Khvfa0siSod/FxGsmWq', 1, 0),
(28, '', '', 'Aldrin D. Balagosa ', '09051441271', 'aldrin.adghie.balagosa@gmail.com', '', 'unknown', 'Aldrin', '$2y$10$pe6vX.M3fk2ji.hIh4Q/E.9DYDA0oeJ/bEOyhOaS9jAZnbX6.ocrS', 1, 0),
(29, '', '', 'Rhomel Bong L. Dionisio', '09059521883', 'arhomdionisio@gmail.com', '', 'unknown', 'Rhomel', '$2y$10$.QeduJpICEfkqQsSQ5BC.uDod25tRDdr1STorScYL6jjTBFnFu/HO', 1, 0),
(30, '', '', 'Mary Anne C. Maraan ', '09778491826', 'maraanmaryanne@gmail.com', '', 'unknown', 'Mary', '$2y$10$o6KN.fDUtRRnU3pqh78i9u4Asm7HH/nrpmZ.D0Jpjgh55sNUHl2qK', 1, 0),
(31, '', '', 'Arni Claire I. Mendoza', '09493665326', 'yahseykiluwa@yahoo.com', '', 'unknown', 'Arni', '$2y$10$1gpaAeD0sJwZXNOLSyGhd.mVIphYUqWjBTFlhtfC5Ds/bYN306rty', 1, 0),
(32, '', '', 'Marielle Louise V. Galarde', '09553447869', 'mariellelouise13@gmail.com', '', 'unknown', 'Marielle', '$2y$10$LKWibKC08qq1jRCp3c.pj.304eJi0Q.gyW7V0kZUdyZJxIINwhzRe', 1, 0),
(33, '', '', 'Annie M. Novicio', '09298121953', 'manitay0407@gmail.com', '', 'unknown', 'Annie', '$2y$10$YGjIEwHm8yqjXqs2yMt4TOvVCBXVYHKeezOvmnE5r8p4UomskoTjy', 1, 0),
(34, '', '', 'Alvin Almanzor', '09274599427', 'alvinalmanzor@yahoo.com', '', '', 'Alvin', '$2y$10$6ypI7TJz7Alub0vO7QcQ0.g0svozGReyONxRMT5H7/uYM9TksiDJ6', 2, 0),
(35, '', '', 'Adelmo Ocampo', '09991790616', 'adelmoocampo@yahoo.com', 'Male', '', 'Adelmo', '$2y$10$zwFhvuUMeh/hfOyUIqlB/ummwZ8vpNQ8Fucmr/CByJC/05qGnsbL.', 2, 0),
(36, '', '', 'Jay Marquez', '09178616373', 'jaymarquez@yahoo.com', '', '', 'Jay', '$2y$10$zxsWDEhHBAR6SNRp70VCRe0JikFkT4jDOdtua2/M7PL9DEJeJagPm', 2, 0),
(37, '', '', 'Edgar Pe&ntilde;alba', '09173442947', 'edgarpe&ntilde;alba@yahoo.com', '', '', 'Edgar', '$2y$10$bJn28dW/dvl5RcBpr2Z8SufvBjrAaIH8Q5WTCLBT5QG0ZxcYMJcWe', 2, 0),
(38, '', '', 'Melvin Tiania', '09196578562', 'melvintiania@yahoo.com', '', '', 'Melvin', '$2y$10$iQVCWsAbIELpr37Xslek1uJ0uOYFC/aL4Lu8o3HwQEUPOWROVZ.52', 2, 0);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `assign_awards`
--
ALTER TABLE `assign_awards`
  ADD PRIMARY KEY (`awards_id`);

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
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `assign_awards`
--
ALTER TABLE `assign_awards`
  MODIFY `awards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assign_grades`
--
ALTER TABLE `assign_grades`
  MODIFY `assign_grades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `assign_students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  MODIFY `assign_teachers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `school_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `violations_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
