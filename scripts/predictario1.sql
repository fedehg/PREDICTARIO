-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 01:11:12
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `predictario1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'usuario Administrador123', 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', 'vistas/img/usuarios/admin/640.png', 1, '0000-00-00 00:00:00', '2022-08-17 20:53:25'),
(2, 'FEDE', 'fede', '', 'Administrador', 'vistas/img/usuarios/fede/624.png', 0, '0000-00-00 00:00:00', '2022-08-16 05:01:05'),
(3, 'FEDE', 'fede', '', 'Administrador', 'vistas/img/usuarios/fede/624.png', 0, '0000-00-00 00:00:00', '2022-08-16 05:01:05'),
(4, 'josew', 'ola', 'jose123', 'Especial', '', 0, '0000-00-00 00:00:00', '2022-08-10 04:50:13'),
(6, 'julia', 'julia', 'julia123', 'Vendedor', 'vistas/img/usuarios/julia/571.png', 0, '0000-00-00 00:00:00', '2022-08-11 06:05:45'),
(7, 'juliana', 'juliana', 'juliana', 'Vendedor', 'vistas/img/usuarios/juliana/759.jpg', 1, '0000-00-00 00:00:00', '2022-08-17 00:12:47'),
(8, 'FEDE', 'fede', '', 'Administrador', 'vistas/img/usuarios/fede/624.png', 0, '0000-00-00 00:00:00', '2022-08-16 05:01:05'),
(11, 'feeeee', 'ffffff', '$2a$07$asxx54ahjppf45sd87a5augSUzOsSWqJW/WaKRflF9Qn8UQT4JvHq', 'Administrador', 'vistas/img/usuarios/ffffff/377.png', 0, '0000-00-00 00:00:00', '2022-08-15 22:55:54'),
(12, 'ff', 'fff', '$2a$07$asxx54ahjppf45sd87a5au9qtysTmqpbi0CLW8d4EUxFv9d7FCNLi', 'Vendedor', '', 0, '0000-00-00 00:00:00', '2022-08-16 02:09:00'),
(16, 'federico h', 'fede', '$2a$07$asxx54ahjppf45sd87a5augSUzOsSWqJW/WaKRflF9Qn8UQT4JvHq', 'Vendedor', '', 0, '0000-00-00 00:00:00', '2022-08-16 21:35:19'),
(17, 'fedeh', 'f2', '$2a$07$asxx54ahjppf45sd87a5auQsy3EVBbIWiJDezuiuNISTLpLYsanZ.', 'Vendedor', 'vistas/img/usuarios/f2/956.png', 0, '0000-00-00 00:00:00', '2022-08-18 05:25:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
