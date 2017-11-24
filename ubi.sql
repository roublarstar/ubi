-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 nov. 2017 à 17:01
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ubi`
--
CREATE DATABASE IF NOT EXISTS `ubi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ubi`;

-- --------------------------------------------------------

--
-- Structure de la table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `rate` tinyint(2) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL,
  `modified` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `subject`, `rate`, `created`, `modified`) VALUES
(2, 3, 'francais', 12, '2017-11-20 19:58:24', '2017-11-20 19:58:24'),
(3, 3, 'français', 100, '2017-11-20 20:05:42', '2017-11-20 20:05:42'),
(4, 3, 'math', 0, '2017-11-20 20:20:40', '2017-11-20 20:20:40'),
(5, 3, 'espagnol', 12, '2017-11-23 13:54:22', '2017-11-23 13:54:22'),
(6, 3, 'espagnol', 12, '2017-11-23 13:54:52', '2017-11-23 13:54:52'),
(7, 3, 'espagnol', 12, '2017-11-23 13:55:19', '2017-11-23 13:55:19'),
(8, 3, 'espagnol', 12, '2017-11-23 13:58:22', '2017-11-23 13:58:22'),
(9, 3, 'espagnol', 12, '2017-11-23 13:58:32', '2017-11-23 13:58:32'),
(10, 3, 'anglais', 18, '2017-11-23 13:58:43', '2017-11-23 13:58:43'),
(11, 3, 'anglais', 18, '2017-11-23 13:58:49', '2017-11-23 13:58:49'),
(12, 3, 'anglais', 18, '2017-11-23 14:00:06', '2017-11-23 14:00:06'),
(13, 3, 'anglais', 18, '2017-11-23 14:01:43', '2017-11-23 14:01:43'),
(14, 3, 'test45454545', 10, '2017-11-23 14:03:37', '2017-11-23 14:03:37'),
(15, 3, 'test', 12, '2017-11-23 14:04:22', '2017-11-23 14:04:22'),
(16, 3, 'test', 12, '2017-11-23 14:06:05', '2017-11-23 14:06:05'),
(17, 3, 'fgdfgdfg', 12, '2017-11-23 14:06:37', '2017-11-23 14:06:37'),
(18, 3, 'fdfdsf', 8, '2017-11-23 14:06:45', '2017-11-23 14:06:45'),
(19, 3, 'fdfdsf', 8, '2017-11-23 14:06:52', '2017-11-23 14:06:52'),
(20, 3, 'fdfdsf', 8, '2017-11-23 14:06:53', '2017-11-23 14:06:53'),
(21, 3, 'fdfdsf', 8, '2017-11-23 14:07:19', '2017-11-23 14:07:19'),
(22, 3, 'fdfdsf', 8, '2017-11-23 14:09:29', '2017-11-23 14:09:29'),
(23, 3, 'fdfdsf', 8, '2017-11-23 14:09:42', '2017-11-23 14:09:42'),
(24, 3, 'azaz', 2, '2017-11-23 14:10:13', '2017-11-23 14:10:13'),
(25, 3, 'azaz', 2, '2017-11-23 14:10:46', '2017-11-23 14:10:46'),
(26, 3, 'aaa', 11, '2017-11-23 14:11:17', '2017-11-23 14:11:17'),
(27, 3, 'aaa', 11, '2017-11-23 14:12:05', '2017-11-23 14:12:05'),
(28, 3, 'aaa', 11, '2017-11-23 14:12:12', '2017-11-23 14:12:12'),
(29, 3, 'test', 8, '2017-11-23 14:12:34', '2017-11-23 14:12:34'),
(30, 3, 'test', 5, '2017-11-23 14:14:56', '2017-11-23 14:14:56'),
(31, 3, 'test', 12, '2017-11-23 15:38:43', '2017-11-23 15:38:43');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `created` timestamp NOT NULL,
  `modified` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `birthday`, `created`, `modified`) VALUES
(3, 'pierre1fgfgfgf', 'terrier2hfgfgfgfgfgf', '2011-11-23', '2017-11-20 19:25:35', '2017-11-23 15:51:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `FK_grades_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
