-- phpMyAdmin SQL Dump
-- version 4.9.5deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 25-Out-2020 às 14:16
-- Versão do servidor: 10.3.23-MariaDB-0+deb10u1
-- versão do PHP: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoeletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `precofinal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `nome`, `descricao`, `imagem`, `preco`, `precofinal`) VALUES
(21, 'televisores', 'Televisor Semp 20 polegadas', 'tv 1.png', 300, 289),
(22, 'televisores', 'Televisor Phillips 20 polegadas', 'tv2phillips.png', 289, 269),
(23, 'televisores', 'Televisor Sony 20 polegadas', 'tv3.png', 189, 179),
(24, 'consoles', 'Playstation 1 Sony classic', 'console1', 400, 389.9),
(25, 'consoles', 'Super Nintendo', 'console2', 630, 555),
(26, 'consoles', 'Playstation 2 Sony', 'console3', 399, 299),
(27, 'aparelhosdesom', 'Walkman discman Sony portátil cd player', 'walkman1', 219.9, 199),
(28, 'aparelhosdedvd', 'DvD Mondial', 'dvd', 99.9, 89.9),
(29, 'consoleportatil', 'Nintendo game boy', 'gameboy', 179, 159.9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `idpedido` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `valor_unitario` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_pedidos`
--

INSERT INTO `tb_pedidos` (`idpedido`, `nome_cliente`, `endereco`, `telefone`, `nome_produto`, `valor_unitario`, `quantidade`, `valor_total`) VALUES
(1, 'Mathias Niashi', 'Rua sem saida, 10', 44448888, 'televisor 20 polegadas', 289, 1, 289),
(5, 'Marcelo Rodrigues', 'Rua Pedras da Lua, 11', 33336666, 'Super Nintendo', 555, 1, 555);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`),
  ADD KEY `precofinal` (`precofinal`),
  ADD KEY `descricao` (`descricao`);

--
-- Índices para tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `valor_total` (`valor_total`),
  ADD KEY `fk_valor_produto` (`valor_unitario`),
  ADD KEY `nome_produto` (`nome_produto`),
  ADD KEY `valor_total_2` (`valor_total`),
  ADD KEY `valor_total_3` (`valor_total`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
