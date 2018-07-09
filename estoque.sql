-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 09-Jul-2018 às 10:57
-- Versão do servidor: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.1.18-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `dt_inicial` date NOT NULL,
  `dt_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`dt_inicial`, `dt_final`) VALUES
('2018-05-05', '2018-05-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `itens` int(50) NOT NULL,
  `disc_produto` varchar(120) NOT NULL,
  `qt_total` int(120) NOT NULL,
  `qt_atual` int(120) NOT NULL,
  `vl_unitario` decimal(10,2) NOT NULL,
  `vl_total` decimal(10,2) NOT NULL,
  `lote` int(50) DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `unidade` varchar(120) DEFAULT NULL,
  `dt_entrada` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`itens`, `disc_produto`, `qt_total`, `qt_atual`, `vl_unitario`, `vl_total`, `lote`, `validade`, `unidade`, `dt_entrada`) VALUES
(1, 'Bisturi', 20, 0, '2.50', '0.00', 1, '2020-01-01', 'UND', '2018-05-05'),
(2, 'Máscara de Procedimento', 30, 0, '12.90', '0.00', 1, '2019-03-03', 'PCT', '2018-05-05'),
(3, 'Máscara de Proteção', 29, 0, '5.64', '0.00', 1, '2019-11-27', 'und', '2019-05-05'),
(4, 'luva de proteção', 487, 0, '987.56', '0.00', 2, '2018-05-05', 'pct', '2020-05-05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
