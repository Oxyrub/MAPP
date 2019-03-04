--
-- Base de données :  `music`
--
SET NAMES utf8;

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `alb_id` int NOT NULL AUTO_INCREMENT,
  `alb_art` int NOT NULL COMMENT 'Code artiste',
  `alb_nom` varchar(50) NOT NULL COMMENT 'Nom de l''album',
  `alb_annee` int NOT NULL COMMENT 'Année de sortie',
  `alb_prix` decimal(5,2) NOT NULL COMMENT 'Prix de l''album',
  PRIMARY KEY (`alb_id`)
);

--
-- Déchargement des données de la table `albums`
--

INSERT INTO albums(`alb_art`, `alb_nom`, `alb_annee`, `alb_prix`) VALUES
(10, 'Let It Bleed', 1969, 18.70),
(10, 'Sticky Fingers', 1971, 18.70),
(10, 'Black And Blue ', 1976, '16.50'),
(10, 'Some Girls', 1978, '16.50'),
(10, 'Undercover', 1983, '15.40'),
(10, 'A Bigger Bang', 2005, '16.50'),
(1, 'Led Zeppelin', 1969, '16.50'),
(1, 'Led Zeppelin II', 1969, '16.50'),
(1, 'Led Zeppelin III', 1970, '16.50'),
(1, 'Led Zeppelin IV', 1971, '16.50'),
(1, 'Houses Of The Holy', 1973, '13.20'),
(1, 'Physical Graffiti', 1975, '16.50'),
(1, 'Presence', 1976, '18.81'),
(1, 'In Through The Outdoor', 1979, '18.70'),
(1, 'Coda', 1982, '16.50'),
(1, 'The Song Reamins The Same', 1976, '19.80'),
(7, 'No Pads, No Helmets...Just Balls', 2002, '16.50'),
(7, 'Still Not Getting Any...', 2004, '16.50'),
(7, 'MTV Hard Rock Live', 2005, '11.00'),
(7, 'Simple plan', 2008, '13.20'),
(7, 'Get Your Heart On!', 2011, '16.50'),
(7, 'Taking One For the Team', 2016, '19.80'),
(3, '19', 2008, '16.50'),
(3, '21', 2011, '18.70'),
(3, '25', 2015, '17.60'),
(2, 'Killers', 1981, '13.20'),
(2, 'The Number of the Beast', 1982, '16.50'),
(2, 'Piece of Mind', 1983, '13.20'),
(2, 'Powerslave', 1984, '13.20'),
(2, 'Somewhere in Time', 1986, '11.00'),
(2, 'Seventh Son of a Seventh Son', 1988, '9.90'),
(2, 'No Prayer for the Dying', 1990, '12.10'),
(4, 'Showbizz', 1999, '11.00'),
(4, 'Origin of Symmetry', 2001, '11.00'),
(4, 'Absolution', 2003, '9.90'),
(4, 'Black Holes and Revelations', 2006, '16.50'),
(5, 'Telephone', 1977, '11.00'),
(5, 'Crache Ton Venin', 1979, '13.20'),
(5, 'Au Coeur de la Nuit', 1980, '13.20'),
(5, 'Dure Limite', 1982, '13.20'),
(5, 'Un Autre Monde', 1984, '15.40'),
(6, 'Parachutes', 2000, '16.50'),
(6, 'A Rush of Blood to the Head', 2002, '14.30'),
(8, 'Blue Period', 1951, '16.50'),
(8, 'Dig', 1951, '16.50'),
(8, 'The Musings of Miles', 1955, '13.20'),
(9, 'Extrapolation ', 1969, '18.81'),
(9, 'Devotion  ', 1970, '15.40'),
(9, 'Live At The Royal Festival Hall  ', 1990, '15.40'),
(1, 'Live BBC Sessions', 1997, '19.86');

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

DROP TABLE IF EXISTS `artistes`;
CREATE TABLE IF NOT EXISTS `artistes` (
  `art_id` int NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''artiste ou du groupe',
  `art_nom` varchar(30) NOT NULL COMMENT 'nom de l''artiste ou du groupe',
  `art_typ` varchar(1) NOT NULL COMMENT 'Type d''artiste : G=Groupe, S=Solo',
  `art_pays` varchar(3) NOT NULL COMMENT 'Code pays = nationalité du groupe ou de l''artiste. Se référer à la table des pays.',
  `art_genre` varchar(3) NOT NULL COMMENT 'Code genre musical; Se référer à la table des genres musicaux.',
  PRIMARY KEY (`art_id`)
);

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO artistes(`art_id`, `art_nom`, `art_typ`, `art_pays`, `art_genre`) VALUES
(1, 'Led Zeppelin', 'G', 'ANG', 'HME'),
(2, 'Iron Maiden', 'G', 'ANG', 'HME'),
(3, 'Adele', 'S', 'ANG', 'POP'),
(4, 'Muse', 'G', 'ANG', 'ROC'),
(5, 'Telephone', 'G', 'FRA', 'ROC'),
(6, 'Coldplay', 'G', 'ANG', 'POP'),
(7, 'Simple Plan', 'G', 'CAN', 'ROC'),
(8, 'Davis, Miles', 'S', 'USA', 'JAZ'),
(9, 'Mc Laughlin, John', 'S', 'ANG', 'JAZ'),
(10, 'Rolling Stones', 'G', 'ANG', 'ROC');

-- --------------------------------------------------------

ALTER TABLE albums
ADD CONSTRAINT FOREIGN KEY FK_album_artiste (alb_art) REFERENCES artistes(art_id);

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `uti_id` int NOT NULL AUTO_INCREMENT ,
  `uti_nom` varchar(30) NOT NULL ,
  `uti_adr` varchar(50) NOT NULL ,
  `uti_cps` varchar(5) NOT NULL ,
  `uti_ville` varchar(30) NOT NULL ,
  `uti_email` varchar(50) NOT NULL ,
  `uti_dnai` date NOT NULL,
  PRIMARY KEY (`uti_id`)
);

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO utilisateur(`uti_id`, `uti_nom`, `uti_adr`, `uti_cps`, `uti_ville`, `uti_email`, `uti_dnai`) VALUES
(1, 'Campan Bernard', '17 rue de la république', '75001', 'Paris', 'bernard.campan@mondomaine.fr', '1958-04-04'),
(2, 'Bourdon, Didier', '63 place de la comédie', '06000', 'Nice', 'didier.bourdon@mondomaine.fr', '1959-01-22'),
(3, 'Legitimus, Pascal', '127 route de la plage', '33680', 'Lacanau', 'pascal.legitimus@mondomaine.fr', '1959-03-13');


DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `fav_id_uti` int NOT NULL ,
  `fav_id_alb` int NULL ,
  `fav_id_art` int NULL );

ALTER TABLE favoris ADD PRIMARY KEY(fav_id_uti,fav_id_alb,fav_id_art);

ALTER TABLE favoris
ADD CONSTRAINT FOREIGN KEY FK_fav_uti (fav_id_uti) REFERENCES utilisateur(uti_id);
  
ALTER TABLE favoris
ADD CONSTRAINT FOREIGN KEY FK_fav_alb (fav_id_alb) REFERENCES albums(alb_id);
  
ALTER TABLE favoris
ADD CONSTRAINT FOREIGN KEY FK_fav_art (fav_id_art) REFERENCES artistes(art_id);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `gen_genre` varchar(3) NOT NULL COMMENT 'Code genre musical',
  `gen_libelle` varchar(20) NOT NULL COMMENT 'Libellé du genre musical',
  PRIMARY KEY (`gen_genre`)
);

--
-- Déchargement des données de la table `genres`
--

INSERT INTO genres(`gen_genre`, `gen_libelle`) VALUES
('BLU', 'Blues'),
('HME', 'Heavy Metal'),
('JAZ', 'Jazz'),
('POP', 'Pop Music'),
('RAP', 'Rap'),
('ROC', 'Rock');

-- --------------------------------------------------------
