-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Ago-2018 às 00:51
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livrariahorus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastra`
--

CREATE TABLE `cadastra` (
  `idfuncionario` int(11) DEFAULT NULL,
  `idlivro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idfuncionario` int(11) DEFAULT NULL,
  `idlivro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcli` int(11) NOT NULL,
  `telefone` char(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `idlivro` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `estante` varchar(255) NOT NULL,
  `nomelivro` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `anolivro` date DEFAULT NULL,
  `editora` varchar(250) DEFAULT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicita`
--

CREATE TABLE `solicita` (
  `datapedido` date NOT NULL,
  `numpedido` int(11) NOT NULL,
  `codcli` int(11) DEFAULT NULL,
  `idlivro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastra`
--
ALTER TABLE `cadastra`
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idlivro` (`idlivro`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idlivro` (`idlivro`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcli`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idlivro`);

--
-- Indexes for table `solicita`
--
ALTER TABLE `solicita`
  ADD KEY `codcli` (`codcli`),
  ADD KEY `idlivro` (`idlivro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `idlivro` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastra`
--
ALTER TABLE `cadastra`
  ADD CONSTRAINT `cadastra_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cadastra_ibfk_2` FOREIGN KEY (`idlivro`) REFERENCES `livro` (`idlivro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cadastro_ibfk_2` FOREIGN KEY (`idlivro`) REFERENCES `livro` (`idlivro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `solicita`
--
ALTER TABLE `solicita`
  ADD CONSTRAINT `solicita_ibfk_1` FOREIGN KEY (`codcli`) REFERENCES `cliente` (`codcli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicita_ibfk_2` FOREIGN KEY (`idlivro`) REFERENCES `livro` (`idlivro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
