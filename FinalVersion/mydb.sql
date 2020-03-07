-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 21, 2020 alle 17:32
-- Versione del server: 10.1.37-MariaDB
-- Versione PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `CPU` varchar(500) DEFAULT NULL,
  `HD` varchar(500) DEFAULT NULL,
  `RAM` varchar(500) DEFAULT NULL,
  `Motherboard` varchar(500) DEFAULT NULL,
  `Video` varchar(500) DEFAULT NULL,
  `OS` varchar(500) DEFAULT NULL,
  `Case` varchar(500) DEFAULT NULL,
  `Prezzo` int(11) DEFAULT NULL,
  `Descrizione` varchar(1000) DEFAULT NULL,
  `img` longblob,
  `images_idimages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`),
   ADD KEY `fk_PC_images` (`images_idimages`);
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `images_Case` longblob,
  `images_CPU` longblob NOT NULL,
  `images_RAM` longblob NOT NULL,
  `images_SM` longblob,
  `images_SV` longblob,
  `prova` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `images`
--

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`);
COMMIT;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `pc`
--
ALTER TABLE `pc`
ADD CONSTRAINT `fk_PC_images` FOREIGN KEY (`images_idimages`) REFERENCES `images` (`idimages`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;