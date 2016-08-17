-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2016 às 15:41
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
(10, 16, 25, '2016-08-09 16:23:01', '2016-08-09 16:23:01'),
(11, 16, 26, '2016-08-10 15:39:26', '2016-08-10 15:39:26'),
(12, 1, 27, '2016-08-10 16:23:54', '2016-08-10 16:23:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `correta` tinyint(1) NOT NULL DEFAULT '0',
  `alternativa` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `atividade_id`, `correta`, `alternativa`, `created`, `modified`) VALUES
(165, 25, 0, 'Resposta Certa', '2016-08-11 14:04:49', '2016-08-11 14:04:49'),
(166, 25, 0, 'errada', '2016-08-11 14:04:49', '2016-08-11 14:04:49'),
(167, 25, 0, 'errada', '2016-08-11 14:04:49', '2016-08-11 14:04:49'),
(168, 25, 0, 'errada', '2016-08-11 14:04:49', '2016-08-11 14:04:49'),
(169, 25, 0, 'errada', '2016-08-11 14:04:49', '2016-08-11 14:04:49'),
(170, 26, 0, 'Algo aqui!', '2016-08-11 14:09:57', '2016-08-11 14:09:57'),
(171, 26, 0, 'Certa', '2016-08-11 14:09:57', '2016-08-11 14:09:57'),
(172, 26, 0, 'eeeeeeeeeeee', '2016-08-11 14:09:57', '2016-08-11 14:09:57'),
(173, 26, 0, 'eae', '2016-08-11 14:09:57', '2016-08-11 14:09:57'),
(174, 26, 0, 'fdasfsadf', '2016-08-11 14:09:57', '2016-08-11 14:09:57'),
(175, 27, 0, 'algo', '2016-08-11 14:15:11', '2016-08-11 14:15:11'),
(176, 27, 0, 'algo', '2016-08-11 14:15:11', '2016-08-11 14:15:11'),
(177, 27, 0, 'algo', '2016-08-11 14:15:11', '2016-08-11 14:15:11'),
(178, 27, 1, 'certa', '2016-08-11 14:15:11', '2016-08-11 14:15:11'),
(179, 27, 0, 'algo', '2016-08-11 14:15:11', '2016-08-11 14:15:11');

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
(25, 'Teste 1', '<p>eae</p>\r\n', 1, 2, 1, '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-08-11 14:04:49', '2016-08-11 14:04:49', '00314357.pdf'),
(26, 'Teste Dois', '<p>eaeee</p>\r\n', 1, 2, 1, '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-08-11 14:09:57', '2016-08-11 14:09:57', '00314357.pdf'),
(27, 'Teste 3', '<p>eaeee</p>\r\n', 1, 2, 1, '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-08-11 14:15:11', '2016-08-11 14:15:11', '00314357.pdf');

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
  `status` int(1) NOT NULL DEFAULT '1',
  `pontos_final` int(11) NOT NULL,
  `pontos_individuais` int(4) NOT NULL,
  `foto_premio` varchar(255) DEFAULT 'premio_empty.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `premiacaos`
--

INSERT INTO `premiacaos` (`id`, `descricao`, `user_id`, `titulo`, `status`, `pontos_final`, `pontos_individuais`, `foto_premio`) VALUES
(1, 'DescriÃ§Ã£o premiaÃ§Ã£o', 1, 'Teste premiaÃ§Ã£o', 3, 2500, 100, 'untitled.png'),
(2, 'Churrasco por conta do professor', 1, 'Churrasco', 1, 5000, 100, 'churrasco.jpg');

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
(13, 1, 1, 1, '2016-08-09 16:23:01', '2016-08-09 16:23:01'),
(14, 1, 2, 2, '2016-08-10 15:39:26', '2016-08-10 15:39:26'),
(15, 1, 3, 4, '2016-08-10 16:23:53', '2016-08-10 16:23:53'),
(16, 0, 4, 4, '2016-08-11 13:52:32', '2016-08-11 13:52:32'),
(17, 0, 5, 4, '2016-08-11 13:52:53', '2016-08-11 13:52:53'),
(18, 0, 6, 4, '2016-08-11 13:53:07', '2016-08-11 13:53:07'),
(19, 0, 7, 4, '2016-08-11 13:53:31', '2016-08-11 13:53:31'),
(20, 0, 8, 4, '2016-08-11 13:54:16', '2016-08-11 13:54:16'),
(21, 0, 9, 4, '2016-08-11 13:54:44', '2016-08-11 13:54:44'),
(22, 0, 10, 4, '2016-08-11 13:54:51', '2016-08-11 13:54:51'),
(23, 0, 11, 4, '2016-08-11 13:54:53', '2016-08-11 13:54:53'),
(24, 0, 12, 4, '2016-08-11 13:54:56', '2016-08-11 13:54:56'),
(25, 0, 13, 4, '2016-08-11 13:54:57', '2016-08-11 13:54:57'),
(26, 0, 14, 4, '2016-08-11 13:54:59', '2016-08-11 13:54:59'),
(27, 0, 15, 4, '2016-08-11 13:55:00', '2016-08-11 13:55:00'),
(28, 0, 16, 4, '2016-08-11 13:55:02', '2016-08-11 13:55:02'),
(29, 0, 17, 4, '2016-08-11 13:55:04', '2016-08-11 13:55:04'),
(30, 0, 18, 4, '2016-08-11 13:55:06', '2016-08-11 13:55:06'),
(31, 0, 19, 4, '2016-08-11 13:55:07', '2016-08-11 13:55:07'),
(32, 0, 20, 2, '2016-08-11 13:56:59', '2016-08-11 13:56:59'),
(33, 0, 21, 2, '2016-08-11 14:00:33', '2016-08-11 14:00:33'),
(34, 0, 22, 2, '2016-08-11 14:01:09', '2016-08-11 14:01:09'),
(35, 0, 23, 2, '2016-08-11 14:01:21', '2016-08-11 14:01:21'),
(36, 0, 24, 2, '2016-08-11 14:02:07', '2016-08-11 14:02:07'),
(37, 0, 25, 1, '2016-08-11 14:04:49', '2016-08-11 14:04:49'),
(38, 0, 26, 2, '2016-08-11 14:09:57', '2016-08-11 14:09:57'),
(39, 0, 27, 4, '2016-08-11 14:15:11', '2016-08-11 14:15:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respo_alternativas`
--

CREATE TABLE `respo_alternativas` (
  `id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `tentativas_restantes` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 1, 123456, 'diegorm.ti@gmail.com', '6064333888b65d9c19b0382a21c1fee5273b936b', 'Diego Moreira', '12654287_925868070827657_1367160207912510733_n.jpg', 20000, 'true', 'aluno', '2016-03-15 19:43:57', '2016-03-15 19:43:57'),
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
(23, 6, 16, '2016-08-04 14:20:44', '2016-08-04 14:20:44'),
(24, 1, 16, '2016-08-16 00:00:00', '2016-08-16 00:00:00');

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
-- Indexes for table `respo_alternativas`
--
ALTER TABLE `respo_alternativas`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `premiacaos`
--
ALTER TABLE `premiacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `respostas_atividades`
--
ALTER TABLE `respostas_atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `respo_alternativas`
--
ALTER TABLE `respo_alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users_grupos`
--
ALTER TABLE `users_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
