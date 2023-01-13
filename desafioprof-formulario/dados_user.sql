-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2023 às 20:37
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
-- Banco de dados: `registrationpage`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_user`
--

CREATE TABLE `dados_user` (
  `nome_de_usuario` text NOT NULL,
  `senha` int(11) DEFAULT NULL,
  `cpf_Cliente` varchar(11) NOT NULL,
  `profissao` text NOT NULL,
  `nivel_de_escolaridade` text NOT NULL,
  `estado_civil` text NOT NULL,
  `altura` int(11) NOT NULL,
  `peso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_user`
--
ALTER TABLE `dados_user`
  ADD KEY `cpf_Cliente` (`cpf_Cliente`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dados_user`
--
ALTER TABLE `dados_user`
  ADD CONSTRAINT `cpf_Cliente` FOREIGN KEY (`cpf_Cliente`) REFERENCES `user` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
