-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2021 às 00:08
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cars_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cars_tb`
--

CREATE TABLE `cars_tb` (
  `id` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(50) NOT NULL,
  `mileage` varchar(25) NOT NULL,
  `license_plate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cars_tb`
--

INSERT INTO `cars_tb` (`id`, `brand`, `model`, `mileage`, `license_plate`) VALUES
(9, 'Subaru', 'wrx', '123', 'AAA000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cars_tb`
--
ALTER TABLE `cars_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cars_tb`
--
ALTER TABLE `cars_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
