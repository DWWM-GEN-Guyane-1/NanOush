-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 23 nov. 2018 à 10:22
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` text NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `tel`, `login`, `password`) VALUES
(4, 'Dupond', 'Lola', 'lola.dupond@gmail.com', '0214567893', 'lola', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(5, 'Sanchez', 'AnaÃ¯s', 'sanchezanais1@gmail.com', '0621176797', 'anais', 'b0305a80cc6fe62e26014101af72bb986061ee9a'),
(6, 'Mace', 'Marie', 'marie.mace@gmail.com', '0214578941', 'marie', '3be803573bf56690e1c7b7b457dc45a08047eec5'),
(7, 'Zinck', 'Laura', 'laura.zinck@gmail.com', '0645781425', 'laura', '91b25c04f92efe0bc87e0cb53fa885732ce30222'),
(8, 'Clochette', 'Tink', 'tink@gmail.com', '0514897453', 'tink', 'fa3d1b70fe7c648a7dff13c4c9a7dc6e4219b9f5'),
(9, 'Mouse', 'Mickey', 'mickey.mouse@gmail.com', '0145678941', 'mickey', '2f35b2135f4227f934fb150f7ea9f57434a556f1'),
(10, 'Mouse', 'Minnie', 'minnie.mouse@gmail.com', '0101010101', 'minnie', '2f35b2135f4227f934fb150f7ea9f57434a556f1'),
(11, 'Duck', 'Donald', 'donald.duck@gmail.com', '0303030303', 'Donald', '0f91787c8088296ea1439e159e4845b7b4cb5df5'),
(12, 'Duck', 'Daisy', 'daisy.duck@gmail.com', '0512478945', 'daisy', '53e11eb7b24cc39e33733a0ff06640f1b39425ea'),
(13, 'Goofy', 'Dingo', 'goody.dingo@gmail.com', '0145784251', 'Goofy', '0375aa5a46bc0b3e1b53d949ec1045bc1f080108'),
(14, 'Mouse', 'Dingo', 'mouse.dingo@gmail.com', '0245136541', 'dingo', '0375aa5a46bc0b3e1b53d949ec1045bc1f080108'),
(15, 'Tictac', 'Tic', 'tic@gmail.com', '0754125664', 'tic', '8b4c35a202a126f75a3941a0516a090f5aa274ff'),
(16, 'Sanchez', 'Gémy', 'gemy@gmail.com', '0214578941', 'gemy', '06a15cd6ecbba31fdc3512ed2b5196800497beeb'),
(17, 'Denninger', 'Gauthier', 'gauthier.denninger@gmail.com', '0615550485', 'Louchus', '0076b1fa26a8f674067c133118f7d439940629ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
