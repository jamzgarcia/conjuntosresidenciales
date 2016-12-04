-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2016 a las 06:58:56
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conjuntoresidencial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamento`
--

CREATE TABLE `apartamento` (
  `_id_apartamento` int(11) NOT NULL,
  `_id_interior` int(11) NOT NULL,
  `_id_formulario_pro` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `valor_administracion` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apartamento`
--

INSERT INTO `apartamento` (`_id_apartamento`, `_id_interior`, `_id_formulario_pro`, `nombre`, `descripcion`, `valor_administracion`) VALUES
(1, 9, 1, 'apartamento 101', 'Zona A', 30000),
(2, 9, 2, 'apartamento 102', 'Zona A', 30000),
(3, 9, 3, 'apartamento 103', 'Zona A', 45000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

CREATE TABLE `bloque` (
  `_id_bloque` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`_id_bloque`, `nombre`, `descripcion`) VALUES
(1, 'bloque 1', 'Zona A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `_id_cliente` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `con_contrasena` varchar(50) NOT NULL,
  `fec_nac` date NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `_id_eventos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `uploadedpreview` varchar(150) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `costo_evento` int(50) NOT NULL,
  `fecha_entrada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`_id_eventos`, `nombre`, `uploadedpreview`, `descripcion`, `costo_evento`, `fecha_entrada`) VALUES
(1, 'evento1', 'img/preview/Penguins.jpg', 'evento 1', 0, '2016-12-07'),
(2, 'evento2', 'img/preview/Lighthouse.jpg', 'evento 1', 0, '2016-12-07'),
(3, 'evento3', 'img/preview/Jellyfish.jpg', 'evento de prueba', 0, '2016-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_pagos`
--

CREATE TABLE `formulario_pagos` (
  `_id_formulario_pagos` int(11) NOT NULL,
  `_id_apartamento` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `concepto` varchar(25) NOT NULL,
  `mes` date NOT NULL,
  `total_pagar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_pro`
--

CREATE TABLE `formulario_pro` (
  `_id_formulario_pro` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `celular` int(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario_pro`
--

INSERT INTO `formulario_pro` (`_id_formulario_pro`, `nombre`, `apellido`, `identificacion`, `celular`, `email`) VALUES
(1, 'jimmy fernando ', 'Cantor Garcia', 1000782057, 2147483647, 'jamzgarcia@misena.edu.co'),
(2, 'felipe ', 'sanchez', 54789546, 2147483647, 'sanchezfe@hotmail.com'),
(3, 'andrea coloso', 'sanahoria', 36458798, 2147483647, 'coloso@facebook.com'),
(4, 'wilmer', 'cabezas', 1032458795, 2147483647, 'heads@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_res`
--

CREATE TABLE `formulario_res` (
  `_id_formulario_res` int(11) NOT NULL,
  `_id_apartamento` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `identificacion` int(12) NOT NULL,
  `celular` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `funcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario_res`
--

INSERT INTO `formulario_res` (`_id_formulario_res`, `_id_apartamento`, `nombre`, `apellido`, `identificacion`, `celular`, `email`, `funcion`) VALUES
(1, 1, 'emma ', 'gonzales', 51241785, 2147483647, 'emma@gmail.com', 'Arrendatario'),
(2, 1, 'marcerla', 'beltran', 1003785411, 2147483647, 'marce@gmail.com', 'Arrendatario'),
(3, 2, 'andres', 'cardenas', 1003548796, 2147483647, 'cardenasandres01@gmail.co', 'Arrendatario'),
(4, 2, 'andrea ', 'rios', 51236487, 2147483647, 'andreasolorios@yahoo.com', 'Arrendatario'),
(5, 2, 'felipe ', 'sanchez', 54789546, 2147483647, 'sanchezfe@hotmail.com', 'Propietario'),
(6, 3, 'andrea coloso', 'sanahoria', 36458798, 2147483647, 'coloso@facebook.com', 'Propietario'),
(7, 3, 'gilbert', 'cortes', 1054878222, 301654789, 'gil@gil.com', 'Arrendatario'),
(8, 3, 'hillary', 'clinton', 1023569478, 302548796, 'hillary.clinton@usa.com', 'Arrendatario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_vis`
--

CREATE TABLE `formulario_vis` (
  `_id_formulario_vis` int(11) NOT NULL,
  `_id_apartamento` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `celular` int(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interior`
--

CREATE TABLE `interior` (
  `_id_interior` int(11) NOT NULL,
  `_id_bloque` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `interior`
--

INSERT INTO `interior` (`_id_interior`, `_id_bloque`, `nombre`, `descripcion`) VALUES
(9, 1, 'interior 1', 'Zona A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `_id_user` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contrasena` varchar(220) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`_id_user`, `email`, `contrasena`, `rol`) VALUES
(4, 'jamzgarcia@misena.edu.co', '$2y$10$Tgua0Ca1CTFmFtc2f00Sq.8Y9tuC2sjoH197jD252zXu3gmJYbfbS', 'admin'),
(5, 'jaaj@yahoo.com', '$2y$10$JrkSlIsVYPyd/WjrX4jy8eLh0YEMF29dKrY31f2FO4B93BCmgWHwK', 'cliente'),
(6, 'jimmy@1234', '$2y$10$96gN3uzDepNyF5XJiZJJEuKh.w8GxmW9R.vRYgAV9QC8tj7e/F2Iq', 'cliente'),
(7, 'asdas@asdsa', '$2y$10$oAaJJlcu/lK2PJIZM3SiyekTaEjgdPZYoAc8R/ReT/8K3t2MflXke', 'cliente'),
(8, 'asdas@wqeqwe', '$2y$10$dGY4NATDBkiYOj.BAMJf2eiLX1NOiOWYY7W7iI8Tgzo2hOxTJTRYS', 'cliente'),
(9, 'coloso@facebook.com', '$2y$10$/LjKE8IVJhgk60AjWg.QouzPwD8cQr57edxZVkmt8Zw47OBEcDpKa', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`_id_apartamento`);

--
-- Indices de la tabla `bloque`
--
ALTER TABLE `bloque`
  ADD PRIMARY KEY (`_id_bloque`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`_id_cliente`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`_id_eventos`);

--
-- Indices de la tabla `formulario_pagos`
--
ALTER TABLE `formulario_pagos`
  ADD PRIMARY KEY (`_id_formulario_pagos`);

--
-- Indices de la tabla `formulario_pro`
--
ALTER TABLE `formulario_pro`
  ADD PRIMARY KEY (`_id_formulario_pro`);

--
-- Indices de la tabla `formulario_res`
--
ALTER TABLE `formulario_res`
  ADD PRIMARY KEY (`_id_formulario_res`);

--
-- Indices de la tabla `formulario_vis`
--
ALTER TABLE `formulario_vis`
  ADD PRIMARY KEY (`_id_formulario_vis`);

--
-- Indices de la tabla `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`_id_interior`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartamento`
--
ALTER TABLE `apartamento`
  MODIFY `_id_apartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `bloque`
--
ALTER TABLE `bloque`
  MODIFY `_id_bloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `_id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `_id_eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `formulario_pagos`
--
ALTER TABLE `formulario_pagos`
  MODIFY `_id_formulario_pagos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formulario_pro`
--
ALTER TABLE `formulario_pro`
  MODIFY `_id_formulario_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `formulario_res`
--
ALTER TABLE `formulario_res`
  MODIFY `_id_formulario_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `formulario_vis`
--
ALTER TABLE `formulario_vis`
  MODIFY `_id_formulario_vis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `interior`
--
ALTER TABLE `interior`
  MODIFY `_id_interior` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
