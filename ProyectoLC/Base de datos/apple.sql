-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2022 a las 03:01:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apple`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crear_cuenta`
--

CREATE TABLE `crear_cuenta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `no_de_telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crear_cuenta`
--

INSERT INTO `crear_cuenta` (`id`, `nombre`, `correo`, `contraseña`, `usuario`, `fecha_de_nacimiento`, `no_de_telefono`) VALUES
(1, 'Eduardo Grijalva', 'eduardo.aguirre@cetis107.edu.mx', 'eduardocetis', 'eduardoagustin', '2005-02-17', '6672423073');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_usuario`
--

CREATE TABLE `datos_del_usuario` (
  `crear_cuenta_id` int(11) NOT NULL,
  `direccion_de_envio_id` int(11) NOT NULL,
  `metodo_de_pago_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_del_usuario`
--

INSERT INTO `datos_del_usuario` (`crear_cuenta_id`, `direccion_de_envio_id`, `metodo_de_pago_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_de_envio`
--

CREATE TABLE `direccion_de_envio` (
  `id` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion_de_envio`
--

INSERT INTO `direccion_de_envio` (`id`, `direccion`) VALUES
(1, 'Colonia Flores Magón calle arroz #142');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciar_sesion`
--

CREATE TABLE `iniciar_sesion` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iniciar_sesion`
--

INSERT INTO `iniciar_sesion` (`id`, `correo`, `contraseña`) VALUES
(1, 'eduardo.aguirre@cetis107.edu.mx', 'eduardocetis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_de_pago`
--

CREATE TABLE `metodo_de_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `no_de_tarjeta` varchar(30) NOT NULL,
  `cvv` int(5) NOT NULL,
  `fecha_de_expiracion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metodo_de_pago`
--

INSERT INTO `metodo_de_pago` (`id`, `nombre`, `no_de_tarjeta`, `cvv`, `fecha_de_expiracion`) VALUES
(1, 'Eduardo Grijalva', '4152 3136 4161 7896', 123, '2025-12-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crear_cuenta`
--
ALTER TABLE `crear_cuenta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_del_usuario`
--
ALTER TABLE `datos_del_usuario`
  ADD KEY `fk_datos_del_usuario_direccion_de_envio_idx` (`direccion_de_envio_id`),
  ADD KEY `fk_datos_del_usuario_crear_cuenta1_idx` (`crear_cuenta_id`),
  ADD KEY `fk_datos_del_usuario_metodo_de_pago1_idx` (`metodo_de_pago_id`);

--
-- Indices de la tabla `direccion_de_envio`
--
ALTER TABLE `direccion_de_envio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `iniciar_sesion`
--
ALTER TABLE `iniciar_sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crear_cuenta`
--
ALTER TABLE `crear_cuenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `direccion_de_envio`
--
ALTER TABLE `direccion_de_envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `iniciar_sesion`
--
ALTER TABLE `iniciar_sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_del_usuario`
--
ALTER TABLE `datos_del_usuario`
  ADD CONSTRAINT `fk_datos_del_usuario_crear_cuenta1` FOREIGN KEY (`crear_cuenta_id`) REFERENCES `crear_cuenta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_del_usuario_direccion_de_envio` FOREIGN KEY (`direccion_de_envio_id`) REFERENCES `direccion_de_envio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_del_usuario_metodo_de_pago1` FOREIGN KEY (`metodo_de_pago_id`) REFERENCES `metodo_de_pago` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
