-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 31 jan. 2023 à 15:41
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
(1, 'zogo', 'hilary', 'hila@gmail.com', 'Le retour d’Aya!!', 'S_63d8d8355ccf55.39688578.jpg', 'La chanteuse est enfin de retour avec son nouvel album, elle vient de partager son tout nouvel album, baptisé «DNK». <br />\r\nDébut janvier 2023, Aya Nakamura annonce à ses fans l’arrivée imminente de son opus. Pour les faire patienter, elle dévoile dans un premier temps «SMS» puis «Baby». Aujourd’hui, son public peut enfin écouter l’intégralité de ce projet inédit. Au micro d’NRJ, Aya Nakamura s’est confiée sur la confection de «DNK». <br />\r\nDans un premier temps, après toutes ces années au sommet, l’artiste ressent-elle la pression à l’idée de sortir son opus ? «Je la ressentais quand j’ai sorti Djadja parce que je ne connaissais pas du tout ce niveau de notoriété. Mais après, ça va. Je trouve que j’ai quand même géré. Je n’ai pas ressenti cette pression-là en fait.» Cet album est assez différent des précédents. <br />\r\nEt pour cause, Aya Nakamura a réellement écrit tout ce qu’elle a ressenti ces derniers mois: «Ce dernier album, je me sentais Aya Danioko. J’étais en mode, je faisais ma vie, j’avais mon quotidien je kiffais comme tout le monde. Je n’avais pas le truc de mettre cette starification dans l’album. […] Plus je grandis, et plus je me rends compte que accepter toutes les émotions qu’on ressent, c’est là où on arrive à trouver la paix.»', '2023-01-31 08:58:29', '2023-01-31 08:58:29'),
(2, 'zogo', 'hilary', 'hila@gmail.com', 'Le retour de beyoncé', 'S_63d8d8ea819ed5.46478607.jpg', 'Queen Bey fait son retour sur scène. Ça faisait 5 ans que la chanteuse américaine ne s&#039;était pas produite sur scène.C&#039;est une grande nouvelle pour les millions de fans de la star du RN&#039;B. <br />\r\nBeyoncé a fait son retour ce samedi 21 janvier sur scène. Un retour attendu depuis plus de 5 ans ! C&#039;est à l&#039;Atlantis Royal Hotel à Dubaï que la chanteuse a touché une somme folle afin de pouvoir faire la prestation.Après avoir fini sa tournée lors du « On The Run Tour » avec son mari Jay Z, Queen Bey s&#039;était retirée afin de préparer son septième album en studio « Renaissance ». <br />\r\nSi aucune date de tournée n&#039;a encore été annoncée par Beyoncé, elle devrait passer par la France au cours de l&#039;été 2023. Beyoncé commence à préparer son « Renaissance Tour » puisque les préparations de son équipe ont déjà débuté. Mais avant de pouvoir prendre la route pour aller à la rencontre de ses fans, elle a été choisie afin d&#039;assurer le show de l&#039;inauguration de l&#039;Atlantis Royal Hotel. Un nouveau palace situé à Dubaï. Le show était très privé et les invités ne pouvaient pas prendre de vidéos ou de photos de l&#039;événement. <br />\r\nSi quelques images ont pu fuiter sur les réseaux sociaux, Queen Bey a encore une fois ébloui son public pendant plus d&#039;une heure. Un retour remarqué pour la showgirl qui a touché 24 millions de dollars pour sa prestation.', '2023-01-31 09:01:30', '2023-01-31 09:01:30'),
(3, 'Akekourou', 'gerard', 'akek@gmail.com', 'Rihanna, de retour sur scène ?', 'S_63d8e3ab58d675.42848823.png', 'Rihanna donne un avant-goût de son spectacle de mi-temps du Super Bowl.<br />\r\nLe 12 février prochain, Rihanna viendra enflammer la mi-temps du 57e Super Bowl avec un show particulièrement entendu. A un mois du grand jour, la chanteuse a choisi de donner un avant-goût de sa performance avec une bande-annonce qui ne manquera pas d&#039;attiser l&#039;excitation de ses fans.<br />\r\nDurant les trente secondes que dure ce teaser, on peut voir la silhouette de Rihanna sortir de l’obscurité et s’avancer lentement sur un couloir de lumière. Après quoi les gros plans s’enchaînent, dévoilant une Rihanna affublée d’une cape de fourrure verte et d’une sculpture capillaire pour le moins aérienne.Insupportable attente.Derrière, on peut entendre des commentaires en voix off du genre, « Mince, Rihanna, on t’a attendu », ou encore, « Ça fait six ans qu’elle n’a pas sorti d’album ». <br />\r\nDes propos que les fans de la star apprécieront, puisqu’ils attendent un nouveau disque de leur idole depuis 2016. Enfin la vidéo se termine avec le refrain de Needed Me, son titre de 2016.Reste à espérer que cette mi-temps du Super Bowl signera son grand retour musical avec ce nouvel album promis depuis si longtemps!', '2023-01-31 09:47:23', '2023-01-31 09:47:23'),
(4, 'Navarro', 'Ezeckiel', 'navarro@gmail.com', 'Young Thug, sa liberté est-elle mise en cause?', 'S_63d8fa8a472065.23792107.jpg', 'Le rappeur Young Thug est-il membre d&#039;un gang, son label musical sert-il de façade à des activités criminelles, et les paroles de ses chansons constituent-elles des preuves pouvant être retenues contre lui? <br />\r\nLe procès de cette figure du hip-hop jugée avec 13 autres personnes a commencé lundi à Atlanta par une très longue sélection du jury. Il faudra peut-être des semaines avant que les parties ne s&#039;entendent sur des jurés, pour un procès qui pourrait durer une bonne partie de l&#039;annéeYoung Thug, originaire d&#039;Atlanta, et ses coaccusés, ont été inculpés au printemps par un grand jury de l&#039;État de Géorgie pour leur appartenance présumée à une branche du gang des &quot;Bloods&quot; identifiée comme &quot;Young Slime Life&quot;, ou YSL. Des initiales qui correspondent à celles de son label fondé en 2016, Young Stoner Life Records.<br />\r\nJugé pour association de malfaiteurs.Les quatorze protagonistes sont jugés pour association de malfaiteurs en vue d&#039;extorsions de fonds. À l&#039;appui de cette accusation: des faits présumés de meurtres, trafic de drogue, vols de voiture avec violence... Young Thug, lui, est jugé pour association de malfaiteurs et participation aux activités criminelles d&#039;un gang de rue.Son arrestation en mai a été un choc pour l&#039;influente scène hip-hop d&#039;Atlanta, dont le rappeur de 31 ans, qui a collaboré avec les plus grands noms du genre, est une figure. <br />\r\nJeffery Williams, son vrai nom, a grandi dans les quartiers pauvres d&#039;Atlanta. Comme 2 Chainz, il avait tapé dans l&#039;oeil de Gucci Mane, qui l&#039;a signé en 2013. Ses singles Stoner et Danny Glover lui ont ensuite apporté la célébrité.Tatoué jusqu&#039;au visage, il est connu pour son style psychédélique et flamboyant, et ses rimes teintées de craquements de voix en font l&#039;un des meilleurs représentants du courant trap.L&#039;affaire est emblématique parce que les procureurs ont utilisé comme preuves des paroles de certaines chansons de Young Thug, celles d&#039;un autre rappeur, Gunna - qui a plaidé coupable -, ainsi que les vers d&#039;une chanson posthume de Juice WRLD, mort en 2019 d&#039;une overdose.', '2023-01-31 11:24:58', '2023-01-31 11:24:58'),
(5, 'nakins', 'liam', 'liam@gmail.com', 'Lollapalooza', 'S_63d8fcd071af02.10356915.jpg', 'Lollapalooza: de nouveaux noms dévoilés.<br />\r\n    Alors que l’hiver semble interminable, les festivals estivaux commencent à révéler leur future programmation. La semaine dernière, Lollapalooza a décidé de lâcher une seconde vague d’artistes sur ses réseaux sociaux. De quoi faire monter la température et saliver les futurs festivaliers. Les trois jours seront ainsi animés par la présence de Niska, Damso, Doria, SDM, Lil Nas X ou encore la reine Rosalia.<br />\r\n    Attention, dimanche de folie en perspective avec la présence d’un trio All Stars composé de Kendrick Lamar, Aya Nakamura et Central Cee. Rendez-vous est donné en juillet à l’hippodrome de Longchamp', '2023-01-31 11:34:40', '2023-01-31 11:34:40'),
(6, 'nakins', 'liam', 'liam@gmail.com', 'Vestiaire Collective x Aya Nakamura', 'S_63d90023ccdc50.38913069.png', 'Vestiaire Collective x Aya Nakamura, la collab la plus tendance de ce début d’année.<br />\r\n    Pour la sortie de son quatrième album, Aya s’est surpassée, que ce soit en termes de musique, de promo, de visuels, de DA ou encore de tenues… Tout a été fait pour que le public soit ébahi.    <br />\r\n    Le jour de sa release party, on a été particulièrement marqué par la collaboration de l’artiste avec Vestiaire Collective, premier site de dépôt-vente en ligne consacré au luxe et à la mode. La marque se positionne comme un maillon de l’économie circulaire et permett au consommateur d’obtenir de nouvelles pièces de créateurs sans pour autant participer au schéma de consommation classique.    <br />\r\n    Au total, 20 pièces ont été proposées par Aya Nakamura et une pièce par personne pouvait être remportée en participant à un jeu-concours. Une stratégie de communication originale, qui profite à la fois à la marque, à l’artiste et à ses fans. De Jean-Paul Gaultier à Paco Rabanne en passant par Vivienne Westwood, Courrèges ou encore Jacquemus, les amateurs de mode ont pu y trouver leur compte très facilement.  <br />\r\n    Ce genre d’association est encore plus intéressante lorsque l’on prend en compte le souci écologique que connaît notre génération. Si la jeune femme est influente, on remarque alors qu’elle utilise cette influence à bon escient.    <br />\r\n    On voyait déjà la star se placer en icône de la mode avec ses looks toujours plus pointus et ses collaborations de plus en plus importantes, ce croisement avec Vestiaire Collective ne fait que nous le confirmer.', '2023-01-31 11:48:51', '2023-01-31 11:48:51'),
(7, 'nakins', 'liam', 'liam@gmail.com', 'Ninho, nouveau record dans le rap français', 'S_63d901740d4176.80307228.jpg', 'Ninho détient un nouveau record dans le rap français<br />\r\n    Depuis le début de sa carrière, Ninho est un homme à record. Il est tout simplement le rappeur français avec le plus de singles certifiés (225 environ). L’avènement du streaming lors des dernières années n’y est pas pour rien. Sur Spotify, Ninho est devenu le premier artiste francophone à avoir 10 morceaux de sa discographie qui ont dépassé les 100 millions de streams selon le média Midi/Minuit. Dans le détail, cela donne : “La vie qu’on mène” avec 185 millions d’écoutes, “Maman ne le sait pas” feat. Niska avec 136 millions, “Goutte d’eau” avec 123 millions, “Lettre à une femme” avec 123 millions, “Elle est bonne sa mère” feat. Vegedream avec 118 millions, “Air Max” feat. Rim’K avec 112 millions, “Jefe” avec 110 millions, “Putana” avec 101 millions, “Distant” feat. Maes avec 101 millions, “6.3” feat. Naps avec 100 millions.<br />\r\n    Une sacrée performance pour NI qui n’a pas fini de marquer l’histoire du rap français.', '2023-01-31 11:54:28', '2023-01-31 11:54:28');

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
(1, 2, 'ça s&#039;annonce  prometteur', '2023-01-31 09:54:16', '2023-01-31 09:54:16'),
(2, 1, 'ohhhh ma gooooooo. j&#039;adore l&#039;album; une tuerie', '2023-01-31 09:56:51', '2023-01-31 09:56:51');

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
(2, 'scott', 'asher', 'ash@gmail.com', 'Nous mettons tout à votre disposition pour rendre votre navigation sur notre page la plus fluide possible. Dans cette optique, nous souhaitons avoir vos avis, vos suggestions et même toutes préoccupations pouvant satisfaire vos attentes. N&#039;hésitez pas à nous contacter\r\n\r\nVous pouvez également nous contacter par téléphone 458267910255 ou par email sound@gmail.com, ou pouvez nous envoyer un message ici:', '2023-01-19 17:52:04', '2023-01-19 17:52:04'),
(3, 'Conrad', 'Renaud', 'conrad@gamer.com', 'La vie est imprévisible', '2023-01-26 14:18:28', '2023-01-26 14:18:28');

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
(3, 'Akekourou', 'gerard', 'akek', 'akek@gmail.com', '$2y$10$ULx/0R52oA6oRK9X0LxFHeb5IFKgKvcGikSQOiwzRbC/.PRPKey8i', 'S_63cfdf5635b394.38943639.jpg', 'users'),
(4, 'Navarro', 'Ezeckiel', 'crimino', 'navarro@gmail.com', '$2y$10$cEdW.uR.C96OeafKteDsyu6K.UA3tK3f7wO3vXMNKzk.qe/ALozde', 'S_63d8f8e4026e22.82802899.png', 'users'),
(5, 'nakins', 'liam', 'nigga', 'liam@gmail.com', '$2y$10$7TrzQCsUq1ADzJ6nufBhUOwpciKyc.cN2gleihPVAuOLKJkvissyy', 'S_63d8fbf3ce6a43.88812622.png', 'users');

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
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
