-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 juin 2026 à 20:50
-- Version du serveur : 8.0.45
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parfumerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id_Cl` int NOT NULL,
  `Nom_Cl` varchar(45) NOT NULL,
  `Prenom_Cl` varchar(45) NOT NULL,
  `Email_Cl` varchar(65) NOT NULL,
  `Password_Cl` varchar(450) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Role_Cl` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id_Cl`, `Nom_Cl`, `Prenom_Cl`, `Email_Cl`, `Password_Cl`, `Role_Cl`) VALUES
(2, 'elazri', 'meriem', 'meriem@gmail.com', '$2y$10$t/pAaBymN45skGYr5YYIbOIHZ7J1g5lHEzAXqgKvpIS7ReCEt8KH.', 'admin'),
(4, 'sina', 'youssra', 'youssra@gmail.com', '$2y$10$Xvw6vgOG11iGFqps9C1iXOVn6cWd4nbX1kUZckFRigeGvjZXwlCui', 'user'),
(15, 'EL AZRI', 'SOUKAINA', 'SOUKAINA@gmail.com', '$2y$10$BsVq.x89HbwmaPjWSCp1d.hSmmYlNzP209nknVcNfsU6L7vCwY246', 'admin'),
(21, 'nnnnn', 'ojo', 'meriem@gmail.com', '$2y$10$loekJ3GtRtzECG4ZaP1npuUS1LTNxrHuYsilrbj2BPVz2Fxb0t0GG', 'user'),
(22, 'nnnnn', 'ojo', 'meriem@gmail.com', '$2y$10$QnWp3k6Wkneqxp6/QK7m7Od5OAsb6GE9X1Ix3ggFUYcC89RHGxwPq', 'user'),
(23, 'nnnnn', 'ojo', 'meriem@gmail.com', '$2y$10$wWngcvqy9G8sM2e1DAOlq.XtACxJ/2Lknd495fGCwTgzYsGs25fK.', 'user'),
(24, 'nnnnn', 'ojo', 'meriem@gmail.com', '$2y$10$dXJDeFoekFQIrpjOinW58ugb/VjmWzPKLImexjki5v/0gRR3UhsiS', 'user'),
(25, 'nnnnn', 'ojo', 'meriem@gmail.com', '$2y$10$jpKZkRXk7iqG4wrAS/Rr/.4r5/Gn0hlbMV5MEHSWK9FqQsT6mEsf2', 'user'),
(26, 'nnnnn', 'ojo', 'meriem@gmail.com', '$2y$10$0pU2nr/JZ9nIBpfNKhEjIuxuAe3C9Mud4rmJrsMb7lu7jMc7RQ4..', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_Produit` int NOT NULL,
  `Nom_Prd` varchar(100) NOT NULL,
  `Prix_Prd` varchar(45) NOT NULL,
  `Image_Prd` varchar(600) NOT NULL,
  `Description_Prd` varchar(3000) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_Produit`, `Nom_Prd`, `Prix_Prd`, `Image_Prd`, `Description_Prd`, `categorie`, `section`) VALUES
(29, 'NINA RICCI venus', '567.05', 'ImageAcc3.jfif', 'Eau de parfum', 'femme', 'Nouveautes'),
(30, 'PRADA', '599.15', 'ImageAcc4.jfif', 'Eau de parfum', 'homme', 'Nouveautes'),
(31, 'LANCOME  La vie est belle ', '567.05', 'ImageAcc5.jfif', 'Eau de parfum', 'femme', 'Nouveautes'),
(32, 'KENZO  FLower By Kenzo ', '839.00', 'ImageAcc9.jfif', 'Eau de parfum', 'femme', 'Meilleurs Vente Du Parfum'),
(33, 'EMPORIO ARMANI', '950.00', 'ImageAcc10.jfif', 'Eau de parfum intense ', 'homme', 'Meilleurs Vente Du Parfum'),
(34, 'YSL-Y MEN EDP', '1050.00', 'ImageAcc11.jfif', 'Eau de parfum  ', 'homme', 'Meilleurs Vente Du Parfum'),
(35, 'YSL-LIBRE EDP', '920.00', 'ImageAcc12.jfif', 'Eau de parfum  ', 'femme', 'Meilleurs Vente Du Parfum'),
(37, 'HERMES  terre d\'Hermes ', '2567.05', 'tendance1.jfif', 'eau de Toilette', 'homme', 'Tendances'),
(38, 'GUY LAROCHE Drakkar', '1359.00', 'tendanceBoy2.jfif', 'Deodorant Spray ', 'homme', 'Tendances'),
(39, 'KENZO  Flower Le Rouge ', '5150.00', 'tendance3.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(40, 'GIVENCHY Irresistible', '5993.00', 'tendance4.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(41, 'KENZO L\'eau Pure', '1270.00', 'tendance6.jfif', 'Eau de parfum', 'homme', 'Tendances'),
(42, 'ROCHAS', '7144.00', 'coffret1.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(43, 'MUGLER', '6461.00', 'coffret2.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(44, 'DIESEL', '4670.00', 'coffret3.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(45, 'ARMANI', '8510.00', 'coffret4.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(46, 'NARCISO RODRIGUEZ\r\n', '5431.00', 'coffret5.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(47, 'ANTONIO BANDERAS ', '250.00', 'ImageAcc6.jfif', 'Eau de parfum', 'femme', 'Nouveautes'),
(48, 'ARMANI SI PASSIONE RED', '	1165.00', 'ImageAcc7.jfif', 'Eau de parfum', 'homme', 'Nouveautes'),
(49, 'TERRONI', '1600.00', 'ImageAcc8.jfif', 'Eau de parfum', 'femme', 'Nouveautes'),
(50, 'CINQUE TERRE MANCERA ', '900.00', 'ImageTout1.jfif', 'Eau de parfum', 'homme', 'Nouveautes'),
(51, 'ELIE SAAB ELIXIR LOVE', '950.00', 'ImageTout2.jfif', 'Eau de parfum', 'femme', 'Nouveautes'),
(52, 'VALENTINO - UOMO EDT', '950.00', 'ImageAcc15.jfif', 'Eau de parfum', 'femme', 'Meilleurs Vente Du Parfum'),
(53, 'VALENTINO -DONNA EDP', '1270.00', 'ImageAcc16.jfif', 'Eau de parfum', 'femme', 'Meilleurs Vente Du Parfum'),
(54, 'RBANNE-RABANNE FAME', '799.00', 'ImageTout21.jfif', 'Eau de parfum', 'femme', 'Meilleurs Vente Du Parfum'),
(55, 'RABANNE-PHANTON IN RED', '300.40', 'ImageTout22.jfif', 'Eau de parfum', 'homme', 'Meilleurs Vente Du Parfum'),
(56, 'LANCOME-IDOLE EDP', '1120.00', 'ImageTout23.jfif', 'Eau de parfum', 'femme', 'Meilleurs Vente Du Parfum'),
(58, 'DIOR   J\'ADORE ', '6231.00', 'tend1.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(59, 'JEAN PAUL GAULTIER ', '5159.00', 'tend2.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(60, 'GUERLAIN  ALLEGORIA', '7275.00', 'tend3.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(61, 'ROSE D\'ARABIE', '2800.00', 'tend6.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(62, 'DIOR  HYPNOTIC POISON ', '9022.00', 'tend5.jfif', 'Eau de parfum', 'femme', 'Tendances'),
(63, 'RED PORTION', '2200.00', 'coffret6.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(64, 'ROSE PRICK EDP', '5153.00', 'coffret7.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(65, 'CAFE ROSE EDP', '1550.00', 'coffret8.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(66, 'OMBRE LEATHER EDP', '1900.00', 'coffret9.jfif', 'Eau de parfum', 'homme', 'Coffrets'),
(67, 'LANCOME LA VIE EST BELLE', '1100.00', 'coffret10.jfif', 'Eau de parfum', 'femme', 'Coffrets'),
(68, 'NAXOS', '2600.00', 'Imagefemme1.jfif', 'Eau de parfum', 'femme', ''),
(69, 'BLACK AFGANO ', '1400.00', 'Imagefemme2.jfif', 'Eau de parfum', 'femme', ''),
(70, 'ERBA PURA ', '1900.00', 'Imagefemme3.jfif', 'Eau de parfum', 'femme', ''),
(71, 'MEGAMARE', '1600.00', 'Imagefemme4.jfif', 'Eau de parfum', 'femme', ''),
(72, 'MON PARIS', '1300.00', 'Imagefemme5.jfif', 'Eau de parfum', 'femme', ''),
(73, 'Zafeer Oud Vanille', '	1300.00', 'Imagefemme6.jfif', 'Eau de parfum', 'femme', ''),
(74, 'BARAONDA', '	1400.00', 'Imagefemme7.jfif', 'Eau de parfum', 'femme', ''),
(76, 'PRADA CANDY FLORALE edt', '650.00', 'Imagefemme9.jfif', 'Eau de parfum', 'femme', ''),
(77, 'For Her Music Noir Rose EDP ', '1200.00', 'Imagefemme10.jfif', 'Eau de parfum', 'femme', ''),
(78, 'LANCOME TRESOR IN LOVE ', '	700.00', 'Imagefemme11.jfif', 'Eau de parfum', 'femme', ''),
(79, 'BERGAMOTTO DE CALABRIA', '1500.00', 'Imagefemme12.jfif', 'Eau de parfum', 'femme', ''),
(80, 'OPUS XIV ROYAL', '	4200.00', 'Imagefemme13.jfif', 'Eau de parfum', 'femme', ''),
(81, 'Intense Cafe ', '1000.00', 'Imagefemme14.jfif', 'Eau de parfum', 'femme', ''),
(82, 'Mandarine Sultane', '1300.00', 'Imagefemme15.jfif', 'Eau de parfum', 'femme', ''),
(83, 'SADONASO ', '1400.00', 'Imagefemme16.jfif', 'Eau de parfum', 'femme', ''),
(84, 'Codrat Boise', '	1000.00', 'Imagefemme17.jfif', 'Eau de parfum', 'femme', ''),
(85, 'Happy chopard FELICIA edp ', '	750.00', 'Imagefemme18.jfif', 'Eau de parfum', 'femme', ''),
(86, 'KENZO L\'eau Pure', '	1270.00', 'tendance6.jfif', 'Eau de parfum', 'homme', ''),
(87, 'HERMES  Terre d\'Hermes ', '5745.00', 'Imagehom1.jfif', 'eau de Toilette', 'homme', ''),
(88, 'RABANNE  Million Gold Elixir', '8321.00', 'Imagehom2.jfif', 'Eau de parfum', 'homme', ''),
(89, 'DIESEL  Only the Brave ', '3383.00', 'Imagehom3.jfif', 'eau de Toilette', 'homme', ''),
(90, 'AZZARO  Chrome ', '	3383.00', 'Imagehome4.jfif', 'eau de Toilette', 'homme', ''),
(91, 'GIVENCHY Gentleman ', '6973.00', 'Imagehom5.jfif', 'Eau de parfum', 'homme', ''),
(92, 'Rabanne Phanton Elixir', '7488.00', 'Imagehom6.jfif', 'Eau de parfum', 'homme', ''),
(93, 'DIESEL  Coffret ', '4678.00', 'Imagehom7.jfif', 'Eau de parfum', 'homme', ''),
(94, 'EMPIRYAN ', '	3500.00', 'Imagehom8.jfif', 'Eau de parfum', 'homme', ''),
(95, 'OPUS Vll RECKLESS', '	4200.00', 'Imagehom9.jfif', 'Eau de parfum', 'homme', ''),
(96, 'CARLISLE', '	3670.00', 'Imagehom10.jfif', 'Eau de parfum', 'homme', ''),
(97, 'DIOR Sauvage', '	9610.00', 'Imagehom11.jfif', 'Eau de parfum', 'homme', ''),
(98, 'YVES SAINT LAURENT  Y ', '7994.00', 'Imagehom12.jfif', 'Eau de parfum', 'homme', ''),
(99, 'FABULOUS  EDP ', '3500.00', 'Imagehom13.jfif', 'Eau de parfum', 'homme', ''),
(100, 'ALEXANDRIA II', '	3500.00', 'Imagehom14.jfif', 'Eau de parfum', 'homme', ''),
(101, 'BURBERRY HERO', '8321.00', 'Imagehom15.jfif', 'Eau Parfum intense', 'homme', ''),
(102, 'Jaen Paul Gaultier', '7551.00', 'Imagehom16.jfif', 'Eau de parfum', 'homme', ''),
(103, 'YVES SAINT LAURENT', '8325.00', 'Imagehome17.jfif', 'Eau de parfum', 'homme', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_Cl`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_Produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id_Cl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id_Produit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
