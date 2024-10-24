-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2024 a las 04:42:49
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
-- Base de datos: `proyectomvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `medico_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`medico_id`, `nombre`, `apellido`, `especialidad`, `telefono`, `email`, `direccion`, `fecha_registro`, `estado`) VALUES
(1, 'Juan', 'Pérez', 'Cardiología', '555-1234', 'juan.perez@example.com', 'Av. Siempre Viva 123, Ciudad', '2024-10-24 01:41:07', 'activo'),
(2, 'María', 'González', 'Pediatría', '555-5678', 'maria.gonzalez@example.com', 'Calle Falsa 456, Ciudad', '2024-10-24 01:41:07', 'activo'),
(3, 'Luis', 'Martínez', 'Dermatología', '555-8765', 'luis.martinez@example.com', 'Calle de los Olivos 789, Ciudad', '2024-10-24 01:41:07', 'inactivo'),
(4, 'Ana', 'López', 'Ginecología', '555-4321', 'ana.lopez@example.com', 'Paseo del Río 321, Ciudad', '2024-10-24 01:41:07', 'activo'),
(5, 'Carlos', 'Sánchez', 'Oftalmología', '555-1357', 'carlos.sanchez@example.com', 'Calle del Sol 654, Ciudad', '2024-10-24 01:41:07', 'activo'),
(6, 'Patricia', 'Ramírez', 'Traumatología', '555-2468', 'patricia.ramirez@example.com', 'Av. del Mar 987, Ciudad', '2024-10-24 01:41:07', 'inactivo'),
(7, 'Jorge', 'Torres', 'Neurología', '555-3698', 'jorge.torres@example.com', 'Calle de la Luna 159, Ciudad', '2024-10-24 01:41:07', 'activo'),
(8, 'Lucía', 'Fernández', 'Endocrinología', '555-7531', 'lucia.fernandez@example.com', 'Calle del Bosque 753, Ciudad', '2024-10-24 01:41:07', 'activo'),
(9, 'Diego', 'Reyes', 'Psiquiatría', '555-9513', 'diego.reyes@example.com', 'Av. de la Paz 321, Ciudad', '2024-10-24 01:41:07', 'activo'),
(10, 'Verónica', 'Morales', 'Medicina General', '555-1478', 'veronica.morales@example.com', 'Calle de la Esperanza 159, Ciudad', '2024-10-24 01:41:07', 'inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`medico_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `medico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
