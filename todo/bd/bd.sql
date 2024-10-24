-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-10-2024 a las 18:17:47
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
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_materias`
--

CREATE TABLE `estudiantes_materias` (
  `id` int NOT NULL,
  `estudiante_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cedula` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores_materias`
--

CREATE TABLE `profesores_materias` (
  `id` int NOT NULL,
  `profesor_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE `tbl_empleados` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `edad` int DEFAULT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`id`, `nombre`, `edad`, `cedula`, `sexo`, `telefono`, `cargo`, `avatar`) VALUES
(3, 'Any somosa', 23, '412421', 'Femenino', '432432432', 'Asistente', 'a26b9df685.png'),
(4, 'Urian', 31, '323232', 'Masculino', '432432432', 'Asistente', 'f752ce2c9b.png'),
(6, 'Abelado P', 39, '331232', 'Masculino', '23213213', 'Desarrollador', 'b70032d832.png'),
(7, 'Camilo', 30, '444433', 'Masculino', '333434', 'Contador', 'daea327347.jpg'),
(8, 'Fabio', 49, '434343', 'Masculino', '4444443', 'Secretario', 'dd12c93c0a.png'),
(9, 'Brenda Cataleya', 18, '111212', 'Masculino', '5565656', 'Desarrollador Web', '6a712f30fc.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudiantes`
--

CREATE TABLE `tbl_estudiantes` (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cedula` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'NOT NULL',
  `edad` int DEFAULT NULL,
  `sexo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dirección` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ano` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `seccion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `nombre_representante` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_estudiantes`
--

INSERT INTO `tbl_estudiantes` (`id`, `nombre`, `cedula`, `edad`, `sexo`, `dirección`, `telefono`, `ano`, `seccion`, `fecha_registro`, `nombre_representante`, `avatar`) VALUES
(1, 'Orlando Ortega', '27889926', 15, 'MASCULINO', 'valera', '04121609721', '5to', '\"B\"', '2024-10-08', 'GREGORIA RIVAS', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int DEFAULT NULL,
  `estatus` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(1, 'Abel', 'info@abelosh.com', 'admin', '202cb962ac59075b964b07152d234b70', 1, 1),
(2, 'Julio Estrada', 'julio@gmail.com', 'julio', 'c027636003b468821081e281758e35ff', 2, 1),
(3, 'Carlos HernÃ¡ndez', 'carlos@gmail.com', 'carlos', 'dc599a9972fde3045dab59dbd1ae170b', 3, 1),
(5, 'Marta Elena Franco', 'marta@gmail.com', 'marta', 'a763a66f984948ca463b081bf0f0e6d0', 3, 1),
(7, 'Carol Cabrera', 'carol@gmail.com', 'carol', 'a9a0198010a6073db96434f6cc5f22a8', 2, 0),
(8, 'Marvin Solares ', 'marvin@gmail.com', 'marvin', 'dba0079f1cb3a3b56e102dd5e04fa2af', 3, 1),
(9, 'Alan Melgar', 'alan@gmail.com', 'alan', '02558a70324e7c4f269c69825450cec8', 2, 1),
(10, 'Efrain GÃ³mez', 'efrain@gmail.com', 'efrain', '69423f0c254e5c1d2b0f5ee202459d2c', 2, 1),
(11, 'Fran Escobar', 'fran@gmail.com', 'fran', '2c20cb5558626540a1704b1fe524ea9a', 1, 1),
(12, 'Hana Montenegro', 'hana@gmail.com', 'hana', '52fd46504e1b86d80cfa22c0a1168a9d', 3, 1),
(13, 'Fredy Miranda', 'fredy@gmail.com', 'fredy', 'b89845d7eb5f8388e090fcc151d618c8', 2, 1),
(14, 'Roberto Salazar', 'roberto@hotmail.com', 'roberto', 'c1bfc188dba59d2681648aa0e6ca8c8e', 3, 1),
(15, 'William Fernando PÃ©rez', 'william@hotmail.com', 'william', 'fd820a2b4461bddd116c1518bc4b0f77', 3, 1),
(16, 'Francisco Mora', 'frans@gmail.com', 'frans', '64dd0133f9fb666ca6f4692543844f31', 3, 1),
(17, 'Ruben Guevara', 'ruben@hotmail.es', 'ruben', '32252792b9dccf239f5a5bd8e778dbc2', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes_materias`
--
ALTER TABLE `estudiantes_materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudiante_id` (`estudiante_id`),
  ADD KEY `materia_id` (`materia_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores_materias`
--
ALTER TABLE `profesores_materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profesor_id` (`profesor_id`),
  ADD KEY `materia_id` (`materia_id`);

--
-- Indices de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_estudiantes`
--
ALTER TABLE `tbl_estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes_materias`
--
ALTER TABLE `estudiantes_materias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores_materias`
--
ALTER TABLE `profesores_materias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_estudiantes`
--
ALTER TABLE `tbl_estudiantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes_materias`
--
ALTER TABLE `estudiantes_materias`
  ADD CONSTRAINT `estudiantes_materias_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `tbl_estudiantes` (`id`),
  ADD CONSTRAINT `estudiantes_materias_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

--
-- Filtros para la tabla `profesores_materias`
--
ALTER TABLE `profesores_materias`
  ADD CONSTRAINT `profesores_materias_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`),
  ADD CONSTRAINT `profesores_materias_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
