-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 05:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `Names` varchar(100) NOT NULL,
  `Airpno` varchar(20) NOT NULL,
  `DDate` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`Names`, `Airpno`, `DDate`, `phone`, `email`, `class`) VALUES
('Rohit Yadav, abc d, sa a', 'UK_1563', '2022-11-23', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, dfs dsfs, sdd dsf', 'I5_4597', '2022-11-23', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, d d, s s', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, ss s', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, ss s', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, k k', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, s d', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, d f', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, Rohan Chaudhary', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav, s z', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav', 'UK_1563', '2022-11-23', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Rohit Yadav', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav\n', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 2,\nRahul Yadav Seat Number = 1\n', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1\n,Rahul Yadav Seat Number = 2\n.', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1,Rahul Yadav Seat Number = 2.', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1.', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1.', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1,d f Seat Number = 2.', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1,d f Seat Number = 2.', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy'),
('Rohit Yadav Seat Number = 1,<br>d f Seat Number = 2.<br>', 'AI_7845', '2022-12-01', '7985962411', 'rohit19992002@gmail.', 'Economy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
