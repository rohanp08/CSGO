-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 12:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `PID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `team` varchar(200) NOT NULL,
  `win` int(11) NOT NULL,
  `kills` int(11) NOT NULL,
  `deaths` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`PID`, `name`, `team`, `win`, `kills`, `deaths`) VALUES
(1, 'pratik', 'FNATIC', 431, 12641, 12327),
(2, 'rohan', 'CLOUD 9', 987, 18732, 16498);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `player_name` varchar(200) NOT NULL,
  `player_rank` varchar(200) NOT NULL,
  `player_level` int(11) NOT NULL,
  `hours_played` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`player_name`, `player_rank`, `player_level`, `hours_played`) VALUES
('rohan', 'GLOBAL ELITE', 80, 451),
('pratik', 'SILVER 4', 23, 53);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(200) NOT NULL,
  `total_games` int(11) NOT NULL,
  `winrate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `total_games`, `winrate`) VALUES
(1, 'CLOUD 9', 521, 78),
(2, 'NRG', 468, 83),
(3, 'NAVI', 632, 89),
(4, 'VIRTUS PRO', 597, 84),
(5, 'OXYGEN', 416, 86),
(6, 'ASTRALIS', 864, 91),
(7, 'FNATIC ', 852, 93),
(8, 'PRIDE GAMING', 321, 87),
(9, 'E3', 412, 85),
(10, 'TITAN', 755, 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'pratik', 'pratikrathi14@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'pratikrathi', 'pratikrathi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'abcdef', 'abcdef1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'pratikrathi14', 'pratikrathi1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'ayush', 'ayush1@gmail.com', '66049c07d9e8546699fe0872fd32d8f6'),
(6, 'uzair', 'uzair1@gmail.com', '6e3b34165a7ef7839ab852f28b76999f'),
(7, 'pratk', 'pratk@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'jnaneshbaba', 'babajnanesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'rohan ', 'pawarrohan98@gmail.com', 'c916d142f0dc7f9389653a164f1d4e9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`),
  ADD UNIQUE KEY `team_name` (`team_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
