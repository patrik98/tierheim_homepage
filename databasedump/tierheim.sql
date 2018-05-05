--
-- Datenbank: `tierheim`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `geschlecht`
--

CREATE TABLE `geschlecht` (
  `gid` int(11) NOT NULL,
  `bezeichnung` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `geschlecht`
--

INSERT INTO `geschlecht` (`gid`, `bezeichnung`) VALUES
(1, 'männlich'),
(2, 'weiblich');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `map_aktivitaet`
--

CREATE TABLE `map_aktivitaet` (
  `aktid` int(11) NOT NULL,
  `termin` datetime DEFAULT NULL,
  `bezeichnung` varchar(100) DEFAULT NULL,
  `nutzer` int(11) DEFAULT NULL,
  `tier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzer`
--

CREATE TABLE `nutzer` (
  `nutzerid` int(11) NOT NULL,
  `vname` varchar(100) DEFAULT NULL,
  `nname` varchar(100) DEFAULT NULL,
  `gebdat` date DEFAULT NULL,
  `passwort` varchar(255) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `strasse` varchar(50) DEFAULT NULL,
  `hausnr` varchar(10) DEFAULT NULL,
  `plz` varchar(15) DEFAULT NULL,
  `ort` varchar(50) DEFAULT NULL,
  `spende` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `nutzer`
--

INSERT INTO `nutzer` (`nutzerid`, `vname`, `nname`, `gebdat`, `passwort`, `email`, `strasse`, `hausnr`, `plz`, `ort`, `spende`) VALUES
(4, 'Max', 'Mustermann', '1990-01-01', '$2y$10$Z7mpQbjiIZHl30nVbfeepeZsuNyNPuD9qx/CaH1Tvpm14yNejwZvq', 'admin@admin.at', 'Andreas Hofer-Straße', '7', '6330', 'Kufstein', NULL),
(5, 'Patrik', 'Golec', '2018-04-05', '$2y$10$rmy9T4x3aqJltXUNtdz4YuO0zzA8GzFcCV6JaJBMedFvGI1AJKW.e', 'golecpatrik@gmail.com', 'Ziegeleiweg', '8a', '6361', 'Hopfgarten', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `spende`
--

CREATE TABLE `spende` (
  `spendeid` int(11) NOT NULL,
  `zahlungsart` varchar(100) DEFAULT NULL,
  `betrag` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tier`
--

CREATE TABLE `tier` (
  `tierid` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `gebdat` date DEFAULT NULL,
  `tierart` int(11) DEFAULT NULL,
  `geschlecht` int(11) DEFAULT NULL,
  `bildlink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tier`
--

INSERT INTO `tier` (`tierid`, `name`, `gebdat`, `tierart`, `geschlecht`, `bildlink`) VALUES
(1, 'Gina', '2013-03-04', 5, 2, 'http://farm5.static.flickr.com/4316/35345091824_0b9b3ac9b4.jpg'),
(2, 'Loki', '2016-05-07', 4, 1, 'https://images1.americanlisted.com/nlarge/jr-smith-jack-russell-terrier-parson-adult-adoption-rescue-americanlisted_106462457.jpg'),
(3, 'Lucky', '2011-09-18', 1, 1, 'https://images1.americanlisted.com/nlarge/white-yellow-male-labrador-retriever-americanlisted_102012417.jpg'),
(4, 'Nero', '2015-04-08', 6, 1, 'http://www.dalmatiner-von-stella-matutina.de/bwurf/nachzucht/Pepper/3%20Monate%20alt/Unbenanntb.jpg'),
(5, 'Roxy', '2012-10-13', 2, 2, 'http://pic.pedigreedatabase.com/pictures/2643654.jpg'),
(6, 'Melek', '2013-12-11', 3, 1, 'https://i.imgur.com/kmgXkuH.png'),
(7, 'Bruno', '2013-08-09', 2, 1, 'http://www.kokopelli-shepherds.com/Kokopelli-Shepherds/Our_GSDs/Pages/Bria_files/Media/Bria8/mip.jpg'),
(8, 'Nelly', '2016-01-04', 1, 2, 'https://i.imgur.com/rI7a79F.jpg'),
(9, 'Amira', '2018-03-02', 4, 2, 'https://images1.americanlisted.com/nlarge/jack-russell-puppy-americanlisted_102981217.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tierart`
--

CREATE TABLE `tierart` (
  `tierartid` int(11) NOT NULL,
  `bezeichnung` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tierart`
--

INSERT INTO `tierart` (`tierartid`, `bezeichnung`) VALUES
(1, 'Labrador Retriever'),
(2, 'Deutscher Schäferhund'),
(3, 'Dackel'),
(4, 'Jack Russell Terrier'),
(5, 'Beagle'),
(6, 'Dalmatiner');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `geschlecht`
--
ALTER TABLE `geschlecht`
  ADD PRIMARY KEY (`gid`);

--
-- Indizes für die Tabelle `map_aktivitaet`
--
ALTER TABLE `map_aktivitaet`
  ADD PRIMARY KEY (`aktid`),
  ADD KEY `nutzer` (`nutzer`),
  ADD KEY `tier` (`tier`);

--
-- Indizes für die Tabelle `nutzer`
--
ALTER TABLE `nutzer`
  ADD PRIMARY KEY (`nutzerid`),
  ADD KEY `spende` (`spende`);

--
-- Indizes für die Tabelle `spende`
--
ALTER TABLE `spende`
  ADD PRIMARY KEY (`spendeid`);

--
-- Indizes für die Tabelle `tier`
--
ALTER TABLE `tier`
  ADD PRIMARY KEY (`tierid`),
  ADD KEY `tierart` (`tierart`),
  ADD KEY `geschlecht` (`geschlecht`);

--
-- Indizes für die Tabelle `tierart`
--
ALTER TABLE `tierart`
  ADD PRIMARY KEY (`tierartid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `geschlecht`
--
ALTER TABLE `geschlecht`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `map_aktivitaet`
--
ALTER TABLE `map_aktivitaet`
  MODIFY `aktid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `nutzer`
--
ALTER TABLE `nutzer`
  MODIFY `nutzerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `spende`
--
ALTER TABLE `spende`
  MODIFY `spendeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tier`
--
ALTER TABLE `tier`
  MODIFY `tierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `tierart`
--
ALTER TABLE `tierart`
  MODIFY `tierartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `map_aktivitaet`
--
ALTER TABLE `map_aktivitaet`
  ADD CONSTRAINT `map_aktivitaet_ibfk_1` FOREIGN KEY (`nutzer`) REFERENCES `nutzer` (`nutzerid`),
  ADD CONSTRAINT `map_aktivitaet_ibfk_2` FOREIGN KEY (`tier`) REFERENCES `tier` (`tierid`);

--
-- Constraints der Tabelle `nutzer`
--
ALTER TABLE `nutzer`
  ADD CONSTRAINT `nutzer_ibfk_1` FOREIGN KEY (`spende`) REFERENCES `spende` (`spendeid`);

--
-- Constraints der Tabelle `tier`
--
ALTER TABLE `tier`
  ADD CONSTRAINT `tier_ibfk_1` FOREIGN KEY (`tierart`) REFERENCES `tierart` (`tierartid`),
  ADD CONSTRAINT `tier_ibfk_2` FOREIGN KEY (`geschlecht`) REFERENCES `geschlecht` (`gid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
