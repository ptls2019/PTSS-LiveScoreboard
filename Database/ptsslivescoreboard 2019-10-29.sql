-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptsslivescoreboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `name_event` varchar(100) NOT NULL,
  `date_event` date NOT NULL,
  `time_event` time NOT NULL,
  `plc_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_score`
--

CREATE TABLE `game_score` (
  `game_id` int(11) NOT NULL,
  `steam_1set1` int(11) NOT NULL,
  `steam_1set2` int(11) NOT NULL,
  `steam_2set1` int(50) NOT NULL,
  `steam_2set2` int(50) NOT NULL,
  `selesai_set1` varchar(50) NOT NULL,
  `selesai_set2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_score`
--

INSERT INTO `game_score` (`game_id`, `steam_1set1`, `steam_1set2`, `steam_2set1`, `steam_2set2`, `selesai_set1`, `selesai_set2`) VALUES
(27, 3, 2, 1, 3, 'selesai', 'belum'),
(28, 2, 1, 1, 1, 'selesai', 'belum'),
(29, 2, 1, 2, 2, 'selesai', 'belum'),
(30, 1, 1, 2, 1, 'selesai', 'belum'),
(31, 2, 7, 1, 5, 'selesai', 'selesai'),
(32, 2, 3, 1, 1, 'selesai', 'belum'),
(33, 2, 4, 1, 3, 'selesai', 'belum'),
(34, 2, 2, 1, 1, 'selesai', 'belum'),
(36, 0, 0, 0, 0, 'belum', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `game_scorep2`
--

CREATE TABLE `game_scorep2` (
  `game_id` int(11) NOT NULL,
  `steam_1set1` int(11) NOT NULL,
  `steam_1set2` int(11) NOT NULL,
  `steam_2set1` int(50) NOT NULL,
  `steam_2set2` int(50) NOT NULL,
  `selesai_set1` varchar(50) NOT NULL,
  `selesai_set2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_scorep2`
--

INSERT INTO `game_scorep2` (`game_id`, `steam_1set1`, `steam_1set2`, `steam_2set1`, `steam_2set2`, `selesai_set1`, `selesai_set2`) VALUES
(1, 0, 0, 0, 0, 'belum', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `game_scorep3`
--

CREATE TABLE `game_scorep3` (
  `game_id` int(11) NOT NULL,
  `steam_1set1` int(11) NOT NULL,
  `steam_1set2` int(11) NOT NULL,
  `steam_2set1` int(50) NOT NULL,
  `steam_2set2` int(50) NOT NULL,
  `selesai_set1` varchar(50) NOT NULL,
  `selesai_set2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_scorep4`
--

CREATE TABLE `game_scorep4` (
  `game_id` int(11) NOT NULL,
  `steam_1set1` int(11) NOT NULL,
  `steam_1set2` int(11) NOT NULL,
  `steam_2set1` int(50) NOT NULL,
  `steam_2set2` int(50) NOT NULL,
  `selesai_set1` varchar(50) NOT NULL,
  `selesai_set2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `league_football`
--

CREATE TABLE `league_football` (
  `game_id` varchar(50) NOT NULL,
  `win` int(50) NOT NULL,
  `goal` int(50) NOT NULL,
  `played` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`username`, `password`, `gender`, `email`, `phone`) VALUES
('anis', 'Anis', 'f', 'fitrianis211@gmail.com', '0174471898'),
('iii', 'iii', 'f', 'amirahnadhirahdh99@gmail.com', '0193217734'),
('n', 'n', 'f', 'amirahnadhirahdh99@gmail.com', '0193217734'),
('nad', 'nad', 'f', 'amirahnadhirahdh99@gmail.com', '0193217734'),
('qwertyuiop', 'qwe', 'f', 'amirahnadhirahdh99@gmail.com', '0193217734');

-- --------------------------------------------------------

--
-- Table structure for table `reg_sport`
--

CREATE TABLE `reg_sport` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sportofficer`
--

CREATE TABLE `sportofficer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportofficer`
--

INSERT INTO `sportofficer` (`id`, `username`, `password`, `created_at`) VALUES
(7, 'adminso', 'abc123', '2019-10-02 07:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `game_id` int(11) NOT NULL,
  `sport` varchar(25) NOT NULL,
  `team_1` varchar(25) NOT NULL,
  `team_2` varchar(25) NOT NULL,
  `time_game` time NOT NULL,
  `kumpulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`game_id`, `sport`, `team_1`, `team_2`, `time_game`, `kumpulan`) VALUES
(27, 'netball', 'JTMK', 'JP', '09:00:00', 1),
(28, 'netball', 'JRKV', 'JMSK', '10:00:00', 2),
(29, 'netball', 'JKE', 'JPA', '12:00:00', 3),
(30, 'netball', 'JPH', 'JKM', '14:00:00', 4),
(31, 'football', 'JTMK', 'JRKV', '09:00:00', 1),
(32, 'football', 'JP', 'JMSK', '22:00:00', 2),
(33, 'football', 'JPA', 'JKM', '12:00:00', 3),
(36, 'football', 'JKE', 'JPH', '15:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teamp2`
--

CREATE TABLE `teamp2` (
  `game_id` int(11) NOT NULL,
  `sport` varchar(25) NOT NULL,
  `team_1` varchar(25) DEFAULT NULL,
  `team_2` varchar(25) DEFAULT NULL,
  `time_game` time NOT NULL,
  `kumpulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamp2`
--

INSERT INTO `teamp2` (`game_id`, `sport`, `team_1`, `team_2`, `time_game`, `kumpulan`) VALUES
(1, 'football', 'JTMK', NULL, '08:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teamp3`
--

CREATE TABLE `teamp3` (
  `game_id` int(25) NOT NULL,
  `sport` varchar(25) NOT NULL,
  `team_1` varchar(25) NOT NULL,
  `team_2` varchar(25) NOT NULL,
  `time_game` time NOT NULL,
  `kumpulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teamp4`
--

CREATE TABLE `teamp4` (
  `game_id` int(25) NOT NULL,
  `sport` varchar(25) NOT NULL,
  `team_1` varchar(25) NOT NULL,
  `team_2` varchar(25) NOT NULL,
  `time_game` time NOT NULL,
  `kumpulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `game_score`
--
ALTER TABLE `game_score`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `game_scorep2`
--
ALTER TABLE `game_scorep2`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `game_scorep3`
--
ALTER TABLE `game_scorep3`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `game_scorep4`
--
ALTER TABLE `game_scorep4`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `reg_sport`
--
ALTER TABLE `reg_sport`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `sportofficer`
--
ALTER TABLE `sportofficer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `teamp2`
--
ALTER TABLE `teamp2`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `teamp3`
--
ALTER TABLE `teamp3`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `teamp4`
--
ALTER TABLE `teamp4`
  ADD PRIMARY KEY (`game_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_scorep2`
--
ALTER TABLE `game_scorep2`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_scorep3`
--
ALTER TABLE `game_scorep3`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_scorep4`
--
ALTER TABLE `game_scorep4`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_sport`
--
ALTER TABLE `reg_sport`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sportofficer`
--
ALTER TABLE `sportofficer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `teamp2`
--
ALTER TABLE `teamp2`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teamp3`
--
ALTER TABLE `teamp3`
  MODIFY `game_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teamp4`
--
ALTER TABLE `teamp4`
  MODIFY `game_id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
