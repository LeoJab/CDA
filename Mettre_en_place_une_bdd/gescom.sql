-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 nov. 2023 à 08:47
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gescom`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_parent_id` int NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_parent_id` (`cat_parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_parent_id`) VALUES
(1, 'électronique', 0),
(2, 'téléphone', 1),
(3, 'télévision', 1);

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cus_id` int NOT NULL AUTO_INCREMENT,
  `cus_lastname` varchar(50) NOT NULL,
  `cus_firstname` varchar(50) NOT NULL,
  `cus_adresse` varchar(150) NOT NULL,
  `cus_zipcode` varchar(5) NOT NULL,
  `cus_city` varchar(50) NOT NULL,
  `cus_mail` varchar(75) DEFAULT NULL,
  `cus_phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `ord_id` int DEFAULT NULL,
  `pro_id` int DEFAULT NULL,
  `det_id` int NOT NULL AUTO_INCREMENT,
  `det_price` decimal(6,2) NOT NULL,
  `det_quantity` int NOT NULL,
  PRIMARY KEY (`det_id`),
  KEY `ord_id` (`ord_id`),
  KEY `pro_id` (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int NOT NULL AUTO_INCREMENT,
  `ord_order_date` date NOT NULL,
  `prd_ship_date` date DEFAULT NULL,
  `ord_bill_date` date DEFAULT NULL,
  `ord_reception_date` date DEFAULT NULL,
  `ord_status` varchar(25) NOT NULL,
  `cus_id` int NOT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `cus_id` (`cus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déclencheurs `orders`
--
DROP TRIGGER IF EXISTS `orders_order_date`;
DELIMITER $$
CREATE TRIGGER `orders_order_date` BEFORE INSERT ON `orders` FOR EACH ROW set new.ord_order_date = CURRENT_DATE()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_ref` varchar(10) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_price` decimal(6,2) NOT NULL,
  `pro_stock` smallint DEFAULT NULL,
  `pro_color` varchar(30) DEFAULT NULL,
  `pro_picture` varchar(40) DEFAULT NULL,
  `pro_add_date` date DEFAULT NULL,
  `pro_update_date` datetime DEFAULT NULL,
  `pro_publish` tinyint NOT NULL,
  `sup_id` int DEFAULT NULL,
  `cat_id` int NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `sup_id` (`sup_id`),
  KEY `cat_id` (`cat_id`),
  KEY `pro_ref` (`pro_ref`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`pro_id`, `pro_ref`, `pro_name`, `pro_desc`, `pro_price`, `pro_stock`, `pro_color`, `pro_picture`, `pro_add_date`, `pro_update_date`, `pro_publish`, `sup_id`, `cat_id`) VALUES
(1, 'B100', 'Samsung s22', 'Téléphone SamSung s22', '800.00', 5, 'red', NULL, '2023-11-07', NULL, 1, NULL, 2),
(2, 'A100', 'Samsung TV 50\"', 'Télévision Samsung TV 50\"', '900.00', 2, 'black', NULL, '2023-11-07', NULL, 1, NULL, 3),
(3, 'B200', 'Samsung Galaxy Z flip', 'Téléphone SamSung Galaxy Z flip', '1600.00', 5, 'Blue', NULL, '2023-11-07', NULL, 1, NULL, 2);

--
-- Déclencheurs `products`
--
DROP TRIGGER IF EXISTS `products_add_date`;
DELIMITER $$
CREATE TRIGGER `products_add_date` BEFORE INSERT ON `products` FOR EACH ROW set new.pro_add_date = CURRENT_DATE()
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `products_update_date`;
DELIMITER $$
CREATE TRIGGER `products_update_date` BEFORE UPDATE ON `products` FOR EACH ROW set new.pro_update_date = CURRENT_DATE()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `sup_id` int NOT NULL AUTO_INCREMENT,
  `sup_name` varchar(50) NOT NULL,
  `sup_city` varchar(50) NOT NULL,
  `sup_adresse` varchar(150) NOT NULL,
  `sup_mail` varchar(75) DEFAULT NULL,
  `sup_phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
