-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2022 a las 00:18:54
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rickandmorty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `estado` text NOT NULL,
  `especie` text NOT NULL,
  `tipo` text NOT NULL,
  `genero` text NOT NULL,
  `origen` text NOT NULL,
  `localidad` text NOT NULL,
  `apariencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `id_personaje`, `nombre`, `estado`, `especie`, `tipo`, `genero`, `origen`, `localidad`, `apariencia`) VALUES
(1, 1, 'Rick Sanchez', '', 'Human', '', 'Male', 'Earth (C-137)', 'Citadel of Ricks', 'https://rickandmortyapi.com/api/character/avatar/1.jpeg'),
(2, 99, 'Hepatitis C', '', 'Disease', '', 'unknown', 'Anatomy Park', 'Anatomy Park', 'https://rickandmortyapi.com/api/character/avatar/99.jpeg'),
(3, 10, 'Alan Rails', '', 'Human', 'Superhuman (Ghost trains summoner)', 'Male', 'unknown', 'Worldender\'s lair', 'https://rickandmortyapi.com/api/character/avatar/10.jpeg'),
(4, 100, 'Bubonic Plague', '', 'Disease', '', 'unknown', 'Anatomy Park', 'Anatomy Park', 'https://rickandmortyapi.com/api/character/avatar/100.jpeg'),
(5, 66, 'Coach Feratu (Balik Alistane)', '', 'Mythological Creature', 'Vampire', 'Male', 'Earth (Replacement Dimension)', 'Earth (Replacement Dimension)', 'https://rickandmortyapi.com/api/character/avatar/66.jpeg'),
(6, 67, 'Collector', '', 'Alien', 'Light bulb-Alien', 'Male', 'The Menagerie', 'The Menagerie', 'https://rickandmortyapi.com/api/character/avatar/67.jpeg'),
(10, 69, 'Commander Rick', '', 'Human', '', 'Male', 'unknown', 'Citadel of Ricks', 'https://rickandmortyapi.com/api/character/avatar/69.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
