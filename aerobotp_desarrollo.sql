-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2023 a las 03:37:37
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aerobotp_desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso_cursos`
--

CREATE TABLE `acceso_cursos` (
  `id_acceso` int(11) NOT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso_cursos`
--

INSERT INTO `acceso_cursos` (`id_acceso`, `curso`, `id_alumno`) VALUES
(1, 'Programacion web basica', 1),
(2, 'Programacion web intermedio', 1),
(3, 'Programacion web avanzado', 1),
(4, 'Python basico', 1),
(5, 'Python intermedio', 1),
(6, 'Python avanzado', 1),
(7, 'Arduino basico', 1),
(8, 'Arduino intermedio', 1),
(9, 'Arduino avanzado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `fondo` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `contrasena`, `clave`, `image`, `fondo`, `nombre`, `pais`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL, 'admin', 'México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `nivel_educativo` varchar(100) DEFAULT NULL,
  `grado_escolar` varchar(100) DEFAULT NULL,
  `nombre_grupo` varchar(100) DEFAULT NULL,
  `fondo` varchar(100) DEFAULT NULL,
  `id_escuela` int(11) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre`, `usuario`, `contrasena`, `clave`, `image`, `nivel_educativo`, `grado_escolar`, `nombre_grupo`, `fondo`, `id_escuela`, `id_docente`) VALUES
(1, 'Alumno Desarrollo', 'alumno.desarrollo', 'acbf157754bc921e70ab30b1e79c75f5', 'ABC-6GBXLNEP', 'Mascota-Aerobot-01.png', 'Primaria', '1', NULL, 'portada-1.png', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capsulas`
--

CREATE TABLE `capsulas` (
  `id_capsula` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capsulas`
--

INSERT INTO `capsulas` (`id_capsula`, `nombre`) VALUES
(1, 'capsula1'),
(2, 'capsula2'),
(3, 'capsula3'),
(4, 'capsula4'),
(5, 'capsula5'),
(6, 'capsula6'),
(7, 'capsula7'),
(8, 'capsula8'),
(9, 'capsula9'),
(10, 'capsula10'),
(11, 'capsula11'),
(12, 'capsula12'),
(13, 'capsula13'),
(14, 'capsula14'),
(15, 'capsula15'),
(16, 'capsula16'),
(17, 'capsula17'),
(18, 'capsula18'),
(19, 'capsula19'),
(20, 'capsula20'),
(21, 'capsula21'),
(22, 'capsula22'),
(23, 'capsula23'),
(24, 'capsula24'),
(25, 'capsula25'),
(26, 'capsula26'),
(27, 'capsula27'),
(28, 'capsula28'),
(29, 'capsula29'),
(30, 'capsula30'),
(31, 'capsula31'),
(32, 'capsula32'),
(33, 'capsula33'),
(34, 'capsula34'),
(35, 'capsula35'),
(36, 'capsula36'),
(37, 'capsula37'),
(38, 'capsula38'),
(39, 'capsula39'),
(40, 'capsula40'),
(41, 'capsula41'),
(42, 'capsula42'),
(43, 'capsula43'),
(44, 'capsula44'),
(45, 'capsula45'),
(46, 'capsula46'),
(47, 'capsula47'),
(48, 'capsula48'),
(49, 'capsula49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `prueba_1` int(11) DEFAULT NULL,
  `prueba_2` int(11) DEFAULT NULL,
  `html` int(11) DEFAULT NULL,
  `css` int(11) DEFAULT NULL,
  `php` int(11) DEFAULT NULL,
  `python` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_primaria`
--

CREATE TABLE `cursos_primaria` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos_primaria`
--

INSERT INTO `cursos_primaria` (`id_curso`, `curso`) VALUES
(1, 'Programacion web basica'),
(2, 'Programacion web intermedio'),
(3, 'Programación web avanzado'),
(4, 'Python basico'),
(5, 'Python intermedio'),
(6, 'Python avanzado'),
(7, 'Arduino basico'),
(8, 'Arduino intermedio'),
(9, 'Arduino avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_capsulas`
--

CREATE TABLE `detalle_capsulas` (
  `id` int(11) NOT NULL,
  `id_permiso` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cursos`
--

CREATE TABLE `detalle_cursos` (
  `id` int(11) NOT NULL,
  `prueba_1` int(5) DEFAULT NULL,
  `prueba_2` int(5) DEFAULT NULL,
  `html` int(5) DEFAULT NULL,
  `css` int(5) DEFAULT NULL,
  `php` int(5) DEFAULT NULL,
  `python` int(5) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_estadisticas`
--

CREATE TABLE `detalle_estadisticas` (
  `id` int(11) NOT NULL,
  `trofeos` int(11) DEFAULT NULL,
  `progreso` int(11) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `audiovisual` int(11) DEFAULT NULL,
  `practico` int(11) DEFAULT NULL,
  `teorico` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_grupos`
--

CREATE TABLE `detalle_grupos` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_intentos`
--

CREATE TABLE `detalle_intentos` (
  `id_intento` int(11) NOT NULL,
  `id_capsula` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `intentos` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

CREATE TABLE `directores` (
  `id_director` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_escuela` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_escuela` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `usuario`, `contrasena`, `clave`, `image`, `id_escuela`) VALUES
(1, 'Docente Desarrollo', 'docente.desarrollo', 'acbf157754bc921e70ab30b1e79c75f5', 'ABC-V9J8TPJW', 'Docente Desarrollo - 2023.03.28 - 06.46.47pm.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id_escuela` int(11) NOT NULL,
  `nombre_escuela` varchar(100) DEFAULT NULL,
  `cct` varchar(100) DEFAULT NULL,
  `nombre_director` varchar(100) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `num_exterior` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(100) DEFAULT NULL,
  `nivel_educativo` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `autorizacion` varchar(100) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `clave_alumno` varchar(100) DEFAULT NULL,
  `clave_docente` varchar(100) DEFAULT NULL,
  `clave_director` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id_escuela`, `nombre_escuela`, `cct`, `nombre_director`, `calle`, `num_exterior`, `estado`, `codigo_postal`, `nivel_educativo`, `pais`, `autorizacion`, `id_admin`, `clave_alumno`, `clave_docente`, `clave_director`) VALUES
(1, 'Desarrollo', 'ABC123', 'Director', 'Calle', 'Número Exterior', 'Estado', '99999', 'Primaria', 'México', 'admin', 1, 'ABC-6GBXLNEP', 'ABC-V9J8TPJW', 'ABC-BV1NUK4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id_estadistica` int(11) NOT NULL,
  `trofeos` int(5) DEFAULT NULL,
  `progreso` int(5) DEFAULT NULL,
  `puntos` int(5) DEFAULT NULL,
  `audiovisual` int(5) DEFAULT NULL,
  `practico` int(5) DEFAULT NULL,
  `teorico` int(5) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nombre_r` varchar(200) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `contacto` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nombre_e` varchar(200) DEFAULT NULL,
  `clave` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `estado` varchar(150) DEFAULT NULL,
  `grado` varchar(150) DEFAULT NULL,
  `numero_a` int(40) DEFAULT NULL,
  `otro_c` varchar(300) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `num_exterior` varchar(100) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `materia` varchar(100) DEFAULT NULL,
  `nombre_grupo` varchar(100) DEFAULT NULL,
  `grado` varchar(100) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `clave`, `rol`) VALUES
(1, 'admin', 1),
(2, 'alumno', 2),
(3, 'docente', 3),
(4, 'director', 4),
(5, 'adminsecundario', 5),
(6, 'ABC-6GBXLNEP', 2),
(7, 'ABC-V9J8TPJW', 3),
(8, 'ABC-BV1NUK4', 4),
(9, 'ABC-6GBXLNEP', 2),
(10, 'ABC-6GBXLNEP', 2),
(11, 'ABC-6GBXLNEP', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `id_sugerencia` int(11) NOT NULL,
  `nombre_escuela` varchar(100) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `mensaje` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso_cursos`
--
ALTER TABLE `acceso_cursos`
  ADD PRIMARY KEY (`id_acceso`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `capsulas`
--
ALTER TABLE `capsulas`
  ADD PRIMARY KEY (`id_capsula`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `cursos_primaria`
--
ALTER TABLE `cursos_primaria`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `detalle_capsulas`
--
ALTER TABLE `detalle_capsulas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_cursos`
--
ALTER TABLE `detalle_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_estadisticas`
--
ALTER TABLE `detalle_estadisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_grupos`
--
ALTER TABLE `detalle_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_intentos`
--
ALTER TABLE `detalle_intentos`
  ADD PRIMARY KEY (`id_intento`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id_director`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id_escuela`);

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id_estadistica`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`id_sugerencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso_cursos`
--
ALTER TABLE `acceso_cursos`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `capsulas`
--
ALTER TABLE `capsulas`
  MODIFY `id_capsula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos_primaria`
--
ALTER TABLE `cursos_primaria`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalle_capsulas`
--
ALTER TABLE `detalle_capsulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_cursos`
--
ALTER TABLE `detalle_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_estadisticas`
--
ALTER TABLE `detalle_estadisticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_grupos`
--
ALTER TABLE `detalle_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_intentos`
--
ALTER TABLE `detalle_intentos`
  MODIFY `id_intento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id_escuela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id_estadistica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `id_sugerencia` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
