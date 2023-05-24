-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tests`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_1`
--

CREATE TABLE `company_1` (
  `company_code_1` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_1`
--

INSERT INTO `company_1` (`company_code_1`, `company_name`) VALUES
('JV', 'CCS JV'),
('SP', 'SAIPEM');

-- --------------------------------------------------------

--
-- Table structure for table `company_2`
--

CREATE TABLE `company_2` (
  `company_code_2` varchar(255) NOT NULL,
  `company_code_1` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_2`
--

INSERT INTO `company_2` (`company_code_2`, `company_code_1`, `company_name`) VALUES
('JVA', 'JV', 'CCS JV ASIA'),
('JVM', 'JV', 'CCS JV MILAN'),
('PTSI', 'SP', 'SAIPEM INDONESIA'),
('SPA', 'SP', 'SAIPEM MILAN');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_company`
-- (See below for the actual view)
--
CREATE TABLE `v_company` (
`company_code_1` varchar(255)
,`company_name_1` varchar(255)
,`company_code_2` varchar(255)
,`company_name_2` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `v_company`
--
DROP TABLE IF EXISTS `v_company`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_company`  AS   (select `a`.`company_code_1` AS `company_code_1`,`a`.`company_name` AS `company_name_1`,`b`.`company_code_2` AS `company_code_2`,`b`.`company_name` AS `company_name_2` from (`company_1` `a` join `company_2` `b` on(`a`.`company_code_1` = `b`.`company_code_1`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_1`
--
ALTER TABLE `company_1`
  ADD PRIMARY KEY (`company_code_1`);

--
-- Indexes for table `company_2`
--
ALTER TABLE `company_2`
  ADD PRIMARY KEY (`company_code_2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
