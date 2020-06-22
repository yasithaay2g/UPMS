-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 09:34 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upmsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadf`
--

CREATE TABLE `uploadf` (
  `file_id` int(11) NOT NULL,
  `university` varchar(40) NOT NULL,
  `level` varchar(25) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `file_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadf`
--

INSERT INTO `uploadf` (`file_id`, `university`, `level`, `year`, `semester`, `subject`, `file_name`) VALUES
(4, 'RUHUNA', 'Level 3', '2018', 'Semester 1', 'mat', 'L1_Introduction_to_DBMS_student_copy.pdf'),
(5, 'MORATUWA', 'Level 3', '2018', 'Semester 1', 'mat', 'bsc_assignment2(1).pdf'),
(6, 'RUHUNA', 'Level 2', '2017', 'Semester 2', 'che', 'CHE 1214 Tutorial on Thermodynamics 2 (1).pdf'),
(7, 'MORATUWA', 'Level 2', '2016', 'Semester 1', 'mat', 'CHE1214-reactivity of aromatic compounds-day2.pdf'),
(8, 'MORATUWA', 'Level 1', '2016', 'Semester 1', 'mat', 'cha 20.pdf'),
(9, 'MORATUWA', 'Level 2', '2016', 'Semester 2', 'com', 'Sakman Bawanawa by U Dhammajiva Maha Thero.pdf'),
(10, 'SABARAGAMUWA', 'Level 3', '2018', 'Semester 1', 'che', 'Ass1_2017(1).pdf'),
(11, 'PERADENIYA', 'Level 1', '2016', 'Semester 2', 'mat', 'COM121b- MarkingScheme  (2).pdf'),
(12, 'RUHUNA', 'Level 2', '2017', 'Semester 1', 'phy', 'Data Structures and Algorithms-Tutorial1 (1).pdf'),
(13, 'SABARAGAMUWA', 'Level 2', '2016', 'Semester 1', 'com', 'Learning Outcomes.pdf'),
(14, 'RUHUNA', 'Level 3', '2018', 'Semester 1', 'mat', 'Lecture12- Sorting.pdf'),
(15, 'RUHUNA', 'Level 1', '2018', 'Semester 2', 'phy', 'Lecture6- Forms.pdf'),
(16, 'SABARAGAMUWA', 'Level 3', '2018', 'Semester 2', 'che', 'Lecture15- XML.pdf'),
(17, 'MORATUWA', 'Level 3', '2017', 'Semester 2', 'mat', 'Lecture1- Introduction.pdf'),
(18, 'RUHUNA', 'Level 2', '2017', 'Semester 1', 'che', 'chemical kinetics 1214.pdf'),
(19, 'MORATUWA', 'Level 1', '2018', 'Semester 1', 'com', 'Lec 1.pdf'),
(20, 'SABARAGAMUWA', 'Level 1', '2018', 'Semester 1', 'com', 'Lec 2.pdf'),
(21, 'RUHUNA', 'Level 1', '2018', 'Semester 1', 'com', 'Form Validation.pdf'),
(22, 'PERADENIYA', 'Level 1', '2018', 'Semester 1', 'mat', 'Lecture3-HTMLII.pdf'),
(23, 'MORATUWA', 'Level 2', '2017', 'Semester 2', 'mat', 'Lecture5 -CSS.pdf'),
(26, 'SABARAGAMUWA', 'Level 1', '2018', 'Semester 1', 'phy', 'acknowledgement sample 01.docx'),
(27, 'MORATUWA', 'Level 1', '2018', 'Semester 1', 'che', '07-cogs3-fe-bootstrap-2.pdf'),
(28, 'MORATUWA', 'Level 1', '2018', 'Semester 1', 'mat', 'Lec 1 (4).pdf'),
(29, 'RUHUNA', 'Level 1', '2017', 'Semester 1', 'phy', '10_chapter 1.pdf'),
(30, 'MORATUWA', 'Level 1', '2017', 'Semester 1', 'mat', 'L4v2LMS.pdf'),
(31, 'MORATUWA', 'Level 1', '2018', 'Semester 1', 'mat', 'mysql_tutorial.pdf'),
(32, 'RUHUNA', 'Level 1', '2018', 'Semester 1', 'com', 'Untitled-1.pdf'),
(33, 'SABARAGAMUWA', 'Level 1', '2018', 'Semester 1', 'mat', 'CV Format.pdf'),
(34, 'MORATUWA', 'Level 2', '2017', 'Semester 1', 'mat', 'charith madusanka_sc9506.pdf'),
(35, 'MORATUWA', 'Level 2', '2017', 'Semester 1', 'com', 'git-tim-sinhala.pdf'),
(36, 'MORATUWA', 'Level 2', '2017', 'Semester 1', 'com', 'al_chem_industrial_01.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `university` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `university`, `email`, `password`) VALUES
(1, 'Yasitha', 'Rukshan', 'Ruhuna', 'rukshanyasitha@yahoo.com', '008bd5ad93b754d500338c253d9c1770'),
(2, 'Gayathri', 'Kalpani', 'moratuwa', 'gayathri@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(3, 'kasun', 'dilshan', 'Sabaragamuwa', 'Kasun@gmail.com', '3f088ebeda03513be71d34d214291986'),
(4, 'kusal', 'nilanga', 'moratuwa', 'kusal@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4'),
(5, 'Ridma', 'Kanchana', 'Ruhuna', 'rkatukorala.1996@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Yasitha', 'Rukshan', 'RUHUNA', 'rukshanyasitha2@yahoo.com', 'd3eb9a9233e52948740d7eb8c3062d14'),
(7, 'samitha', 'Bimsara', 'Ruhuna', 'sami@gmail.com', 'e34a8899ef6468b74f8a1048419ccc8b'),
(8, 'abc', 'asd', 'moratuwa', 'abc@gmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(9, 'kusal1', 'nilanga1', 'RUHUNA', 'kusal1@gmail.com', '3ae0f311f9ea7c4aa4f155150bec1274'),
(10, 'vija', 'harshana', 'Sabaragamuwa', 'vija@gmail.com', '658c338c487089e50f3a4f5ba38163bd'),
(11, 'Sadun', 'sadun2', 'RUHUNA', 'sadun@gmail.com', '2b0515541cad1484efcb6f76008ea37b'),
(12, 'waruni', 'nuwanthika', 'Sabaragamuwa', 'waruni@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploadf`
--
ALTER TABLE `uploadf`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploadf`
--
ALTER TABLE `uploadf`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
