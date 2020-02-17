-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 17, 2020 alle 12:17
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
-- Database: `test`
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
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `pc`
--

INSERT INTO `pc` (`id`, `title`, `CPU`, `HD`, `RAM`, `Motherboard`, `Video`, `OS`, `Case`, `Prezzo`, `Descrizione`, `img`) VALUES
(1, 'Intel Core i3 9100F || Gigabyte Z390 UD || Corsair Vengeance 8GB (2x4GB) 3200Mhz || Sahara P35 || Windows 10', 'Intel Core i3 9100F', 'HDD Seagate 1TB / SSD Crucial 500Gb', 'Corsair Vengeance 8GB (2x4GB) 3200Mhz', 'Gigabyte Z390 UD', 'MSI GTX1660Ti Armor OC 6G', 'Windows 10', 'Sahara P35', 925, 'Prova Descrizione1', 'Sahara_P35'),
(2, 'Intel Core i5 9600K || Gigabyte Z390 UD || Corsair Vengeance 8GB || Cooler Master H500P || Windows 10', 'Intel Core i5 9600K', 'Western Digital Blue 1Tb / Seagate Barracuda HDD 2TB', 'Corsair Vengeance 8GB (2x4GB) 3200Mhz', 'Gigabyte Z390 UD', 'RTX 2060 OC 6GB Gigabyte', 'Windows 10', 'Cooler Master H500P', 1252, 'Prova Descrizione2', 'CM_H500P'),
(3, 'Intel Core i7 9700KF || Gigabyte Z390 UD || Corsair Vengeance LPX 3000MHz 16GB || Cougar Conquer || Windows 10', 'Intel Core i7 9700KF', 'Seagate Barracuda HDD 2TB / Western Digital Blue 2Tb', 'Corsair Vengeance LPX 3000MHz 16GB (2 X 8 GB)', 'Gigabyte Z390 UD', 'GIGABYTE GeForce RTX 2070 WINDFORCE 8Gb', 'Windows 10', 'Cougar Conquer', 1788, 'Prova Descrizione3', 'Cougar_Conquer'),
(4, 'Ryzen 3 3200G || MSI B450M-A Pro Max || RTX 2060 OC 6GB Gigabyte || Noua Noob X3 || Windows 10', 'Ryzen 3 3200G', 'Seagate 1TB / Crucial 500Gb', 'Corsair Vengeance 8GB (2x4GB) 3200Mhz', 'MSI B450M-A Pro Max', 'RTX 2060 OC 6GB Gigabyte', 'Windows 10', 'Noua Noob X3', 810, 'Prova Descrizione4', 'Noua_Noob'),
(5, 'Ryzen 5 3600x || MSI B450M-A Pro Max || Corsair Vengeance LPX 3000MHz 16GB || NZXT H500 || Windows 10', 'Ryzen 5 3600x', 'Western Digital Blue 1Tb / Seagate Barracuda HDD 2TB', 'Corsair Vengeance LPX 3000MHz 16GB (2 X 8 GB)', 'MSI B450M-A Pro Max', 'MSI RTX 2070 SUPER VENTUS OC', 'Windows 10', 'NZXT H500', 1263, 'Prova Descrizione5', 'NZXT_H500'),
(6, 'Ryzen 7 3800x || Corsair Vengeance LPX 3000MHz 16GB || MSI X570 Gaming Edge || NZXT N450 || Windows 10', 'Ryzen 7 3800x', 'Seagate Barracuda HDD 2TB / Western Digital Blue 2Tb', 'Corsair Vengeance LPX 3000MHz 16GB (2 X 8 GB)', 'MSI X570 Gaming Edge', 'Gigabyte RTX 2080 Super', 'Windows 10', 'NZXT N450', 2581, 'Prova Descrizione6', 'NZXT_N450');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
