

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Base de datos: `porra_juego_de_tronos`

-- Porra para apostar que personajes de juego de tronos sobreviviran tras la actual temporada

DROP DATABASE IF EXISTS porra_juego_de_tronos;

CREATE DATABASE IF NOT EXISTS porra_juego_de_tronos;

USE porra_juego_de_tronos;

CREATE TABLE IF NOT EXISTS `Casas` (
	`NombreCasa` varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (`NombreCasa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Personajes` (
	`NombrePersonaje` varchar(50) NOT NULL UNIQUE,
	`NombreCasa` varchar(50) NOT NULL REFERENCES `Casas`(`NombreCasa`),
	 PRIMARY KEY(`NombrePersonaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Apuesta` (
	`ApuestaId` int NOT NULL AUTO_INCREMENT,
	`nombreJugador` varchar(50) NOT NULL,
	`emailJugador`  varchar(50) NOT NULL,
	`nombrePersonaje` varchar(50) NOT NULL REFERENCES `Personajes`(`NombrePersonaje`),
	`cantidadApostada` int NOT NULL,
	PRIMARY KEY(`ApuestaId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Casas` VALUES
('Stark');

INSERT INTO `Casas` VALUES
('Lannister');

INSERT INTO `Casas` VALUES
('Targaryen');


INSERT INTO `Casas` VALUES
('Baratheon');

INSERT INTO `Casas` VALUES
('Greyjoy');




INSERT INTO `Personajes` VALUES
('Jon Nieve', 'Stark');

INSERT INTO `Personajes` VALUES
('Sansa Stark', 'Stark');

INSERT INTO `Personajes` VALUES
('Arya Stark', 'Stark');

INSERT INTO `Personajes` VALUES
('Bran Stark', 'Stark');

INSERT INTO `Personajes` VALUES
('Jaime Lannister', 'Lannister');

INSERT INTO `Personajes` VALUES
('Cersei Lannister', 'Lannister');

INSERT INTO `Personajes` VALUES
('Tyrion Lannister', 'Lannister');


INSERT INTO `Personajes` VALUES
('Daenerys Targaryen', 'Targaryen');

INSERT INTO `Personajes` VALUES
('Jorah Mormont', 'Targaryen');


INSERT INTO `Personajes` VALUES
('Gusano Gris', 'Targaryen');


INSERT INTO `Personajes` VALUES
('Davos Seaworth', 'Baratheon');


INSERT INTO `Personajes` VALUES
('Melisandre', 'Baratheon');

INSERT INTO `Personajes` VALUES
('Brienne de Tarth', 'Baratheon');

INSERT INTO `Personajes` VALUES
('Theon Greyjoy', 'Greyjoy');

INSERT INTO `Personajes` VALUES
('Yara Greyjoy', 'Greyjoy');




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
