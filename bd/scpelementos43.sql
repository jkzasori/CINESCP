-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-10-2018 a las 00:44:19
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scpelementos43`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartelera`
--

DROP TABLE IF EXISTS `cartelera`;
CREATE TABLE IF NOT EXISTS `cartelera` (
  `idcartelera` int(11) NOT NULL AUTO_INCREMENT,
  `idmovie` int(11) NOT NULL,
  `idtheater` int(11) NOT NULL,
  PRIMARY KEY (`idcartelera`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cartelera`
--

INSERT INTO `cartelera` (`idcartelera`, `idmovie`, `idtheater`) VALUES
(1, 2, 1),
(2, 4, 1),
(3, 5, 1),
(4, 1, 2),
(5, 3, 2),
(6, 5, 2),
(7, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `idcustomer` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(41) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(41) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(41) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idcustomer`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`idcustomer`, `first_name`, `last_name`, `email`, `age`, `password`) VALUES
(1, 'José ', 'Támara', 'jotafu@live.com', 22, '12345'),
(2, 'peto', 'Támara', 'jtamaraf1@unicartagena.edu.co', 12, '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `idmovie` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idmovie`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `movie`
--

INSERT INTO `movie` (`idmovie`, `name`, `type`, `description`) VALUES
(1, 'El depredador / The Predator', 'Ciencia ficción', 'Desde los confines del espacio hasta las más calles de los suburbios de las ciudades pequeñas, la búsqueda llega a la casa de la reinvención por Shane Black de la saga \"Predator\". Ahora, los cazadores más letales del universo son más fuertes, más inteligentes y más mortales que nunca, y se han mejorado genéticamente con ADN de otras especies. Cuando un niño accidentalmente desencadena su regreso a la Tierra, solo un grupo de ex soldados y una profesora de ciencias podrán evitar, quizá el fin de la raza humana.'),
(2, 'Venom', 'Ciencia ficción', 'Venom es un spin-off de uno de los villanos más conocidos del Universo Marvel. Producida por Sony, esta película se centrará en uno de los mayores enemigos de Peter Parker, teniendo al villano de Spider-Man 3 como protagonista del filme, que está interpretado por Tom Hardy. Venom vive dentro de Eddie Brock, un antiguo y respetado periodista que, tras perderlo todo a nivel profesional, e incitado por su odio hacia Spider-Man decidió dejar que el simbionte se introdujese en él.'),
(3, 'Johnny English 3: De nuevo en acción', 'Comedia', 'Cuando un ciberataque revela la identidad de todos los agentes secretos en activo de Reino Unido, Johnny English se convierte en la única esperanza del servicio secreto. Para para encontrar al hacker, esto fuerza su regreso después de retirarse, pero como sus habilidades son bastante limitadas English tendrá que esforzarse para superar los desafíos tecnológicos de la era moderna.'),
(4, 'Smallfoot / Pie pequeño', 'Animación', 'Migo es un Yeti que vive con los de su especie en un poblado en lo alto de las nevadas montañas. Aunque todos dicen lo contrario, él está convencido de realmente existen los Pies Pequeños, es decir, esos míticos monstruos salidos de las peores pesadillas que tienen unos pies anormalmente pequeños, dientes perfectos y solo tienen pelo en lo alto de la cabeza. Definitivamente, Migo no está de acuerdo en que estas criaturas solo existan en las leyendas.'),
(5, 'Tu nombre', 'Romance', 'Mitsuha es una estudiante que se lamenta de su vida en el campo junto a su hermana pequeña, su abuela y su padre, un político al que nunca ve. Detesta las pintorescas costumbres de su familia y sueña con el maravilloso estilo de vida de los habitantes de Tokyo. Por su parte, Taki es un estudiante que vive en Tokyo, tiene un trabajo a tiempo parcial en un restaurante italiano y necesita alejarse de su familia. Una noche, Mitsuha sueña que es un chico de Tokyo y Taki sueña que es una chica que vive en el campo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `idscore` int(11) NOT NULL AUTO_INCREMENT,
  `idcartelera` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`idscore`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `score`
--

INSERT INTO `score` (`idscore`, `idcartelera`, `idcustomer`, `quantity`) VALUES
(4, 6, 1, 10),
(3, 4, 1, 6),
(5, 7, 1, 5),
(6, 2, 2, 2),
(7, 4, 2, 2),
(8, 5, 2, 3),
(9, 6, 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theater`
--

DROP TABLE IF EXISTS `theater`;
CREATE TABLE IF NOT EXISTS `theater` (
  `idtheater` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `full_address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtheater`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `theater`
--

INSERT INTO `theater` (`idtheater`, `name`, `full_address`) VALUES
(1, 'Cine Támara', 'Ciudad Támara Cra. Támara # 12ab3'),
(2, 'José Cine Cine ', 'Country José, City José, José Street');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
