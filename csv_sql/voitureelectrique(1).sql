-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 mars 2021 à 11:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `voitureelectrique`
--

-- --------------------------------------------------------

--
-- Structure de la table `voitureselectriques`
--

DROP TABLE IF EXISTS `voitureselectriques`;
CREATE TABLE IF NOT EXISTS `voitureselectriques` (
  `id` int(3) DEFAULT NULL,
  `marque` varchar(12) DEFAULT NULL,
  `modele` varchar(22) DEFAULT NULL,
  `montant` text,
  `autonomie` varchar(10) DEFAULT NULL,
  `puissance` varchar(10) DEFAULT NULL,
  `recharge` varchar(4) DEFAULT NULL,
  `consommation` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voitureselectriques`
--

INSERT INTO `voitureselectriques` (`id`, `marque`, `modele`, `montant`, `autonomie`, `puissance`, `recharge`, `consommation`) VALUES
(1, 'Renault', 'Zoe', '32500', '171 - 390', '77 - 135', '375', '17,4 - 17,7'),
(2, 'Tesla', 'Modele 3', '43800', '448 - 580', '201 - 462', '1959', '14,9 - 16,6'),
(3, 'Peugeot', 'e-208', '32700', '340', '136', '739', '16.4'),
(4, 'Volkswagen', 'ID.3', '33890', '350 - 549', '145 - 204', '713', '13,6 - 17,7'),
(5, 'Tesla', 'Model S', '89990', '305 - 840 ', '1100', '1100', '19 - 19,3'),
(6, 'BMW', 'i3', '39950', '154 - 325', '170', '170', '15.3'),
(7, 'Renault', 'Twizy', '7540', '81 - 98', 'May-17', 'N.C', 'N.C'),
(8, 'Kia', 'e-Niro', '37000', '', '134 - 204', '547', '15,3 - 15,9'),
(9, 'Citroen', 'AMI', '6900', '', '8', 'N.C', 'N.C'),
(10, 'Tesla', 'Model Y', '63000', '', '351 - 462', '1741', '14,4 - 15,1'),
(11, 'Porshe', 'Taycan', '109414', '', '530 - 761', '1336', '21,1 - 26,7'),
(12, 'Hyundai', 'Kona', '38400', '', '136 - 204', '582', '14,3 - 14,8'),
(13, 'Audi', 'e-Tron', '71900', '', '313 - 530', '756', '22,4 - 27'),
(14, 'Tesla', 'Model X', '99990', '', '340 - 1020', '916', '22,6 - 23,6'),
(15, 'Tesla', 'Roadster', '215000', '', 'N.C', 'N.C', 'N.C'),
(16, 'Tesla', 'Cybertruck', 'N.C', 'N.C', 'N.C', 'N.C', 'N.C'),
(17, 'Honda', 'e', '35060', '', '134 - 154', '625', '18'),
(18, 'Mercedes', 'EQC', '79250', '', '408', '584', '22.3'),
(19, 'Renault', 'Twingo Z.E', '21350', '', '81', 'N.C', '16.3'),
(20, 'DS 3', 'Cross Crosback e-Tense', '39900', '', '136', '640', '17.6'),
(21, 'Nissan', 'Leaf', '33000', '270-385', '150-217', '321', '18 -20,6'),
(22, 'Volkswagen', 'e-Golf', '39350', '154-230', '115-134', '288', '15.3'),
(23, 'Peugeot', 'e-2008', '37100', '320', '136', '696', '14.7'),
(24, 'Volkswagen', 'ID Buzz', 'N.C', 'N.C', 'N.C', 'N.C', 'N.C'),
(25, 'Mini Cooper', 'SE', '32900', '234', '184', '405', '16.8'),
(26, 'Nissan', 'Leaf', 'N.C', '154-230', '109', '361', 'N.C'),
(27, 'Opel', 'Corsa-e', '30650', '337', '136', '733', '17'),
(28, 'Ford Mustang', 'Mach-E', '48990', '400-610', '269-465', '710', '16,5-19,5'),
(29, 'Smart Fortwo', 'Electric Drive', '26500', '118-135', '75-82', 'N.C', '16.1'),
(30, 'Peugeot', 'iOn', '26900', '122', '67', '452', 'N.C'),
(31, 'Renault', 'Kangoo ZE', '21750', '220', '60', 'N.C', 'N.C'),
(32, 'Audi', 'e-Tron GT', 'N.C', 'N.C', '590', 'N.C', 'N.C'),
(33, 'Volkswagen', 'e-UP', '23440', '130-260', '82-83', '392', '12.9'),
(34, 'Polestar', '2', '39900', '500', '408', '800', '19.3'),
(35, 'Hyundai', 'Ioniq électrique', '35850', '228-294', '118-136', '591', '13.8'),
(36, 'Dacia', 'Spring', 'N.C', '225', '44', '252', 'N.C'),
(37, 'Citroen', 'e-Méhari', '25000', '163', '67', 'N.C', 'N.C'),
(38, 'Audi', 'Q4 e-tron', 'N.C', '450', '300', 'N.C', 'N.C'),
(39, 'Skoda', 'Citigo e iV', '21600', '265', '83', '288', '13.9'),
(40, 'Lucid', 'Air', 'N.C', 'N.C', '408', 'N.C', 'N.C'),
(41, 'Jaguar ', 'i-Pace', '70350', '470-480', '320-394', '567', '22'),
(42, 'BMW', 'i4', 'N.C.', '600', '530', '1125', 'N.C.'),
(43, 'Volkswagen', 'ID. 4', '47950', '500', '204', '814', '18'),
(44, 'Audi', 'e-tron Sportback', '74500', '345-444', '313-503', '770', '21.7-26.9'),
(45, 'MG', 'ZS EV', '29990', '263', '143', '473', '18.6'),
(46, 'Citroen', 'C-Zero', '26900', '122', '66', '407', 'N.C.'),
(47, 'Nissan', 'Ariya', 'N.C', '340-500', '217-365', '747', 'N.C.'),
(48, 'BMW', 'iX3', '69950', '460', '286', '932', '18.5'),
(49, 'Skoda', 'Enyaq', '35300', '340-510', '148-306', '768', '460'),
(50, 'Nissan', 'e-NV200', '37788', '138-200', '80', '260', '25.9'),
(51, 'Aiways ', 'U5', '39700', '410', '197', '651', '18.6'),
(52, 'Bollore', 'Bluecar', '18300', '203', '68', 'NC', 'N.C.'),
(53, 'Citroen', 'e-C4', '34800', '350', '136', '761', 'N.C.'),
(54, 'Mia', 'Electric Mia', 'N.C.', '73-106', '24', 'NC', 'N.C.'),
(55, 'Bollore', 'Bluesummer', '17700', '163', '68', 'NC', 'N.C.'),
(56, 'Opel', 'Ampera-e', 'N.C.', '380', '200', '328', 'N.C.'),
(57, 'Peugeot', 'Partner Electric', '25300', '138', '67', '307', 'N.C.'),
(58, 'Citroen', 'Berlingo Electric', 'N.C.', '138-275', '67-136', '299', 'N.C.'),
(59, 'Volvo', 'XC40 Recharge', '59940', '425', '408', '850', '17.6'),
(60, 'Seat', 'Mii Electrique', '21920', '260', '83', '283', '14.2'),
(61, 'Peugeot', 'e-208', '32700', '340', '100', 'NC', '50'),
(62, 'citroen', 'e-c4', '35600', '350', '100', 'NC', '50'),
(63, 'Jaguar', 'I-Pace', '70350', '470', '294', '100', '90'),
(64, 'Kia', 'e-Niro', '37000', '289', '100-150', '100', '39'),
(65, 'Audi', 'e-tron', '86800', '346', '230-300', '', ''),
(66, 'BMW', 'i3s', '39950', '310-285', '125-135', '100', '42'),
(67, 'BMW', 'ix', 'NC', '600', '370', '200', '100'),
(68, 'DS3', 'E-tense', '37300', '320', '100', '100', '50'),
(69, 'fiat', '500e', '24500', '185-320', '70-87', '110', '23.8'),
(70, 'Hyundai', 'Kona', '35100', '289-449', '100-150', '100', '39'),
(71, 'Hyundai', 'loniq', '35200', '311', '100', '11', '38.3'),
(72, 'Kia', 'e-Soul', '35990', '289', '100-150', '111', 'NC'),
(73, 'Lexus', 'UX 300e', '49990', '310', '150', '50', '54.3'),
(74, 'Mazda', 'MX-30', '34500', '200', '105', '100', '35;5'),
(75, 'Mercedes', 'EQC', '79250', '414', '300', '111', '80'),
(76, 'MG', 'ZS EV', '29990', '263', '150', '80', '44.5'),
(77, 'Mini', 'cooper SE', '32900', '234', '135', '100', '32.6'),
(78, 'Nissan', 'e-nv200 Evalia', '43100', '200', '80', '100', 'NC'),
(79, 'Opel', 'Mokka-e', '36100', '322', '100', 'NC', 'NC'),
(80, 'Skoda', 'Enyaq iV 50', '34000', '340-390', '109-132', '82', 'NC'),
(81, 'VW', 'e-up', '23 740', '251 - 258', '83', '', '14,5 - 16,4'),
(82, 'Kia', 'e-Soul EV', '37300', '277 - 452', '136 - 204', '544', '14,5 - 15,7'),
(83, 'Opel', 'Zafira-e Life', '54500', '230 - 330', '136', '440', 'N.C'),
(84, 'Audi', 'R8 e-tron', '160000', '366', '375', '654', 'N.C'),
(85, 'Nissan', 'e-nv200 Evalia', '41900', '138 - 200 ', '109', '260', '25.9'),
(86, 'Citroen', 'e-Berlingo Multispace', '30100', '138', '67', '307', ''),
(87, 'Mercedes', 'eVito', '39900', '137', '116', 'N.C', '29.7'),
(88, 'Citroen', 'e-SpaceTourer', '53150', '230 - 330', '136', '440', 'N.C'),
(89, 'Mercedes', 'eSprinter', '71395', '119 - 157', '116', '267', '34,1 - 34,9'),
(90, 'Byton', 'M-Byte', 'N.C', '325 - 423', '268 - 470', 'N.C', ''),
(91, 'Mercedes', 'eVito Tourer', 'N.C', '421', '204', '468', '26.2'),
(92, 'Fiat', 'e-Ducato', 'N.C', '360', '122', 'N.C', 'N.C'),
(93, 'Mercedes', 'Classe A E-Cell', 'N.C', 'N.C', 'N.C', 'N.C', 'N.C'),
(94, 'Renault', 'Megane électrique', 'N.C', 'N.C', '217', 'N.C', 'N.C'),
(95, 'Hyundai ', 'Ioniq 6', 'N.C', 'N.C', 'N.C', 'N.C', 'N.C'),
(96, 'Byton', 'K-Byte', 'N.C', '325 - 423', 'N.C', 'N.C', 'N.C'),
(97, 'Citroen', 'e-Jumper', 'N.C', '200 - 340', '120', '243', 'N.C'),
(98, 'Toyota ', 'Proace Verso', 'N.C', '230 - 330', '136', '440', 'N.C'),
(99, 'Ford ', 'e-Transit', 'N.C', '350', '269', '601', 'N.C'),
(100, 'Peugot', 'e-Rifter', 'N.C', '280', '136', '609', 'N.C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
