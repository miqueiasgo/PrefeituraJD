-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 04/03/2013 às 19h33min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `pmjd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acontece_espaco`
--

CREATE TABLE IF NOT EXISTS `acontece_espaco` (
  `id_acontece` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_acontece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acontece_fotos`
--

CREATE TABLE IF NOT EXISTS `acontece_fotos` (
  `id_acontece_fotos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `texto_album` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_acontece_fotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acontece_simbolos`
--

CREATE TABLE IF NOT EXISTS `acontece_simbolos` (
  `id_acontece` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_acontece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_equipe`
--

CREATE TABLE IF NOT EXISTS `adm_equipe` (
  `id_adm_equipe` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` int(10) DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `foto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_adm_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_gabinete`
--

CREATE TABLE IF NOT EXISTS `adm_gabinete` (
  `id_adm_gabinete` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `foto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_adm_gabinete`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_parcerias`
--

CREATE TABLE IF NOT EXISTS `adm_parcerias` (
  `id_adm_parcerias` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adm_parcerias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_secretarias`
--

CREATE TABLE IF NOT EXISTS `adm_secretarias` (
  `id_adm_secretarias` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adm_secretarias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE IF NOT EXISTS `anexos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_publicacao` int(10) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `principal` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_publicacao` (`id_publicacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `anexos`
--

INSERT INTO `anexos` (`id`, `id_publicacao`, `path`, `name`, `principal`) VALUES
(9, 13, 'C:/wamp/www/pmjd_yii/publicacoes_pdf/2013/13/aula8_artigo.pdf', 'arquivo 2', 1),
(10, 13, 'C:/wamp/www/pmjd_yii/publicacoes_pdf/2013/13/aula9_texto.pdf', 'arquivo 1', 0),
(11, 13, 'C:/wamp/www/pmjd_yii/publicacoes_pdf/2013/13/aula11_caso.pdf', 'anexo3', 1),
(12, 15, 'C:/wamp/www/pmjd_yii/protected/views/publicacoes/publicacoes_pdf/2013/15/Curriculum_Flavia_Barreto(2).pdf', 'Novo anexo espero q funcione', 1),
(13, 15, 'C:/wamp/www/pmjd_yii/protected/views/publicacoes/publicacoes_pdf/2013/15/exercicioModelagem.pdf', 'facil', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_album`
--

CREATE TABLE IF NOT EXISTS `imagens_album` (
  `id_imagens_album` int(11) NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_unicode_ci,
  `id_acontece_fotos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagens_album`),
  KEY `id_album` (`id_acontece_fotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_obras`
--

CREATE TABLE IF NOT EXISTS `imagens_obras` (
  `id_imagens_obras` int(11) NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_unicode_ci,
  `id_obra` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagens_obras`),
  KEY `id_obra` (`id_obra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `texto_noticia` text COLLATE utf8_unicode_ci,
  `foto_slideshow` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `subtitulo`, `data`, `texto_noticia`, `foto_slideshow`) VALUES
(1, 'Noticia 1', 'subtitulo', '0000-00-00 00:00:00', 'Algum texto para notícia', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id_obras` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `texto_obra` text COLLATE utf8_unicode_ci,
  `foto_slideshow` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_obras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `obras`
--

INSERT INTO `obras` (`id_obras`, `titulo`, `data`, `texto_obra`, `foto_slideshow`) VALUES
(1, 'Obra1', '2013-01-15 00:00:00', 'texto de obra', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ouvidoria_cidade`
--

CREATE TABLE IF NOT EXISTS `ouvidoria_cidade` (
  `id_ouvidoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ouvidoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ouvidoria_opiniao`
--

CREATE TABLE IF NOT EXISTS `ouvidoria_opiniao` (
  `id_ouvidoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_ouvidoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE IF NOT EXISTS `publicacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `situacao` enum('em aberto','julgado','prorrogado','cancelado') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'em aberto',
  `descricao` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `subtitulo`, `data`, `situacao`, `descricao`) VALUES
(13, 'id da pasta', 'Prefeitura Municipal de João Dourado', '2013-03-03', 'em aberto', 'teste'),
(14, 'Nova Publicacao', 'Secretaria de Saúde', '2013-03-14', 'prorrogado', ''),
(15, 'dentro da view', 'teste', '2013-03-04', 'em aberto', 'teste');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `anexos`
--
ALTER TABLE `anexos`
  ADD CONSTRAINT `anexos_ibfk_1` FOREIGN KEY (`id_publicacao`) REFERENCES `publicacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `imagens_album`
--
ALTER TABLE `imagens_album`
  ADD CONSTRAINT `imagens_album_ibfk_1` FOREIGN KEY (`id_acontece_fotos`) REFERENCES `acontece_fotos` (`id_acontece_fotos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `imagens_obras`
--
ALTER TABLE `imagens_obras`
  ADD CONSTRAINT `imagens_obras_ibfk_1` FOREIGN KEY (`id_obra`) REFERENCES `obras` (`id_obras`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
