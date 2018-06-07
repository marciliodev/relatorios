-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 05-Jun-2018 às 11:57
-- Versão do servidor: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.1.17-1+ubuntu18.04.1+deb.sury.org+1

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
  `validade` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`itens`, `disc_produto`, `qt_total`, `qt_atual`, `vl_unitario`, `vl_total`, `lote`, `validade`) VALUES
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10'),
(1, 'Bisturi', 123, 10, '15.98', '343.87', 100, '2020-10-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
