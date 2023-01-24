-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 24 jan. 2023 à 16:48
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sound`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `art_lname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_fname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_artname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_picture` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`art_id`, `art_lname`, `art_fname`, `art_email`, `art_artname`, `art_picture`, `art_description`, `created_at`, `updated_at`) VALUES
(1, 'dupont', 'jean', 'dupont@gmail.com', 'article', 'S_63c7dcb94ccbb2.35035789.png', 'A tip on hyphens and underscore in Sass: Hyphens and underscores are considered to be the same. This means that mixin important-text and mixin important_text are considered as the same mixin!', '2023-01-18 11:49:13', '2023-01-18 11:49:13'),
(2, 'O&#039;Neil', 'Lane', 'lois@me.com', 'SuperMad', 'S_63c7f9a29eff79.08022834.png', 'C&#039;est une honte The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use seasonal ingredients.', '2023-01-18 13:52:34', '2023-01-18 13:52:34'),
(3, 'abo', 'aser', 'ser@gmail.com', 'thr', 'S_63c7ff13c22b33.27989236.png', 'Chaque être humain, tel qu&#039;il soit a ses échapatoires. Certaines sont assez spéciales comme: les sensations fortes, l&#039;aventure, les sports à haut risques et bien d&#039;autres; tandis que d&#039;autres sont assez répandues, communes. C&#039;est le cas de la cuisine, du dessin, de l&#039;art et aussi d&#039;une autre qui fait beaucoup plus l&#039;unanimité. Nous parlons ainsi de La musique.', '2023-01-18 14:15:47', '2023-01-18 14:15:47'),
(4, 'scott', 'asher', 'ash@gmail.com', 'captive', 'S_63c9292c6a35b7.70873597.jpg', 'je vais t&#039;expliquer qui je suis q tu sache clairement. J&#039;ai le coeur noir comme le dress-code d&#039;un enterrement; j&#039;collectionne les femmmes comme si c&#039;était des diamants, des diamants, mais pas dans le bon sens. Célibataire ou en couple je me loupe rarement, malgré le fait q je sois au courant pas d&#039;empêchement. Le pire c&#039;est qu&#039;à la fin de l&#039;histoire j&#039;me déclare fièrement, ton meilleur amant. Je sais utilisé les mots ouais, je sais comment te rendre mauvaise sans q tu t&#039;en aperçoives. Te rendre hystérique dans le love, devenir un point noir voir un mauve, sans q tu demandes pourquoi. La seule chose de vrai c&#039;est qu&#039;on s&#039;apprécie, les pages seront noircies par nos récits. j&#039;te laisse croire q c&#039;est toi qui me résiste, qui me résiste, qui me résiste. J&#039;ai trop joué avec les coeurs de toutes celles q j&#039;appelle mi amor; je suis tombé sur plus d&#039;une âme-soeur mais je cherche encore, je cherche encore. Et tout au fond de moi j&#039;ai peur de, finir seule avec mes remords. J&#039;ai laissé trop de coeur en pleurs, donc pour moi c&#039;est mort, je sais q c&#039;est mort', '2023-01-19 11:27:40', '2023-01-19 11:27:40'),
(5, 'zogo', 'hilary', 'hila@gmail.com', 'Highfive university', 'S_63cffcca35e183.67954110.png', 'Une nouvelle école de codage en plein essor. Elle se base sur une méthode d&#039;apprentissage de programmation française avec laquelle elle est partenaire.\r\nIls reçoivent des cours assez détaillés par leurs formateurs qui, eux aussi ont eu l&#039;honneur de suivre une période de bootcamp, avec pour formateurs des programmeurs certifiés de la 3WAcademy: le fameux partenaire. Donc les étudiants ont été obligés de faire fit de certaines choses afin de pouvoir être au summun de leur capacité et ainsi survivre au bootcamp qui ne durera q 5 mois', '2023-01-24 15:44:10', '2023-01-24 15:44:10');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  `com_comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`com_id`, `art_id`, `com_comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'cool l&#039;info', '2023-01-21 11:33:37', '2023-01-21 11:33:37'),
(2, 1, 'cc ma vie', '2023-01-21 11:36:07', '2023-01-21 11:36:07'),
(3, 4, 'hello', '2023-01-21 11:39:46', '2023-01-21 11:39:46'),
(4, 4, 'hello', '2023-01-21 11:43:04', '2023-01-21 11:43:04'),
(5, 4, 'cc', '2023-01-21 11:43:11', '2023-01-21 11:43:11'),
(6, 4, 'cc', '2023-01-21 11:43:41', '2023-01-21 11:43:41');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `req_id` int(11) NOT NULL,
  `req_lname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_fname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_messages` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`req_id`, `req_lname`, `req_fname`, `req_email`, `req_messages`, `created_at`, `updated_at`) VALUES
(1, 'lakestone', 'kai', 'kai@gmail.com', 'You all know us. And we all know you. We are getting married lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint\r\n      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco\r\n      laboris nisi ut aliquip ex ea commodo consequat.', '2023-01-19 17:51:19', '2023-01-19 17:51:19'),
(2, 'scott', 'asher', 'ash@gmail.com', 'Nous mettons tout à votre disposition pour rendre votre navigation sur notre page la plus fluide possible. Dans cette optique, nous souhaitons avoir vos avis, vos suggestions et même toutes préoccupations pouvant satisfaire vos attentes. N&#039;hésitez pas à nous contacter\r\n\r\nVous pouvez également nous contacter par téléphone 458267910255 ou par email sound@gmail.com, ou pouvez nous envoyer un message ici:', '2023-01-19 17:52:04', '2023-01-19 17:52:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_lastname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_firstname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pic` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','users') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_lastname`, `user_firstname`, `user_username`, `user_email`, `user_password`, `user_pic`, `role`) VALUES
(1, 'zogo', 'hilary', 'larylara', 'lary@gmail.com', '$2y$10$DMBJApyrFu8A4RopcKqkDuAwIwJigmlyMZLd8lvMtXPnRnF214kY.', 'S_63c94b93ce2da6.00125268.jpg', 'admin'),
(2, 'lakestone', 'kai', 'boy', 'kai@gmail.com', '$2y$10$dteNaAAkPuC4MYV7XqKb3.eQEUzkVRhJGpF0bX2dBQiTXyjLnfBmO', 'S_63c94befe14961.92417355.jpg', 'users'),
(3, 'Akekourou', 'gerard', 'akek', 'akek@gmail.com', '$2y$10$ULx/0R52oA6oRK9X0LxFHeb5IFKgKvcGikSQOiwzRbC/.PRPKey8i', 'S_63cfdf5635b394.38943639.jpg', 'users');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `art_id` (`art_id`);

--
-- Index pour la table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`art_id`) REFERENCES `articles` (`art_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
