-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2023 a las 05:22:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

CREATE TABLE `pokemons` (
  `id_pokemon` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `url_imagen` varchar(2083) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`id_pokemon`, `nombre`, `tipo`, `url_imagen`, `descripcion`) VALUES
(1, 'pikachu', 1, 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/25.png', 'Una descripción detallada del pokemon Pikachu, mundialmente conocido.'),
(2, 'bulbasaur', 3, 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png', 'Una descripción del malvado pokemon Bulbasaur.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `nombre`) VALUES
(1, 'electrico'),
(2, 'Fuego'),
(3, 'hierba'),
(4, 'Normal'),
(5, 'Lucha'),
(6, 'Agua'),
(7, 'Volador'),
(8, 'Veneno'),
(9, 'Tierra'),
(10, 'Psiquico'),
(11, 'Roca'),
(12, 'Hielo'),
(13, 'Bicho'),
(14, 'Dragon'),
(15, 'Fantasma'),
(16, 'Siniestro'),
(17, 'Acero'),
(18, 'Hada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id_pokemon`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD CONSTRAINT `pokemons_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`id_tipo`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
