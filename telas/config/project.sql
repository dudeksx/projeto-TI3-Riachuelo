-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19/11/2025 às 00:16
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `project`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `nome` varchar(99) NOT NULL,
  `endereco` varchar(151) NOT NULL,
  `data` varchar(21) NOT NULL,
  `hora` varchar(20) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `id_usuario`, `nome`, `endereco`, `data`, `hora`) VALUES
(3, 0, 'Dia do ANão', 'Sepé com a maraba', '2026-02-24', '12:00'),
(2, 0, 'Feira da FOda', 'POrtugal', '2025-11-04', '12:00'),
(4, 0, 'aaa11', '111', '0011-01-11', '11:11'),
(5, 0, '111', '111', '275760-02-01', '10:20'),
(6, 0, 'Feira da Jabuticaba', 'Rua Indonésia', '2025-12-15', '15:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registro` varchar(20) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `senha` text NOT NULL,
  `dt_nascimento` date NOT NULL,
  `sobrenome_usuario` text NOT NULL,
  `pais` text NOT NULL,
  `estado` text NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
