-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-12-2018 a las 08:49:23
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE IF NOT EXISTS `generos` (
  `genero_id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`genero_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`genero_id`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Animación'),
(3, 'Aventuras'),
(4, 'Comedia'),
(5, 'Documental'),
(6, 'Histórico'),
(7, 'Infantil'),
(8, 'Musical'),
(9, 'Romance'),
(10, 'Sagas'),
(11, 'Terror'),
(12, 'Thriller'),
(13, 'Drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE IF NOT EXISTS `peliculas` (
  `pelicula_id` int(10) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `director` varchar(50) DEFAULT NULL,
  `sinopsis` mediumtext,
  `genero` int(2) DEFAULT NULL,
  `duracion` int(3) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `trailer` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pelicula_id`),
  KEY `fk_peliculas_1_idx` (`genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`pelicula_id`, `titulo`, `director`, `sinopsis`, `genero`, `duracion`, `imagen`, `fecha`, `trailer`) VALUES
(25896314, 'Dracula', 'Francis Ford Coppola', 'En el año 1890, el joven abogado Jonathan Harker viaja a un castillo perdido de Transilvania, donde conoce al conde Drácula, que en 1462 perdió a su amor Elisabeta. El Conde, fascinado por una fotografía de Mina Murray, la novia de Harker, que le recuerda a su Elisabeta, viaja hasta Londres cruzando océanos de tiempo para conocerla. Ya en Inglaterra, intentará conquistar y seducir a Lucy, la mejor amiga de Mina. ', 11, 130, 'img/dracula.jpg', '1993-01-15 00:00:00', 'cFSb5sQ0RTY'),
(36589521, 'Bowling For Columbine', 'Michael Moore', 'Famoso documental que aborda la cuestión de la violencia en América. ¿Por qué 11.000 personas mueren cada año en Estados Unidos víctimas de las armas de fuego? Los bustos parlantes vociferan desde la pantalla de TV echándole la culpa ya a Satán ya a los videojuegos. Pero, ¿en qué se diferencia Estados Unidos de otros países? ¿Por qué Estados Unidos se ha convertido en responsable y víctima de tanta violencia? Bowling for Columbine no es una película sobre el control de la venta de armas, es una película sobre el miedo de 280 millones de norteamericanos que se sienten más seguros sabiendo que la tenencia de armas es un derecho consagrado por la Constitución. En este incisivo y tragicómico estudio de la violencia y su relación con las armas de fuego aparecen personalidades como Charlon Heston, George W. Bush o Marilyn Manson. Ganó numerosos premios en USA al mejor documental -entre los que destacan los prestigiosos National Board Of Review y el Chicago Film Critics Awards-, así como el premio a la mejor película extranjera -compitiendo con largometrajes- en los César de la Academia Francesa de Cine.', 5, 120, 'img/bowling.jpg', '2002-11-21 00:00:00', 'h4Ll46-IMhk'),
(46896469, 'dyfuiadhysfuhyufaaaaaaaaaaaaaa', 'fhsdjahfuasdhfji', 'asdfadsfsdafdf', 1, 6, 'img/resacon.jpg', '2018-12-22 00:00:00', 'dfjioshafudhf'),
(46987985, 'La Lista de Schindler', 'Steven Spielberg', 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.', 6, 195, 'img/lista.jpg', '1994-03-04 00:00:00', '5btATkiDrI4'),
(58666654, 'Jungla de cristal', 'John McTiernan', 'En lo alto de la ciudad de Los Ángeles un grupo armado terrorista se ha apoderado de un edificio tomando a un grupo de personas como rehenes. Sólo un hombre, el policía de Nueva York John McClane (Bruce Willis), ha conseguido escapar del acoso terrorista. McClane está solo y fuera de servicio, pero mantendrá una lucha feroz y agotadora contra los secuestradores. Él es la única esperanza para los rehenes.', 1, 131, 'img/jungla.jpg', '1988-09-30 00:00:00', '-7o-c34j0Uc'),
(59871328, 'Ocho Apellidos Vascos', 'Emilio Martínez-Lázaro', 'Rafa (Dani Rovira) es un joven señorito andaluz que no ha tenido que salir jamás de su Sevilla natal para conseguir lo único que le importa en la vida: el fino, la gomina, el Betis y las mujeres. Todo cambia cuando conoce a la primera mujer que se resiste a sus encantos: es Amaia (Clara Lago), una chica vasca. Decidido a conquistarla, se traslada a un pueblo de las Vascongadas, donde se hace pasar por vasco para vencer su resistencia. Adopta el nombre de Antxon y varios apellidos vascos: Arguiñano, Igartiburu, Erentxun, Gabilondo, Urdangarín, Otegi, Zubizarreta e incluso Clemente.', 4, 98, 'img/apellidos.jpg', '2014-03-14 00:00:00', 'YfopzNHLp4o'),
(65826454, 'Los Miserables', 'Tom Hooper', 'El expresidiario Jean Valjean (Hugh Jackman) es perseguido durante décadas por el despiadado policía Javert (Russell Crowe). Cuando Valjean decide hacerse cargo de Cosette, la pequeña hija de Fantine (Anne Hathaway), sus vidas cambiarán para siempre. Adaptación cinematográfica del famoso musical \'Les miserables\', basado a su vez en la novela homónima de Victor Hugo.', 8, 152, 'img/miserables.jpg', '2012-12-25 00:00:00', 'EZngbEj3W1Y'),
(76465474, 'El Padrino', 'Francis Ford Coppola', 'Años 40. Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: una chica, Connie (Talia Shire), y tres varones: el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, siempre aconsejado por su consejero Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.', 1, 175, 'img/padrino.jpg', '1972-10-20 00:00:00', 'gCVj1LeYnsc'),
(99851200, 'Batman Begins', 'Christopher Nolan', 'Nueva adaptación del famoso cómic. Narra los orígenes de la leyenda de Batman y los motivos que lo convirtieron en el representante del Bien en la ciudad de Gotham. Bruce Wayne vive obsesionado con el recuerdo de sus padres, muertos a tiros en su presencia. Atormentado por el dolor, se va de Gotham y recorre el mundo hasta que encuentra a un extraño personaje que lo adiestra en todas las disciplinas físicas y mentales que le servirán para combatir el Mal. Por esta razón, la Liga de las Sombras, una poderosa y subversiva sociedad secreta, dirigida por el enigmático R\'as Al Ghul, intenta reclutarlo. Cuando Bruce vuelve a Gotham, la ciudad está dominada por el crimen y la corrupción. Con la ayuda de su leal mayordomo Alfred, del detective de la policía Jim Gordon y de Lucius Fox, su aliado en la sociedad Ciencias Aplicadas de Wayne Enterprises, Wayne libera a su imponente alter ego: Batman, un justiciero enmascarado que utiliza la fuerza, la inteligencia y un despliegue de artefactos de alta tecnología para luchar contra las siniestras fuerzas que amenazan con destruir la ciudad. ', 10, 140, 'img/batman.jpg', '2005-06-17 00:00:00', 'JIGLjChePqk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('admin', '336e3d863781a03fcab25c8091066300', 'admin@admin.es'),
('admincvgdfgfg', 'caracola', 'rubsalma@gmail.com'),
('root', '$2y$10$wPf2i./LUib77taR9AvvAuUfry2kOoDBJFYfj759mxXUueAN6aSHu', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `fk_peliculas_1` FOREIGN KEY (`genero`) REFERENCES `generos` (`genero_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
