-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 02:08 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Luxury_Compare_Operator`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `imgPath` varchar(255) DEFAULT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `description`, `imgPath`, `id_tour_operator`) VALUES
(2, 'test', 250, 'test de description', 'test', 1),
(3, 'test', 250, NULL, 'test', 3),
(4, 'Le domaine de Ker-Ys', 450, 'Une situation exceptionnelle dans la baie de Douarnenez ! ', 'lddky', 4),
(7, 'Le domaine de Ker-Ys', 0, 'Une situation exceptionnelle dans la baie de Douarnenez ! ', 'lddky', 10),
(9, 'Ajaccio', 0, 'Ajaccio est la capitale de la Corse, une île française en mer Méditerranée. Cité portuaire sur la sauvage côte ouest de l\'île, elle est la ville qui a vu naître Napoléon Bonaparte, empereur français, en 1769.', 'ajaccio', 10),
(10, 'Raf-Raf', 0, 'Raf Raf ou Rafraf est une ville du nord-est de la Tunisie située à une soixantaine de kilomètres de Tunis, une quarantaine de kilomètres de Bizerte et à sept kilomètres de Ras Jebel.', 'rafraf', 10),
(11, 'Barcelone', 0, 'Barcelone, la capitale cosmopolite de la région espagnole de Catalogne, est réputée pour son art et son architecture. ', 'barca', 10),
(12, 'Naples', 0, 'Description\r\nNaples est une ville située au sud de l\'Italie, sur la baie de Naples. À proximité se trouve le Vésuve, volcan toujours en activité qui a détruit la ville romaine voisine de Pompéi.', 'naples', 10),
(13, 'Sydney', 0, 'Sydney, capitale de la Nouvelle-Galles du Sud et l\'une des plus grandes villes d\'Australie, est renommée pour son opéra situé dans le port, avec son design distinctif en forme de voiles.', 'sidney', 10),
(14, 'Crête', 0, 'La Crète, l’île grecque la plus grande, offre des paysages variés allant des plages de sable fin, comme celle d’Elafonisi, aux reliefs montagneux, comme ceux des montagnes Blanches', 'crete', 10),
(15, 'Majorque', 0, 'Mallorca (Majorque) est l\'une des îles espagnoles des Baléares, dans la Méditerranée. Elle est réputée pour ses stations balnéaires, ses criques protégées, ses montagnes en calcaire ainsi que ses ruines maures et romaines.', 'majorque', 10),
(16, 'Cannes', 0, 'Cannes, ville balnéaire de la Côte d\'Azur, est célèbre pour son festival international du film. La Croisette, boulevard qui longe la côte, est bordée de plages de sable fin, de boutiques de luxe et de palaces', 'cannes', 10),
(17, 'Pula', 0, 'Pula est une ville de bord de mer située à l\'extrémité de la péninsule istrienne, en Croatie. Elle est connue pour son port protégé, sa côte bordée de plages et ses ruines romaines', 'pula', 10),
(18, 'Ajaccio', 500, NULL, NULL, 4),
(19, 'Barcelone', 350, NULL, NULL, 7),
(26, 'Raf-Raf', 123, NULL, NULL, 8),
(31, 'Barcelone', 123, NULL, NULL, 7),
(33, 'test', 123, NULL, NULL, 3),
(34, 'test', 12314, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `id_tour_operator`) VALUES
(1, 'super club !', 'alex', 1),
(3, 'test', 'test', 1),
(4, 'test2', 'test2', 1),
(5, 'Pas mal !', 'Jean', 4),
(6, 'dsqfgqsdfgqsd', 'qsgqsdg', 1),
(7, 'salut', 'salut', 1),
(8, 'test', 'test', 1),
(9, 'azer', 'azer', 1),
(10, 'azeazeqsd', 'azerqsd', 1),
(11, 'QFQSF', 'qdsfsqd', 1),
(12, 'SQDFSD', 'fZQSDF', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`) VALUES
(1, 'club med', 5, 'https://www.clubmed.fr/', 1),
(3, 'test', 5, 'https://www.test.fr/', 1),
(4, 'Homair Vacances', 5, 'https://www.homair.com/', 1),
(5, 'Pierre et Vacances', 3, 'https://www.pierreetvacances.com/', 0),
(6, 'Odalys', 3, 'https://www.odalys-vacances.com/', 0),
(7, 'Arts et vie', 3, 'https://www.artsetvie.com/', 0),
(8, 'VVF Vacances', 4, 'https://www.vvf-villages.fr/', 1),
(10, 'admin', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator` (`id_tour_operator`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour_operator` (`id_tour_operator`);

--
-- Indexes for table `tour_operators`
--
ALTER TABLE `tour_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `fk_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_tour_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
