-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 10, 2023 alle 09:53
-- Versione del server: 8.0.30
-- Versione PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_lucabandieraa`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id_cliente` int NOT NULL,
  `nome` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cognome` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sesso` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `indirizzo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `citta` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `provincia` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cap` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `numero_telefono` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `partita_iva` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `numero_fax` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` VALUES
(117, 'Luca', 'Bandiera', 'maschio', 'Via Indipendenza, 1', 'Bologna', 'BO', '40010', '1234567890', '987654321', '123456789', 'lucabandiera@gmail.com'),
(119, 'Francesco', 'Rossi', 'maschio', 'Via Savio, 694', 'Cesena', 'FC', '47522', '3331234567', '08100750010', '0123456789', 'mariorossi@gmail.com'),
(120, 'Anna', 'Bianchi', 'femmina', 'Via Sedile di Porto, 15', 'Napoli', 'NA', '35139', '3339876543', '123456789', '987654321', 'annabianchi@yahoo.it'),
(121, 'Laura', 'Brambilla', 'femmina', 'Via Belviglieri, 2', 'Roma', 'RM', '00175', '333123456', '123456789', '987654321', 'laurabrambilla@libero.it'),
(122, 'Elena', 'Ronchi', 'femmina', 'Via Galileo Ferraris, 139', 'Borgo Virgilio', 'MN', '46040', '3339876554', '987654321', '123456789', 'elenaronchi@gmail.com'),
(123, 'Marco', 'Colombo', 'maschio', 'Vicolo Tre Marchetti, 26', 'Monfumo', 'TV', '31010', '123456789', '1234599876', '897654321', 'marcello.colombo@yahoo.it'),
(124, 'Maria', 'Villa', 'femmina', 'Viale Ippocrate, 102', 'Ponna', 'CO', '22020', '3333333333', '987654321', '123456789', 'mariavilla@gmail.com'),
(125, 'Giuseppe', 'Frigerio', 'maschio', 'Piazza Principe Umberto, 114', 'Firenze', 'FI', '50132', '987654321', '11111111111', '000000000', 'giuseppe.frigerio@yahoo.it'),
(126, 'Giuseppina', 'Sala', 'femmina', 'Via Venezia, 8', 'Lungro', 'CS', '87010', '123456789', '987654321', '00000000000', 'giuseppina.sala@gmail.com'),
(127, 'Angela', 'Fumagalli', 'femmina', 'Via Rosmini, 91', 'Corbara', 'SA', '84010', '3333333333', '00000000000', '1111111111', 'angelafumagalli@yahoo.it'),
(128, 'Francesca', 'Stucchi', 'femmina', 'Via dei Fiorentini, 122', 'Napoli', 'NA', '80137', '123456789', '0000000000', '1111111111', 'francescastucchi@gmail.com'),
(129, 'Paola', 'Ravasi', 'femmina', 'Largo Febo, 83', 'Lodrino', 'BS', '25060', '3331234567', '00000000', '123456789', 'paola.ravasi@gmail.com'),
(130, 'Silvia', 'Riva', 'femmina', 'Via Sacchi, 118', 'Sanguarzo', 'UD', '33040', '3339876543', '0987654321', '1234567890', 'silviariva@yahoo.it'),
(131, 'Chiara', 'Pirola', 'femmina', 'Piazza Cardinale Riario Sforza, 69', 'Selva', 'GR', '58030', '3313333333', '000000000', '1234567899', 'chiarapirola@gmail.com'),
(132, 'Andrea', 'Passoni', 'maschio', 'Via Licola Patria, 105', 'Montemarano', 'AV', '83040', '3331234567', '0987654321', '00000000', 'andreapassoni@yahoo.it'),
(133, 'Luigi', 'Marchesi', 'maschio', 'Via Vico Ferrovia, 94', 'Valguarnera', 'EN', '94019', '3331234567', '000000000', '00000000', 'luigimarchesi@gmail.com'),
(134, 'Alessandro', 'Motta', 'maschio', 'Via Paolo Gaidano, 78', 'Resiutta', 'UD', '33010', '3331234567', '12345678900', '0987654321', 'alemotta@gmail.com'),
(135, 'Roberto', 'Magni', 'maschio', 'Via Varrone, 116', 'Calderara', 'CT', '95030', '3339876543', '0987654321', '1234567890', 'robertomagni@gmail.com'),
(136, 'Antonio', 'Vederio', 'maschio', 'Piazza Bovio, 46', 'Dogaro', 'MO', '41038', '3331234567', '0000000000', '33333333', 'antonio.vedero@yahoo.it'),
(137, 'Giovanni', 'Beretta', 'maschio', 'Via del Pontiere, 104', 'Dattilo', 'TP', '91010', '3331234567', '00000000000', '123456789', 'giovanniberetta@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `dimensioni`
--

CREATE TABLE `dimensioni` (
  `id_dimensione` int NOT NULL,
  `descrizione` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `dimensioni`
--

INSERT INTO `dimensioni` VALUES
(5, '800x1000'),
(6, '1200x1200'),
(7, '1100x1100'),
(8, '1067x1067'),
(9, '1219x1016'),
(10, '1000x1200'),
(11, '1016x1219'),
(12, '1143x1143'),
(13, '1200x800'),
(14, '800x600'),
(4, '480x480'),
(3, '450x450'),
(2, '750x1016'),
(1, '1168x1168'),
(15, '1200x1000'),
(16, '800x1200'),
(17, '1524x1524'),
(18, '965x965'),
(19, '480x965'),
(20, '1219x1219');

-- --------------------------------------------------------

--
-- Struttura della tabella `dipendenti`
--

CREATE TABLE `dipendenti` (
  `id_dipendente` int NOT NULL,
  `nome` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cognome` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sesso` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `numero_telefono` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `indirizzo` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `citta` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cap` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `provincia` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_privilegio` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `dipendenti`
--

INSERT INTO `dipendenti` VALUES
(40, 'Admin', 'Admin', 'maschio', 'admin@gap.com', '3331234567', 'admin', 'admin', '00000', 'AD', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 1),
(38, 'Lamberto', 'Manfrin', 'maschio', 'lambertomanfrin@gap.com', '3331234567', 'Piazza Pilastri, 95', 'Verderio Inferiore', '23879', 'LC', 'lambertomanfrin', 'e992a981ee99434af5eefe9e27933ea586151cf0d282ea1872859cebdc22bf44ff21edf3adafcad1336fc995789f4a86ee73f8599dc829b12da3f13e6f040f90', 1),
(41, 'User', 'User', 'maschio', 'user@gap.it', '3331234567', 'user', 'user', '00000', 'US', 'user', 'b14361404c078ffd549c03db443c3fede2f3e534d73f78f77301ed97d4a436a9fd9db05ee8b325c0ad36438b43fec8510c204fc1c1edb21d0941c00e9e2c1ce2', 2),
(39, 'Gerardo', 'Trevisano', 'maschio', 'gerardotrevisano@gap.com', '3331234567', 'Via Galvani, 61', 'Ca\' Vendramin', '45010', 'RO', 'gerardotrevisano', '997c403f35f508d9453238583870d39d56b751a9f8e6475f6ceb9b728e96c085e0d3bf59a5412d1d568c531bca2c480921ed4eabcce781e0d1c603d0a7fb8ed0', 2),
(42, 'Nadia', 'Trevisan', 'femmina', 'nadiatrevisan@gap.com', '3331234567', 'Viale delle Province, 96', 'Santa Maria Goretti', '95121', 'CT', 'nadiatrevisan', 'b24a601a43629642f386df6ed656fb6eaf2997040826579f74d7fb59cff49cd1d1dddcbef52f1f8eb0063909b886c82949e540f70a136010a6838622b83ebce7', 2),
(43, 'Virginia', 'Toscani', 'femmina', 'virginiatoscani@gap.com', '3339876543', 'Via Carlo Cattaneo, 118', 'Oschiri', '07027', 'SS', 'virginiatoscani', '03e321507ae23de85386e16029599bdc62c5dbebe9ca1de71d359b2b787b3c9cfec250a6958d5686aa7733933587b567fe5f590e4c2bd1360353158892f71983', 1),
(44, 'Clara', 'Pugliesi', 'femmina', 'clarapugliesi@gap.com', '3331234567', 'Piazzetta Concordia, 5', 'Balossa Bigli', '27039', 'PV', 'clarapugliesi', 'c727b188d1bedeed654df811d9dd5c496c11b1850c14ffefecec9f09cac1fdb816b79cf078aa4e832d52aa45dabe764790f3b70a0b7348f2d6a30c042e565a97', 1),
(45, 'Fabiana', 'Pisani', 'femmina', 'fabianapisani@gap.com', '3311234567', 'Viale Ippocrate, 122', 'Plesio', '22010', 'CO', 'fabianapisani', '8e5f4760cde01f5d2862cf30a39b554e61c76cd1d6017f9bd2222857cac025eec83b435765336660862a27a3d418fc7c4458a8302b8dceffa24433d1e191cb5d', 2),
(47, 'Ornella', 'Udinesi', 'femmina', 'ornellaudinesi@gap.com', '3331234567', 'Via Piave, 117', 'Casalanguida', '66031', 'CH', 'ornellaudinesi', '7d97221993ac87a9a69ed30e2839a34c688e339b69fcccf9484c1bb66c8bd9dc4bca6543f2654d1030b7afa554f7d4fec36902326471895cf3fb4787f8bc252a', 1),
(48, 'Fabrizio', 'Trevisano', 'maschio', 'fabriziotrevisano@gap.com', '3331234567', 'Corso Alcide De Gasperi, 81', 'Foen', '32032', 'BL', 'fabianotrevisano', '3e7424c28216714877f55ce720f05b2515cfcb5b6f4406490813de1fbc79b8ab1e4762ddf019780f265c41a9b2afd44ec3071b60cd126f1740e02e814db648fd', 1),
(49, 'Pietro', 'Baresi', 'maschio', 'pietrobaresi@gap.com', '3331234567', 'Via Valpantena, 126', 'Pontecchio Polesine', '45030', 'RO', 'pietrobaresi', 'bdc891a6bfbe211cc75be916058d79fd51757b9820f553db71639218789db6c5ec1137cc9fc405cf373955e4a77e5837f3464afaa1c24ebfaae46b9bc116a5fa', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `documenti`
--

CREATE TABLE `documenti` (
  `id_documento` int NOT NULL,
  `id_cliente` int DEFAULT NULL,
  `id_pallet` int NOT NULL,
  `quantita_pallet` int DEFAULT NULL,
  `numero_bolla` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `data_carico` date DEFAULT NULL,
  `id_locazione` int DEFAULT NULL,
  `id_magazzino` int DEFAULT NULL,
  `id_listino` int DEFAULT NULL,
  `prezzo_listino` double NOT NULL,
  `prezzo_totale` double DEFAULT NULL,
  `id_riferimento` int DEFAULT NULL,
  `data_uscita` date DEFAULT NULL,
  `stato` int NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `documenti`
--

INSERT INTO `documenti` VALUES
(103, 128, 87, 28, '7', '2023-08-30', 31, 4, 79, 15, 420, 145, NULL, 1, '2023-09-09 22:14:54'),
(100, 117, 1, 5, '58', '2023-09-06', 4, 1, 66, 0.6, 3, 89, '2023-09-10', 0, '2023-09-09 22:11:18'),
(101, 126, 88, 5, '1', '2023-09-08', 21, 3, 75, 6, 30, 134, '2023-09-10', 0, '2023-09-09 22:11:57'),
(102, 129, 8, 3, '25', '2023-09-01', 21, 3, 77, 6, 18, 149, NULL, 1, '2023-09-09 22:14:06'),
(94, 131, 89, 20, '1', '2023-09-01', 27, 3, 67, 1.3, 26, 160, '2023-09-10', 0, '2023-09-09 22:05:06'),
(95, 120, 90, 2, '26', '2023-09-04', 11, 2, 75, 3.5, 7, 97, '2023-09-10', 0, '2023-09-09 22:05:46'),
(96, 133, 62, 100, '8', '2023-08-24', 27, 3, 76, 4, 400, 170, NULL, 1, '2023-09-09 22:06:39'),
(97, 128, 51, 5, '2', '2023-09-06', 27, 3, 66, 5, 25, 145, NULL, 1, '2023-09-09 22:07:53'),
(98, 132, 32, 3, '3', '2023-09-06', 6, 1, 78, 3, 9, 165, '2023-09-10', 0, '2023-09-09 22:09:15'),
(99, 137, 58, 25, '25', '2023-07-12', 3, 1, 73, 14, 350, 190, NULL, 1, '2023-09-09 22:10:28');

-- --------------------------------------------------------

--
-- Struttura della tabella `listini`
--

CREATE TABLE `listini` (
  `id_listino` int NOT NULL,
  `titolo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `listini`
--

INSERT INTO `listini` VALUES
(67, 'Listino invernale'),
(66, 'Ultime occasioni'),
(72, 'Pallet in legno'),
(73, 'Pallet in legno pressato'),
(74, 'Pallet in plastica'),
(75, 'Pallet in metallo'),
(76, 'Pallet in carta'),
(77, 'Listino estivo'),
(78, 'Rimanenze'),
(79, 'Listino del 2023');

-- --------------------------------------------------------

--
-- Struttura della tabella `listino_pallet`
--

CREATE TABLE `listino_pallet` (
  `id_listino_pallet` int NOT NULL,
  `id_pallet` int NOT NULL,
  `id_listino` int NOT NULL DEFAULT '0',
  `prezzo` double NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `listino_pallet`
--

INSERT INTO `listino_pallet` VALUES
(315, 94, 79, 12),
(314, 94, 79, 12),
(313, 100, 66, 6),
(312, 87, 79, 15),
(311, 62, 76, 4),
(310, 66, 76, 7),
(309, 61, 79, 9.6),
(308, 63, 78, 5),
(307, 68, 66, 3),
(306, 37, 74, 6),
(305, 31, 74, 14),
(304, 29, 66, 0.5),
(303, 34, 79, 9),
(302, 36, 79, 7.5),
(301, 49, 67, 8),
(300, 51, 66, 5),
(299, 56, 79, 16),
(298, 59, 66, 3),
(297, 54, 79, 9),
(296, 58, 73, 14),
(295, 42, 73, 4),
(294, 43, 67, 16),
(293, 15, 79, 13),
(292, 11, 78, 5),
(291, 20, 78, 6),
(290, 79, 77, 4),
(289, 75, 78, 2),
(288, 32, 78, 3),
(287, 39, 67, 10),
(286, 22, 66, 4),
(284, 88, 75, 6),
(283, 91, 66, 6),
(282, 92, 75, 11),
(280, 28, 74, 8),
(279, 9, 72, 1.1),
(278, 7, 66, 12),
(276, 3, 79, 9),
(275, 80, 76, 3),
(274, 90, 75, 3.5),
(273, 19, 72, 3),
(272, 85, 78, 2),
(271, 80, 79, 5),
(270, 58, 78, 2),
(269, 8, 77, 6),
(267, 1, 66, 0.6),
(266, 89, 67, 1.3),
(264, 57, 73, 4),
(263, 26, 74, 6),
(262, 2, 72, 2),
(261, 73, 76, 1.2),
(260, 84, 75, 20);

-- --------------------------------------------------------

--
-- Struttura della tabella `locazioni`
--

CREATE TABLE `locazioni` (
  `id_locazione` int NOT NULL,
  `area` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `id_magazzino` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `locazioni`
--

INSERT INTO `locazioni` VALUES
(20, ' Area di manutenzione', 2),
(21, ' Area di carico', 3),
(22, ' Area di scarico', 3),
(23, ' Area di stoccaggio I', 3),
(19, ' Area di ritorno merci', 2),
(18, ' Area di spedizione', 2),
(16, ' Area di etichettatura', 2),
(17, ' Area di controllo qualità', 2),
(14, ' Area di stoccaggio Y', 2),
(15, ' Area di confezionamento', 2),
(6, ' Area di etichettatura', 1),
(7, ' Area di controllo qualità', 1),
(8, ' Area di spedizione', 1),
(9, ' Area di ritorno merci', 1),
(10, ' Area di manutenzione', 1),
(11, ' Area di carico', 2),
(12, ' Area di scarico', 2),
(13, ' Area di stoccaggio X', 2),
(5, ' Area di confezionamento', 1),
(4, ' Area di stoccaggio B', 1),
(3, ' Area di stoccaggio A', 1),
(2, ' Area di scarico', 1),
(1, ' Area di carico', 1),
(24, ' Area di stoccaggio II', 3),
(25, ' Area di confezionamento', 3),
(26, ' Area di etichettatura', 3),
(27, ' Area di controllo qualità', 3),
(28, ' Area di spedizione', 3),
(29, ' Area di ritorno merci', 3),
(30, ' Area di manutenzione', 3),
(31, ' Area di carico', 4),
(32, ' Area di scarico', 4),
(33, ' Area di stoccaggio Alpha', 4),
(34, ' Area di stoccaggio Beta', 4),
(35, ' Area di confezionamento', 4),
(36, ' Area di etichettatura', 4),
(37, ' Area di controllo qualità', 4),
(38, ' Area di spedizione', 4),
(39, ' Area di ritorno merci', 4),
(40, ' Area di manutenzione', 4),
(41, ' Area di carico', 5),
(42, ' Area di scarico', 5),
(43, ' Area di stoccaggio Gamma', 5),
(44, ' Area di stoccaggio Delta', 5),
(45, ' Area di confezionamento', 5),
(46, ' Area di etichettatura', 5),
(47, ' Area di controllo qualità', 5),
(48, ' Area di spedizione', 5),
(49, ' Area di ritorno merci', 5),
(50, ' Area di manutenzione', 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `magazzini`
--

CREATE TABLE `magazzini` (
  `id_magazzino` int NOT NULL,
  `denominazione` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `indirizzo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `citta` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cap` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `provincia` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `magazzini`
--

INSERT INTO `magazzini` VALUES
(1, 'Emiliana Imballaggi', 'Via Piero Gobetti, 12', 'Fabbrico', '42042', 'RE'),
(2, 'C.G.A. Pallets', 'Via Ancona, 23', 'Calendasco', '29010', 'PC'),
(3, 'Gruppo Pallets', 'Via Due Ponti, 27', 'San Giorgio', '47122', 'FC'),
(4, 'Palletways Italia', 'Via Pradazzo, 7', 'Calderara di Reno', '40012', 'BO'),
(5, 'Emvitalia', 'Via Enrico Fermi, 6', 'Lugo', '48022', 'RA');

-- --------------------------------------------------------

--
-- Struttura della tabella `materiali`
--

CREATE TABLE `materiali` (
  `id_materiale` int NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `materiali`
--

INSERT INTO `materiali` VALUES
(1, 'Carta'),
(2, 'Plastica'),
(4, 'Legno pressato'),
(3, 'Legno'),
(5, 'Metallo');

-- --------------------------------------------------------

--
-- Struttura della tabella `pallet`
--

CREATE TABLE `pallet` (
  `id_pallet` int NOT NULL,
  `nominativo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_dimensione` int NOT NULL,
  `id_materiale` int NOT NULL,
  `peso_massimo` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `pallet`
--

INSERT INTO `pallet` VALUES
(92, 'Pallet Piccolo Metallo', 12, 5, 1600),
(91, 'Pallet Mezza Dimensione (Nuovo) Metallo', 11, 5, 1600),
(89, 'Pallet Mini Metallo', 9, 5, 1600),
(90, 'Pallet per Container ISO Metallo', 10, 5, 2500),
(88, 'Pallet Leggero Metallo', 8, 5, 2000),
(87, 'Pallet Quadrato Extra Grande Metallo', 7, 5, 2800),
(86, 'Pallet Quadrato Europeo Metallo', 6, 5, 2500),
(85, 'Pallet Quadrato Metallo', 5, 5, 2500),
(84, 'Pallet Mezza Dimensione Statunitense Metallo', 4, 5, 2000),
(82, 'Pallet Mezza Dimensione Metallo', 2, 5, 2000),
(83, 'Pallet Standard Statunitense Metallo', 3, 5, 2000),
(80, 'Pallet Extra Grande Carta', 20, 1, 1800),
(81, 'Pallet Standard Metallo', 1, 5, 2500),
(79, 'Pallet per Metà Lungo Carta', 19, 1, 600),
(77, 'Pallet Europeo Lungo Standard Carta', 17, 1, 1000),
(78, 'Pallet Quadrato Medio Carta', 18, 1, 800),
(76, 'Pallet Quadrato Grande Carta', 16, 1, 1400),
(75, 'Pallet Europeo Lungo Carta', 15, 1, 1000),
(73, 'Pallet Statunitense Mezza Dimensione Carta', 13, 1, 600),
(74, 'Pallet per Container ISO a Mezza Dimensione Carta', 14, 1, 600),
(72, 'Pallet Piccolo Carta', 12, 1, 400),
(71, 'Pallet Mezza Dimensione (Nuovo) Carta', 11, 1, 600),
(70, 'Pallet per Container ISO Carta', 10, 1, 800),
(69, 'Pallet Mini Carta', 9, 1, 400),
(68, 'Pallet Leggero Carta', 8, 1, 800),
(67, 'Pallet Quadrato Extra Grande Carta', 7, 1, 1200),
(66, 'Pallet Quadrato Europeo Carta', 6, 1, 1000),
(65, 'Pallet Quadrato Carta', 5, 1, 1000),
(64, 'Pallet Mezza Dimensione Statunitense Carta', 4, 1, 800),
(62, 'Pallet Mezza Dimensione Carta', 2, 1, 800),
(63, 'Pallet Standard Statunitense Carta', 3, 1, 800),
(61, 'Pallet Standard Carta', 1, 1, 1000),
(60, 'Pallet Extra Grande Legno Pressato', 20, 4, 2200),
(59, 'Pallet per Metà Lungo Legno Pressato', 19, 4, 1200),
(58, 'Pallet Quadrato Medio Legno Pressato', 18, 4, 1400),
(57, 'Pallet Europeo Lungo Standard Legno Pressato', 17, 4, 1600),
(56, 'Pallet Quadrato Grande Legno Pressato', 16, 4, 2000),
(55, 'Pallet Europeo Lungo Legno Pressato', 15, 4, 1600),
(54, 'Pallet per Container ISO a Mezza Dimensione Legno Pressato', 14, 4, 1000),
(53, 'Pallet Statunitense Mezza Dimensione Legno Pressato', 13, 4, 1000),
(52, 'Pallet Piccolo Legno Pressato', 12, 4, 1000),
(51, 'Pallet Mezza Dimensione (Nuovo) Legno Pressato', 11, 4, 1000),
(50, 'Pallet per Container ISO Legno Pressato', 10, 4, 1600),
(49, 'Pallet Mini Legno Pressato', 9, 4, 1000),
(48, 'Pallet Leggero Legno Pressato', 8, 4, 1400),
(47, 'Pallet Quadrato Extra Grande Legno Pressato', 7, 4, 1800),
(45, 'Pallet Quadrato Legno Pressato', 5, 4, 1600),
(46, 'Pallet Quadrato Europeo Legno Pressato', 6, 4, 1600),
(44, 'Pallet Mezza Dimensione Statunitense Legno Pressato', 4, 4, 1400),
(43, 'Pallet Standard Statunitense Legno Pressato', 3, 4, 1400),
(42, 'Pallet Mezza Dimensione Legno Pressato', 2, 4, 1400),
(41, 'Pallet Standard Legno Pressato', 1, 4, 1600),
(39, 'Pallet per Metà Lungo Plastica', 19, 2, 800),
(40, 'Pallet Extra Grande Plastica', 20, 2, 2000),
(38, 'Pallet Quadrato Medio Plastica', 18, 2, 1000),
(37, 'Pallet Europeo Lungo Standard Plastica', 17, 2, 1200),
(36, 'Pallet Quadrato Grande Plastica', 16, 2, 1800),
(35, 'Pallet Europeo Lungo Plastica', 15, 2, 1200),
(34, 'Pallet per Container ISO a Mezza Dimensione Plastica', 14, 2, 1000),
(32, 'Pallet Piccolo Plastica', 12, 2, 600),
(33, 'Pallet Statunitense Mezza Dimensione Plastica', 13, 2, 1000),
(31, 'Pallet Mezza Dimensione (Nuovo) Plastica', 11, 2, 1000),
(30, 'Pallet per Container ISO Plastica', 10, 2, 1200),
(28, 'Pallet Leggero Plastica', 8, 2, 1000),
(29, 'Pallet Mini Plastica', 9, 2, 600),
(27, 'Pallet Quadrato Extra Grande Plastica', 7, 2, 1500),
(25, 'Pallet Quadrato Plastica', 5, 2, 1200),
(26, 'Pallet Quadrato Europeo Plastica', 6, 2, 1200),
(24, 'Pallet Mezza Dimensione Statunitense Plastica', 4, 2, 1000),
(23, 'Pallet Standard Statunitense Plastica', 3, 2, 1000),
(22, 'Pallet Mezza Dimensione Plastica', 2, 2, 1000),
(21, 'Pallet Standard Plastica', 1, 2, 1200),
(20, 'Pallet Extra Grande Legno', 20, 3, 2500),
(19, 'Pallet per Metà Lungo Legno', 19, 3, 1000),
(18, 'Pallet Quadrato Medio Legno', 18, 3, 1200),
(17, 'Pallet Europeo Lungo Standard Legno', 17, 3, 1800),
(16, 'Pallet Quadrato Grande Legno', 16, 3, 2200),
(15, 'Pallet Europeo Lungo Legno', 15, 3, 1500),
(14, 'Pallet per Container ISO a Mezza Dimensione Legno', 14, 3, 1200),
(13, 'Pallet Statunitense Mezza Dimensione Legno', 13, 3, 1200),
(12, 'Pallet Piccolo Legno', 12, 3, 800),
(11, 'Pallet Mezza Dimensione (Nuovo) Legno', 11, 3, 1200),
(10, 'Pallet per Container ISO Legno', 10, 3, 1800),
(9, 'Pallet Mini Legno', 9, 3, 800),
(8, 'Pallet Leggero Legno', 8, 3, 1200),
(7, 'Pallet Quadrato Extra Grande Legno', 7, 3, 1800),
(6, 'Pallet Quadrato Europeo Legno', 6, 3, 1500),
(5, 'Pallet Quadrato Legno', 5, 3, 1500),
(4, 'Pallet Mezza Dimensione Statunitense Legno', 4, 3, 1200),
(3, 'Pallet Standard Statunitense Legno', 3, 3, 1200),
(2, 'Pallet Mezza Dimensione Legno', 2, 3, 1200),
(1, 'Pallet Standard Legno', 1, 3, 1500),
(93, 'Pallet Statunitense Mezza Dimensione Metallo', 13, 5, 1600),
(94, 'Pallet per Container ISO a Mezza Dimensione Metallo', 14, 5, 1600),
(95, 'Pallet Europeo Lungo Metallo', 15, 5, 2000),
(96, 'Pallet Quadrato Grande Metallo', 16, 5, 3000),
(97, 'Pallet Europeo Lungo Standard Metallo', 17, 5, 2500),
(98, 'Pallet Quadrato Medio Metallo', 18, 5, 2000),
(99, 'Pallet per Metà Lungo Metallo', 19, 5, 1800),
(100, 'Pallet Extra Grande Metallo', 20, 5, 3500);

-- --------------------------------------------------------

--
-- Struttura della tabella `privilegi`
--

CREATE TABLE `privilegi` (
  `id_privilegio` int NOT NULL,
  `ruolo` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dipendenti_privilegio` int NOT NULL,
  `modifica_elimina_privilegio` int NOT NULL,
  `listini_privilegio` int NOT NULL,
  `documenti_privilegio` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `privilegi`
--

INSERT INTO `privilegi` VALUES
(1, 'admin', 1, 1, 1, 1),
(2, 'user', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `riferimenti`
--

CREATE TABLE `riferimenti` (
  `id_riferimento` int NOT NULL,
  `azienda` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_cliente` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `riferimenti`
--

INSERT INTO `riferimenti` VALUES
(88, 'XML', 117),
(87, 'Qubica', 117),
(89, 'StarTec', 117),
(95, 'Ellex', 119),
(96, '22X', 119),
(97, 'B\'s', 120),
(98, 'Alfa', 120),
(99, 'Avab', 120),
(100, 'Burg', 120),
(101, 'LAD', 120),
(102, 'Usil', 117),
(103, '149B', 117),
(104, 'UPB', 119),
(105, 'wizzMB', 119),
(106, 'Dynal', 119),
(107, 'Levb', 121),
(108, 'Bizlb', 121),
(109, 'PrimaryL', 121),
(110, 'BaLb', 121),
(111, 'LUV', 121),
(112, 'ErLabs', 122),
(113, 'Lery', 122),
(114, 'Halio', 122),
(115, 'Urer', 122),
(116, 'Cheir', 122),
(117, 'Lubee', 123),
(118, 'Glowmm', 123),
(119, 'JobbyL', 123),
(120, 'TechMMB', 123),
(121, 'MLuxe', 123),
(122, 'Dubl', 124),
(123, 'MVLUXE', 124),
(124, 'KLV', 124),
(125, 'FoxMV', 124),
(126, 'MyVL', 124),
(127, 'Glamf', 125),
(128, 'DEF', 125),
(129, 'Lorra', 125),
(130, 'Luvly', 125),
(131, 'Jiy', 125),
(132, 'Glueg', 126),
(133, 'Zentril', 126),
(134, 'GSen', 126),
(135, 'DFG', 126),
(136, 'Gsco', 126),
(137, 'Afly', 127),
(138, 'Metrol', 127),
(139, 'ARF', 127),
(140, 'Tealaf', 127),
(141, 'JaFa', 127),
(142, 'Lageo', 128),
(143, 'Dafs', 128),
(144, 'SaintL', 128),
(145, 'Yeal', 128),
(146, 'FSY', 128),
(147, 'TopLine', 129),
(148, 'Prezly', 129),
(149, 'Runp', 129),
(150, 'Suep', 129),
(151, 'Ourl', 129),
(152, 'SusiR', 130),
(153, 'SRS', 130),
(154, 'Rell', 130),
(155, 'Laguna', 130),
(156, 'Life\'S', 130),
(157, 'QPC', 131),
(158, 'Action', 131),
(159, 'Sendl', 131),
(160, 'Digitl', 131),
(161, 'CpCare', 131),
(162, 'Allap', 132),
(163, 'Leapx', 132),
(164, 'Akta', 132),
(165, 'Intelli', 132),
(166, 'TopLid', 132),
(167, 'OpemLim', 133),
(168, 'Antique', 133),
(169, 'ILU', 133),
(170, 'Komt', 133),
(171, 'Lokmi', 133),
(172, 'Loveli', 134),
(173, 'QmA', 134),
(174, 'Mittea', 134),
(175, 'Voma', 134),
(176, 'SEEM', 134),
(177, 'Foxyl', 135),
(178, 'Zilan', 135),
(179, 'Lazerl', 135),
(180, 'Tropical', 135),
(181, 'Ounder', 135),
(182, 'Optiavi', 136),
(183, 'Grabl', 136),
(184, 'MRL', 136),
(185, 'Flowal', 136),
(186, 'Aleva', 136),
(189, 'Seniorsl', 137),
(188, 'GlobalBay', 137),
(190, 'Tradel', 137),
(191, 'Luvl', 137),
(192, 'Tiercel', 137);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indici per le tabelle `dimensioni`
--
ALTER TABLE `dimensioni`
  ADD PRIMARY KEY (`id_dimensione`);

--
-- Indici per le tabelle `dipendenti`
--
ALTER TABLE `dipendenti`
  ADD PRIMARY KEY (`id_dipendente`);

--
-- Indici per le tabelle `documenti`
--
ALTER TABLE `documenti`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indici per le tabelle `listini`
--
ALTER TABLE `listini`
  ADD PRIMARY KEY (`id_listino`);

--
-- Indici per le tabelle `listino_pallet`
--
ALTER TABLE `listino_pallet`
  ADD PRIMARY KEY (`id_listino_pallet`);

--
-- Indici per le tabelle `locazioni`
--
ALTER TABLE `locazioni`
  ADD PRIMARY KEY (`id_locazione`),
  ADD UNIQUE KEY `id_locazione` (`id_locazione`);

--
-- Indici per le tabelle `magazzini`
--
ALTER TABLE `magazzini`
  ADD PRIMARY KEY (`id_magazzino`);

--
-- Indici per le tabelle `materiali`
--
ALTER TABLE `materiali`
  ADD PRIMARY KEY (`id_materiale`);

--
-- Indici per le tabelle `pallet`
--
ALTER TABLE `pallet`
  ADD PRIMARY KEY (`id_pallet`);

--
-- Indici per le tabelle `privilegi`
--
ALTER TABLE `privilegi`
  ADD PRIMARY KEY (`id_privilegio`);

--
-- Indici per le tabelle `riferimenti`
--
ALTER TABLE `riferimenti`
  ADD PRIMARY KEY (`id_riferimento`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT per la tabella `dimensioni`
--
ALTER TABLE `dimensioni`
  MODIFY `id_dimensione` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT per la tabella `dipendenti`
--
ALTER TABLE `dipendenti`
  MODIFY `id_dipendente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT per la tabella `documenti`
--
ALTER TABLE `documenti`
  MODIFY `id_documento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT per la tabella `listini`
--
ALTER TABLE `listini`
  MODIFY `id_listino` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT per la tabella `listino_pallet`
--
ALTER TABLE `listino_pallet`
  MODIFY `id_listino_pallet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT per la tabella `locazioni`
--
ALTER TABLE `locazioni`
  MODIFY `id_locazione` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT per la tabella `magazzini`
--
ALTER TABLE `magazzini`
  MODIFY `id_magazzino` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT per la tabella `materiali`
--
ALTER TABLE `materiali`
  MODIFY `id_materiale` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la tabella `pallet`
--
ALTER TABLE `pallet`
  MODIFY `id_pallet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT per la tabella `privilegi`
--
ALTER TABLE `privilegi`
  MODIFY `id_privilegio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `riferimenti`
--
ALTER TABLE `riferimenti`
  MODIFY `id_riferimento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
