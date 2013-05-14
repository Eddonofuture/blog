-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2013 a las 00:45:44
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bbdd_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE IF NOT EXISTS `afiliado` (
  `idafiliado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `foto` text,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idafiliado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre_categoria`, `slug`) VALUES
(1, 'Php', 'php'),
(2, 'Javascript', 'js'),
(3, 'Changelog', 'changelog'),
(4, 'Pruebas', 'pruebas'),
(5, 'Recursos', 'recursos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `idpost` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `sitio` varchar(100) DEFAULT NULL,
  `comentario` text,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `idpost`, `nombre`, `fecha`, `correo`, `sitio`, `comentario`) VALUES
(1, 1, 'Eddo', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(2, 2, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(3, 2, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(4, 2, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(5, 2, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(6, 3, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(7, 2, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(8, 7, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(9, 10, 'Felipe Veloso', '0000-00-00 00:00:00', 'f.veloso.n@gmail.com', 'nofuture.cl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.'),
(10, 2, 'Eddo', '0000-00-00 00:00:00', '', 'nofuture.cl', ''),
(11, 2, 'Eddo', '0000-00-00 00:00:00', '', 'nofuture.cl', ''),
(12, 2, 'Eddo', '2013-05-13 15:19:47', '', 'nofuture.cl', ''),
(13, 2, 'Eddo', '2013-05-13 15:34:01', '', 'nofuture.cl', ''),
(14, 2, 'Eddo', '2013-05-13 15:34:41', 'f.veloso.n@gmail.com', 'nofuture.cl', ''),
(15, 2, 'Eddo', '2013-05-13 15:35:09', 'f.veloso.n@gmail.com', 'nofuture.cl', ''),
(16, 2, 'Eddo', '2013-05-13 15:36:23', 'f.veloso.n@gmail.com', 'nofuture.cl', ''),
(17, 2, 'Eddo', '2013-05-13 15:36:51', 'f.veloso.n@gmail.com', 'nofuture.cl', ''),
(18, 2, 'Eddo', '2013-05-13 15:39:09', 'f.veloso.n@gmail.com', 'nofuture.cl', ''),
(19, 2, 'Eddo', '2013-05-13 15:40:06', 'f.veloso.n@gmail.com', 'nofuture.cl', ''),
(20, 2, 'Eddo', '2013-05-13 15:42:09', 'f.veloso.n@gmail.com', 'nofuture.cl', 'glougouyguy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicador`
--

CREATE TABLE IF NOT EXISTS `indicador` (
  `idindicador` int(11) NOT NULL AUTO_INCREMENT,
  `version` text,
  `changelog` text NOT NULL,
  PRIMARY KEY (`idindicador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `indicador`
--

INSERT INTO `indicador` (`idindicador`, `version`, `changelog`) VALUES
(1, '0.1 Beta', 'Creacion'),
(2, '0.2 Beta', 'Restauracion de Base de Datos por Error en formateo de equipo local'),
(3, 'Prueba de Version', 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `idpagina` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idpagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`idpagina`, `nombre`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Recursos', 'recurso.php'),
(3, 'Versiones', 'version.php'),
(4, 'Github', 'github.php'),
(6, 'Contacto', 'contacto.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `contenido` text,
  `categoria` text,
  PRIMARY KEY (`idpost`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`idpost`, `idusuario`, `titulo`, `fecha`, `contenido`, `categoria`) VALUES
(1, 1, 'Titulo de Post', '2013-05-12 18:03:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(2, 1, 'Titulo de Post', '2013-05-12 18:03:47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(3, 1, 'Titulo de Post', '2013-05-12 18:03:47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(4, 1, 'Titulo de Post', '2013-05-12 18:03:47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(5, 1, 'Titulo de Post', '2013-05-12 18:03:47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(6, 1, 'Titulo de Post', '2013-05-12 18:03:47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(7, 1, 'Titulo de Post', '2013-05-12 18:03:48', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(8, 1, 'Titulo de Post', '2013-05-12 18:03:48', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(9, 1, 'Titulo de Post', '2013-05-12 18:03:48', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(10, 1, 'Titulo de Post', '2013-05-12 18:03:52', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(11, 1, 'Titulo de Post', '2013-05-12 18:03:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(12, 1, 'Titulo de Post', '2013-05-12 18:03:55', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nunc erat. Aenean consequat turpis vitae tortor congue adipiscing. Nulla elit sem, adipiscing sit amet fringilla posuere, ornare quis orci. Nunc at augue vel augue hendrerit tincidunt. Fusce eu dui urna, ut vestibulum odio. Pellentesque sed arcu nec quam aliquet gravida vitae et ante. Nullam luctus vulputate gravida. Mauris nec velit felis, quis placerat nisi. Cras posuere leo ut mi pellentesque id imperdiet tellus molestie. Nulla gravida pharetra velit, in tincidunt lectus consequat et. Morbi eu tortor nunc.', 'php'),
(13, 1, 'Recurso css', '2013-05-13 16:18:03', 'Posteando ejemplo', 'recursos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE IF NOT EXISTS `publicidad` (
  `idpublicidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `foto` text,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idpublicidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `fechanac`, `correo`, `password`, `foto`) VALUES
(1, 'Felipe Veloso', '1989-02-15', 'f.veloso.n@gmail.com', 'Riraito1221', 'logo.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
