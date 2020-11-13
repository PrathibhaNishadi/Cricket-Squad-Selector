-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 06:41 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricketsquadselector`
--

-- --------------------------------------------------------

--
-- Table structure for table `odiballing`
--

CREATE TABLE `odiballing` (
  `Name` varchar(19) DEFAULT NULL,
  `Type` varchar(18) DEFAULT NULL,
  `Wickets` decimal(32,14) DEFAULT NULL,
  `Rank` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odiballing`
--

INSERT INTO `odiballing` (`Name`, `Type`, `Wickets`, `Rank`) VALUES
('Akila Dananjaya', 'Allrounder', '1.39433646202087', '1.0'),
('Lasith Malinga', 'Bowler', '1.37305355072021', '2.0'),
('Vishwa Fernando', 'Bowler', '1.07996773719788', '3.0'),
('Kamindu Mendis', 'Allrounder', '1.06557559967041', '4.0'),
('Thisara Perera', 'Allrounder', '1.02864325046539', '5.0'),
('Dushmantha Chameera', 'Bowler', '1.01715028285980', '6.0'),
('Amila Aponso', 'Bowler', '1.00277829170227', '7.0'),
('Nuwan Pradeep', 'Bowler', '0.95954573154449', '8.0'),
('Suranga Lakmal', 'Bowler', '0.95809781551361', '9.0'),
('Lahiru Kumara', 'Bowler', '0.94532573223114', '10.0'),
('Isuru Udana', 'Allrounder', '0.92850768566132', '11.0'),
('Kasun Rajitha', 'Bowler', '0.89925748109818', '12.0'),
('Shehan Jayasuriya', 'Batting allrounder', '0.88592332601547', '13.0'),
('Lakshan Sandakan', 'Bowler', '0.84337526559830', '14.0'),
('Dhananjaya de Silva', 'Allrounder', '0.72471731901169', '15.0'),
('Dasun Shanaka', 'Allrounder', '0.55115717649460', '16.0');

-- --------------------------------------------------------

--
-- Table structure for table `odibatting`
--

CREATE TABLE `odibatting` (
  `Name` varchar(22) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Runs` decimal(18,13) DEFAULT NULL,
  `Rank` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odibatting`
--

INSERT INTO `odibatting` (`Name`, `Type`, `Runs`, `Rank`) VALUES
('Thisara Perera', 'Allrounder', '33.9181594848633', '1.0'),
('Niroshan Dickwella', 'Wicketkeeper batsman', '32.6233291625977', '2.0'),
('Kusal Perera', 'Wicketkeeper batsman', '31.8900527954102', '3.0'),
('Angelo Mathews', 'Allrounder', '30.0293045043945', '4.0'),
('Dhananjaya de Silva', 'Allrounder', '28.8056793212891', '5.0'),
('Kusal Mendis', 'Wicketkeeper batsman', '26.3504981994629', '6.0'),
('Danushka Gunathilaka', 'Allrounder', '25.8900985717773', '7.0'),
('Oshada Fernando', 'Batsman', '24.6980247497559', '8.0'),
('Isuru Udana', 'Allrounder', '24.2245826721191', '9.0'),
('Dasun Shanaka', 'Allrounder', '22.1706237792969', '10.0'),
('Upul Tharanga', 'Batsman', '19.7366790771484', '11.0'),
('Sadeera Samarawickrama', 'Wicketkeeper batsman', '19.5056304931641', '12.0'),
('Dinesh Chandimal', 'Wicketkeeper batsman', '19.4830493927002', '13.0'),
('Avishka Fernando', 'Opening batsman', '18.2138805389404', '14.0'),
('Dilruwan Perera', 'Allrounder', '17.7735366821289', '15.0'),
('Angelo Perera', 'Allrounder', '16.9396247863770', '16.0'),
('Priyamal Perera', 'Middle-order batsman', '16.0732192993164', '17.0'),
('Kamindu Mendis', 'Allrounder', '15.7198295593262', '18.0'),
('Shehan Jayasuriya', 'Batting allrounder', '13.1249799728394', '19.0'),
('Suranga Lakmal', 'Bowler', '12.8628892898560', '20.0'),
('Asela Gunaratne', 'Batsman', '12.7097225189209', '21.0'),
('Amila Aponso', 'Bowler', '12.2244405746460', '22.0'),
('Vishwa Fernando', 'Bowler', '12.1681203842163', '23.0'),
('Lahiru Kumara', 'Bowler', '11.7975864410400', '24.0'),
('Dushmantha Chameera', 'Bowler', '11.6756458282471', '25.0'),
('Prabath Jayasuriya', 'Bowler', '11.6122894287109', '26.0'),
('Seekkuge Prasanna', 'Allrounder', '10.3258342742920', '27.0'),
('Akila Dananjaya', 'Allrounder', '10.2356014251709', '28.0'),
('Kasun Rajitha', 'Bowler', '9.1845369338989', '29.0'),
('Lakshan Sandakan', 'Bowler', '7.7510976791382', '30.0'),
('Nuwan Pradeep', 'Bowler', '7.1506419181824', '31.0'),
('Lasith Malinga', 'Bowler', '6.1090087890625', '32.0');

-- --------------------------------------------------------

--
-- Table structure for table `odiperformances`
--

CREATE TABLE `odiperformances` (
  `Name` varchar(16) DEFAULT NULL,
  `Matches` int(2) DEFAULT NULL,
  `Runs` int(3) DEFAULT NULL,
  `High Score` varchar(3) DEFAULT NULL,
  `Bat Avg` varchar(4) DEFAULT NULL,
  `100s` int(1) DEFAULT NULL,
  `Wickets` varchar(2) DEFAULT NULL,
  `BBI` varchar(6) DEFAULT NULL,
  `5 wickets` varchar(4) DEFAULT NULL,
  `Bowl Avg` varchar(1) DEFAULT NULL,
  `Catches` int(2) DEFAULT NULL,
  `Stumps` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odiperformances`
--

INSERT INTO `odiperformances` (`Name`, `Matches`, `Runs`, `High Score`, `Bat Avg`, `100s`, `Wickets`, `BBI`, `5 wickets`, `Bowl Avg`, `Catches`, `Stumps`) VALUES
('NLTC Perera', 20, 561, '140', '33', 1, '20', 'May-55', '30', '1', 6, 0),
('N Dickwella', 16, 497, '95', '33.1', 0, '-', '-', '-', '-', 10, 3),
('MDKJ Perera', 15, 427, '102', '32.8', 1, '-', '-', '-', '-', 5, 0),
('BKG Mendis', 18, 387, '60', '21.5', 0, '-', '-', '-', '-', 7, 0),
('DM de Silva', 15, 346, '84', '28.8', 0, '11', 'Mar-41', '33.8', '0', 11, 0),
('AD Mathews', 7, 273, '97*', '54.6', 0, '-', '-', '-', '-', 2, 0),
('MD Shanaka', 10, 208, '66', '23.1', 0, '1', '20-Jan', '75', '0', 0, 0),
('WU Tharanga', 12, 171, '36', '15.5', 0, '-', '-', '-', '-', 2, 0),
('LD Chandimal', 7, 166, '80', '27.6', 0, '-', '-', '-', '-', 1, 0),
('MD Gunathilaka', 3, 145, '71', '48.3', 0, '0', '-', '-', '0', 0, 0),
('A Dananjaya', 15, 129, '37', '14.3', 0, '27', '29-Jun', '23.9', '1', 7, 0),
('BOP Fernando', 5, 127, '49', '25.4', 0, '0', '-', '-', '0', 0, 0),
('I Udana', 3, 110, '78', '55', 0, '2', 'Feb-50', '51', '0', 0, 0),
('S Samarawickrama', 3, 90, '54', '30', 0, '-', '-', '-', '-', 1, 0),
('WIA Fernando', 4, 71, '29', '17.7', 0, '-', '-', '-', '-', 2, 0),
('SL Malinga', 14, 54, '17', '7.71', 0, '21', 'May-44', '30.6', '1', 2, 0),
('RAS Lakmal', 6, 44, '20', '11', 0, '7', 'Mar-46', '35.5', '0', 5, 0),
('PARP Perera', 2, 33, '33', '16.5', 0, '-', '-', '-', '-', 1, 0),
('GSNFG Jayasuriya', 3, 32, '18', '10.6', 0, '1', '22-Jan', '61', '0', 0, 0),
('AK Perera', 1, 31, '31', '31', 0, '0', '-', '-', '0', 0, 0),
('MDK Perera', 1, 29, '29', '29', 0, '0', '-', '-', '0', 0, 0),
('PADLR Sandakan', 8, 20, '6', '6.66', 0, '2', 'Jan-54', '199', '0', 4, 0),
('DAS Gunaratne', 2, 17, '11', '8.5', 0, '0', '-', '-', '0', 0, 0),
('PHKD Mendis', 2, 17, '9', '17', 0, '1', 'Jan-45', '79', '0', 0, 0),
('S Prasanna', 2, 16, '16', '8', 0, '0', '-', '-', '0', 1, 0),
('NGRP Jayasuriya', 2, 11, '11*', '11', 0, '0', '-', '-', '0', 0, 0),
('CBRLS Kumara', 4, 10, '7*', '10', 0, '4', 'Feb-34', '35', '0', 1, 0),
('N Pradeep', 6, 9, '6*', '9', 0, '5', 'Feb-72', '60.8', '0', 0, 0),
('MA Aponso', 3, 4, '4', '2', 0, '3', '27-Feb', '39.6', '0', 0, 0),
('PVD Chameera', 3, 3, '2*', '3', 0, '4', '20-Mar', '29.5', '0', 0, 0),
('MVT Fernando', 2, 3, '2*', '-', 0, '2', 'Jan-43', '45', '0', 0, 0),
('CAK Rajitha', 6, 0, '0*', '0', 0, '5', '21-Jan', '47.8', '0', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t20balling`
--

CREATE TABLE `t20balling` (
  `Name` varchar(19) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Wickets` int(18) DEFAULT NULL,
  `Rank` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t20balling`
--

INSERT INTO `t20balling` (`Name`, `Type`, `Wickets`, `Rank`) VALUES
('Lasith Malinga', 'Bowler', 1, '1.0'),
('Lakshan Sandakan', 'Bowler', 1, '2.0'),
('Akila Dananjaya', 'Allrounder', 1, '3.0'),
('Suranga Lakmal', 'Bowler', 1, '4.0'),
('Jeffrey Vandersay', 'Bowler', 1, '5.0'),
('Isuru Udana', 'Allrounder', 1, '6.0'),
('Kasun Rajitha', 'Bowler', 1, '7.0'),
('Dhananjaya de Silva', 'Allrounder', 1, '8.0'),
('Amila Aponso', 'Bowler', 1, '9.0'),
('Thisara Perera', 'Allrounder', 1, '10.0');

-- --------------------------------------------------------

--
-- Table structure for table `t20batting`
--

CREATE TABLE `t20batting` (
  `Name` varchar(22) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Runs` int(18) DEFAULT NULL,
  `Rank` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t20batting`
--

INSERT INTO `t20batting` (`Name`, `Type`, `Runs`, `Rank`) VALUES
('Isuru Udana', 'Allrounder', 22, '1.0'),
('Dinesh Chandimal', 'Wicketkeeper batsman', 19, '2.0'),
('Thisara Perera', 'Allrounder', 18, '3.0'),
('Niroshan Dickwella', 'Wicketkeeper batsman', 17, '4.0'),
('Kamindu Mendis', 'Allrounder', 17, '5.0'),
('Kusal Perera', 'Wicketkeeper batsman', 16, '6.0'),
('Dhananjaya de Silva', 'Allrounder', 16, '7.0'),
('Lahiru Kumara', 'Bowler', 15, '8.0'),
('Angelo Perera', 'Allrounder', 15, '9.0'),
('Dasun Shanaka', 'Allrounder', 15, '10.0'),
('Lasith Malinga', 'Bowler', 14, '11.0'),
('Akila Dananjaya', 'Allrounder', 14, '12.0'),
('Avishka Fernando', 'Opening batsman', 14, '13.0'),
('Kusal Mendis', 'Wicketkeeper batsman', 14, '14.0'),
('Lakshan Sandakan', 'Bowler', 13, '15.0'),
('Kasun Rajitha', 'Bowler', 12, '16.0'),
('Angelo Mathews', 'Allrounder', 7, '18.5'),
('Sadeera Samarawickrama', 'Wicketkeeper batsman', 7, '18.5'),
('Suranga Lakmal', 'Bowler', 7, '18.5'),
('Amila Aponso', 'Bowler', 7, '18.5');

-- --------------------------------------------------------

--
-- Table structure for table `t20performances`
--

CREATE TABLE `t20performances` (
  `Name` varchar(16) DEFAULT NULL,
  `Matches` int(1) DEFAULT NULL,
  `Runs` int(3) DEFAULT NULL,
  `High Score` varchar(3) DEFAULT NULL,
  `Bat Avg` varchar(4) DEFAULT NULL,
  `100s` int(1) DEFAULT NULL,
  `Wickets` varchar(1) DEFAULT NULL,
  `BBI` varchar(6) DEFAULT NULL,
  `5 wickets` varchar(4) DEFAULT NULL,
  `Bowl Avg` varchar(1) DEFAULT NULL,
  `Catches` int(1) DEFAULT NULL,
  `Stumps` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t20performances`
--

INSERT INTO `t20performances` (`Name`, `Matches`, `Runs`, `High Score`, `Bat Avg`, `100s`, `Wickets`, `BBI`, `5 wickets`, `Bowl Avg`, `Catches`, `Stumps`) VALUES
('NLTC Perera', 6, 149, '57', '24.8', 0, '1', 'Jan-42', '102', '0', 1, 0),
('I Udana', 5, 139, '84*', '69.5', 0, '3', '9-Jan', '46.6', '0', 2, 0),
('DM de Silva', 6, 90, '31', '15', 0, '4', '22-Feb', '19.2', '0', 2, 0),
('N Dickwella', 5, 79, '38', '15.8', 0, '-', '-', '-', '-', 3, 0),
('PHKD Mendis', 4, 66, '41', '16.5', 0, '0', '-', '-', '0', 1, 0),
('LD Chandimal', 2, 62, '36*', '62', 0, '-', '-', '-', '-', 4, 0),
('AK Perera', 3, 42, '16', '14', 0, '-', '-', '-', '-', 0, 0),
('MD Shanaka', 3, 33, '16', '11', 0, '-', '-', '-', '-', 2, 0),
('MDKJ Perera', 2, 26, '23', '13', 0, '-', '-', '-', '-', 0, 0),
('BKG Mendis', 5, 23, '17', '4.6', 0, '-', '-', '-', '-', 3, 0),
('A Dananjaya', 4, 20, '9', '6.66', 0, '4', '15-Feb', '29', '0', 0, 0),
('SL Malinga', 5, 19, '8', '4.75', 0, '7', '11-Feb', '18.7', '0', 2, 0),
('WIA Fernando', 3, 17, '16', '5.66', 0, '-', '-', '-', '-', 0, 0),
('CAK Rajitha', 2, 5, '5', '5', 0, '4', 'Mar-44', '17.7', '0', 0, 0),
('CBRLS Kumara', 1, 4, '4', '4', 0, '0', '-', '-', '0', 0, 0),
('PADLR Sandakan', 3, 2, '1*', '-', 0, '5', '19-Mar', '19.8', '0', 1, 0),
('MA Aponso', 1, 0, '0', '0', 0, '2', 'Feb-29', '14.5', '0', 0, 0),
('RAS Lakmal', 1, 0, '0', '0', 0, '1', 'Jan-38', '38', '0', 0, 0),
('AD Mathews', 1, 0, '0', '0', 0, '-', '-', '-', '-', 0, 0),
('S Samarawickrama', 1, 0, '0', '0', 0, '-', '-', '-', '-', 0, 0),
('JDF Vandersay', 3, 0, '0*', '-', 0, '2', '25-Jan', '42.5', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testballing`
--

CREATE TABLE `testballing` (
  `Name` varchar(20) DEFAULT NULL,
  `Type` varchar(15) DEFAULT NULL,
  `Wickets` int(19) DEFAULT NULL,
  `Rank` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testballing`
--

INSERT INTO `testballing` (`Name`, `Type`, `Wickets`, `Rank`) VALUES
('Dilruwan Perera', 'Allrounder', 2, '1.0'),
('Lahiru Kumara', 'Bowler', 2, '2.0'),
('Akila Dananjaya', 'Allrounder', 2, '3.0'),
('Vishwa Fernando', 'Bowler', 2, '4.0'),
('Kasun Rajitha', 'Bowler', 2, '5.0'),
('Suranga Lakmal', 'Bowler', 2, '6.0'),
('Malinda Pushpakumara', 'Allrounder', 2, '7.0'),
('Lakshan Sandakan', 'Bowler', 1, '8.0'),
('Lasith Embuldeniya', 'Bowler', 1, '9.0'),
('Chamika Karunaratne', 'Bowler', 1, '10.0'),
('Dushmantha Chameera', 'Bowler', 1, '11.0'),
('Dhananjaya de Silva', 'Allrounder', -3, '12.0'),
('Dimuth Karunaratne', 'Opening batsman', -4, '13.0');

-- --------------------------------------------------------

--
-- Table structure for table `testbatting`
--

CREATE TABLE `testbatting` (
  `Name` varchar(20) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Runs` int(18) DEFAULT NULL,
  `Rank` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testbatting`
--

INSERT INTO `testbatting` (`Name`, `Type`, `Runs`, `Rank`) VALUES
('Angelo Mathews', 'Allrounder', 43, '1.0'),
('Dimuth Karunaratne', 'Opening batsman', 41, '2.0'),
('Kusal Mendis', 'Wicketkeeper batsman', 38, '3.0'),
('Oshada Fernando', 'Batsman', 34, '4.0'),
('Kusal Perera', 'Wicketkeeper batsman', 34, '5.0'),
('Dinesh Chandimal', 'Wicketkeeper batsman', 31, '6.0'),
('Niroshan Dickwella', 'Wicketkeeper batsman', 29, '7.0'),
('Roshen Silva', 'Batsman', 29, '8.0'),
('Dhananjaya de Silva', 'Allrounder', 26, '9.0'),
('Lahiru Thirimanne', 'Top-order batsman', 25, '10.0'),
('Danushka Gunathilaka', 'Allrounder', 24, '11.0'),
('Akila Dananjaya', 'Allrounder', 23, '12.0'),
('Dilruwan Perera', 'Allrounder', 22, '13.0'),
('Suranga Lakmal', 'Bowler', 20, '14.0'),
('Lasith Embuldeniya', 'Bowler', 19, '15.0'),
('Malinda Pushpakumara', 'Allrounder', 18, '16.0'),
('Kasun Rajitha', 'Bowler', 17, '17.0'),
('Lakshan Sandakan', 'Bowler', 17, '18.0'),
('Rangana Herath', 'Bowler', 17, '19.0'),
('Lahiru Gamage', 'Bowler', 17, '20.0'),
('Vishwa Fernando', 'Bowler', 16, '21.0'),
('Kaushal Silva', 'Wicketkeeper batsman', 16, '22.0'),
('Chamika Karunaratne', 'Bowler', 15, '23.0'),
('Mahela Udawatte', 'Batsman', 15, '24.0'),
('Lahiru Kumara', 'Bowler', 15, '25.0'),
('Dushmantha Chameera', 'Bowler', 15, '26.0');

-- --------------------------------------------------------

--
-- Table structure for table `testperformances`
--

CREATE TABLE `testperformances` (
  `Name` varchar(15) DEFAULT NULL,
  `Matches` int(2) DEFAULT NULL,
  `Runs` int(3) DEFAULT NULL,
  `High Score` varchar(4) DEFAULT NULL,
  `Bat Avg` decimal(4,2) DEFAULT NULL,
  `100s` int(1) DEFAULT NULL,
  `Wickets` varchar(2) DEFAULT NULL,
  `BBI` varchar(6) DEFAULT NULL,
  `5 wickets` varchar(4) DEFAULT NULL,
  `Bowl Avg` varchar(1) DEFAULT NULL,
  `Catches` int(2) DEFAULT NULL,
  `Stumps` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testperformances`
--

INSERT INTO `testperformances` (`Name`, `Matches`, `Runs`, `High Score`, `Bat Avg`, `100s`, `Wickets`, `BBI`, `5 wickets`, `Bowl Avg`, `Catches`, `Stumps`) VALUES
('N Dickwella', 14, 636, '80*', '26.50', 0, '-', '-', '-', '-', 36, 3),
('BKG Mendis', 14, 927, '141*', '35.65', 2, '0', '-', '-', '0', 28, 0),
('RAS Lakmal', 13, 197, '33*', '10.94', 0, '35', 'May-54', '27.3', '2', 4, 0),
('DM de Silva', 12, 429, '73', '18.65', 0, '8', 'Mar-36', '43', '0', 18, 0),
('FDM Karunaratne', 11, 888, '158*', '42.28', 1, '1', '12-Jan', '41', '0', 5, 0),
('MDK Perera', 11, 211, '30', '12.41', 0, '47', 'Jun-32', '31.1', '3', 2, 0),
('ARS Silva', 9, 393, '85', '23.11', 0, '-', '-', '-', '-', 2, 0),
('AD Mathews', 8, 640, '120*', '49.23', 1, '0', '-', '-', '0', 10, 0),
('LD Chandimal', 7, 355, '119*', '29.58', 1, '-', '-', '-', '-', 3, 0),
('MD Gunathilaka', 6, 251, '61', '20.91', 0, '0', '-', '-', '0', 4, 0),
('CBRLS Kumara', 6, 8, '8', '1.33', 0, '27', 'Apr-58', '25.3', '0', 0, 0),
('MDKJ Perera', 6, 345, '153*', '43.12', 1, '-', '-', '-', '-', 1, 0),
('CAK Rajitha', 6, 22, '12', '3.14', 0, '23', '20-Mar', '29.5', '0', 4, 0),
('A Dananjaya', 4, 115, '43*', '23.00', 0, '19', '6/115', '32.1', '2', 0, 0),
('HMRKB Herath', 4, 60, '35', '10.00', 0, '18', 'Jun-98', '25.7', '1', 2, 0),
('HDRL Thirimanne', 4, 175, '41', '21.87', 0, '-', '-', '-', '-', 4, 0),
('MVT Fernando', 3, 7, '6*', '3.50', 0, '16', 'Apr-62', '24.7', '0', 1, 0),
('PVD Chameera', 2, 8, '5*', '2.66', 0, '2', 'Jan-68', '129', '0', 1, 0),
('L Embuldeniya', 2, 28, '24', '14.00', 0, '6', 'May-66', '23.8', '1', 1, 0),
('BOP Fernando', 2, 131, '75*', '43.66', 0, '0', '-', '-', '0', 2, 0),
('PM Pushpakumara', 2, 60, '42*', '20.00', 0, '9', '28-Mar', '31.3', '0', 2, 0),
('PADLR Sandakan', 2, 40, '25', '10.00', 0, '9', 'May-95', '21.1', '1', 2, 0),
('JK Silva', 2, 41, '30', '10.25', 0, '-', '-', '-', '-', 1, 0),
('ML Udawatte', 2, 23, '19', '5.75', 0, '-', '-', '-', '-', 2, 0),
('PLS Gamage', 1, 3, '3', '3.00', 0, '0', '-', '-', '0', 0, 0),
('C Karunaratne', 1, 22, '22', '11.00', 0, '1', '1/130', '148', '0', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
