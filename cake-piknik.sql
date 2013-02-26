-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 26 Février 2013 à 14:18
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cake-piknik`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Grande faim'),
(2, 'Sucre'),
(3, 'Sale'),
(4, 'Petite faim'),
(5, 'Ogre');

-- --------------------------------------------------------

--
-- Structure de la table `categories_recipes`
--

CREATE TABLE IF NOT EXISTS `categories_recipes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categories_recipes`
--

INSERT INTO `categories_recipes` (`id`, `categorie_id`, `recipe_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories_users`
--

CREATE TABLE IF NOT EXISTS `categories_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categories_users`
--

INSERT INTO `categories_users` (`id`, `cat_id`, `user_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `user_id`, `name`, `description`, `date`, `recipe_id`) VALUES
(1, 2, 'Grosse Chouille chez Bob', 'On se la met bien à partir de 20h. Cuisine raffinee et Coktails a volonte', '2013-02-27 20:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `events_users`
--

CREATE TABLE IF NOT EXISTS `events_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `events_users`
--

INSERT INTO `events_users` (`id`, `event_id`, `user_id`) VALUES
(1, 1, 3),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'administrators'),
(2, 'members');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `dest_id`, `message`, `date`) VALUES
(1, 2, 3, 'Salut ma grande', '2013-02-25 12:00:00'),
(2, 3, 2, 'Salut beau gosse', '2013-02-25 13:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `mood`
--

CREATE TABLE IF NOT EXISTS `mood` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mood`
--

INSERT INTO `mood` (`id`, `name`) VALUES
(1, 'AffamÃ©'),
(2, 'Desespere(e)'),
(3, 'Gourmand(e)');

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`) VALUES
(1, 'Potofeu', 'Avec une bonne bouteille', 'potofeu.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` char(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `sexe` tinyint(1) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `mood_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_seen` datetime DEFAULT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `bio`, `sexe`, `image`, `mood_id`, `created`, `last_seen`, `group_id`) VALUES
(1, 'Paul', 'test', 'paul@paul', 'Je m''appel Paul', 1, '1.png', 1, '2013-02-25 11:00:00', '2013-02-25 11:00:00', 1),
(2, 'Bob', NULL, 'bob@bob', 'Je m''appel Bob', 1, '10.png', 2, '2013-02-25 11:00:00', '2013-02-25 11:00:00', 1),
(3, 'Alice', NULL, 'alice@alice', 'Je m''appel Alice', 0, '3.png', 3, '2013-02-25 11:00:00', '2013-02-25 11:00:00', 1),
(4, 'nico', '7c35cc168923ce7cfbf1c0be54637a6b1885587f', 'nico@nico.fr', 'mhhh', 1, 'nico.jpg', NULL, '2013-02-26 09:07:11', '2013-02-26 09:06:00', 2),
(5, 'test', '7c35cc168923ce7cfbf1c0be54637a6b1885587f', 'test@test.fr', 'Vag y ', 0, 'vagy.png', NULL, '2013-02-26 09:49:59', '2013-02-26 09:49:00', 2),
(6, 'admin', '1d760f0957cc7d6da138cca03d1c68e7aff237b8', 'admin@admin.fr', 'fezfefez', 1, 'admin.jpg', NULL, '2013-02-26 13:53:39', '2013-02-26 13:52:00', 1);
