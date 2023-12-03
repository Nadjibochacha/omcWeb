-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 09:29 PM
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
-- Database: `project_omc`
--

-- --------------------------------------------------------

--
-- Table structure for table `change_request`
--

CREATE TABLE `change_request` (
  `id` int(11) NOT NULL,
  `id_old_slot` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `idm` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `idp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `idc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `idg` int(11) DEFAULT NULL,
  `new_time_session` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` varchar(20) NOT NULL,
  `idm` varchar(20) DEFAULT NULL,
  `idp` varchar(20) DEFAULT NULL,
  `idc` varchar(20) DEFAULT NULL,
  `idg` int(11) DEFAULT NULL,
  `time_session` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `change_request`
--
ALTER TABLE `change_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_old_session` (`id_old_slot`),
  ADD KEY `fk_module` (`idm`),
  ADD KEY `fk_professeur` (`idp`),
  ADD KEY `fk_classroom` (`idc`),
  ADD KEY `fk_groupe` (`idg`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idm` (`idm`),
  ADD KEY `idp` (`idp`),
  ADD KEY `idc` (`idc`),
  ADD KEY `idg` (`idg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `change_request`
--
ALTER TABLE `change_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `change_request`
--
ALTER TABLE `change_request`
  ADD CONSTRAINT `fk_classroom` FOREIGN KEY (`idc`) REFERENCES `classroom` (`id`),
  ADD CONSTRAINT `fk_groupe` FOREIGN KEY (`idg`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `fk_module` FOREIGN KEY (`idm`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `fk_old_session` FOREIGN KEY (`id_old_slot`) REFERENCES `time_slot` (`id`),
  ADD CONSTRAINT `fk_professeur` FOREIGN KEY (`idp`) REFERENCES `professeur` (`id`);

--
-- Constraints for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD CONSTRAINT `time_slot_ibfk_1` FOREIGN KEY (`idm`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `time_slot_ibfk_2` FOREIGN KEY (`idp`) REFERENCES `professeur` (`id`),
  ADD CONSTRAINT `time_slot_ibfk_3` FOREIGN KEY (`idc`) REFERENCES `classroom` (`id`),
  ADD CONSTRAINT `time_slot_ibfk_4` FOREIGN KEY (`idg`) REFERENCES `groupe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
