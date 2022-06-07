-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2022 at 11:08 PM
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
-- Database: `colecao`
--

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id_manga` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `editora` varchar(50) NOT NULL,
  `volumes` int(11) NOT NULL,
  `desconto` decimal(5,2) NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id_manga`, `titulo`, `editora`, `volumes`, `desconto`, `valor`, `data_cadastro`) VALUES
(1, 'Banya: O Mensageiro', 'Conrad', 5, '5.00', '30.00', '2022-06-07 12:59:01'),
(2, 'Gui: O Guerreiro Fantasma', 'Conrad', 5, '1.28', '35.85', '2022-06-07 18:45:21'),
(3, 'Blue Dragon Ral Grad', 'JBC', 4, '9.00', '30.00', '2022-06-07 18:46:17'),
(4, 'Dangu', 'Conrad', 9, '0.21', '70.75', '2022-06-07 18:46:54'),
(5, 'Dragon\'s Dogma Progress', 'JBC', 2, '0.00', '20.00', '2022-06-07 18:47:45'),
(6, 'All You Need Is Kill', 'JBC', 2, '4.79', '20.84', '2022-06-07 18:48:18'),
(7, 'Resident Evil: Marhawa Desire', 'JBC', 5, '7.50', '28.22', '2022-06-07 18:49:02'),
(8, 'Street Fighter Alpha', 'NewPop', 2, '7.71', '25.53', '2022-06-07 18:52:10'),
(9, 'Street Fighter Sakura Ganbaru', 'NewPop', 2, '7.70', '25.53', '2022-06-07 18:52:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_manga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
