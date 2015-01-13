-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 10.246.16.184:3306
-- Generation Time: Aug 18, 2013 at 12:25 PM
-- Server version: 5.1.66-0+squeeze1
-- PHP Version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myidea_fr`
--
CREATE DATABASE `myidea_fr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myidea_fr`;

-- --------------------------------------------------------

--
-- Table structure for table `idee`
--

CREATE TABLE IF NOT EXISTS `idee` (
  `id_idee` int(100) NOT NULL AUTO_INCREMENT,
  `titre` varchar(32) NOT NULL,
  `desc_simple` varchar(255) NOT NULL,
  `desc_complete` varchar(255) NOT NULL,
  `nb_plus` int(255) NOT NULL,
  `nb_moins` int(255) NOT NULL,
  PRIMARY KEY (`id_idee`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `idee`
--

INSERT INTO `idee` (`id_idee`, `titre`, `desc_simple`, `desc_complete`, `nb_plus`, `nb_moins`) VALUES
(1, 'idee 1', 'test idee geniale de ouf ', 'test ideetest idee geniale de ouf test idee geniale de ouf test idee geniale de ouf test idee geniale de ouf test idee geniale de ouf test idee geniale de ouf  geniale de ouf ', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id_tag` int(100) NOT NULL AUTO_INCREMENT,
  `id_idee` int(100) NOT NULL,
  `nom_tag` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(100) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(32) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `photo_profil` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `pseudo` (`pseudo`,`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo`, `mdp`, `mail`, `date_de_naissance`, `photo_profil`) VALUES
(1, 'root', '21232f297a57a5a743894a0e4a801fc3', 'azer', '2013-07-17', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
