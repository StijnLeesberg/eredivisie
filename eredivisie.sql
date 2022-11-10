-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 nov 2022 om 11:15
-- Serverversie: 10.4.19-MariaDB
-- PHP-versie: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eredivisie`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hero`
--

CREATE TABLE `hero` (
  `playerId` int(3) NOT NULL COMMENT 'the unique heroId used as a parameter in the URL and fetched by PHP using the $_GET superblobal variable',
  `playerName` varchar(50) NOT NULL COMMENT 'the name of the hero, just a string',
  `playerDescription` text NOT NULL COMMENT 'some information of the hero, just a string',
  `playerStatistics` text NOT NULL,
  `playerImage` varchar(50) NOT NULL COMMENT 'the image of the hero is strored as a string. The actual image is strored on the server. Use the string as the source of the HTML img-tag.',
  `teamId` int(3) NOT NULL COMMENT 'this is the teamId. Used as a referenc to the team table.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `hero`
--

INSERT INTO `hero` (`playerId`, `playerName`, `playerDescription`, `playerStatistics`, `playerImage`, `teamId`) VALUES
(1, 'Bruno Martins Indi', 'Rolando Maximiliano Martins Indi is een Nederlands voetballer die doorgaans als centrale verdediger of linksback speelt. Hij tekende in juli 2021 een contract tot en met juni 2025 bij AZ. Martins Indi debuteerde in 2012 in het Nederlands voetbalelftal.', 'Lenig<br /> Snel<br /> Lef<br /> ', 'images/az-brunomartins.png', 1),
(2, 'Milos Kerkez', 'Milos Kerkez is een Hongaars-Servisch voetballer die doorgaans speelt als linksback. In januari 2022 verruilde hij AC Milan voor AZ.', 'Fysiek<br /> Aanname<br /> Schotkracht<br />', 'images/az-miloskerkez.png', 1),
(3, 'Maxim Dekker', 'Maxim Dekker is een 18jarige Nederlands voetballer die als verdediger voor AZ speelt.', 'Overzicht<br /> Controle<br /> Snelheid<br /> ', 'images/az-maximdekker.png', 1),
(4, 'Dani de Wit', 'Op 30 augustus 2019 tekende De Wit een contract bij AZ, dat hem overnam van Ajax voor naar verluidt twee miljoen euro.', 'Overzicht<br /> Controle<br /> Snelheid<br /> ', 'images/az-danidewit.png', 1),
(5, 'Bart van Rooij', 'Bart van Rooij is een 21jarige Nederlandse voetballer die als verdediger voor N.E.C. speelt', 'Fysiek<br /> Lef<br /> Schotkracht<br /> ', 'images/nec-bartvanrooij.png', 2),
(6, 'Ilias Bronkhorst', 'Ilias Bronkhorst is een Nederlands voetballer die als verdediger voor N.E.C. speelt. Hij kwam in mei 2021 over van Telstar.', 'Kracht<br /> Overzicht<br /> Snelheid<br /> ', 'images/nec-iliasbronkhorst.png', 2),
(7, 'Dirk Proper', 'Dirk Wanner Proper is een Nederlands voetballer die als middenvelder speelt bij N.E.C.', 'Aanname<br /> Dribbelen<br /> Overzicht<br /> ', 'images/nec-dirkproper.png', 2),
(8, 'Cody Gakpo', 'Cody Mathès Gakpo is een Nederlands voetballer die doorgaans als linksbuiten speelt. Hij debuteerde in 2016 in het betaald voetbal, namens Jong PSV. Vanaf 2018 speelt Gakpo in het hoofdelftal van PSV.', 'Schot<br /> Lengte<br /> Snelheid<br /> ', 'images/psv-codygakpo.png', 3),
(9, 'Luuk de Jong', 'Luuk de Jong is een Nederlands profvoetballer die doorgaans als aanvaller speelt. Hij komt uit voor PSV, dat hem in 2022 overnam van Sevilla. De Jong debuteerde in 2011 in het Nederlands voetbalelftal. Zijn oudere broer Siem de Jong is eveneens profvoetballer.', 'Schieten<br /> Overzicht<br /> Aanvoerder<br /> ', 'images/psv-luukdejong.png', 3),
(10, 'Xavi Simons', 'Xavi Simons is een Nederlands voetballer die voor PSV speelt. Simons speelt doorgaans als middenvelder. Hij is opgegroeid in het Spaanse Alicante.', 'Snelheid<br /> Dribbelen<br /> Aanname<br /> ', 'images/psv-xavisimons.png', 3),
(11, 'Andre Ramalho', 'André Ramalho Silva is een Braziliaans voetballer die doorgaans speelt als centrale verdediger. In mei 2021 verruilde hij Red Bull Salzburg voor PSV.', 'Kracht<br /> Lengte<br /> Snelheid<br /> ', 'images/psv-andreramalho.png', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rating`
--

CREATE TABLE `rating` (
  `ratingId` int(3) NOT NULL COMMENT 'unique rating is, auto incremented',
  `playerId` int(3) NOT NULL COMMENT 'the heroId used as reference to the hero table, can''t be unique in thie table',
  `rating` int(3) NOT NULL COMMENT 'rating is defined as an integer from 0 (min) to 10 (max)',
  `ratingDate` int(5) NOT NULL COMMENT 'the date of this rating. Dates are presented as an integer (timestamp) and displayed as a human readable date and time string using the PHP strftime() function',
  `ratingReview` text NOT NULL COMMENT 'a textual review added by the user\\nthe form where the user can rate the hero by using stars (radio-buttons)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rating`
--

INSERT INTO `rating` (`ratingId`, `playerId`, `rating`, `ratingDate`, `ratingReview`) VALUES
(43, 4, 8, 1667898972, 'Het talent van AZ!!!'),
(44, 4, 2, 1667899005, 'Matige techniek'),
(45, 4, 0, 1667899018, 'Troll'),
(46, 3, 4, 1667983185, '12123'),
(47, 4, 9, 1667983998, 'sad'),
(48, 4, 10, 1667984005, 'mongool'),
(49, 1, 5, 1667996708, '123'),
(50, 1, 5, 1667996712, '1213');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `team`
--

CREATE TABLE `team` (
  `teamId` int(3) NOT NULL COMMENT 'unique teamId can be used as a parameter in the URL and fetched using the $_GET variable',
  `teamName` varchar(50) NOT NULL COMMENT 'team name, just an ordinary string',
  `teamDescription` text NOT NULL COMMENT 'team description, just a string',
  `teamImage` varchar(100) NOT NULL COMMENT 'team image, stored as a string and used with the source of the HTML-tag'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `team`
--

INSERT INTO `team` (`teamId`, `teamName`, `teamDescription`, `teamImage`) VALUES
(1, 'ÀZ', 'AZ Alkmaar', 'images/az.png'),
(2, 'NEC', 'NEC Nijmegen', 'images/nec.png'),
(3, 'PSV', 'PSV Eindhoven', 'images/psv.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, '99010140', '$2y$10$HDAui3/RCZqB7o1GVs2L8.Gs5pkY0aauxgQC.8k1HjHDUFwClikHC', '2022-11-09 13:41:44'),
(2, '12345', '$2y$10$Y3NpJaxp9DZPdYVdMfYV9u5Y2ZWzvuDjnYmW5Jlyfw3.EHaw9icBy', '2022-11-09 14:06:04');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`playerId`);

--
-- Indexen voor tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexen voor tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `hero`
--
ALTER TABLE `hero`
  MODIFY `playerId` int(3) NOT NULL AUTO_INCREMENT COMMENT 'the unique heroId used as a parameter in the URL and fetched by PHP using the $_GET superblobal variable', AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT voor een tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingId` int(3) NOT NULL AUTO_INCREMENT COMMENT 'unique rating is, auto incremented', AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT voor een tabel `team`
--
ALTER TABLE `team`
  MODIFY `teamId` int(3) NOT NULL AUTO_INCREMENT COMMENT 'unique teamId can be used as a parameter in the URL and fetched using the $_GET variable', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
