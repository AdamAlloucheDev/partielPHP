-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 11 mai 2021 à 18:36
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `partiel`
--

-- --------------------------------------------------------

--
-- Structure de la table `memo_blocs`
--

CREATE TABLE `memo_blocs` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `summary` text,
  `content` text NOT NULL,
  `style` varchar(256) NOT NULL DEFAULT '#ffff88'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `memo_blocs`
--

INSERT INTO `memo_blocs` (`id`, `title`, `summary`, `content`, `style`) VALUES
(1, 'Titre du memo bloc (obligatoire)', 'Description du memo bloc en italic (non obligatoire)', 'Contenu du memo bloc (obligatoire)\r\n\r\nL\'affichage du contenu prend en compte les sauts de ligne\r\n<p>mais <br> n\'interprète pas <br> les balises <br> HTML ou JS</p>\r\n📑 nl2br()\r\n📑 htmlspecialchars()', '#00FF00'),
(2, 'Liste de courses', '', 'Sel\r\nFarine\r\nViande hachée\r\nPoivrons\r\nOignons\r\nBières 🥰', '#ffff00'),
(3, 'Films et séries à voir', '', 'Interstellar 🚀\r\nInception 💤\r\nShutter Island 🕵️', '#0000FF'),
(7, 'x', 'fdvcxw', 'bdfsvc', ''),
(8, 'tets', '', 'dxfvdvs', '#ffff88'),
(9, 'aze', '', 'arega', '#ffff88'),
(10, 'dvcsbsdvs', 'bfsdvswc', 'sbdfvwxcx😅', ''),
(11, 'ev', 'AVD', 'evc🚀', '#FF0000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `memo_blocs`
--
ALTER TABLE `memo_blocs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `memo_blocs`
--
ALTER TABLE `memo_blocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
