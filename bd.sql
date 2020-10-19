--
-- Base de datos: `Tienda de jabones`
--

-- --------------------------------------------------------
--
-- Tabla `Productos`
--

CREATE TABLE Producto (
  id_producto numeric(11) NOT NULL,
  nombre varchar(50)  NOT NULL,
  imagen varchar(300)  NOT NULL,
  nombreimagen varchar(100) NOT NULL,
  constraint cp_producto PRIMARY KEY (id_producto)
);


--
-- Volcado de datos para la tabla `Productos`
-- preguntar como meter una imagen

INSERT INTO productos VALUES
(1, 'Jabon de manos', 'jabon_manos.jpg', 'jabon_hacendaño');

--
-- Tabla `Compras`
--
CREATE TABLE Compras (
  item_id numeric(11) NOT NULL, 
  cliente_id numeric(11)  NOT NULL,
  producto_id numeric(11)  NOT NULL,
  fecha date NOT NULL,
  constraint cp_compras PRIMARY KEY (item_id)
);