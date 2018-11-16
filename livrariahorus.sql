-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2018 às 01:12
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

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
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` char(15) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `datanascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `dataCompra` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idLivro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` char(11) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `dataNascimento`, `cpf`, `senha`) VALUES
(1, 'Ulisses de Melo Nascimento', '1994-06-04', '16156776745', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `idLivro` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `descricao` text NOT NULL,
  `anoLivro` char(4) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`idLivro`, `genero`, `editora`, `titulo`, `autor`, `preco`, `descricao`, `anoLivro`, `imagem`) VALUES
(37, 'esoterismo', 'Nova Luz', 'Yo soy la magica presencia', 'Kaint Germain', 35, 'Novo', '1994', 'yosoylamagicapresencia.jpg'),
(38, 'esoterismo', 'RosaCruz', 'Torino', 'Luoghi Magici', 36, 'Novo', '2001', 'torino.jpg'),
(39, 'esoterismo', 'Cia dos Livros', 'Tarot Gitano', 'Yasmin', 40, 'Novo', '2005', 'TarotGitano.jpg'),
(40, 'esoterismo', 'Rosa Cruz', 'Prospettive di Esoterismo', 'Rosario Castello', 47, 'Novo', '1999', 'prospettivediesoterismo.jpg'),
(41, 'esoterismo', 'Selector', 'Fantasmas espÃ­ritus y otras...', 'Eduardo', 39, 'Novo', '1993', 'fantasmasespiritus.jpg'),
(42, 'esoterismo', 'Pensamento', 'Esoterismo e Magia no mundo ocidental', 'Roberto', 42, 'Novo', '2001', 'esoterismoemagia.jpg'),
(43, 'esoterismo', 'Sextante', 'Esoterismo Di Dante', 'Rene Guenos', 47, 'Novo', '1995', 'esoterismodidante.jpg'),
(44, 'esoterismo', 'InDigitale', 'Esoterismo Cristiano', 'Rene Guenon', 70, 'Novo', '1986', 'esoterismocristiano.jpg'),
(45, 'esoterismo', 'Selector', 'Chakras', 'Naomi Ozniee', 29, 'Novo', '1990', 'Chakras.jpg'),
(46, 'filosofia', 'Sextante', 'O ser e o nada', 'Jean Paul Sartre', 37, 'Novo', '1991', '61261.jpg'),
(47, 'filosofia', 'Editora34', 'As tecnologias da inteligÃªncia', 'Pierre LÃ©vy', 25, 'Novo', '2000', '66937.jpg'),
(48, 'filosofia', 'L&PM', 'Sobre a brevidade da vida', 'SÃªneca', 22, 'Novo', '2006', '5050268.jpg'),
(49, 'filosofia', 'Companhia das letras', 'Deus um delirio', 'Richard Dawkings', 45, 'Novo', '2013', '9018277.jpg'),
(50, 'filosofia', 'Companhia das Letras', 'O mundo assombrado pelos demÃ´nios', 'Carl Sagan', 45, 'Novo', '2000', '1407432.jpg'),
(51, 'filosofia', 'Planeta', 'Viver em paz para morrer em paz', 'Mario Sergio Cortella', 38, 'Novo', '2009', '46534499.jpg'),
(52, 'filosofia', 'Conhecimento', 'Em busca de nÃ³s mesmos', 'ClÃ³vis de Barros', 31, 'Novo', '2011', '46581910.jpg'),
(53, 'Psicologia', 'Vozes', 'O corpo fala', 'Pierre Well', 65, 'Novo', '2013', '61038.jpg'),
(54, 'Psicologia', 'Cultrix', 'Atitude Mental', 'Napoleon Hill', 49, 'Novo', '2015', '5173985.jpg'),
(55, 'Psicologia', 'Sextante', 'Um novo mundo-o despertar...', 'Eckhart Tolle', 55, 'Novo', '2015', '2179223.jpg'),
(56, 'Psicologia', 'L&PM', 'Amar ou Depender?', 'Walter Riso', 39, 'Novo', '2016', '5086485.jpg'),
(57, 'Psicologia', 'Record', 'Psicopatas do cotidiano', 'Katia Mecler', 52, 'Novo', '2007', '15074763.jpg'),
(58, 'Psicologia', 'Circulo do Livro', 'ComunicaÃ§Ã£o nÃ£o violenta', 'Marshall B. Rosenberg', 40, 'Novo', '2008', '1396068.jpg'),
(61, 'Psicologia', 'Vozes', 'O corpo e seus sÃ­mbolos', 'Jean Yves', 48, 'Novo', '2000', '157574.jpg'),
(62, 'Psicologia', 'MG', 'Ensaios sobre o amor e a solidÃ£o', 'Gikovate', 0, 'Novo', '2008', '1145761.jpg'),
(63, 'Psicologia', 'Books', 'Teorias da Personalidade', 'James Fadiman', 42, 'Novo', '2005', '111098.jpg'),
(69, 'religiao', 'Sextante', 'Jesus o maior psicÃ³logo que jÃ¡...', 'Mark W. Baker', 29, 'Novo', '2009', '800044.jpg'),
(70, 'religiao', 'Martin Claret', 'Bhagavad Gita', 'Krishna', 23, 'Novo', '2007', '252264.jpg'),
(71, 'religiao', 'Madras', 'O GuardiÃ£o da Meia-Noite', 'Ribens Saraceni', 55, 'Novo', '2000', '3215243.jpg'),
(72, 'religiao', 'Record', 'A ForÃ§a-o poder dos anjos da Cabala', 'Ian Mecler', 35, 'Novo', '2007', '2738582.jpg'),
(73, 'religiao', 'Almenara', 'Cartas de Cristo', 'Almenara', 35, 'Novo', '2000', '42272164.jpg'),
(74, 'religiao', 'Madras', 'As sete linhas de umbanda', 'Rubens Saraceni', 47, 'Novo', '1995', '11020909.jpg'),
(75, 'religiao', 'Alaude', 'O cÃ©rebro de buda', 'Rick Hanson', 50, 'Novo', '2005', '30140942.jpg'),
(76, 'religiao', 'Petit', 'Violetas na janela', 'Vera Lucia', 22, 'Novo', '1994', '13098455.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idLivro` (`idLivro`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idLivro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idLivro`) REFERENCES `livros` (`idLivro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
