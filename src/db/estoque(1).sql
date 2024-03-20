-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Mar-2024 às 20:31
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

CREATE TABLE `funcoes` (
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

CREATE TABLE `funcoes_permissoes` (
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

CREATE TABLE `permissoes` (
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

CREATE TABLE `produtos` (
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
(22, 'Saia Lápis Preta', 'Saia lápis preta, modelagem ajustada', 60, '35'),
(23, 'Bermuda Masculina Cargo', 'Bermuda masculina cargo, bolsos laterais', 70, '30'),
(24, 'Bermuda Masculina Jeans', 'Bermuda masculina jeans, lavagem clara', 80, '25'),
(25, 'Short Feminino Jeans', 'Short feminino jeans, barra desfiada', 50, '20'),
(26, 'Short Feminino Estampado', 'Short feminino estampado, elástico na cintura', 55, '20'),
(27, 'Blazer Masculino Azul', 'Blazer masculino azul, tecido de algodão', 40, '80'),
(28, 'Blazer Masculino Preto', 'Blazer masculino preto, tecido leve', 45, '80'),
(29, 'Blazer Feminino Cinza', 'Blazer feminino cinza, corte acinturado', 35, '70'),
(30, 'Blazer Feminino Preto', 'Blazer feminino preto, modelagem clássica', 40, '70'),
(31, 'Sapato Social Masculino Preto', 'Sapato social masculino preto, couro legítimo', 60, '90'),
(32, 'Sapato Social Masculino Marrom', 'Sapato social masculino marrom, detalhes em costura', 50, '90'),
(33, 'Sapato de Salto Feminino Nude', 'Sapato de salto feminino nude, salto médio', 45, '60'),
(34, 'Sapato de Salto Feminino Preto', 'Sapato de salto feminino preto, salto alto', 50, '60'),
(35, 'Sandália Rasteira Feminina Preta', 'Sandália rasteira feminina preta, tiras finas', 55, '30'),
(36, 'Sandália Rasteira Feminina Marrom', 'Sandália rasteira feminina marrom, confortável', 60, '30'),
(37, 'Moletom Infantil Unissex Cinza', 'Moletom infantil unissex cinza, estampa divertida', 70, '25'),
(38, 'Moletom Infantil Unissex Azul', 'Moletom infantil unissex azul, capuz forrado', 65, '25'),
(39, 'Camiseta Básica Masculina Branca', 'Camiseta básica masculina branca, algodão macio', 90, '15'),
(40, 'Camiseta Básica Masculina Preta', 'Camiseta básica masculina preta, modelagem slim', 80, '15'),
(41, 'Camiseta Básica Feminina Rosa', 'Camiseta básica feminina rosa, decote redondo', 75, '15'),
(42, 'Camiseta Básica Feminina Cinza', 'Camiseta básica feminina cinza, malha confortável', 70, '15'),
(43, 'Regata Masculina Branca', 'Regata masculina branca, tecido leve', 100, '10'),
(44, 'Regata Masculina Preta', 'Regata masculina preta, algodão macio', 95, '10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `id_funcao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `user`, `id_funcao`) VALUES
(1, 'João', 'senha123', 'Joao', 1),
(2, 'andre Calor Mota', '123123', 'andreMota', 2),
(4, 'Josi', '321', 'Josibass', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcoes`
--
ALTER TABLE `funcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcoes_permissoes`
--
ALTER TABLE `funcoes_permissoes`
  ADD PRIMARY KEY (`id_funcao`,`id_permissao`),
  ADD KEY `id_permissao` (`id_permissao`);

--
-- Índices para tabela `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_funcao` (`id_funcao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcoes`
--
ALTER TABLE `funcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `funcoes_permissoes`
--
ALTER TABLE `funcoes_permissoes`
  ADD CONSTRAINT `funcoes_permissoes_ibfk_1` FOREIGN KEY (`id_funcao`) REFERENCES `funcoes` (`id`),
  ADD CONSTRAINT `funcoes_permissoes_ibfk_2` FOREIGN KEY (`id_permissao`) REFERENCES `permissoes` (`id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_funcao`) REFERENCES `funcoes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
