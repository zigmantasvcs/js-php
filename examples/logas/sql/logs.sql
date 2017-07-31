-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 m. Lie 10 d. 22:54
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menai`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `event` varchar(200) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `logs`
--

INSERT INTO `logs` (`id`, `event`, `date`) VALUES
(1, 'Paspaustas mygtukas 1', '2017-07-10'),
(2, 'Paspaustas mygtukas 2', '2017-07-10'),
(3, 'Paspaustas mygtukas 3', '2017-07-10'),
(4, 'Paspaustas mygtukas 4', '2017-07-10'),
(5, 'Paspaustas mygtukas 5', '2017-07-10'),
(6, 'Paspaustas mygtukas 4', '2017-07-10'),
(7, 'Paspaustas mygtukas 3', '2017-07-10'),
(8, 'Paspaustas mygtukas 2', '2017-07-10'),
(9, 'Paspaustas mygtukas 1', '2017-07-10'),
(10, 'Paspaustas mygtukas 5', '2017-07-10'),
(11, 'Paspaustas mygtukas 4', '2017-07-10'),
(12, 'Paspaustas mygtukas 2', '2017-07-10'),
(13, 'Paspaustas mygtukas 1', '2017-07-10'),
(14, 'Paspaustas mygtukas 2', '2017-07-10'),
(15, 'Paspaustas mygtukas 4', '2017-07-10'),
(16, 'Paspaustas mygtukas 5', '2017-07-10'),
(17, 'Paspaustas mygtukas 4', '2017-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
