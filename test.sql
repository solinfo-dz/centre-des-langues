-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 15 juin 2022 à 10:15
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `dpt`
--

CREATE TABLE `dpt` (
  `id` int(11) NOT NULL,
  `id_faculte` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dpt`
--

INSERT INTO `dpt` (`id`, `id_faculte`, `name`) VALUES
(1, 1, 'Dpt mathématiques'),
(2, 1, 'dpt informatique'),
(3, 2, 'dpt sciences et technologie'),
(4, 2, 'dpt génie éléctrique'),
(5, 2, 'dpt génie mécanique'),
(6, 2, 'dpt génie civil'),
(7, 3, 'dpt physique'),
(8, 3, 'dpt chimie'),
(9, 4, 'dpt S.N.V'),
(10, 4, 'dpt N.T.A.A'),
(11, 5, 'dpt lettre arabe'),
(12, 5, 'dpt langue étrangère'),
(13, 6, 'dpt sciences commerciales'),
(14, 6, 'dpt sciences de gestion'),
(15, 6, 'dpt sciences économiques'),
(16, 6, 'dpt sciences financières et comptables'),
(17, 7, 'dpt droit'),
(18, 7, 'dpt sciences politiques'),
(19, 8, 'dpt sciences humaines'),
(20, 8, 'dpt sociologie'),
(21, 9, 'dpt biomédecine'),
(22, 9, 'dpt santé animale');

-- --------------------------------------------------------

--
-- Structure de la table `faculte`
--

CREATE TABLE `faculte` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faculte`
--

INSERT INTO `faculte` (`id`, `name`) VALUES
(1, 'faculté des mathématiques et de l\'informatique'),
(2, 'faculté des sciences appliquées'),
(3, 'faculté de sciences de la matière'),
(4, 'faculté des sciences de la nature et de lavie'),
(5, 'faculté de slettres et des langues'),
(6, 'faculté des sciences économiques, commerciales et sciences de gestion'),
(7, 'faculté des droits et sciences politiques'),
(8, 'faculté des sciences humaines et sociologie'),
(9, 'Institut des sciences vétérinaires');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dpt`
--
ALTER TABLE `dpt`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faculte`
--
ALTER TABLE `faculte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dpt`
--
ALTER TABLE `dpt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
