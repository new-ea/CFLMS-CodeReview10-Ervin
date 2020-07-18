-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 18. Jul 2020 um 13:49
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_Ervin_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_Ervin_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_Ervin_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_date` date NOT NULL,
  `publisher` int(11) NOT NULL,
  `fk_type` int(11) NOT NULL,
  `fk_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`media_id`, `title`, `image`, `isbn`, `description`, `author`, `pub_date`, `publisher`, `fk_type`, `fk_status`) VALUES
(1001, 'The 4-Hour Workweek', '4HoursWeek.jpg', 307465357, 'Forget the old concept of retirement and the rest of the deferred-life plan–there is no need to wait and every reason not to, especially in unpredictable economic times. Whether your dream is escaping the rat race, experiencing high-end world travel, or earning a monthly five-figure income with zero management, The 4-Hour Workweek is the blueprint.', 'Tim Ferriss', '2009-12-01', 1, 1, 2),
(1003, 'Harry Potter and the Chamber of Secrets', 'Harry2.jpg', 439064872, 'The Dursleys were so mean that hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he is packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike.', 'J.K. Rowling', '2000-09-01', 2, 1, 1),
(1004, 'The Definitive Guide to MySQL', 'mySql.jpg', 1590595351, 'MySQL 5, due to be released in summer 2005, is slated to be the most significant release in the product’s history. The Definitive Guide to MySQL 5, Third Edition is the first book to offer in-depth instruction on the new features.', 'Michael Kofler', '2005-10-04', 3, 1, 1),
(1005, 'Game Of Thrones Book 1', 'GoT1.jpg', 553381687, 'Winter is coming. Such is the stern motto of House Stark, the northernmost of the fiefdoms that owe allegiance to King Robert Baratheon in far-off King’s Landing. There Eddard Stark of Winterfell rules in Robert’s name...', 'George R. R. Martin', '2002-05-28', 3, 1, 2),
(1006, 'Learning JavaScript', 'JavaScript.jpg', 1491914912, 'This is an exciting time to learn JavaScript. Now that the latest JavaScript specification—ECMAScript 6.0 (ES6)—has been finalized, learning how to develop high-quality applications with this language is easier and more satisfying than ever. This practical book takes programmers (amateurs and pros alike) on a no-nonsense tour of ES6, along with some related tools and techniques.', 'Ethan Brown', '2017-08-01', 1, 1, 1),
(1007, 'Rich Dad Poor Dad', 'RichDad.jpg', 1612680194, 'April 2017 marks 20 years since Robert Kiyosaki Rich Dad Poor Dad first made waves in the Personal Finance arena.\r\nIt has since become the #1 Personal Finance book of all time... translated into dozens of languages and sold around the world.', 'Robert T. Kiyosaki', '2017-04-11', 1, 1, 2),
(1012, 'Bad Blood', 'badBlood.jpg', 525431993, 'In 2014, Theranos founder and CEO Elizabeth Holmes was widely seen as the next Steve Jobs: a brilliant Stanford dropout whose startup “unicorn” promised to revolutionize the medical industry with its breakthrough device, which performed the whole range of laboratory tests from a single drop of blood. Backed by investors such as Larry Ellison and Tim Draper, Theranos sold shares in a fundraising round that valued the company at more than $9 billion, putting Holmes’s worth at an estimated $4.5 billion. There was just one problem: The technology didn’t work. Erroneous results put patients in danger, leading to misdiagnoses and unnecessary treatments. All the while, Holmes and her partner, Sunny Balwani, worked to silence anyone who voiced misgivings—from journalists to their own employees.', 'John Carreyrou', '2020-01-28', 3, 1, 1),
(1013, 'Harry Potter and the Sorcerer Stone', 'harry1.jpg', 439708184, 'Harry Potter has no idea how famous he is. That is because he is being raised by his miserable aunt and uncle who are terrified Harry will learn that he is really a wizard, just as his parents were. But everything changes when Harry is summoned to attend an infamous school for wizards, and he begins to discover some clues about his illustrious birthright. From the surprising way he is greeted by a lovable giant, to the unique curriculum and colorful faculty at his unusual school, Harry finds himself drawn deep inside a mystical world he never knew existed and closer to his own noble destiny.', 'J.K. Rowling', '1998-09-01', 2, 1, 2),
(1018, 'Avengers Infinity War', 'avengers2_BR.jpg', 123456, 'An unprecedented cinematic journey ten years in the making and spanning the entire Marvel Cinematic Universe, Marvel Studios Avengers Infinity War brings to the screen the ultimate, deadliest showdown of all time. The Avengers and their Super Hero allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe', 'Kevin Feige', '2918-09-01', 3, 3, 1),
(1019, 'The Amazing Spider Man 2', 'spider_man.jpg', 11122233, 'test', 'Avi Arad', '2016-03-01', 2, 3, 1),
(1020, 'Elon Musk', 'elon_musk.jpg', 222344353, 'In the spirit of Steve Jobs and Moneyball, Elon Musk is both an illuminating and authorized look at the extraordinary life of one of Silicon Valley s most exciting, unpredictable, and ambitious entrepreneurs  a real life Tony Stark and a fascinating exploration of the renewal of American invention and its new makers.', 'Ashlee Vance', '2015-05-01', 1, 2, 2),
(1022, 'Steve Jobs', 'jobs.jpg', 451648537, 'Based on more than forty interviews with Jobs conducted over two years as well as interviews with more than a hundred family members, friends, adversaries, competitors, and colleagues Walter Isaacson has written a riveting story of the roller coaster life and searingly intense personality of a creative entrepreneur whose passion for perfection and ferocious drive revolutionized six industries personal computers, animated movies, music, phones, tablet computing, and digital publishing.\r\nAt a time when America is seeking ways to sustain its innovative edge, and when societies around the world are trying to build digital age economies, Jobs stands as the ultimate icon of inventiveness and applied imagination. He knew that the best way to create value in the twenty first century was to connect creativity with technology. He built a company where leaps of the imagination were combined with remarkable feats of engineering. ', 'Walter Isaacson', '2009-07-08', 3, 2, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `address`, `email`) VALUES
(1, 'FBV Publisher', 'Hauptstrasse 1, Berlin', 'fbv@publisher.com'),
(2, 'For Kids', 'Avenue 1, Manhattan', 'for_kids@publisher.com'),
(3, 'Everything Publisher', 'Old Street 1, Nebraska', 'everything@publisher.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Available'),
(2, 'Not Available');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `type`
--

INSERT INTO `type` (`type_id`, `type`) VALUES
(1, 'Book'),
(2, 'Audio Book'),
(3, 'Blue Ray');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `fk_type` (`fk_type`),
  ADD KEY `fk_status` (`fk_status`),
  ADD KEY `publisher` (`publisher`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indizes für die Tabelle `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indizes für die Tabelle `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_type`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`publisher`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
