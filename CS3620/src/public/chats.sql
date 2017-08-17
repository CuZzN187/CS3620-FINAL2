-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 04:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chats`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `idMsg` int(15) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `itemid` int(10) NOT NULL,
  `chatroomName` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`itemid`, `chatroomName`) VALUES
(1, 'The Cool Room'),
(2, 'The Lame Room'),
(3, 'The Big Room'),
(4, 'The PHP Room');

-- --------------------------------------------------------

--
-- Table structure for table `thebigroom`
--

CREATE TABLE `thebigroom` (
  `idMsg` int(11) NOT NULL,
  `Sender` varchar(2) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thecoolroom`
--

CREATE TABLE `thecoolroom` (
  `idMsg` int(11) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thelameroom`
--

CREATE TABLE `thelameroom` (
  `idMsg` int(11) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thephproom`
--

CREATE TABLE `thephproom` (
  `idMsg` int(11) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idMsg`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `thecoolroom`
--
ALTER TABLE `thecoolroom`
  ADD PRIMARY KEY (`idMsg`);

--
-- Indexes for table `thelameroom`
--
ALTER TABLE `thelameroom`
  ADD PRIMARY KEY (`idMsg`);

--
-- Indexes for table `thephproom`
--
ALTER TABLE `thephproom`
  ADD PRIMARY KEY (`idMsg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `idMsg` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `thecoolroom`
--
ALTER TABLE `thecoolroom`
  MODIFY `idMsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thelameroom`
--
ALTER TABLE `thelameroom`
  MODIFY `idMsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `thephproom`
--
ALTER TABLE `thephproom`
  MODIFY `idMsg` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
