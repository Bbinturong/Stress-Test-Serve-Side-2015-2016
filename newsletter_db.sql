-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mar 12 Janvier 2016 à 17:01
-- Version du serveur :  5.5.41-log
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `newsletter_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mdp`) VALUES
(0, 'root', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `heure` datetime DEFAULT NULL,
  `personal_id` varchar(255) NOT NULL,
  `valid` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `email`
--

INSERT INTO `email` (`id`, `email`, `heure`, `personal_id`, `valid`) VALUES
(7, 'lolololo@lili.be', '2016-01-12 11:51:05', '5694e8a986c05', 0),
(8, 'bruno.mattelet@gmail.com', '2016-01-12 11:51:12', '5694e8b01c026', 0),
(9, 'dexter-bruno@hotmail.com', '2016-01-12 12:01:58', '5694eb36ee5f7', 0),
(10, 'dexter-bruno@hotmail.com', '2016-01-12 12:11:49', '5694ed8519abf', 1),
(11, 'dexter-bruno@hotmail.com', '2016-01-12 12:12:05', '5694ed95a2205', 0),
(13, 'bruno.mattelet@gmail.com', '2016-01-12 12:18:27', '5694ef13a0d82', 0),
(14, 'bruno.mattelet@gmail.com', '2016-01-12 12:23:23', '5694f03bdec89', 0),
(15, 'dexter-bruno@hotmail.com', '2016-01-12 12:26:07', '5694f0df66a0d', 0),
(16, 'dexter-bruno@hotmail.com', '2016-01-12 12:27:12', '5694f12033f0e', 0),
(17, 'bruno.mattelet@gmail.com', '2016-01-12 12:27:26', '5694f12e214e9', 0),
(18, 'bruno.mattelet@gmail.com', '2016-01-12 12:28:42', '5694f17a2e50b', 0),
(19, 'bruno.mattelet@gmail.com', '2016-01-12 12:28:43', '5694f17b4ca75', 0),
(21, 'dexter-bruno@hotmail.com', '2016-01-12 13:45:04', '5695036011f66', 1),
(22, 'dexter-bruno@hotmail.com', '2016-01-12 13:45:53', '5695039162e1e', 0),
(23, 'bruno.mattelet@gmail.com', '2016-01-12 13:51:30', '569504e28f42e', 0),
(24, 'bruno.mattelet@gmail.com', '2016-01-12 13:52:02', '569505027c0c2', 1),
(25, 'dexter-bruno@hotmail.com', '2016-01-12 14:01:39', '56950743a146f', 0),
(26, 'lolo@dd.be', '2016-01-12 14:39:59', '5695103fad4f8', 0),
(27, 'ssssololo@lili.be', '2016-01-12 15:54:38', '569521be352c8', 0),
(28, 'mattelet.bruno@gmail.com', '2016-01-12 16:04:26', '5695240a396ab', 0),
(29, 'hello@hotmail.com', '2016-01-12 16:08:42', '5695250a51d8f', 0),
(30, 'test@test.test', '2016-01-12 16:21:19', '569527ff3406b', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
