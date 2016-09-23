-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2016 às 16:11
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
(1, 1, 1, '2016-09-19 14:01:11', '2016-09-19 14:01:11');

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
(1, 1, 1, '', '2016-09-19 14:01:11', '2016-09-19 14:01:11');

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
(1, 'Atividade de Teste', '<p>Apenas um teste para ver se vai funcionar tudo corretamente</p>\r\n\r\n<p>Um paragr&aacute;fo bolado</p>\r\n\r\n<p>Outro par&aacute;grafo</p>\r\n\r\n<p>Apenas montando uma lista</p>\r\n\r\n<ul>\r\n	<li>Item 1</li>\r\n	<li>Item 2 Com mais letras</li>\r\n	<li>Item 3 com menos&nbsp;</li>\r\n</ul>\r\n\r\n<p>Agora teste essa quest&atilde;o.<br />\r\nObrigado.</p>\r\n', 1, 1, 1, '1', '2016-09-20 00:00:00', '2017-01-01 00:00:00', '2016-09-19 14:01:11', '2016-09-19 14:01:11', '');

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
(1, 'Grupo de Teste', '<p>Apenas grupo de Teste</p>\r\n', '2016-09-19 13:56:24', '2016-09-19 13:56:24', 1);

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
(1, 'Testando a premiaÃ§Ã£o ', 1, 'PrÃªmio Teste', 1, 3000, 102, 'churrasco.jpg');

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
  `tentativas_restantes` int(11) NOT NULL DEFAULT '3',
  `finalizada` tinyint(1) NOT NULL DEFAULT '0',
  `tentativa` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respo_alternativas`
--

INSERT INTO `respo_alternativas` (`id`, `atividade_id`, `user_id`, `created`, `modified`, `tentativas_restantes`, `finalizada`, `tentativa`) VALUES
(1, 1, 3, '2016-09-19 14:41:49', '2016-09-19 14:41:49', 2, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respo_dissertativas`
--

CREATE TABLE `respo_dissertativas` (
  `id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resposta` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respo_dissertativas`
--

INSERT INTO `respo_dissertativas` (`id`, `atividade_id`, `user_id`, `resposta`, `created`, `modified`, `pontos`) VALUES
(1, 1, 3, 'Apenas um teste de resposta para o professor', '2016-09-19 14:48:45', '2016-09-19 14:48:45', 0);

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
(1, 0, 55555, 'profadmin@eduga.com.br', '6064333888b65d9c19b0382a21c1fee5273b936b', 'Professor Admin', '12654287_925868070827657_1367160207912510733_n.jpg', 0, 'true', 'admin', '2016-09-19 13:39:27', '2016-09-19 13:39:27'),
(2, 0, 10000, 'aluno@eduga.com.br', '6064333888b65d9c19b0382a21c1fee5273b936b', 'Aluno', '12654287_925868070827657_1367160207912510733_n.jpg', 0, 'true', 'aluno', '2016-09-19 13:40:07', '2016-09-19 13:40:07'),
(3, 0, 78078, 'diegorm.ti@gmail.com', '3dcea1ff6dfb3c3c3e954fe4b1e88506ad3a6386', 'Diego Moreira', '12654287_925868070827657_1367160207912510733_n.jpg', 0, 'true', 'aluno', '2016-09-19 13:48:05', '2016-09-19 14:05:26');

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
(1, 2, 1, '2016-09-19 13:56:24', '2016-09-19 13:56:24'),
(2, 3, 1, '2016-09-19 13:56:24', '2016-09-19 13:56:24');

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
-- Indexes for table `respo_dissertativas`
--
ALTER TABLE `respo_dissertativas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `premiacaos`
--
ALTER TABLE `premiacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `respostas_atividades`
--
ALTER TABLE `respostas_atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `respo_alternativas`
--
ALTER TABLE `respo_alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `respo_dissertativas`
--
ALTER TABLE `respo_dissertativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_grupos`
--
ALTER TABLE `users_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
