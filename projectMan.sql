-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2024 at 07:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectMan`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_type`
--

CREATE TABLE `file_type` (
  `id_file_type` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL,
  `format` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_project` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_project`, `name`, `description`, `start_date`, `end_date`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Project alpha', 'project awal alpha', '2024-07-16 20:18:56', '2024-07-31 20:18:13', '2024-07-16 20:18:56', NULL, 1),
(2, 'Project m16a4', 'gunsmith', '2024-07-16 20:19:50', '2024-07-31 20:18:13', '2024-07-16 20:19:50', NULL, 9),
(3, 'Project 1', 'Description for Project 1', '2024-07-16 20:24:52', '2024-08-01 10:00:00', '2024-07-16 20:24:52', NULL, 1),
(4, 'Project 2', 'Description for Project 2', '2024-07-16 20:24:52', '2024-08-02 10:00:00', '2024-07-16 20:24:52', NULL, 2),
(5, 'Project 3', 'Description for Project 3', '2024-07-16 20:24:52', '2024-08-03 10:00:00', '2024-07-16 20:24:52', NULL, 3),
(6, 'Project 4', 'Description for Project 4', '2024-07-16 20:24:52', '2024-08-04 10:00:00', '2024-07-16 20:24:52', NULL, 4),
(7, 'Project 5', 'Description for Project 5', '2024-07-16 20:24:52', '2024-08-05 10:00:00', '2024-07-16 20:24:52', NULL, 5),
(8, 'Project 6', 'Description for Project 6', '2024-07-16 20:24:52', '2024-08-06 10:00:00', '2024-07-16 20:24:52', NULL, 6),
(9, 'Project 7', 'Description for Project 7', '2024-07-16 20:24:52', '2024-08-07 10:00:00', '2024-07-16 20:24:52', NULL, 7),
(10, 'Project 8', 'Description for Project 8', '2024-07-16 20:24:52', '2024-08-08 10:00:00', '2024-07-16 20:24:52', NULL, 8),
(11, 'Project 9', 'Description for Project 9', '2024-07-16 20:24:52', '2024-08-09 10:00:00', '2024-07-16 20:24:52', NULL, 9),
(12, 'Project 10', 'Description for Project 10', '2024-07-16 20:24:52', '2024-08-10 10:00:00', '2024-07-16 20:24:52', NULL, 1),
(13, 'Project 11', 'Description for Project 11', '2024-07-16 20:24:52', '2024-08-11 10:00:00', '2024-07-16 20:24:52', NULL, 2),
(14, 'Project 12', 'Description for Project 12', '2024-07-16 20:24:52', '2024-08-12 10:00:00', '2024-07-16 20:24:52', NULL, 3),
(15, 'Project 13', 'Description for Project 13', '2024-07-16 20:24:52', '2024-08-13 10:00:00', '2024-07-16 20:24:52', NULL, 4),
(16, 'Project 14', 'Description for Project 14', '2024-07-16 20:24:52', '2024-08-14 10:00:00', '2024-07-16 20:24:52', NULL, 5),
(17, 'Project 15', 'Description for Project 15', '2024-07-16 20:24:52', '2024-08-15 10:00:00', '2024-07-16 20:24:52', NULL, 6),
(18, 'Project 16', 'Description for Project 16', '2024-07-16 20:24:52', '2024-08-16 10:00:00', '2024-07-16 20:24:52', NULL, 7),
(19, 'Project 17', 'Description for Project 17', '2024-07-16 20:24:52', '2024-08-17 10:00:00', '2024-07-16 20:24:52', NULL, 8),
(20, 'Project 18', 'Description for Project 18', '2024-07-16 20:24:52', '2024-08-18 10:00:00', '2024-07-16 20:24:52', NULL, 9),
(21, 'Project 19', 'Description for Project 19', '2024-07-16 20:24:52', '2024-08-19 10:00:00', '2024-07-16 20:24:52', NULL, 1),
(22, 'Project 20', 'Description for Project 20', '2024-07-16 20:24:52', '2024-08-20 10:00:00', '2024-07-16 20:24:52', NULL, 2),
(23, 'Project 21', 'Description for Project 21', '2024-07-16 20:24:52', '2024-08-21 10:00:00', '2024-07-16 20:24:52', NULL, 3),
(24, 'Project 22', 'Description for Project 22', '2024-07-16 20:24:52', '2024-08-22 10:00:00', '2024-07-16 20:24:52', NULL, 4),
(25, 'Project 23', 'Description for Project 23', '2024-07-16 20:24:52', '2024-08-23 10:00:00', '2024-07-16 20:24:52', NULL, 5),
(26, 'Project 24', 'Description for Project 24', '2024-07-16 20:24:52', '2024-08-24 10:00:00', '2024-07-16 20:24:52', NULL, 6),
(27, 'Project 25', 'Description for Project 25', '2024-07-16 20:24:52', '2024-08-25 10:00:00', '2024-07-16 20:24:52', NULL, 7),
(28, 'Project 26', 'Description for Project 26', '2024-07-16 20:24:52', '2024-08-26 10:00:00', '2024-07-16 20:24:52', NULL, 8),
(29, 'Project 27', 'Description for Project 27', '2024-07-16 20:24:52', '2024-08-27 10:00:00', '2024-07-16 20:24:52', NULL, 9),
(30, 'Project 28', 'Description for Project 28', '2024-07-16 20:24:52', '2024-08-28 10:00:00', '2024-07-16 20:24:52', NULL, 1),
(31, 'Project 29', 'Description for Project 29', '2024-07-16 20:24:52', '2024-08-29 10:00:00', '2024-07-16 20:24:52', NULL, 2),
(32, 'Project 30', 'Description for Project 30', '2024-07-16 20:24:52', '2024-08-30 10:00:00', '2024-07-16 20:24:52', NULL, 3),
(33, 'Project 24', 'Description for Project 24', '2024-07-16 20:37:27', '2024-08-24 10:00:00', '2024-07-16 20:37:27', NULL, 6),
(34, 'Project 25', 'Description for Project 25', '2024-07-16 20:37:27', '2024-08-25 10:00:00', '2024-07-16 20:37:27', NULL, 7),
(35, 'Project 26', 'Description for Project 26', '2024-07-16 20:37:27', '2024-08-26 10:00:00', '2024-07-16 20:37:27', NULL, 8),
(36, 'Project 27', 'Description for Project 27', '2024-07-16 20:37:27', '2024-08-27 10:00:00', '2024-07-16 20:37:27', NULL, 9),
(37, 'Project 28', 'Description for Project 28', '2024-07-16 20:37:27', '2024-08-28 10:00:00', '2024-07-16 20:37:27', NULL, 1),
(38, 'Project 29', 'Description for Project 29', '2024-07-16 20:37:27', '2024-08-29 10:00:00', '2024-07-16 20:37:27', NULL, 2),
(39, 'Project 30', 'Description for Project 30', '2024-07-16 20:37:27', '2024-08-30 10:00:00', '2024-07-16 20:37:27', NULL, 3),
(40, 'Project 31', 'Description for Project 31', '2024-07-16 20:37:27', '2024-08-31 10:00:00', '2024-07-16 20:37:27', NULL, 4),
(41, 'Project 32', 'Description for Project 32', '2024-07-16 20:37:27', '2024-09-01 10:00:00', '2024-07-16 20:37:27', NULL, 5),
(42, 'Project 33', 'Description for Project 33', '2024-07-16 20:37:27', '2024-09-02 10:00:00', '2024-07-16 20:37:27', NULL, 6),
(43, 'Project 34', 'Description for Project 34', '2024-07-16 20:37:27', '2024-09-03 10:00:00', '2024-07-16 20:37:27', NULL, 7),
(44, 'Project 35', 'Description for Project 35', '2024-07-16 20:37:27', '2024-09-04 10:00:00', '2024-07-16 20:37:27', NULL, 8),
(45, 'Project 36', 'Description for Project 36', '2024-07-16 20:37:27', '2024-09-05 10:00:00', '2024-07-16 20:37:27', NULL, 9),
(46, 'Project 37', 'Description for Project 37', '2024-07-16 20:37:27', '2024-09-06 10:00:00', '2024-07-16 20:37:27', NULL, 1),
(47, 'Project 38', 'Description for Project 38', '2024-07-16 20:37:27', '2024-09-07 10:00:00', '2024-07-16 20:37:27', NULL, 2),
(48, 'Project 39', 'Description for Project 39', '2024-07-16 20:37:27', '2024-09-08 10:00:00', '2024-07-16 20:37:27', NULL, 3),
(49, 'Project 40', 'Description for Project 40', '2024-07-16 20:37:27', '2024-09-09 10:00:00', '2024-07-16 20:37:27', NULL, 4),
(50, 'Project 41', 'Description for Project 41', '2024-07-16 20:37:27', '2024-09-10 10:00:00', '2024-07-16 20:37:27', NULL, 5),
(51, 'Project 42', 'Description for Project 42', '2024-07-16 20:37:27', '2024-09-11 10:00:00', '2024-07-16 20:37:27', NULL, 6),
(52, 'Project 43', 'Description for Project 43', '2024-07-16 20:37:27', '2024-09-12 10:00:00', '2024-07-16 20:37:27', NULL, 7),
(53, 'Project 44', 'Description for Project 44', '2024-07-16 20:37:27', '2024-09-13 10:00:00', '2024-07-16 20:37:27', NULL, 8),
(54, 'Project 45', 'Description for Project 45', '2024-07-16 20:37:27', '2024-09-14 10:00:00', '2024-07-16 20:37:27', NULL, 9),
(55, 'Project 46', 'Description for Project 46', '2024-07-16 20:37:27', '2024-09-15 10:00:00', '2024-07-16 20:37:27', NULL, 1),
(56, 'Project 47', 'Description for Project 47', '2024-07-16 20:37:27', '2024-09-16 10:00:00', '2024-07-16 20:37:27', NULL, 2),
(57, 'Project 48', 'Description for Project 48', '2024-07-16 20:37:27', '2024-09-17 10:00:00', '2024-07-16 20:37:27', NULL, 3),
(58, 'Project 49', 'Description for Project 49', '2024-07-16 20:37:27', '2024-09-18 10:00:00', '2024-07-16 20:37:27', NULL, 4),
(59, 'Project 50', 'Description for Project 50', '2024-07-16 20:37:27', '2024-09-19 10:00:00', '2024-07-16 20:37:27', NULL, 5),
(60, 'nato', 'nato project', '2024-07-18 16:32:12', NULL, '2024-07-18 16:32:12', NULL, 5),
(61, 'daffa', 'dddd', '2024-07-19 15:34:24', NULL, '2024-07-19 15:34:24', NULL, 10),
(62, 'daffad', 'd', '2024-07-22 03:38:00', '2024-07-22 03:38:00', '2024-07-22 03:38:41', NULL, 10),
(63, 'admin', 'd', '2024-07-22 03:44:00', '2024-08-02 03:44:00', '2024-07-22 03:44:26', NULL, 10),
(64, 'aa', 'aa', '2024-08-10 03:44:00', '2024-09-05 03:45:00', '2024-07-22 03:45:08', NULL, 10),
(65, 'sss', 'A', '2024-08-03 03:45:00', '2024-08-10 03:45:00', '2024-07-22 03:45:57', NULL, 10),
(66, 'master', 'q', '2024-08-03 03:47:00', '2024-09-21 03:47:00', '2024-07-22 03:47:52', NULL, 10),
(67, 'daffa', 'A', '2024-07-27 03:48:00', '2024-08-10 03:48:00', '2024-07-22 03:48:25', NULL, 10),
(68, 'daffa', 'aa', '2024-07-12 08:35:00', '2024-08-10 08:35:00', '2024-07-22 08:35:16', NULL, 10),
(69, 'master', 'd', '2024-08-03 08:37:00', '2024-08-10 08:37:00', '2024-07-22 08:37:11', NULL, 10),
(70, 'sss', 't', '2024-08-10 08:38:00', '2024-07-22 08:38:00', '2024-07-22 08:38:56', NULL, 10),
(71, 'sss', 'gg', '2024-07-18 08:39:00', '2024-08-10 08:40:00', '2024-07-22 08:40:04', NULL, 10),
(72, 'daffa', 'aa', '2024-08-03 08:41:00', '2024-08-10 08:41:00', '2024-07-22 08:41:50', NULL, 10),
(73, 'sss', 'tes', '2024-07-22 19:14:00', '2024-08-10 19:14:00', '2024-07-22 19:14:26', NULL, 10),
(74, 'sss', 'jj', '2024-08-10 19:15:00', '2024-07-22 19:15:00', '2024-07-22 19:15:56', NULL, 10),
(75, 'sss', 'jj', '2024-08-10 19:15:00', '2024-07-22 19:15:00', '2024-07-22 19:16:12', NULL, 10),
(76, 'Daffa Khoirul Faiz', 'dd', '2024-07-27 19:17:00', '2024-08-10 19:17:00', '2024-07-22 19:17:53', NULL, 10),
(77, 'm', 'm', '2024-08-03 19:19:00', '2024-08-10 19:19:00', '2024-07-22 19:19:06', NULL, 10),
(78, 'Daffa Khoirul Faiz', 'd', '2024-08-10 19:24:00', '2024-08-10 19:24:00', '2024-07-22 19:24:28', NULL, 10),
(79, 'd', 'd', '2024-07-27 19:24:00', '2024-08-10 19:24:00', '2024-07-22 19:24:56', NULL, 10),
(80, 'sss', 'D', '2024-08-02 15:01:00', '2024-08-03 15:01:00', '2024-07-23 15:01:39', NULL, 10),
(81, 'TES', 'tes pro', '2024-07-23 15:02:00', '2024-07-20 15:02:00', '2024-07-23 15:02:37', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submission_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `task_id` int(11) NOT NULL,
  `submitter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 1,
  `status` varchar(20) NOT NULL,
  `due_date` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `maker` int(11) NOT NULL,
  `assigned_to` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `teams_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teams_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'alpha', 'dd', '2024-07-24 05:47:45', '2024-07-24 05:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `teams_member`
--

CREATE TABLE `teams_member` (
  `id_team_members` int(11) NOT NULL,
  `joined_at` datetime NOT NULL DEFAULT current_timestamp(),
  `teams_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams_member`
--

INSERT INTO `teams_member` (`id_team_members`, `joined_at`, `teams_id`, `id_user`) VALUES
(1, '2024-07-24 12:48:03', 1, 9),
(2, '2024-07-25 01:25:21', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `team_assigned`
--

CREATE TABLE `team_assigned` (
  `id_team_assigned` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `id_projects` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_assigned`
--

INSERT INTO `team_assigned` (`id_team_assigned`, `id_team`, `id_projects`) VALUES
(1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `photo`) VALUES
(1, 'daffa', 'admin@gmail.com', '$2y$10$a.liiGvMcoUEdSIMu9jE..YjEXQsvxQZ0Mp9EvsnlpueSY/2uexGm', '../public/img/668632266fb60.png'),
(2, 'sss', 'daffa@gmail.com', '$2y$10$XWsTyTR0g.wrO0wUBDROE.V9css6rC1lsMk5YRi8ZzOs72wE.Tuy.', '../public/img/66863230218b0.png'),
(3, 'aa', 'daffa@gmail.com', '$2y$10$BtMIlyAKowmaxlDFtVzQMeWzYHuVmp80/6X40.57dBgjCPc.V.8gK', '../app/uploads/6686327876d06.png'),
(4, 'daffa', 'daffa@gmail.com', '$2y$10$iI2H7l7Tf9gtRL82mmEgNuLA7fUyFRSSjtU09ItBbmF94zWuZVTuC', '../app/uploads/668634ab16ebd.png'),
(5, 'aa', 'khoirul@gmail.com', '$2y$10$hokxhrbC3wmNa46OftQc/uBO9WuOYqhhKun9cxvr64IFC8CsUDZni', '../app/uploads/668635f00a09d.png'),
(6, 'sss', 'daffamm@gmail.com', '$2y$10$3YBiK3/HnVCX8G5CzfoYNuQ19PW.Z0vSeUOSa9.P14ieWtyXP7Rl6', '../app/uploads/668636c864a7f.png'),
(7, 'daffa', 'dkhoirul@student.ciputra.ac.id', '$2y$10$j7UzMt0hcz1P/lHTqU7hIuCOPfwWDrfBtIY1S.nhgDXb6aqgDNdmC', '../app/uploads/6688b61c69c3b.png'),
(8, 'sss', 'aa12@gmail.com', '$2y$10$bxFhrZ2v99DpffXsL6xfZeRcLUyk9jnSqj41Vs38R6KA005sKPCKi', NULL),
(9, 'DAFFA KHOIRUL FAIZ', 'daffa12@gmail.com', '$2y$10$gtaMF7HNrlvTJvThw97HauFpNCdxaMqa8nzD5bC3KPOfBVBa9Ahqe', NULL),
(10, 'admin', 'dkhoirul12@student.ciputra.ac.id', '$2y$10$DdeoUHRf80rdEnAVajKsFenfl.ZR8OJMP2S7xKsgDqqw4njyFD1lO', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_type`
--
ALTER TABLE `file_type`
  ADD KEY `fk_file` (`task_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD KEY `fk_task` (`task_id`),
  ADD KEY `fk_sub` (`submitter`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teams_id`);

--
-- Indexes for table `teams_member`
--
ALTER TABLE `teams_member`
  ADD PRIMARY KEY (`id_team_members`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_team` (`teams_id`);

--
-- Indexes for table `team_assigned`
--
ALTER TABLE `team_assigned`
  ADD PRIMARY KEY (`id_team_assigned`),
  ADD KEY `fk_teams1` (`id_team`),
  ADD KEY `fk_pro` (`id_projects`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `teams_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams_member`
--
ALTER TABLE `teams_member`
  MODIFY `id_team_members` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_assigned`
--
ALTER TABLE `team_assigned`
  MODIFY `id_team_assigned` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_type`
--
ALTER TABLE `file_type`
  ADD CONSTRAINT `fk_file` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `fk_sub` FOREIGN KEY (`submitter`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_task` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);

--
-- Constraints for table `teams_member`
--
ALTER TABLE `teams_member`
  ADD CONSTRAINT `fk_team` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`teams_id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `team_assigned`
--
ALTER TABLE `team_assigned`
  ADD CONSTRAINT `fk_pro` FOREIGN KEY (`id_projects`) REFERENCES `projects` (`id_project`),
  ADD CONSTRAINT `fk_teams1` FOREIGN KEY (`id_team`) REFERENCES `teams` (`teams_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
