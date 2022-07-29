-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2022 a las 07:04:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compromisos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `id` int(11) NOT NULL,
  `asunto` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `responsable` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_programa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso`
--

CREATE TABLE `compromiso` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_ini` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_fin` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `responsable` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_acta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `nombre_programa` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `facultad` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `nombre_programa`, `facultad`) VALUES
(1, 'Medicina Veterinaria y Zootecnia', 'Facultad de Medicina Veterinaria y Zootecnia'),
(2, 'Acuicultura', 'Facultad de Medicina Veterinaria y Zootecnia'),
(3, 'Ingeniería Agronómica', 'Facultad de Ciencias Agrícolas'),
(4, 'Estadística', 'Facultad de Ciencias Básicas'),
(5, 'Matemáticas', 'Facultad de Ciencias Básicas'),
(6, 'Geografía', 'Facultad de Ciencias Básicas'),
(7, 'Física', 'Facultad de Ciencias Básicas'),
(8, 'Química', 'Facultad de Ciencias Básicas'),
(9, 'Biología', 'Facultad de Ciencias Básicas'),
(10, 'Bacteriología', 'Facultad de Ciencias de la Salud'),
(11, 'Tecnología en Regencia y Farmacia', 'Facultad de Ciencias de la Salud'),
(12, 'Administración en Salud', 'Facultad de Ciencias de la Salud'),
(13, 'Enfermería', 'Facultad de Ciencias de la Salud'),
(14, 'Licenciatura en Ciencias Sociales', 'Facultad de Educación y Ciencias Humanas'),
(15, 'Licenciatura en Educación Física, Recreación y Deporte', 'Facultad de Educación y Ciencias Humanas'),
(16, 'Licenciatura en Literatura  y Lengua Castellana', 'Facultad de Educación y Ciencias Humanas'),
(17, 'Licenciatura en Informática', 'Facultad de Educación y Ciencias Humanas'),
(18, 'Licenciatura en Lengua Extranjera con Énfasis en Inglés', 'Facultad de Educación y Ciencias Humanas'),
(19, 'Licenciatura en Ciencias Naturales y Educación Ambiental', 'Facultad de Educación y Ciencias Humanas'),
(20, 'Licenciatura en Educación Infantil', 'Facultad de Educación y Ciencias Humanas'),
(21, 'Ingeniería Mecánica', 'Facultad de Ingeniería'),
(22, 'Ingeniería Ambiental', 'Facultad de Ingeniería'),
(23, 'Ingeniería Industrial', 'Facultad de Ingeniería'),
(24, 'Ingeniería de Alimentos', 'Facultad de Ingeniería'),
(25, 'Ingeniería de Sistemas', 'Facultad de Ingeniería'),
(26, 'Derecho', 'Facultad de Ciencias Económicas'),
(27, 'Administración en Finanzas y Negocios Internacionales', 'Facultad de Ciencias Económicas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_programa` (`id_programa`);

--
-- Indices de la tabla `compromiso`
--
ALTER TABLE `compromiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_acta` (`id_acta`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compromiso`
--
ALTER TABLE `compromiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `acta_ibfk_1` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id`);

--
-- Filtros para la tabla `compromiso`
--
ALTER TABLE `compromiso`
  ADD CONSTRAINT `compromiso_ibfk_1` FOREIGN KEY (`id_acta`) REFERENCES `acta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
