-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 12:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `extra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `username`, `email`, `password`, `extra`) VALUES
(1, 'mohsin', 'mohsin12', 'mailme@gmail.com', 'password', ''),
(6, 'student', 'student12', 'ygyutyutuy@123.com', 'student', ''),
(8, 'buiuwi', 'nn', 'ygyutyutuy@123.com', 'password', ''),
(10, 'salik', 'mohsin', 'bhatmohsin170@gmail.com', 'abcd', ''),
(12, 'murtaza', 'murtaza12', 'mutr12@gmailcom', 'murt', ''),
(48, 'malik', 'malik123', 'malik123@gmail.com', '123654', ''),
(50, 'student', '12365', 'bhatmohsin170@gmail.com', '123', ''),
(52, 'student', '14562', 'ygyutyutuy@123.com', '000', '');

-- --------------------------------------------------------

--
-- Table structure for table `books_tbl`
--

CREATE TABLE `books_tbl` (
  `id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `auther` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `ISBN_no` varchar(30) NOT NULL,
  `book_copies` varchar(30) NOT NULL,
  `book_img` varchar(500) NOT NULL,
  `book_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_tbl`
--

INSERT INTO `books_tbl` (`id`, `book_name`, `auther`, `publisher`, `ISBN_no`, `book_copies`, `book_img`, `book_price`) VALUES
(1, 'JAVA', 'mohsin', 'kalyani', '1230201', '30', '342.jpg', '300'),
(5, 'math', 'me2', 'java', '101010', '120', 'favicon.png', '220'),
(6, 'kjkjj', 'jhhhh', 'java', 'vcbcb', '120', 'favicon.png', '220'),
(7, 'gaga', 'gagsgs', 'gsgsgxsg', 'hsgsgsgsg', '65', 'favicon.png', '120'),
(8, 'software engineering', 'rajab mall', 'psn', '1020306050', '30', '4 (2).jpg', '800'),
(9, 'unix and shell programming', 'mohsin', 'kalyani', '10203056', '30', '9.jpg', '220');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books_tbl`
--

CREATE TABLE `issue_books_tbl` (
  `id` int(11) NOT NULL,
  `student_rollno` varchar(30) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_contact` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_username` varchar(30) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_price` varchar(30) NOT NULL,
  `book_issue_date` varchar(30) NOT NULL,
  `book_return_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books_tbl`
--

INSERT INTO `issue_books_tbl` (`id`, `student_rollno`, `student_name`, `student_contact`, `student_email`, `student_username`, `book_name`, `book_price`, `book_issue_date`, `book_return_date`) VALUES
(3, '1700573', 'majid', '2012455555', 'malik123@gmail.com', 'majid12', 'gaga', '', '19-May-2020', '13-06-2020'),
(4, '1800120', 'syed shakir', '2020202020', 'syedshakir180@gmail.com', 'shakir123', 'JAVA', '', '19-May-2020', '13-06-2020'),
(6, '1700579', 'haseeb', '544555541545', 'bare@gmail.com', 'haseebysf', 'software engineering', '', '13-Jun-2020', '13-06-2020'),
(10, '1700578', 'mohin', '1258888448', 'malik123@gmail.com', 'mohinjio', 'JAVA', '', '13-Jun-2020', ''),
(11, '1700573', 'majid', '2012455555', 'malik123@gmail.com', 'majid12', 'JAVA', '', '13-Jun-2020', ''),
(12, '2020202', 'murtaza', '2147483647', 'malik123@gmail.com', 'faxilvb', 'gaga', '', '13-Jun-2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `name`, `username`, `rollno`, `dept`, `mobile`, `email`) VALUES
(1, 'mohsin', 'mohsin12', '1700573', 'Science', 2147483647, 'bhatmohsin170@gmail.com'),
(2, 'syed shakir', 'shakir123', '1800120', 'Science', 2020202020, 'syedshakir180@gmail.com'),
(3, 'haseeb', 'haseebysf', '1700579', 'Commerce', 2012479505, 'bare@gmail.com'),
(4, 'muaga', 'getme123', '1012131', 'Science', 1202222222, 'bhatmohsin170@gmail.com'),
(5, 'zikra', 'zikra22', '1700210', 'Commerce', 2147483647, 'malik123@gmail.com'),
(6, 'salik', '101044', '5454555', 'Commerce', 2147483647, 'bhatmohsin170@gmail.com'),
(7, 'mohin', 'mohinjio', '1700578', 'Arts', 1258888448, 'malik123@gmail.com'),
(8, 'majid', 'majid12', '1700573', 'Commerce', 2012455555, 'malik123@gmail.com'),
(9, 'murtaza', 'faxilvb', '2020202', 'Arts', 2147483647, 'malik123@gmail.com'),
(11, 'student', '155555', '2222222', 'Arts', 2010505555, 'mutr12@gmailcom'),
(15, 'student', 'murtaza15', '0202020', 'Arts', 2147483647, 'malik123@gmail.cooj'),
(16, 'student', 'murtaza15', '0202020', 'Arts', 2147483647, 'malik123@gmail.cooj'),
(17, 'naik', 'suhail', '1020540', 'Commerce', 2147483647, 'malik123@gmail.com'),
(18, 'mukh', 'mukh123', '1234567', 'Arts', 2147483647, 'mutr12@gmail.com'),
(19, 'salik', 'kkkkkk', '1010102', 'Arts', 2147483647, 'mutr12@gmail.com'),
(20, 'buiuwi', '454555', '0202020', 'Arts', 202020196, 'bhatmohsin170@gmail.com'),
(21, 'aadil gojri', 'aadil121', '1700539', 'Science', 2147483647, 'aadilgojri@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`username`);

--
-- Indexes for table `books_tbl`
--
ALTER TABLE `books_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books_tbl`
--
ALTER TABLE `issue_books_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `books_tbl`
--
ALTER TABLE `books_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issue_books_tbl`
--
ALTER TABLE `issue_books_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
