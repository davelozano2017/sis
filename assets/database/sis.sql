-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 02:02 AM
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

--
-- Dumping data for table `assign_grades`
--

INSERT INTO `assign_grades` (`assign_grades_id`, `teachers_id`, `students_id`, `section_id`, `subjects_id`, `first`, `second`, `third`, `fourth`, `average`, `sy`) VALUES
(1, 33, 7, 4, 9, 100, 0, 0, 0, 0, '2018 - 2019'),
(2, 33, 7, 4, 10, 100, 0, 0, 0, 0, '2018 - 2019'),
(3, 33, 7, 4, 7, 100, 0, 0, 0, 0, '2018 - 2019'),
(4, 33, 7, 4, 8, 100, 0, 0, 0, 0, '2018 - 2019'),
(5, 33, 7, 4, 6, 100, 0, 0, 0, 0, '2018 - 2019'),
(6, 33, 7, 4, 11, 100, 0, 0, 0, 0, '2018 - 2019'),
(7, 33, 7, 4, 5, 100, 0, 0, 0, 0, '2018 - 2019'),
(8, 33, 7, 4, 4, 100, 0, 0, 0, 0, '2018 - 2019'),
(9, 33, 7, 4, 3, 100, 0, 0, 0, 0, '2018 - 2019'),
(10, 32, 9, 6, 9, 100, 0, 0, 0, 0, '2018 - 2019'),
(11, 32, 9, 6, 10, 100, 0, 0, 0, 0, '2018 - 2019'),
(12, 32, 9, 6, 7, 100, 0, 0, 0, 0, '2018 - 2019'),
(13, 32, 9, 6, 8, 100, 0, 0, 0, 0, '2018 - 2019'),
(14, 32, 9, 6, 6, 100, 0, 0, 0, 0, '2018 - 2019'),
(15, 32, 9, 6, 5, 100, 0, 0, 0, 0, '2018 - 2019'),
(16, 32, 9, 6, 4, 100, 0, 0, 0, 0, '2018 - 2019'),
(17, 32, 9, 6, 3, 100, 0, 0, 0, 0, '2018 - 2019'),
(18, 32, 9, 6, 11, 100, 0, 0, 0, 0, '2018 - 2019');

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `assign_students_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `school_years` varchar(255) NOT NULL,
  `assign_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`assign_students_id`, `section_id`, `students_id`, `school_years`, `assign_status`) VALUES
(44, 4, 7, '2018 - 2019', 0),
(45, 6, 9, '2018 - 2019', 0);

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
(183, 33, 4, 3),
(184, 33, 4, 4),
(185, 33, 4, 5),
(186, 33, 4, 6),
(187, 33, 4, 7),
(188, 33, 4, 8),
(189, 33, 4, 9),
(190, 33, 4, 10),
(191, 33, 4, 11),
(192, 32, 6, 3),
(193, 32, 6, 4),
(194, 32, 6, 5),
(195, 32, 6, 6),
(196, 32, 6, 7),
(197, 32, 6, 8),
(198, 32, 6, 9),
(199, 32, 6, 10),
(200, 32, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `school_days` varchar(255) NOT NULL,
  `days_absent` varchar(255) NOT NULL,
  `chief_cause1` varchar(255) NOT NULL,
  `times_tardy` varchar(255) NOT NULL,
  `chief_cause2` varchar(255) NOT NULL,
  `school_days_present` varchar(255) NOT NULL,
  `students_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_shs`
--

CREATE TABLE `attendance_shs` (
  `attendance_shs_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `aug` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `oct` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `dece` int(11) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `school_year` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`school_year_id`, `school_year`, `st`) VALUES
(1, '2017 - 2018', ''),
(5, '2018 - 2019', 'Active'),
(6, '2019 - 2020', ''),
(7, '2020 - 2021', ''),
(8, '2021 - 2022', ''),
(9, '2022 - 2023', ''),
(10, '2023 - 2024', ''),
(11, '2024 - 2025', ''),
(12, '2025 - 2026', ''),
(13, '2026 - 2027', ''),
(14, '2027 - 2028', ''),
(15, '2028 - 2029', ''),
(16, '2029 - 2030', ''),
(17, '2030 - 2031', ''),
(18, '2031 - 2032', ''),
(19, '2032 - 2033', ''),
(20, '2033 - 2034', ''),
(21, '2034 - 2035', '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `level`, `description`, `ss`) VALUES
(1, 'Nursery', 'Nursery', 'Nursery', 'Pre School'),
(2, 'Kinder', 'Kinder', 'Kinder', 'Pre School'),
(3, 'Preparatory', 'Preparatory', 'Preparatory', 'Pre School'),
(4, 'Matthew', 'Grade 1', 'Matthew', 'Elementary'),
(5, 'Mark', 'Grade 1', 'Mark', 'Elementary'),
(6, 'Luke', 'Grade 2', 'Luke', 'Elementary'),
(7, 'John', 'Grade 2', 'John', 'Elementary'),
(8, 'Acts', 'Grade 3', 'Acts', 'Elementary'),
(9, 'Romans', 'Grade 3', 'Romans', 'Elementary'),
(10, 'Corinthians', 'Grade 4', 'Corinthians', 'Elementary'),
(11, 'Galatians', 'Grade 4', 'Galatians', 'Elementary'),
(12, 'Philippians', 'Grade 5', 'Philippians', 'Elementary'),
(13, 'Ephesians', 'Grade 5', 'Ephesians', 'Elementary'),
(14, 'Colossians', 'Grade 6', 'Colossians', 'Elementary'),
(15, 'Timothy', 'Grade 7', 'Timothy', 'Junior High School'),
(16, 'Philemon', 'Grade 8', 'Philemon', 'Junior High School'),
(17, 'James', 'Grade 9', 'James', 'Junior High School'),
(18, 'Peter', 'Grade 10', 'Peter', 'Junior High School'),
(19, 'Genesis', 'Grade 11', 'Genesis', 'Senior High School'),
(20, 'Exodus', 'Grade 11', 'Exodus', 'Senior High School'),
(22, 'General Academic', 'Grade 12', '', 'Senior High School');

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
  `genderr` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `stats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `guardian_id`, `LRN`, `surname`, `firstname`, `middlename`, `genderr`, `contact`, `email`, `address`, `school_year`, `dob`, `pob`, `stats`) VALUES
(7, 35, '100554422779', 'Ocampo', 'Lorenzo Adam', 'P.', 'Male', '09991790616', 'a@aa.co', '35 a. Bonifacio St. Mendez, Cavite', '2018 - 2019', '1994-03-31', 'Fairview General Hospital', 0),
(9, 34, '100221155118', 'Almanzor', 'Mark Xander', '', 'Male', '09274599427', '', 'Market Site Galicia 2, Mendez Cavite', '2017 - 2018', '', '', 0),
(10, 36, '100225511515', 'Marquez', 'Godwin Pius', 'A.', 'Male', '09178616373', '', '063 Balagbag Ma. Kahoy LejosIndang ,Cavite', '2017 - 2018', '', '', 0),
(11, 37, '100336699882', 'Pe&ntilde;alba', 'David', '', 'Male', '09173442947', '', '105 panungyan II Mendez, Cavite', '2017 - 2018', '', '', 0),
(12, 38, '100336644771', 'Tiania', 'Joaquin Ynigo', '', 'Male', '09196578562', '', '67 Patutong Malaki North tag. City', '2017 - 2018', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjects_id` int(11) NOT NULL,
  `subjects_name` varchar(255) NOT NULL,
  `subject_level` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjects_id`, `subjects_name`, `subject_level`) VALUES
(3, 'Mother Tongue', 'Elementary'),
(4, 'Filipino', 'Elementary'),
(5, 'English', 'Elementary'),
(6, 'Mathematics', 'Elementary'),
(7, 'Science &amp; Health	', 'Elementary'),
(8, 'Sibika at Kultura', 'Elementary'),
(9, 'MSEP', 'Elementary'),
(10, 'Christian Living', 'Elementary'),
(11, 'Computer Education', 'Elementary'),
(12, 'Filipino', 'Junior High'),
(13, 'English', 'Junior High'),
(14, 'Science', 'Junior High'),
(15, 'Aralin Panlipunan', 'Junior High'),
(16, 'T.L.E', 'Junior High'),
(17, 'MAPEH', 'Junior High'),
(18, 'Values ED/EP', 'Junior High'),
(19, 'Computer', 'Junior High'),
(20, 'Elective', 'Junior High'),
(21, 'Mathematics', 'Junior High'),
(22, 'Oral Communication', 'Senior High School - 1st Semenster'),
(23, 'Komunikasyon at Pananaliksik', 'Senior High School - 1st Semenster'),
(24, 'General Mathematics', 'Senior High School - 1st Semenster'),
(25, 'Earth and Life Science', 'Senior High School - 1st Semenster'),
(26, 'Physical Education and Health', 'Senior High School - 1st Semenster'),
(27, 'English for Academic and Professional Purposes', 'Senior High School - 1st Semenster'),
(28, 'Humanities 1 - Creative Writing', 'Senior High School - 1st Semenster'),
(29, 'Organization and Management', 'Senior High School - 1st Semenster'),
(30, 'Empowerment and Technologies', 'Senior High School - 1st Semenster'),
(31, 'Christian Living', 'Senior High School - 1st Semenster'),
(32, 'Reading and Writing', 'Senior High School - 2nd Semenster'),
(33, 'Statistics and Probability', 'Senior High School - 2nd Semenster'),
(34, 'Physical Science', 'Senior High School - 2nd Semenster'),
(35, 'Pag babasa at pag susuri ng iba\'t ibang teksto tungkol sa pananaliksik', 'Senior High School - 2nd Semenster'),
(36, 'Physical Education and Health', 'Senior High School - 2nd Semenster'),
(37, 'Practical Research 1 ', 'Senior High School - 2nd Semenster'),
(38, 'Entrepreneurship', 'Senior High School - 2nd Semenster'),
(39, 'Fundamentals of ABM 1', 'Senior High School - 2nd Semenster'),
(40, 'Humanities 2 - Intro to World Religion and Belief System', 'Senior High School - 2nd Semenster'),
(41, 'Christian Living', 'Senior High School - 2nd Semenster');

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
  `scy` varchar(25) NOT NULL
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
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `attendance_shs`
--
ALTER TABLE `attendance_shs`
  ADD PRIMARY KEY (`attendance_shs_id`);

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
  MODIFY `awards_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_grades`
--
ALTER TABLE `assign_grades`
  MODIFY `assign_grades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `assign_students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  MODIFY `assign_teachers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `attendance_shs`
--
ALTER TABLE `attendance_shs`
  MODIFY `attendance_shs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `school_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
