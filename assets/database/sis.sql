-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 03:12 PM
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
(6, 7, 35, 'Best in first', 'Best in second', 'Best in third', 'Best in fourth', '2017 - 2018'),
(8, 9, 34, '', '', '', '', '');

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
(0, 24, 7, 20, 29, 100, 100, 100, 100, 100, '2027 - 2028'),
(120, 24, 7, 4, 4, 98, 95, 90, 82, 100, '2017 - 2018'),
(121, 24, 7, 4, 10, 87, 89, 85, 90, 100, '2017 - 2018'),
(122, 24, 7, 4, 11, 88, 82, 87, 95, 100, '2017 - 2018'),
(123, 24, 7, 4, 3, 90, 92, 94, 90, 100, '2017 - 2018'),
(124, 24, 7, 4, 5, 95, 95, 96, 98, 100, '2017 - 2018'),
(125, 24, 7, 4, 9, 95, 89, 91, 93, 100, '2017 - 2018'),
(126, 24, 7, 4, 8, 93, 92, 95, 100, 100, '2017 - 2018'),
(127, 24, 7, 4, 6, 94, 97, 95, 86, 100, '2017 - 2018'),
(128, 24, 7, 4, 7, 86, 91, 92, 93, 100, '2017 - 2018'),
(129, 24, 7, 4, 3, 95, 92, 84, 72, 100, '2018 - 2019'),
(130, 24, 7, 4, 11, 93, 92, 90, 95, 100, '2018 - 2019'),
(131, 24, 7, 4, 10, 95, 89, 88, 92, 100, '2018 - 2019'),
(132, 24, 7, 4, 9, 93, 94, 98, 91, 100, '2018 - 2019'),
(133, 24, 7, 4, 8, 90, 92, 94, 100, 100, '2018 - 2019'),
(134, 24, 7, 4, 6, 93, 94, 91, 90, 93, '2018 - 2019'),
(135, 24, 7, 4, 7, 88, 87, 84, 92, 91, '2018 - 2019'),
(136, 24, 7, 4, 5, 86, 82, 91, 94, 92, '2018 - 2019'),
(138, 24, 7, 4, 4, 83, 83, 83, 97, 95, '2018 - 2019'),
(139, 24, 7, 8, 7, 82, 81, 83, 88, 90, '2019 - 2020'),
(140, 24, 7, 8, 6, 82, 83, 86, 92, 100, '2019 - 2020'),
(141, 24, 7, 8, 5, 91, 92, 88, 86, 100, '2019 - 2020'),
(142, 24, 7, 8, 4, 92, 91, 89, 90, 100, '2019 - 2020'),
(143, 24, 7, 8, 3, 90, 92, 94, 98, 100, '2019 - 2020'),
(144, 24, 7, 8, 11, 91, 89, 88, 93, 100, '2019 - 2020'),
(145, 24, 7, 8, 10, 89, 96, 94, 89, 100, '2019 - 2020'),
(146, 24, 7, 8, 9, 92, 93, 91, 92, 100, '2019 - 2020'),
(147, 24, 7, 8, 8, 90, 92, 94, 98, 100, '2019 - 2020'),
(148, 24, 7, 10, 11, 91, 91, 92, 93, 100, '2020 - 2021'),
(149, 24, 7, 10, 10, 93, 91, 91, 92, 100, '2020 - 2021'),
(150, 24, 7, 10, 9, 92, 92, 93, 92, 100, '2020 - 2021'),
(151, 24, 7, 10, 8, 93, 90, 91, 98, 100, '2020 - 2021'),
(152, 24, 7, 10, 7, 92, 92, 94, 98, 100, '2020 - 2021'),
(153, 24, 7, 10, 6, 94, 93, 89, 91, 100, '2020 - 2021'),
(154, 24, 7, 10, 5, 92, 94, 91, 92, 100, '2020 - 2021'),
(155, 24, 7, 10, 4, 93, 91, 90, 93, 100, '2020 - 2021'),
(156, 24, 7, 10, 3, 93, 91, 92, 99, 100, '2020 - 2021'),
(157, 24, 7, 12, 6, 91, 92, 94, 93, 100, '2021 - 2022'),
(158, 24, 7, 12, 9, 99, 86, 94, 92, 100, '2021 - 2022'),
(159, 24, 7, 12, 5, 82, 89, 90, 91, 100, '2021 - 2022'),
(160, 24, 7, 12, 4, 84, 93, 91, 93, 100, '2021 - 2022'),
(161, 24, 7, 12, 3, 90, 91, 92, 92, 100, '2021 - 2022'),
(162, 24, 7, 12, 11, 89, 90, 97, 93, 100, '2021 - 2022'),
(163, 24, 7, 12, 10, 92, 91, 93, 93, 100, '2021 - 2022'),
(164, 24, 7, 12, 7, 92, 91, 91, 93, 100, '2021 - 2022'),
(165, 24, 7, 12, 8, 89, 87, 91, 90, 100, '2021 - 2022'),
(166, 24, 7, 14, 11, 94, 89, 84, 89, 100, '2022 - 2023'),
(167, 24, 7, 14, 10, 91, 92, 96, 98, 100, '2022 - 2023'),
(168, 24, 7, 14, 9, 92, 97, 98, 99, 100, '2022 - 2023'),
(169, 24, 7, 14, 8, 95, 96, 98, 92, 100, '2022 - 2023'),
(170, 24, 7, 14, 7, 88, 87, 89, 90, 100, '2022 - 2023'),
(171, 24, 7, 14, 6, 80, 82, 83, 86, 100, '2022 - 2023'),
(172, 24, 7, 14, 5, 92, 94, 92, 90, 100, '2022 - 2023'),
(173, 24, 7, 14, 4, 91, 92, 91, 93, 100, '2022 - 2023'),
(174, 24, 7, 14, 3, 94, 89, 90, 92, 100, '2022 - 2023'),
(175, 33, 7, 15, 12, 95, 94, 90, 91, 100, '2023 - 2024'),
(176, 33, 7, 15, 20, 88, 83, 92, 94, 100, '2023 - 2024'),
(177, 33, 7, 15, 19, 89, 89, 81, 82, 100, '2023 - 2024'),
(178, 33, 7, 15, 18, 90, 91, 92, 99, 100, '2023 - 2024'),
(179, 33, 7, 15, 17, 84, 92, 93, 94, 100, '2023 - 2024'),
(180, 33, 7, 15, 16, 90, 88, 89, 91, 100, '2023 - 2024'),
(181, 33, 7, 15, 15, 91, 92, 95, 94, 100, '2023 - 2024'),
(182, 33, 7, 15, 14, 92, 91, 93, 92, 100, '2023 - 2024'),
(183, 33, 7, 15, 13, 85, 85, 92, 92, 100, '2023 - 2024'),
(192, 33, 7, 16, 19, 84, 83, 89, 92, 100, '2024 - 2025'),
(193, 33, 7, 16, 14, 96, 94, 96, 97, 100, '2024 - 2025'),
(194, 33, 7, 16, 13, 93, 92, 95, 96, 100, '2024 - 2025'),
(195, 33, 7, 16, 20, 91, 96, 94, 95, 100, '2024 - 2025'),
(196, 33, 7, 16, 18, 92, 91, 92, 93, 100, '2024 - 2025'),
(197, 33, 7, 16, 17, 90, 93, 91, 94, 100, '2024 - 2025'),
(198, 33, 7, 16, 16, 88, 95, 97, 95, 100, '2024 - 2025'),
(199, 33, 7, 16, 15, 93, 94, 97, 88, 100, '2024 - 2025'),
(200, 33, 7, 16, 12, 95, 91, 95, 89, 100, '2024 - 2025'),
(201, 33, 7, 17, 20, 95, 93, 89, 90, 100, '2025 - 2026'),
(202, 33, 7, 17, 19, 92, 94, 86, 91, 100, '2025 - 2026'),
(203, 33, 7, 17, 18, 92, 91, 96, 93, 100, '2025 - 2026'),
(204, 33, 7, 17, 17, 95, 93, 98, 95, 100, '2025 - 2026'),
(205, 33, 7, 17, 16, 97, 96, 98, 91, 100, '2025 - 2026'),
(206, 33, 7, 17, 15, 93, 96, 95, 94, 100, '2025 - 2026'),
(207, 33, 7, 17, 14, 84, 85, 86, 88, 100, '2025 - 2026'),
(208, 33, 7, 17, 13, 91, 92, 98, 96, 100, '2025 - 2026'),
(209, 33, 7, 17, 12, 94, 92, 93, 94, 100, '2025 - 2026'),
(210, 33, 7, 18, 17, 88, 84, 88, 86, 100, '2026 - 2027'),
(211, 33, 7, 18, 16, 89, 85, 90, 91, 100, '2026 - 2027'),
(212, 33, 7, 18, 15, 91, 92, 93, 94, 100, '2026 - 2027'),
(213, 33, 7, 18, 14, 88, 86, 84, 85, 100, '2026 - 2027'),
(214, 33, 7, 18, 13, 98, 85, 87, 89, 100, '2026 - 2027'),
(215, 33, 7, 18, 12, 93, 92, 99, 99, 100, '2026 - 2027'),
(216, 33, 7, 18, 20, 94, 95, 95, 96, 100, '2026 - 2027'),
(217, 33, 7, 18, 19, 97, 95, 98, 92, 100, '2026 - 2027'),
(218, 33, 7, 18, 18, 93, 94, 94, 95, 100, '2026 - 2027'),
(219, 33, 7, 15, 21, 92, 92, 92, 96, 100, '2023 - 2024'),
(220, 33, 7, 16, 21, 96, 94, 94, 95, 100, '2024 - 2025'),
(221, 33, 7, 17, 21, 96, 98, 92, 91, 100, '2024 - 2025'),
(222, 33, 7, 18, 21, 97, 95, 94, 92, 100, '2024 - 2025'),
(269, 24, 7, 20, 31, 84, 86, 88, 89, 100, '2027 - 2028'),
(270, 24, 7, 20, 30, 84, 82, 81, 89, 100, '2027 - 2028'),
(272, 24, 7, 20, 28, 94, 94, 92, 95, 100, '2027 - 2028'),
(273, 24, 7, 20, 27, 95, 95, 94, 95, 100, '2027 - 2028'),
(274, 24, 7, 20, 26, 96, 95, 93, 96, 100, '2027 - 2028'),
(275, 24, 7, 20, 25, 92, 94, 95, 98, 100, '2027 - 2028'),
(276, 24, 7, 20, 24, 96, 94, 95, 98, 100, '2027 - 2028'),
(277, 24, 7, 20, 23, 92, 93, 94, 95, 100, '2027 - 2028'),
(278, 24, 7, 20, 22, 96, 94, 95, 92, 100, '2027 - 2028'),
(279, 24, 7, 20, 32, 94, 95, 98, 98, 100, '2027 - 2028'),
(280, 24, 7, 20, 41, 91, 94, 95, 96, 100, '2027 - 2028'),
(281, 24, 7, 20, 40, 98, 95, 96, 96, 100, '2027 - 2028'),
(282, 24, 7, 20, 39, 94, 91, 92, 96, 100, '2027 - 2028'),
(283, 24, 7, 20, 38, 96, 94, 91, 92, 100, '2027 - 2028'),
(284, 24, 7, 20, 37, 91, 92, 92, 92, 100, '2027 - 2028'),
(285, 24, 7, 20, 36, 93, 94, 96, 91, 100, '2027 - 2028'),
(286, 24, 7, 20, 35, 91, 94, 95, 96, 100, '2027 - 2028'),
(287, 24, 7, 20, 34, 94, 91, 92, 96, 100, '2027 - 2028'),
(288, 24, 7, 20, 33, 91, 96, 95, 94, 100, '2027 - 2028'),
(289, 24, 7, 22, 27, 91, 96, 94, 92, 100, '2028 - 2029'),
(290, 24, 7, 22, 30, 96, 91, 92, 94, 100, '2028 - 2029'),
(291, 24, 7, 22, 25, 93, 91, 92, 94, 100, '2028 - 2029'),
(292, 24, 7, 22, 24, 96, 92, 94, 94, 100, '2028 - 2029'),
(293, 24, 7, 22, 23, 91, 92, 96, 93, 100, '2028 - 2029'),
(294, 24, 7, 22, 22, 94, 92, 92, 95, 100, '2028 - 2029'),
(295, 24, 7, 22, 31, 91, 93, 95, 94, 100, '2028 - 2029'),
(296, 24, 7, 22, 29, 92, 89, 90, 92, 100, '2028 - 2029'),
(297, 24, 7, 22, 28, 93, 88, 92, 94, 100, '2028 - 2029'),
(298, 24, 7, 22, 26, 94, 96, 94, 96, 100, '2028 - 2029'),
(299, 24, 7, 22, 41, 92, 86, 92, 90, 100, '2028 - 2029'),
(300, 24, 7, 22, 40, 96, 91, 85, 95, 100, '2028 - 2029'),
(301, 24, 7, 22, 39, 94, 92, 86, 95, 100, '2028 - 2029'),
(302, 24, 7, 22, 38, 86, 92, 97, 93, 100, '2028 - 2029'),
(303, 24, 7, 22, 37, 85, 91, 84, 92, 100, '2028 - 2029'),
(304, 24, 7, 22, 36, 88, 96, 86, 91, 100, '2028 - 2029'),
(305, 24, 7, 22, 35, 94, 95, 94, 94, 100, '2028 - 2029'),
(306, 24, 7, 22, 34, 93, 93, 92, 96, 100, '2028 - 2029'),
(307, 24, 7, 22, 33, 92, 93, 94, 94, 100, '2028 - 2029'),
(308, 24, 7, 22, 32, 91, 92, 91, 92, 100, '2028 - 2029');

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
(25, 4, 7, '2017 - 2018', 0),
(26, 6, 7, '2018 - 2019', 0),
(28, 10, 7, '2020 - 2021', 0),
(29, 12, 7, '2021 - 2022', 0),
(30, 14, 7, '2022 - 2023', 0),
(31, 8, 7, '2019 - 2020', 0),
(32, 15, 7, '2023 - 2024', 0),
(33, 16, 7, '2024 - 2025', 0),
(34, 17, 7, '2025 - 2026', 0),
(35, 18, 7, '2026 - 2027', 0),
(36, 20, 7, '2027 - 2028', 0),
(37, 22, 7, '2028 - 2029', 0),
(38, 4, 9, '2017 - 2018', 0);

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
(60, 24, 4, 11),
(61, 24, 6, 3),
(62, 24, 6, 4),
(63, 24, 6, 5),
(64, 24, 6, 6),
(65, 24, 6, 7),
(66, 24, 6, 8),
(67, 24, 6, 9),
(68, 24, 6, 10),
(69, 24, 6, 11),
(70, 24, 8, 3),
(71, 24, 8, 4),
(72, 24, 8, 5),
(73, 24, 8, 6),
(74, 24, 8, 7),
(75, 24, 8, 8),
(76, 24, 8, 9),
(77, 24, 8, 10),
(78, 24, 8, 11),
(79, 24, 10, 3),
(80, 24, 10, 4),
(81, 24, 10, 5),
(82, 24, 10, 6),
(83, 24, 10, 7),
(84, 24, 10, 8),
(85, 24, 10, 9),
(86, 24, 10, 10),
(87, 24, 10, 11),
(88, 24, 12, 3),
(89, 24, 12, 4),
(90, 24, 12, 5),
(91, 24, 12, 6),
(92, 24, 12, 7),
(93, 24, 12, 8),
(94, 24, 12, 9),
(95, 24, 12, 10),
(96, 24, 12, 11),
(97, 24, 14, 3),
(98, 24, 14, 4),
(99, 24, 14, 5),
(100, 24, 14, 6),
(101, 24, 14, 7),
(102, 24, 14, 8),
(103, 24, 14, 9),
(104, 24, 14, 10),
(105, 24, 14, 11),
(106, 33, 15, 12),
(107, 33, 15, 13),
(108, 33, 15, 14),
(109, 33, 15, 15),
(110, 33, 15, 16),
(111, 33, 15, 17),
(112, 33, 15, 18),
(113, 33, 15, 19),
(114, 33, 15, 20),
(115, 33, 16, 12),
(116, 33, 16, 13),
(117, 33, 16, 14),
(118, 33, 16, 15),
(119, 33, 16, 16),
(120, 33, 16, 17),
(121, 33, 16, 18),
(122, 33, 16, 19),
(123, 33, 16, 20),
(124, 33, 17, 12),
(125, 33, 17, 13),
(126, 33, 17, 14),
(127, 33, 17, 15),
(128, 33, 17, 16),
(129, 33, 17, 17),
(130, 33, 17, 18),
(131, 33, 17, 19),
(132, 33, 17, 20),
(133, 33, 18, 12),
(134, 33, 18, 13),
(135, 33, 18, 14),
(136, 33, 18, 15),
(137, 33, 18, 16),
(138, 33, 18, 17),
(139, 33, 18, 18),
(140, 33, 18, 19),
(141, 33, 18, 20),
(142, 33, 15, 21),
(143, 33, 16, 21),
(144, 33, 17, 21),
(145, 33, 18, 21),
(146, 24, 22, 22),
(147, 24, 22, 23),
(148, 24, 22, 24),
(149, 24, 22, 25),
(150, 24, 22, 26),
(151, 24, 22, 27),
(152, 24, 22, 28),
(153, 24, 22, 29),
(154, 24, 22, 30),
(155, 24, 22, 31),
(156, 24, 22, 32),
(157, 24, 22, 33),
(158, 24, 22, 34),
(159, 24, 22, 35),
(160, 24, 22, 36),
(161, 24, 22, 37),
(162, 24, 22, 38),
(163, 24, 22, 39),
(164, 24, 22, 40),
(165, 24, 22, 41),
(166, 25, 5, 3),
(167, 25, 5, 4),
(168, 25, 5, 5),
(169, 25, 5, 6),
(170, 25, 5, 7),
(171, 25, 5, 8),
(172, 25, 5, 9);

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
(21, 'Deuteronomy', 'Grade 12', 'Deuteronomy'),
(22, 'General Academic', 'Grade 12', '');

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
(7, 35, '100554422779', 'Ocampo', 'Lorenzo Adam', 'P.', 'Male', '09991790616', 'a@aa.co', '35 a. Bonifacio St. Mendez, Cavite', '2018 - 2019', '1994-03-31', 'Fairview General Hospital', 1),
(9, 34, '100221155118', 'Almanzor', 'Mark Xander', '', 'Male', '09274599427', '', 'Market Site Galicia 2, Mendez Cavite', '2017 - 2018', '', '', 1),
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
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `assign_awards`
--
ALTER TABLE `assign_awards`
  MODIFY `awards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assign_grades`
--
ALTER TABLE `assign_grades`
  MODIFY `assign_grades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `assign_students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  MODIFY `assign_teachers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

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
  MODIFY `violations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
