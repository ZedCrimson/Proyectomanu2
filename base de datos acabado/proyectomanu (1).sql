-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2024 a las 01:23:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectomanu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_jugada`
--

CREATE TABLE `tabla_jugada` (
  `Id_Partida` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Apuesta` varchar(20) NOT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Número_Ganador` int(11) NOT NULL,
  `Resultado` varchar(20) NOT NULL,
  `Color_Ganador` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_jugada`
--

INSERT INTO `tabla_jugada` (`Id_Partida`, `Id_usuario`, `Fecha`, `Apuesta`, `Color`, `Número_Ganador`, `Resultado`, `Color_Ganador`) VALUES
(33, 9, '0000-00-00 00:00:00', '10', 'ROJO', 13, 'PERDEDOR', 'NEGRO'),
(34, 10, '0000-00-00 00:00:00', '10', 'ROJO', 5, 'PERDEDOR', 'NEGRO'),
(35, 10, '0000-00-00 00:00:00', '70', 'ROJO', 21, 'PERDEDOR', 'NEGRO'),
(36, 11, '2024-12-13 00:00:00', '10', 'ROJO', 18, 'GANADOR', 'ROJO'),
(37, 11, '2024-12-13 00:00:00', '20', 'NEGRO', 1, 'GANADOR', 'NEGRO'),
(38, 11, '2024-12-13 00:00:00', '10', 'ROJO', 29, 'PERDEDOR', 'NEGRO'),
(39, 11, '2024-12-13 00:00:00', '100', 'ROJO', 1, 'PERDEDOR', 'NEGRO'),
(40, 9, '2024-12-13 00:00:00', '160', 'ROJO', 29, 'PERDEDOR', 'NEGRO'),
(41, 9, '2024-12-13 00:00:00', '10', 'NEGRO', 15, 'GANADOR', 'NEGRO'),
(42, 9, '2024-12-13 00:00:00', '10', 'NEGRO', 18, 'PERDEDOR', 'ROJO'),
(43, 9, '2024-12-13 00:00:00', '10', 'NEGRO', 18, 'PERDEDOR', 'ROJO'),
(44, 9, '2024-12-13 00:00:00', '10', 'ROJO', 27, 'PERDEDOR', 'NEGRO'),
(45, 9, '2024-12-13 00:00:00', '10', 'ROJO', 8, 'GANADOR', 'ROJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_operación`
--

CREATE TABLE `tabla_operación` (
  `Id_Operación` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Acción` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_operación`
--

INSERT INTO `tabla_operación` (`Id_Operación`, `Id_usuario`, `Fecha`, `Cantidad`, `Acción`) VALUES
(16, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(17, 11, '2024-12-13 00:00:00', 10, 'RETIRAR'),
(18, 11, '2024-12-13 00:00:00', 10, 'RETIRAR'),
(19, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(20, 11, '2024-12-13 00:00:00', 20, 'AÑADIR'),
(21, 11, '2024-12-13 00:00:00', 20, 'RETIRAR'),
(22, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(23, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(24, 11, '2024-12-13 00:00:00', 20, 'AÑADIR'),
(25, 11, '2024-12-13 00:00:00', 20, 'AÑADIR'),
(26, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(27, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(28, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(29, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(30, 11, '2024-12-13 00:00:00', 20, 'RETIRAR'),
(31, 11, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(32, 9, '2024-12-13 00:00:00', 100, 'RETIRAR'),
(33, 9, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(34, 9, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(35, 9, '2024-12-13 00:00:00', 10, 'AÑADIR'),
(36, 9, '2024-12-13 00:00:00', 20, 'AÑADIR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuarios`
--

CREATE TABLE `tabla_usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Correo_electrónico` varchar(20) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_usuarios`
--

INSERT INTO `tabla_usuarios` (`Id_usuario`, `Nombre`, `Apellido`, `Correo_electrónico`, `Contraseña`, `Saldo`) VALUES
(9, 'Grenheir', 'Catalán', 'dinero@locowin.com', 'locowin', 30),
(10, 'prueba1', 'prueba1', 'prueba1@gmail.com', 'prueba1', 0),
(11, 'Alicia', 'Galán', 'alicia@gmail.com', 'ali', 144),
(12, 'David', 'Hinojosa', 'david23@gmail.com', 'david', 791);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_jugada`
--
ALTER TABLE `tabla_jugada`
  ADD PRIMARY KEY (`Id_Partida`);

--
-- Indices de la tabla `tabla_operación`
--
ALTER TABLE `tabla_operación`
  ADD PRIMARY KEY (`Id_Operación`);

--
-- Indices de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_jugada`
--
ALTER TABLE `tabla_jugada`
  MODIFY `Id_Partida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tabla_operación`
--
ALTER TABLE `tabla_operación`
  MODIFY `Id_Operación` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
