-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 15 fév. 2018 à 13:27
-- Version du serveur :  5.7.21-0ubuntu0.17.10.1
-- Version de PHP :  7.1.14-1+ubuntu17.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `si4`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filiereID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `name`, `filiereID`) VALUES
(12, 'Web design', 1),
(13, 'Outils design', 1),
(14, 'Intégration', 1),
(15, 'Anglais', 1),
(16, 'Développement corporel', 10);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`id`, `name`) VALUES
(1, 'Bachelor web'),
(10, 'Grande école'),
(12, 'Bachelor 3D');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `promoID` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `userID`, `promoID`, `content`, `date`) VALUES
(5, 1, 1, 'lul', '2018-02-14 12:57:40'),
(6, 1, 1, 'ayyy', '2018-02-14 13:03:23'),
(7, 1, 1, 'dedaza', '2018-02-14 13:07:29'),
(8, 1, 1, '<h1>\"é&\'é\"&=)</', '2018-02-14 13:07:42'),
(9, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet doloremque facilis, fugiat illo ipsum iste magni molestias non odit quasi rem rerum, veritatis voluptates voluptatibus. Blanditiis laborum nobis reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet doloremque facilis, fugiat illo ipsum iste magni molestias non odit quasi rem rerum, veritatis voluptates voluptatibus. Blanditiis laborum nobis reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet doloremque facilis, fugiat illo ipsum iste magni molestias non odit quasi rem rerum, veritatis voluptates voluptatibus. Blanditiis laborum nobis reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet doloremque facilis, fugiat illo ipsum iste magni molestias non odit quasi rem rerum, veritatis voluptates voluptatibus. Blanditiis laborum nobis reprehenderit!\r\n', '2018-02-15 09:37:53'),
(10, 1, 1, 'bonjour', '2018-02-15 11:03:46'),
(11, 1, 2, 'coucou', '2018-02-15 13:24:37');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `promoID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `dateLimite` datetime NOT NULL,
  `courseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `userID`, `promoID`, `date`, `content`, `dateLimite`, `courseID`) VALUES
(12, 1, 2, '2018-02-15 13:20:24', 'écrire une lettre au père noel en anglais', '2018-02-19 00:00:00', 15);

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

CREATE TABLE `promos` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `filiereID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promos`
--

INSERT INTO `promos` (`id`, `year`, `filiereID`) VALUES
(1, 2021, 1),
(2, 2018, 1),
(5, 2020, 1),
(6, 2019, 1),
(7, 2022, 10),
(8, 2020, 12);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `promoID` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `promoID`, `role`) VALUES
(1, 'test@hetic.net', 'Jean Admin', '$2y$12$YjjVhcOdT11N0Tz/gClSueAbfFkoYwkYbyVaNFH7BZvDNGzLA70EC', 2, 1),
(4, 'raphael.cerveaux@hetic.net', 'Cerveaux Raphael', '$2y$12$Tb2oOTT/f99RTT5ww9owyetBtpS69vH6dN7bbDhmGcFZt.nfnsfUS', 5, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
