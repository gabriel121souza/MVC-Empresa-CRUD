-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2020 às 22:52
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `image` varchar(220) NOT NULL,
  `idade` int(3) NOT NULL,
  `salario` float NOT NULL,
  `cargo` varchar(220) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `data_admissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `image`, `idade`, `salario`, `cargo`, `endereco`, `data_admissao`) VALUES
(15, 'Felipe Almeida', 'FelipeAlmeida.jpg', 27, 2100, 'Programador PHP', 'quadra 186 lote 05 Guara 1', '2018-07-12'),
(16, 'Miguel Sanchez', 'MiguelSachez.jpg', 45, 6100, 'Engenheiro de Software', 'quadra 155 lote 18 Gama', '2015-02-18'),
(17, 'Chris Rock', 'chrisRock.jpg', 29, 5100.8, 'Coordenador', 'quadra 153 lote 05 Valparaiso', '2018-02-06'),
(18, 'Juliana Nunes ', 'isabelaNunes.jpg', 26, 4030, 'Programador Frontend', 'quadra 8 lote 18 Núcleo Bandeirante', '2019-05-02'),
(19, 'Daniel Gomes', 'danielGomes.jpg', 24, 2550, 'Programador BackEnd', 'quadra 80 lote  15 Valparaiso', '2019-07-25'),
(26, 'João Nascimento Silva', 'joaonascimento.jpg', 28, 2500, 'supervisor', 'Quadra 4 modulo 06 Santa Maria DF', '2015-11-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeros`
--

CREATE TABLE `numeros` (
  `numero_id` int(11) NOT NULL,
  `numero1` varchar(15) NOT NULL,
  `numero2` varchar(15) NOT NULL,
  `numero3` varchar(15) NOT NULL,
  `funcionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `numeros`
--

INSERT INTO `numeros` (`numero_id`, `numero1`, `numero2`, `numero3`, `funcionario_id`) VALUES
(9, '123478', '416342', '83 95648-1283', 16),
(10, '56484651', '485652', '4685256', 15),
(11, '61 96547-5173', '33 95294-8874', '', 17),
(12, '61 97496-5615', '', '', 18),
(13, '61 90774-6843', '61 91126-7971', '', 19);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `numeros`
--
ALTER TABLE `numeros`
  ADD PRIMARY KEY (`numero_id`),
  ADD KEY `funcionario_id_fk` (`funcionario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `numeros`
--
ALTER TABLE `numeros`
  MODIFY `numero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `numeros`
--
ALTER TABLE `numeros`
  ADD CONSTRAINT `funcionario_id_fk` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
