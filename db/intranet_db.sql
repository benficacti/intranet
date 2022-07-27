-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27-Jul-2022 às 21:31
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
(67, 48, 34, 1, 458, 1, '$2y$10$nDCGjKc3bTE05HSlpyNu8u/Z.emxlAJweiZ1CV'),
(68, 49, 35, 1, 434, 1, '$2y$10$ZQiyrZ0yc3pgylM0sGamY.XCyFCbkp9teCIjo0'),
(69, 50, 36, 1, 485, 1, '$2y$10$fNagJzXahEqNAb.pap9cme8D3XtksEKVFwEAvX'),
(70, 51, 37, 1, 425, 1, '$2y$10$VhUKuMLPpfxSO9q2Y9/rq.O93SqOn1xeDafMOK'),
(71, 52, 38, 1, 429, 1, '$2y$10$lojjoK31ETgnkWPbuhioFOVedNUeYPjWA/sT8c'),
(72, 53, 39, 1, 370, 4, '$2y$10$h8/TWM.3cYtBI9ERX/0GLeN/PY57t5sMNVdotR'),
(73, 54, 40, 1, 411, 4, '$2y$10$bK/Db/KOJUYBHQwqPrIwJ.A8OndZbzBD7WN6Z2'),
(74, 55, 41, 1, 473, 4, '$2y$10$S9QoSv8B3V.nUjeDM87AbOXh5Kov1GNMOqOVeJ'),
(75, 56, 42, 1, 498, 4, '$2y$10$c6OIv8/c0x801E9tdSErTeogaIZVWRFPIeh9aL'),
(76, 57, 43, 1, 529, 4, '$2y$10$uu5qsjsJaNEIrTYeWYdLzeey5k3DTCHZdfuThY'),
(77, 58, 44, 1, 533, 4, '$2y$10$ECBO8TPxpvNey0uWJIaJNeLZguAoytx6HjtaJw'),
(78, 59, 45, 1, 614, 4, '$2y$10$b/jw92lfyPbwYo/TH9EGh.Rj9CZntGGjdH68.n'),
(79, 60, 46, 1, 422, 7, '$2y$10$irHtOytvK7BYTGYWjg0t3.Dol3JBfpthOd/oeB'),
(80, 61, 47, 1, 605, 7, '$2y$10$KvAv5Ey58QILp98VqJMKS.uQitB9MmY8QXpXpS'),
(81, 62, 48, 1, 384, 35, '$2y$10$yrRv3InjKF7yF8uNE3bA9.04x4t/5Kl9YU3ZLf'),
(82, 63, 49, 1, 440, 35, '$2y$10$bgNKeZqzsXP7kkwIufCfQOarQFfN1jLqGS2NJr'),
(83, 64, 50, 1, 518, 5, '$2y$10$zTvPEES6xLvLxtToyrisrudMpGZIH6MiV/Rr7N'),
(84, 65, 52, 1, 585, 5, '$2y$10$MzzgaeuGqVw2bu1EWu5yQuRzn3qebfLgQAkkO2'),
(85, 66, 53, 1, 627, 5, '$2y$10$DGsh0cn1c713KFsc9ml2MuCRqZcDw2OYuyB8Ps'),
(86, 67, 54, 1, 568, 5, '$2y$10$4xMhOSxX8jvEWlmnvs/8Ae053GZQ6zbfCXmmDK'),
(87, 68, 55, 1, 379, 25, '$2y$10$tV3zZcrD3hnCEt/pMcrQmO0VLeuR./oqt5UL4Q'),
(88, 69, 56, 1, 628, 25, '$2y$10$fIHp6ldBSPb0rXLtWUQowOWsFaSwy8VEix5i43'),
(89, 70, 57, 1, 629, 25, '$2y$10$ekuSlYAW3skQ5oMnsJP9GOoBNPzyRVhVD/VYca'),
(90, 71, 58, 1, 350, 25, '$2y$10$QclG/UDhVitkuGPcWIwhKepqYs6DMD4/3Ra1Av'),
(91, 72, 59, 1, 428, 3, '$2y$10$dzoQMlxapZm7J9nu8bis7eem7cHjsYnl6EZ77n'),
(92, 73, 60, 1, 528, 3, '$2y$10$ei5KI5pce.qBaDwpr0B86e7oItKRV7O4enRko5'),
(93, 74, 61, 1, 531, 3, '$2y$10$BIdP8vlMN3uQ.TCMYbrL.ObfXbo/SDqTU7Vm/x'),
(94, 75, 62, 1, 602, 3, '$2y$10$JUk8upHpIJZOHvnNWGCS6.psXNur3llMH2eKuO'),
(95, 76, 63, 1, 615, 3, '$2y$10$qXjyAZ/uzctb5vbgSonih.5KFyNea6q5t3jlo4'),
(96, 77, 64, 1, 380, 14, '$2y$10$L0B7Pn/DsO8mV7re3k8OBe3RsrNC.TBNKs7mav'),
(97, 78, 65, 1, 491, 14, '$2y$10$omNB.Whoy/X58oYqxuGckuhX.8CSXjNqcMm8k7'),
(98, 79, 66, 1, 414, 14, '$2y$10$K0NqtkBj.jrfItnqDOc72uwrnbYosaUa1Uq7Sy'),
(99, 80, 67, 1, 527, 14, '$2y$10$WZF7nQzl42AnGB64wcN0u.5mIqGVU4KnU5RFs3'),
(100, 81, 68, 1, 409, 9, '$2y$10$5D63ROnXNRsLKc39pi6vfewQXU4Tja2OzhX75X'),
(101, 82, 69, 1, 462, 9, '$2y$10$kl6uVZRRVx8ASsNvvlNRDuW.7UMqdQzVAsosOL'),
(102, 83, 70, 1, 446, 9, '$2y$10$kWOsz6pOqFvhI2tWecNHXO6WCHvY1YZGU.KfPX'),
(103, 84, 71, 1, 599, 9, '$2y$10$BfEZl97AqZ5zA32uv83xDO3RV6/EhWw8OzVo1D'),
(104, 85, 72, 1, 354, 9, '$2y$10$v8Of9l9yUVH4Kosvm4KTw.PoSm3is9zT/Kij96'),
(105, 86, 73, 1, 555, 9, '$2y$10$K4jZmKiMplOLJae85LMzmOA5MDNPYUtARyyvKE'),
(106, 87, 74, 1, 439, 22, '$2y$10$dMi7hOMQ2FOAW8oMnelvYe5EaENTb8mibUZcSl'),
(107, 88, 75, 1, 475, 22, '$2y$10$bvQtYVWAw80znWgJGkZigeTzmtywRpmwb.Kgh0'),
(108, 89, 76, 1, 594, 22, '$2y$10$TktWUQ9WfUxdsQXiqZEgW.rupvHakgK6i/E2DI'),
(109, 90, 77, 1, 545, 38, '$2y$10$rf6E0eM8CQhRdy0bLdEVNONz9kZ9pBeU48A7Gt'),
(110, 91, 78, 1, 468, 15, '$2y$10$LrZAB/z3cO2Z.zr50Z3/Du/fN46fbwKfpDcJUf'),
(111, 92, 79, 1, 469, 15, '$2y$10$zhg9t5NeCf/9nE0tCDKXm.A3VyeIY3GTtHg5bH'),
(112, 93, 80, 1, 493, 15, '$2y$10$OI6587s4YJOm5UHaMkuwdezdWd1kvo2BAetumB'),
(113, 94, 81, 1, NULL, 15, '$2y$10$NNYoeSYV0Gqgv4hr3XxYW.Cd43pXnCF/YuM0O.'),
(114, 95, 82, 1, 582, 20, '$2y$10$Ac6DmcqzQ2bm0StCIKM9zOmj9VYhAgo5.LN09T'),
(115, 96, 83, 1, 540, 20, '$2y$10$H6TR4CDvXomA.w2zG3bEduoC07M3LCqmI.8Y7d'),
(116, 97, 84, 1, 341, 20, '$2y$10$UexINgl08oyeLu4P.WPFaeERoZ7LBHf8Jwd0MZ'),
(117, 98, 85, 1, 343, 20, '$2y$10$7ZFrIhMOfvN8w.Z/15Bd9O16a0.YnN2gXBt6kl'),
(118, 99, 86, 1, 525, NULL, '$2y$10$aJshL3m5H09NQPrt3PnzVOIUuY23O.bH8Yk2H1'),
(119, 100, 87, 1, 359, 1, '$2y$10$thTHa91jd0bcZvVX/2olQ.ymXSM/1e.tBPtjnD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alerta_maquina`
--

CREATE TABLE `alerta_maquina` (
  `ID_ALERTA_MAQUINA` int(11) NOT NULL,
  `ID_MAQUINA_ALERTA` int(11) DEFAULT NULL,
  `ID_COMUNICACAO_ALERTA` int(11) DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `DATA` date DEFAULT NULL,
  `PRIVATE_KEY_ALERTA_MAQUINA` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alerta_maquina`
--

INSERT INTO `alerta_maquina` (`ID_ALERTA_MAQUINA`, `ID_MAQUINA_ALERTA`, `ID_COMUNICACAO_ALERTA`, `HORA`, `DATA`, `PRIVATE_KEY_ALERTA_MAQUINA`) VALUES
(843, 57, 258, '13:49:32', '2022-07-22', '$2y$10$IQdIkXtH8GeornIE8xhj0eZM1tlr6F2LxMmdDNrvbETng5puk7ASK'),
(844, 57, 254, '13:49:32', '2022-07-22', '$2y$10$B/z9zKbYSQ/BFc7k9zVuyutykj7OdM2UtG7UVa0nrZyQK87aN38Nu'),
(845, 57, 255, '13:49:32', '2022-07-22', '$2y$10$jIcLRYrCsGpW8tElIZZyO.NfiMujVznTlr8.CxYR//F/9.wbJtgoS'),
(846, 57, 259, '13:50:32', '2022-07-22', '$2y$10$jDQorR1cWs7GQEDl6HQ.w.9.MUlVaJCFzv0uk1R5fzvx4TLxgNLg2'),
(847, 57, 260, '08:44:16', '2022-07-25', '$2y$10$87kK4Du/e3wgOkjos3r2eOdO/UYu65hQZ.SpaYgesjMkodDxF4AIO'),
(848, 57, 261, '08:46:47', '2022-07-25', '$2y$10$3NsPzxtJr.yOrxcFm1CbJusQNsVnI7oRb.Vs86qAaMWrcdpA.7sPy'),
(849, 57, 262, '08:47:47', '2022-07-25', '$2y$10$eX7q7W.sEKhJMU7Fks3sb.qr/bGgr2OzOOm7.kQLNvWtI34UhMjBG'),
(850, 57, 263, '11:39:20', '2022-07-25', '$2y$10$ixwOvvFN/EhGISAC07Iuz.sSdY24PpGyi3sAykGnmVuOumsl0haNm'),
(851, 57, 264, '11:46:51', '2022-07-25', '$2y$10$BJY0P1nCsyWhYOQPa9tOm.Giq9qoTYG/3imqw8rq8EILIkqG5UidK'),
(852, 57, 265, '12:04:53', '2022-07-25', '$2y$10$Vta5UFwSDtB5pSuzXiwWG.jV58b9oSB4.S/onbKEZ5jDtKmi9m38.'),
(853, 57, 266, '11:06:44', '2022-07-26', '$2y$10$kAn.iHhUthnG.CyTXctz2.W4K/dJX4UxziCf04Q9dmqkyYociVOCi'),
(854, 57, 267, '11:07:44', '2022-07-26', '$2y$10$WbjXQcmA4tIorPIz8g8hOewizL6bL53kc0CH3fGtehUJbtenY5Qqq'),
(855, 57, 268, '11:11:14', '2022-07-26', '$2y$10$ZOuYf82erTxHRjjwgXnfGudKlHagpJp03yNdoOAW2DZUzTLXrt2M6'),
(856, 57, 270, '12:03:50', '2022-07-26', '$2y$10$pq3Ko1z7PyH15W2lU71oHeVKxyB3529bzcRaFYM03TtjdYurGfbwC'),
(857, 57, 276, '13:34:58', '2022-07-26', '$2y$10$pEJHT6Zx9JdiDNTuCtwC9OZ9fWXmxCoRBjOPzALUW.8vGj/LU7s.G'),
(858, 57, 277, '14:07:06', '2022-07-26', '$2y$10$BvShmhrgP42wxN79VOeotu/PYsKPe0DG5yVZM7QY.dy0OqCj8yDNS'),
(859, 57, 279, '14:13:08', '2022-07-26', '$2y$10$E8YLATFNpS2UoTOEbs686ubwhOBHlMNTLWwwBN/BWp.ie2mTltRkK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexo`
--

CREATE TABLE `anexo` (
  `ID_ANEXO` int(11) NOT NULL,
  `URL_ANEXO` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_ANEXO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anexo`
--

INSERT INTO `anexo` (`ID_ANEXO`, `URL_ANEXO`, `PRIVATE_KEY_ANEXO`) VALUES
(9, 'EntradaeDistribuicaodePassespdf184838.pdf', NULL),
(10, 'ManualdeAgrupamentodeFuncaoFixapdf211242.pdf', NULL),
(11, 'ComoLiberareVoltaroExecutavelAntigodoSistemaG', NULL),
(12, 'EntradaeDistribuicaodePassespdf134641.pdf', NULL),
(13, 'ComandosLinuxpdf161053.pdf', NULL),
(14, 'transferirjpg161918.jpg', NULL),
(15, 'transferirjpg164110.jpg', NULL),
(16, 'download3pdf170333.pdf', NULL),
(17, 'transferirjpg150116.jpg', NULL),
(18, 'transferirjpg150718.jpg', NULL),
(19, 'transferirjpg150821.jpg', NULL),
(20, 'transferirjpg152054.jpg', NULL);

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
(47, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$5IAPJiaQFhdGeP9kS2OLL./DIiGTF48opN0ShGxdD7SSb0idNHLrW'),
(48, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$HG/6QpByBjxc418u1jzkQeAtCsScJI7Z3/GmtY7FhxCJDF2CN3Eoe'),
(49, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$akEYMED.cle7/6/cYtrU8uarS0M3ogDU4PK0hDL8MAj6jHWukhGWK'),
(50, 'JOSE RUBENS FERREIRA', '121004', 'rubensferreiraja01@gmail.com', 1, 73, 3, '$2y$10$IfixP4Yh5RmU/BGZ9rYN2.nOJ8j8kks.YgRlDO3nLxYV7kc7rvnIi'),
(51, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 72, 3, '$2y$10$szAgQmlnuWMHvKUbdrmxP.4mnklZJWqoh4m9CO0u3PIPtPOywA3s6'),
(52, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$uuyLSoVKVsmYF8WjMpjs2eFUZSOKhCDpTME.QOFvdoUPMjSr7WbAy'),
(53, 'JOSE RUBENS FERREIRA', '121004', 'rubensferreiraja01@gmail.com', 1, 73, 3, '$2y$10$e74M.3BgKb9H4yc3ray/dun8jgbNtCxB5NOrvVNK3DI5ct1l7vKzW'),
(54, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$ikQbzGl0xQZl3qqsOvmmp.0TKUye.qIS3nkL6vLy.a99qG/3xAhZ6'),
(55, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$S0Vf/jFCm1uwk2RfHtAz.OQIyqWSyaSQVRWT3wGo.Q4vDN1JXzDx.'),
(56, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$R4ogex022RRodF7g5L0kh.syIu.1BjIDjaOLtYC71w2aWCxZs7xHS'),
(57, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$iUgR06dZQg/XwtEiBlsjq.uFqeSi.U0Qbaa0IuHpOmEgmAA3fnlty'),
(58, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$F2YcLsUfx0MYGcfU8rBQy.wezIXI/5zCyGGXvX2KUKhwLaZNUJGeG'),
(59, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com', 1, 73, 3, '$2y$10$.CemttEx9MgcetBcQR1Zruq0RgnqtDMPSZndfbPeMEfR.eKDm958S'),
(60, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$E/H/3A5Q.Wzyf0k3MZrIreQU00.qDH25CJQNgNphRAZ8BhUj3o6iu'),
(61, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com', 1, 73, 3, '$2y$10$3AhdnjTMgdBWmedb0/dMxe2v0KsmNrHYgqxr9K77UHU0RiA8XaTYC'),
(62, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$uBetjaEYwC/gEIFPBXyPt.ghx88gM61SJ8gAbLJHFuBG3QdVB/lOS'),
(63, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 72, 3, '$2y$10$3ZvACLdmk2qS0fcLT.gOIun6fV.auVsgBL3SlFI4XxD8QEi.kB3xO'),
(64, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 72, 3, '$2y$10$WfQ/oX0Jm0sglWtWAfxg6ew78S7sAQUmy9sCHyCGETKqr5YHFxJmW'),
(65, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 74, 3, '$2y$10$i5tu9WgRkWSqUJ5GfhGgnufEizzl9b1E0imajCMO67QQ2/TfBbNZa'),
(66, 'JOSE RUBENS FERREIRA', '121004', 'jose.rubens@benficabbtt.com.br', 1, 73, 3, '$2y$10$yzjn7RKD5QcTxEE9fTlRzu9vffiwkgGovbzr3kEKTbwIcRdmmU07W');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunicacao`
--

CREATE TABLE `comunicacao` (
  `ID_COMUNICACAO` int(11) NOT NULL,
  `TITULO_COM` varchar(45) DEFAULT NULL,
  `MENSAGEM_COM` varchar(200) DEFAULT NULL,
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
(254, 'Vagas', '1.usahdisahdiasd', '16:42:06', '2022-07-20', '08:41:00', '2022-07-25', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 1, '$2y$10$qy/wvI4Ple6Lh.dqnQu1nOYvD9vuP0ArLLIVpZOiwRP0UKje4PL0a'),
(255, 'VAGAS DE EMPREGO', '1.dsauhdgiasdasd', '16:44:30', '2022-07-20', '08:35:00', '2022-07-25', 8, 1, 1, NULL, NULL, NULL, 1, 2, 72, 2, '$2y$10$2i/PXrLsr/l8pZksRvdY/.xRhvfSc3O4iWvHPAaX3H6sbgMHjUAj2'),
(256, 'VAGAS DE EMPREGO', NULL, '06:55:30', '2022-07-21', '08:54:00', '2022-07-21', 8, 1, 1, NULL, NULL, NULL, 1, 2, 73, 3, '$2y$10$Gr97nTdKppgooCm1Nwd87uwkZ1hs4W1TnGKbGhv.W2HvHLZIoyDj.'),
(257, 'Teste 2', 'asdsadsdasdsada', '11:44:33', '2022-07-21', '11:46:00', '2022-07-21', 7, 2, 1, NULL, NULL, NULL, 1, 2, NULL, 4, '$2y$10$DmkNzrriV1xEhGaHJILbC.ppkFtGp/p1k.T7xtdZBhkW1x8KYnism'),
(258, 'Teste', 'GSBDIASGHDUHi', '13:48:38', '2022-07-22', '13:50:00', '2022-07-22', 7, 3, 1, NULL, NULL, 9, 1, 2, NULL, 5, '$2y$10$G0RVZAunzCTNKOcjsPSpl.k9aXPJJBj4BrkNkgLqPmQhJECXLd.Cy'),
(259, 'Teste2', 'cxzcxczxcxzccxc', '13:50:13', '2022-07-22', '13:51:00', '2022-07-22', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 6, '$2y$10$VRL6rtBYkgjRF06QWI/UqOARC1KNsf.uwITBeZfj8KzKvpOMMp93C'),
(260, 'Teste', 'HJAJASASAs', '08:43:58', '2022-07-25', '08:46:00', '2022-07-25', 7, 3, 1, NULL, NULL, NULL, 1, 2, NULL, 7, '$2y$10$Lr1aC1eETCYJ8ybzQzxT3OhYZyJVKD72x10WQdTCvxI1OyaFqjV.i'),
(261, 'Vagas', 'YGAihsuidbasd', '08:46:41', '2022-07-25', '08:48:00', '2022-07-25', 8, 1, 1, NULL, NULL, 12, 1, 2, NULL, 8, '$2y$10$KLH2BXcl8grsG5sL0gpB2uTWVsEsHKViDSTaOUOTvCP0jesgXF/4W'),
(262, 'Teste', 'Aiosjisduiasd', '08:47:32', '2022-07-25', '08:50:00', '2022-07-25', 7, 3, 1, NULL, NULL, NULL, 1, 2, NULL, 9, '$2y$10$BSnPiOiUecLls8O9rR979eulRLT55vj4duXf7ABOSL.tgga4/xgsu'),
(263, 'VAGAS DE EMPREGO', NULL, '11:38:59', '2022-07-25', '00:38:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, 74, 10, '$2y$10$zBugk3o4yfwbO85nk/IWWeFJtPKo5c0zZnfqAELHtGglFT0MTuHte'),
(264, 'VAGAS DE EMPREGO', NULL, '11:46:44', '2022-07-25', '11:46:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, 75, 11, '$2y$10$8LTo.fAKmZ7Vc5fzVP1YEu05Wk25L5IhbrveWdG55sz.COtN7bMwy'),
(265, 'Teste', 'Hsdfcasd', '12:04:42', '2022-07-25', '12:07:00', '2022-07-25', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 12, '$2y$10$V5XZQLHs4yVH.a8JFisDMuxopFF/w4ebOW7HEMdryK9k/3Y9yYxPW'),
(266, 'Manutenção Globus', '1.HAhshias', '11:06:17', '2022-07-26', '11:07:00', '2022-07-26', 7, 3, 1, NULL, NULL, NULL, 1, 2, NULL, 13, '$2y$10$3fQwTvDN7T3JyTIdNuYwqOTqmNzOjRDS/OdmF298jW/fV0Xx4NXyW'),
(267, 'Vagas cti', 'DBA - ORACLE', '11:07:18', '2022-07-26', '12:09:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 14, '$2y$10$3mimBs.3Ns8JLYi8xuiBl.obwaJK358BZyebYTiPcfzvGz3koBHj.'),
(268, 'Festas', 'Festas dias das Crianças', '11:10:53', '2022-07-26', '12:15:00', '2022-07-26', 7, 2, 1, NULL, NULL, 13, 1, 2, NULL, 15, '$2y$10$zHFrXS2j9mLFaweNYLXgUuG0S5nWT724mzxk0My1hmyMgZxb6S3Z.'),
(269, 'VAGAS DE EMPREGO', NULL, '11:52:39', '2022-07-26', '11:58:00', '2022-07-27', 8, 1, 1, NULL, NULL, NULL, 1, 2, 76, 16, '$2y$10$eyOreClg6IbNRny14i1vZ.oH3A7oKlJSACmPpmIwDxrBY/6.jm0gW'),
(270, 'Globus', 'manutenção ', '12:03:33', '2022-07-26', '12:06:00', '2022-07-26', 8, 1, 1, NULL, NULL, 16, 1, 2, NULL, 17, '$2y$10$rOOPX/YwHPQxhmA8WjVkiu.8jAiTrs/3jNm3aVtki3wckSQzZnvSG'),
(271, 'Vagas', 'aassdasdsadasdasda', '13:22:20', '2022-07-26', '13:22:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 18, '$2y$10$ci4UgIADrjrZ1hrm2bJ7dOaA8CiSEih0vogxv3n0.UP/IaA8gdoTy'),
(272, 'Vagas', 'asdadsdad', '13:23:15', '2022-07-26', '13:29:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 19, '$2y$10$gKFyp53GSDQBpJfuA5mvw.2Vd/koguR7c3fwdDKkBYscASChH3emu'),
(273, 'VAGAS', 'odkandsadasd', '13:26:13', '2022-07-26', '15:25:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 20, '$2y$10$LMA1tC0ncetpdWn/BCbagutQsfZgcquNWs1OLwM7PB0Tq883EC0DG'),
(274, 'VAGAS', 'Paddasdasdsad', '13:27:37', '2022-07-26', '13:33:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 21, '$2y$10$5HHNmSUU3M1rwgxCYGe8Ieu3zab0aXqDk1CxEFRzKDyWXNLxIc9s6'),
(275, 'Portaria', 'Gakjhaudad', '13:29:18', '2022-07-26', '13:34:00', '2022-07-26', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 22, '$2y$10$0YWP8Cu8BvTm1VBftCGcB.MrFE96nC0FXaJJO0YbN3rPxA60pFZcy'),
(276, 'Portaria', 'Recrutamento interno para porteiro', '13:32:22', '2022-07-26', '13:31:00', '2022-07-27', 8, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 23, '$2y$10$JRSOQzrwzvGVbeZqfo9oYO4IldoZKn5QRT.YVILbDuOxBLuhOtJS6'),
(277, 'Festa Motoristas e Cobradores', 'Evento comemorativo na garagem de Jandira para motoristas e Cobradores no dia 30/07 as 08:00', '14:07:00', '2022-07-26', '14:06:00', '2022-07-27', 7, 3, 1, NULL, NULL, NULL, 1, 2, NULL, 24, '$2y$10$Tc4cCfXnfFhUSigRmRXXVe16ruK7pKMbeBbqA/4LISObajPewXCSi'),
(278, 'Globus ERP', 'O Globus entrará em manutenção das 13:00 as 20:00 no sábado 30/07', '14:09:46', '2022-07-26', '14:08:00', '2022-07-26', 7, 3, 1, NULL, NULL, NULL, 1, 2, NULL, 25, '$2y$10$v4oTu8e0IBeGwcauEGLP1eneMFfoWLeaXPv58xflhhiQ6qCwXWate'),
(279, 'VACINAÇÃO COVID', 'Haverá vacinação na garagem de Barueri  para todos os colaboradores do dia 01/08, levar apenas RG.', '14:12:46', '2022-07-26', '14:10:00', '2022-08-02', 7, 2, 1, NULL, NULL, NULL, 1, 1, NULL, 26, '$2y$10$LSflvmLxmv8Vctlx.xaRNOB1Eny0sHi2A2GHRdjmj5a0XUc8hFr/a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhe_solicitacao`
--

CREATE TABLE `detalhe_solicitacao` (
  `ID_DETALHE_SOLICITACAO` int(11) NOT NULL,
  `DETALHE` varchar(200) DEFAULT NULL,
  `PRIVATE_KEY_DETALHE_SOLICITACAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `detalhe_solicitacao`
--

INSERT INTO `detalhe_solicitacao` (`ID_DETALHE_SOLICITACAO`, `DETALHE`, `PRIVATE_KEY_DETALHE_SOLICITACAO`) VALUES
(5, 'fghfghfgh', '$2y$10$DkIEhP/uQRgqvSeVeq.59uGCHL/2TkzNEGqBs2'),
(6, 'fghfghfgh', '$2y$10$Cfjrjv9seXOgD7hnBivUwuoy7xb9HTpYdhDJrO'),
(7, 'fghfghfgh', '$2y$10$BXQN4M9ujzlvliD0XsHcV.IIlop2YnnrqyzXTh'),
(8, 'rsdasdasdasd', '$2y$10$cT.CD1pDG5Sh8NYm6zTYFu.Oo7U9AlsdEEGvq2'),
(9, 'esdadasdsdad', '$2y$10$MRV.FSWwlWWvmIMgFlpgAeKSEb/hI3BLc2OKwe'),
(10, 'ljklkljkljkl', '$2y$10$XF2vk5AvRzIk1jpdDPS2UO5QR1ZwpgrHyu/SQi'),
(11, 'dadsdasdsad', '$2y$10$XZfvXmN7Ks2TbycH.xrOPOh0o2XAzN1syoE6W.'),
(12, 'Teste', '$2y$10$HkMZryGI2DXu91.g51waYugU/tqSeOmgNH/Te0'),
(13, 'Criar arte para email', '$2y$10$YFTF6/aYts2XZHrexk0fl.ZhNqvbptZIV07SP5'),
(14, 'Criar arte para email.', '$2y$10$0xpnGRtI8XKyf6JaYeENPu6RM9exD1xs8r6cv7'),
(15, 'Criar arte para email', '$2y$10$5PzvYEhvX5IxxQUuKfX3LOqsuNaU6rPiQ3lLV/'),
(16, 'Criar arte para email institucional', '$2y$10$u8itiBdRg0TymlDh98i4gO/JDoCEJdRTvjcxVh'),
(17, 'Criar arte', '$2y$10$3ht0g7pphSZEo46ajiKoguAq7LbaPGO.OBw583'),
(18, 'criar arte', '$2y$10$tc9oyWaXgfn5GmhTuX5XCOU1ugYIqL8zLHQpQx'),
(19, 'criar arte', '$2y$10$uOjmAUmOOs6ta7F5XHfZUO3K3y.lml3SHzgfft'),
(20, 'criar arte', '$2y$10$HXayref9s8CtTJIzwNHZUuXyJVpGKx6iJ1MWWl'),
(21, 'criar arte', '$2y$10$Wv67ymisFxp.UeatJ7mHluel0114DEU49.Zs/E'),
(22, 'cadsdsa', '$2y$10$sxf01vZP58rthMqJR6xd/OQlJdJbEkyXC2UAN5'),
(23, 'Criar arte para email', '$2y$10$qJc80F3myC6oMAtlhObsyeZo7ukFORwJh5jUX.'),
(24, 'criar arte', '$2y$10$1EO.x.0w3ChVjGXUVTzAhe3QgXsBRygJSeA2iP'),
(25, 'Criar arte', '$2y$10$Gdb7No.aranwwQURvJ3zd.0BQiGXZ3jNfCktW7'),
(26, 'Criar email', '$2y$10$E8JdOck00enk2x8MVGGA6..HMYzDUSWXrfDQdW'),
(27, 'criar7', '$2y$10$sq2PRUrc9xhW/nfMDdL0weHMtVL1nwrUleb4QE'),
(28, 'Criar anter para email', '$2y$10$sgJRKKtrrmQ6ay0pyNWneOMnakq.Agi1WnMl7y'),
(29, 'criar arte para email', '$2y$10$7.46alC7h9h491I4i2WR2OkK8VcOHzwKpMcBFf'),
(30, 'Criar arte dia do profissional de TI.', '$2y$10$AFYNKMxa6zURnR5KW1OVDeHUmTOtS6x9kub8h6'),
(31, 'dayhdbioppa', '$2y$10$RVymxZYEXVa97MBJi8dRFeWa8eoCbLmSBf3SBI'),
(32, 'dadsadsadas', '$2y$10$sRR/kXe2HdM2oxlhxsN7MuN2MNv3udTC6RirKI'),
(33, 'sadsadsdasdadasda', '$2y$10$5o0wKRofijFbSVYdWlfCku8/Mli77BIS23V4yb'),
(34, 'asbsduhsdasdsdad', '$2y$10$G6W48M58rV1bhc/gQxgcC.Qfzyu5X6/a8Otq0B'),
(35, 'dadsdadasda', '$2y$10$J.y6jkxCZXBmRLjbol4IjOluD89tB7x.FpjHJp'),
(36, 'Teste1', '$2y$10$8Z3OwA/y4Ih.2EX45aHrqOqzN32JlVSwVgvaLT'),
(37, 'Teste2', '$2y$10$jcmO.WeN4LOFBlGMyWA7Z.LOm2MEd4sOGi4IUw');

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
(330, 'adalberto.pereira@benficabbtt.com.br', '$2y$10$0qtEQiRTqBtNc8GE4QDfUuf0cykrMOP6JdJldHtoKb/ilawLvCGsO'),
(331, 'admin@ralip.com.br', '$2y$10$nxE7uixtYz0OZt7uYuDxS./6Ij9prUbOegyB89ZxBffuJmr6.02zS'),
(332, 'administracaosorocaba@benficabbtt.com.br', '$2y$10$9WzcX/hsFc9KS404R/OBAumu8ZHMJwGh2oJiq6NUV3l2io.f0HJTK'),
(333, 'adriano@benficabbtt.com.br', '$2y$10$W6WK215k3nSp9XgftwSL2uzJsUscr2GQjyg.a0bUaBteQVRRmTzym'),
(334, 'adriano.bitencourt@benficabbtt.com.br', '$2y$10$xuw3BdrPqjBAqfVPUOoUiep9/Bk/PoyJkQCBfoQ5EgLixTs5Clmke'),
(335, 'alberto.angelis@benficabbtt.com.br', '$2y$10$fxVj4zIZ8KIqHSVlNBmfDeV6U8va/tz.I/sdtRNA1dsoDhTE5zwSC'),
(336, 'alexandre@benficabbtt.com.br', '$2y$10$HKUgMoeOG6wwv2Fz2VsHse2AMwqkVOACaCYrWgckfwhxqI5AC.GOG'),
(337, 'alexandre.neto@benficabbtt.com.br', '$2y$10$6w2PHbKL5i.9tX7GfO64E.ycHR.F4kkdRnyu82ejuS6N3Wkaf08ai'),
(338, 'alexandre.rodolfo@benficabbtt.com.br', '$2y$10$884iq.ZBuKC9O2wQBb5AseMwMKdmu8dlQgKCDw5VXdDFMdWQpCydC'),
(339, 'aline@benficabbtt.com.br', '$2y$10$gCXSLWTjY8L8n6O4kIzU/em66yLexQE07EAexE5xTPGa927ekZzty'),
(340, 'aline.souza@benficabbtt.com.br', '$2y$10$XiSumhbogtyDwabdIA8Zsu6Ifhm/fqlhEJV2udxK0OjVwcQWb1Odq'),
(341, 'almox.jandira@benficabbtt.com.br', '$2y$10$7DB8E9bXdcxoDmlR0bhIRuzRgqJW10kIuoxI1hXgpK6Ux3OD4Jcj2'),
(342, 'almoxarifado.barueri@benficabbtt.com.br', '$2y$10$pa9SBH4ztTXhyLVE7McZ2.V5lHdzDCCes7C3ZDiTnAh8c5GzxQyc6'),
(343, 'almoxarifado.itapevi@benficabbtt.com.br', '$2y$10$JNioYeLSl9d1uiCwrRhZQe5k/dEvH8O8gP2Gsuex9el6qAz6qvLKS'),
(344, 'almoxarifadoralipbarueri@ralip.com.br', '$2y$10$2sxPKY8Ult8gMjMzfQgzoukNBYBTnwKw8kzbjJXz0lDYXiWC.Jr5i'),
(345, 'alvarovieira@benficabbtt.com.br', '$2y$10$q1Gwj7F2JxpO4ObqKRl4SOKavZaJzee9QCnlRhK8Y9SE1kFh3Cuo6'),
(346, 'amadeu@benficabbtt.com.br', '$2y$10$Q5qbxZFt.WSyzKwTfBmaPO14vr/lX18pwWwgv4RiFIUKJ/k6qiVMS'),
(347, 'andersonrodrigues@benficabbtt.com.br', '$2y$10$cUUWWXsoq/NOqokrBzK0OONMWFF5nXPHhA7OjXSx4QjD3uBCApHkm'),
(348, 'andreia@benfacil.com                         ', '$2y$10$cChY1kf.B8DTaP.6m2fyHuePy1tSbbrs3UnyzTM.sBJsRQj3iSUyC'),
(349, 'andressa@benficabbtt.com.br', '$2y$10$/QnRwc7sRrTgCHg3wi7z0OXjJ.2c9RkdrubMR6OuiEtqWgzd5Xm4m'),
(350, 'anibal@benficabbtt.com.br', '$2y$10$2ocW8rmBOxeJ2PHLpZ808eSnvfM9BetT4MPO6vhCBB6PJ.M3/4Fpi'),
(351, 'antonioreis@benficabbtt.com.br', '$2y$10$7D.raZhL91uuJh09qXJgtetzVaU6qqPDe7p7jUsaf.GUG2nrqAfui'),
(352, 'aprendizcompras@benficabbtt.com.br', '$2y$10$53B9lKfgtqpDO1pcldp/3eW./cFs88ZyHcf3tAAofZzKgvmtBLQ/u'),
(353, 'arquivojandira@benficabbtt.com.br', '$2y$10$NA61R2xrULa3gPc1jsDlcOUVn8e6dRwNPlcmyJu8FCGoh2ugVwgfm'),
(354, 'atendimentodp@benficabbtt.com.br', '$2y$10$uf4PPLeFH8lhOmd/gjyoaujHgV.AlQ65B5fLYmySOYRQKHzsxBq56'),
(355, 'atendimentoitapevi@benfacil.com              ', '$2y$10$QUpfeDauyKmb4XzpfMntMeMKVZSyPSthVQOxeqr5PasL/HGfAbzcG'),
(356, 'aurilia@ralip.com.br', '$2y$10$JbNQ.k1ZpzNqt7Ksa5S.E.ktWlyZjfWmFZaChZ1B5K2ONIB75xiDC'),
(357, 'barueri@benfacil.com                         ', '$2y$10$uZKashhT6CINAAhjbT7AT.5cvwuQJZFOl.KFbPHereSlH0qefoR0K'),
(358, 'barueribop@benficabbtt.com.br', '$2y$10$5wIQahCwXf5EvFywNV5nNOTFzNaSPglPYe0Uxm7O.2VyCbLK7hJ4q'),
(359, 'bassan@benficabbtt.com.br', '$2y$10$uBVSJCVBgzJcnHuaVY2E7OU6dQt2r9/hnscgVnVNLHsyXz0Z/tZt.'),
(360, 'bbdiretoria@benficabbtt.com.br', '$2y$10$9Vd6Rg9C/CtwDrQUR2taxuPSdfR3s8MOKfEcdMcUcFiO6l3NMaXQy'),
(361, 'beatriz@benficabbtt.com.br', '$2y$10$aPPCys5zYRivvxg2spVITeaAtXMOtVAbAuXiF.7Q.JgG2LipaJvqm'),
(362, 'beatriz.freitas@benficabbtt.com.br', '$2y$10$473rSrAKgeuFY2xs9ez7..0FtGT5Z56SUDusdT6T.dqA7ZXmoI/eq'),
(363, 'benedito.hermes@benficabbtt.com.br', '$2y$10$xqrYn9YDqi7xf3kefnQNJu04se4MEuUKg9.IEg/KQzD//s.msmc2q'),
(364, 'benfacil@benfacil.com                        ', '$2y$10$LaA0eaXLBbvDD71WXTElgO/DMMzsGgYlG6wiZrsVWojLKiLO/tvjS'),
(365, 'benfacil.itapevi@benfacil.com                ', '$2y$10$sC.VyKmOgnUzIPARP8qfBujoYv/bRLBH/bvMTwihw0609qfODmT9S'),
(366, 'benfacilapp@benfacil.com                     ', '$2y$10$Gcv8okbThlv5fw.DpqjDfehnYgmYYqIVyTf9J7i1BwzpWuSYC876y'),
(367, 'biancaalves@benficabbtt.com.br', '$2y$10$vQI445IFn4iClxt6Ylstq.ba1dikZkn9NXF1ertXBqvTrpu6vZEoi'),
(368, 'bopjandira@benficabbtt.com.br', '$2y$10$XoUNDVOFwIJMbwm4Y53oiuJONIsjMObpa3UzIcFI.tYznWpOK335u'),
(369, 'bruna@benficabbtt.com.br', '$2y$10$gzMEEfigriDmTmQj9lxLOe2rQseHdyPakWufHO.T0pf6lU7x8uWpG'),
(370, 'bruna.torquato@benficabbtt.com.br', '$2y$10$UxcyAY2af/BKrKAprobKNuDLslENCuIvp2nsfQCdtAseAuyTyhgC2'),
(371, 'caioluiz@benficabbtt.com.br', '$2y$10$8FOZCfBEVPqgWXCmnqUGHOf9Ll9jExOFHb.N1hIu7meblHXyNeqF6'),
(372, 'camila.ribeiro@benficabbtt.com.br', '$2y$10$k8qF8VXqR8Uv6xzAx8F2DuV/Xf33HgJfG95J1uT7sWlr1qnzC/cQ2'),
(373, 'carlos@benficabbtt.com.br', '$2y$10$XyepjOLz3ZWO2LRuKWh5UuFq58fgelrrBFEp635KMuqZkRqsWVXxW'),
(374, 'carlos.carreira@benficabbtt.com.br', '$2y$10$we05aYLnyOGqhaz8NIG4ze.VE1H4Ir4WkoALt4KVbcnsaIeKNgu52'),
(375, 'carlos.eduardo@benficabbtt.com.br', '$2y$10$7EqCArpjS.r/pDHQMVtgYu5X4OUBQEGzLKoPKmFAwuC3Y0wlALZ0m'),
(376, 'carlosroberto@benficabbtt.com.br', '$2y$10$QHnLmIxg9RlbE0YHYXNnTOhyQRmxMbcp3P5TUkIATifO/uOcxTWxa'),
(377, 'cassianocruz@benficabbtt.com.br', '$2y$10$FcmcfhS4PCjvqsnqlgYvk.WRvWlED8/y2mAymQHOPUHB4CvCQxWUS'),
(378, 'cco2@benficabbtt.com.br', '$2y$10$5PGX5I2wOFHknVChBB9HquiXcftMIcguMyzc5IL13uEA0inkK1lW.'),
(379, 'ccojandira@benficabbtt.com.br', '$2y$10$FXgUsUjU9wm5DIZ/b3Jlv.hkbfmdThbK402EyTsk3gLNMJltYQDn6'),
(380, 'cesar.xavier@benficabbtt.com.br', '$2y$10$Y2W7iqSvYN54je26kZj2s.kKHcOXAqIg8OMW.ZJwyVh7tNBsRiMDS'),
(381, 'cesarsanmiguel@benficabbtt.com.br', '$2y$10$B6z/UyHbxXIh/3tjxNHffuMdkmEiLlRlh8KZJrIPeWjTmplweMXaG'),
(382, 'cgo@benficabbtt.com.br', '$2y$10$kA5uAlPQiO0BfjweZedSlu6enIxG2xYuDv6EuBhsAEnpZEXiaNMBO'),
(383, 'cgobi@benficabbtt.com.br', '$2y$10$Z/9znnxgJArMyLllaI5vyOR6p5W2uBURntlK5NouwqiyoA5DykW8i'),
(384, 'charles@benficabbtt.com.br', '$2y$10$tCd6Vme3hvENzKKO7QhSP.m6jVREGo4E1Y4WPS.Tu/3njndHGd5sO'),
(385, 'clara@benfacil.com                           ', '$2y$10$YrzwpekjgyhvzU1WMmLLNO.tvPewHEi0zjnjv7qM6e852AClGYamq'),
(386, 'clarilde@benficabbtt.com.br', '$2y$10$AceAivXWdVXqZBIYaPdojueEqHQyPevLbLP4eLt9..WiYsNqr06JW'),
(387, 'claudia.ambrogini@benficabbtt.com.br', '$2y$10$D2i6TODqYMvPsOLb4Cb4oODEg72DCoPQTC3Fz4PvACZKYlQ3ShzG6'),
(388, 'claudinei@benficabbtt.com.br', '$2y$10$8JvhXSU0Usb0IKJ2ZUPUIeH5DNUIJzlh2Lll3dLVl46lJvm89Wghm'),
(389, 'claudio@benficabbtt.com.br', '$2y$10$6kYIBqcaQri0DrTxGBooU.dqMrgFAnMzxMmWR45d8oM0tHub.EMFS'),
(390, 'claudio.ricardo@benficabbtt.com.br', '$2y$10$rWU28KV2jCC1SFQ7qx5V6.JFz1nWwQ7JObJskI9SySZJTfSvVjY3m'),
(391, 'claudionor@benficabbtt.com.br', '$2y$10$26NKGImVrV.OYCPWc33VW.Hxz8v5V/xHDDvp.3cIIdgKn8WcKgc.e'),
(392, 'componentebarueri@benficabbtt.com.br', '$2y$10$h0U0jJoXlznm/DFL3uH01.j.KP/tAxRklTDvpK3PyzNV3biKCiH56'),
(393, 'componentesjan@benficabbtt.com.br', '$2y$10$mRNlklwY8i.kM0vQpPONmOXlBEekGmSyZeM5wrvRHrgeqGO8mWG8.'),
(394, 'compras.bb@benficabbtt.com.br', '$2y$10$FmMKbZwZcHlMQfpWOkPdQuGlMHOpJgLxWQlgfu7Y3uOzhu765zfHW'),
(395, 'comprasralip@ralip.com.br', '$2y$10$9KY4nx7DTPxznGrRpKbnD.9uEX9tqwaCkv2iYArPd0GA6cscpkVze'),
(396, 'comprovante.vacina@benficabbtt.com.br', '$2y$10$obh1m1JB/3XILq3mNjNcJuTcsRv8GOEfoXHhf9ySew063kZTYwJ8q'),
(397, 'contabilnfe@benficabbtt.com.br', '$2y$10$YBPu0FhhzqdQOh7rt.DW7eWM9fGNyh3MC19jEookhZ8ZDSKN6Vdru'),
(398, 'contabilralip@ralip.com.br', '$2y$10$zB20SoVsBr1r5oQ9cFS5bu.79vTsustCen/ESuTe5k1MECXdVK01i'),
(399, 'controladoriaralip@ralip.com.br', '$2y$10$m.w3nUxXUMv71YDy6bdjjOwnRP/H5FbnDSC5hzQQQn62ZoHBp/ej.'),
(400, 'controle@ralip.com.br', '$2y$10$52kfZOtpn3O8DeUU9FFs1.4aQ9JGh0Iay9qSbyxtWX3sPw5LUiygW'),
(401, 'controlebar@benficabbtt.com.br', '$2y$10$kl9y6sAfDVWZtfS4TrAqk.8JcO3PALAaa9XKh4b3iRwNdOYzecJQ6'),
(402, 'controleita@benficabbtt.com.br', '$2y$10$IwH87Q4PHTzVzYScDoubQursyD88DpfooSUcr6RVn9uZe8ZPaO1em'),
(403, 'controlejan@benficabbtt.com.br', '$2y$10$h/PokCII8Ei95/PCsduniO/SyGHNyflmYTPDI5XUwFOl87nGn7vx.'),
(404, 'controlesor@benficabbtt.com.br', '$2y$10$LmPQOaspIJz8f1caDm/iPeJSyfIcpVBC3lpCS8AZuSLdYxKgRKy2u'),
(405, 'cosme@benficabbtt.com.br', '$2y$10$i5A.BjwRqPzj2aR3yifiR.XW5uZmXK5b1e0.2W0lXpS8xOTd73ffq'),
(406, 'cristiane.barros@benficabbtt.com.br', '$2y$10$cVWhWl0XIXY.pcTW8k6cE.pqdUYnWzH1QucREDrViqDM3JuhwOECS'),
(407, 'cristiano@benficabbtt.com.br', '$2y$10$u88OtYKyFxpG2qMwX5PPEe7T5Ns0Y500f07hWzTS8p7SCEx0PpST2'),
(408, 'curriculo@benficabbtt.com.br', '$2y$10$W2s9Y8ovelo8/jIFJUp9.eiclyOyHqojpORpXkSKqSzcaiZJ.jTCe'),
(409, 'daniella@benficabbtt.com.br', '$2y$10$GfUr46ahMn8fOtjfx3Qi1.W/vGUSZNTgsO7tteMdvL8assFZ47DhS'),
(410, 'danielle.monique@benficabbtt.com.br', '$2y$10$4Y7fiIq.gV0vAYmwysOOhO/9U.gZ5FzxBQG3dS50cs5A4ccfGbz.G'),
(411, 'danielly@benficabbtt.com.br', '$2y$10$c1oMtbf.k7u4h7TSbDLSjuVfzAS3onU7eA4RnPU0V1YS0ueEjkUpa'),
(412, 'danielnunes@benficabbtt.com.br', '$2y$10$AO.Py0NcusuU3kDoq5N69..3estayahFaBDbfg7jGdi.utdb/yAym'),
(413, 'david@benficabbtt.com.br', '$2y$10$/F7.C38Zdq8Kn33.J3kfm.4f/0HR2Ks9qCU/aNF2t96IVEMteyIwS'),
(414, 'davidcarvalho@benficabbtt.com.br', '$2y$10$AYVIjFilULrGFW8Lsxx6CejsgzMA/wIr2mv6smvgjaqcIOZSZFXrq'),
(415, 'denise@benficabbtt.com.br', '$2y$10$buh16Emb4.cOGXQD8aLcreEa6dStynkXfoSNlgDU19675kOO91.n.'),
(416, 'desenvolvimento@benficabbtt.com.br', '$2y$10$DXq50LNQLKKXnIvavvtol.kFYWTwUaUTLACzT30sKoxXQYUbUENmm'),
(417, 'developer@benficabbtt.com.br', '$2y$10$26Mz08ktVwyJB/SniqdbKOBPzdFjZ/T.Vp/rCQd.Kvovg67j7Jutm'),
(418, 'douglas@benficabbtt.com.br', '$2y$10$0PMR32ftCxq32Payg2xsjOhZdky48kHMqqeePe0QYB/S1OdZK6Akq'),
(419, 'dpralip@ralip.com.br', '$2y$10$leCDIll.L89RGRWngpIl6.N0I0koTWwCTxdO91BybbhS4SLV4w0I2'),
(420, 'dpsorocaba@benficabbtt.com.br', '$2y$10$oCCXlPtmoGoRBrUFTswuJeED.RdAgBhalE3m8kP3ZdmkWcZpyfWNm'),
(421, 'edileusa.celina@benficabbtt.com.br', '$2y$10$2KHmYOJRr5mmlBK2ykP01OO6.Xe5HMVJtaeXuO.2p3v8LvgYFc./C'),
(422, 'edison@benficabbtt.com.br', '$2y$10$oy4toJyh8YgEEAq4EwAyRepvCqNNDprIveuMacIISPnJ/Gy2erRgW'),
(423, 'edmilson@benficabbtt.com.br', '$2y$10$zoZqvSOkWSOI238429Giuu.F5.ke6AobeOPwkI/qdKxw2VN9JIBzi'),
(424, 'edson.gibi@benficabbtt.com.br', '$2y$10$PV52pBUN/gVg8INoJkyL0OjS.RqQBQ621yp4XNWJXxhxkZO1ljeoS'),
(425, 'edson.reis@benficabbtt.com.br', '$2y$10$2OlIYlb7ZsOlt/3mQ2oW0ufYAzIY41/pT4dQHyMQUNFPNyy/VcXbS'),
(426, 'elaine@benficabbtt.com.br', '$2y$10$OBQg8Tdd4QrsnNrM3pw0O.GGtPWXynmqv7zJ8Eke3grXIIPSOAKoy'),
(427, 'elizabeth@benficabbtt.com.br', '$2y$10$hYZx4yl3TOgAXTA3LObO3OtlMKIlZIZgVbWyIfKdUUn38PD3.bhzi'),
(428, 'emerson@benficabbtt.com.br', '$2y$10$g/bkjn8mzJiwoD0Zmvn9yeEr00bmJRZ11eeisKJ1RWpWHIeVVUY2i'),
(429, 'emersonsilva@benficabbtt.com.br', '$2y$10$.L8qDBKK3DrxLO4kpY15v.Lw6Kmdw13vgm5krQF638txsuhoJK9bK'),
(430, 'emily@benficabbtt.com.br', '$2y$10$.57WmrOAWaJ0VhZAz5GjcejG7pHxV2uxtmPnOSlUPKV.O5TPv2tSu'),
(431, 'eneas@ralip.com.br', '$2y$10$ENnt5eIz/d1FJ2XcFgXa.OfiZ7qg8oEKkYvn6L6IMci4v5HqiKEvC'),
(432, 'enfermagem@benficabbtt.com.br', '$2y$10$20j2AoMrY4lDRWN4fzIO0eQ3OUvvTS7cUSzgGGkhj40CCcwTOZ6TO'),
(433, 'erivaldo@benficabbtt.com.br', '$2y$10$MnMp1A4rufnnCuYwCrHlZeA5Ib6a6RkxpL7vwJQAJgPzOYIoTq7G.'),
(434, 'ernesto@benficabbtt.com.br', '$2y$10$/z.1W6Ldsm7Mw/l3dFO2suX04CSyaD/G9MHBmziCUZbU7hSmQeM7W'),
(435, 'escalaralip@ralip.com.br', '$2y$10$fNhrRz8zxCQZCB4pzCxsb.6s0ccOljlldweNTWs/hPmnj/ICNuFJK'),
(436, 'estatisticas.ralip@ralip.com.br', '$2y$10$KnS2DdXH8nIQ1adewnwbluSsw5/SAdxUNjkGYoqSzSrC1CW0BPXQy'),
(437, 'eventos@benficabbtt.com.br', '$2y$10$lbuky.NO5xLxOwnCd3y/0.rneaSt.SKFx14OAl5Bgbtfzhb4KtnBe'),
(438, 'faleconosco@benfacil.com                     ', '$2y$10$MrMe68RupMaC/wH5DvAa4O/juXevsNkeGETIK0gxt2/gCw.2qDBG2'),
(439, 'felipe.eduardo@benficabbtt.com.br', '$2y$10$fgN.PCxEWIyDIBs8K74vTekwXXMG26XNONoFulp/7kj15aIphkCHi'),
(440, 'fernando@benficabbtt.com.br', '$2y$10$IomDui/2jS401jTrqaEp4O3Pj9hgi.G2xQOFdfZVjBVo2d0S/qr3u'),
(441, 'fiscal@benficabbtt.com.br', '$2y$10$gMKZ9x9zMsmjhSkABQxMzebVExnIQQzW8J34UndXc9bNXWcOQKKX2'),
(442, 'fiscalizacaobb@benficabbtt.com.br', '$2y$10$n1qkOU0ITq2DsT1X6WAUnukhCz3jdfrbPaFt5yegoczoG1KXpbciG'),
(443, 'flavia.magalhaes@benficabbtt.com.br', '$2y$10$E1EQm286pghPa6K1yrIMqenZtgHn3OLqGRyNlPviiq6IX7xr2KxTu'),
(444, 'formulario@benficabbtt.com.br', '$2y$10$FUlsLRuyMynGC.3dcBiRNOBov7sk.azqRzxZ9TkRMl4DSXC9Fmgnu'),
(445, 'franciscouerliano@benficabbtt.com.br', '$2y$10$QvcrqttzfKxuxAZIT2wJmu1k7jEEm4S1Om0yBrI182lNHlAUl5jn2'),
(446, 'gabrieladp@benficabbtt.com.br', '$2y$10$zCpOfCS9RtIIhKmRP/0BO.I9zLj0z3RT0clwn1GAMs4UPWvb8fpqq'),
(447, 'ganhatempo@benficabbtt.com.br', '$2y$10$rKst0DCJaRQXyPzTEyAmTeY6Av1jRN.u7HyHHjZ2awzsYM2zVmmFG'),
(448, 'garantia@benficabbtt.com.br', '$2y$10$a6/ieLW/Q0sB9X/RNN367.lM0t9sJ1BDK.fClEDwAQJkoPtnPt0/2'),
(449, 'ged@benficabbtt.com.br', '$2y$10$49UJKs7KM4V0isNu7xdSFOvUYBcFlvalFX.3XqUYZPJs1MoNIvDUu'),
(450, 'geraldo.lorenco@benficabbtt.com.br', '$2y$10$Eua5xOO0cyk6HUj1uvauMekNBQZuQ4n/i9W1XUyiDOawkWvflbFU.'),
(451, 'gestores@benficabbtt.com.br', '$2y$10$L38QlyIfBrHJMTcO7wnUueCDIGz7m1SobM2mfcJ0fgAhyFA/4KKGS'),
(452, 'gilaureliano@benficabbtt.com.br', '$2y$10$dvd7WboaE8/Nyrq7mDWIOO3GxN3U.4N1I3QhpuImMOCjFYXgykEye'),
(453, 'gilberto.ambrogini@benficabbtt.com.br', '$2y$10$qKMWxzmjo/AMBzMi8z2mX.7eYn3xajIK1rhwErSl1FXdZIEKCPz1y'),
(454, 'gisele.ferreira@benficabbtt.com.br', '$2y$10$5pZOKRCQ3qzSogKtTKUPIuyXGzTXVvGQhD2jG2LLqop0BC72Ph/n.'),
(455, 'gobbo@benficabbtt.com.br', '$2y$10$uS.ymJerqSaMQZybBmxgu.X4SWDM3qa4l3J96FJyKuLe1q6NXHraK'),
(456, 'gps.sorocaba@benficabbtt.com.br', '$2y$10$0wLhZ90t55MtMUFU5mV4Gu831NSQrgKJBI4zYbwGwwpUDcEFe8sjy'),
(457, 'guilherme@benficabbtt.com.br', '$2y$10$ZexkQmnD3OK85WYNv1G4oO97jgNa9khWMUgLMz8sVcAuB4TdSTIIm'),
(458, 'henrique@benficabbtt.com.br', '$2y$10$LbK/zXa7zqNYIdi9GiBzV.haBhDwgllVax3D725DGApBmyPTxSYUa'),
(459, 'ieda@benficabbtt.com.br', '$2y$10$gAn2tW3tCgvsrg3yVT9vCOyigdm24daEDECX1UCzG8Juq7rXIKXSC'),
(460, 'informativobenfica@benficabbtt.com.br', '$2y$10$j9l1sepfrG0jijpALolFCej6qOYhXLZKq5YDBn9AV2C3WdvyZ6Wje'),
(461, 'isabelle@benficabbtt.com.br', '$2y$10$ywifzWbkpvhpPjy4dlzkP.aM4lLRzBS.52cD7xzVLSdloaeA7NKK.'),
(462, 'isadoradp@benficabbtt.com.br', '$2y$10$W4mc.gRbyiReEiavZBBwYOetsYYRR9Fy94/Zc1kuH2wxFJ5bSJ3X.'),
(463, 'itapevi@benfacil.com                         ', '$2y$10$8B5lJ.Pr8C5pcXLo86d7JOph1bGgMSAWd04tr.HDFhm0PVkJfpRBe'),
(464, 'itapevibop@benficabbtt.com.br', '$2y$10$qAxx0p8xp3Oe3hQA8lzHp.1NixTWJADnQBkGB5c2vN25W2lTd3vEe'),
(465, 'ivani@benficabbtt.com.br', '$2y$10$KIan..q3L3z9AFTYzNQs0ucdEsHPra054uc4hspEVD1YYmv7L5xCK'),
(466, 'ivanildo@benficabbtt.com.br', '$2y$10$KJWb/WZcahF/lGz0YDyOQu5qzqMaymb98vNAtuE0makBALp10J.Ra'),
(467, 'ivone.alves@benficabbtt.com.br', '$2y$10$UFCYmiZw7NvNDKI7K8ez2eSFcDf1a1RdshQbwLzQTfwwSkqKTISwO'),
(468, 'ivonne.toledo@benficabbtt.com.br', '$2y$10$Im55UL4ASniIBwHbTAi6uuDpodBMW7zP.QfwNyZ0iAYS6JxCNTWtm'),
(469, 'jacyra@benficabbtt.com.br', '$2y$10$jPuVQQcAZ701bVjYylaK3uUoch/9AtfXogBRLHz/0nGcUrnabeyYu'),
(470, 'jaime@benficabbtt.com.br', '$2y$10$/5.VIB1ypdgfK9ULEhpmseRuzrsMtdL7qA90Q4KysauFiBwdzaU3a'),
(471, 'janaina.santos@benfacil.com                  ', '$2y$10$yr2Hy02BihjomzHlzLXpKewZW/A1iACTk6OOL4cIbyoVKGFd8UxAK'),
(472, 'jandira@benfacil.com                         ', '$2y$10$ZI6c7VYxD1TaTY2MEXctkuye64RUxrIkD.gn6B6YNjZDZbi74wv82'),
(473, 'jane.munhoz@benficabbtt.com.br', '$2y$10$WviEhlicear7HYEtsDJM2..c3TF.RfgsehTImUvTv/uHuuWtzlkki'),
(474, 'japao@benfacil.com                           ', '$2y$10$sHNvgszqZHeHGHgXRtoiteu5t7T1yCKJjai3XqUzHRL8RKIlLLwBW'),
(475, 'jaqueline@benficabbtt.com.br', '$2y$10$VHA/n1Eo0BxZo8Dyb/V98eF4U7P76YiyMe8uEklB9bmRzUm9VBAMO'),
(476, 'jessica@benficabbtt.com.br', '$2y$10$yKwuW/wznaZg0i5FZROQpOlQazg.mA4bX5OSYtbHdtm3XVBHhN25W'),
(477, 'jessica.martins@benficabbtt.com.br', '$2y$10$NEiyV0yDoIxQE/wUyMTf3uy6QsTvHWst6zEirKycWcpME.ggTtplC'),
(478, 'jhonatan.oliveira@benficabbtt.com.br', '$2y$10$PPC9n6SOs2mdN2x.wo/vJeCMCn38M8ixRcr07NWBRGOy3wlAWEApK'),
(479, 'joao.santana@benficabbtt.com.br', '$2y$10$7bRBTzVNmw5029DNEfLAQ.N4TLOJIeUo2zrh56te/FHOJ6cJfEWdy'),
(480, 'joao.victor@benficabbtt.com.br', '$2y$10$iG4vliw/0VxKIAieErGBVuLYf7LCY.y.FZW3O4ysBsopEtpAerUNq'),
(481, 'joaocarlos@benficabbtt.com.br', '$2y$10$jfpTYmTL/F7/MnX3OuaUF.NXMyBnwyJu7XaP6CsuXmtIgHkjYQk4m'),
(482, 'joicy.medeiros@benficabbtt.com.br', '$2y$10$TJopzXUKKhd4HokhNThS0e/Eu..n.w2C1WdTp6xuVVDNleP1Vn9JC'),
(483, 'jonathan@benficabbtt.com.br', '$2y$10$N0NNbRcXMrkzV9/VFa5Vlu9jGd0TUjEd/mljMpKsPu4fYt/tzE/eW'),
(484, 'jorgesantosbarbosa@benficabbtt.com.br', '$2y$10$XQF8dtgkkmGvWZB0VVQca.e6gV533Zi6TyFs8PJUN72xp9aefTYG2'),
(485, 'jose.rubens@benficabbtt.com.br', '$2y$10$cs/5ccPKqENZfDWHX8PWCuTzwtbb1CWPuUutu7XjNfIEIumAYVXGK'),
(486, 'joseaugusto@benficabbtt.com.br', '$2y$10$9/m2SUYRzlEQrg4BnULDP.QFre8XHR..l0OKZgtRwt4TPVbxOi4lC'),
(487, 'josecarlos.manzoli@benficabbtt.com.br', '$2y$10$UKt4zISNHQbTSi5tai0jEO5SLgWePV8on26oTgTlb4.iqXykwvF.S'),
(488, 'joyce@benficabbtt.com.br', '$2y$10$Cs0WBiTM8nooWVKgqPNoTudZ4eH7JbNU9Iw8u1v910vQ2ddtkCJny'),
(489, 'juliana.barbosa@benficabbtt.com.br', '$2y$10$RwvtF1B2S5BOnCcP0xuk/OpC5zTK7WJIhiSB4Ae7.SfUdbG2eQ4jm'),
(490, 'julianaoliveira@benficabbtt.com.br', '$2y$10$gGpExOe9TVE/8Sk5g7/Qy.XPtdYOgbV9M9GUdkBb/SjvfzPAf1uBm'),
(491, 'juliano@benficabbtt.com.br', '$2y$10$4WvIDuomMZfGX3z1QmujCewRTHjemcv510DDhWB0tFfJrk1oCTtCe'),
(492, 'karina@benficabbtt.com.br', '$2y$10$UMiDeZOn/VpEJ0ysn7hTxeMRvaBzGg/kFFDyUb4EvH/DMmUyw5T.C'),
(493, 'katia.matias@benficabbtt.com.br', '$2y$10$k2iU7U/GR2Bq8w7ssB.Y.O8/4HRlJ0HhCN3K7H3aSpnQMk0Oix5IW'),
(494, 'kelvinnunes@benficabbtt.com.br', '$2y$10$zhqErc1QskLyfhMJrJROWev0krZt1AxM3BVrtL0SxZBOJmTb06s3S'),
(495, 'kevelynrh@benficabbtt.com.br', '$2y$10$pgljYtPnxiEvrLXE6VjUTOBWOjsqeGsHvudlHFb.oZF17HNB3iz0O'),
(496, 'kimberly@benficabbtt.com.br', '$2y$10$sh9wGtm9SHkaXxTooqvZYOQmBPqEzSEWZDmpNVKsG10PXJW5haXi6'),
(497, 'leandro.brandao@benficabbtt.com.br', '$2y$10$dTX3wV.4hWwHHpHlXmrsb.rovxTdYgiOcX1HvU7Gp7/7eNQSvnlPi'),
(498, 'leonardo@benficabbtt.com.br', '$2y$10$x7NP4NnVLFDly.kmumIU4O1MCIDX2Gd14pAI8iKNOlfkGeQby.q2e'),
(499, 'leonel@benficabbtt.com.br', '$2y$10$0Z1u5ZNUvMmWlJ13O6o.y.nmmVxXMcphtC4bE4Nym08yHZQAhDb4a'),
(500, 'leonelg@benficabbtt.com.br', '$2y$10$hPRhfrtpgIQYhNoV6PmcqutgIJso.jwi0vUmIYVR7exkr1mqG6oiq'),
(501, 'leticia@benficabbtt.com.br', '$2y$10$35xt.h/pDrJqfSZNjN.AwOF/9vceLLF./ObUvUTGr/KFKYaNonJaS'),
(502, 'leticia.goncalves@benficabbtt.com.br', '$2y$10$BW5nAksTEpVHz4RaqyBwGuJZripCgLxeoztRngwTPznm5mJOdyV.i'),
(503, 'letrista@benficabbtt.com.br', '$2y$10$c3YI/5vQxbvVy2kJXUl5gOX1zrNd0h8mbGqqBZOnATTO2OGrWlbg2'),
(504, 'liderancaitapevi@benficabbtt.com.br', '$2y$10$ZpmnoH3Qa2sV4rqnZ817re/25YfQ3Q2SvSQ65FK6qKVOm0/n8pRzW'),
(505, 'links@benficabbtt.com.br', '$2y$10$wG5aMHGpcQdQHxKe.Q5R/OMXbEediqOpZMjOupiEXp5WwhV5i4u2W'),
(506, 'lucas@benficabbtt.com.br', '$2y$10$7QTdJ9Y.vNiUB4Ejpaapcehs9JL5B4uPz/T269leJ92uJkj/14H.W'),
(507, 'lucia.apolinario@benficabbtt.com.br', '$2y$10$oxx87d3WNk7bV.wK7HJ2DOPHTAr8XLbzlXCN.4Ash3eUV1Qw1y7ie'),
(508, 'luciarh@benficabbtt.com.br', '$2y$10$MsUwV2VqKjYz488GI4A1JunjnXeljyw0JZ1wm1dtsslTQqLUI5A66'),
(509, 'luis.andrade@benficabbtt.com.br', '$2y$10$y7oU6JepsOx1w0VF4T21qO5PwwRFORW7auw8IJWl/kquMqlR5OypS'),
(510, 'luiz@benficabbtt.com.br', '$2y$10$8jnJQcAnLggp2QPxyREkLO9gKCDg4h.qikywRQZC1oEb4szD/M5fS'),
(511, 'manoel.turismo@benficabbtt.com.br', '$2y$10$hBPVHjq7YHVFaWsrvc8dbOd7xBgPWo0ebs3jeOBDnxFVg1YHQ9WKm'),
(512, 'manutencao.ralip@ralip.com.br', '$2y$10$cgN2LsLMPIrVzY0Dy7g8c.4lsmlTimp.wHFqSuN/csbS.B/hyXVAm'),
(513, 'manutencao.sorocaba@benficabbtt.com.br', '$2y$10$et4alRggK7gb4or6//XoD.dxCIqmGsuiUYx5BC66Xg6ba9tfsgOXe'),
(514, 'manutencaobarueri@benficabbtt.com.br', '$2y$10$/QLPq66f.KEQ6u1c2KlnlupzvQhWbtmHCeemds0Xx37CoyXhIx02C'),
(515, 'manutencaoitapevi@benficabbtt.com.br', '$2y$10$ixHfzNRg/4d0sLu63z2GS.0oO2KR.9Ocu0XbDFO5LuwYp3BN2jI8y'),
(516, 'manutencaojandira@benficabbtt.com.br', '$2y$10$KH9Fno1crDrAW0embTrJnOTECcEX8JhMai.z2vy2BK6Tx74yeqwga'),
(517, 'manutencaoralip@ralip.com.br', '$2y$10$VyPFZ722uYOSaUIJSXM4PuAejYBOIU96bpbH7InaqxS9dP8kzA02G'),
(518, 'marciarh@benficabbtt.com.br', '$2y$10$njoGOCRkhv.qjqcIJgO7KOva0n4r02Ua.oqo5ZHOsLliiCBOkbnHK'),
(519, 'marilene@benficabbtt.com.br', '$2y$10$HnuXqrXtNnhnxJRD/U4tHeyEFZuZVGc6KkgPduG7CEOcHyuGyuzJO'),
(520, 'marilza.souza@benficabbtt.com.br', '$2y$10$UVtBT9WE.od7yBqASrLej.g8Iuv6y2DEjtmdJ9l0vcqzTyZUPzRUK'),
(521, 'marisa@benficabbtt.com.br', '$2y$10$MKteoAa2kDhHMAwkmJvvf.5Gj2j.4h3yzcuKoIS8iHxmQ87JaI3gu'),
(522, 'marketing@benficabbtt.com.br', '$2y$10$SnmbVd51jn3PFnB6UuBBCeOu7sf5WX0VltbMQoqWlSyreZdlbxXkS'),
(523, 'marketingralip@ralip.com.br', '$2y$10$7ZEJ5R0y.BbkaxQLpA7fvOJKkxNNgYuSyZM820CsCagQCPEZ894X6'),
(524, 'matheus@benficabbtt.com.br', '$2y$10$KqRol.i1RzYiL0ePHn0aROZL.HqzL98QZBxcSDr/ONwLw2C7BN5S2'),
(525, 'michel@benficabbtt.com.br', '$2y$10$HgH/74Duy4jOMq2VdJoLuuCnKQrNKe/Rc4sgvZLa99zbdZz8/2cJa'),
(526, 'milena@benficabbtt.com.br', '$2y$10$tB0YTFSCs.0GAMujdF.IQulK2dX1unUcDc2.1Mha6el5IgwEe6af2'),
(527, 'milton@benficabbtt.com.br', '$2y$10$UvD1lf1jcTtsFka62aQg9e.vw/Jy0pJPaku9xmDKVwDwP/05x36TK'),
(528, 'monaliza@benficabbtt.com.br', '$2y$10$7g7hQaRlLzLwy2H9rrEN3OhNyOSsFzx.NfOBLbMpDgnxUAUC/RQ0S'),
(529, 'monica.soares@benficabbtt.com.br', '$2y$10$9WupCgf9j7mbmM0eJEAH2ugdEcGZtUd0IDqZrMRNuPf4b9uU7V/L.'),
(530, 'monitoresrh@benficabbtt.com.br', '$2y$10$2ZTPkNXT7hfwVa7LoQM6YeSWZRoSzRIZsk9XCIane0cf47ebPGFdy'),
(531, 'nadjane@benficabbtt.com.br', '$2y$10$.oV6uo0OxcXDz46tA0PE4ukaiHu9Va7FMwDiugZRZy1dP6E9Pv1t6'),
(532, 'natanael@benfacil.com                        ', '$2y$10$frIG0NtiRK3CntWZIF6bp.S/UFuMt9hBZjhwGRbcF4cUvOhDhiuXS'),
(533, 'neia@benficabbtt.com.br', '$2y$10$MSJWPaeUPuEa/RiGdJbJDOimTEkA0C0DnbXc5ANkurWd7pS7oCHti'),
(534, 'neide@benfacil.com                           ', '$2y$10$BbXr1I/rfN2LueEyNwT5weee.fjhUCbRU7zeGfLZHU4XUs5gZXKTK'),
(535, 'nfe@benficabbtt.com.br', '$2y$10$hPQSoT5rcjCWuHiAfZns.uOZFPYi2d9xVX0nom0AOmlVbFqCSkKgS'),
(536, 'nfiscal@benficabbtt.com.br', '$2y$10$qDdwbeVMAQgFzJ/fL9V1iO80SAAiQM00Sm2qrnHA.GYzSjSUnLIjO'),
(537, 'niceane@benficabbtt.com.br', '$2y$10$1NCnpA8fwUCx.yK9T5IguuAjj8fwB4PwUG3LHDt6jsWynp9.dcfIa'),
(538, 'ocomongps@benficabbtt.com.br', '$2y$10$volsDUaXz7UYuWbZU4Pul.ho/1fhuQv1WyJtPByZuZ/9wIHISUep6'),
(539, 'ocomonpredial@benficabbtt.com.br', '$2y$10$O9spZCb8SmH1vzHYuT6QCej6yhQ0.vDyS9SNu9XJwhdCsWoasg7Wm'),
(540, 'oiris@benficabbtt.com.br', '$2y$10$XqOqRr1bNXzSJfp4imL5LeaINRjlRmWOc3oje0zF/shpGBE2eENai'),
(541, 'operacional.turismo@benficabbtt.com.br', '$2y$10$i8FAm5cBKX9gigghvMSkwuyNWWQLT73K7JAUVtp04ckKHcmJeS5cS'),
(542, 'paloma@benficabbtt.com.br', '$2y$10$jGGEM1yf.HPYYUde2hGqDOy.4btuMiUPc9BENACIvvCZ8P311Sxwq'),
(543, 'papelaria@benficabbtt.com.br', '$2y$10$i2ob5Y3j6uyO0kipnmiEI.w/JpY1pT125cy6XQ6ayG/XvG5J1ROj2'),
(544, 'papelaria.jandira@benficabbtt.com.br', '$2y$10$gsfkmzap3lc0nE.qOFmV5.bvYdxb2LgR29XzVOoxpqyAlEVfya5.W'),
(545, 'patricia@benficabbtt.com.br', '$2y$10$DJhEEFm2woZlkKrd8qm1ReJnjnIe7OewnRX1W.2GmMu189gJOuQW6'),
(546, 'paulo.fuso@benficabbtt.com.br', '$2y$10$4gSgalvjOoapMwDcNL/mTe5xO6yu5udf2Vqleio9AUEy4kdZX32/S'),
(547, 'paulocesar@benficabbtt.com.br', '$2y$10$nTnLpMcwGUYXG4lDL6NsfushbKoEBRJWqQ4eMND.Bp6JZBV/TX60m'),
(548, 'pedro.lucas@benficabbtt.com.br', '$2y$10$GVRdv527m6QkDATqi9Vj1OQ5is1p5IU.XnFln7FVUzFn3ZjVr2ziW'),
(549, 'planejamento.operacional@benficabbtt.com.br', '$2y$10$1sGoAQX3WuLNMEmvNpJgRevuSJkg/9xp1MgBSE7EmiCNoC.YpNZJ6'),
(550, 'plantao.sorocaba@benficabbtt.com.br', '$2y$10$2pe8CAUhQ2ggV0HFRk5YL.5lR.L5OBzlAh3nA.hKJxv6Gp2zHoeta'),
(551, 'plantaobar@benficabbtt.com.br', '$2y$10$xbk0IdCHyXkZoYMKxbhBnuJvEXXXzzis.BZhtCYSh6acYTlvNpitq'),
(552, 'plantaoita@benficabbtt.com.br', '$2y$10$bQEqOUWe06aaeg0eY7Ndy.Km9TLcZAg/joVlNI1HPjQfZPIy1S9oy'),
(553, 'plantaojan@benficabbtt.com.br', '$2y$10$pjq4UiB2t3JVwY2OK3GO7u2.q1imBwaaBsK9.YKX7jDxXcLO30VP.'),
(554, 'plantaoralip@ralip.com.br', '$2y$10$Dx1Bbsr16zfW5BFrfmb0Ce7ww1V8PGYCpvVgIwm5/2dqOnaWg8gKy'),
(555, 'portaria.barueri@benficabbtt.com.br', '$2y$10$/n6BRqIn8X9CvWVIzF/0.OwJZ//0fvfJvMOGndU.JDyEYJ8ioOMmm'),
(556, 'portaria.itapevi@benficabbtt.com.br', '$2y$10$eKidETyVW1LPwumoa4elwuRPs9bbCZ/W57sXh3.ngA1RF6WWLqnmW'),
(557, 'portaria.jandira@benficabbtt.com.br', '$2y$10$ZGIfYaGBqHa5ENYujgkLKOLxTtvPHkTchkYgxTKSUB9YocvrnYFKu'),
(558, 'portaria.ralip@ralip.com.br', '$2y$10$g.UfqNEt3shjuQSgqFYgKuzY/Cj1s3HDyKTWpr2dbRuSaHz8Iso62'),
(559, 'portaria.sorocaba@benficabbtt.com.br', '$2y$10$t.lStcj1DtDc17l6eNn8Eeqzdaw5Y8Wxk8NGhZuefBGqVYCpUMiLa'),
(560, 'protecaodedados@benficabbtt.com.br', '$2y$10$BEJjqzQVew9c5Jv3AhRR.OuCV5qxaGImMXLajGoz590vkkY0GXNl.'),
(561, 'protecaodedadosbenfacil@benficabbtt.com.br', '$2y$10$A0n.Xgy3EUqz/a.8cxTP.OEZaqt99dOvdiEYMgi/NpFhJ4.os1ahq'),
(562, 'protecaodedadosralip@ralip.com.br', '$2y$10$q5F6sw1ez.9vvCOsAHb.ZeCujvzQuTI7ewi.Tu6iyEwNqjZdqli5u'),
(563, 'rafael@benficabbtt.com.br', '$2y$10$HHj91nADOwpDD2zmMTaPme0nRAp1IZf7jTnIrGEzJ7jdwxF6XZ/Xe'),
(564, 'ralipdocs@ralip.com.br', '$2y$10$54D.F2pLVJVpCVxhyUFzUeMIZS26xDZOCGGOZ9pnd6M.ayhf2s9SS'),
(565, 'recepcao@benfacil.com                        ', '$2y$10$8qHsZsmfDBN3h0gqoSb8xuTzxPsMWT3S38WXXkxV.WH5If3Zuo7h.'),
(566, 'recepcaobarueri@benficabbtt.com.br', '$2y$10$mwgAPRrustvfvXEFUjpfk.SZ8mX1Ohc.1ZgnklabNhW.eJZehXBXC'),
(567, 'regiane@benficabbtt.com.br', '$2y$10$0/Udk5DUjxyHRZrJPHliBeA4VVRXNo97fXhd/8KR6pxeV9izdbdyO'),
(568, 'regiane.vieira@benficabbtt.com.br', '$2y$10$HpuKoVTWOSE5.hR14zA1suXBYvnaYi9iIGoYTnlLzO9/mxIr3az02'),
(569, 'reginaldo.araujo@benficabbtt.com.br', '$2y$10$h1SkPePxX49C/khwnNM0lObnizSGbibFqBWv4.ScfCOdMN8Kt2fkO'),
(570, 'renata@benfacil.com                          ', '$2y$10$JwDtPxINBLpDNDRAIku3ouTAOqQxQJvEsNUYOZAFVgzzYDSP/FzgC'),
(571, 'rh@benficabbtt.com.br', '$2y$10$sfovnQiN4zuu545xtQVx4.OgLCRhgvBsfgD87kst/bTAycgOdVEEa'),
(572, 'ricardo.lopes@benficabbtt.com.br', '$2y$10$hOKnk8ScHpYx/NCGvyhz4.Rn1swGegSL9QUzxBaJDi4eK12oslQ6K'),
(573, 'ricardo.sousa@benficabbtt.com.br', '$2y$10$bUT9cshJjGAqXxtoLQRv0Ofm.1MiIJZCcq7MPbpr.2erJX/fYLwS2'),
(574, 'rjuridico@ralip.com.br', '$2y$10$aojMLQTL97OK757f5G0AGugg7M7DykNGdL7qOoMc9F878fD0VB4vG'),
(575, 'roberto.bitencourt@benficabbtt.com.br', '$2y$10$jz542zCA3f6k0AoflOYKYujmGtqbkaWx3oZChNq/soeGJhXVkbLtW'),
(576, 'rogerio@benficabbtt.com.br', '$2y$10$5dDJRwRhcfSmJY8gZLS2ruT0sf98z.Z6ycldyz/k3JriiaUoeN7pW'),
(577, 'rosana@benficabbtt.com.br', '$2y$10$cWJv1FBbiZy7EDAhE5.nP.q7qRCGgjKAIqUCmgC8aGFP5SOhmfs0q'),
(578, 'rubia@benficabbtt.com.br', '$2y$10$fClVKjhH/HjordaUY3Kt5el7Mcxsq8Szac/xAe3PEUlmeE8IMjg3C'),
(579, 'sac@benficabbtt.com.br', '$2y$10$XdaBQRYK5/CmmBtuZccLP.6Oz3ibn4CiOQ7esJPlsfYAhIfzsPDBi'),
(580, 'sacdiadema@benficabbtt.com.br', '$2y$10$7ac2AKL6sdzZWZ0lN25LEuDsBplDoCUBHgtLjmJOGkHO4xkJ6mjpu'),
(581, 'sacralip@ralip.com.br', '$2y$10$4mc1wfViuQwbgaGTlTgv9usAMr7gaVwXGEsNSzeJhwMukQk77bFg.'),
(582, 'sandro@benficabbtt.com.br', '$2y$10$cjQr5UNFts67TtF/Bkwbh.GbLB3NMNHX7hBBxXIOTfFU6URRJalV.'),
(583, 'saude@benficabbtt.com.br', '$2y$10$KYuRHWv6lz14RDyjDsZxn.a9VVuRE2LgsBLKiibliR76nbRQYB2Y6'),
(584, 'seguranca.sorocaba@benficabbtt.com.br', '$2y$10$obCPmftZ9b7.vl7IC84xdONsa3ZtO40oRJ9SpKOZG199vIVGvc7US'),
(585, 'selecao@benficabbtt.com.br', '$2y$10$Sl6WzT3xn0Gii/dzzz/54e7V2uxrtfvhjUWkIHqoz7udqXHRW0gcS'),
(586, 'selecaoralip@ralip.com.br', '$2y$10$5W4S4Aq0LZyjF.jDjTZnaeBB5Jo9OTH7wpdh7t7s8kp8.I9Z4intC'),
(587, 'servicosocial@benficabbtt.com.br', '$2y$10$MKcK6Jl95genpnKCg5vtL.yuK1CNK/Mh7bcBrZ3KCyzd5rLQVLIe2'),
(588, 'servicosocialralip@ralip.com.br', '$2y$10$D1k3JNpRe9fRd5J..7izeeVlAtMC5rdMxDwJ.VeW5jVbTNDstwTx6'),
(589, 'sesmtralip@ralip.com.br', '$2y$10$Oj83fgqitUT2J5E1IpFXbuIIkx55o1PcyCkzdsCEAPrZndiWA6msW'),
(590, 'sheila.leal@benficabbtt.com.br', '$2y$10$37FY9.9YUaDYCemdggNMpeUa3hv9p1GE7EY6s3Ndbw5nAWcLuP.WK'),
(591, 'sheila.nunes@benficabbtt.com.br', '$2y$10$laUnPGK6NAA6jO3rjGrjmeBNJk13mE.sm8BGniFBUqbWZTJOnGHzy'),
(592, 'simone@benficabbtt.com.br', '$2y$10$.YunoX6NZ.a1T1o3P5IU6u48CfhGsLAnFW9BRFXR4uIaTXK8CXbG6'),
(593, 'simone.mountan@benficabbtt.com.br', '$2y$10$zLrnGaeXNrihZ0lKOAuII.in242IfArU0jEc.2YCD2ndSI6t75Fnq'),
(594, 'simone.toledo@benficabbtt.com.br', '$2y$10$UMyDk60zTMYjtZHHANsMluy8qgVQdH37UO1x6N0Mdlcjz5cvz8wCS'),
(595, 'site@benfacil.com                            ', '$2y$10$Q.qrAx53P5K/5pHPVxx6g.dfODIvthihgp8LQU.3zenIkhDOZ7wXq'),
(596, 'solicita@benfacil.com                        ', '$2y$10$fwJ/HnpMpvsV5s252urd6eS3Hou8bwiVkp9YF6Ala3WXtOKNwPC6W'),
(597, 'solicitabenfacil@benfacil.com                ', '$2y$10$OR4B3TJy6n3l6xFzQJMlnelgeRbFFowHhSJ4LzKyjhlg41M1.U9TC'),
(598, 'suporte@benficabbtt.com.br', '$2y$10$Je2Em4m.LmKO/lqamfp1ZeTAgveEwrYobUu1.HOo23KsESE1wWKMy'),
(599, 'suzana@benficabbtt.com.br', '$2y$10$lqFnr87WJsjaoN5L0w3IU.NbcEXBWe/s7ZkEYzEcX85QmP8PA1cmq'),
(600, 'tacografosor@benficabbtt.com.br', '$2y$10$vMSt7Rg2M6qkmWwyv9bBUujkb2L5k944COd.0MfDw.l9RP7Y4weTa'),
(601, 'tais.adm@benficabbtt.com.br', '$2y$10$2FywJMTjF8uIF5u40ecnGuRjzH6YrfGJfuuPGpmnIXladnjupLRoW'),
(602, 'tatiane@benficabbtt.com.br', '$2y$10$E2.uON0kteIoXLhWC939QuZ18Ov694.Hbth12ZrrEXpBIozytDlPm'),
(603, 'tatiane.neres@benfacil.com                   ', '$2y$10$6kNVUI5sAuj4NRyCnKzs1eI1JlsTeWmo6slF46tOvtmB9l3tX/V42'),
(604, 'term.jandira@benficabbtt.com.br', '$2y$10$bEJIXvnVT3Orw4v6Bfpjb.dFeJHymDj7wcR2cpQw1mCtbt8ZSM1ES'),
(605, 'tesouraria@benficabbtt.com.br', '$2y$10$IwhJnUno.l9PxEmKgnrxp.B5S9zPmVwCwG6yGofZ7Fjfg1SkIXlGG'),
(606, 'thais@benfacil.com                           ', '$2y$10$tSEwDrzpJaKPB00Ikn819OtntpqpGHNKN0tkBshi0d3HJbyUaX1TW'),
(607, 'thelma@benficabbtt.com.br', '$2y$10$8hXHBPTAn/FC/8Xo94zB1eEbgboM7VbOiv8FiC8L92uDOeifgyLfa'),
(608, 'tiago@benficabbtt.com.br', '$2y$10$idwxGoR1UHVvFZbqSg1ViOWxkP5M3.A3QF03MdxOscWXFb2eicSb2'),
(609, 'turismo.sorocaba@benficabbtt.com.br', '$2y$10$AfNTSBhizQpJ4zDAzUxWbu11z.bkOm7S2adAi7GM9BscbGudpuLK.'),
(610, 'vagaemaberto@benficabbtt.com.br', '$2y$10$kuVLWeez8bslBW.muDO21ujLVFH9Z8aQcdtryXgloXWMcqWBzXUKu'),
(611, 'vagner.oliveira@benficabbtt.com.br', '$2y$10$EjBw51GQQV4rozPcqxWJGubOsjE.kkyRhpuWalbtjTONpvzvEQyoq'),
(612, 'vendasdepasses@benficabbtt.com.br', '$2y$10$MqECkB0XiMKGbzbuCVd6nuF6FQevXWRKNxKT5S6cBP0QkN/AsZ6j6'),
(613, 'vicente.briamonte@benficabbtt.com.br', '$2y$10$gbq42KiakJ4CecGslI2ywOQLWetRKmxzStT4xtbpBQidK/cHNfsJy'),
(614, 'virginia.lopes@benficabbtt.com.br', '$2y$10$QLST1scepj5Fftcbqt2Ju.x9E1BUM8bmR.V6JeID94y8evHmhNRBW'),
(615, 'viviane.pereira@benficabbtt.com.br', '$2y$10$IX1d3r9joAzFuEcHxZVFs.5dJubwrbSE5c.2jYoi78jTaDrGd7qOS'),
(616, 'vtbarueri@benfacil.com                       ', '$2y$10$YZQaR0vQtHx7oXCwsVIeCeO.WwDwytBMrQixBjz7joP4kCpvqPGbC'),
(617, 'vtbenfacil@benfacil.com                      ', '$2y$10$RXVa6IxXuT3a3HOERNGq.ukIe6BhFSqZCd0izzygzOEse54NBa/Di'),
(618, 'vtjandira@benfacil.com                       ', '$2y$10$/1LjP94xRPBbK7XyEr2Nq.AycvI6L9KXj68FeW9a8FL7u.mCs0BGy'),
(619, 'wagner@benficabbtt.com.br', '$2y$10$PUv0Z8tkBx8hfZZx/cmaQ.jaBs6kMNANn7SNeGc60Qx3GW/5XeYsm'),
(620, 'washington@benficabbtt.com.br', '$2y$10$L/OsqUWJurJig1TBuETrQ.nlwCo/Jnyxy8.pgQXaatsWswJW9pc.K'),
(621, 'webmaster@benficabbtt.com.br', '$2y$10$1a7BF3iyY6Qmlky7IBdNDuOzWW3m2QRYkct..L83ibygiP5962ICS'),
(622, 'webmasterbenfacil@benfacil.com               ', '$2y$10$XfHBLDi5JftgK5rXlG4z8.67yeMJIjPThY3.NspKjw411V5hKDoW6'),
(623, 'webmasterurbano@benficabbtt.com.br', '$2y$10$FcmETTLm8Q6tUWwoYJWtx.TzmlYiwOhTVmihNEIwCqnydfby01BM6'),
(624, 'william.santos@benficabbtt.com.br', '$2y$10$i4pDJcbv7cnJcwkNJfUx1eQnMyX2uZ60gC0yF/ZuVOG6bA2xv526G'),
(625, 'zemaria@benficabbtt.com.br', '$2y$10$Wi3YOtB1x04iMe3QNSyR4.ZSbAPWLt807Z.9bxnsS6pccdy6OtCpq'),
(626, 'zilda@benficabbtt.com.br', '$2y$10$B3titgtPnZdcT4F67pVRue128AbSFw9XkVu87aqsbACFrf2dLoZ6u'),
(627, 'rh.treinamento@benficabbtt.com.br', '$2y$10$PvwCU2k/3.mV3Lh2LyEtReflGMOwToMwg45eCXObO0Tq8ARHujmTe'),
(628, 'ccojandira1@benficabbtt.com.br', '$2y$10$veYNMyD22fZGkrOVYVoReO4aip.t7HgK/neD.cnoRwZ/CgrXo4gxK'),
(629, 'ccojandira2@benficabbtt.com.br', '$2y$10$OIDPLNQqM4bXQzj4CzQuuuCmmaVJCNI7kP3JbKd0QJ52JkbPsDLnu');

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
(72, 'Favor comparecer ao RH.', 47, NULL),
(73, 'Teste1', 51, NULL),
(74, 'Teste3', 52, NULL),
(75, 'Teste3', 48, NULL),
(76, 'Teste4', 49, NULL),
(77, 'Teste5', 50, NULL),
(78, 'teste01', 53, NULL),
(79, 'teste002', 54, NULL),
(80, 'Teste03', 55, NULL),
(81, 'Teste06', 56, NULL),
(82, 'Teste07', 57, NULL),
(83, 'Teste08', 58, NULL),
(84, 'teste', 59, NULL),
(85, 'Teste', 60, NULL),
(86, 'Teste', 61, NULL),
(87, 'Teste', 62, NULL),
(88, 'favor comparecer ao rh.', 63, NULL),
(89, 'favor comparecer ao rh dia 01/08', 64, NULL),
(90, 'comparecer ao rh', 65, NULL),
(91, 'Favor comparecer ao rh', 66, NULL);

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
(5, 'RALIP', 2, 'hHKA%G&JK24HAA*5'),
(6, 'BENFACIL BAR', 1, 'JHGyty%45*I1'),
(7, 'BENFACIL JAN', 1, 'JHGyty%45*I2'),
(8, 'BENFACIL ITA', 1, 'JHGyty%45*I3');

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
(50, 'DDLpdf165835.pdf', NULL),
(51, 'DDLpdf122405.pdf', NULL),
(52, 'FundamentosdeInformaticaETECpdf115533.pdf', NULL);

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
(6, 'jr', '2020', 5, 1, 1, '888H%92&84!jh(jh34@7'),
(7, 'mk', '2020', 6, 1, 1, '568H%92&84!jh(jh34@4'),
(8, 'rh', '2020', 7, 1, 1, '567H%92&84!jh(jh34@1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `maquina`
--

CREATE TABLE `maquina` (
  `ID_MAQUINA` int(11) NOT NULL,
  `DESC_MAQUINA` varchar(80) DEFAULT NULL,
  `PRIVATE_KEY_MAQUINA` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `maquina`
--

INSERT INTO `maquina` (`ID_MAQUINA`, `DESC_MAQUINA`, `PRIVATE_KEY_MAQUINA`) VALUES
(57, 'BAR-CTI-7', '$2y$10$rzqvMYvCbpaUGam3s8l38uYnZ0s6OHwuXadTSK1WfetKhx8a3pOsq');

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
(34, 'Henrique (CTI)', '$2y$10$FSGL9kDdk7EDExWkdLdgW.Fs8u2UyM5Wev4yCo'),
(35, 'Ernesto (CTI)', '$2y$10$C/boLY7hkxMTOHm4cB/QyO9TC7ajk1Kqos8cL.'),
(36, 'José Rubens (CTI)', '$2y$10$8fdUvPxnyQBmQqLJTq4INuRNDQ1mYEJH0AIuiR'),
(37, 'Edson (CTI)', '$2y$10$5OzsW52cYo0rYQN3nMkGqutLMqlq/tgPJGJlqw'),
(38, 'Emerson (CTI)', '$2y$10$HrgZ7B4wearjFOWygV3Rauyv4ZFGVC9KHo9Z.y'),
(39, 'Bruna - Jurídico', '$2y$10$opDmEp3rbQczXSE.d6Clo.u/PY4.j3tFhm2awP'),
(40, 'Danielly - Jurídico', '$2y$10$VzOMyvf4hIeZ5Id31vJ8LujO0/MDpoZcOtvCmW'),
(41, 'Jane - Jurídico', '$2y$10$VKhiWwINolOBFPrGbPPjE.aph4znjmaiqh6HbO'),
(42, 'Leonardo - Jurídico', '$2y$10$mtP2haUE6zh3cBGp6mx/nekiWM4J2O8K9pgbo0'),
(43, 'Monica - Jurídico', '$2y$10$OIsHwoWDA4XJxduQzpaBrOH5fEcD6ygwzrAqCs'),
(44, 'Neia - Jurídico', '$2y$10$dgZk7haMlr/HYy7XHeTh9eb4DbaXpEYxniY0ww'),
(45, 'Virginia - Jurídico', '$2y$10$BRTbwcxDFl2Txh8iMDfQ3O9wx9WoK7oyRIBhpq'),
(46, 'Edison - Tesouraria', '$2y$10$zk0v.fKHRvdBu.xkAmM.au9rnADjcQVOuhormE'),
(47, 'Marcos - Tesouraria', '$2y$10$EByIFnTIw/bDQm7T3St1WuKhrMCG.A6C0/McTp'),
(48, 'Charles - Bilhetagem', '$2y$10$RFXWqza/dUegQI0akxKqF.WmMjNrPZrd8rXHVf'),
(49, 'Fernando - Bilhetagem', '$2y$10$bi35dH23zD7Yf8lAiHjfuunuFl.PYflZudOg7I'),
(50, 'Márcia - RH', '$2y$10$6L53QtltN/jD9c7Xoi3GROtIIHjZY.khx5dyu9'),
(51, 'Lucia - RH', '$2y$10$j2mbbtZvxima4KJvfRcPB.fix5AGtfYnxH1dI6'),
(52, 'Rafael - Seleção/RH', '$2y$10$sZQSBVHmkkEIx2Yo.GuaIutfFyidX0MT/tFPvW'),
(53, 'Sala de Treinamento Jandira - RH', '$2y$10$ZAjsSk8XjNix5Q1pq.YCgu74ozG2.rn2SGOnL3'),
(54, 'Regiane - RH', '$2y$10$YaFCOfzjZoXMUg5IUwt9reXDE1GzHU7GsxbMlI'),
(55, 'Euclides - CCO', '$2y$10$ur3fZ6CuvzjywXbLEtkIQOg9XCHCJqlcsBGOMR'),
(56, 'Francisco - CCO', '$2y$10$1IiTItG03gjZBJjnNTtPK.GFpgZW77nFY6qvaK'),
(57, 'Hilton - CCO', '$2y$10$0EjmxEZ72skS528WR2r4P.7ShpK/yICGLBmjPl'),
(58, 'Anibal - CCO/SOR', '$2y$10$zichhGk5cmSJyGjmyWD.SOhaJ4tpUfYH4wZg4X'),
(59, 'Emerson - Financeiro', '$2y$10$9olIhtM8hkopgIE4.lZZk.Cu1958j31E9FJrKO'),
(60, 'Monaliza - Financeiro', '$2y$10$7UNEJ8eh7BumYGJaiN3Tce6o0AieSSdpPUwIJj'),
(61, 'Nadjane', '$2y$10$y80IRycbkNTcyO/tH2uamOJcem1QsZNDqQwPYI'),
(62, 'Tatiane - Financeiro', '$2y$10$Q9CfcRRwUp7OYCerZGolnOPo2Gc1vqZEyHQSDF'),
(63, 'Viviane - Financeiro', '$2y$10$tlEu4iBiWff.bhNkLFpJmuNMgzhYEFojBOBfpa'),
(64, 'Cesar - Contabilidade', '$2y$10$77nAPr.FEHzLJuUhxGXS3ubaQOHsG/keu9AJPC'),
(65, 'Juliano - Contabilidade', '$2y$10$Ks4XfEeHcIOBHoTZq57mquhoGGD4ox72VBMGcd'),
(66, 'David - Contabilidade', '$2y$10$cEa80M07bPFR5LhbTzS4Y.XNs5ccJBsYMpRW3e'),
(67, 'Milton - Contabilidade', '$2y$10$l/S7rmx4qck2o2tVkxImme7hmagQwnBGNpIv0E'),
(68, 'Daniella - DP', '$2y$10$genQlkaUPjFuaUjcvKGk9uA8gSj6Pkja3ln4wa'),
(69, 'Isadora - DP', '$2y$10$sQgGhOoxuSAezBm.BE3gC.eWwjtXULid6sAP64'),
(70, 'Gabriela - DP', '$2y$10$/xap.kir.PcsC9zb0MrYUuqUzNtg4r9N1ie2BX'),
(71, 'Suzana - DP', '$2y$10$n0lppH9bGaREa4vN.GCflu12MN0gk5a96pot3z'),
(72, 'Sueli - DP/Atendimento', '$2y$10$rx9BY5ayWeoFqM1fC0uGveaZsHKFfWxNNOwZY6'),
(73, 'Portaria - DP', '$2y$10$.F/Rs/Mwg3IsYGYRWbW6UuhEIqOK1RHrTQ8sPi'),
(74, 'Felipe - Compras', '$2y$10$ekW6QVYt1T7NZqt9lrcN.O6t.FDrZTaQ5V1Qj5'),
(75, 'Jaqueline - Compras', '$2y$10$BKvaG.KAfT.HrEnQkSy.nuto944Z73q8oCIgKD'),
(76, 'Simone - Compras', '$2y$10$eovUAcLCf6Ok7scyB/LlB.XXIRw5hwCvc4.go2'),
(77, 'Patricia - Ass. de diretoria', '$2y$10$ecsIcKUCmQzJdKFcVrCMn.lS2uQxVItksSDlUm'),
(78, 'Ivonne - Apoio Adm.', '$2y$10$JQpuBD.V7yzSftO3r5h.ZestVxBzWwVfWXARsF'),
(79, 'Jacyra - Apoio Adm.', '$2y$10$NECigCb3D/MAvIGaiPTZGew4p/2cO0c7ibUNbU'),
(80, 'Katia - Apoio Adm.', '$2y$10$VGFJVBFpSlMGa0C5PM5r3uiTYWxMaLiAjz3k2C'),
(81, 'Refeitorio - ADM', '$2y$10$/7bSC2DdEMCgcdBRXPLUYOay/8IxAPpVoRKm7O'),
(82, 'Sandro - Almox', '$2y$10$Vm0W3DMWkmwIW7aeVjmMgOYoOgDOUZEHWgL76M'),
(83, 'Oiris - Almox', '$2y$10$YGdXEwf.M1ixdbO/HMxw3uILdPtpq9i5U1J839'),
(84, 'Almoxarifado - Jandira', '$2y$10$x6X59tVvhqCYlzxXreLb1eBGud8EpJfSfwmQZO'),
(85, 'Almoxarifado - Itapevi', '$2y$10$PPnE6ZAnIB3u3KVexUndUOL5oj6SpUlxbM8Yls'),
(86, 'Michel', '$2y$10$eVFwZ2lYA5iS5BQtVHJrKuI23dwPF/mcgCeMoA'),
(87, 'BASSAN (CTI)', '$2y$10$X2/fCwGz1UTTEpsmM5b2r.7ROnuVyfTw90axrl');

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
(6, 'PLANTÃO', '$2y$10$4K9PF4ACVuQfSPmcTaka5eaSaeqTE9NrHIW6u0'),
(7, 'TESOURARIA', '$2y$10$G6wn/xSuII5crTKqHfZrL.AUfmoPiJgJEs/tm3'),
(8, 'PORTARIA', '$2y$10$U64eV9Qygy.pL9La6iB.m.g7U8TX4cfomSh1S4'),
(9, 'DEPARTAMENTO PESSOAL', '$2y$10$IPTT7icgBO17Qt0nycXNX.EKDkpT7639mhGwPB'),
(10, 'MANUTENCAO', '$2y$10$KpOfikf9gmVfSOvDlLj28OHDComaFWepIViCO3'),
(11, 'CONTROLADORIA', '$2y$10$5wtcahWlowdTjyMSI5hfzuuy1/.tnDo9Df6.Bk'),
(12, 'TURISMO', '$2y$10$8ZNHQHmoImECs6HhukZIcutPTnixK9B3GSFPgL'),
(13, 'SESMT', '$2y$10$FcpIaTzGvXRM9as5t3ZnRe4cpTIYzx1ZGxgnID'),
(14, 'CONTABILIDADE', '$2y$10$NuY6Vpe6ERjpyLZ2LEtBHOgGAwjtjYHcNNQA1j'),
(15, 'APOIO ADMINISTRATIVO', '$2y$10$geODkHGlzoSfxO8wTnivMOyPlyMBq5Cg1WaBKd'),
(16, 'MEDICOS', '$2y$10$eAj8E4iY4HjwJzXUDeDb4Obp7XMWCEVuPoTB83'),
(17, 'MARKETING', '$2y$10$KPNNhPia1bNBBpNvOkK6AOkAEBNIibKjLlxl2i'),
(18, 'CGO', '$2y$10$4Q66OcuPnccOokeBRodTkOXRSuFBt/8a9.aFap'),
(19, 'MANUTENÇÃO PREDIAL', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5im'),
(20, 'ALMOXARIFADO', '$2y$10$D7Po6APYoJSapfqBnTh5QOqqlyFW/fzUx.9TEj'),
(21, 'BENFACIL', '$2y$10$hKfebnrbMjYIpcuKj8FOrupnFgLE2SDp3Bk12B'),
(22, 'COMPRAS', '$2y$10$6hvYgrZk8Socu.cOFsyaxOk0Z9ojahkaCe65ge'),
(23, 'LETRISTA', '$2y$10$CEdS9S1F0SiKefYoXcQEsOGlqJ4WCnQkr0hMOP'),
(24, 'CONTROLE', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i1'),
(25, 'CCO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i2'),
(26, 'DIRETORIA', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i3'),
(27, 'ADM-SOR', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i4'),
(28, 'COMERCIAL-SOR', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i5'),
(29, 'BENFACIL', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i6'),
(30, 'VT BAR/ITA', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L5i9'),
(31, 'VT JAN', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L510'),
(32, 'CARTAO COMUM/ESPECIAL/ESCOLAR', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L512'),
(33, 'RECEPCAO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L513'),
(34, 'FUNILARIA', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L514'),
(35, 'BILHETAGEM', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L515'),
(36, 'ARQUIVO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L516'),
(37, 'TRAFEGO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L517'),
(38, 'ASSITENTENTE DIRETORIA', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L518'),
(39, 'PAPELARIA', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L519'),
(40, 'AMBULATORIO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L520'),
(41, 'SERVICO SOCIAL', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L521'),
(42, 'DIGITALIZACAO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L522'),
(43, 'AVARIAS', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L523'),
(44, 'PLANEJAMENTO', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L524'),
(45, 'SALA DE REUNIOES', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L525'),
(46, 'GRUPO GESTOR', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L526'),
(47, 'MANUTENCAO PREDIAL', '$2y$10$vsDi/Bb6PNgPxylEKtdDg.PViKsmILqee7L527');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao_marketing`
--

CREATE TABLE `solicitacao_marketing` (
  `ID_SOLICITACAO_MARKETING` int(11) NOT NULL,
  `NOME_SOLICITANTE` varchar(45) DEFAULT NULL,
  `ID_TELEFONE_SOLICITACAO` int(11) DEFAULT NULL,
  `ID_EMAIL_SOLICITACAO` int(11) DEFAULT NULL,
  `ID_ANEXO_ENV_SOLICITANTE` int(11) DEFAULT NULL,
  `ID_ANEXO_ENV_POR_MARK` int(11) DEFAULT NULL,
  `ID_DETALHE_SOLICITACAO` int(11) DEFAULT NULL,
  `ID_TIPO_SOLICITACAO` int(11) DEFAULT NULL,
  `ID_SETOR_SOLICITANTE` int(11) DEFAULT NULL,
  `ID_STATUS_SOLICITACAO` int(11) DEFAULT NULL,
  `CODIGO_SOLICITACAO` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_SOLICITACAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacao_marketing`
--

INSERT INTO `solicitacao_marketing` (`ID_SOLICITACAO_MARKETING`, `NOME_SOLICITANTE`, `ID_TELEFONE_SOLICITACAO`, `ID_EMAIL_SOLICITACAO`, `ID_ANEXO_ENV_SOLICITANTE`, `ID_ANEXO_ENV_POR_MARK`, `ID_DETALHE_SOLICITACAO`, `ID_TIPO_SOLICITACAO`, `ID_SETOR_SOLICITANTE`, `ID_STATUS_SOLICITACAO`, `CODIGO_SOLICITACAO`, `PRIVATE_KEY_SOLICITACAO`) VALUES
(30, 'Rubens TI', 363, 485, NULL, NULL, 30, 5, 1, 3, '7LR36XSA', '$2y$10$UGAerZzi5U.8qTF7O7fV/.FyfcEObPO/8uyxS1'),
(31, 'Rubens TI', 363, 485, NULL, NULL, 31, 5, 1, 1, '2C1$U#B7', '$2y$10$hYPaT4GZM.3A.5GqSrPsoOqEGMMFHz5OceAm92'),
(32, 'Rubens TI', 363, 485, NULL, NULL, 32, 1, 1, 1, 'BHC71J8S', '$2y$10$7WX1WXaTPDrNy11Aji1YuugKyfEUWQdzkWsHhh'),
(33, 'Rubens TI', 363, 485, 18, NULL, 33, 1, 1, 1, 'GN$B#3!E', '$2y$10$9rjGaZlmZ9/4NZ7kOvEzvej9w/Ln/MzchHskqj'),
(34, 'Rubens TI', 363, 485, 19, NULL, 34, 1, 1, 1, 'P!J4CK@R', '$2y$10$MgC/0aGPEJiHhNDADnlS3OBrTW4vstORg3ZJZT'),
(35, 'Rubens TI', 363, 485, NULL, NULL, 35, 1, 1, 1, 'S63CDTF4', '$2y$10$aiAZyegyJqvAD/6FIXw7ZOQT10.SQHqauNM5hp'),
(36, 'Rubens TI', 363, 485, NULL, NULL, 36, 1, 1, 1, '14O9AHIM', '$2y$10$3HvFrY0jqwzsMaH/DbXj3eng.xxzCkgViRuOmU'),
(37, 'Rubens TI', 363, 485, 20, NULL, 37, 1, 1, 1, '5DK1L4A@', '$2y$10$XQLUycw2hpJZD3hrHY4N1u4xUMehEBHe.7CQ9R');

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
-- Estrutura da tabela `status_solicitacao`
--

CREATE TABLE `status_solicitacao` (
  `ID_STATUS_SOLICITACAO` int(11) NOT NULL,
  `DESC_STATUS_SOLICITACAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status_solicitacao`
--

INSERT INTO `status_solicitacao` (`ID_STATUS_SOLICITACAO`, `DESC_STATUS_SOLICITACAO`) VALUES
(1, 'ANALISE'),
(2, 'EM CRIAÇÃO'),
(3, 'PRONTO');

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
(355, '11974429899', 2, 1, 1, 1, 1, '$2y$10$3IqzUI0jRjaOY0/4zYjYSuCZ4vuQbXfRFH5O/j'),
(356, '11995723458', 2, 1, 1, 1, 1, '$2y$10$M206bx.vu7.BUCk0NHyxbOW9Nw93IpyRI3W1CO'),
(357, '11996593658', 2, 1, 1, 1, 1, '$2y$10$g9IY9qBiNOpkFvGtughcI.BGV8oULLheQUheal'),
(358, '11972774738', 2, 1, 1, 1, 1, '$2y$10$NUManXkYpap1w7SnSGUrIO6nybtc2eFBWbYy2z'),
(359, '11999623658', 2, 1, 1, 1, 1, '$2y$10$iwiFY742bZCSmkqbSwsBsO82eEJVa0KLxe7t6T'),
(360, '11942950658', 2, 1, 1, 1, 1, '$2y$10$IPA35H3T/9WPKw4NSme6kuInNS3aLPDJ8KaX5t'),
(361, '1203', 2, 1, 1, 1, 1, '$2y$10$vSR5x5kQt8HNanW3XiI9J.qGU7LbcZECO2RJVY'),
(362, '1244', 2, 1, 1, 1, 1, '$2y$10$SR1vRv7G40Nmb4sV7Jv67eZPYxSej9jvcFLPdw'),
(363, '1245', 2, 1, 1, 1, 1, '$2y$10$G4rv5tCo5wWnAvbriyIwt.gYnxyDzO8FMgLGOX'),
(364, '1287', 2, 1, 1, 1, 1, '$2y$10$Eek1rWfPzcLkX5kSUvKb4.PsXaRTuVc0Lh32RZ'),
(365, '1302', 2, 1, 3, 1, 1, '$2y$10$QxDw331c/66V7jAu2k10VOfLywBxIaOYfvPULU'),
(366, '1208', 2, 1, 1, 1, 2, '$2y$10$fGLa55hN3qQreYu/dS2emud7jsWnvL7x7MOQCJ'),
(367, '1211', 2, 1, 1, 1, 3, '$2y$10$Ey865xg6fRVyqlRZD19Ly.0FcZ4pd0n7C9jyba'),
(368, '1220', 2, 1, 1, 1, 3, '$2y$10$3f3nhiWnXLq4mUhUk69t7uQ86OgcUatd3voK8I'),
(369, '1227', 2, 1, 1, 1, 3, '$2y$10$oOY5XeHYIIMUyW1B1AJsEekC5pbZNCAD.Tz.pe'),
(370, '1238', 2, 1, 1, 1, 3, '$2y$10$qQ3wD6HvANN.bAmSOfun3.XFkZ1.Fe8c9lbS45'),
(371, '1253', 2, 1, 1, 1, 3, '$2y$10$wKo3dBHF2CtXpQzz/ZM4LOtyvQtuudB1.QUYvX'),
(372, '1222', 2, 1, 1, 1, 4, '$2y$10$sODj.mA40Je4igJg2wCPXOkx1iUcf6T0N9OXiR'),
(373, '1228', 2, 1, 1, 1, 4, '$2y$10$pJJFsLIJyD/s33AuODUMqOl12rAZnyySCh6qPb'),
(374, '1241', 2, 1, 1, 1, 4, '$2y$10$6SmaFCwTmcsW4qofWiKTLebvFNXaEa4Zw0wptI'),
(375, '1242', 2, 1, 1, 1, 4, '$2y$10$S6IeEClKFURBYX/Et5Kb5Oj0lYf0.h.7Z4Sv8a'),
(376, '1252', 2, 1, 1, 1, 4, '$2y$10$yq.aPMFaDgB6cuoASXJjZ.N05TfkmElIn8MFxV'),
(377, '1254', 2, 1, 1, 1, 4, '$2y$10$b.PDWWQ0osuUWIhoInXtg.oNGcQgYAuXRGx2w9'),
(378, '1291', 2, 1, 1, 1, 4, '$2y$10$ZuRkZUvFamAjMqRvGc9.Ne8HnzF7cGvvFWIFqr'),
(379, '1294', 2, 1, 1, 1, 4, '$2y$10$vNrlnZKTffIFZ/MJx1/13uVS2CnknQJLVI.zk9'),
(380, '1216', 2, 1, 1, 1, 5, '$2y$10$Oynnau2I1U3sA0CIjnrpNumlLSKXPLZ8PtXDyr'),
(381, '1221', 2, 1, 1, 1, 5, '$2y$10$MB.I8ADEGi4SaxJrNCl0GuUvq0r71zlXUEBVik'),
(382, '1260', 2, 1, 1, 1, 5, '$2y$10$tK57vx4A.RYPvP.ko1NQpOBZSs7/XJdEiyT/HC'),
(383, '1303', 2, 1, 3, 1, 5, '$2y$10$XxFLlC7qvPC4xCQcj9F7K.x7EDCWHPzo4OAZU9'),
(384, '2237', 2, 1, 2, 1, 5, '$2y$10$5YqOG08MOzm4c1y89G5zaOF/XyDcoLCa9nU3d1'),
(385, '4235', 2, 1, 4, 1, 5, '$2y$10$6uYPPmNcE3AUgcFhULeIwuZAojEeNeroAq0lkx'),
(386, '11974509578', 2, 1, 1, 1, 5, '$2y$10$kqCGG.ovTxO555OgxzVcxOkZwv.UtKEsQUZ4MF'),
(387, '11975693289', 2, 1, 1, 1, 5, '$2y$10$4vgUZuZCALH/9MeRA3YKlObuymRyu/zIQ2g2t2'),
(388, '11998019965', 2, 1, 1, 1, 5, '$2y$10$nQOdzV3TTz9ymCRtmvr1OuAxjSRIpjOxmckx56'),
(389, '1210', 2, 1, 1, 1, 6, '$2y$10$UniVErYPU1IY1bZ0cAs1YeU1bWlUB7AVEhcWxi'),
(390, '2232', 2, 1, 2, 1, 6, '$2y$10$O0.h55GafFpmj.LlH1r/BOzOicu8L/5A2W/4T9'),
(391, '3018', 2, 1, 3, 1, 6, '$2y$10$GEid5h62vMz0vfx56HMvCOvpPEWNrdb1t.rFmn'),
(392, '4236', 2, 1, 4, 1, 6, '$2y$10$Z9N3NvIUJUHwrgZteqHQ.OtPaIBshzyD94naHW'),
(393, '1218', 2, 1, 1, 1, 7, '$2y$10$DJYu8xMMAfZ2zqUXnbc25upEDX1zaT9mNYrKYd'),
(394, '1259', 2, 1, 1, 1, 7, '$2y$10$7ohqS.YLZR6lxgJSY4Lq2u4loHGj3.PY/VAV5n'),
(395, '1202', 2, 1, 1, 1, 8, '$2y$10$s3fPzC628dEpk6vGNVAuZ.s5JM76laEVj2K.N.'),
(396, '1219', 2, 1, 1, 1, 8, '$2y$10$Fz1LWbCRKtAxTuzvajQI6.xdayu/WB6Bpxe89T'),
(397, '1295', 2, 1, 1, 1, 8, '$2y$10$6K8DnvbKZJS/Ecs4NaH6CuQSPJOg0a6EDn6cWU'),
(398, '2213', 2, 1, 2, 1, 8, '$2y$10$IAKzWcMBc8CBiCR7DeiDa.vP7c9kmtLLZwVdbL'),
(399, '3017', 2, 1, 3, 1, 8, '$2y$10$gkaWH94dxkiDWUDRCThhle201U.gOMlKK0Nlps'),
(400, '4221', 2, 1, 4, 1, 8, '$2y$10$Sqtf/hXg1uCmplHZqsTcNOMZjcHNcSByDzRjGm'),
(401, '4239', 2, 1, 4, 1, 8, '$2y$10$/W781P.l0Nx02183INAC4ugE2mC0cA1d4ubkCi'),
(402, '11956496247', 2, 1, 2, 1, 8, '$2y$10$/nrEFKdHpxnqJpnz96iFMu1oE7OHuA4f9SjmBJ'),
(403, '11942893382', 2, 1, 1, 1, 8, '$2y$10$fjPwjXFC/5yXKlQZDRx/o.5oOxbVZLH5qgfHB3'),
(404, '1209', 2, 1, 1, 1, 9, '$2y$10$6jR7Lk3NrGJgxtxhzVq1FOlCh0h3cYhoW6h8XQ'),
(405, '1224', 2, 1, 1, 1, 9, '$2y$10$L8t4HQPCriSwzqSGXZmBdOocFz7mpwgwBl00IR'),
(406, '1226', 2, 1, 1, 1, 9, '$2y$10$6ZBCoQuTCy8ja63g1wmZUOeYEyzowsenRFDl1/'),
(407, '1237', 2, 1, 1, 1, 9, '$2y$10$akKVCuw52qCR5EPlgyzhIeNweD/llo/.qO5z//'),
(408, '1292', 2, 1, 1, 1, 9, '$2y$10$hDMS70jK07XwynKt46xbhe8s/pKT/Ly2HQD15F'),
(409, '1293', 2, 1, 1, 1, 9, '$2y$10$0S4eyY2/vb0ofPxZS.W1buFk0Q2xJtFsAFui8W'),
(410, '1307', 2, 1, 3, 1, 9, '$2y$10$D7SsGSzBxTJCLG1LfWN0C.HjSO1Tht7I0MXNW3'),
(411, '4230', 2, 1, 4, 1, 9, '$2y$10$i6ZsEviD77l/0z1yU0TwXuzs6iWIpc8AY9XC7c'),
(412, '15998457568', 2, 1, 1, 1, 9, '$2y$10$Z89DfxGAYzSdPosxdKDfO.FXUFXvK2H7w68SNW'),
(413, '11971869339', 2, 1, 1, 1, 9, '$2y$10$dpcbeUZoFQ49x3dN3bI95ejRJKEpeYVFQcfQNT'),
(414, '1212', 2, 1, 1, 1, 10, '$2y$10$tAmHMDUoSgan2YRB1JPL9eG0W9B9nvqNdtjLiv'),
(415, '1235', 2, 1, 1, 1, 10, '$2y$10$9E/6lqD5C7cDL0QIA8EyYeMTogs5/.lmh7wI8g'),
(416, '1243', 2, 1, 1, 1, 10, '$2y$10$P9nWvfvnfoUJDgG.rIxneO2FguSFWft78XXSuh'),
(417, '2219', 2, 1, 2, 1, 10, '$2y$10$CsEdxlRkztECJeUakC1EiOOb6CUlViUMKBg97e'),
(418, '4234', 2, 1, 4, 1, 10, '$2y$10$2O3WIQVkiYlR0L4.kMhhbO3R4TaFqlKNOdexFL'),
(419, '1223', 2, 1, 1, 1, 11, '$2y$10$5SrQL5cw4fMtHkMtvfLsdOoc0REd6XrdudVVd9'),
(420, '1232', 2, 1, 1, 1, 11, '$2y$10$rICJg9x2uV/5IN/vpNmIZO/YKaL72BJlwcwWo4'),
(421, '1204', 2, 1, 1, 1, 12, '$2y$10$mm.ajypBubfvRMz7DuxNTOHtp2XFkYf9h8p2es'),
(422, '1225', 2, 1, 1, 1, 12, '$2y$10$Ug2SGv/vyNDz9mcZbyEqXui/ceVL.TFgx2Zlny'),
(423, '1240', 2, 1, 1, 1, 12, '$2y$10$2.mtozrnIupxUSFZOjQ/2e.wmmBFGo9wBoxmy1'),
(424, '4233', 2, 1, 4, 1, 12, '$2y$10$9M2kIq1sPH4j39m5b6p32OvHDNA0FShJGYWhbN'),
(425, '11942194098', 2, 1, 1, 1, 13, '$2y$10$KiciRjUnUBa2GjTF7vh2IOal2JZbZMgPB4Ez05'),
(426, '11998724498', 2, 1, 1, 1, 13, '$2y$10$YY1.ulH0FBlkWYG4jt3iee72/EtBd.G6unwbr.'),
(427, '11973114977', 2, 1, 1, 1, 13, '$2y$10$ZN5GGXpJWTfU3Z.HosHPn.q.b/UdzQgremELQD'),
(428, '11944544978', 2, 1, 1, 1, 13, '$2y$10$UJEbVg5A4N8CLFm5uy5H2usmcYViKt13KobIsd'),
(429, '1231', 2, 1, 1, 1, 13, '$2y$10$iGhVifbQRMj5qFV0cDIKUeDeCGxjM1T7G4IAfv'),
(430, '2212', 2, 1, 2, 1, 13, '$2y$10$71q8N/QGzZMs9C4gT/ponuU.9nAg15MlfKTEIS'),
(431, '3012', 2, 1, 3, 1, 13, '$2y$10$NFRCyOYWNkuz/oKdygLrjudffmf5rQllNoIKl3'),
(432, '4240', 2, 1, 4, 1, 13, '$2y$10$aM39FdDkQV6CtJMq.RX42u4oQgxMqi6PvXd7PM'),
(433, '11942823218', 2, 1, 1, 1, 13, '$2y$10$acpIArRaFNmmocAwd7htLO6mpNp0QClgrhSBh6'),
(434, '15998473951', 2, 1, 4, 1, 13, '$2y$10$0RnTKns3sV6w9o3hO1aLgupAOjnDH8ChaAARbh'),
(435, '1233', 2, 1, 1, 1, 14, '$2y$10$D0TYu9xPdjr5.2OBH0MDBuWhgxIROOciTg5Xhu'),
(436, '1248', 2, 1, 1, 1, 14, '$2y$10$BN2sPbVsk.BRPkOQqGNChewf6oO4A.EZzxhrPj'),
(437, '1249', 2, 1, 1, 1, 14, '$2y$10$3gtbRhrUbwe0ZbvYr8pmUusauHlc8EFX7it4YB'),
(438, '1266', 2, 1, 1, 1, 14, '$2y$10$6KKIKslM4c.IDcZ88v97duesLF0UMrZYIYlUk5'),
(439, '11996209178', 2, 1, 1, 1, 14, '$2y$10$jDzLElCC.G0z12tzdk43uOlAqWLXWniAya8KuZ'),
(440, '11957696385', 2, 1, 1, 1, 14, '$2y$10$jGho6pYS9TZ28ZgpRLAz3.tl5PWNStbRs3PiX1'),
(441, '11995876785', 2, 1, 1, 1, 14, '$2y$10$.5bmzzsGSqdnodiN1CeUoe/EVq7PRuUVpdOjtx'),
(442, '1234', 2, 1, 1, 1, 15, '$2y$10$i8JQ7HWgZJTP4bcTDsKJ5OrN2Ca/dWjLYNDEFw'),
(443, '1236', 2, 1, 1, 1, 15, '$2y$10$wBGMescoLRaOsHCBRjuBTeEh4GBc17CucK6ztD'),
(444, '1251', 2, 1, 1, 1, 15, '$2y$10$mCdxCiFwIqj9dVojQ72uteijFayRKLHqamwWZz'),
(445, '1265', 2, 1, 1, 1, 15, '$2y$10$0W.kQfPwDIFs6ku2DUAKsO6SNC8V1A3xme.M49'),
(446, '11998812497', 2, 1, 1, 1, 15, '$2y$10$6lOr9eEvOlC0qR3MMrB7U./r88AwFKcY9Y5Pvm'),
(447, '11998301177', 2, 1, 1, 1, 15, '$2y$10$XAeXij9.CvDJLNRDh1Z0O.Tc/4qJNY0m5KqRus'),
(448, '11997919097', 2, 1, 1, 1, 15, '$2y$10$YuAFn/5.DmbofJ9rKvyS1u490IrULW9z8dTQk7'),
(449, '1268', 2, 1, 1, 1, 16, '$2y$10$1c7C0SGT1JNx4wmkh8t6Ged5JEDl4JTm79mtEY'),
(450, '11996633498', 2, 1, 1, 1, 16, '$2y$10$pRegcnmhPzJOpD6p0XDUaOja1I.CMgrAIKxX1d'),
(451, '2202', 2, 1, 2, 1, 17, '$2y$10$j/miIxeEfrEjSYw95ByIRe3j/HyrdI8HRAtbL.'),
(452, '2204', 2, 1, 2, 1, 17, '$2y$10$V1JJvAuKRJiyXvGejHoF4.kIBYmTymb3pa02Zq'),
(453, '11998806377', 2, 1, 2, 1, 17, '$2y$10$HtYXWl6zFcYQuSQUlOUEHOclhkd5WJM6weUtoM'),
(454, '2206', 2, 1, 2, 1, 18, '$2y$10$ERqJ0k.ZXcRbfnSVMgJeJurVUTv5JKpO9Qlu1D'),
(455, '2215', 2, 1, 2, 1, 18, '$2y$10$U3xSj5mpXloGAmOZtHurteq4PovWA4mqR2Q0uM'),
(456, '2234', 2, 1, 2, 1, 18, '$2y$10$SAl5gEoaMo8aI4RqfPpVhuGhrDNIyJFPbnCdXN'),
(457, '2258', 2, 1, 2, 1, 18, '$2y$10$clfbfPLo6b0DtyfBh1ZGXe9bDLZo.UcmQjHnlJ'),
(458, '1256', 2, 1, 1, 1, 20, '$2y$10$AgNRmlh96l.4zpi.Jk7PT.0/QBSDWw.m5MbnR/'),
(459, '1289', 2, 1, 1, 1, 20, '$2y$10$Yh526lCYB00TNFwWyP3uJeElVT25iUV0nPcPjk'),
(460, '1296', 2, 1, 1, 1, 20, '$2y$10$tc1nyeCOZ9ka2P91SGFUKuGch7LpcjHZvPITln'),
(461, '2245', 2, 1, 2, 1, 20, '$2y$10$1lCChEMNV/Q2IZuIeuB8f.9gWHlslZXZ4Lj13M'),
(462, '3014', 2, 1, 3, 1, 20, '$2y$10$5CKxKMQ5cmq.bnQnClfzJu8RFzUv/XcC0mSGIo'),
(463, '4226', 2, 1, 4, 1, 20, '$2y$10$LKdT5V0nbBL1ljL4ucpG8.D.X.Xdqco3Poc85a'),
(464, '1207', 2, 1, 1, 1, 22, '$2y$10$eCxm8NYUzSlp3ssl3Cgire7txACHIf1ZAJi7tj'),
(465, '1229', 2, 1, 1, 1, 22, '$2y$10$EgDW6DZ53uhP.d7wvRAHK.DNfG/ACf0bBUlzQZ'),
(466, '1239', 2, 1, 1, 1, 22, '$2y$10$frXtTqfH7NSyT65M8jlVee2tAtf.hftXU17ykv'),
(467, '1270', 2, 1, 1, 1, 22, '$2y$10$XjCRSWQ4WY2Pk8/fFhgDku9j8.o.CwLj/8vBNu'),
(468, '2242', 2, 1, 2, 1, 23, '$2y$10$V5uQEhXrnVpY3NrDVGB40eahU6HFR1u8xNbFcL'),
(469, '11997640015', 2, 1, 2, 1, 23, '$2y$10$iYppPP/f9XBgvGK2QqjsOu5RMFi90Ijzk1OYrZ'),
(470, '1246', 2, 1, 1, 1, 24, '$2y$10$bwc02sdtAlmK1TzxFZpZDOekCfk9itA7zu7ze.'),
(471, '2264', 2, 1, 2, 1, 24, '$2y$10$yXZOXtFPMSIUuLC8FNKO5eEM8RGDYOFo4Kw.Cw'),
(472, '3013', 2, 1, 3, 1, 24, '$2y$10$EJBK23hz65Qlr8rgUg1clOJx4fPyuL4xs1rfpT'),
(473, '4237', 2, 1, 4, 1, 24, '$2y$10$JOqwumcM9zDjB0/sdRs.SunluOFBr3egHzMGDD'),
(474, '2251', 2, 1, 2, 1, 25, '$2y$10$3XbWD4nxAbgeFosb8MFE2.5IQFGrmubPutOBat'),
(475, '2252', 2, 1, 2, 1, 25, '$2y$10$C2GfWrgemw9pHxZFN2uVcuPxzWXggraFpVhD8L'),
(476, '2255', 2, 1, 2, 1, 25, '$2y$10$CJqnDqfDMP/AnhGRCViIMumR5Uh8WgD/UwSscA'),
(477, '2259', 2, 1, 2, 1, 25, '$2y$10$9EsXg6Ocd.KtnbcKdDcuw.IOuOVPHN4Fiz/Wvb'),
(478, '2260', 2, 1, 2, 1, 25, '$2y$10$jRTOg1avYDDhkzcAtuNjBu.GxXlPD3/hX8HKW7'),
(479, '2261', 2, 1, 2, 1, 25, '$2y$10$RSrB1qm810VfyLeD8gMYIu5juLAbe9q9k1jUIt'),
(480, '2401', 2, 1, 2, 1, 25, '$2y$10$zNtef2mOKflXQGWEUUTlSO3XWwmePoMq/On24r'),
(481, '4223', 2, 1, 4, 1, 25, '$2y$10$PhWfQO./bxJK0spm7fup1uxdW97K.2.XpEunsR'),
(482, '4225', 2, 1, 4, 1, 25, '$2y$10$N7Wm/D7J4yI8Sly.WCKWHOzHBoLzYvqt8W/gxa'),
(483, '4232', 2, 1, 4, 1, 25, '$2y$10$G2kJfHfB1Vihb/14lSZUAuZHH8arVSeM9rA7Qw'),
(484, '4238', 2, 1, 4, 1, 25, '$2y$10$Y2L.VArjAY1R85d/yvxt4OVaRZhEkFykpTrHD/'),
(485, '4241', 2, 1, 4, 1, 25, '$2y$10$8gWXHTPpq0trUAlxnvWiiu2veFO5wPRRmx6ycJ'),
(486, '4242', 2, 1, 4, 1, 25, '$2y$10$mJGHPCZSyHKBOwyTkgeF6eA1vL6u9Fm8cM5XVz'),
(487, '1261', 2, 1, 1, 1, 26, '$2y$10$DzRzb4vYlSK2o4LWWjSn.eX55dN67uhfGK6ac5'),
(488, '4220', 2, 1, 4, 1, 27, '$2y$10$/3FRbHlZt2OwdIPwFbm3buclgv.f81Vtj/2Yfg'),
(489, '4222', 2, 1, 4, 1, 27, '$2y$10$CYM0hYHJ5687U2t5us738uoEDlXtayCzkNDGxe'),
(490, '4224', 2, 1, 4, 1, 27, '$2y$10$t8EnNY.aDiQg3DwRC.yH7e4yg6upmcfHyyA44L'),
(491, '4227', 2, 1, 4, 1, 27, '$2y$10$yehIXaHjPX6Ye3co1RBvou5tXUlYO8D3j6rlJq'),
(492, '4228', 2, 1, 4, 1, 28, '$2y$10$8rESflMwGgJIU4j42J6LfuT79ut5108YNqTD5f'),
(493, '5021', 2, 1, 6, 1, 29, '$2y$10$WBHm3C5N7nAJSEAA59.JxO1CpAqa3pDUzkBguk'),
(494, '5022', 2, 1, 6, 1, 29, '$2y$10$2ybWnmKX1AvN5fPuxfvq.eOH.maqoseyTnBYhe'),
(495, '5023', 2, 1, 6, 1, 29, '$2y$10$yM3SfLYf.e4Uz9sZv0nCEuigDnfkQIw..RLq9a'),
(496, '5024', 2, 1, 6, 1, 29, '$2y$10$opKlJQKVL.4DIsb9mwwF7OZq0.Z6mvlE1OzG5v'),
(497, '5029', 2, 1, 6, 1, 29, '$2y$10$Yv2t1Q3Hy7NqxTQanNQlduZk4HuuB8tY/IIU/w'),
(498, '5031', 2, 1, 6, 1, 29, '$2y$10$RMPnLCPgDjZxlRQ4KUTms.3pIIdqyG8uGG8MFc'),
(499, '5032', 2, 1, 7, 1, 29, '$2y$10$T8I/p9jzRibJSzzfO2BJ/OH0604Kxg.gu4dwpT'),
(500, '5033', 2, 1, 8, 1, 29, '$2y$10$lX.Klea9P7zB.E4M5Mz8Au.XZ3jZDCp7LIkl7j'),
(501, '5026', 2, 1, 6, 1, 30, '$2y$10$.I0Hz7nDP/g5ss/lQ.tFIeoDeXKB08X0t50VFZ'),
(502, '5027', 2, 1, 6, 1, 30, '$2y$10$A.U7wbkNMF0b7Eivvej1QuKadqXSBmHYEO9Lrx'),
(503, '5028', 2, 1, 7, 1, 31, '$2y$10$4cbk.XmZU1MdauFp50nl7eZShLOMZZN5JSSFCQ'),
(504, '5030', 2, 1, 6, 1, 32, '$2y$10$hD1PgUMJlx/qRSj/yeyt3uocmVrHViuti5ecAJ'),
(505, '1215', 2, 1, 1, 1, 33, '$2y$10$rdVlCKdS0Khcl5hIjY/VGe8tn.8DS4LDYeDeik'),
(506, '1230', 2, 1, 1, 1, 34, '$2y$10$5OIA8WIo0JqRkD0byeQv4Oo1f1tbjuhVsZO2w3'),
(507, '1305', 2, 1, 3, 1, 35, '$2y$10$5J5kuIP7Pw00QxWN5rejtuWkkdkaq0KDxf4A9E'),
(508, '2240', 2, 1, 2, 1, 35, '$2y$10$CY7zb4bylAaC93QKWL9JtO81rQ88Y74y/OmGkm'),
(509, '2241', 2, 1, 2, 1, 36, '$2y$10$33Jr47mu0uReoLZiqXLHZuJCV2eI1I2CHHLtfd'),
(510, '11975952825', 2, 1, 1, 1, 36, '$2y$10$SCeMU7DMDF4pCMQBCVNNG.WkjJGin5YGhKjEmT'),
(511, '1258', 2, 1, 1, 1, 37, '$2y$10$0qEoKHGQ5GcfzViTSKgnPenGRZs85NRhOQ3RSy'),
(512, '2227', 2, 1, 2, 1, 37, '$2y$10$L6wnMwUVSAJcJs6Snyo3luSi26dAsIGfqsp9aH'),
(513, '1257', 2, 1, 1, 1, 38, '$2y$10$P5t4Spx8W6eijWPYvQyh/.kLfyRJlaiqvYn701'),
(514, '1255', 2, 1, 1, 1, 39, '$2y$10$/QzF196VuJUbdR146URC/e6nsR1klr.EDBgZjb'),
(515, '2223', 2, 1, 2, 1, 39, '$2y$10$boSqPDpjThszEvl/F4tFc.SYfyX99Bk43UZWTW'),
(516, '11997254025', 2, 1, 1, 1, 39, '$2y$10$yKEYfCeEeTDaKA83THmyhOzhVhTjhXkA92aJo8'),
(517, '1290', 2, 1, 1, 1, 40, '$2y$10$hkBCKLPOkSxovWAxgtMHJObFbb3nlr8s5kaHWu'),
(518, '1301', 2, 1, 3, 1, 41, '$2y$10$36U.4VAVlvsiYQ1Hz8Bwh.A5NiaQmdUIXdkQFL'),
(519, '11997605777', 2, 1, 1, 1, 41, '$2y$10$KTQYLQMyM2FHf5O9sjJGPOye35yNYYwatxq0tb'),
(520, '11975615456', 2, 1, 1, 1, 41, '$2y$10$UJ9N6hSATdu4ktNeiieC7utjRxJUtGi7OwxbJU'),
(521, '1306', 2, 1, 3, 1, 42, '$2y$10$JdK40umnQ2Bep3LLVCsvF.BcQKEfErPyBPxpnx'),
(522, '11973713258', 2, 1, 1, 1, 42, '$2y$10$bDwKjzxGRxxMlVKqNx66Fud5D4BonONBIPwmpz'),
(523, '2207', 2, 1, 2, 1, 43, '$2y$10$zmQMsgzCy09.aFQm3Jhu1eTtKNU4WN9PHVGHJq'),
(524, '2244', 2, 1, 2, 1, 43, '$2y$10$AUgkCK1rqe3Q8gyU9pnarO0nvcnzr3ALJvE7Kr'),
(525, '2216', 2, 1, 2, 1, 44, '$2y$10$mGXJ2GR4Onh0eZ0juIAQCuqh.MRhaOk9q/zBOJ'),
(526, '2218', 2, 1, 2, 1, 44, '$2y$10$5HoEwjd3mI6SRuJ3OLpyqeH9rAIAVa1sHOEJts'),
(527, '2225', 2, 1, 2, 1, 44, '$2y$10$/0JeUW0piRnJWdhBFbQHb.8Zi5C.5BNTXOGRN7'),
(528, '2226', 2, 1, 2, 1, 44, '$2y$10$H7bHgbNHTG3yB.zH8IVkAuTXYfKWX0EMGOz5uU'),
(529, '1267', 2, 1, 1, 1, 45, '$2y$10$bfAHH1MHvELg3LWARXcm..6dFrKNbstFy/KMxI'),
(530, '1264', 2, 1, 1, 1, 46, '$2y$10$Et/ieqBYj4Hcxvf8yONdAOxz60NFKBsECCT00M'),
(531, '2217', 2, 1, 2, 1, 47, '$2y$10$cXPKgbtp1lfH5AqS01W0/O0B6uRMI26zYjafS7'),
(532, '1205', 2, 1, 1, 1, 1, '$2y$10$fchfdovH9UV./Sw5atHzfebeQXDO9KGDicO0oJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_usuario`
--

CREATE TABLE `telefone_usuario` (
  `ID_TELEFONE_USUARIO` int(11) NOT NULL,
  `ID_TELEFONE` int(11) DEFAULT NULL,
  `ID_TELEFONE_RAMAL` int(11) DEFAULT NULL,
  `ID_STATUS_VISUALIZACAO` int(11) DEFAULT NULL,
  `ID_NOME_AGENDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefone_usuario`
--

INSERT INTO `telefone_usuario` (`ID_TELEFONE_USUARIO`, `ID_TELEFONE`, `ID_TELEFONE_RAMAL`, `ID_STATUS_VISUALIZACAO`, `ID_NOME_AGENDA`) VALUES
(48, NULL, 532, 1, 34),
(49, 357, 361, 1, 35),
(50, 358, 363, 1, 36),
(51, 359, 365, 1, 37),
(52, NULL, 362, 1, 38),
(53, NULL, 373, 1, 39),
(54, NULL, 374, 1, 40),
(55, NULL, 378, 1, 41),
(56, NULL, 379, 1, 42),
(57, NULL, 375, 1, 43),
(58, NULL, 376, 1, 44),
(59, NULL, 377, 1, 45),
(60, NULL, 394, 1, 46),
(61, NULL, 393, 1, 47),
(62, NULL, 507, 1, 48),
(63, NULL, 508, 1, 49),
(64, NULL, 383, 1, 50),
(65, NULL, 380, 1, 52),
(66, NULL, 384, 1, 53),
(67, NULL, 382, 1, 54),
(68, NULL, 477, 1, 55),
(69, NULL, 479, 1, 56),
(70, NULL, 478, 1, 57),
(71, NULL, 482, 1, 58),
(72, NULL, 369, 1, 59),
(73, NULL, 367, 1, 60),
(74, NULL, 370, 1, 61),
(75, NULL, 371, 1, 62),
(76, NULL, 368, 1, 63),
(77, NULL, 435, 1, 64),
(78, NULL, 438, 1, 65),
(79, NULL, 436, 1, 66),
(80, NULL, 437, 1, 67),
(81, NULL, 407, 1, 68),
(82, NULL, 409, 1, 69),
(83, NULL, 408, 1, 70),
(84, NULL, 406, 1, 71),
(85, NULL, 404, 1, 72),
(86, NULL, 397, 1, 73),
(87, NULL, 464, 1, 74),
(88, NULL, 465, 1, 75),
(89, NULL, 467, 1, 76),
(90, NULL, 513, 1, 77),
(91, NULL, 444, 1, 78),
(92, NULL, 442, 1, 79),
(93, NULL, 445, 1, 80),
(94, NULL, 443, 1, 81),
(95, NULL, 459, 1, 82),
(96, NULL, 460, 1, 83),
(97, NULL, 461, 1, 84),
(98, NULL, 462, 1, 85),
(99, NULL, 364, 1, 86),
(100, NULL, 495, 1, 87);

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
(2, 'BOLETIM'),
(3, 'COMUNICADOS E AVISOS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_solicitacao`
--

CREATE TABLE `tipo_solicitacao` (
  `ID_TIPO_SOLICITACAO` int(11) NOT NULL,
  `DESC_TIPO_SOLICITACAO` varchar(45) DEFAULT NULL,
  `PRIVATE_KEY_TIPO_SOLICITACAO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_solicitacao`
--

INSERT INTO `tipo_solicitacao` (`ID_TIPO_SOLICITACAO`, `DESC_TIPO_SOLICITACAO`, `PRIVATE_KEY_TIPO_SOLICITACAO`) VALUES
(1, 'Elaboração de Arte', '$ghsRcf2%8452&!ksa@'),
(2, 'Inclusão de dados no site institucional', '$gGsRcf2%84g2&!ksa*'),
(3, 'Elaboração de Comunicado Interno', '$khsRcf2%8482&!ksas'),
(4, 'Elaboração de assinatura de e-mail', '$ThsRcf2%8252&!ksar'),
(5, 'Diversos', '$WpsRcf2%8252&!IrG');

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
(5, 'PLANTONISTA'),
(6, 'MOTORISTA ADMINISTRATIVO'),
(7, 'ANALISTA DE SUPORTE'),
(8, 'ANALISTA JR');

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
(5, 'José Rubens Ferreira', 485, 1, '88845@Guyga!s54&97*&$652'),
(6, 'Marketing', 522, 17, '6845@Guyga!s54&97*&$654'),
(7, 'Recursos Humanos BB', 571, 5, '4545@Guyga!s54&97*&$657');

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
(69, 2, 35, 2, 'requisitos: CNH, Técnico Eletrônica e conhecimentos em Excel', 50),
(70, 2, 1, 3, 'gdggtggrtgfg......', 51),
(71, 3, 22, 2, '1.ksadsadpad\n2.dasdkasddd\n3.dijashddda', NULL),
(72, 3, 22, 2, '2.Tgwihdasjidsd', NULL),
(73, 2, 6, 5, '1.Ptegvghsas', 52),
(74, 3, 1, 7, 'Conhecimentos em informática básica.', NULL),
(75, 2, 1, 7, 'Testehdajisdhsjada', NULL),
(76, 3, 1, 8, '1.\n2.', NULL);

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
-- Índices para tabela `alerta_maquina`
--
ALTER TABLE `alerta_maquina`
  ADD PRIMARY KEY (`ID_ALERTA_MAQUINA`),
  ADD KEY `KEY_ID_MAQUINA_ALERTA_idx` (`ID_MAQUINA_ALERTA`),
  ADD KEY `KEY_ID_COMUNICACAO_ALERTA_idx` (`ID_COMUNICACAO_ALERTA`);

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
-- Índices para tabela `detalhe_solicitacao`
--
ALTER TABLE `detalhe_solicitacao`
  ADD PRIMARY KEY (`ID_DETALHE_SOLICITACAO`);

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
-- Índices para tabela `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`ID_MAQUINA`);

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
-- Índices para tabela `solicitacao_marketing`
--
ALTER TABLE `solicitacao_marketing`
  ADD PRIMARY KEY (`ID_SOLICITACAO_MARKETING`),
  ADD KEY `KEY_ID_TIPO_SOLICITACAO_idx` (`ID_TIPO_SOLICITACAO`),
  ADD KEY `KEY_ID_TELEFONE_SOLICITACAO_idx` (`ID_TELEFONE_SOLICITACAO`),
  ADD KEY `KEY_ID_EMAIL_SOLICITACAO_idx` (`ID_EMAIL_SOLICITACAO`),
  ADD KEY `KEY_ID_ANEXO_SOLICITACAO_idx` (`ID_ANEXO_ENV_SOLICITANTE`),
  ADD KEY `KEY_ID_DETALHE_SOLICITACAO_idx` (`ID_DETALHE_SOLICITACAO`),
  ADD KEY `KEY_ID_STATUS_SOLICITACAO_MK_idx` (`ID_STATUS_SOLICITACAO`),
  ADD KEY `KEY_ID_SETOR_SOLICITACAO_idx` (`ID_SETOR_SOLICITANTE`),
  ADD KEY `KEY_ID_ANEXO_ENV_POR_MK_idx` (`ID_ANEXO_ENV_POR_MARK`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`IDSTATUS`);

--
-- Índices para tabela `status_solicitacao`
--
ALTER TABLE `status_solicitacao`
  ADD PRIMARY KEY (`ID_STATUS_SOLICITACAO`);

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
-- Índices para tabela `tipo_solicitacao`
--
ALTER TABLE `tipo_solicitacao`
  ADD PRIMARY KEY (`ID_TIPO_SOLICITACAO`);

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
  MODIFY `ID_AGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de tabela `alerta_maquina`
--
ALTER TABLE `alerta_maquina`
  MODIFY `ID_ALERTA_MAQUINA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=860;

--
-- AUTO_INCREMENT de tabela `anexo`
--
ALTER TABLE `anexo`
  MODIFY `ID_ANEXO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `ID_CANDIDATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `comunicacao`
--
ALTER TABLE `comunicacao`
  MODIFY `ID_COMUNICACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT de tabela `detalhe_solicitacao`
--
ALTER TABLE `detalhe_solicitacao`
  MODIFY `ID_DETALHE_SOLICITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `email`
--
ALTER TABLE `email`
  MODIFY `ID_EMAIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT de tabela `email_enviados`
--
ALTER TABLE `email_enviados`
  MODIFY `ID_EMAIL_ENVIADOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_EMPRESA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `garagem`
--
ALTER TABLE `garagem`
  MODIFY `ID_GARAGEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `ID_IMAGEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `ID_LOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `maquina`
--
ALTER TABLE `maquina`
  MODIFY `ID_MAQUINA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
  MODIFY `ID_NOME_AGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

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
  MODIFY `ID_SETOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `solicitacao_marketing`
--
ALTER TABLE `solicitacao_marketing`
  MODIFY `ID_SOLICITACAO_MARKETING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `IDSTATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `status_solicitacao`
--
ALTER TABLE `status_solicitacao`
  MODIFY `ID_STATUS_SOLICITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `status_visualizacao`
--
ALTER TABLE `status_visualizacao`
  MODIFY `ID_STATUS_VISUALIZACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `ID_TELEFONE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=533;

--
-- AUTO_INCREMENT de tabela `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  MODIFY `ID_TELEFONE_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `tipo_comunicacao`
--
ALTER TABLE `tipo_comunicacao`
  MODIFY `ID_TIPO_COMUNICACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tipo_solicitacao`
--
ALTER TABLE `tipo_solicitacao`
  MODIFY `ID_TIPO_SOLICITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tipo_telefone`
--
ALTER TABLE `tipo_telefone`
  MODIFY `ID_TIPO_TELEFONE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tipo_vaga`
--
ALTER TABLE `tipo_vaga`
  MODIFY `ID_TIPO_VAGA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vagas_emprego`
--
ALTER TABLE `vagas_emprego`
  MODIFY `ID_VAGAS_EMPREGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `KEY_ID_NOME_AGENDA` FOREIGN KEY (`ID_NOME_AGENDA`) REFERENCES `nome_agenda` (`ID_NOME_AGENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_SETOR_AGENDA` FOREIGN KEY (`ID_SETOR`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_VISUA_AGENDA` FOREIGN KEY (`ID_STATUS_VISUALIZACAO`) REFERENCES `status_visualizacao` (`ID_STATUS_VISUALIZACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TELEFONE_USUARIO_AGEN` FOREIGN KEY (`ID_TELEFONE_USUARIO`) REFERENCES `telefone_usuario` (`ID_TELEFONE_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `alerta_maquina`
--
ALTER TABLE `alerta_maquina`
  ADD CONSTRAINT `KEY_ID_COMUNICACAO_ALERTA` FOREIGN KEY (`ID_COMUNICACAO_ALERTA`) REFERENCES `comunicacao` (`ID_COMUNICACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_MAQUINA_ALERTA` FOREIGN KEY (`ID_MAQUINA_ALERTA`) REFERENCES `maquina` (`ID_MAQUINA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Limitadores para a tabela `solicitacao_marketing`
--
ALTER TABLE `solicitacao_marketing`
  ADD CONSTRAINT `KEY_ID_ANEXO_ENV_POR_MK` FOREIGN KEY (`ID_ANEXO_ENV_POR_MARK`) REFERENCES `anexo` (`ID_ANEXO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_ANEXO_SOLICITACAO` FOREIGN KEY (`ID_ANEXO_ENV_SOLICITANTE`) REFERENCES `anexo` (`ID_ANEXO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_DETALHE_SOLICITACAO` FOREIGN KEY (`ID_DETALHE_SOLICITACAO`) REFERENCES `detalhe_solicitacao` (`ID_DETALHE_SOLICITACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_EMAIL_SOLICITACAO` FOREIGN KEY (`ID_EMAIL_SOLICITACAO`) REFERENCES `email` (`ID_EMAIL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_SETOR_SOLICITACAO` FOREIGN KEY (`ID_SETOR_SOLICITANTE`) REFERENCES `setor` (`ID_SETOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_STATUS_SOLICITACAO_MK` FOREIGN KEY (`ID_STATUS_SOLICITACAO`) REFERENCES `status_solicitacao` (`ID_STATUS_SOLICITACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TELEFONE_SOLICITACAO` FOREIGN KEY (`ID_TELEFONE_SOLICITACAO`) REFERENCES `telefone` (`ID_TELEFONE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `KEY_ID_TIPO_SOLICITACAO` FOREIGN KEY (`ID_TIPO_SOLICITACAO`) REFERENCES `tipo_solicitacao` (`ID_TIPO_SOLICITACAO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `MUDAR_STATUS_COMUNICACAO` ON SCHEDULE EVERY 30 SECOND STARTS '2022-07-26 13:40:06' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE comunicacao c SET c.ID_STATUS_COM = 2 WHERE c.HORA_EXPIRAR_COM <= CURTIME() AND c.DATA_EXPIRAR_COM <= CURDATE()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
