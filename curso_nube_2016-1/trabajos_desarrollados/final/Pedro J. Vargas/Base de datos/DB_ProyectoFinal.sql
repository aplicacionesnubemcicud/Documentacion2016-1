-- --------------------------------------------------------
-- Host:                         ec2-52-67-61-161.sa-east-1.compute.amazonaws.com
-- Versión del servidor:         5.5.46 - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para test1
DROP DATABASE IF EXISTS `test1`;
CREATE DATABASE IF NOT EXISTS `test1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test1`;


-- Volcando estructura para tabla test1.capitulodos
DROP TABLE IF EXISTS `capitulodos`;
CREATE TABLE IF NOT EXISTS `capitulodos` (
  `id_capdos` int(11) NOT NULL AUTO_INCREMENT,
  `c2valor1` varchar(50) NOT NULL DEFAULT '100',
  `c2valor2` varchar(50) NOT NULL DEFAULT '100',
  `c2valor3` varchar(50) NOT NULL DEFAULT '100',
  `c2valor4` varchar(50) NOT NULL DEFAULT '100',
  `c2valor5` varchar(50) NOT NULL DEFAULT '100',
  `c2valor6` varchar(50) NOT NULL DEFAULT '100',
  `c2valor7` varchar(50) NOT NULL DEFAULT '100',
  `c2valor8` varchar(50) NOT NULL DEFAULT '100',
  `c2valor9` varchar(50) NOT NULL DEFAULT '100',
  `c2valor10` varchar(50) NOT NULL DEFAULT '100',
  `id_elemento` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_capdos`),
  KEY `fk_cap2_elemento` (`id_elemento`),
  CONSTRAINT `fk_cap2_elemento` FOREIGN KEY (`id_elemento`) REFERENCES `Elementos` (`id_elemento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test1.capitulodos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `capitulodos` DISABLE KEYS */;
INSERT INTO `capitulodos` (`id_capdos`, `c2valor1`, `c2valor2`, `c2valor3`, `c2valor4`, `c2valor5`, `c2valor6`, `c2valor7`, `c2valor8`, `c2valor9`, `c2valor10`, `id_elemento`) VALUES
	(1, '555', '444', '100', '100', '100', '100', '100', '100', '100', '100', 1),
	(2, '200', '150', '50', '100', '100', '100', '100', '100', '100', '100', 1),
	(3, '45', '67', '13', '38', '3', '9', '56', '100', '100', '100', 1),
	(4, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', 1);
/*!40000 ALTER TABLE `capitulodos` ENABLE KEYS */;


-- Volcando estructura para tabla test1.capitulouno
DROP TABLE IF EXISTS `capitulouno`;
CREATE TABLE IF NOT EXISTS `capitulouno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor1` varchar(50) DEFAULT '100',
  `valor2` varchar(50) DEFAULT '100',
  `valor3` varchar(50) DEFAULT '100',
  `valor4` varchar(50) DEFAULT '100',
  `valor5` varchar(50) DEFAULT '100',
  `valor6` varchar(50) DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test1.capitulouno: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `capitulouno` DISABLE KEYS */;
INSERT INTO `capitulouno` (`id`, `valor1`, `valor2`, `valor3`, `valor4`, `valor5`, `valor6`) VALUES
	(1, '600', '400', '200', '300', '100', '100'),
	(2, '4', '5', '6', '7', '8', '100'),
	(3, '45', '34', '56', '23', '96', '65'),
	(4, '100', '100', '100', '100', '100', '100'),
	(5, '100', '100', '100', '100', '100', '100');
/*!40000 ALTER TABLE `capitulouno` ENABLE KEYS */;


-- Volcando estructura para tabla test1.Elementos
DROP TABLE IF EXISTS `Elementos`;
CREATE TABLE IF NOT EXISTS `Elementos` (
  `id_elemento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_elemento` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id_elemento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test1.Elementos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `Elementos` DISABLE KEYS */;
INSERT INTO `Elementos` (`id_elemento`, `nombre_elemento`) VALUES
	(1, 'Resistencia'),
	(2, 'fuente de voltaje'),
	(3, 'fuente de corriente'),
	(4, 'condensador'),
	(5, 'bobina');
/*!40000 ALTER TABLE `Elementos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
