-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 21 Août 2020 à 19:54
-- Version du serveur :  5.7.30-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ProjetJM`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `post` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`ID`, `post`, `date`, `content`) VALUES
(1, 1, '2020-08-15', 'L\'article qui fait rage');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `post_title` text,
  `post_content` longtext,
  `post_image` text,
  `post_date` date DEFAULT NULL,
  `post_author` varchar(255) DEFAULT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`ID`, `post_title`, `post_content`, `post_image`, `post_date`, `post_author`, `post_status`, `user`) VALUES
(1, 'Bonjour la nouvelle post\r\n', 'Je suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi\r\nJe suis le premier contenue de mon article et je vous remercie pour tout ce que vous avez fait pour moi', 'http://via.placeholder.com/500x500', '2020-08-15', 'joel', 'draft', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `name`, `username`, `password`, `email`) VALUES
(1, NULL, 'joel', 'joel', 'joelkabamba35@gmail.com'),
(2, 'kabamba', 'joel', 'joelkabamba35@gmail.com', '$2y$10$LpRbyhDVrh6.YmuTJJb4H.exdyRDmySAN2UTayjS..zsgYKCY/G1m'),
(3, 'Mushiba', 'Mushiba', '$2y$10$C9HjTOAf9P9GgCMLkphEO.lfSsM9fTu3JhLi3vlxyLmz6ZjkhOFMK', 'mushiba@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post` (`post`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post`) REFERENCES `post` (`ID`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
