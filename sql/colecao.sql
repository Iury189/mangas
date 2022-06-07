-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2022 às 15:08
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `colecao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `manga`
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
-- Extraindo dados da tabela `manga`
--

INSERT INTO `manga` (`id_manga`, `titulo`, `editora`, `volumes`, `desconto`, `valor`, `data_cadastro`) VALUES
(1, 'Banya: O Mensageiro', 'Conrad', 5, '5.00', '30.00', '2022-06-07 12:59:01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_manga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `manga`
--
ALTER TABLE `manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
