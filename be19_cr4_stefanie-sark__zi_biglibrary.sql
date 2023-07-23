-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Jul 2023 um 16:42
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be19_cr4_stefanie-sarközi_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be19_cr4_stefanie-sarközi_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be19_cr4_stefanie-sarközi_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `ISBN` varchar(20) NOT NULL,
  `short_description` text NOT NULL,
  `type` varchar(15) NOT NULL,
  `author_first_name` varchar(20) NOT NULL,
  `author_last_name` varchar(20) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(50) NOT NULL,
  `publish_date` date NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'The Red Queen - Chronicles of Alice 02', 'alice.jpeg', '978-1-78565-332-2', 'Book two in a dark fantasy take on Alice in Wonderland - horrifying, disturbing and deeply compelling. The first bank in the series Came 2nd in the Good reads Choice Awards Best of Year Horror (category with over 11K votes) beating many more well-known authors.', 'Book', 'Christina', 'Henry', 'Titan-Books', 'London', '2016-07-12', 12),
(2, 'Chronicles of Alice 01', 'alice.jpeg', '978-1-78565-330-8', 'In a warren of crumbling buildings and desperate people called the Old City, there stands a hospital with cinderblock walls which echo with the screams of the poor souls inside.In the hospital, there is a woman. Her hair, once blonde, hangs in tangles down her back. She doesn\'t remember why she\'s in such a terrible place-just a tea party long ago, and long ears, and blood...Then, one night, a fire at the hospital gives the woman a chance to escape, tumbling out of the hole that imprisoned her, leaving her free to uncover the truth about what happened to her all those years ago.Only something else has escaped with her. Something dark. Something powerful.And to find the truth, she will have to track this beast to the very heart of the Old City, where the rabbit waits for his Alice.', 'Book', 'Christina', 'Henry', 'Titan Publ. Group Ltd.', 'London', '2016-06-28', 5),
(3, 'Looking Glass - Chronicles of Alice 03', 'alice.jpeg', '978-1-78909-286-8', '4 different stories in the world of Alice.\r\n', 'Book', 'Christina', 'Henry', 'Titan Publ. Group Ltd.', 'London', '2020-04-21', 7),
(4, 'The Girl in Red', 'red.jpeg', '978-1-78565-977-5', 'Reds name isnt really Red - its Cordelia, but nobody calls her that anymore. At the age of eight she lost half her leg in a car accident but she doesnt want anybody feeling sorry for her - she can get along just fine, thanks very much. When a devastating disease destroys most of the U.S. population and Reds mother and father are killed by a group of wandering thugs Red and her brother Adam decide to try and reach their paternal grandmother, who lives over 200 miles away. Then Adam decides to join a homegrown militia, thinking its the only way to survive in this new world, but Red isnt joining any army. She strikes out on her own, crossing a large stretch of wilderness with only her wits and her backpack, intent on getting to her grandmas house come what may. But Red is about to find out that the woods are deep and dark, and there are far worse things than wolves out in the world.', 'Book', 'Christina ', 'Henry', 'Titan Publ. Group Ltd.', 'London', '2019-06-01', 3),
(5, 'Lost Boy', 'lost-boy.jpeg', '978-1-78565-568-5', 'From the author of \"Alice\" and \"The Red Queen\", this is the story of how Peter Pan\'s favourite lost boy became his greatest enemy.', 'Book', 'Christina', 'Henry', 'Titan Publ. Group Ltd.', 'London', '2017-07-04', 0),
(6, 'The Queens Gambit', 'chess.jpg', '978-1-4746-0084-2', 'When she is sent to an orphanage at the age of eight, Beth Harmon soon discovers two ways to escape her surroundings, albeit fleetingly: playing chess and taking the little green pills given to her and the other children to keep them subdued. Before long, it becomes apparent that hers is a prodigious talent, and as she progresses to the top of the US chess rankings she is able to forge a new life for herself. But she can never quite overcome her urge to self-destruct. For Beth, there\'s more at stake than merely winning and losing.', 'Book', 'Walter', 'Travis', 'Orion Publishing Group', 'London', '2016-04-14', 4),
(7, 'Therapy', 'therapy.jpg', '978-1-83793-355-6', 'Twelve-year-old Josy has an inexplicable illness. One day she goes to her doctor\'s surgery and disappears without trace.\r\n\r\nJosy\'s father Viktor withdraws to an isolated island in order to deal with the tragedy. It\'s there he is visited four years later by a beautiful stranger.\r\n\r\nAnna Glass is a novelist who suffers from an unusual form of schizophrenia: all the characters she creates for her books become real to her. Her latest work features a young girl with an unknown illness who has disappeared without trace...\r\n\r\nCould her delusions really describe Josy\'s last days? Reluctantly, psychiatrist Viktor agrees to become Anna\'s therapist in a final attempt to uncover the truth. As the past is dragged back into the light, the sessions and their consequences become ever more terrifying.', 'Book', 'Sebastian', 'Fitzek', 'Bloomsbury Trade', 'London', '2023-09-14', 1),
(8, 'Howl\'s Moving Castle', 'howl.jpeg', '56781', 'The film is set in a fictional kingdom where both magic and early twentieth-century technology are prevalent, against the backdrop of a war with another kingdom. It tells the story of Sophie, a young milliner who is turned into an elderly woman by a witch who enters her shop and curses her. She encounters a wizard named Howl and gets caught up in his resistance to fighting for the king.', 'DVD', ' Hayao', 'Miyazaki', 'Studio Ghibli', 'Tokyo', '2004-09-05', 1),
(9, 'My Neighbor Totoro', 'totoro.jpeg', '56782', 'It tells the story of a professor\'s young daughters Satsuki and Mei, and their interactions with friendly wood spirits in postwar rural Japan.', 'DVD', ' Hayao', 'Miyazaki', 'Studio Ghibli', 'Tokyo', '1988-04-16', 0),
(10, 'Spirited Away', 'spirited-away.jpeg', '56783', 'Spirited Away tells the story of Chihiro Ogino (Hiiragi), a ten-year-old girl who, while moving to a new neighborhood, enters the world of kami (spirits of Japanese Shinto folklore).[8] After her parents are turned into pigs by the witch Yubaba (Natsuki), Chihiro takes a job working in Yubaba\'s bathhouse to find a way to free herself and her parents and return to the human world.', 'DVD', ' Hayao', 'Miyazaki', 'Studio Ghibli', 'Tokyo', '2001-07-20', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
