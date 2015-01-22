-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mar 15 Avril 2014 à 18:20
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `telecomapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `tt_articles`
--

CREATE TABLE IF NOT EXISTS `tt_articles` (
  `art_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `art_titre` varchar(1000) NOT NULL,
  `art_desc` text NOT NULL,
  `art_date` varchar(100) NOT NULL,
  `art_user` bigint(20) NOT NULL,
  `art_photo` varchar(250) NOT NULL,
  `art_valid` char(1) NOT NULL,
  `art_cat` int(11) NOT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tt_articles`
--

INSERT INTO `tt_articles` (`art_id`, `art_titre`, `art_desc`, `art_date`, `art_user`, `art_photo`, `art_valid`, `art_cat`) VALUES
(3, 'Test', 'test de rubrique', '04/15/14', 0, 'dubai2.jpg', '0', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tt_cat`
--

CREATE TABLE IF NOT EXISTS `tt_cat` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(1500) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tt_cat`
--

INSERT INTO `tt_cat` (`id_cat`, `categorie`) VALUES
(1, 'Offre mobile'),
(2, 'Offre fixe'),
(3, 'Offre internet');

-- --------------------------------------------------------

--
-- Structure de la table `tt_comments`
--

CREATE TABLE IF NOT EXISTS `tt_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(255) NOT NULL DEFAULT '',
  `comment_date` varchar(100) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`comment_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tt_comments`
--

INSERT INTO `tt_comments` (`comment_ID`, `comment_author`, `comment_author_email`, `comment_date`, `comment_content`, `comment_agent`) VALUES
(1, 'Monsieur WordPress', '', '2014-02-06 09:13:24', 'Bonjour, ceci est un commentaire.\nPour supprimer un commentaire, connectez-vous et affichez les commentaires de cet article. Vous pourrez alors les modifier ou les supprimer.', ''),
(2, '', 'test@test.com', 'March 1, 2014, 6:23 pm', 'test', 'test testt test tes t'),
(3, 'test', 'test@test.com', 'March 1, 2014, 6:24 pm', 'test', 'test testt test tes t'),
(4, 'test', 'test@test.com', 'March 1, 2014, 6:25 pm', 'test', 'test testt test tes t'),
(5, 'test', 'test@test.com', 'March 1, 2014, 6:25 pm', 'test', 'test testt test tes t'),
(6, 'test', 'test@test.com', 'March 1, 2014, 6:27 pm', 'test', 'test testt test tes t');

-- --------------------------------------------------------

--
-- Structure de la table `tt_news`
--

CREATE TABLE IF NOT EXISTS `tt_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_news` text NOT NULL,
  `news_date` varchar(100) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tt_news`
--

INSERT INTO `tt_news` (`news_id`, `news_news`, `news_date`) VALUES
(2, 'Test NouveautÃ©', '04/15/14'),
(3, 'Test d''avantage', '04/15/14');

-- --------------------------------------------------------

--
-- Structure de la table `tt_users`
--

CREATE TABLE IF NOT EXISTS `tt_users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_adress` tinytext NOT NULL,
  `user_type` char(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tt_users`
--

INSERT INTO `tt_users` (`user_id`, `user_pass`, `user_email`, `user_name`, `user_phone`, `user_adress`, `user_type`) VALUES
(1, '$P$B00C4BpIl.ysMlVubDVxJgAJVHDpQW/', 'mlle.ilhem@gmail.com', '', '', '', ''),
(2, 'test123', 'test@test.com', 'test test', '21000000', 'test', '0'),
(3, 'test1234', 'admin@telcom.tn', 'Admin TelCom', '21000000', 'test test', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
