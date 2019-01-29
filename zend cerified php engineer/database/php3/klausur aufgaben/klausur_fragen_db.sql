-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jun 2018 um 10:17
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
-- Datenbank: `klausur_fragen`
--
CREATE DATABASE IF NOT EXISTS `klausur_fragen` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `klausur_fragen`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `antworten`
--

DROP TABLE IF EXISTS `antworten`;
CREATE TABLE `antworten` (
  `uid` int(6) UNSIGNED NOT NULL,
  `frage_id` mediumint(5) UNSIGNED NOT NULL,
  `antwort` varchar(500) NOT NULL,
  `corr_flag` set('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragen`
--

DROP TABLE IF EXISTS `fragen`;
CREATE TABLE `fragen` (
  `uid` mediumint(5) UNSIGNED NOT NULL,
  `frage` varchar(1000) NOT NULL,
  `creator` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `antworten`
--
ALTER TABLE `antworten`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `frage_id` (`frage_id`);

--
-- Indizes für die Tabelle `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `antworten`
--
ALTER TABLE `antworten`
  MODIFY `uid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fragen`
--
ALTER TABLE `fragen`
  MODIFY `uid` mediumint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `antworten`
--
ALTER TABLE `antworten`
  ADD CONSTRAINT `antworten_ibfk_1` FOREIGN KEY (`frage_id`) REFERENCES `fragen` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
