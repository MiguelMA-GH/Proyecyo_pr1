--
-- Base de datos: `Tienda de jabones`
--

-- --------------------------------------------------------
--
-- Tabla `Productos`
--

CREATE TABLE `Productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `nombreimagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`id_producto`, `nombre`, `imagen`, `nombreimagen`) VALUES
(1, 'Jabon de manos', 'jabon_manos.jpg', 'jabon_hacendaño');

--
-- Tabla `Compras`
--
CREATE TABLE `Compras` (
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;