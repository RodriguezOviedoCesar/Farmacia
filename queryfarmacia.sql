-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2021 a las 23:14:27
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--
CREATE DATABASE IF NOT EXISTS `farmacia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `farmacia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoempleado`
--

CREATE TABLE `cargoempleado` (
  `idcargoempleado` int(11) NOT NULL,
  `cargoempleado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargoempleado`
--

INSERT INTO `cargoempleado` (`idcargoempleado`, `cargoempleado`) VALUES
(1, 'Cualquiera'),
(2, 'Cualquiera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `idtipocliente` int(11) DEFAULT NULL,
  `nombres` varchar(180) NOT NULL,
  `direccion` varchar(180) NOT NULL,
  `telefono` char(9) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `idtipodocumento` int(11) DEFAULT NULL,
  `nrodocumento` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `idtipocliente`, `nombres`, `direccion`, `telefono`, `correo`, `idtipodocumento`, `nrodocumento`) VALUES
(19, 1, 'Cesar', 'Los Mirtos', '789654123', 'a@gmail.com', 1, '72723425'),
(20, 1, 'Cesar Andre Rodriguez Oviedo', 'Los Mirtos', '789654123', 'as@gmail.com', 1, '72723425'),
(23, 1, 'Rodriguez Oviedo', 'Los Mirtos', '95741238', 'a@gmail.com', 1, '78965412');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

CREATE TABLE `comprobante` (
  `idcomprobante` int(11) NOT NULL,
  `fechapago` date NOT NULL,
  `nropedido` char(3) NOT NULL,
  `idtipopago` int(11) DEFAULT NULL,
  `idtipocomprobante` int(11) DEFAULT NULL,
  `montototal` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `iddetallepedido` int(11) NOT NULL,
  `nropedido` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`iddetallepedido`, `nropedido`, `idproducto`) VALUES
(6, 37, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `iddoctor` int(11) NOT NULL,
  `Nombre` varchar(180) NOT NULL,
  `Especialidad` varchar(120) NOT NULL,
  `ncolegiado` char(9) NOT NULL,
  `Cargo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`iddoctor`, `Nombre`, `Especialidad`, `ncolegiado`, `Cargo`) VALUES
(20, 'Cesar Andre', 'Odontologo', 'EEE-EEE', 'Director'),
(78, 'cesar', 'Cirujano', 'asdad', 'dsad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `idtipoestado` int(11) DEFAULT NULL,
  `idcargoempleado` int(11) DEFAULT NULL,
  `dni` char(8) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `telefono` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `idtipoestado`, `idcargoempleado`, `dni`, `nombres`, `direccion`, `telefono`) VALUES
(17, 1, 2, '78965412', 'Cesar', 'Los Angeless', '987456321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imapro`
--

CREATE TABLE `imapro` (
  `idimagen` int(11) NOT NULL,
  `nombre` varchar(160) DEFAULT NULL,
  `imgen` longblob DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `nropedido` int(11) NOT NULL,
  `fechapedido` date NOT NULL,
  `montototal` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `idempleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`nropedido`, `fechapedido`, `montototal`, `idcliente`, `idempleado`) VALUES
(37, '2020-12-25', 120, 23, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procentajedescuento`
--

CREATE TABLE `procentajedescuento` (
  `idporcentajedescuento` int(11) NOT NULL,
  `porcentajedescuento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `procentajedescuento`
--

INSERT INTO `procentajedescuento` (`idporcentajedescuento`, `porcentajedescuento`) VALUES
(1, 0),
(2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `nomprod` varchar(35) NOT NULL,
  `fechahoravenc` date NOT NULL,
  `stock` int(11) NOT NULL,
  `presentacion` varchar(60) NOT NULL,
  `concentracion` varchar(120) NOT NULL,
  `formafarmaceutica` varchar(120) NOT NULL,
  `registrosanitario` varchar(60) NOT NULL,
  `idporcentajedescuento` int(11) DEFAULT NULL,
  `precionuit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `nomprod`, `fechahoravenc`, `stock`, `presentacion`, `concentracion`, `formafarmaceutica`, `registrosanitario`, `idporcentajedescuento`, `precionuit`) VALUES
(17, 'Cualquiera', '2020-12-18', 15, 'Cualquiera', 'Cualquiera', 'Cualquiera', 'EEE-EEEE', 1, 1),
(18, 'Cualquiera', '2020-12-18', 15, 'Cualquiera', 'Cualquiera', 'Cualquiera', 'EEE-EEEE', 1, 1),
(19, 'Cualquiera', '2020-12-18', 15, 'Cualquiera', 'Cualquiera', 'Cualquiera', 'EEE-EEEE', 1, 1),
(21, 'Penicilina', '2025-12-15', 8, 'Pastilla', 'Concentracion', 'Pastilla', 'EEEEEEE', 2, 1044),
(22, 'Penicilina', '2025-12-15', 8, 'Pastilla', 'Concentracion2', 'Pastilla', 'EEEEEEE', 2, 1044);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idregistro` int(11) NOT NULL,
  `Nombre` varchar(180) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Contraseña` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idregistro`, `Nombre`, `Email`, `Contraseña`) VALUES
(1, 'Cesar', 'c@gmail.com', '987654321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocliente`
--

CREATE TABLE `tipocliente` (
  `idtipocliente` int(11) NOT NULL,
  `tipocliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipocliente`
--

INSERT INTO `tipocliente` (`idtipocliente`, `tipocliente`) VALUES
(1, 'Frecuente'),
(2, 'Regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocomprobante`
--

CREATE TABLE `tipocomprobante` (
  `idtipocomprobante` int(11) NOT NULL,
  `tipocomprobante` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipocomprobante`
--

INSERT INTO `tipocomprobante` (`idtipocomprobante`, `tipocomprobante`) VALUES
(1, 'Cualquiera'),
(2, 'Cualquiera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idtipodocumento` int(11) NOT NULL,
  `tipodocumento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idtipodocumento`, `tipodocumento`) VALUES
(1, 'DNI'),
(2, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestado`
--

CREATE TABLE `tipoestado` (
  `idtipoestado` int(11) NOT NULL,
  `tipoestado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoestado`
--

INSERT INTO `tipoestado` (`idtipoestado`, `tipoestado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopago`
--

CREATE TABLE `tipopago` (
  `idtipopago` int(11) NOT NULL,
  `tipopago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipopago`
--

INSERT INTO `tipopago` (`idtipopago`, `tipopago`) VALUES
(1, 12),
(2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usario`
--

CREATE TABLE `usario` (
  `idusuario` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pass` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usario`
--

INSERT INTO `usario` (`idusuario`, `email`, `pass`) VALUES
(1, 'a@gmail.com', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargoempleado`
--
ALTER TABLE `cargoempleado`
  ADD PRIMARY KEY (`idcargoempleado`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `idtipocliente` (`idtipocliente`),
  ADD KEY `idtipodocumento` (`idtipodocumento`);

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`idcomprobante`),
  ADD KEY `idtipopago` (`idtipopago`),
  ADD KEY `idtipocomprobante` (`idtipocomprobante`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`iddetallepedido`),
  ADD KEY `nropedido` (`nropedido`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`iddoctor`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`),
  ADD KEY `idtipoestado` (`idtipoestado`),
  ADD KEY `idcargoempleado` (`idcargoempleado`);

--
-- Indices de la tabla `imapro`
--
ALTER TABLE `imapro`
  ADD PRIMARY KEY (`idimagen`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`nropedido`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idempleado` (`idempleado`);

--
-- Indices de la tabla `procentajedescuento`
--
ALTER TABLE `procentajedescuento`
  ADD PRIMARY KEY (`idporcentajedescuento`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idporcentajedescuento` (`idporcentajedescuento`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idregistro`);

--
-- Indices de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
  ADD PRIMARY KEY (`idtipocliente`);

--
-- Indices de la tabla `tipocomprobante`
--
ALTER TABLE `tipocomprobante`
  ADD PRIMARY KEY (`idtipocomprobante`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idtipodocumento`);

--
-- Indices de la tabla `tipoestado`
--
ALTER TABLE `tipoestado`
  ADD PRIMARY KEY (`idtipoestado`);

--
-- Indices de la tabla `tipopago`
--
ALTER TABLE `tipopago`
  ADD PRIMARY KEY (`idtipopago`);

--
-- Indices de la tabla `usario`
--
ALTER TABLE `usario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargoempleado`
--
ALTER TABLE `cargoempleado`
  MODIFY `idcargoempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `idcomprobante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `iddetallepedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `iddoctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `imapro`
--
ALTER TABLE `imapro`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `nropedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `procentajedescuento`
--
ALTER TABLE `procentajedescuento`
  MODIFY `idporcentajedescuento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idregistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipocliente`
--
ALTER TABLE `tipocliente`
  MODIFY `idtipocliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipocomprobante`
--
ALTER TABLE `tipocomprobante`
  MODIFY `idtipocomprobante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idtipodocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipoestado`
--
ALTER TABLE `tipoestado`
  MODIFY `idtipoestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipopago`
--
ALTER TABLE `tipopago`
  MODIFY `idtipopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usario`
--
ALTER TABLE `usario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idtipocliente`) REFERENCES `tipocliente` (`idtipocliente`) ON DELETE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`idtipodocumento`) REFERENCES `tipodocumento` (`idtipodocumento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD CONSTRAINT `comprobante_ibfk_1` FOREIGN KEY (`idtipopago`) REFERENCES `tipopago` (`idtipopago`) ON DELETE CASCADE,
  ADD CONSTRAINT `comprobante_ibfk_2` FOREIGN KEY (`idtipocomprobante`) REFERENCES `tipocomprobante` (`idtipocomprobante`) ON DELETE CASCADE,
  ADD CONSTRAINT `comprobante_ibfk_3` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`nropedido`) REFERENCES `pedido` (`nropedido`) ON DELETE CASCADE,
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idtipoestado`) REFERENCES `tipoestado` (`idtipoestado`) ON DELETE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`idcargoempleado`) REFERENCES `cargoempleado` (`idcargoempleado`) ON DELETE CASCADE;

--
-- Filtros para la tabla `imapro`
--
ALTER TABLE `imapro`
  ADD CONSTRAINT `imapro_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idporcentajedescuento`) REFERENCES `procentajedescuento` (`idporcentajedescuento`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
