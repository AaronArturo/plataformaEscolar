-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-06-2023 a las 04:32:37
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegiosr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `correo`, `telefono`, `comentario`) VALUES
(2, 'arturo arturo romero pech', 'arturoaaron2@gmail.com', '9811178153', 'cvygubhinjomkp,l´.ñ'),
(3, 'arturo arturo romero pech', 'arturoaaron2@gmail.com', '9811178153', 'cvygubhinjomkp,l´.ñ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int NOT NULL,
  `nombreCurso` varchar(100) NOT NULL,
  `descripcionCurso` text NOT NULL,
  `portada` text NOT NULL,
  `linkCurso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombreCurso`, `descripcionCurso`, `portada`, `linkCurso`) VALUES
(4, 'HTML', 'lenguaje de hipertexto', '../img/cursos/2.png', '../cursos/html.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int NOT NULL,
  `usuario` int NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` date NOT NULL,
  `archivo` text NOT NULL,
  `repuestas` text NOT NULL,
  `comentarios` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidoPat` varchar(100) NOT NULL,
  `apellidoMat` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidoPat`, `apellidoMat`, `correo`, `password`, `rol`, `foto`) VALUES
(5, 'aaron arturo ', 'romero', 'pech', 'aaron_artu@gmail.com', '12345', 'alumno', '../img/avatar/hongo-mario-bros-png.png'),
(6, 'Administrador', '', '', 'admin@gmail.com', 'amcoamco45SD', 'administrador', '../img/avatar/goku-abogado.jpg'),
(7, 'Maria', 'ignot', 'castillo', 'mari@gmail.com', '211307', 'alumno', '../img/avatar/5e982c327a3ff1000410bc8f.png'),
(8, 'eduardo', 'jimenez', 'cruz', 'lalo_bris@gmail.com', '12345', 'alumno', '../img/avatar/maestro.png'),
(9, 'aaron arturo ', 'romero', 'pech', 'doc.aaron@gmail.com', '12345', 'docente', '../img/avatar/inicio.jpg'),
(10, 'maria jose', 'ignot', 'castillo', 'doc.maria@gmail.com', '12345', 'docente', '../img/avatar/inicio.jpg'),
(11, 'citlali', 'chavez', 'hernandea', 'doc.citlali@gmail.com', '12345', 'docente', '../img/avatar/inicio.jpg'),
(12, 'aaron arturo ', 'romero', 'pech', 'arturoaaron2@gmail.com', '12345', 'docente', '../img/avatar/inicio.jpg'),
(13, 'eduardo', 'jimenez', 'pech', 'doc.lalo@gmail.com', '12345', 'docente', '../img/avatar/inicio.jpg'),
(14, 'rafael ', 'gonzalez ', 'pech', 'ragp150814@gmail.com', 'rafa1508', 'alumno', '../img/avatar/inicio.jpg'),
(15, 'Rafael Armando', 'Gonzalez ', 'Pech', 'ragp15@gmail.com', 'rafa1508', 'docente', '../img/avatar/inicio.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
