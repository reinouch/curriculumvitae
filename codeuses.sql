-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 27 jan. 2018 à 08:00
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
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

DROP TABLE IF EXISTS `codeuses`;
CREATE TABLE IF NOT EXISTS `codeuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `date_de_naissance` varchar(50) NOT NULL,
  `mot_de_pass` varchar(50) NOT NULL,
  `resume_codeuses` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuses`
--

INSERT INTO `codeuses` (`id`, `nom`, `prenoms`, `telephone`, `email`, `photo`, `date_de_naissance`, `mot_de_pass`, `resume_codeuses`) VALUES
(5, 'djah', 'reine', '07132083', 'djahreine125@gmail.com', 'images (1).jpg', '14-11-94', 'fcdf25d6e191893e705819b177cddea0', 'je suis'),
(3, 'kouadio', 'mariane', '07132083', 'mariame@gmail.com', 'images (1).jpg', '14-11-94', 'fcdf25d6e191893e705819b177cddea0', 'je suis'),
(4, 'admin', 'admin', '07132083', 'admin@sheisthecode.org', 'tetchena4.jpg', '14-11-94', 'e3afed0047b08059d0fada10f400c1e5', 'je suis admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
