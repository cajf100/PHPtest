-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Mar-2022 às 00:12
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tb_cep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ceps`
--

DROP TABLE IF EXISTS `ceps`;
CREATE TABLE IF NOT EXISTS `ceps` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ceps`
--

INSERT INTO `ceps` (`id`, `cep`, `logradouro`, `bairro`, `localidade`, `uf`) VALUES
(1, '50760-770', 'Rua Dom Caviti', 'Mustardinha', 'Recife', 'PE'),
(2, '50760-100', 'Rua Fabinho', 'Mustardinha', 'Recife', 'PE'),
(15, 'frefr-frf', '', '', '', ''),
(13, '50760060', 'Rua Pindorama', 'Mustardinha', 'Recife', 'PE'),
(14, '50760-310', 'Rua Joana Francisca de Azevedo', 'Mustardinha', 'Recife', 'PE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
