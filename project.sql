-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2018 às 06:48
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `project_pw`
--

CREATE TABLE `project_pw` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `project_pw`
--

INSERT INTO `project_pw` (`id`, `name`, `value`, `photo`) VALUES
(1, 'BMW HP4', '100000.00', './imagens/BMW HP4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_pw`
--
ALTER TABLE `project_pw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_pw`
--
ALTER TABLE `project_pw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
