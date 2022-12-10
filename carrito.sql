-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 18:01:43
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
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id` int(18) NOT NULL,
  `producto_nombre` varchar(255) NOT NULL,
  `producto_precio` varchar(255) NOT NULL,
  `producto_imagen` varchar(255) NOT NULL,
  `cant` int(100) NOT NULL,
  `precio_total` varchar(100) NOT NULL,
  `producto_code` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(18) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(18) NOT NULL,
  `num_celular` varchar(18) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `mpago` varchar(100) NOT NULL,
  `productos` varchar(255) NOT NULL,
  `cant_pago` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(6) NOT NULL,
  `producto_nombre` varchar(255) NOT NULL,
  `producto_precio` varchar(255) NOT NULL,
  `producto_imagen` varchar(255) NOT NULL,
  `producto_codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto_nombre`, `producto_precio`, `producto_imagen`, `producto_codigo`) VALUES
(2, 'Logitech G203 LIGHTSYNC Mouse Gaming con Iluminación RGB Personalizable, 6 Botones Programables Seguimiento de hasta 8,000 DPI, Ultra-ligero - Negro', '300', 'images/Productos/G203.jpg', '002'),
(3, 'Logitech M350 Pebble, Mouse inalámbrico con Bluetooth o receptor USB de 2,4 GHz, Silencioso y Minimalista, con clic silencioso para Laptop, iPad, PC y Mac - Rosa', '419', 'images/Productos/M350.jpg', '003'),
(4, 'Control Inalámbrico Xbox - Robot White', '1290', 'images/Productos/mXBOX.jpg', '004'),
(295042, 'NORCHE HUO JI CQ63 Teclado mecánico inalámbrico para Juegos, Bluetooth 5.0, retroiluminación LED RGB, Interruptor Azul, Compacto de 63 Teclas, antifantasma, Compatible con PC, portátil, Smartphone', '800', 'images/Productos/TecladoNorche.jpg', '001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295043;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
