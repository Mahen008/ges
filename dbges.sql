-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 jan. 2020 à 08:17
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbges`
--

-- --------------------------------------------------------

--
-- Structure de la table `observation`
--

CREATE TABLE `observation` (
  `idOb` int(11) NOT NULL,
  `neuphroInit` text NOT NULL,
  `dateDiag` date NOT NULL,
  `debutHemo` date NOT NULL,
  `histMaladie` varchar(250) NOT NULL,
  `Antecedents` varchar(250) NOT NULL,
  `Comorbidites` varchar(100) NOT NULL,
  `etatGenAct` text NOT NULL,
  `groupSang` varchar(3) NOT NULL,
  `attenteGref` text NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `acceVasc` text NOT NULL,
  `pose` date NOT NULL,
  `PremiereUse` date NOT NULL,
  `Arret` date NOT NULL,
  `coms` varchar(200) NOT NULL,
  `DatSerVHC` date NOT NULL,
  `statSerVHC` text NOT NULL,
  `DatSerVBH` date NOT NULL,
  `statSerVBH` text NOT NULL,
  `DatSerHIV` date NOT NULL,
  `statSerHIV` text NOT NULL,
  `DatSerCMV` date NOT NULL,
  `statSerCMV` text NOT NULL,
  `DatSerEBV` date NOT NULL,
  `statSerEBV` text NOT NULL,
  `DatAgeVHC` date NOT NULL,
  `statAgeVHC` text NOT NULL,
  `DatAgeVHB` date NOT NULL,
  `statAgeVHB` text NOT NULL,
  `DatAgeHIV` date NOT NULL,
  `statAgeHIV` text NOT NULL,
  `DatAgeCMV` date NOT NULL,
  `statAgeCMV` text NOT NULL,
  `DatAgeEBV` date NOT NULL,
  `statAgeEBV` text NOT NULL,
  `idPatient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `observation`
--

INSERT INTO `observation` (`idOb`, `neuphroInit`, `dateDiag`, `debutHemo`, `histMaladie`, `Antecedents`, `Comorbidites`, `etatGenAct`, `groupSang`, `attenteGref`, `allergies`, `acceVasc`, `pose`, `PremiereUse`, `Arret`, `coms`, `DatSerVHC`, `statSerVHC`, `DatSerVBH`, `statSerVBH`, `DatSerHIV`, `statSerHIV`, `DatSerCMV`, `statSerCMV`, `DatSerEBV`, `statSerEBV`, `DatAgeVHC`, `statAgeVHC`, `DatAgeVHB`, `statAgeVHB`, `DatAgeHIV`, `statAgeHIV`, `DatAgeCMV`, `statAgeCMV`, `DatAgeEBV`, `statAgeEBV`, `idPatient`) VALUES
(1, 'NEUPHROPATHIE DIABETIQUE', '2020-01-08', '2020-01-08', 'azerty', 'HTA', 'azerty', 'ABEG', 'A+', 'NON', 'azerty', 'KT_fG', '2020-01-08', '2020-01-08', '2020-01-08', 'qsdfghjklm sfqfqs', '2020-01-08', '', '2020-01-08', '', '2020-01-08', '', '2020-01-08', '', '2020-01-08', '', '2020-01-16', '', '2020-01-15', '', '2020-01-08', '', '2020-01-08', '', '2020-01-08', '', 7),
(2, 'NEUPHROPATHIE SELEROSE', '2020-01-09', '2020-01-09', 'sdgfjfdsdf', 'HTA', 'fsfsgsfs', 'ABEG', 'A+', 'NON', 'fsqffgdq', 'KT_fG', '2020-01-08', '2020-01-08', '2020-01-08', 'dsfqgqf fsdgds', '2020-01-08', '', '2020-01-02', '', '2020-01-08', '', '2020-01-23', '', '2020-01-14', '', '2020-01-08', '', '2020-01-17', '', '2020-01-16', '', '2020-01-09', '', '2020-01-15', '', 8),
(3, 'NEUPHROPATHIE DIABETIQUE', '0000-00-00', '0000-00-00', '', '', '', 'BEG', 'A+', 'NON', '', 'KT_fG', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', 8),
(4, 'NEUPHROPATHIE SELEROSE', '0000-00-00', '0000-00-00', 'bxgfg', '', '', 'BEG', 'A+', 'NON', '', 'KT_fG', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'NEG', 14),
(5, 'NEUPHROPATHIE SELEROSE', '2020-01-09', '2020-01-09', 'bxgfg', 'DIABETE', 'fsfsg', 'ABEG', 'A+', 'NON', 'sfdsgdg', 'KT_fG', '2020-01-09', '2020-01-09', '2020-01-09', 'fsgsgsgh gffg', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', 14),
(6, 'NEUPHROPATHIE DIABETIQUE', '0000-00-00', '0000-00-00', '', '', '', 'BEG', 'A+', 'NON', '', 'KT_fG', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', 8),
(7, 'NEUPHROPATHIE DIABETIQUE', '2020-01-23', '2020-01-17', 'repetitif', 'DIABETE', 'azerty', 'BEG', 'A+', 'NON', 'paracetamol', 'KT_fG', '2020-01-02', '2020-01-07', '2020-01-02', 'bien', '2020-01-14', 'POS', '2020-01-14', 'POS', '2020-01-24', 'POS', '2020-01-22', 'POS', '2020-01-14', 'POS', '2020-01-14', 'POS', '2020-01-15', 'POS', '2020-01-17', 'POS', '2020-01-15', 'POS', '2020-01-12', 'POS', 15),
(8, 'NEUPHROPATHIE DIABETIQUE', '2020-01-23', '2020-01-23', 'repetitif', 'DIABETE', 'azerty', 'BEG', 'A+', 'NON', 'paracetamol', 'KT_fG', '2020-01-15', '2020-01-09', '2020-01-09', 'bien', '2020-01-09', 'NEG', '2020-01-10', 'POS', '2020-01-09', 'POS', '2020-01-09', 'POS', '2020-01-09', 'POS', '2020-01-10', 'POS', '2020-01-08', 'POS', '2020-01-08', 'POS', '2020-01-09', 'POS', '2020-01-09', 'POS', 16);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `DDN` date NOT NULL,
  `phone` varchar(17) NOT NULL,
  `phoneProche` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `adresse`, `DDN`, `phone`, `phoneProche`) VALUES
(7, 'RAFANDROANA', 'Patrice', 'MANDROSEZA', '2019-12-13', '+261 34 89 484 92', '+261 34 14 642 28'),
(8, 'MAHEN', 'Mahenina', 'MANDROSEZA', '2019-12-14', '+261 34 484 92', '+261 34 14 642 28'),
(14, 'lucie', 'marie', 'Mahazoarivo', '0001-12-12', '0412454766', '3175741'),
(15, 'RAMARIJAONA ', 'Karenne', 'Analakely', '1982-01-13', '+261 34 67 679 67', '+261 33 88 134 66'),
(16, 'MATHON ', 'Jean Patrick', 'Mahazoarivo', '2020-01-09', '034 44 444 44', '032 33 333 33');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `idTarif` int(11) NOT NULL,
  `libelle` varchar(15) NOT NULL,
  `prix` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nom` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `observation`
--
ALTER TABLE `observation`
  ADD PRIMARY KEY (`idOb`),
  ADD KEY `idPatient` (`idPatient`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`idTarif`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `observation`
--
ALTER TABLE `observation`
  MODIFY `idOb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `idTarif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `observation`
--
ALTER TABLE `observation`
  ADD CONSTRAINT `observation_ibfk_1` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
