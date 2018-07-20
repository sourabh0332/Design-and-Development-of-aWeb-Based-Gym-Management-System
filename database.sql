-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2014 at 10:30 AM
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
  `mob` int(10) NOT NULL,
  `user` varchar(10) CHARACTER SET ucs2 COLLATE ucs2_esperanto_ci NOT NULL,
  `pwd` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

