-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Jun 2018 um 15:36
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
-- Datenbank: `filmverleih`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titel` varchar(150) DEFAULT NULL,
  `spieldauer` int(11) DEFAULT NULL,
  `erscheinungsjahr` year(4) NOT NULL,
  `kurzbeschreibung` text,
  `genre_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `regisseur_id` int(11) DEFAULT NULL,
  `preiskategorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `filme`
--

INSERT INTO `filme` (`id`, `titel`, `spieldauer`, `erscheinungsjahr`, `kurzbeschreibung`, `genre_id`, `regisseur_id`, `preiskategorie_id`) VALUES
(1, 'Cube', 90, 1997, '7 völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 1, 1, NULL),
(2, 'Herr der Ringe - Die Gefährten', 178, 2001, 'In einem kleinen Dorf wird einem junger Hobbit namens Frodo mit ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksaalsberg begeben um ihn zu zerstören.', 2, 2, NULL),
(3, 'Mononoke-hime', 134, 1997, 'Das Schicksaal der Welt liegt in den Händen eines einzigen Kriegers.', 3, 3, NULL),
(4, 'Donnie Darko', 113, 2001, 'Das Leben ist eine lange verrückte Reise. Einige Leute haben einfach einen besseren Orientierungssinn', 2, 4, NULL),
(5, 'The Dark Knight', 180, 2008, 'Batman, Gordon und Harvey Dent müssen den Joker stoppen, ein Anarchistengenie, der einen Ring der Gewalt über die Stadt legt.', 4, 5, NULL),
(6, 'The Prestige', 130, 2006, 'Robert und Alfred sind Magierrivalen. Als Alfred den ultimativen Trick zeigt, versucht Robert verzweifelt das Geheimnis herauszufinden.', 2, 5, NULL),
(7, 'The Ring', 115, 2002, 'Bevor Du stirbst siehst Du den Ring.', 5, 6, NULL),
(8, 'The Ring 2', 110, 2005, 'Fear comes full circle.', 5, 8, NULL),
(9, 'Inglourious Basterds', 153, 2009, 'Es war einmal in einem von Nazis besetzen Frankreich...', 6, 7, NULL),
(10, 'Star Trek', 127, 2009, 'Die Zukunft beginnt', 1, 9, NULL),
(11, 'District 9', 153, 2009, 'Eine auserirdische Rasse ist gezwungen auf der Erde in Slums zu leben...', 1, 10, NULL),
(12, 'Fluch der Karibik', 143, 2003, 'Der Schied \"Will Turner\" verbündet sich mit dem Piraten \"Captain\" Jack Sparrow\" um seine Geliebte zu retten', 7, 6, NULL),
(13, 'Herr der Ringe - Die Zwei Türme', 179, 2002, 'Frodo & Sam begeben sich nach Mordor um den Ring zu zerstören.', 2, 2, NULL),
(14, 'Braindead', 104, 1992, 'Die Mutter eines Jungen Mannes wird im Zoo gebissen...', 5, 2, NULL),
(15, 'Pulp Fiction', 154, 1994, 'Die Leben von 2 Auftragsmördern, Einem Boxer und der Frau eines Gangsters vermischen sich..', 6, 7, NULL),
(16, 'Public Enemies', 140, 2009, 'Americas Meistgesuchter..', 6, 14, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `uid` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `genre`
--

INSERT INTO `genre` (`uid`, `name`) VALUES
(1, 'scifi'),
(2, 'fantasy'),
(3, 'anime'),
(4, 'action'),
(5, 'horror'),
(6, 'drama'),
(7, 'abenteuer');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

DROP TABLE IF EXISTS `personen`;
CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `vorname` varchar(40) NOT NULL,
  `geburtsdatum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `name`, `vorname`, `geburtsdatum`) VALUES
(1, 'Natali', 'Vincent', '1969-01-06'),
(2, 'Jackson', 'Peter', '1961-10-31'),
(3, 'Hayao', 'Miyazaki', '1951-01-05'),
(4, 'Richard', 'Kelly', '1975-03-28'),
(5, 'Nolan', 'Christopher', '1970-07-30'),
(6, 'Verbinski', 'Gore', '1964-03-16'),
(7, 'Tarantino', 'Quentin', '1963-03-27'),
(8, 'Nakata', 'Hideo', '1963-03-27'),
(9, 'Abrams', 'Jeffrey', '1966-06-27'),
(10, 'Blomkamp', 'Neill', '1979-09-17'),
(11, 'Bale', 'Christian', '1974-01-30'),
(12, 'Depp', 'Johnny', '1963-06-09'),
(13, 'Pit', 'Brad', '1963-12-18'),
(14, 'Mann', 'Michael', '1963-12-18');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `preiskategorien`
--

DROP TABLE IF EXISTS `preiskategorien`;
CREATE TABLE `preiskategorien` (
  `name` varchar(15) DEFAULT NULL,
  `preis` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `spielt`
--

DROP TABLE IF EXISTS `spielt`;
CREATE TABLE `spielt` (
  `film_id` int(11) NOT NULL,
  `schauspieler_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `spielt`
--

INSERT INTO `spielt` (`film_id`, `schauspieler_id`) VALUES
(5, 11),
(6, 11),
(9, 13),
(12, 12),
(14, 2),
(16, 11),
(16, 12);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titel` (`titel`,`erscheinungsjahr`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indizes für die Tabelle `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`uid`);

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indizes für die Tabelle `spielt`
--
ALTER TABLE `spielt`
  ADD PRIMARY KEY (`film_id`,`schauspieler_id`),
  ADD KEY `schauspieler_id` (`schauspieler_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `genre`
--
ALTER TABLE `genre`
  MODIFY `uid` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `filme_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`uid`);

--
-- Constraints der Tabelle `spielt`
--
ALTER TABLE `spielt`
  ADD CONSTRAINT `spielt_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `filme` (`id`),
  ADD CONSTRAINT `spielt_ibfk_2` FOREIGN KEY (`schauspieler_id`) REFERENCES `personen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
