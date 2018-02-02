-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 09:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `role` int(11) NOT NULL,
  `phone` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `role`, `phone`, `email`, `password`, `img`) VALUES
(1, 'yakov', 2, '0543535434', 'yakov@hatam.com', '123456', '../img/yakov.jpg'),
(8, 'alon', 1, '0505556693', 'alon@alonaba.com', '123', '../img/alon.jpg'),
(9, 'channi', 1, '0404004', 'chani@gmail.com', '123', ''),
(10, 'yochanan', 1, '050505', 'yo@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `image`) VALUES
(1, 'Learning Html', 'Course for beginers\r\nstart learning html and create website', '../img/html.png'),
(2, 'ANGULAR JS ', 'learn angular js \r\nneeded : html,css,js,jquery\r\ncource for advanced \r\n', '../img/angular.png'),
(3, 'CSS', 'Learn to style and edit html pages\r\nneeded: html\r\nfor beginers', '../img/css.png'),
(4, 'wordpress ', 'Learn How build website using WordPress.\r\nthe best popular cms in the world!\r\nbuilt and style website and shops.\r\nneeded: html, css is good but dont require\r\nfor beginers', '../img/wordpress.png'),
(5, 'PHP', 'the full cource for php. \r\nneeded: basic html,css,js \r\n', '../img/php.png'),
(6, 'Node js', 'Learn to build web apps with NODE js and Mongo DB\r\n', '../img/nodejs.png'),
(7, 'React', 'The Full Course To Learn React.\r\nneeded : html,css,js\r\nfor advanced.', '../img/react.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `email`, `image`) VALUES
(1, 'yael', '0504325344', 'yael@alonacademy.com', '../img/yael.jpg'),
(3, 'natan', '050325343', 'natan@gmail.com', '../img/natan.jpg'),
(5, 'elinor', '053254343', 'elinor13@walla.com', '../img/elinor.jpg'),
(7, 'yael', '0503242453', 'yael432@yahoo.com', '../img/yael.jpg'),
(9, 'raz', '0502342135', 'razshalm@gmail.com', '../img/raz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`) VALUES
(1, 'fa', 'DSA@DS.COM', '432432542'),
(2, 'fa', 'DSA@DS.COM', '432432542'),
(3, '', '', ''),
(4, '', '', ''),
(5, 'a', 'ds1', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
