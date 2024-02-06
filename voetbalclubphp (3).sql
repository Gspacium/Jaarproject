-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 feb 2024 om 20:37
-- Serverversie: 5.7.17
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voetbalclubphp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblberichten`
--

CREATE TABLE `tblberichten` (
  `BerichtID` int(11) NOT NULL,
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `onderwerp` text NOT NULL,
  `Bericht` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblberichten`
--

INSERT INTO `tblberichten` (`BerichtID`, `naam`, `email`, `onderwerp`, `Bericht`) VALUES
(4, 'An De Coninck', 'An.DeConinck@gmail.com', 'Pestgedrag', 'Mijn kind kwam wenend naar huis, zegt dat hij gepest wordt.'),
(5, 'Anneleen Mertens', 'Anneleen.Mertens@gmail.com\r\n', 'Inschrijving', 'Waar kan ik mijn kleinste inschrijven?'),
(6, 'Anneleen Mertens', 'Anneleen.Mertens@gmail.com', 'Inschrijving', 'Wat doe ik met blessures voor mijn kleinste?'),
(7, 'Julie', 'JulieLink@gmail.com', 'Inschrijving', 'Moet ik een medisch attest voorzien van de dokter?'),
(8, 'Joost', 'Joost.Fasco@gmail.com', 'Voetbalclub', 'Wanneer is de volgende wedstrijd?'),
(9, 'Harold', 'Harold.Hart@gmail.com', 'Pestgedrag', 'Mijn zoon toont aan gepest te worden, ik zou graag persoonlijk eens langskomen.'),
(10, 'Karien', 'Karien.Leymans@gmail.com', 'Voetballen', 'Mijn dochter zal niet kunnen komen voetballen aangezien we op vakantie zijn.'),
(11, 'Karen', 'Karen.Vreming@gmail.com', 'Feestdagen', 'Gaat training door op feestdagen?'),
(12, 'Brigitte', 'Brigitte@gmail.com', 'Uren', 'Om hoe laat is de volgende training eigenlijk?'),
(13, 'Julie', 'JulieLink@gmail.com', 'Blessure', 'Mijn kleinste heeft een blessure opgelopen en zal dus niet kunnen komen trainen'),
(14, 'Julie', 'JulieLink@gmail.com', 'Blessure', 'Mijn kleinste heeft een blessure opgelopen en zal dus niet kunnen komen trainen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblspelers`
--

CREATE TABLE `tblspelers` (
  `spelernr` int(11) NOT NULL,
  `naam` text NOT NULL,
  `voornaam` text NOT NULL,
  `geboortedatum` date DEFAULT NULL,
  `adres_speler` text,
  `postcode_speler` int(11) DEFAULT NULL,
  `email` text,
  `telefoonnummer_speler` text,
  `adres_moeder` text,
  `postcode_moeder` int(11) DEFAULT NULL,
  `email_moeder` text,
  `telefoonnummer_moeder` text,
  `adres_vader` text,
  `postcode_vader` int(11) DEFAULT NULL,
  `email_vader` text,
  `telefoonnummer_vader` text,
  `wie_eerst_te_verwittigen` text,
  `medische_toelichting` text,
  `bondsnummer` int(11) DEFAULT NULL,
  `toelichting` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblspelers`
--

INSERT INTO `tblspelers` (`spelernr`, `naam`, `voornaam`, `geboortedatum`, `adres_speler`, `postcode_speler`, `email`, `telefoonnummer_speler`, `adres_moeder`, `postcode_moeder`, `email_moeder`, `telefoonnummer_moeder`, `adres_vader`, `postcode_vader`, `email_vader`, `telefoonnummer_vader`, `wie_eerst_te_verwittigen`, `medische_toelichting`, `bondsnummer`, `toelichting`) VALUES
(19, 'Claes', 'Catho', '2024-01-03', 'Zandloperlaan 67', 9000, 'catho.Claes@gmail.com', '0495600420', 'Zandloperlaan 67', 9000, 'Karien.Leymans@gmail.com', '0495600421', 'Zandloperlaan 67', 9000, 'Hans.Claes@gmail.com', '0495600422', 'moeder', 'Catho heeft last van haar voeten.', NULL, 'Geen andere toelichtingen\r\n'),
(20, 'De Winne', 'Daan', '2024-01-04', 'Kristaldreef 78', 9000, 'daan.DeWinne@gmail.com', ' 0495600423\r\n', 'Kristaldreef 78', 9000, 'Leen.Gertens@gmail.com', '0495600424', 'Kristaldreef 78', 9000, 'Niels.DeWinne@gmail.com', '0495600425', 'vader', 'geen toelichting', NULL, 'geen toelichting'),
(21, 'Evan', 'Erwin', '2024-01-05', 'Spiegelstraat 24', 9000, 'Evan.Erwin@gmail.com', '0495600426', 'Spiegelstraat 24', 9000, 'An.DeConinck@gmail.com', '04956004267', 'Spiegelstraat 24', 9000, 'Bart.Evan@gmail.com', '0495600428', 'moeder', 'geen toelichting', NULL, 'geen toelichting'),
(22, 'Fasco', 'Fien', '2024-01-06', 'Korrelkant 23', 9000, 'fien.Fasco@gmail.com', '0492099570', 'Korrelkant 23', 9000, 'LizeLotte@gmail.com', '0492099572', 'Korrelkant 23', 9000, 'Joost.Fasco@gmail.com', '0492099573', 'vader', 'geen toelichting', NULL, 'geen toelichting'),
(23, 'Gertens', 'Geert', '2024-01-07', 'Molenstraat 235', 9000, 'Geert.Gertens@gmail.com', '0492099574', 'Molenstraat 235', 9000, 'Anneleen.Mertens@gmail.com', '0492099575', 'Molenstraat 235', 9000, 'Jens.Gertens@gmail.com', '0492099576', 'vader', 'geen toelichting', NULL, 'geen toelichting'),
(24, 'Hart', 'Harry', '2024-01-08', 'Klaverlaan 69', 9000, 'Harry.Hart@gmail.com', '0492099579', 'Klaverlaan 69', 9000, 'StienVinke@gmail.com', '0492099577', 'Klaverlaan 69', 9000, 'Harold.Hart@gmail.com', '0492099578', 'moeder', 'geen toelichting', NULL, 'geen toelichting'),
(26, 'Jelis', 'Jan', '2024-01-10', 'Kasteeldreef 95', 9000, 'JanJelis@gmail.com', '049209731', 'Kasteeldreef 95', 9000, 'Karen.Vreming@gmail.com', '049209732', 'Kasteeldreef 95', 9000, 'Chriss.Jelis@gmail.com', '049209733', 'vader', 'geen toelichting', NULL, 'geen toelichting'),
(29, 'Kristel', 'Kaat', '2024-01-01', 'gentkasierstraat 79', 9999, 'kaatkristel@gmail.com', '0123456789', 'gentkasierstraat 79', 9999, 'JulieLink@gmail.com', '0123456789', 'gentkasierstraat 79', 9999, 'Lieven.Kristel@gmail.com', '0123456789', 'Moeder', 'Geen', NULL, 'geen toelichting'),
(30, 'Lije', 'Lode', '2024-01-03', 'tarbotlaan 25', 9030, 'Lodelije@gmail.com', '0123456789', 'tarbotlaan 25', 9030, 'Isabelle@gmail.com', '0123456789', 'tarbotlaan 25', 9030, 'Kristoff.Lije@gmail.com', '0147852369', 'Vader', 'Scoliose', NULL, 'Geen toelichting'),
(31, 'Martens', 'Miel', '2024-01-04', 'Genkstraat 28', 9762, 'Martensmiel@gmail.com', '0123789456', 'Genkstraat 28', 9762, 'Brigitte@gmail.com', '1594872630', 'Hasseltlaan 13', 7854, 'Jarno@gmail.com', '0326159487', 'Moeder', 'Neen', NULL, 'Moet van ver komen '),
(33, 'Klarijns', 'Kris', '2023-01-06', 'Kasteellaan 32', 5647, 'Klarijns.Kris@gmail.com', '0492096752', 'Kasteellaan 32', 8418, 'Ninke@gmail.com', '0326159489', 'Kasteellaan 32', 8418, 'Tomas@gmail.com', '09518476237', 'moeder', 'Geen toelichting', NULL, 'Geen toelichting');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tblberichten`
--
ALTER TABLE `tblberichten`
  ADD PRIMARY KEY (`BerichtID`);

--
-- Indexen voor tabel `tblspelers`
--
ALTER TABLE `tblspelers`
  ADD PRIMARY KEY (`spelernr`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tblberichten`
--
ALTER TABLE `tblberichten`
  MODIFY `BerichtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `tblspelers`
--
ALTER TABLE `tblspelers`
  MODIFY `spelernr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
