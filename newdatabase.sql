-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2014 at 08:04 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gen` varchar(6) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `wgt` float NOT NULL,
  `hgt` float NOT NULL,
  `addr` varchar(30) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `user` varchar(10) CHARACTER SET ucs2 COLLATE ucs2_esperanto_ci NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mem` varchar(20) NOT NULL,
  PRIMARY KEY (`user`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `gen`, `dob`, `wgt`, `hgt`, `addr`, `mob`, `user`, `pwd`, `email`, `mem`) VALUES
('Shefali', 'Jha', 'female', '1993-08-05', 54, 5.7, 'Durg', '9407600338', 'Shef', '5893', 'shefali605@gmail.com', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `gen` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `addr` varchar(20) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`fname`, `lname`, `gen`, `dob`, `addr`, `mob`, `email`) VALUES
('pranshant', 'singh', 'male', '2014-10-06', 'bhilai', '8647893210', 'pranshant@gmail.com'),
('pratik', 'bajpai', 'male', '2014-06-10', 'bhilai', '9436789432', 'pratik8@gmail.com');
