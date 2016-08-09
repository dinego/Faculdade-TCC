-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Ago-2016 às 16:39
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos_atividades`
--

CREATE TABLE `acessos_atividades` (
  `id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessos_atividades`
--

INSERT INTO `acessos_atividades` (`id`, `grupo_id`, `atividade_id`, `created`, `modified`) VALUES
(8, 1, 17, '2016-08-03 16:15:56', '2016-08-03 16:15:56'),
(9, 2, 17, '2016-08-03 16:15:56', '2016-08-03 16:15:56'),
(10, 16, 1, '2016-08-09 16:23:01', '2016-08-09 16:23:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `alternativa` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `atividade_id`, `alternativa`, `created`, `modified`) VALUES
(1, 1, 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08'),
(2, 1, 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08'),
(3, 1, 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08'),
(4, 1, 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08'),
(5, 1, 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08'),
(6, 4, 'fasdfasdfasd', '2016-04-27 14:38:06', '2016-04-27 14:38:06'),
(7, 4, 'fsadfasdfasdfa', '2016-04-27 14:38:06', '2016-04-27 14:38:06'),
(8, 4, 'resposta', '2016-04-27 14:38:06', '2016-04-27 14:38:06'),
(9, 4, '', '2016-04-27 14:38:06', '2016-04-27 14:38:06'),
(10, 4, 'fsad fsda fsad fa fs d', '2016-04-27 14:38:06', '2016-04-27 14:38:06'),
(11, 4, 'fas fas fsaefeeeeeeeeeeeeeeeeeeeeee', '2016-04-27 14:38:06', '2016-04-27 14:38:06'),
(12, 5, 'sfisadhuifhsadifhuisadhfuiasdfhsah', '2016-04-27 14:40:38', '2016-04-27 14:40:38'),
(13, 5, '', '2016-04-27 14:40:38', '2016-04-27 14:40:38'),
(14, 5, 'fsahdifuhsdfhiasdhfashfha', '2016-04-27 14:40:38', '2016-04-27 14:40:38'),
(15, 5, 'sfdhaifhsdfhi', '2016-04-27 14:40:38', '2016-04-27 14:40:38'),
(16, 5, 'fsihdfah', '2016-04-27 14:40:38', '2016-04-27 14:40:38'),
(17, 5, 'sfdha', '2016-04-27 14:40:38', '2016-04-27 14:40:38'),
(18, 6, 'aeeeeeeeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23'),
(19, 6, 'eaeeeeeeeeeeeeeeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23'),
(20, 6, 'eeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23'),
(21, 6, 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23'),
(22, 6, '', '2016-04-27 14:46:23', '2016-04-27 14:46:23'),
(23, 6, 'eeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23'),
(24, 7, '1', '2016-04-27 14:53:29', '2016-04-27 14:53:29'),
(25, 7, '2', '2016-04-27 14:53:29', '2016-04-27 14:53:29'),
(26, 7, '3', '2016-04-27 14:53:29', '2016-04-27 14:53:29'),
(27, 7, '4', '2016-04-27 14:53:29', '2016-04-27 14:53:29'),
(28, 7, '5', '2016-04-27 14:53:29', '2016-04-27 14:53:29'),
(29, 8, 'sadfasdf sd fsad', '2016-04-27 14:55:13', '2016-04-27 14:55:13'),
(30, 8, '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13'),
(31, 8, '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13'),
(32, 8, '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13'),
(33, 8, '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13'),
(34, 8, '', '2016-04-27 14:55:13', '2016-04-27 14:55:13'),
(35, 9, '1', '2016-04-27 14:55:59', '2016-04-27 14:55:59'),
(36, 9, '2', '2016-04-27 14:55:59', '2016-04-27 14:55:59'),
(37, 9, '3', '2016-04-27 14:55:59', '2016-04-27 14:55:59'),
(38, 9, '4', '2016-04-27 14:55:59', '2016-04-27 14:55:59'),
(39, 9, '4', '2016-04-27 14:55:59', '2016-04-27 14:55:59'),
(40, 10, '11', '2016-04-27 14:57:33', '2016-04-27 14:57:33'),
(41, 10, '1123', '2016-04-27 14:57:33', '2016-04-27 14:57:33'),
(42, 10, '12312', '2016-04-27 14:57:33', '2016-04-27 14:57:33'),
(43, 10, '3123', '2016-04-27 14:57:33', '2016-04-27 14:57:33'),
(44, 10, '123123', '2016-04-27 14:57:33', '2016-04-27 14:57:33'),
(45, 1, 'teste 1', '2016-08-09 16:23:01', '2016-08-09 16:23:01'),
(46, 1, 'eafsdafsad', '2016-08-09 16:23:01', '2016-08-09 16:23:01'),
(47, 1, 'fsadfsad', '2016-08-09 16:23:01', '2016-08-09 16:23:01'),
(48, 1, 'ff', '2016-08-09 16:23:01', '2016-08-09 16:23:01'),
(49, 1, 'fsadfsdafasdfsad', '2016-08-09 16:23:01', '2016-08-09 16:23:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `premiacaos_id` int(3) NOT NULL,
  `nivel_id` int(11) NOT NULL DEFAULT '1',
  `tipo_atividade` enum('2','1') NOT NULL DEFAULT '1',
  `inicio` datetime NOT NULL,
  `fim` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `arquivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `titulo`, `descricao`, `user_id`, `premiacaos_id`, `nivel_id`, `tipo_atividade`, `inicio`, `fim`, `created`, `modified`, `arquivo`) VALUES
(1, 'Teste Diego hehe', '<p>Atividade bolada</p>\r\n', 1, 1, 1, '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-08-09 16:23:01', '2016-08-09 16:23:01', 'iis.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` longtext,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`, `descricao`, `created`, `modified`, `user_id`) VALUES
(16, 'Grupo Teste', '<p>Apenas um teste de Grupo</p>\r\n', '2016-08-04 14:20:44', '2016-08-04 14:20:44', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `premiacaos`
--

CREATE TABLE `premiacaos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `pontos_final` int(11) NOT NULL,
  `pontos_individuais` int(4) NOT NULL,
  `foto_premio` varchar(255) DEFAULT 'premio_empty.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `premiacaos`
--

INSERT INTO `premiacaos` (`id`, `descricao`, `user_id`, `titulo`, `pontos_final`, `pontos_individuais`, `foto_premio`) VALUES
(1, 'DescriÃ§Ã£o premiaÃ§Ã£o', 1, 'Teste premiaÃ§Ã£o', 2500, 100, 'untitled.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas_atividades`
--

CREATE TABLE `respostas_atividades` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `alternativa_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostas_atividades`
--

INSERT INTO `respostas_atividades` (`id`, `user_id`, `atividade_id`, `alternativa_id`, `created`, `modified`) VALUES
(13, 1, 1, 1, '2016-08-09 16:23:01', '2016-08-09 16:23:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `liberado` int(1) NOT NULL,
  `ra` int(7) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nome` varchar(120) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL DEFAULT '0',
  `active` varchar(5) NOT NULL DEFAULT 'true',
  `role` varchar(20) DEFAULT 'aluno',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `liberado`, `ra`, `username`, `password`, `nome`, `foto`, `pontos`, `active`, `role`, `created`, `modified`) VALUES
(1, 1, 123456, 'diegorm.ti@gmail.com', '6064333888b65d9c19b0382a21c1fee5273b936b', 'Diego Moreira', '12654287_925868070827657_1367160207912510733_n.jpg', 20000, 'true', 'admin', '2016-03-15 19:43:57', '2016-03-15 19:43:57'),
(2, 1, 12333, 'brenda.sricci@gmail.com', 'aa29cdb48e7bc0f96a8024876b9986891253fb0e', 'Brenda S. Ricci', 'icon.png', 0, 'true', 'prof', '2016-03-28 19:17:25', '2016-03-28 19:17:25'),
(3, 1, 33444, 'testealuno@teste.com', 'teste', 'teste 1', '', 15, 'true', 'aluno', '2016-08-03 00:00:00', '2016-08-03 00:00:00'),
(6, 1, 34234, 'aluno2@teste.com', 'teste', 'aluno 2', '', 3425, 'true', 'aluno', '2016-08-03 00:00:00', '2016-08-08 15:01:00'),
(7, 1, 78078, 'teste@teste.com.br', 'a0e5497e321bc9060d56e312ae823a471a450d71', 'Teste Teste', '', 0, 'true', 'aluno', '2016-08-08 14:41:34', '2016-08-08 15:00:57'),
(9, 1, 333333, 'teste2@teste.com', 'dfasdfsad', 'Diego Teste', '', 222, 'true', 'aluno', '2016-08-09 00:00:00', '2016-08-09 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_grupos`
--

CREATE TABLE `users_grupos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_grupos`
--

INSERT INTO `users_grupos` (`id`, `user_id`, `grupo_id`, `created`, `modified`) VALUES
(22, 3, 16, '2016-08-04 14:20:44', '2016-08-04 14:20:44'),
(23, 6, 16, '2016-08-04 14:20:44', '2016-08-04 14:20:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos_atividades`
--
ALTER TABLE `acessos_atividades`
  ADD PRIMARY KEY (`id`,`grupo_id`,`atividade_id`);

--
-- Indexes for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`,`atividade_id`);

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id`,`user_id`,`nivel_id`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premiacaos`
--
ALTER TABLE `premiacaos`
  ADD PRIMARY KEY (`id`,`user_id`);

--
-- Indexes for table `respostas_atividades`
--
ALTER TABLE `respostas_atividades`
  ADD PRIMARY KEY (`id`,`user_id`,`atividade_id`,`alternativa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_grupos`
--
ALTER TABLE `users_grupos`
  ADD PRIMARY KEY (`id`,`user_id`,`grupo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos_atividades`
--
ALTER TABLE `acessos_atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `premiacaos`
--
ALTER TABLE `premiacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `respostas_atividades`
--
ALTER TABLE `respostas_atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users_grupos`
--
ALTER TABLE `users_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
