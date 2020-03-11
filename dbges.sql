-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 11 mars 2020 à 09:32
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
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `idcons` int(11) NOT NULL,
  `idPat` int(11) NOT NULL,
  `idStock` int(11) NOT NULL,
  `nbr` int(11) NOT NULL,
  `pqt` int(11) NOT NULL,
  `dateCons` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `idMedicament` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `nbrDetail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`idMedicament`, `libelle`, `nbrDetail`) VALUES
(2, 'Metro', 40),
(4, 'Paracetamol', 100),
(5, 'charbon', 30),
(17, 'vitamine C', 0),
(20, 'Rein RU', 0);

-- --------------------------------------------------------

--
-- Structure de la table `medicamententree`
--

CREATE TABLE `medicamententree` (
  `idMedEntree` int(11) NOT NULL,
  `dateEntreeMed` date NOT NULL,
  `prixMed` double NOT NULL,
  `qteEntree` int(11) NOT NULL,
  `paquet` int(11) NOT NULL,
  `medicament_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicamententree`
--

INSERT INTO `medicamententree` (`idMedEntree`, `dateEntreeMed`, `prixMed`, `qteEntree`, `paquet`, `medicament_id`) VALUES
(1, '2020-03-12', 100, 30, 3, 2),
(4, '2020-03-12', 100, 12, 1, 4),
(5, '2020-03-07', 10000, 5, 0, 5),
(16, '2020-03-10', 1000, 10, 0, 17),
(19, '2020-03-10', 200000, 10, 0, 20);

-- --------------------------------------------------------

--
-- Structure de la table `medicamentsortie`
--

CREATE TABLE `medicamentsortie` (
  `idMedicamentSorti` int(11) NOT NULL,
  `dateSortieMed` date NOT NULL,
  `qteSortie` int(11) NOT NULL,
  `medicament_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicamentsortie`
--

INSERT INTO `medicamentsortie` (`idMedicamentSorti`, `dateSortieMed`, `qteSortie`, `medicament_id`, `patient_id`) VALUES
(2, '2020-03-19', 9, 4, 16),
(18, '2020-03-10', 1, 2, 17),
(22, '2020-03-10', 1, 20, 41),
(23, '2020-03-10', 5, 17, 41),
(24, '2020-03-11', 1, 20, 42),
(25, '2020-03-11', 5, 2, 42);

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
(7, 'NEUPHROPATHIE DIABETIQUE', '2020-01-23', '2020-01-17', 'repetitif', 'DIABETE', 'dontknow', 'BEG', 'A+', 'NON', 'paracetamol', 'KT_fG', '2020-01-02', '2020-01-07', '2020-01-02', 'bien', '2020-01-14', 'POS', '2020-01-14', 'POS', '2020-01-24', 'POS', '2020-01-22', 'POS', '2020-01-14', 'POS', '2020-01-14', 'POS', '2020-01-15', 'POS', '2020-01-17', 'POS', '2020-01-15', 'POS', '2020-01-12', 'POS', 16),
(9, 'NEUPHROPATHIE SELEROSE', '2020-01-16', '2020-01-29', 'repetitif', 'HTA', 'azerty', 'BEG', 'A+', 'NON', 'paracetamol', 'KT_fG', '2020-01-23', '2020-01-15', '2020-01-09', 'assez bien', '2020-01-22', 'POS', '2020-01-15', 'POS', '2020-01-23', 'POS', '2020-01-29', 'POS', '2020-01-14', 'POS', '2020-01-16', 'POS', '2020-01-22', 'POS', '2020-01-21', 'POS', '2020-01-20', 'POS', '2020-01-22', 'POS', 17),
(13, 'NEUPHROPATHIE SELEROSE', '2020-01-10', '2020-01-09', 'bxgfg', 'DIABETE', 'azerty', 'BEG', 'A+', 'NON', 'sfdsgdg', 'KT_fG', '2020-01-03', '2020-01-03', '2020-01-08', 'bien', '2020-01-22', 'POS', '2020-01-01', 'NEG', '2020-01-22', 'POS', '2020-01-15', 'POS', '2020-01-14', 'NEG', '2020-01-23', 'NEG', '2020-01-02', 'POS', '2020-01-01', 'POS', '2019-12-31', 'NEG', '2020-01-20', 'POS', 20),
(80, 'NEUPHROPATHIE DIABETIQUE', '2020-03-10', '2020-03-10', 'evonouissement incoditionné', 'DIABETE', 'hta', 'ABEG', 'B+', 'NON', 'fruit de mer', 'KT_fD', '2020-03-10', '2020-03-10', '2020-03-10', 'difficle', '2020-03-10', 'NEG', '2020-03-10', 'NEG', '2020-03-10', 'POS', '2020-03-10', 'POS', '2020-03-10', 'POS', '2020-03-10', 'NEG', '2020-03-10', 'POS', '2020-03-10', 'POS', '2020-03-10', 'POS', '2020-03-10', 'POS', 41),
(81, 'NEUPHROPATHIE SELEROSE', '0000-00-00', '0000-00-00', '', '', '', 'BEG', 'AB-', 'NON', 's', 'KT_fG', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', '0000-00-00', 'POS', 42);

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
  `phoneProche` varchar(17) NOT NULL,
  `consulter` tinyint(1) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `adresse`, `DDN`, `phone`, `phoneProche`, `consulter`, `type`) VALUES
(16, 'MATHON ', 'Jean Patrick', 'Mahazoarivo', '2020-01-09', '034 44 444 44', '032 33 333 33', 1, 'Dialyse'),
(17, 'RABEMANJARA', 'Herman', 'Tsimbazaza', '2002-11-13', '+261 34 32 484 92', '+261 33 88 134 66', 1, 'Dialyse'),
(20, 'ANDRIANAIVO', 'Adrien', 'Mahamasina', '1994-01-03', '+261 34 32 484 92', '+261 33 88 134 66', 1, 'Dialyse'),
(22, 'MAHENINA', 'PATRICE', 'ANTAMPONJINA', '1997-02-28', '034 89 484 92', '034 99 201 66', 0, 'Dialyse'),
(24, 'PATRICE', 'MAHENINA', 'ANJOMA', '2020-02-06', '034 89 484 92', '034 99 201 66', 1, 'Dialyse'),
(41, 'RAMARO', 'Lui', 'ANJOMA', '2000-03-10', '034 89 484 92', '034 99 201 66', 1, 'Dialyse'),
(42, 'TOJO', 'RAKOTOZAFY', 'ANJOMA', '2000-03-11', '034 89 484 92', '034 99 201 66', 1, 'Dialyse');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `idPla` int(11) NOT NULL,
  `dates` date NOT NULL,
  `idPat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `idSt` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `presentation` int(11) NOT NULL,
  `paquet` int(11) NOT NULL,
  `nbdetaille` int(11) NOT NULL,
  `prix` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`idSt`, `libelle`, `presentation`, `paquet`, `nbdetaille`, `prix`) VALUES
(1, 'paracetamol', 100, 1, 100, 10.00),
(3, 'mettro', 10, 1, 12, 1000.00),
(4, 'rein RU', 12, 10, 11, 20.00);

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
  `user_id` int(11) NOT NULL,
  `login` text NOT NULL,
  `role` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sexe` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `role`, `password`, `sexe`) VALUES
(5, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Homme'),
(13, 'doc', 'Med', '9a09b4dfda82e3e665e31092d1c3ec8d', 'Homme'),
(15, 'tec', 'Tec', '044c3027c1bfd773fc90762db80bf8cc', 'Homme'),
(21, 'recep', 'Recep', '746035f8741e922eb5fa31ea766d9ece', 'Femme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`idcons`),
  ADD KEY `idPat` (`idPat`),
  ADD KEY `idStock` (`idStock`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`idMedicament`),
  ADD KEY `idMedicament` (`idMedicament`);

--
-- Index pour la table `medicamententree`
--
ALTER TABLE `medicamententree`
  ADD PRIMARY KEY (`idMedEntree`),
  ADD KEY `medicament_id` (`medicament_id`);

--
-- Index pour la table `medicamentsortie`
--
ALTER TABLE `medicamentsortie`
  ADD PRIMARY KEY (`idMedicamentSorti`),
  ADD KEY `medicament_id` (`medicament_id`),
  ADD KEY `patient_id` (`patient_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`idPla`),
  ADD KEY `idPat` (`idPat`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idSt`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`idTarif`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `idcons` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `idMedicament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `medicamententree`
--
ALTER TABLE `medicamententree`
  MODIFY `idMedEntree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `medicamentsortie`
--
ALTER TABLE `medicamentsortie`
  MODIFY `idMedicamentSorti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `observation`
--
ALTER TABLE `observation`
  MODIFY `idOb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
  MODIFY `idPla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `idSt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `idTarif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_ibfk_1` FOREIGN KEY (`idPat`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `consommation_ibfk_2` FOREIGN KEY (`idStock`) REFERENCES `stock` (`idSt`);

--
-- Contraintes pour la table `medicamententree`
--
ALTER TABLE `medicamententree`
  ADD CONSTRAINT `medicamententree_ibfk_1` FOREIGN KEY (`medicament_id`) REFERENCES `medicament` (`idMedicament`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `medicamentsortie`
--
ALTER TABLE `medicamentsortie`
  ADD CONSTRAINT `medicamentsortie_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `observation`
--
ALTER TABLE `observation`
  ADD CONSTRAINT `observation_ibfk_1` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`idPat`) REFERENCES `patient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
