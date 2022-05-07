-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 04:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Author` varchar(60) NOT NULL,
  `Publisher` varchar(60) NOT NULL,
  `Country` varchar(60) NOT NULL,
  `Pubblication Date` date NOT NULL,
  `Genere` enum('YELLOW','HORROR','EROTIC','FANTASY','HUMOROUS','THRILLER','DYSTOPIA','HUMAN PSYCHE','SCIENCE FICTION','PINK OR ROMANCE','HISTORICAL NOVEL','ADVENTURE AND ACTION','BIOGRAPHY AND AUTOBIOGRAPHY') NOT NULL,
  `Created At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Title`, `Author`, `Publisher`, `Country`, `Pubblication Date`, `Genere`, `Created At`) VALUES
(1, 'Come trattare gli altri e farseli amici', 'Dale Carnegie', 'Bompiani', 'New York ', '2017-03-01', 'HUMAN PSYCHE', '2022-02-21 03:21:56'),
(2, 'The 48 laws of Power ', 'Robert Greene', 'Profile Books LTD', 'United States', '1998-01-19', 'HUMAN PSYCHE', '2022-02-21 03:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
