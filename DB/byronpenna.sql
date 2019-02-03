-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2018 a las 21:09:42
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
-- Base de datos: `libertad`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Articulo_buscar` (IN `i_id` INT)  begin 
	select * from articulos where idArticulo = i_id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlArticulo_agregar` (IN `i_titulo` VARCHAR(100), IN `i_breveDescripcion` VARCHAR(340), IN `i_articulo` VARCHAR(3000), IN `i_categoria` INT)  begin
	
    insert into articulos(
        titulo,breveDescripcion,
        articulo,categoria_fk,
        usuarioCreador_fk,
        fechaCreacion
     )
     values(i_titulo,i_breveDescripcion,i_articulo,i_categoria,1,NOW());        select 0 as estado;  
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlArticulo_buscar` (IN `i_busqueda` VARCHAR(100))  begin 
	declare w_busqueda varchar(100);
    set w_busqueda = concat("%",i_busqueda,"%");
    
    
	select * from articulos where titulo like w_busqueda;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlArticulo_cambiarEstado` (IN `i_idArticulo` INT)  begin 

	declare w_estadoActual bit; 
   
    declare w_estadoNuevo bit;
     set w_estadoActual = (select publicado from articulos where idArticulo = i_idArticulo);
    set w_estadoNuevo = (SELECT IF(w_estadoActual = 0,1,0));
	update articulos set publicado = w_estadoNuevo where idArticulo = i_idArticulo;
    
    select 0 as estado;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlArticulo_listarParaEdicion` ()  begin 
	select idArticulo,titulo,breveDescripcion,publicado
    from articulos;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlArticulo_ultimas` ()  NO SQL
select * from articulos order by fechaCreacion desc limit 5$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlcategoria_listar` ()  begin 
	select * 
    from categorias;
    
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlUsuario_getRolesByUser` (IN `i_idUsuario` INT)  BEGIN

select * 
from roles_usuarios ru
inner join roles r ON
r.idRol = ru.idRol_fk
where ru.idUsuario_fk = i_idUsuario;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_controlUsuario_listarUsuarios` ()  begin 
	select * from usuarios;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pantallaUsuario_login` (`i_usuario` VARCHAR(100), `i_pass` VARCHAR(600))  select *,count(*) as logueo from usuarios where usuario = i_usuario and pass = md5(i_pass)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `breveDescripcion` varchar(340) NOT NULL,
  `articulo` varchar(3000) NOT NULL,
  `categoria_fk` int(11) NOT NULL,
  `img_miniatura` varchar(600) NOT NULL,
  `usuarioCreador_fk` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaUltimaModificacion` datetime NOT NULL,
  `publicado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `titulo`, `breveDescripcion`, `articulo`, `categoria_fk`, `img_miniatura`, `usuarioCreador_fk`, `fechaCreacion`, `fechaUltimaModificacion`, `publicado`) VALUES
(1, 'Postura oficial ante la ley del agua', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\".', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '', 1, '2018-07-09 00:00:00', '2018-07-09 00:00:00', b'1'),
(2, 'Carlos Calleja presenta propuesta distritos tech ', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, '', 1, '2018-07-09 00:00:00', '2018-07-09 00:00:00', b'1'),
(4, 'Formula presidencial de gana en conversatorio UCA', '					\nasdasd				', '<p>asdas</p>', 1, '', 1, '2018-07-22 18:02:54', '0000-00-00 00:00:00', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `categoria`) VALUES
(1, 'Sociedad'),
(2, 'Economia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`) VALUES
(1, 'Super administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuarios`
--

CREATE TABLE `roles_usuarios` (
  `idRolUsuario` int(11) NOT NULL,
  `idRol_fk` int(11) NOT NULL,
  `idUsuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles_usuarios`
--

INSERT INTO `roles_usuarios` (`idRolUsuario`, `idRol_fk`, `idUsuario_fk`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `pass`) VALUES
(1, 'usuario', 'c2242b55b12318ac8d508a805e325c16'),
(2, 'byronpenna', 'c2242b55b12318ac8d508a805e325c16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `rCategoriaArticulo` (`categoria_fk`),
  ADD KEY `rArticulosUsuarios` (`usuarioCreador_fk`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `roles_usuarios`
--
ALTER TABLE `roles_usuarios`
  ADD PRIMARY KEY (`idRolUsuario`),
  ADD KEY `rRolesUsuarios_roles` (`idRol_fk`),
  ADD KEY `rRolesUsuarios_usuarios` (`idUsuario_fk`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `rArticulosUsuarios` FOREIGN KEY (`usuarioCreador_fk`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rCategoriaArticulo` FOREIGN KEY (`categoria_fk`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
