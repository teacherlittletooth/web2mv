-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 30-Maio-2022 às 16:05
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

CREATE DATABASE restaurante;
USE restaurante;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `cod` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  `ingredientes` text DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `pgto` varchar(20) DEFAULT NULL,
  `card_flag` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cod`, `data_hora`, `ingredientes`, `qtde`, `pgto`, `card_flag`) VALUES
(1, '2022-02-10 00:00:00', 'Pão, Alface, Milho, Queijo', 3, 'cartao', 'Green Card'),
(2, '2022-03-12 00:00:00', 'Pão, Banana, Mortadela', 3, 'dinheiro', 'Elo'),
(4, '2022-05-16 11:21:00', 'Mocotó, Ovo cozido, Tempero verde', 1, 'pix', 'Senff'),
(7, '2022-05-16 11:59:37', 'Milk Shake de morango', 2, 'dinheiro', 'Green Card'),
(8, '2022-05-18 10:19:31', 'Pão, Maionese, ', 3, 'dinheiro', 'Elo'),
(9, '2022-05-18 10:20:26', 'Pão, Carne, Maionese, Milho, Ervilha, ', 2, 'cartao', 'Green Card'),
(10, '2022-05-23 09:28:40', 'Pão, Carne, Maionese, ', 3, 'cartao', 'Elo'),
(11, '2022-05-25 14:10:25', 'Pão, Maionese, ', 2, 'dinheiro', 'Senff');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `email`, `senha`) VALUES
(1, 'Paulo Donini', 'paulo.donini@qi.edu.br', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
