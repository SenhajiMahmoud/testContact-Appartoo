-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 16 Mai 2016 à 16:05
-- Version du serveur: 5.1.30
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `carnet`
--

-- --------------------------------------------------------

--
-- Structure de la table `carnetadresse`
--

CREATE TABLE IF NOT EXISTS `carnetadresse` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tel` varchar(45) NOT NULL DEFAULT '',
  `adresse` varchar(45) NOT NULL DEFAULT '',
  `nom` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `carnetadresse`
--

INSERT INTO `carnetadresse` (`id`, `tel`, `adresse`, `nom`) VALUES
(3, 'mah', 'Senha', '1351sqd3'),
(4, 'mah', 'Senha', '1351sqd3'),
(5, '2', 'Mahmoud ', '2'),
(6, '0698956751', 'Senhaji', '45 rue de choisy'),
(7, '0698956751', '45 Rue de Choisy', 'Mahmoud');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`id`, `login`, `password`) VALUES
(1, 'senhaji.mahmoud.mi@gmail.com', ''),
(2, 'senhaji.mahmoud.mi@gmail.com', 'a'),
(3, 'sema_ma@hotmail.fr', 'y');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Email` varchar(45) NOT NULL DEFAULT '',
  `tel` varchar(45) NOT NULL DEFAULT '',
  `motPasse` varchar(45) NOT NULL DEFAULT '',
  `adresse` varchar(45) NOT NULL DEFAULT '',
  `nom` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `Email`, `tel`, `motPasse`, `adresse`, `nom`) VALUES
(1, 'a@gmail.com', 'a', '', 'a', 'aa'),
(2, 'senhaji.mahmoud.mi@gmail.com', '0666065573', '', '45 Rue de Choisy', 'Mahmoud Senhaji Mimidi'),
(3, 'senhaji.mahmoud.mi@gmail.com', '0666065573', '', '45 Rue de Choisy', 'Mahmoud Senhaji Mimidi'),
(4, 'senhaji.mahmoud.mi@gmail.com', '0666065573', 'a', '45 Rue de Choisy', 'Mahmoud Senhaji Mimidi'),
(5, 'sema_ma@hotmail.fr', '0666065573', 'y', '45 Rue de Choisy', 'Mahmoud Senhaji Mimidi');
