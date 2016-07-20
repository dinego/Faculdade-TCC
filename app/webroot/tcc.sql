/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : tcc

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-07-20 10:35:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acessos_atividades
-- ----------------------------
DROP TABLE IF EXISTS `acessos_atividades`;
CREATE TABLE `acessos_atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`grupo_id`,`atividade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acessos_atividades
-- ----------------------------
INSERT INTO `acessos_atividades` VALUES ('1', '1', '1', '2016-04-05 11:12:55', '2016-04-05 11:12:57');
INSERT INTO `acessos_atividades` VALUES ('2', '2', '2', '2016-04-05 11:21:34', '2016-04-05 11:21:38');

-- ----------------------------
-- Table structure for alternativas
-- ----------------------------
DROP TABLE IF EXISTS `alternativas`;
CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atividade_id` int(11) NOT NULL,
  `alternativa` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`atividade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of alternativas
-- ----------------------------
INSERT INTO `alternativas` VALUES ('1', '1', 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08');
INSERT INTO `alternativas` VALUES ('2', '1', 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08');
INSERT INTO `alternativas` VALUES ('3', '1', 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08');
INSERT INTO `alternativas` VALUES ('4', '1', 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08');
INSERT INTO `alternativas` VALUES ('5', '1', 'eae', '2016-04-05 14:34:08', '2016-04-05 14:34:08');
INSERT INTO `alternativas` VALUES ('6', '4', 'fasdfasdfasd', '2016-04-27 14:38:06', '2016-04-27 14:38:06');
INSERT INTO `alternativas` VALUES ('7', '4', 'fsadfasdfasdfa', '2016-04-27 14:38:06', '2016-04-27 14:38:06');
INSERT INTO `alternativas` VALUES ('8', '4', 'resposta', '2016-04-27 14:38:06', '2016-04-27 14:38:06');
INSERT INTO `alternativas` VALUES ('9', '4', '', '2016-04-27 14:38:06', '2016-04-27 14:38:06');
INSERT INTO `alternativas` VALUES ('10', '4', 'fsad fsda fsad fa fs d', '2016-04-27 14:38:06', '2016-04-27 14:38:06');
INSERT INTO `alternativas` VALUES ('11', '4', 'fas fas fsaefeeeeeeeeeeeeeeeeeeeeee', '2016-04-27 14:38:06', '2016-04-27 14:38:06');
INSERT INTO `alternativas` VALUES ('12', '5', 'sfisadhuifhsadifhuisadhfuiasdfhsah', '2016-04-27 14:40:38', '2016-04-27 14:40:38');
INSERT INTO `alternativas` VALUES ('13', '5', '', '2016-04-27 14:40:38', '2016-04-27 14:40:38');
INSERT INTO `alternativas` VALUES ('14', '5', 'fsahdifuhsdfhiasdhfashfha', '2016-04-27 14:40:38', '2016-04-27 14:40:38');
INSERT INTO `alternativas` VALUES ('15', '5', 'sfdhaifhsdfhi', '2016-04-27 14:40:38', '2016-04-27 14:40:38');
INSERT INTO `alternativas` VALUES ('16', '5', 'fsihdfah', '2016-04-27 14:40:38', '2016-04-27 14:40:38');
INSERT INTO `alternativas` VALUES ('17', '5', 'sfdha', '2016-04-27 14:40:38', '2016-04-27 14:40:38');
INSERT INTO `alternativas` VALUES ('18', '6', 'aeeeeeeeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23');
INSERT INTO `alternativas` VALUES ('19', '6', 'eaeeeeeeeeeeeeeeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23');
INSERT INTO `alternativas` VALUES ('20', '6', 'eeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23');
INSERT INTO `alternativas` VALUES ('21', '6', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23');
INSERT INTO `alternativas` VALUES ('22', '6', '', '2016-04-27 14:46:23', '2016-04-27 14:46:23');
INSERT INTO `alternativas` VALUES ('23', '6', 'eeee', '2016-04-27 14:46:23', '2016-04-27 14:46:23');
INSERT INTO `alternativas` VALUES ('24', '7', '1', '2016-04-27 14:53:29', '2016-04-27 14:53:29');
INSERT INTO `alternativas` VALUES ('25', '7', '2', '2016-04-27 14:53:29', '2016-04-27 14:53:29');
INSERT INTO `alternativas` VALUES ('26', '7', '3', '2016-04-27 14:53:29', '2016-04-27 14:53:29');
INSERT INTO `alternativas` VALUES ('27', '7', '4', '2016-04-27 14:53:29', '2016-04-27 14:53:29');
INSERT INTO `alternativas` VALUES ('28', '7', '5', '2016-04-27 14:53:29', '2016-04-27 14:53:29');
INSERT INTO `alternativas` VALUES ('29', '8', 'sadfasdf sd fsad', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `alternativas` VALUES ('30', '8', '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `alternativas` VALUES ('31', '8', '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `alternativas` VALUES ('32', '8', '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `alternativas` VALUES ('33', '8', '3', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `alternativas` VALUES ('34', '8', '', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `alternativas` VALUES ('35', '9', '1', '2016-04-27 14:55:59', '2016-04-27 14:55:59');
INSERT INTO `alternativas` VALUES ('36', '9', '2', '2016-04-27 14:55:59', '2016-04-27 14:55:59');
INSERT INTO `alternativas` VALUES ('37', '9', '3', '2016-04-27 14:55:59', '2016-04-27 14:55:59');
INSERT INTO `alternativas` VALUES ('38', '9', '4', '2016-04-27 14:55:59', '2016-04-27 14:55:59');
INSERT INTO `alternativas` VALUES ('39', '9', '4', '2016-04-27 14:55:59', '2016-04-27 14:55:59');
INSERT INTO `alternativas` VALUES ('40', '10', '11', '2016-04-27 14:57:33', '2016-04-27 14:57:33');
INSERT INTO `alternativas` VALUES ('41', '10', '1123', '2016-04-27 14:57:33', '2016-04-27 14:57:33');
INSERT INTO `alternativas` VALUES ('42', '10', '12312', '2016-04-27 14:57:33', '2016-04-27 14:57:33');
INSERT INTO `alternativas` VALUES ('43', '10', '3123', '2016-04-27 14:57:33', '2016-04-27 14:57:33');
INSERT INTO `alternativas` VALUES ('44', '10', '123123', '2016-04-27 14:57:33', '2016-04-27 14:57:33');

-- ----------------------------
-- Table structure for atividades
-- ----------------------------
DROP TABLE IF EXISTS `atividades`;
CREATE TABLE `atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `arquivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`nivel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of atividades
-- ----------------------------
INSERT INTO `atividades` VALUES ('1', 'Teste', '<p>teste</p>\r\n', '1', '1', '1', '2', '2016-01-02 00:00:00', '2016-04-05 00:00:00', '2016-04-05 14:34:08', '2016-04-05 14:34:08', '20151112_5643f328b0c86.png');
INSERT INTO `atividades` VALUES ('2', 'eae', 'eae', '1', '1', '1', '2', '2016-04-03 11:20:17', '2016-04-07 11:20:33', '2016-04-05 11:20:37', '2016-04-05 11:20:46', '20151112_5643f328b0c86.png');
INSERT INTO `atividades` VALUES ('3', 'Teste de atividade', '<p>Eae pessoal! Beleza?</p>\r\n', '1', '1', '1', '1', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:00:35', '2016-04-27 14:00:35', 'P_20160426_103504.jpg');
INSERT INTO `atividades` VALUES ('4', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:38:06', '2016-04-27 14:38:06', '');
INSERT INTO `atividades` VALUES ('5', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:40:38', '2016-04-27 14:40:38', '');
INSERT INTO `atividades` VALUES ('6', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:46:23', '2016-04-27 14:46:23', '');
INSERT INTO `atividades` VALUES ('7', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:53:29', '2016-04-27 14:53:29', '');
INSERT INTO `atividades` VALUES ('8', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:55:13', '2016-04-27 14:55:13', '');
INSERT INTO `atividades` VALUES ('9', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:55:59', '2016-04-27 14:55:59', '');
INSERT INTO `atividades` VALUES ('10', 'Primeira atividade valendo nota', '<p>Neg&oacute;cio &eacute; o seguinte!</p>\r\n\r\n<p>Faz ae e depois me mostra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Valeu.</p>\r\n', '1', '1', '1', '2', '2016-05-01 00:00:00', '2016-06-01 00:00:00', '2016-04-27 14:57:33', '2016-04-27 14:57:33', '');

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `descricao` longtext,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES ('1', '4000 - Sistema de informação', 'Turma 4000', '2016-04-05 09:45:54', '2016-04-05 09:45:57');
INSERT INTO `grupos` VALUES ('2', '2000 - Teste', 'Teste', '2016-04-05 11:19:10', '2016-04-05 11:19:14');

-- ----------------------------
-- Table structure for premiacaos
-- ----------------------------
DROP TABLE IF EXISTS `premiacaos`;
CREATE TABLE `premiacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `pontos_final` int(11) NOT NULL,
  `pontos_individuais` int(4) NOT NULL,
  `foto_premio` varchar(255) DEFAULT 'premio_empty.jpg',
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of premiacaos
-- ----------------------------
INSERT INTO `premiacaos` VALUES ('1', 'DescriÃ§Ã£o premiaÃ§Ã£o', '1', 'Teste premiaÃ§Ã£o', '2500', '100', 'icon.png');

-- ----------------------------
-- Table structure for respostas_atividades
-- ----------------------------
DROP TABLE IF EXISTS `respostas_atividades`;
CREATE TABLE `respostas_atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  `alternativa_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`user_id`,`atividade_id`,`alternativa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of respostas_atividades
-- ----------------------------
INSERT INTO `respostas_atividades` VALUES ('1', '1', '1', '3', '2016-04-05 09:35:12', '2016-04-05 09:35:17');
INSERT INTO `respostas_atividades` VALUES ('2', '0', '7', '2', '2016-04-27 14:53:29', '2016-04-27 14:53:29');
INSERT INTO `respostas_atividades` VALUES ('3', '0', '8', '1', '2016-04-27 14:55:13', '2016-04-27 14:55:13');
INSERT INTO `respostas_atividades` VALUES ('4', '0', '9', '2', '2016-04-27 14:55:59', '2016-04-27 14:55:59');
INSERT INTO `respostas_atividades` VALUES ('5', '1', '10', '1', '2016-04-27 14:57:33', '2016-04-27 14:57:33');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nome` varchar(120) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL DEFAULT '0',
  `active` varchar(5) NOT NULL DEFAULT 'true',
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'diegorm.ti@gmail.com', '6064333888b65d9c19b0382a21c1fee5273b936b', 'Diego Moreira', '12654287_925868070827657_1367160207912510733_n.jpg', '20000', 'true', 'admin', '2016-03-15 19:43:57', '2016-03-15 19:43:57');
INSERT INTO `users` VALUES ('2', 'brenda.sricci@gmail.com', 'aa29cdb48e7bc0f96a8024876b9986891253fb0e', 'Brenda S. Ricci', 'icon.png', '0', 'true', 'prof', '2016-03-28 19:17:25', '2016-03-28 19:17:25');

-- ----------------------------
-- Table structure for users_grupos
-- ----------------------------
DROP TABLE IF EXISTS `users_grupos`;
CREATE TABLE `users_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`user_id`,`grupo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_grupos
-- ----------------------------
INSERT INTO `users_grupos` VALUES ('1', '1', '1', '2016-04-05 09:46:47', '2016-04-05 09:46:50');
INSERT INTO `users_grupos` VALUES ('2', '2', '1', '2016-04-05 09:47:11', '2016-04-05 09:47:14');
INSERT INTO `users_grupos` VALUES ('3', '2', '2', '2016-04-05 11:19:44', '2016-04-05 11:19:47');
SET FOREIGN_KEY_CHECKS=1;
