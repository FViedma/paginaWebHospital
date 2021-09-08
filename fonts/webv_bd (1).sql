-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2019 a las 17:19:58
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webv_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_bd`
--

CREATE TABLE `blog_bd` (
  `id_blog_bd` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `correo` varchar(55) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_bd`
--

INSERT INTO `blog_bd` (`id_blog_bd`, `nombre`, `correo`, `comentario`, `fecha_registro`) VALUES
(1, 'gabriel villazon delgado', 'brya_gab@hotmail.com', 'dsadasd', '2019-02-26 04:50:06'),
(2, 'prueba', 'kcaballero@iseye.com.bo', 'prueba', '2019-02-26 04:56:19'),
(3, 'florencio', 'florencondori@yahoo.es', 'qqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeqqqqqqqaaaaaaaaaaaaaaaaaaaasssssssssss', '2019-02-26 04:57:34'),
(4, 'Alex', 'alex@alex.com', 'prueba 112122', '2019-02-26 04:58:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_viedma`
--

CREATE TABLE `blog_viedma` (
  `id_blog_hosp` int(11) NOT NULL,
  `nombre_p` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `asunto` varchar(55) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_viedma`
--

INSERT INTO `blog_viedma` (`id_blog_hosp`, `nombre_p`, `email`, `asunto`, `mensaje`, `fecha_registro`) VALUES
(1, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(2, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(3, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(4, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(5, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(6, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(7, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(8, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(9, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(10, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(11, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(12, 'a', 'kcaballero@iseye.com.bo', 'a', 'a', '2019-02-26 00:00:00'),
(13, 'pruebahora', 'pruebahora@dddddd', 'pruebahora', 'pruebahora', '2019-02-26 11:55:02'),
(14, 'pruebahora', 'pruebahora@dddddd', 'pruebahora', 'pruebahora', '2019-02-26 02:30:03'),
(15, 'gabriel villazon delgado', 'brya_gab@hotmail.com', 'pruebamartes', 'El primer Hospital en el valle de Canata, jurisdicción de la Villa de Oropeza, fue fundado por el corregidor Don Martín Hernández de Zamora, natural de Villar, España. Fue denominada \"San Salvador \" y se situó a las orillas del río Condorrillo, cuyo cauce', '2019-02-26 02:30:47'),
(16, 'prueba', 'asas@sdsdasd', '', '', '2019-02-26 04:45:41'),
(17, 'sdf', 'dsf@dsadas', '', '', '2019-02-26 04:48:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo` varchar(155) NOT NULL,
  `desc_an` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `fecha_reg_not` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `desc_an`, `video`, `fecha_reg_not`) VALUES
(1, 'prueba', 'abc', 'https://www.youtube.com/watch?v=_I0av9varI4', '2019-02-27 00:00:00'),
(2, 'Colapsó el hospital Viedma en Cochabamba', 'Colapsó el hospital Viedma en Cochabamba', 'https://www.youtube.com/watch?v=MMKBv9w3MVk', '2019-02-26 04:16:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `usuario` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `password`, `tipo_usuario`, `habilitado`) VALUES
(1, 'admin', 'admin', 'admin', 1, 1),
(2, 'comunicacion', 'comunicacion', 'comunicacion', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_bd`
--
ALTER TABLE `blog_bd`
  ADD PRIMARY KEY (`id_blog_bd`);

--
-- Indices de la tabla `blog_viedma`
--
ALTER TABLE `blog_viedma`
  ADD PRIMARY KEY (`id_blog_hosp`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_bd`
--
ALTER TABLE `blog_bd`
  MODIFY `id_blog_bd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `blog_viedma`
--
ALTER TABLE `blog_viedma`
  MODIFY `id_blog_hosp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
