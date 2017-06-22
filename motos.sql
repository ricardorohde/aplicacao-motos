-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2017 às 01:27
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apreencoes`
--

CREATE TABLE `apreencoes` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `local` varchar(200) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `motivo` varchar(300) NOT NULL,
  `observacao` varchar(400) NOT NULL,
  `equipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `num_os` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `local` varchar(200) NOT NULL,
  `evento` varchar(200) NOT NULL,
  `observacoes` varchar(400) NOT NULL,
  `equipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

CREATE TABLE `obras` (
  `id` int(11) NOT NULL,
  `num_os` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `local` varchar(200) NOT NULL,
  `obra` varchar(200) NOT NULL,
  `observacao` varchar(300) NOT NULL,
  `equipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `obras`
--

INSERT INTO `obras` (`id`, `num_os`, `data`, `hora`, `local`, `obra`, `observacao`, `equipe`) VALUES
(0, 34, '0000-00-00', '00:00:00', 'teste', 'PavimentaÃ§Ã£o Asfaltica', 'hfduhfusda', '1'),
(0, 0, '0000-00-00', '12:12:00', 'dadada', 'cacaca', '', '1'),
(0, 1234, '2017-05-10', '12:12:00', 'praca de eventos', 'PavimentaÃ§Ã£o Asfaltica', '', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacao`
--

CREATE TABLE `operacao` (
  `id` int(11) NOT NULL,
  `num_os` varchar(10) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `local` varchar(100) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `equipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `operacao`
--

INSERT INTO `operacao` (`id`, `num_os`, `data`, `hora`, `local`, `tipo`, `descricao`, `equipe`) VALUES
(7, '', '2017-05-14', '12:12:00', 'rua tal', '2', '', '2'),
(8, '22/1234', '2017-05-15', '15:15:00', 'rua b', '3', 'teste', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `usuario`, `senha`) VALUES
(219, 'robson', 'controle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apreencoes`
--
ALTER TABLE `apreencoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apreencoes`
--
ALTER TABLE `apreencoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operacao`
--
ALTER TABLE `operacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
