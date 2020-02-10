-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 10, 2020 alle 09:34
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Assembler`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `PC`
--

CREATE TABLE `PC` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `HD` varchar(500) DEFAULT NULL,
  `RAM` varchar(500) DEFAULT NULL,
  `Motherboard` varchar(500) DEFAULT NULL,
  `Video` varchar(500) DEFAULT NULL,
  `OS` varchar(500) DEFAULT NULL,
  `Case` varchar(500) DEFAULT NULL,
  `Prezzo` int(11) DEFAULT NULL,
  `Descrizione` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `PC`
--

INSERT INTO `PC` (`id`, `title`, `HD`, `RAM`, `Motherboard`, `Video`, `OS`, `Case`, `Prezzo`, `Descrizione`) VALUES
(1, 'Prova TITLE1', 'Prova HD1', 'Prova RAM1', 'Prova Motherboard1', 'Prova Video1', 'Prova OS1', 'Prova Case1', 1000, 'Prova Descrizione1'),
(2, 'Prova TITLE2', 'Prova HD2', 'Prova RAM2', 'Prova Motherboard2', 'Prova Video2', 'Prova OS2', 'Prova Case2', 1000, 'Prova Descrizione2'),
(3, 'Prova TITLE3', 'Prova HD3', 'Prova RAM3', 'Prova Motherboard3', 'Prova Video3', 'Prova OS3', 'Prova Case3', 1000, 'Prova Descrizione3'),
(4, 'Prova TITLE4', 'Prova HD4', 'Prova RAM4', 'Prova Motherboard4', 'Prova Video4', 'Prova OS4', 'Prova Case4', 1000, 'Prova Descrizione4'),
(5, 'Prova TITLE5', 'Prova HD5', 'Prova RAM5', 'Prova Motherboard5', 'Prova Video5', 'Prova OS5', 'Prova Case5', 1000, 'Prova Descrizione5'),
(6, 'Prova TITLE6', 'Prova HD6', 'Prova RAM6', 'Prova Motherboard6', 'Prova Video6', 'Prova OS6', 'Prova Case6', 1000, 'Prova Descrizione6');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `PC`
--
ALTER TABLE `PC`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `PC`
--
ALTER TABLE `PC`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
