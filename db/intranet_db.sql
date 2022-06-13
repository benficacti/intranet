-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13-Jun-2022 às 20:48
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `intranet_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `ID_AGENDA` int(11) NOT NULL,
  `ID_TELEFONE_USUARIO` int(11) DEFAULT NULL,
  `ID_NOME_AGENDA` int(11) DEFAULT NULL,
  `ID_STATUS_VISUALIZACAO` int(11) DEFAULT NULL,
  `ID_EMAIL` int(11) DEFAULT NULL,
  `ID_SETOR` int(11) DEFAULT NULL,
  `PRIVATE_KEY_AGENDA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`ID_AGENDA`, `ID_TELEFONE_USUARIO`, `ID_NOME_AGENDA`, `ID_STATUS_VISUALIZACAO`, `ID_EMAIL`, `ID_SETOR`, `PRIVATE_KEY_AGENDA`) VALUES
(33, 8, 20, 1, 16, 1, '$2y$10$MJiSdwYUt8odGkU6CjqDdOEotxjeCKASEPpp5T'),
(34, 9, 25, 1, 17, 1, '$2y$10$GIu/vWPwz48inH9ojOuYU.GeLMpK9YJ08BeLo7'),
(35, 10, 26, 1, 22, 1, '$2y$10$joAIrm57C7L.wJOuezfm2.tYqbBRUZVyyEqzzM'),
(36, 11, 27, 1, 22, 1, '$2y$10$oH54vRrZqPemh7e2g5Aawu6H31Iyq6bdXbVU9c'),
(37, 12, 28, 1, 34, 1, '$2y$10$bF2NApDhkT6PKG1mrsBDxOmeo8V5qyDgqRAb8c'),
(38, 13, 28, 1, 34, 3, '$2y$10$7E48shNlGFil2fju/JAr3O78GbEURFBO4d2prv'),
(39, 14, 29, 1, 35, 4, '$2y$10$ncYgkN.L23LSXkp/WFBTe.95zVPkQslggVrCxn'),
(40, 15, 29, 1, 35, 1, '$2y$10$F4HheBFj.VJTkYzraG.L0uI0nDBOucgEY1uRUt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexo`
--

CREATE TABLE `anexo` (
  `ID_ANEXO` int(11) NOT NULL,
  `URL_ANEXO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `ID_CANDIDATO` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `CHAPA` varchar(45) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `ID_SETOR_ATUAL` int(11) DEFAULT NULL,
  `ID_VAGA` int(11) DEFAULT NULL,
  `ID_STATUS_CANDIDATO` int(11) DEFAULT NULL,
  `PRIVATE_KEY_CANDIDATO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`ID_CANDIDATO`, `NOME`, `CHAPA`, `EMAIL`, `ID_SETOR_ATUAL`, `ID_VAGA`, `ID_STATUS_CANDIDATO`, `PRIVATE_KEY_CANDIDATO`) VALUES
(28, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 60, 3, '$2y$10$GetB3pX7UyNtnyEraeZ9yORPBQUipxHIt/bVaQG8mWtgSHMBCHkd2'),
(29, 'JOSE RUBENS FERREIRA', '121004', '', 1, 60, 1, '$2y$10$FqRLOBqdIsmQDwDEaie8c.JvXtyBU4J/mfoJBIoFys6jM5SLKlxZS'),
(30, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com', 1, 60, 1, '$2y$10$XLJW9..7VqpmGsy2PXzbcu4GpeoDSG03rWimsIwjw3.YjoDmaC/pS'),
(31, 'JOSE RUBENS FERREIRA', '121004', '', 3, 60, 1, '$2y$10$aTmhklG1Mo10s0StzgzjYO5IbjOv813hzwXXVubtEIpVatuOVk2/K'),
(32, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 60, 3, '$2y$10$3hRL81aXh3If6fNheSsJ0.5w9GUtfLEP20nRdZtXYg40fGKlFtESy'),
(33, 'JOSE RUBENS FERREIRA', '121004', '', 1, 62, 1, '$2y$10$eUp1RzsWMyukNgr406/4v.9Huy9VLKaWoD/mW8K5sFTNnYMqercsO'),
(34, 'JOSE RUBENS FERREIRA', '121004', 'rubensferreiraja01@gmail.com', 1, 64, 3, '$2y$10$Ie1YZ1QlIyhO0bCOQAoXPeHUj95lECQyAcEzdD8q2bM5qxob3jjuS'),
(35, 'EMERSON DA SILVA', '120225', 'emersonsilva@benficabbtt.com.br', 1, 68, 3, '$2y$10$uVetvETeB7u33pHzuTMJaO2dYNkp2gL.g9bqVfP9cceLcVGNGbuw.'),
(36, 'VLADIMIR BASSAN', '100023', '', 1, 63, 1, '$2y$10$2NJWpSYvmxSKcAboj2Yj1e9h0oGYF7GM3HYOjvD2C6rWDzReBAIiy'),
(37, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 60, 1, '$2y$10$iqmW/mibq642GnoMbjkpEub6/JUxnfI0yQMl2l9bKwhk2nwxuwJqy'),
(38, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 2, 60, 1, '$2y$10$0MGlOCfsKSDt7eyVSxzT1uTqaU1i3z84xlRbolrlPsBLD4KoSs9zK'),
(39, 'JOSE RUBENS FERREIRA', '121004', '', 2, 60, 1, '$2y$10$TfBkFWq08TO6w37PAbHyPu0PggG4pBsCQt0tF8MthylRv3jpF7C1K'),
(40, 'EDSON PEREIRA DOS REIS', '121016', 'edson.reis@benficabbtt.com.br', 1, 60, 1, '$2y$10$p7rkTCDD2Y4S14hvNxwra.N92sj4p5aNtyrLl2o3V.NrZyfBNiSp6'),
(41, 'EDSON PEREIRA DOS REIS', '121016', 'edson.reis@benficabbtt.com.br', 1, 60, 1, '$2y$10$WHCF0fmkh3Y5bWUtvfuXfuCLOrRaIDKAVIQmToUXjrMWSRywEskWa'),
(42, 'EDSON PEREIRA DOS REIS', '121016', 'edson.reis@benficabbtt.com.br', 1, 63, 1, '$2y$10$lo6AalmUYnga4jGktQiw1u3XKi2zVMWIgPkZElCHIDPZKQD4ww8Xy'),
(43, 'EDSON PEREIRA DOS REIS', '121016', 'emersonsilva@benficabbtt.com.br', 1, 64, 1, '$2y$10$/EtE6wmVexksUi8.kjja6ecrQhg16oQMZs4/m7tP3mK/zAzIvB5v6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunicacao`
--

CREATE TABLE `comunicacao` (
  `ID_COMUNICACAO` int(11) NOT NULL,
  `TITULO_COM` varchar(45) DEFAULT NULL,
  `MENSAGEM_COM` varchar(45) DEFAULT NULL,
  `HORA_CRIACAO_COM` time DEFAULT NULL,
  `DATA_CRIACAO_COM` date DEFAULT NULL,
  `HORA_EXPIRAR_COM` time DEFAULT NULL,
  `DATA_EXPIRAR_COM` date DEFAULT NULL,
  `ID_LOGIN_COM` int(11) DEFAULT NULL,
  `ID_TIPO_COM` int(11) DEFAULT NULL,
  `ID_NIVEL_PRIORIDADE_COM` int(11) DEFAULT NULL,
  `ID_URL_TOP_COM` int(11) DEFAULT NULL,
  `ID_URL_BOTTOM_COM` int(11) DEFAULT NULL,
  `ID_ANEXO_COM` int(11) DEFAULT NULL,
  `ID_EMPRESA_COM` int(11) DEFAULT NULL,
  `ID_STATUS_COM` int(11) DEFAULT NULL,
  `ID_VAGAS_EMPREGO` int(11) DEFAULT NULL,
  `CODIGO_COM` int(11) DEFAULT NULL,
  `PRIVATE_KEY_COMUNICACAO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comunicacao`
--

INSERT INTO `comunicacao` (`ID_COMUNICACAO`, `TITULO_COM`, `MENSAGEM_COM`, `HORA_CRIACAO_COM`, `DATA_CRIACAO_COM`, `HORA_EXPIRAR_COM`, `DATA_EXPIRAR_COM`, `ID_LOGIN_COM`, `ID_TIPO_COM`, `ID_NIVEL_PRIORIDADE_COM`, `ID_URL_TOP_COM`, `ID_URL_BOTTOM_COM`, `ID_ANEXO_COM`, `ID_EMPRESA_COM`, `ID_STATUS_COM`, `ID_VAGAS_EMPREGO`, `CODIGO_COM`, `PRIVATE_KEY_COMUNICACAO`) VALUES
(48, 'VAGAS DE EMPREGO', NULL, '09:50:01', '2022-06-01', '09:50:01', '2022-06-01', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 59, 1, '$2y$10$3AwMZNwhsSQOIYvbiGqOGeVaRkt9p1piUU/XzGDFgw8qPwsS7hGrq'),
(49, 'VAGAS DE EMPREGO', NULL, '09:51:49', '2022-06-01', '09:51:49', '2022-06-01', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 60, 2, '$2y$10$LSCmPrsS4Wntxn0HO7N3FO.X9oIzbJcA0sHcUc6ITmulJtYt5ijDe'),
(50, 'VAGAS DE EMPREGO', NULL, '11:29:18', '2022-06-01', '11:29:18', '2022-06-01', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 61, 3, '$2y$10$F4RXnj/2CnfhP5med9lNN.agMvNFbnl2LlpA5OdXpRmqmCqZm4kWG'),
(51, 'VAGAS DE EMPREGO', NULL, '08:41:11', '2022-06-06', '08:41:11', '2022-06-06', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 62, 4, '$2y$10$qdboCxMKIlFW3mAUhplhPu9WoSuvsREN8wEv6qzyyNahiVR22/5ka'),
(52, 'VAGAS DE EMPREGO', NULL, '09:37:51', '2022-06-08', '09:37:51', '2022-06-08', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 63, 5, '$2y$10$OqbbmDSpQbCctlPga/bs9eVVN/YcYOUM1Y1Y.fIGYGoxfdMdnsVPa'),
(53, 'VAGAS DE EMPREGO', NULL, '09:42:57', '2022-06-08', '09:42:57', '2022-06-08', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 64, 6, '$2y$10$R3qaMYPaOQsL13V00sG2SeZo75arsY7hjkEHL.V21ocYo4423dDLe'),
(54, 'VAGAS DE EMPREGO', NULL, '10:26:51', '2022-06-08', '10:26:51', '2022-06-08', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 65, 7, '$2y$10$QV8/OhLelZOYNgnlxr56x.U57pv1a2tyj8dLFtU/8JJa7TImoM63W'),
(55, 'VAGAS DE EMPREGO', NULL, '11:09:07', '2022-06-08', '11:09:07', '2022-06-08', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 66, 8, '$2y$10$J8PPzFF9krN8noeSz970I.IuUYvST9QtXkMlY9Xy5h7OK8eSYUnQa'),
(56, 'VAGAS DE EMPREGO', NULL, '20:33:11', '2022-06-08', '20:33:11', '2022-06-08', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 67, 9, '$2y$10$vj.Xkhqu00P/d4T6VlGacOm/iZvxGzgi4J2eur3mDxDI5PgKxlgwS'),
(57, 'VAGAS DE EMPREGO', NULL, '20:43:03', '2022-06-08', '20:43:03', '2022-06-08', NULL, 1, 1, NULL, NULL, NULL, 1, 1, 68, 10, '$2y$10$tqdNwyQNUOTpT6b7ebJgnuq62QFMjPTT4cMh8BrqhvXO3QsfIvq9K');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email`
--

CREATE TABLE `email` (
  `ID_EMAIL` int(11) NOT NULL,
  `ENDERECO` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_EMAIL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `email`
--

INSERT INTO `email` (`ID_EMAIL`, `ENDERECO`, `PRIVATE_KEY_EMAIL`) VALUES
(16, 'jose.rubens@benficabbtt.com.br', '$2y$10$OZ9YbonFg3DZbCYclOPuMeZRMHqWCF8BQ7Gzvv9YlgSiOysaUN9PS'),
(17, 'cti@benticabbtt.com.br', '$2y$10$i3a.OmB1T5PS.USN3scR/O7IPcYDpjs1ArLFkKg9tOWxUiryTC3c6'),
(18, 'jonathan.alves@benficabbtt.com.br', '$2y$10$x8UJO2suPPjIlq/O1DtaJedLM1T22DNy1nO6Ls6vLr1RGrDd6DUu6'),
(19, 'emersonsilva@benficabbtt.com.br', '$2y$10$3CDJu3ejFNhyloWdeuoaeO7iGCWlck1A9GDJdgtHB6iPJdVBSAYIi'),
(20, 'bassan@benficabbtt.com.br', '$2y$10$Zl5cfvB0nsbrN6xEyRfhveK/DH6YMtgeWF5xfz1FByqemUlfn5nwe'),
(21, 'cti@benficabbtt.com.br', '$2y$10$5eR9gPS1qRiuI7cC/mId2ejHcwSWUZtHhWUmxoaWkoT.ArS3O6P0.'),
(22, 'ernesto@benficabbtt.com.br', '$2y$10$38ogMm.aymdHlqAm4tl6d.QodN0kcDDJTwxVrVxCTEpEHPvSgLF5W'),
(24, 'jose.rubensbenficabbtt.com.br', '$2y$10$yBHobdyNPfm2owt2gGXCS.fQWLgFEz6ppIntnxOLjW4uimLi98rZ2'),
(25, 'josebenficabbtt.com.br', '$2y$10$D9fAa7NzXxS/y3z441NpB.CgkthQYqnNdtiAx/Y.qH/rzVfDnMl2i'),
(26, 'sdfdfsdfdsfsdfdsfdsfdsfdsfsdfsdf', '$2y$10$em/w4mHVCjujZc1F3VADzeYJ9Mu9n2fqM2D0cPgp.tdltGGwdYTmu'),
(27, 'jose.rubens@benficabbtt.com.br', '$2y$10$GJoQsJmVFAMSO4PVP8AITexTKKS6wqVLvXy1a.eovEUsDFIhzb56K'),
(28, 'jose.rubensbenficabbtt.com.br', '$2y$10$yhF9GOLiqDzTMtx6BLGKwu5leC.ZxwgL9LDycyStBsk.lXFfu0iEC'),
(29, 'jose@benficabbtt.com.br', '$2y$10$utCGdHuHkpjaxnFPaRpJ2egdMWrsTehrJf1yULfNA/ZVLXVoHLK9u'),
(30, 'josebenficabbtt.com.br', '$2y$10$VCVRb1jOxMyi1jlkYlfCTuuUGhO1Bh3AsDYMzgRGupLOjwguGxo4y'),
(31, 'jose@benficabbtt.com.br', '$2y$10$6a.WeDGq915f6pa3sqM2oeE3ZySfLW2S2OEyILcbE7DZ4xZw.Y4CS'),
(32, 'jose@benficabbtt.com.br', '$2y$10$S55JHQzLHA3m8e2bJlLrmud7SUmuhJA6GYsmLGho3AxkH9QmFBxJe'),
(33, 'jose@benficabbtt.com.br', '$2y$10$idpQ4r2gGZuB2ffAhWrTuO9gYFIga.L1T6Mj.7uuBACIQ63V8HV46'),
(34, 'ccojandira@benficabbtt.com.br', '$2y$10$ukTnm/7uMRLO0TOYyvvqTOeyAhoyqi5xTABy4LMLNLZQzU2/X/t8C'),
(35, 'edson.reis@benficabbtt.com.br', '$2y$10$rpTXIox5WW2FYW9c83Mowu7iCm9ZuBRcDU0ZZsDrDvksa3bJ/qKli');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_enviados`
--

CREATE TABLE `email_enviados` (
  `ID_EMAIL_ENVIADOS` int(11) NOT NULL,
  `MENSAGENS` varchar(300) DEFAULT NULL,
  `ID_CANDIDATOS_EMAIL` int(11) DEFAULT NULL,
  `PRIVATE_KEY_EMAIL_ENVIADOS` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `email_enviados`
--

INSERT INTO `email_enviados` (`ID_EMAIL_ENVIADOS`, `MENSAGENS`, `ID_CANDIDATOS_EMAIL`, `PRIVATE_KEY_EMAIL_ENVIADOS`) VALUES
(65, 'Favor comparecer', 30, NULL),
(66, 'aprovado', 28, NULL),
(67, 'Aprovado você lindo!', 32, NULL),
(68, 'Aprovado rubens', 34, NULL),
(69, 'Você foi recusado por você mesmo.', 35, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `ID_EMPRESA` int(11) NOT NULL,
  `NOME_EMPRESA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`ID_EMPRESA`, `NOME_EMPRESA`) VALUES
(1, 'BBTT'),
(2, 'RALIP'),
(3, 'GRUPO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `garagem`
--

CREATE TABLE `garagem` (
  `ID_GARAGEM` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL,
  `ID_EMPRESA_GARAGEM` int(11) DEFAULT NULL,
  `PRIVATE_KEY_GARAGEM` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `garagem`
--

INSERT INTO `garagem` (`ID_GARAGEM`, `DESCRICAO`, `ID_EMPRESA_GARAGEM`, `PRIVATE_KEY_GARAGEM`) VALUES
(1, 'BARUERI', 1, 'JHGyty%45*I'),
(2, 'JANDIRA', 1, 'hHKA%G&JK24HAA*7'),
(3, 'ITAPEVI', 1, 'hHKA%G&JK24HAA*4'),
(4, 'SOROCABA', 1, 'hHKA%G&JK24HAA*3'),
(5, 'RALIP', 2, 'hHKA%G&JK24HAA*5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `ID_IMAGEM` int(11) NOT NULL,
  `URL_IMAGEM` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_IMAGEM` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`ID_IMAGEM`, `URL_IMAGEM`, `PRIVATE_KEY_IMAGEM`) VALUES
(47, 'IndicesBancodeDadospdf160910.pdf', NULL),
(48, 'DDLpdf013314.pdf', NULL),
(49, 'DDLpdf014306.pdf', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `ID_LOGIN` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `SENHA` varchar(45) DEFAULT NULL,
  `ID_USUARIO_LOGIN` int(11) DEFAULT NULL,
  `ID_STATUS_LOGIN` int(11) DEFAULT NULL,
  `ID_PERFIL_LOGIN` int(11) DEFAULT NULL,
  `PRIVATE_KEY_LOGIN` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID_LOGIN`, `NOME`, `SENHA`, `ID_USUARIO_LOGIN`, `ID_STATUS_LOGIN`, `ID_PERFIL_LOGIN`, `PRIVATE_KEY_LOGIN`) VALUES
(2, 'jrubens', '1234', 1, 1, 1, 'YAhs%g3@#845sIPd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `ID_MENU` int(11) NOT NULL,
  `DESC_MENU` varchar(45) DEFAULT NULL,
  `TITULO_MENU` varchar(45) DEFAULT NULL,
  `SUB_TITULO_MENU` varchar(45) DEFAULT NULL,
  `ID_URl_MENU` int(11) DEFAULT NULL,
  `PRIVATE_KEY_MENU` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_prioridade`
--

CREATE TABLE `nivel_prioridade` (
  `ID_NIVEL_PRIORIDADE` int(11) NOT NULL,
  `NIVEL_PRIORIDADE` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel_prioridade`
--

INSERT INTO `nivel_prioridade` (`ID_NIVEL_PRIORIDADE`, `NIVEL_PRIORIDADE`) VALUES
(1, 'BAIXA'),
(2, 'MÉDIA'),
(3, 'ALTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_agenda`
--

CREATE TABLE `nome_agenda` (
  `ID_NOME_AGENDA` int(11) NOT NULL,
  `NOME_AGENDA` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_NOME_AGENDA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nome_agenda`
--

INSERT INTO `nome_agenda` (`ID_NOME_AGENDA`, `NOME_AGENDA`, `PRIVATE_KEY_NOME_AGENDA`) VALUES
(20, 'rubens', '$2y$10$bc0Rdqiap3i3zJzt.n7pUOwRWZa8WHd/s524LZ'),
(25, 'JOSE RUBENS FERREIRA', '$2y$10$M31WAjIz2NHJeSJ1leoxMuity5l6AAPlrw5bvQ'),
(26, 'EMERSON', '$2y$10$lz7zOySJnVP87LUgPH/XoOKDg5Qljj5lPHxyoh'),
(27, 'ERNESTO', '$2y$10$idE4MLb7Os8ZTltwGUgCAuotXAmWF/0E4ZoSas'),
(28, 'BASSAN', '$2y$10$uF0UritMi2a9.5ifP/vWQeKJr9alvPGRBtYYYj'),
(29, 'EDSON REIS', '$2y$10$rtoTqFRnB0N6iHUA7ESKiOOdh1Kxvq8BR.YBlI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operadora`
--

CREATE TABLE `operadora` (
  `ID_OPERADORA` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `CNPJ` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `operadora`
--

INSERT INTO `operadora` (`ID_OPERADORA`, `NOME`, `CNPJ`) VALUES
(1, 'TIM', '00000000000'),
(2, 'VIVO', '00000000001'),
(3, 'ALGAR', '00000000002');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_acesso`
--

CREATE TABLE `perfil_acesso` (
  `ID_PERFIL_ACESSO` int(11) NOT NULL,
  `DESC_PERFIL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil_acesso`
--

INSERT INTO `perfil_acesso` (`ID_PERFIL_ACESSO`, `DESC_PERFIL`) VALUES
(1, 'MANAGER'),
(2, 'ADMIN'),
(3, 'COMMUN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo_trabalho`
--

CREATE TABLE `periodo_trabalho` (
  `ID_PERIODO_TRABALHO` int(11) NOT NULL,
  `DESC_PERIODO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `periodo_trabalho`
--

INSERT INTO `periodo_trabalho` (`ID_PERIODO_TRABALHO`, `DESC_PERIODO`) VALUES
(1, 'MATUTINO'),
(2, 'NOTURNO'),
(3, 'INTEGRAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `ID_SETOR` int(11) NOT NULL,
  `DESC_SETOR` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_SETOR` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`ID_SETOR`, `DESC_SETOR`, `PRIVATE_KEY_SETOR`) VALUES
(1, 'CTI', '$2y$10$iuOB3pJeIY4lovvXF5myvOpJu.WWzdt0BCy8FF'),
(2, 'RECEITA', '$2y$10$C/QepUjxPmsnQKuuU4xUKukbO3nnL7Nsj3I02Z'),
(3, 'FINANCEIRO', '$2y$10$9bdPZnV5kitWR1losrBFIuV.usBe4fZvuOJZFf'),
(4, 'JURÍDICO', '$2y$10$gJZRTNKoQhHkNavsxKg.WOxS8LLAM2CMqrcFjF'),
(5, 'RECURSOS HUMANOS', '$2y$10$scA/yW4khX8lb72m0gZ83eSqBHMnz6fjvSU7u4'),
(6, 'PLANTÃO', '$2y$10$4K9PF4ACVuQfSPmcTaka5eaSaeqTE9NrHIW6u0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `IDSTATUS` int(11) NOT NULL,
  `DESC_STATUS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`IDSTATUS`, `DESC_STATUS`) VALUES
(1, 'ATIVAR'),
(2, 'DESATIVAR'),
(3, 'AGUARDANDO CANDIDATO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_visualizacao`
--

CREATE TABLE `status_visualizacao` (
  `ID_STATUS_VISUALIZACAO` int(11) NOT NULL,
  `STATUS_VISUALIZACAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status_visualizacao`
--

INSERT INTO `status_visualizacao` (`ID_STATUS_VISUALIZACAO`, `STATUS_VISUALIZACAO`) VALUES
(1, 'ASSOCIADO'),
(2, 'DESASSOCIADO'),
(3, 'LIBERADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `ID_TELEFONE` int(11) NOT NULL,
  `NUM_TELEFONE` varchar(45) DEFAULT NULL,
  `ID_OPERADORA` int(11) DEFAULT NULL,
  `ID_STATUS` int(11) DEFAULT NULL,
  `ID_GARAGEM` int(11) DEFAULT NULL,
  `ID_TIPO_TELEFONE` int(11) DEFAULT NULL,
  `ID_SETOR_TELEFONE` int(11) DEFAULT NULL,
  `PRIVATE_KEY_TELEFONE` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`ID_TELEFONE`, `NUM_TELEFONE`, `ID_OPERADORA`, `ID_STATUS`, `ID_GARAGEM`, `ID_TIPO_TELEFONE`, `ID_SETOR_TELEFONE`, `PRIVATE_KEY_TELEFONE`) VALUES
(56, '11965058843', 1, 1, 1, 2, 1, 'ha%ghsa*klk@10D1Detrfg'),
(57, '11972774738', 3, 1, 1, 2, 6, '$2y$10$Dc4KFUzCi9C0PVIRIYZkleZrn./RfhMZpVMzss'),
(58, '11972774736', 1, 1, 3, 2, 2, '$2y$10$KHXhMLe.ezTL8.d.BOHzG.Na.5oMipomIRRXNc'),
(59, '11965058848', 1, 1, 1, 2, 3, '$2y$10$F2aOTdodMH7NEAThNhbz6etn28xiRTpathmuZE'),
(60, '1245', 3, 1, 1, 1, 1, '$2y$10$B3jRaFKZl8USZFPUswzmSOru/tu4M5jRBiGxW4'),
(61, '11944600177', 1, 1, 1, 2, 1, '$2y$10$4zIW/8f1fC4090Y6cd5gou1guZgZ5g03iFrwBG'),
(62, '5023', 3, 1, 1, 1, 1, '$2y$10$hErpgSqII1g7YbsiA02yneTx7HQq6jZYiWz.8g'),
(63, '1302', 3, 1, 1, 1, 1, '$2y$10$UAEWgbIjffoSU08xQgTXBO2Nyvbo77zG3Jxgsu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_usuario`
--

CREATE TABLE `telefone_usuario` (
  `ID_TELEFONE_USUARIO` int(11) NOT NULL,
  `ID_TELEFONE` int(11) DEFAULT NULL,
  `ID_STATUS_VISUALIZACAO` int(11) DEFAULT NULL,
  `ID_NOME_AGENDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefone_usuario`
--

INSERT INTO `telefone_usuario` (`ID_TELEFONE_USUARIO`, `ID_TELEFONE`, `ID_STATUS_VISUALIZACAO`, `ID_NOME_AGENDA`) VALUES
(8, 56, 1, 20),
(9, 57, 1, 25),
(10, 58, 1, 26),
(11, 59, 1, 27),
(12, 62, 1, 28),
(13, 60, 1, 28),
(14, 61, 1, 29),
(15, 63, 1, 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_comunicacao`
--

CREATE TABLE `tipo_comunicacao` (
  `ID_TIPO_COMUNICACAO` int(11) NOT NULL,
  `DESC_COMUNICACAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_comunicacao`
--

INSERT INTO `tipo_comunicacao` (`ID_TIPO_COMUNICACAO`, `DESC_COMUNICACAO`) VALUES
(1, 'VAGAS'),
(2, 'BOLETIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_telefone`
--

CREATE TABLE `tipo_telefone` (
  `ID_TIPO_TELEFONE` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_telefone`
--

INSERT INTO `tipo_telefone` (`ID_TIPO_TELEFONE`, `DESCRICAO`) VALUES
(1, 'RAMAL'),
(2, 'CELULAR'),
(3, 'LINHA FIXO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_vaga`
--

CREATE TABLE `tipo_vaga` (
  `ID_TIPO_VAGA` int(11) NOT NULL,
  `DESC_TIPO_VAGA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_vaga`
--

INSERT INTO `tipo_vaga` (`ID_TIPO_VAGA`, `DESC_TIPO_VAGA`) VALUES
(1, 'ALMOXARIFE'),
(2, 'AGENTE DE COMPRAS'),
(3, 'FISCAL CCO'),
(4, 'ADVOGADO JR'),
(5, 'PLANTONISTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `id_email_usuario` int(11) DEFAULT NULL,
  `id_setor_usuario` int(11) DEFAULT NULL,
  `PRIVATE_KEY_USUARIO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `id_email_usuario`, `id_setor_usuario`, `PRIVATE_KEY_USUARIO`) VALUES
(1, 'Jose Rubens Ferreira', 16, 1, 'HJVBas5%hhusa8&%#484fd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas_emprego`
--

CREATE TABLE `vagas_emprego` (
  `ID_VAGAS_EMPREGO` int(11) NOT NULL,
  `ID_PERIODO_TRABALHO` int(11) DEFAULT NULL,
  `ID_SETOR` int(11) DEFAULT NULL,
  `ID_TIPO_VAGA` int(11) DEFAULT NULL,
  `DETALHE` varchar(200) DEFAULT NULL,
  `URL_ANEXO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas_emprego`
--

INSERT INTO `vagas_emprego` (`ID_VAGAS_EMPREGO`, `ID_PERIODO_TRABALHO`, `ID_SETOR`, `ID_TIPO_VAGA`, `DETALHE`, `URL_ANEXO`) VALUES
(59, 1, 6, 5, 'Testando', NULL),
(60, 3, 4, 4, 'sauihedyusadas', NULL),
(61, 1, 6, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', NULL),
(62, 3, 6, 1, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1600s, when an unknown printer to', NULL),
(63, 2, 5, 3, 'FISCAL CCO EM JANDIRA', NULL),
(64, 3, 3, 4, 'Teste Financeiro', NULL),
(65, 1, 2, 1, 'Teste Receita', NULL),
(66, 3, 3, 3, 'Teste Fiscal Financeiro', 47),
(67, 3, 4, 5, 'tfrdtfrcdtfrctfctctctcy', 48),
(68, 2, 1, 2, 'cscddsadasdsad', 49);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ID_AGENDA`),
  ADD KEY `KEY_ID_NOME_AGENDA_idx` (`ID_NOME_AGENDA`),
  ADD KEY `KEY_ID_EMAIL_AGENDA_idx` (`ID_EMAIL`),
  ADD KEY `KEY_ID_TELEFONE_USUARIO_AGEN_idx` (`ID_TELEFONE_USUARIO`),
  ADD KEY `KEY_ID_STATUS_VISUA_AGENDA_idx` (`ID_STATUS_VISUALIZACAO`),
  ADD KEY `KEY_ID_SETOR_AGENDA_idx` (`ID_SETOR`);

--
-- Índices para tabela `anexo`
--
ALTER TABLE `anexo`
  ADD PRIMARY KEY (`ID_ANEXO`);

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`ID_CANDIDATO`),
  ADD KEY `KEY_ID_VAGA_CANDIDATO_idx` (`ID_VAGA`),
  ADD KEY `KEY_ID_STATUS_CANDIDATO_idx` (`ID_STATUS_CANDIDATO`),
  ADD KEY `KEY_ID_SETOR_ATUAL_idx` (`ID_SETOR_ATUAL`);

--
-- Índices para tabela `comunicacao`
--
ALTER TABLE `comunicacao`
  ADD PRIMARY KEY (`ID_COMUNICACAO`),
  ADD KEY `KEY_TIPO_COM_idx` (`ID_TIPO_COM`),
  ADD KEY `KEY_ID_LOGIN_COM_idx` (`ID_LOGIN_COM`),
  ADD KEY `KEY_ID_URL_IMAGEM_idx` (`ID_URL_TOP_COM`),
  ADD KEY `KEY_ID_URL_IMAGEM_BOTTON_idx` (`ID_URL_BOTTOM_COM`),
  ADD KEY `KEY_NIVEL_PRIORIDADE_idx` (`ID_NIVEL_PRIORIDADE_COM`),
  ADD KEY `KEY_ID_ANEXO_COM_idx` (`ID_ANEXO_COM`),
  ADD KEY `KEY_ID_EMPRESA_COM_idx` (`ID_EMPRESA_COM`),
  ADD KEY `KEY_ID_STATUS_COM_idx` (`ID_STATUS_COM`),
  ADD KEY `KEY_ID_VAGAS_EMPREGO_COM_idx` (`ID_VAGAS_EMPREGO`);

--
-- Índices para tabela `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID_EMAIL`);

--
-- Índices para tabela `email_enviados`
--
ALTER TABLE `email_enviados`
  ADD PRIMARY KEY (`ID_EMAIL_ENVIADOS`),
  ADD KEY `KEY_ID_CANDIDATOS_EMAIL_ENVIADOS_idx` (`ID_CANDIDATOS_EMAIL`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_EMPRESA`);

--
-- Índices para tabela `garagem`
--
ALTER TABLE `garagem`
  ADD PRIMARY KEY (`ID_GARAGEM`),
  ADD KEY `KEY_ID_EMPRESA_GARAGEM_idx` (`ID_EMPRESA_GARAGEM`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`ID_IMAGEM`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_LOGIN`),
  ADD KEY `KEY_ID_USUARIO_LOGIN_idx` (`ID_USUARIO_LOGIN`),
  ADD KEY `KEY_ID_STATUS_LOGIN_idx` (`ID_STATUS_LOGIN`),
  ADD KEY `KEY_ID_PERFIL_LOGIN_idx` (`ID_PERFIL_LOGIN`);

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_MENU`),
  ADD KEY `KEY_ID_URL_MENU_idx` (`ID_URl_MENU`);

--
-- Índices para tabela `nivel_prioridade`
--
ALTER TABLE `nivel_prioridade`
  ADD PRIMARY KEY (`ID_NIVEL_PRIORIDADE`);

--
-- Índices para tabela `nome_agenda`
--
ALTER TABLE `nome_agenda`
  ADD PRIMARY KEY (`ID_NOME_AGENDA`);

--
-- Índices para tabela `operadora`
--
ALTER TABLE `operadora`
  ADD PRIMARY KEY (`ID_OPERADORA`);

--
-- Índices para tabela `perfil_acesso`
--
ALTER TABLE `perfil_acesso`
  ADD PRIMARY KEY (`ID_PERFIL_ACESSO`);

--
-- Índices para tabela `periodo_trabalho`
--
ALTER TABLE `periodo_trabalho`
  ADD PRIMARY KEY (`ID_PERIODO_TRABALHO`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`ID_SETOR`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`IDSTATUS`);

--
-- Índices para tabela `status_visualizacao`
--
ALTER TABLE `status_visualizacao`
  ADD PRIMARY KEY (`ID_STATUS_VISUALIZACAO`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`ID_TELEFONE`),
  ADD KEY `KEY_ID_STATUS_TEL_idx` (`ID_STATUS`),
  ADD KEY `KEY_ID_GARAGEM_TELEFONE_idx` (`ID_GARAGEM`),
  ADD KEY `KEY_ID_TIPO_TELEFONE_TEL_idx` (`ID_TIPO_TELEFONE`),
  ADD KEY `KEY_ID_OPERADORA_TEL_idx` (`ID_OPERADORA`),
  ADD KEY `KEY_ID_SETOR_TELEFONE_idx` (`ID_SETOR_TELEFONE`);

--
-- Índices para tabela `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  ADD PRIMARY KEY (`ID_TELEFONE_USUARIO`),
  ADD KEY `KEY_ID_TELEFONE_TEL_USU_idx` (`ID_TELEFONE`),
  ADD KEY `KEY_ID_STATUS_VIS_TEL_USU_idx` (`ID_STATUS_VISUALIZACAO`),
  ADD KEY `KEY_ID_NOME_AGENDA_TEL_USU_idx` (`ID_NOME_AGENDA`);

--
-- Índices para tabela `tipo_comunicacao`
--
ALTER TABLE `tipo_comunicacao`
  ADD PRIMARY KEY (`ID_TIPO_COMUNICACAO`);

--
-- Índices para tabela `tipo_telefone`
--
ALTER TABLE `tipo_telefone`
  ADD PRIMARY KEY (`ID_TIPO_TELEFONE`);

--
-- Índices para tabela `tipo_vaga`
--
ALTER TABLE `tipo_vaga`
  ADD PRIMARY KEY (`ID_TIPO_VAGA`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `KEY_ID_SETOR_USARIO_idx` (`id_setor_usuario`),
  ADD KEY `KEY_ID_EMAIL_USUARIO_idx` (`id_email_usuario`);

--
-- Índices para tabela `vagas_emprego`
--
ALTER TABLE `vagas_emprego`
  ADD PRIMARY KEY (`ID_VAGAS_EMPREGO`),
  ADD KEY `KEY_ID_TIPO_VAGA_idx` (`ID_TIPO_VAGA`),
  ADD KEY `KEY_ID_SETOR_VAGA_idx` (`ID_SETOR`),
  ADD KEY `KEY_ID_PERIODO_VAGA_idx` (`ID_PERIODO_TRABALHO`),
  ADD KEY `KEY_ID_URL_IMAGE_idx` (`URL_ANEXO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ID_AGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `anexo`
--
ALTER TABLE `anexo`
  MODIFY `ID_ANEXO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `ID_CANDIDATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `comunicacao`
--
ALTER TABLE `comunicacao`
  MODIFY `ID_COMUNICACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `email`
--
ALTER TABLE `email`
  MODIFY `ID_EMAIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `email_enviados`
--
ALTER TABLE `email_enviados`
  MODIFY `ID_EMAIL_ENVIADOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_EMPRESA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `garagem`
--
ALTER TABLE `garagem`
  MODIFY `ID_GARAGEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `ID_IMAGEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `ID_LOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_MENU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nivel_prioridade`
--
ALTER TABLE `nivel_prioridade`
  MODIFY `ID_NIVEL_PRIORIDADE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `nome_agenda`
--
ALTER TABLE `nome_agenda`
  MODIFY `ID_NOME_AGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `operadora`
--
ALTER TABLE `operadora`
  MODIFY `ID_OPERADORA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `perfil_acesso`
--
ALTER TABLE `perfil_acesso`
  MODIFY `ID_PERFIL_ACESSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `periodo_trabalho`
--
ALTER TABLE `periodo_trabalho`
  MODIFY `ID_PERIODO_TRABALHO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `ID_SETOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `IDSTATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `status_visualizacao`
--
ALTER TABLE `status_visualizacao`
  MODIFY `ID_STATUS_VISUALIZACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `ID_TELEFONE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  MODIFY `ID_TELEFONE_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tipo_comunicacao`
--
ALTER TABLE `tipo_comunicacao`
  MODIFY `ID_TIPO_COMUNICACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipo_telefone`
--
ALTER TABLE `tipo_telefone`
  MODIFY `ID_TIPO_TELEFONE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tipo_vaga`
--
ALTER TABLE `tipo_vaga`
  MODIFY `ID_TIPO_VAGA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vagas_emprego`
--
ALTER TABLE `vagas_emprego`
  MODIFY `ID_VAGAS_EMPREGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `KEY_ID_EMAIL_AGENDA` FOREIGN KEY (`ID_EMAIL`) REFERENCES `email` (`ID_EMAIL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_NOME_AGENDA` FOREIGN KEY (`ID_NOME_AGENDA`) REFERENCES `nome_agenda` (`ID_NOME_AGENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_SETOR_AGENDA` FOREIGN KEY (`ID_SETOR`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_VISUA_AGENDA` FOREIGN KEY (`ID_STATUS_VISUALIZACAO`) REFERENCES `status_visualizacao` (`ID_STATUS_VISUALIZACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TELEFONE_USUARIO_AGEN` FOREIGN KEY (`ID_TELEFONE_USUARIO`) REFERENCES `telefone_usuario` (`ID_TELEFONE_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `KEY_ID_SETOR_ATUAL` FOREIGN KEY (`ID_SETOR_ATUAL`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_CANDIDATO` FOREIGN KEY (`ID_STATUS_CANDIDATO`) REFERENCES `status` (`IDSTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_VAGA_CANDIDATO` FOREIGN KEY (`ID_VAGA`) REFERENCES `vagas_emprego` (`ID_VAGAS_EMPREGO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comunicacao`
--
ALTER TABLE `comunicacao`
  ADD CONSTRAINT `KEY_ID_ANEXO_COM` FOREIGN KEY (`ID_ANEXO_COM`) REFERENCES `anexo` (`ID_ANEXO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_EMPRESA_COM` FOREIGN KEY (`ID_EMPRESA_COM`) REFERENCES `empresa` (`ID_EMPRESA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_LOGIN_COM` FOREIGN KEY (`ID_LOGIN_COM`) REFERENCES `login` (`ID_LOGIN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_NIVEL_PRIORIDADE_COM` FOREIGN KEY (`ID_NIVEL_PRIORIDADE_COM`) REFERENCES `nivel_prioridade` (`ID_NIVEL_PRIORIDADE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_COM` FOREIGN KEY (`ID_STATUS_COM`) REFERENCES `status` (`IDSTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_URL_IMAGEM_BOTTON` FOREIGN KEY (`ID_URL_BOTTOM_COM`) REFERENCES `imagem` (`ID_IMAGEM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_URL_IMAGEM_TOP` FOREIGN KEY (`ID_URL_TOP_COM`) REFERENCES `imagem` (`ID_IMAGEM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_VAGAS_EMPREGO_COM` FOREIGN KEY (`ID_VAGAS_EMPREGO`) REFERENCES `vagas_emprego` (`ID_VAGAS_EMPREGO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_TIPO_COM` FOREIGN KEY (`ID_TIPO_COM`) REFERENCES `tipo_comunicacao` (`ID_TIPO_COMUNICACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `email_enviados`
--
ALTER TABLE `email_enviados`
  ADD CONSTRAINT `KEY_ID_CANDIDATOS_EMAIL_ENVIADOS` FOREIGN KEY (`ID_CANDIDATOS_EMAIL`) REFERENCES `candidato` (`ID_CANDIDATO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `KEY_ID_PERFIL_LOGIN` FOREIGN KEY (`ID_PERFIL_LOGIN`) REFERENCES `perfil_acesso` (`ID_PERFIL_ACESSO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_LOGIN` FOREIGN KEY (`ID_STATUS_LOGIN`) REFERENCES `status` (`IDSTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_USUARIO_LOGIN` FOREIGN KEY (`ID_USUARIO_LOGIN`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `KEY_ID_URL_MENU` FOREIGN KEY (`ID_URl_MENU`) REFERENCES `imagem` (`ID_IMAGEM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `KEY_ID_GARAGEM_TELEFONE` FOREIGN KEY (`ID_GARAGEM`) REFERENCES `garagem` (`ID_GARAGEM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_OPERADORA_TEL` FOREIGN KEY (`ID_OPERADORA`) REFERENCES `operadora` (`ID_OPERADORA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_SETOR_TELEFONE` FOREIGN KEY (`ID_SETOR_TELEFONE`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_TEL` FOREIGN KEY (`ID_STATUS`) REFERENCES `status` (`IDSTATUS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TIPO_TELEFONE_TEL` FOREIGN KEY (`ID_TIPO_TELEFONE`) REFERENCES `tipo_telefone` (`ID_TIPO_TELEFONE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  ADD CONSTRAINT `KEY_ID_NOME_AGENDA_TEL_USU` FOREIGN KEY (`ID_NOME_AGENDA`) REFERENCES `nome_agenda` (`ID_NOME_AGENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_VIS_TEL_USU` FOREIGN KEY (`ID_STATUS_VISUALIZACAO`) REFERENCES `status_visualizacao` (`ID_STATUS_VISUALIZACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TELEFONE_TEL_USU` FOREIGN KEY (`ID_TELEFONE`) REFERENCES `telefone` (`ID_TELEFONE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `KEY_ID_EMAIL_USUARIO` FOREIGN KEY (`id_email_usuario`) REFERENCES `email` (`ID_EMAIL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_SETOR_USER` FOREIGN KEY (`id_setor_usuario`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vagas_emprego`
--
ALTER TABLE `vagas_emprego`
  ADD CONSTRAINT `KEY_ID_PERIODO_VAGA` FOREIGN KEY (`ID_PERIODO_TRABALHO`) REFERENCES `periodo_trabalho` (`ID_PERIODO_TRABALHO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_SETOR_VAGA` FOREIGN KEY (`ID_SETOR`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TIPO_VAGA` FOREIGN KEY (`ID_TIPO_VAGA`) REFERENCES `tipo_vaga` (`ID_TIPO_VAGA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_URL_IMAGE` FOREIGN KEY (`URL_ANEXO`) REFERENCES `imagem` (`ID_IMAGEM`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
