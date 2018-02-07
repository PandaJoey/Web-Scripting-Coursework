-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 01:31 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialnerdworking`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friendID` int(11) NOT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `USERS_userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gamesID` int(11) NOT NULL,
  `gameName` varchar(60) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gamesID`, `gameName`, `picture`, `genre`) VALUES
(1, 'Team Fortress 2', NULL, 'Shooter'),
(2, 'Counter Strike GO', NULL, 'Shooter'),
(3, 'Dark Souls', NULL, 'RPG'),
(4, 'Call of Duty Black Ops 3', NULL, 'Shooter'),
(5, 'Borderlands 2', NULL, 'RPG Shooter'),
(6, 'Path of Exil', NULL, 'RPG'),
(7, 'Mine Craft', NULL, 'Builder'),
(8, 'Street Fighter V', NULL, 'Fighter'),
(9, 'Grid 2', NULL, 'Racer'),
(10, 'Counter Strike 1.6', NULL, 'Shooter');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `groupID` int(11) NOT NULL,
  `groupPicture` varchar(100) DEFAULT NULL,
  `groupName` varchar(65) NOT NULL,
  `groupInfo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previousnames`
--

CREATE TABLE `previousnames` (
  `previousnamesID` int(11) NOT NULL,
  `previousUsernames` varchar(60) DEFAULT NULL,
  `USERS_userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `twitch` varchar(60) DEFAULT NULL,
  `youtube` varchar(60) DEFAULT NULL,
  `instagram` varchar(60) DEFAULT NULL,
  `voiceCommsIP` varchar(45) DEFAULT NULL,
  `profilePicture` varchar(100) DEFAULT NULL,
  `profileInfo` longtext,
  `voiceComPass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `twitch`, `youtube`, `instagram`, `voiceCommsIP`, `profilePicture`, `profileInfo`, `voiceComPass`) VALUES
(1, 'PandaJoey', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(2, 'Carnage', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(3, 'Luke', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(4, 'Lord Ali', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(5, 'Wyxi', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(6, 'Luna', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(7, 'Sage Luke', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(8, 'Bathory', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(9, 'DoubleDeath', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(10, 'Whoota', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(11, 'Rob', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(12, 'Bear', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(13, 'DAVETHEONE', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(14, 'Maxer00', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(15, 'LovelyNuts', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(16, 'MDNZ', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(17, 'Sweeck', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(18, 'Liam', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(19, 'WhaleSpy', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(20, 'Barry', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(21, 'Brickwalled', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(22, 'NoobClassic', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(23, 'Prince', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(24, 'Legend', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(25, 'TomHardy', 'http://www.twitch.tv/', 'https://www.youtube.com/', 'https://www.instagram.com/', '87.233.222.114:6473', '/lib/useprofilepics', 'Hello I am some user who likes to play games huehue', NULL),
(26, 'Test123', NULL, 'http://youtube.com', NULL, NULL, NULL, 'This is my profile', NULL),
(27, 'Test123', NULL, 'http://youtube.com', NULL, NULL, NULL, 'This is my profile', NULL),
(28, 'Test123', NULL, 'http://youtube.com', NULL, NULL, NULL, 'This is my profile', NULL),
(29, 'Test123', NULL, 'http://youtube.com', NULL, NULL, NULL, 'This is my profile', NULL),
(30, 'Test123', NULL, 'http://youtube.com', NULL, NULL, NULL, 'This is my profile', NULL),
(31, 'This is my username', NULL, 'http://youtube.com/xxx', NULL, NULL, NULL, 'this is my profile', NULL),
(32, 'Jozeph Aaron Crickmore', NULL, 'http://youtube.com/123', NULL, NULL, NULL, '123312312312321', NULL),
(33, '[', NULL, '[', NULL, NULL, NULL, '[', NULL),
(34, '[', NULL, '[', NULL, NULL, NULL, '[', NULL),
(35, '{', NULL, '{', NULL, NULL, NULL, '{', NULL),
(36, 'Jozeph Aaron Crickmore', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'dasdas', NULL),
(37, '', 'Array', '', 'Array', 'Array', 'Array', '', NULL),
(38, 'aerg', 'Array', 'aerg', 'Array', 'Array', 'Array', 'aerg', NULL),
(39, 'Luke', 'Array', '', 'Array', 'Array', 'Array', 'awdad awd awdaw aw ', NULL),
(40, 'Luke', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', 'awdad awd awdaw aw ', NULL),
(41, '', 'Array', '', 'Array', 'Array', 'Array', '', NULL),
(42, 'Luke', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', 'awd waf gsh', NULL),
(43, 'Luke', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', 'awd waf gsh', NULL),
(44, 'Luke', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'esgsg', NULL),
(45, 'Luke', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'esgsg', NULL),
(46, 'etrhreth', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'esgsg', NULL),
(47, 'etrhreth', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'esgsg', NULL),
(48, 'etrhreth', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'esgsg', NULL),
(49, 'etrhreth', NULL, 'http://youtube.com/123', NULL, NULL, NULL, 'esgsg', NULL),
(50, '', NULL, '', NULL, NULL, NULL, '', NULL),
(51, '', 'Array', '', 'Array', 'Array', 'Array', '', NULL),
(52, 'asegasg', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', '123 123as adaw ', NULL),
(53, 'asegasg', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', '123 123as adaw ', NULL),
(54, 'Jozeph Aaron Crickmore', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', 'sevs vrsv rvsr vrsv ', NULL),
(55, 'Jozeph Aaron Crickmore', 'Array', 'http://youtube.com/123', 'Array', 'Array', 'Array', 'sevs vrsv rvsr vrsv ', NULL),
(56, 'Jozeph Aaron Crickmore', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', '123.123.123.123', 'C:\\fakepath\\4.05-Critical-Art.jpg', '123123 fsefsfs', NULL),
(57, 'Jozeph Aaron Crickmore', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', '123.123.123.123', 'C:\\fakepath\\4.05-Critical-Art.jpg', ' gagarg egr erg ', NULL),
(58, 'Jozeph Aaron Crickmore', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', '123.123.123.123', 'C:\\fakepath\\4.07-V-Trigger.jpg', 'weg awrawerg ', NULL),
(59, 'test10', 'test10', 'test10', 'test10', 'test10', NULL, 'test10', NULL),
(60, 'test11', 'test11', 'test11', 'test11', 'test11', NULL, 'test11', 'test11'),
(61, 'Jozeph Aaron Crickmore', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', NULL, 'http://youtube.com/123', NULL),
(62, 'Luke', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', 'http://youtube.com/123', NULL, 'http://youtube.com/123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_has_games`
--

CREATE TABLE `users_has_games` (
  `USERS_userID` int(11) NOT NULL,
  `GAMES_gamesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_has_groups`
--

CREATE TABLE `users_has_groups` (
  `USERS_userID` int(11) NOT NULL,
  `GROUPS_groupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friendID`,`USERS_userID`),
  ADD KEY `fk_FRIENDS_USERS1_idx` (`USERS_userID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gamesID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groupID`),
  ADD UNIQUE KEY `groupName` (`groupName`);

--
-- Indexes for table `previousnames`
--
ALTER TABLE `previousnames`
  ADD PRIMARY KEY (`previousnamesID`,`USERS_userID`),
  ADD KEY `fk_PREVIOUSNAMES_USERS1_idx` (`USERS_userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users_has_games`
--
ALTER TABLE `users_has_games`
  ADD PRIMARY KEY (`USERS_userID`,`GAMES_gamesID`),
  ADD KEY `fk_USERS_has_GAMES_GAMES1_idx` (`GAMES_gamesID`),
  ADD KEY `fk_USERS_has_GAMES_USERS_idx` (`USERS_userID`);

--
-- Indexes for table `users_has_groups`
--
ALTER TABLE `users_has_groups`
  ADD PRIMARY KEY (`USERS_userID`,`GROUPS_groupID`),
  ADD KEY `fk_USERS_has_GROUPS_GROUPS1_idx` (`GROUPS_groupID`),
  ADD KEY `fk_USERS_has_GROUPS_USERS1_idx` (`USERS_userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `friendID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gamesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previousnames`
--
ALTER TABLE `previousnames`
  MODIFY `previousnamesID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `fk_FRIENDS_USERS1` FOREIGN KEY (`USERS_userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `previousnames`
--
ALTER TABLE `previousnames`
  ADD CONSTRAINT `fk_PREVIOUSNAMES_USERS1` FOREIGN KEY (`USERS_userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_games`
--
ALTER TABLE `users_has_games`
  ADD CONSTRAINT `fk_USERS_has_GAMES_GAMES1` FOREIGN KEY (`GAMES_gamesID`) REFERENCES `games` (`gamesID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USERS_has_GAMES_USERS` FOREIGN KEY (`USERS_userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_groups`
--
ALTER TABLE `users_has_groups`
  ADD CONSTRAINT `fk_USERS_has_GROUPS_GROUPS1` FOREIGN KEY (`GROUPS_groupID`) REFERENCES `groups` (`groupID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USERS_has_GROUPS_USERS1` FOREIGN KEY (`USERS_userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
