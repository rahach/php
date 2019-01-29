# Datenbank : `intermarkt`
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `artikel`
#

CREATE TABLE artikel (
  Artikel_ID int(7) unsigned NOT NULL auto_increment,
  Artikel_Nr varchar(14) NOT NULL default '',
  Kategorie_ID int(7) unsigned NOT NULL default '0',
  Bezeichnung varchar(50) NOT NULL default '',
  Preis double(8,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (Artikel_ID),
  UNIQUE KEY Artikel_Nr_2 (Artikel_Nr),
  UNIQUE KEY Artikel_ID (Artikel_ID),
  KEY Artikel_ID_2 (Artikel_ID),
  KEY Artikel_Nr (Artikel_Nr),
  KEY Kategorie_ID (Kategorie_ID),
  KEY Bezeichnung (Bezeichnung)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `artikel`
#

INSERT INTO artikel (Artikel_ID, Artikel_Nr, Kategorie_ID, Bezeichnung, Preis) VALUES (1, 'A2002100000001', 9, 'Fladenbrot', '0.50'),
(2, 'A2002100000002', 9, 'Tacos', '1.00'),
(3, 'A2002100000003', 10, 'Datteln', '2.25'),
(4, 'A2002100000004', 8, 'Original indisches Curry', '3.60'),
(5, 'A2002100000005', 2, 'karotte', '0.10'),
(6, 'A2002100000006', 2, 'Kartoffel', '0.10'),
(7, 'A2002100000007', 1, 'Kiwi', '0.20'),
(8, 'A2002100000008', 3, 'Lamm', '2.00'),
(9, 'A2002100000009', 3, 'Wurst', '1.50'),
(10, 'A2002100000010', 10, 'Feige', '2.50'),
(11, 'A2002100000011', 4, 'Ayran', '1.00'),
(12, 'A2002100000012', 7, 'Raki', '2.00'),
(13, 'A2002100000013', 7, 'Ouzo', '15.00'),
(14, 'A2002100000014', 4, 'Joghurt', '0.70'),
(15, 'A2002100000015', 5, 'Schokolade', '1.00'),
(16, 'A2002100000016', 9, 'Baguette', '0.80'),
(17, 'A2002100000017', 3, 'Hänschen', '3.00');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `bestellung`
#

CREATE TABLE bestellung (
  Bestell_ID int(7) unsigned NOT NULL auto_increment,
  Bestell_Nr varchar(9) NOT NULL default '',
  Bestelldatum date NOT NULL default '0000-00-00',
  Kunden_ID int(7) unsigned NOT NULL default '0',
  Zahlart_ID int(7) unsigned NOT NULL default '0',
  PRIMARY KEY  (Bestell_ID),
  UNIQUE KEY Bestell_Nr_2 (Bestell_Nr),
  UNIQUE KEY Bestell_ID (Bestell_ID),
  KEY Bestell_ID_2 (Bestell_ID),
  KEY Bestell_Nr (Bestell_Nr),
  KEY Kunden_ID (Kunden_ID),
  KEY Zahlart_ID (Zahlart_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `bestellung`
#

INSERT INTO bestellung (Bestell_ID, Bestell_Nr, Bestelldatum, Kunden_ID, Zahlart_ID) VALUES (4, '021000003', '2002-10-10', 3, 1),
(6, '021000006', '2002-10-10', 4, 1),
(10, '021000010', '2002-10-10', 3, 1),
(11, '021000011', '2002-10-11', 3, 1),
(12, '021000012', '2002-10-11', 13, 1);
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `bestellung_details`
#

CREATE TABLE bestellung_details (
  Bestell_ID int(7) unsigned NOT NULL default '0',
  Menge int(4) unsigned NOT NULL default '0',
  Artikel_ID int(7) unsigned NOT NULL default '0',
  PRIMARY KEY  (Bestell_ID,Artikel_ID),
  KEY Bestell_ID (Bestell_ID),
  KEY Artikel_ID (Artikel_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `bestellung_details`
#

INSERT INTO bestellung_details (Bestell_ID, Menge, Artikel_ID) VALUES (10, 5, 3),
(4, 5, 3),
(11, 1, 3),
(6, 1, 3),
(12, 2, 1);
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `kategorie`
#

CREATE TABLE kategorie (
  Kategorie_ID int(7) unsigned NOT NULL auto_increment,
  Bezeichnung varchar(50) NOT NULL default '',
  PRIMARY KEY  (Kategorie_ID),
  UNIQUE KEY Kategorie_ID (Kategorie_ID),
  KEY Kategorie_ID_2 (Kategorie_ID),
  KEY Bezeichnung (Bezeichnung)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `kategorie`
#

INSERT INTO kategorie (Kategorie_ID, Bezeichnung) VALUES (1, 'Obst'),
(2, 'Gemüse'),
(3, 'Fleisch'),
(4, 'Milchprodukte'),
(5, 'Süssigkeiten'),
(6, 'Getränke (alkoholfrei)'),
(7, 'Getränke (alkoholisch)'),
(8, 'Gewürze'),
(9, 'Backwaren'),
(10, 'Trockenfrüchte');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `kunde`
#

CREATE TABLE kunde (
  Kunden_ID int(7) unsigned NOT NULL auto_increment,
  Kunden_Nr varchar(9) NOT NULL default '',
  Name varchar(50) NOT NULL default '',
  Strasse varchar(30) NOT NULL default '',
  Ort varchar(30) NOT NULL default '',
  Land_ID int(7) unsigned NOT NULL default '0',
  Telefon varchar(25) NOT NULL default '',
  EMail varchar(70) NOT NULL default '',
  Passwort varchar(20) NOT NULL default '',
  PRIMARY KEY  (Kunden_ID),
  UNIQUE KEY Kunden_ID (Kunden_ID),
  UNIQUE KEY Kunden_Nr_2 (Kunden_Nr),
  KEY Kunden_ID_2 (Kunden_ID),
  KEY Kunden_Nr (Kunden_Nr),
  KEY Name (Name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `kunde`
#

INSERT INTO kunde (Kunden_ID, Kunden_Nr, Name, Strasse, Ort, Land_ID, Telefon, EMail, Passwort) VALUES (3, '021000003', 'Thomas Artuna', 'Peiffersweg 114', '22307 Hamburg', 1, '61 20 55', 'tartuna@gmx.net', 'ta'),
(4, '021000004', 'Behnia Haschemi', 'Ludwig-Uhland-Weg 7', '12345 Neu Wulmstorf', 1, '040/123456', 'behnia@gmx.de', 'bh'),
(12, '021000012', 'Reiner Artuna', 'Am Sand 14', '20045 Hamburg', 1, '040/123456', 'ra@freemail.de', 'ra'),
(13, '021000013', 'Stefan Höllerich', 'sfjsdk', 'fjsklfjsadkl', 1, '454564', 'a@a.a', 'sh');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `land`
#

CREATE TABLE land (
  Land_ID int(7) unsigned NOT NULL auto_increment,
  Bezeichnung varchar(50) NOT NULL default '',
  PRIMARY KEY  (Land_ID),
  UNIQUE KEY Land_ID (Land_ID),
  KEY Land_ID_2 (Land_ID),
  KEY Bezeichnung (Bezeichnung)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `land`
#

INSERT INTO land (Land_ID, Bezeichnung) VALUES (1, 'Deutschland'),
(2, 'Grossbritannien'),
(3, 'Frankreich'),
(5, 'Spanien'),
(6, 'Portugal'),
(8, 'Dänemarkt'),
(9, 'Italien'),
(10, 'Finnland'),
(11, 'Schweden'),
(12, 'Norwegen'),
(13, 'Luxemburg'),
(14, 'Belgien'),
(15, 'Niederlande'),
(16, 'Schweiz'),
(17, 'Österreich');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `zahlart`
#

CREATE TABLE zahlart (
  Zahlart_ID int(7) unsigned NOT NULL auto_increment,
  Bezeichnung varchar(50) NOT NULL default '',
  PRIMARY KEY  (Zahlart_ID),
  UNIQUE KEY Zahlart_ID (Zahlart_ID),
  KEY Zahlart_ID_2 (Zahlart_ID),
  KEY Bezeichnung (Bezeichnung)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Daten für Tabelle `zahlart`
#

INSERT INTO zahlart (Zahlart_ID, Bezeichnung) VALUES (1, 'Barzahlung'),
(2, 'Nachnahme'),
(4, 'Rechnung'),
(5, 'Vorauskasse');

