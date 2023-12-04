-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2023 at 08:51 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `change_request`
--

CREATE TABLE `change_request` (
  `id` int(11) NOT NULL,
  `id_old_slot` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `newtime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `newday` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `change_request`
--

INSERT INTO `change_request` (`id`, `id_old_slot`, `newtime`, `newday`) VALUES
(1, '2', '13:00', 'sunday');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `name`, `type`) VALUES
('0', 'sall 1', 'td'),
('1', 'salle 11', 'tp'),
('2', 'salle 21', 'td'),
('3', 'salle 2', 'td'),
('4', 'salle 30', 'td');

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id`, `name`, `iduser`) VALUES
('1', 'bentalis adla', 19),
('2', 'karim', 20),
('3', 'benmounah zakaria', 21),
('4', 'ahmed', 26);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `userId`) VALUES
(1, 'nadjib chacha', 22),
(2, 'moussab bousaleme', 23),
(3, 'basset hala', 24),
(4, 'karim', 25),
(5, 'ali', 27);

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` varchar(20) NOT NULL,
  `modul` varchar(20) NOT NULL,
  `idp` varchar(20) DEFAULT NULL,
  `idc` varchar(20) DEFAULT NULL,
  `grp` varchar(11) DEFAULT NULL,
  `branch` varchar(30) NOT NULL,
  `timeS` varchar(20) DEFAULT NULL,
  `dayS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `modul`, `idp`, `idc`, `grp`, `branch`, `timeS`, `dayS`) VALUES
('1', 'upd', '1', '3', 'group 2', 'si', '11:30', 'monday'),
('2', 'omc', '2', '2', 'group 1', 'gl', '10:00', 'sunday'),
('3', 'gpi', '4', '4', 'group 1', 'sitwm1', '01:00', 'monday');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Num` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `branch` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Num`, `username`, `pass`, `role`, `branch`) VALUES
(18, 'admin', 'admin', 'admin', 'null'),
(19, 'alda', 'adla', 'prof', 'null'),
(20, 'karim', 'karim', 'prof', 'null'),
(21, 'zakou', 'zakou', 'prof', 'null'),
(22, 'nadjib', 'nono', 'student', 'si'),
(23, 'moussab', 'momo', 'student', 'si'),
(24, 'hala', 'hala', 'student', 'gl'),
(25, '212139057679', '02122003', 'student', 'si'),
(26, '212139059512', 'ahmed', 'prof', 'null'),
(27, 'ali', 'ali', 'student', 'sitwm1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `change_request`
--
ALTER TABLE `change_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_old_session` (`id_old_slot`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iduser_num` (`iduser`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userid_num` (`userId`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`),
  ADD KEY `idc` (`idc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `change_request`
--
ALTER TABLE `change_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `change_request`
--
ALTER TABLE `change_request`
  ADD CONSTRAINT `fk_old_session` FOREIGN KEY (`id_old_slot`) REFERENCES `time_slot` (`id`);

--
-- Constraints for table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `fk_iduser_num` FOREIGN KEY (`iduser`) REFERENCES `users` (`Num`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_userid_num` FOREIGN KEY (`userId`) REFERENCES `users` (`Num`);

--
-- Constraints for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD CONSTRAINT `time_slot_ibfk_2` FOREIGN KEY (`idp`) REFERENCES `professeur` (`id`),
  ADD CONSTRAINT `time_slot_ibfk_3` FOREIGN KEY (`idc`) REFERENCES `classroom` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
