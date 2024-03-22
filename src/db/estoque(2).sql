-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2024 às 18:57
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcoes`
--
 

CREATE TABLE IF NOT EXISTS `funcoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `funcoes`
--

INSERT INTO `funcoes` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Funcionário Regular'),
(3, 'Chefe de Departamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcoes_permissoes`
--

CREATE TABLE IF NOT EXISTS `funcoes_permissoes` (
  `id_funcao` int(11) NOT NULL,
  `id_permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `funcoes_permissoes`
--

INSERT INTO `funcoes_permissoes` (`id_funcao`, `id_permissao`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE IF NOT EXISTS `permissoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`id`, `nome`) VALUES
(1, 'Adicionar Produto'),
(2, 'Editar Produto'),
(3, 'Excluir Produto'),
(4, 'Visualizar Relatórios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `qnt` int(11) NOT NULL,
  `preco` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `qnt`, `preco`) VALUES
(1, 'Camisa Polo Masculina Branca', 'Camisa polo masculina branca, 100% algodão', 50, '40'),
(2, 'Camisa Polo Masculina Preta', 'Camisa polo masculina preta, 100% algodão', 40, '40'),
(3, 'Camisa Polo Feminina Azul', 'Camisa polo feminina azul, tecido leve e confortável', 30, '35'),
(4, 'Camisa Social Masculina Branca', 'Camisa social masculina branca, tecido de algodão', 60, '50'),
(5, 'Camisa Social Masculina Azul', 'Camisa social masculina azul, tecido de algodão', 70, '50'),
(6, 'Camisa Social Feminina Rosa', 'Camisa social feminina rosa, tecido leve e elegante', 45, '45'),
(7, 'Calça Jeans Masculina Slim', 'Calça jeans masculina slim, lavagem escura', 80, '60'),
(8, 'Calça Jeans Masculina Regular', 'Calça jeans masculina regular, lavagem clara', 90, '60'),
(9, 'Calça Jeans Feminina Skinny', 'Calça jeans feminina skinny, modelagem justa', 55, '55'),
(10, 'Calça Jeans Feminina Bootcut', 'Calça jeans feminina bootcut, flare na barra', 65, '55'),
(11, 'Blusa de Moletom Masculina Cinza', 'Blusa de moletom masculina cinza, com capuz', 70, '45'),
(12, 'Blusa de Moletom Masculina Preto', 'Blusa de moletom masculina preta, com estampa frontal', 65, '45'),
(13, 'Blusa de Moletom Feminina Rosa', 'Blusa de moletom feminina rosa, tecido macio', 55, '40'),
(14, 'Blusa de Moletom Feminina Cinza', 'Blusa de moletom feminina cinza, com bolso canguru', 60, '40'),
(15, 'Jaqueta de Couro Masculina Marrom', 'Jaqueta de couro masculina marrom, estilo clássico', 40, '100'),
(16, 'Jaqueta de Couro Masculina Preta', 'Jaqueta de couro masculina preta, estilo moderno', 50, '100'),
(17, 'Jaqueta de Couro Feminina Marrom', 'Jaqueta de couro feminina marrom, ajuste na cintura', 35, '90'),
(18, 'Jaqueta de Couro Feminina Preta', 'Jaqueta de couro feminina preta, com detalhes em zíper', 45, '90'),
(19, 'Vestido Longo Floral', 'Vestido longo floral, tecido leve e fluído', 30, '70'),
(20, 'Vestido Curto Estampado', 'Vestido curto estampado, decote em V', 40, '50'),
(21, 'Saia Midi Plissada', 'Saia midi plissada, tecido confortável', 50, '30'),
(22,
