-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 août 2023 à 15:43
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `candidature`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_c`
--

CREATE TABLE `admin_c` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `username` text NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin_c`
--

INSERT INTO `admin_c` (`id`, `nom`, `prenom`, `sexe`, `username`, `mdp`) VALUES
(1, 'Khasa', 'Cyclope ', 'M', 'cyclopekhasa', 'ae52e3270088c8050b351a90ebd86616600a7219'),
(2, 'Khasa', 'Cyclope ', 'M', 'cyclopekhasa', 'ae52e3270088c8050b351a90ebd86616600a7219');

-- --------------------------------------------------------

--
-- Structure de la table `depute_national`
--

CREATE TABLE `depute_national` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `voies` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depute_national`
--

INSERT INTO `depute_national` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `voies`, `photo`) VALUES
(1, 'Tembo', 'Lutete', 'Remy', 'M', 0, 'images_nationales/1.jpg'),
(2, 'Khasa', 'Mbumba', 'Roger', 'M', 0, 'images_nationales/2.jpg'),
(3, 'Nsimba ', 'Matondo', 'Modero', 'M', 0, 'images_nationales/3.jpeg'),
(4, 'Nkusu', 'Kunzi', 'Déogratias', 'M', 0, 'images_nationales/4.jpg'),
(5, '  Luthelo ', 'Nyudi', 'Antoine', 'M', 0, 'images_nationales/5.jpg'),
(6, 'Ntambwe ', 'Mposhi', 'Eliezer ', 'M', 0, 'images_nationales/7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `depute_provincial`
--

CREATE TABLE `depute_provincial` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `voies` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depute_provincial`
--

INSERT INTO `depute_provincial` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `voies`, `photo`) VALUES
(1, 'Kalemba', 'Kalayame ', 'Donnel', 'M', 0, 'images_provinciaux/1.jpg'),
(2, 'Muloki', 'Miahumba', 'blaise', 'M', 0, 'images_provinciaux/2.jpg'),
(3, 'Miahumba', 'Muloki', 'Milton', 'M', 0, 'images_provinciaux/3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `electeurs`
--

CREATE TABLE `electeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `lieunaissance` varchar(255) NOT NULL,
  `datedenaissance` date NOT NULL,
  `adresse` text NOT NULL,
  `origine` text NOT NULL,
  `nompere` varchar(255) NOT NULL,
  `nomere` varchar(255) NOT NULL,
  `nn` text NOT NULL,
  `voter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `electeurs`
--

INSERT INTO `electeurs` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `lieunaissance`, `datedenaissance`, `adresse`, `origine`, `nompere`, `nomere`, `nn`, `voter`) VALUES
(1, 'KHASA', 'MBUMBA', 'ROGER', 'M', 'MUANDA', '2023-05-23', 'OCEAN/MOANDA/Kongo Central', 'LUBOLO/TSHELA/Kongo Central', 'KHASA', 'SEVO', '30546950945', 0);

-- --------------------------------------------------------

--
-- Structure de la table `presidentielle`
--

CREATE TABLE `presidentielle` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `voies` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presidentielle`
--

INSERT INTO `presidentielle` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `voies`, `photo`) VALUES
(1, 'Tshilombo', 'Tshisekedi ', 'Antoine', 'M', 0, 'images_presidents/1.jpg'),
(2, 'Kamerhe ', 'Lwa Kanyiginyi', 'Vital ', 'M', 0, 'images_presidents/2.png'),
(3, 'Katumbi ', 'Chapwe ', 'Moïse ', 'M', 0, 'images_presidents/3.jpg'),
(4, 'Madidi ', 'Fayulu', 'Martin', 'M', 0, 'images_presidents/4.jpg'),
(5, 'Jean-Pierre ', 'Bemba', 'Gombo ', 'M', 0, './images_presidents/5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vote_national`
--

CREATE TABLE `vote_national` (
  `id_vote` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour_vote` datetime NOT NULL DEFAULT current_timestamp(),
  `voies` int(11) NOT NULL,
  `nom_nat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vote_national`
--

INSERT INTO `vote_national` (`id_vote`, `id`, `jour_vote`, `voies`, `nom_nat`) VALUES
(1, 3, '2023-08-03 00:28:34', 1, 'Nsimba  Matondo Modero'),
(2, 3, '2023-08-03 00:32:12', 1, 'Nsimba  Matondo Modero'),
(3, 1, '2023-08-03 11:09:08', 1, 'Tembo Lutete Remy'),
(4, 4, '2023-08-06 15:27:55', 1, 'Nkusu Kunzi Déogratias');

-- --------------------------------------------------------

--
-- Structure de la table `vote_president`
--

CREATE TABLE `vote_president` (
  `id_vote` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour_vote` datetime NOT NULL DEFAULT current_timestamp(),
  `voies` int(11) NOT NULL,
  `nom_pre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vote_president`
--

INSERT INTO `vote_president` (`id_vote`, `id`, `jour_vote`, `voies`, `nom_pre`) VALUES
(1, 4, '2023-08-03 00:28:34', 1, 'Madidi  Fayulu Martin'),
(2, 1, '2023-08-03 00:32:12', 1, 'Tshilombo Tshisekedi  Antoine'),
(3, 1, '2023-08-03 11:09:08', 1, 'Tshilombo Tshisekedi  Antoine'),
(4, 6, '2023-08-06 15:27:55', 1, 'Ramazani  Shadary Emmanuel ');

-- --------------------------------------------------------

--
-- Structure de la table `vote_provincial`
--

CREATE TABLE `vote_provincial` (
  `id_vote` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour_vote` datetime NOT NULL DEFAULT current_timestamp(),
  `voies` int(11) NOT NULL,
  `nom_pro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vote_provincial`
--

INSERT INTO `vote_provincial` (`id_vote`, `id`, `jour_vote`, `voies`, `nom_pro`) VALUES
(1, 2, '2023-08-03 00:28:34', 1, 'Muloki Miahumba blaise'),
(2, 1, '2023-08-03 00:32:12', 1, 'Kalemba Kalayame  Donnel'),
(3, 1, '2023-08-03 11:09:08', 1, 'Kalemba Kalayame  Donnel'),
(4, 2, '2023-08-06 15:27:55', 1, 'Muloki Miahumba blaise');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_c`
--
ALTER TABLE `admin_c`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depute_national`
--
ALTER TABLE `depute_national`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depute_provincial`
--
ALTER TABLE `depute_provincial`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `electeurs`
--
ALTER TABLE `electeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presidentielle`
--
ALTER TABLE `presidentielle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vote_national`
--
ALTER TABLE `vote_national`
  ADD PRIMARY KEY (`id_vote`);

--
-- Index pour la table `vote_president`
--
ALTER TABLE `vote_president`
  ADD PRIMARY KEY (`id_vote`);

--
-- Index pour la table `vote_provincial`
--
ALTER TABLE `vote_provincial`
  ADD PRIMARY KEY (`id_vote`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_c`
--
ALTER TABLE `admin_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `depute_national`
--
ALTER TABLE `depute_national`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `depute_provincial`
--
ALTER TABLE `depute_provincial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `electeurs`
--
ALTER TABLE `electeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `presidentielle`
--
ALTER TABLE `presidentielle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vote_national`
--
ALTER TABLE `vote_national`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vote_president`
--
ALTER TABLE `vote_president`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vote_provincial`
--
ALTER TABLE `vote_provincial`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
