-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 09:23 PM
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
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(300) NOT NULL,
  `courseDescription` text NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedDate` timestamp NULL DEFAULT NULL,
  `status` set('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `courseName`, `courseDescription`, `createdDate`, `updatedDate`, `status`) VALUES
(1, 'UP PCS Pre', 'This is little laborious course', '2020-12-28 09:00:22', NULL, '1'),
(2, 'UP IAS Pre', 'This is hard to understand course', '2020-12-28 09:00:35', NULL, '1'),
(3, 'UP PCS Mains', 'This is hard to memory based course', '2020-12-28 09:00:47', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `type`, `updated_at`, `deleted_at`, `created_at`) VALUES
(1, 'admin', '2020-12-04 00:00:00', NULL, '2020-12-01 00:00:00'),
(2, 'student', '2020-12-04 00:00:00', NULL, '2020-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testquestions`
--

CREATE TABLE `testquestions` (
  `questionId` int(10) NOT NULL,
  `testId` int(10) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(355) NOT NULL,
  `option2` varchar(355) NOT NULL,
  `option3` varchar(355) NOT NULL,
  `option4` varchar(355) NOT NULL,
  `option5` varchar(355) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testquestions`
--

INSERT INTO `testquestions` (`questionId`, `testId`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`, `answer`, `createdDate`, `updatedDate`) VALUES
(6, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 05:45:52', '0000-00-00 00:00:00'),
(7, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 05:45:52', '0000-00-00 00:00:00'),
(8, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 05:46:08', '0000-00-00 00:00:00'),
(9, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 05:46:08', '0000-00-00 00:00:00'),
(10, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 05:48:50', '0000-00-00 00:00:00'),
(11, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 05:48:50', '0000-00-00 00:00:00'),
(12, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 05:58:04', '0000-00-00 00:00:00'),
(13, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 05:58:04', '0000-00-00 00:00:00'),
(14, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 05:59:49', '0000-00-00 00:00:00'),
(15, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 05:59:49', '0000-00-00 00:00:00'),
(16, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 06:00:22', '0000-00-00 00:00:00'),
(17, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 06:00:22', '0000-00-00 00:00:00'),
(18, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 06:01:16', '0000-00-00 00:00:00'),
(19, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 06:01:16', '0000-00-00 00:00:00'),
(20, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 06:02:21', '0000-00-00 00:00:00'),
(21, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 06:02:21', '0000-00-00 00:00:00'),
(22, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 06:02:34', '0000-00-00 00:00:00'),
(23, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 06:02:34', '0000-00-00 00:00:00'),
(24, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 06:03:11', '0000-00-00 00:00:00'),
(25, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 06:03:11', '0000-00-00 00:00:00'),
(26, 4, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 06:04:06', '0000-00-00 00:00:00'),
(27, 4, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 06:04:07', '0000-00-00 00:00:00'),
(28, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:48:54', '0000-00-00 00:00:00'),
(29, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:48:54', '0000-00-00 00:00:00'),
(30, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:38', '0000-00-00 00:00:00'),
(31, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:38', '0000-00-00 00:00:00'),
(32, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:38', '0000-00-00 00:00:00'),
(33, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:38', '0000-00-00 00:00:00'),
(34, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:38', '0000-00-00 00:00:00'),
(35, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:38', '0000-00-00 00:00:00'),
(36, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(37, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(38, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(39, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(40, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(41, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(42, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(43, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(44, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(45, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(46, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(47, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(48, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(49, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(50, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:39', '0000-00-00 00:00:00'),
(51, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:40', '0000-00-00 00:00:00'),
(52, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:49:40', '0000-00-00 00:00:00'),
(53, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:49:40', '0000-00-00 00:00:00'),
(54, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(55, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(56, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(57, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(58, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(59, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(60, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:23', '0000-00-00 00:00:00'),
(61, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(62, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(63, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(64, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(65, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(66, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(67, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(68, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(69, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(70, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(71, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:24', '0000-00-00 00:00:00'),
(72, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:25', '0000-00-00 00:00:00'),
(73, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:25', '0000-00-00 00:00:00'),
(74, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:25', '0000-00-00 00:00:00'),
(75, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:25', '0000-00-00 00:00:00'),
(76, 2, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 19:50:25', '0000-00-00 00:00:00'),
(77, 2, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 19:50:25', '0000-00-00 00:00:00'),
(78, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(79, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(80, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(81, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(82, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(83, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(84, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(85, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(86, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(87, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(88, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(89, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(90, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(91, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(92, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:22', '0000-00-00 00:00:00'),
(93, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(94, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(95, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(96, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(97, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(98, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(99, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(100, 3, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'largest railway station', 'highest railway station', 'longest railway station', 'None of the above', '', 'A', '2021-01-26 20:21:23', '0000-00-00 00:00:00'),
(101, 3, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The origin and history of technical and scientific terms', 'The formation of rocks', '', 'C', '2021-01-26 20:21:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `testId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL COMMENT 'courses table primary key',
  `testName` varchar(300) NOT NULL,
  `testDescription` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`testId`, `courseId`, `testName`, `testDescription`, `status`, `createdDate`, `updatedDate`) VALUES
(1, 1, 'Aljectbra', 'this is Aljectbra', 1, '2020-12-20 08:37:08', '0000-00-00 00:00:00'),
(2, 1, 'Calculas', 'teeeeeeeee efrewrwer', 1, '2020-12-24 18:46:30', '2020-12-24 18:46:30'),
(3, 2, 'Newton laws', '3 Newton laws...', 1, '2020-12-26 07:39:48', '2020-12-26 07:39:48'),
(4, 2, 'Newton laws', '3 Newton laws edit...', 1, '2020-12-26 07:39:35', '2020-12-26 07:39:35'),
(5, 2, 'Calculas', 'this is physics...', 1, '2020-12-26 07:39:21', '2020-12-26 07:39:21'),
(6, 3, 'lab', 'this is chemistry subject1234', 1, '2020-12-26 16:39:07', '2020-12-26 16:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `password`, `email`, `permission_id`, `updated_at`, `deleted_at`, `created_at`) VALUES
('1', 'anand', 'shukla', 'anand', '123456', 'anand.knp@gmail.com', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testquestions`
--
ALTER TABLE `testquestions`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`testId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testquestions`
--
ALTER TABLE `testquestions`
  MODIFY `questionId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `testId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
