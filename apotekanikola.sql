-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekanikola`
--

-- --------------------------------------------------------

--
-- Table structure for table `lek`
--

CREATE TABLE `lek` (
  `lekID` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `godinaVazenja` int(11) NOT NULL,
  `cena` double NOT NULL,
  `proizvodjacID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lek`
--

INSERT INTO `lek` (`lekID`, `naziv`, `godinaVazenja`, `cena`, `proizvodjacID`) VALUES
(1, 'Brufen', 3, 350, 1),
(2, 'Nalgesin', 1, 780, 1),
(3, 'MetaFex', 2, 1210, 1),
(4, 'Magnetrans', 4, 1500, 2),
(5, 'Andol', 5, 2110, 4),
(6, 'Migresan', 3, 1100, 5),
(7, 'Probiotic', 2, 540, 4);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjac`
--

CREATE TABLE `proizvodjac` (
  `proizvodjacID` int(11) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `drzavaPorekla` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvodjac`
--

INSERT INTO `proizvodjac` (`proizvodjacID`, `naziv`, `drzavaPorekla`) VALUES
(1, 'Hemofarm', 'Srbija'),
(2, 'EKOSAN DOO', 'Srbija'),
(3, 'HEMOTEHNA DOO', 'Srbija'),
(4, 'Herba Svet DOO', 'Crna Gora'),
(5, 'JASVEL DOO', 'Madjarska');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lek`
--
ALTER TABLE `lek`
  ADD PRIMARY KEY (`lekID`),
  ADD KEY `proizvodjacID` (`proizvodjacID`);

--
-- Indexes for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  ADD PRIMARY KEY (`proizvodjacID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lek`
--
ALTER TABLE `lek`
  MODIFY `lekID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  MODIFY `proizvodjacID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lek`
--
ALTER TABLE `lek`
  ADD CONSTRAINT `lek_ibfk_1` FOREIGN KEY (`proizvodjacID`) REFERENCES `proizvodjac` (`proizvodjacID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
