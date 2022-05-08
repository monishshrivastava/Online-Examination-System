-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 08:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `17017C04029` (                       
  `admin_id` int(11) ,
  `email` varchar(50) ,
  `password` varchar(500) 
);

--
-- Dumping data for table `admin`
--

INSERT INTO `17017C04029` (`admin_id`, `email`, `password`) VALUES
('1', 'ashutosh@a.com', '123456'),
('2', 'monish@ms.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `17017C04029_one` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
);

-- --------------------------------------------------------


--
-- Table structure for table `feedback`
--

CREATE TABLE `17017C04029_two` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `17017C04029_three` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `17017C04029_four` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `17017C04029_five` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `17017C04029_six` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `17017C04029_seven` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `17017C04029_eight` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `roll` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `17017C04029_nine` (
  `name` text DEFAULT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
);



ALTER TABLE `17017C04029`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `staff`
--
ALTER TABLE `17017C04029_nine`
  ADD PRIMARY KEY (`email`(100)),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `user`
--
ALTER TABLE `17017C04029_eight`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mob` (`mob`),
  ADD UNIQUE KEY `roll` (`roll`);
COMMIT;
