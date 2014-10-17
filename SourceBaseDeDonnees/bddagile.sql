-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Octobre 2014 à 10:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bddagile`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date DEFAULT NULL,
  `date_fin` date NOT NULL,
  `libelle` varchar(25) NOT NULL,
  `Id_Statut` int(11) NOT NULL,
  `Id_Typecommande` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Commande_Id_Statut` (`Id_Statut`),
  KEY `FK_Commande_Id_Typecommande` (`Id_Typecommande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `modifie`
--

CREATE TABLE IF NOT EXISTS `modifie` (
  `date_modif` date NOT NULL,
  `etat` varchar(25) NOT NULL,
  `Id` int(11) NOT NULL,
  `Id_Commande` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`Id_Commande`),
  KEY `FK_modifie_Id_Commande` (`Id_Commande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `typecommande`
--

CREATE TABLE IF NOT EXISTS `typecommande` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `Date_creation` date NOT NULL,
  `Id_Role` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_user_Id_Role` (`Id_Role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_Commande_Id_Typecommande` FOREIGN KEY (`Id_Typecommande`) REFERENCES `typecommande` (`Id`),
  ADD CONSTRAINT `FK_Commande_Id_Statut` FOREIGN KEY (`Id_Statut`) REFERENCES `statut` (`Id`);

--
-- Contraintes pour la table `modifie`
--
ALTER TABLE `modifie`
  ADD CONSTRAINT `FK_modifie_Id_Commande` FOREIGN KEY (`Id_Commande`) REFERENCES `commande` (`Id`),
  ADD CONSTRAINT `FK_modifie_Id` FOREIGN KEY (`Id`) REFERENCES `user` (`Id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_Id_Role` FOREIGN KEY (`Id_Role`) REFERENCES `role` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
