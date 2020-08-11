-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 11 août 2020 à 16:17
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author`) VALUES
(2, 'Coronavirus à Strasbourg : Quatre nouveaux cas au Racing, le match amical contre Reims annulé et on est bien content', 'La Ligue 1 va-t-elle pouvoir reprendre ? Plusieurs signaux inquiétants apparaissent ces derniers jours. Après l’annulation du match amical OM-Montpellier ce matin, le  Racing Club de Strasbourg annonce ce mardi soir que quatre nouveaux cas positifs au Covid-19 ont été détectés dans l’équipe professionnelle. « Ces tests ont été organisés [lundi] suite à la détection de cinq cas positifs le vendredi 29 juillet », précise le RC Strasbourg sur son site Internet.\r\n\r\nLes joueurs contaminés ont été placés en quatorzaine. « Nous travaillons en étroite collaboration et en totale transparence avec l’Agence régionale de Santé », assure François Pietra, le médecin du club. Les dirigeants alsaciens ont décidé d’annuler le match amical qui devait opposer le Racing au stade de Reims samedi. Un match amical contre Dijon avait déjà été annulé pour les mêmes raisons.     ', 'Pierre Meness'),
(3, 'Coronavirus à Paris : Comment fonctionnent les tests de dépistage dans les aéroports ?', 'Un dispositif conséquent. Depuis le 1er août, les passagers en provenance de 16 pays « à forte circulation du coronavirus » doivent se soumettre à un test de dépistage dans la foulée de leur arrivée sur le tarmac des aéroports français. Concentrant une grande partie des liaisons internationales, les aéroports parisiens de Roissy-Charles de Gaulle et Orly sont en pointe de ce dispositif.\r\n\r\nAu total, 556 passagers sur 2.671 ont d’ores et déjà été testés samedi dans ces aéroports au premier jour de l’entrée en vigueur du contrôle sanitaire et un second bilan doit être publié prochainement. Parcours, moyens déployés et temps d’attente… 20 Minutes fait un point sur la mesure.\r\n\r\nQuelle est la mesure en vigueur ?\r\nDepuis samedi matin, les passagers âgés de plus de 11 ans arrivant par avion dans un aéroport du territoire français, en provenance de seize pays « à risque » ou dite sur liste « écarlate » doivent présenter à leur arrivée « la preuve du résultat d’un examen biologique de dépistage virologique réalisé moins de 72 heures avant le vol, ne concluant pas à une contamination par le Covid-19 », indique le ministère de l’Intérieur. Si le passager ne possède pas ce document, il est invité à se faire tester dans un espace spécifique aménagé dans l’aéroport. En raison de leur rayonnement et de leur positionnement, les aéroports parisiens de Roissy Charles de Gaulle et Orly sont particulièrement sollicités.\r\n\r\nQui est concerné par ces tests ?\r\nLa liste des 16 pays est la suivante : Koweït, Bahreïn, les Emirats arabes unis, les Etats-Unis, le Panama, l’Afrique du Sud, l’Algérie, le Brésil, l’Inde, Israël, Madagascar, Oman, le Pérou, le Qatar, la Serbie et la Turquie. « La liste est réactualisée toutes les deux semaines », précise l’Agence Régionale de Santé d’Ile-de-France (ARS), sollicité par 20 Minutes. Les frontières étant fermées avec les pays en question, les passagers sont exclusivement des Français expatriés de retour, des personnes ayant la double nationalité ou des étrangers disposant d’un emploi et d’une adresse dans l’Hexagone. Mais tous sont soumis à la même règle : « Sans ce test, les voyageurs ne peuvent pas rentrer sur le territoire français », rappelle l’Agence Régionale de Santé d’Ile-de-France. Il n’y a donc aucun touriste.', 'Ton père'),
(7, 'Coronavirus à Strasbourg : Quatre nouveaux cas au Racing, le match amical contre Reims annulé', 'La Ligue 1 va-t-elle pouvoir reprendre ? Plusieurs signaux inquiétants apparaissent ces derniers jours. Après l’annulation du match amical OM-Montpellier ce matin, le  Racing Club de Strasbourg annonce ce mardi soir que quatre nouveaux cas positifs au Covid-19 ont été détectés dans l’équipe professionnelle. « Ces tests ont été organisés [lundi] suite à la détection de cinq cas positifs le vendredi 29 juillet », précise le RC Strasbourg sur son site Internet.Les joueurs contaminés ont été placés en quatorzaine. « Nous travaillons en étroite collaboration et en totale transparence avec l’Agence régionale de Santé », assure François Pietra, le médecin du club. Les dirigeants alsaciens ont décidé d’annuler le match amical qui devait opposer le Racing au stade de Reims samedi. Un match amical contre Dijon avait déjà été annulé pour les mêmes raisons.', 'Pierre Menes');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArticle` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idArticle` (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `idArticle`, `pseudo`, `content`) VALUES
(1, 3, 'jako', 'super article merci '),
(2, 2, 'test', 'test'),
(3, 3, 'test', 'test');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
