-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2017 às 01:06
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logcbd`
--
CREATE DATABASE IF NOT EXISTS `logcbd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `logcbd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medalhas`
--

CREATE TABLE `medalhas` (
  `user_id` int(11) NOT NULL,
  `med_nome` varchar(255) NOT NULL,
  `med_valor` int(11) NOT NULL,
  `med_material` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexo` varchar(16) NOT NULL,
  `idade` int(16) NOT NULL,
  `about` longtext NOT NULL,
  `userkey` varchar(255) NOT NULL,
  `register` bigint(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `mail`, `password`, `sexo`, `idade`, `about`, `userkey`, `register`, `status`) VALUES
(13, 'Lucas', 'lucas0cefet@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 17, ' ', '9707fb6bbd587d9b5073f72c2d1e09c8e31eefac', 1481842511, 1),
(14, 'Pietro', 'pietropietro@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', 'M', 33, ' ', '29a2431f9e068bbda5ead727cb48ae08625ba06c', 1481843097, 1),
(15, 'Lucas', 'lucas@logicando.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 18, ' ', '0b5782faaa8b6cede331b5a6294debd2da0ef6b3', 1485786586, 1),
(16, 'Pedro', 'pedro@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 13, ' ', '439b34cdb241d33ba4824b2307583c266ba4669f', 1485820793, 1),
(17, 'Pietra', 'pietra@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', 14, ' ', '2753da1649ca28424a6b50d6ee066f06e32aa7de', 1485820820, 1),
(18, 'Vitor', 'vitor@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 13, ' ', '15a05d2ab40ac32f6d0b03ac8b448feae0d5117d', 1485879616, 1),
(19, 'Alice', 'alice@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'f', 11, ' ', '36f5e1d092acae45b494a92cf15dadca4c9cb0f2', 1485879696, 1),
(20, 'Alex', 'alex@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 11, ' ', '5e3cf90f2571a99e063d71a7eab13cd0c52774fb', 1485881224, 1),
(21, 'Bruno', 'bruno@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 19, ' ', '7d8dfad281f9068c95d54199f1031c2c9b57554e', 1485881257, 1),
(22, 'Julio Cesar', 'juliocesar@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', 12, ' ', '6296a38c3d89baf353197345c2bfb8e261d8bdd9', 1485881374, 1),
(23, 'Admin Supremo', 'admsupremo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', 99, ' ', 'd7ebe615e58f65a5d6af2481ab74e63e8eacea85', 1485881405, 1),
(24, 'Bia', 'bia@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', 18, ' ', '4c600f6f35afba72fc2aed14bd80fb086c1ae8b8', 1485881458, 1),
(25, 'José', 'jose@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'M', 14, ' ', '01d0763a5cb2acbbb56f4883563d9fba93e48b9a', 1485885346, 1),
(26, 'Anna', 'anna@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'F', 12, ' ', 'facf784066ada97e9d0ab38d8233ab793817f13d', 1485885447, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdata_plataforma`
--

CREATE TABLE `userdata_plataforma` (
  `user_id` int(11) NOT NULL,
  `num_medalhas` int(11) NOT NULL,
  `vlr_progresso1` int(11) NOT NULL,
  `vlr_progresso2` int(11) NOT NULL,
  `total_pontos` int(11) NOT NULL,
  `horas_uso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `userdata_plataforma`
--

INSERT INTO `userdata_plataforma` (`user_id`, `num_medalhas`, `vlr_progresso1`, `vlr_progresso2`, `total_pontos`, `horas_uso`) VALUES
(15, 92, 100, 100, 27472, 26),
(16, 6, 0, 50, 762, 6),
(17, 6, 100, 0, 3208, 1),
(18, 6, 25, 50, 1452, 6),
(19, 81, 25, 100, 3454, 8),
(20, 0, 25, 0, 493, 1),
(21, 6, 0, 100, 2795, 2),
(22, 0, 0, 0, 0, 5),
(23, 0, 0, 0, 0, 1),
(24, 0, 0, 0, 0, 2),
(25, 0, 0, 0, 0, 2),
(26, 18, 100, 100, 5273, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medalhas`
--
ALTER TABLE `medalhas`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userkey` (`userkey`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `userdata_plataforma`
--
ALTER TABLE `userdata_plataforma`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `medalhas`
--
ALTER TABLE `medalhas`
  ADD CONSTRAINT `medalhas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userdata` (`id`);

--
-- Limitadores para a tabela `userdata_plataforma`
--
ALTER TABLE `userdata_plataforma`
  ADD CONSTRAINT `userdata_plataforma_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userdata` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
