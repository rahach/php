-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jun 2018 um 08:13
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `uebung_3`
--
CREATE DATABASE IF NOT EXISTS `uebung_3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uebung_3`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung`
--

DROP TABLE IF EXISTS `bestellung`;
CREATE TABLE `bestellung` (
  `id` int(11) NOT NULL,
  `id_Kunde` int(11) NOT NULL,
  `id_Speise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `bestellung`
--

INSERT INTO `bestellung` (`id`, `id_Kunde`, `id_Speise`) VALUES
(1, 9, 105),
(2, 11, 103),
(3, 12, 103),
(4, 14, 103),
(5, 15, 101),
(6, 15, 102),
(7, 15, 103),
(8, 16, 104),
(9, 17, 103);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

DROP TABLE IF EXISTS `personen`;
CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Abteilung` varchar(32) DEFAULT NULL,
  `Tel` varchar(32) DEFAULT NULL,
  `Plz` int(11) DEFAULT NULL,
  `Ort` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `Name`, `Abteilung`, `Tel`, `Plz`, `Ort`) VALUES
(1, 'Gabi', 'Sekr', '100', NULL, ''),
(2, 'Tatiana', 'GF', '202', NULL, ''),
(3, 'Manfred', 'GF', '201', NULL, ''),
(4, 'Iris', 'MK', '401', NULL, ''),
(5, 'Ren', 'PM', '501', NULL, ''),
(6, 'Elena', 'MM', '301', NULL, ''),
(7, 'Aidar', 'MM', '301', NULL, ''),
(8, 'Oleg', 'MM', '301', NULL, ''),
(9, 'Andreas', 'Entw', '610', 52525, 'Heinsberg'),
(10, 'Arthur', 'Entw', '612', 52499, 'Baesweiler'),
(11, 'Gregor', 'Entw', '611', 52351, 'Düren'),
(12, 'Michael', 'Entw', '616', 50859, 'Köln'),
(13, 'Norbert', 'Entw', '614', 52134, 'Herzogenrath'),
(14, 'Roland', 'Entw', '601', 52134, 'Herzogenrath'),
(15, 'Stefan', 'Entw', '613', 52062, 'Aachen'),
(16, 'Torsten', 'Entw', '601', 52070, 'Aachen'),
(17, 'Werner', 'Entw', '615', 52076, 'Aachen'),
(18, 'FAX', NULL, '101', NULL, ''),
(19, 'Konferenzraum', NULL, '700', NULL, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `speisen`
--

DROP TABLE IF EXISTS `speisen`;
CREATE TABLE `speisen` (
  `id` int(11) NOT NULL,
  `Gericht` varchar(255) NOT NULL,
  `Preis` decimal(6,2) NOT NULL,
  `Zutaten` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `speisen`
--

INSERT INTO `speisen` (`id`, `Gericht`, `Preis`, `Zutaten`) VALUES
(101, 'Pizza Diabolo', '5.50', 'Teufelsohren'),
(102, 'Pizza Vulkano', '6.00', 'Teig, Käse, Vesuvtomaten'),
(103, 'Pizza Feuro', '6.50', 'Pepperoni'),
(104, 'Lasagno', '6.00', 'Nudeln, Hackfleisch'),
(105, 'Salat Eskimo', '4.50', 'Eiswürfel');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_Kunde` (`id_Kunde`),
  ADD KEY `id_Speise` (`id_Speise`);

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `speisen`
--
ALTER TABLE `speisen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `Gericht` (`Gericht`);

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `bestellung_ibfk_1` FOREIGN KEY (`id_Kunde`) REFERENCES `personen` (`id`),
  ADD CONSTRAINT `bestellung_ibfk_2` FOREIGN KEY (`id_Speise`) REFERENCES `speisen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
