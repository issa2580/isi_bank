-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Août 2019 à 22:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `isi_bank`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `agents`
--

INSERT INTO `agents` (`id`, `login`, `password`) VALUES
(1, 'line', '123'),
(2, 'papis', '123');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `telephone`, `email`, `adresse`) VALUES
(3, 'fall', 'Alioune', '78514124', 'fallline@gmail.com', 'golf sud'),
(4, 'Pape', 'samb', '777211210', 'samb@gmail.com', 'saint louis'),
(5, 'niang', 'bassirou', '777208716', 'sakata@gmail.com', 'golf sud');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE IF NOT EXISTS `comptes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_compte` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `nature` enum('Courant','Epargne') DEFAULT 'Epargne',
  `solde` int(11) DEFAULT NULL,
  `date_douverture` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_compte` (`numero_compte`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`id`, `numero_compte`, `id_client`, `nature`, `solde`, `date_douverture`) VALUES
(4, 145, 4, 'Epargne', 1000000, '0000-00-00'),
(7, 147852, 4, 'Epargne', 100000, '2019-08-22');

-- --------------------------------------------------------

--
-- Structure de la table `historique_prets`
--

CREATE TABLE IF NOT EXISTS `historique_prets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_compte` int(11) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `taux` int(11) DEFAULT NULL,
  `solde` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `prets`
--

CREATE TABLE IF NOT EXISTS `prets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_compte` int(11) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `taux` int(11) DEFAULT NULL,
  `solde` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_compte` (`id_compte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `prets`
--

INSERT INTO `prets` (`id`, `id_compte`, `montant`, `taux`, `solde`, `date_debut`) VALUES
(6, 7, 100000, 16, 4000000, '2019-08-09');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `comptes_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `prets`
--
ALTER TABLE `prets`
  ADD CONSTRAINT `prets_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `comptes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
