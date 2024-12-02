-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2024 às 13:52
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `encontre_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autonomo`
--

CREATE TABLE `autonomo` (
  `user_id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tel` int(50) NOT NULL,
  `dataN` date NOT NULL,
  `cep` int(25) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cnpj` int(25) NOT NULL,
  `descricao` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `autonomo`
--

INSERT INTO `autonomo` (`user_id`, `imagem`, `nome`, `tel`, `dataN`, `cep`, `estado`, `cidade`, `cnpj`, `descricao`, `email`, `senha`, `area`) VALUES
(1, '1889173492670fb402572977.49888631_png-transparent-holding-hands.png', 'Roberva', 481888888, '2000-01-09', 19802, 'SP', 'Assis', 123456789, 'Soldador 2 anos.', 'roberval@gmail.com', '$2y$10$lQGj7CVaGKEGmgSomyez5.DfbPvUh5U24nz1tMzaNd8PqOX3thXym', 'Soldador'),
(24, '693719342670ff71d9738c5.42064200_whats.jpg', 'Roberval Silva Fernandes Filho', 2147483647, '2000-02-01', 19802, 'SP', 'Assis', 15155, 'Carpinteiro há 2 anos', 'fernandesroberval36@gmail.comfern', '$2y$10$q90pc54kNoikbwnmB4HLYucsY215fkdykFG/ylYE2EIbR2P6kWIyq', 'Carpinteiro'),
(25, '1281186567672bf242a2d4e4.14563228_png-transparent-holding-hands.png', 'Vinicius Eduardo Reis Ferreira', 2147483647, '2003-02-16', 19806271, 'SP', 'Assis', 15155, 'Estoquista', 'viniciuseduardo.reis@outlook.com', '$2y$10$xpDHB7PxhUt9hFu4zg.UwuIMKpqoi2ZkK.DnOIBoF9EV2B9K6YFCO', 'Desenvolvedor'),
(26, '64163912867465d765baf06.59201742_Desktop.png', 'João Silv', 2147483647, '1998-12-04', 19802, 'São Paulo', 'Assis', 2147483647, 'Pintor', 'fernandesfernandes07@gmail.com', '$2y$10$7VhGA5d5ofHpGnFHxJXm9..e3EuqTJSNEonrcNgjoImb7tmrJMG5u', 'Pintor'),
(27, '171453746567479cf1cb0254.14068327_IMG-20241112-WA0015~3.jpg', 'Roberval Silva Fernandes Filho', 18, '1997-12-04', 19802, 'SP', 'Sorocaba', 2147483647, 'Vendas de carros.', 'teste@gmail.com', '$2y$10$a6JV3P1I/e/8upphfvIVB.rZ4/73eQN0nEpsmCempEeHp5w6wn372', 'Vendedor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contratante`
--

CREATE TABLE `contratante` (
  `user_id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone` int(15) NOT NULL,
  `dataN` date NOT NULL,
  `cep` int(20) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `contratante`
--

INSERT INTO `contratante` (`user_id`, `nome`, `telefone`, `dataN`, `cep`, `estado`, `cidade`, `email`, `senha`) VALUES
(5, 'Silva Junior', 18, '1998-12-02', 19802, 'São Paulo', 'Assis', 'silvajunior@gmail.com', '$2y$10$krBbFN7uUiZ.QU4WZdRj9u0.BbpQgQi2pPfLNUS8LjsqAO71svhp.'),
(9, 'Vinicius', 2147483647, '2003-02-16', 19806271, 'sp', 'c.m', 'viniciu@gmail.com', '$2y$10$LZ3lZ7uHTNWjpKGX5JDC7eAktVfXX6.3IfVEIXO.0mb6WwRIgJ0ty');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(11) NOT NULL,
  `autonomo_id` int(11) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data_postagem` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `autonomo_id`, `imagem`, `descricao`, `data_postagem`) VALUES
(1, 1, '../uploads/Login tcc.png', 'Foto', '2024-10-11 17:46:03'),
(2, 1, '../uploads/Login tcc.png', '123', '2024-10-11 17:46:16'),
(3, 1, '../uploads/png-transparent-holding-hands.png', 'teste', '2024-10-11 17:51:55'),
(4, 1, '../uploads/png-transparent-holding-hands.png', 'Teste ', '2024-10-16 12:51:44'),
(5, 1, '../uploads/nuvem.webp', 'teste', '2024-11-06 22:28:31'),
(6, 25, '../uploads/png-transparent-holding-hands.png', 'teste', '2024-11-06 23:01:41'),
(7, 25, '../uploads/png-transparent-holding-hands.png', 'teste', '2024-11-06 23:04:36'),
(8, 25, '../uploads/png-transparent-holding-hands.png', 'teste', '2024-11-06 23:05:24'),
(9, 25, '../uploads/png-transparent-holding-hands.png', 'teste', '2024-11-06 23:08:33'),
(10, 25, '../uploads/png-transparent-holding-hands.png', 'teste', '2024-11-06 23:21:47'),
(11, 25, '../uploads/sudoku-552944_1280.jpg', 'teste', '2024-11-06 23:35:58'),
(12, 25, '../uploads/sudoku-552944_1280.jpg', '133', '2024-11-06 23:37:06'),
(13, 25, 'uploads/672bfec151e8e_png-transparent-holding-hands.png', 'teste', '2024-11-06 23:41:53'),
(14, 25, 'uploads/672bff46b4622_sudoku-552944_1280.jpg', '2', '2024-11-06 23:44:06'),
(15, 1, 'logo_67352f9619194.jpg', 'teste', '2024-11-13 23:00:38'),
(16, 1, '4bf9ba75-c618-49bc-99df-8190d5dddb7f_673531758b5d9.webp', 'ddd', '2024-11-13 23:08:37'),
(17, 26, 'logo_673e5497472e3.jpg', 'Teste', '2024-11-20 21:28:55'),
(18, 27, 'Carro_67479df61b706.jpg', 'Teste ', '2024-11-27 22:32:22'),
(19, 27, 'carro1_67479e42219fe.jpeg', 'Teste 2', '2024-11-27 22:33:38'),
(20, 27, 'carro3_6747a9fc5bcd2.jpg', 'teste3', '2024-11-27 23:23:40');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autonomo`
--
ALTER TABLE `autonomo`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices de tabela `contratante`
--
ALTER TABLE `contratante`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `dataN` (`dataN`),
  ADD UNIQUE KEY `cep` (`cep`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cidade` (`cidade`),
  ADD UNIQUE KEY `senha` (`senha`);

--
-- Índices de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autonomo_id` (`autonomo_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autonomo`
--
ALTER TABLE `autonomo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `contratante`
--
ALTER TABLE `contratante`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`autonomo_id`) REFERENCES `autonomo` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
