-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.31-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para hospital
CREATE DATABASE IF NOT EXISTS `hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hospital`;

-- Volcando estructura para tabla hospital.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `sexo` enum('Hombre','Mujer') NOT NULL,
  `fecha_nac` date NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `area_tra` varchar(50) NOT NULL,
  `edo_civil` set('Soltero','Casado') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.empleados: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT IGNORE INTO `empleados` (`id`, `nombre`, `dir`, `tel`, `correo`, `sexo`, `fecha_nac`, `cedula`, `cargo`, `area_tra`, `edo_civil`) VALUES
	(4, 'Mara Sandivel Escalante Alvarado', 'barrio guadalupe', '98776543222', 'lucy_05081999_@hotmail.com', 'Mujer', '2018-07-18', '987654335', 'Director', 'psiquiatria', 'Casado'),
	(5, 'Ana Gisela Santiz Gomes', 'calle centro', '98765432', 'luz.050899_@gmail.com', 'Hombre', '2018-07-20', '23456789', 'Director', 'psiquiatria', 'Soltero');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.medicamentos
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `fecha_ad` date NOT NULL,
  `fecha_cad` date NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cant` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.medicamentos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `medicamentos` DISABLE KEYS */;
INSERT IGNORE INTO `medicamentos` (`id`, `nombre`, `codigo`, `fecha_ad`, `fecha_cad`, `marca`, `cant`) VALUES
	(4, 'alcohol', '2134', '2018-07-18', '2018-07-11', 'similares', '10'),
	(6, 'naproxeno', '30610', '2018-07-24', '2019-08-23', 'farmaseutico', '45'),
	(7, 'bufanda', '30600', '2018-07-11', '2018-07-31', 'farmaseutico', '123');
/*!40000 ALTER TABLE `medicamentos` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `tel` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `sexo` enum('Hombre','Mujer') NOT NULL,
  `tipo_sangre` varchar(50) NOT NULL,
  `nss` varchar(50) NOT NULL,
  `en` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.pacientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT IGNORE INTO `pacientes` (`id`, `nombre`, `fecha_nac`, `tel`, `dir`, `sexo`, `tipo_sangre`, `nss`, `en`) VALUES
	(10, 'Ana Gisela Santiz Gomes', '2018-07-17', '234567', 'calle centro', 'Mujer', '-a', '876543', 'tos'),
	(11, 'Luz Maria Hernandez Perez', '1999-08-05', '9181226768', 'calle centro', 'Mujer', 'o+', '987654321', 'fiebre reumatica'),
	(15, 'Luz María Hernández Pérez', '2018-07-02', '09876', 'barrio guadalupe', 'Mujer', 'o+', '123456789', 'fiebre reumatica'),
	(16, 'Luz María Hernández Pérez', '2018-07-02', '09876', 'barrio guadalupe', 'Mujer', 'o+', '123456789', 'fiebre reumatica');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `tipo` enum('Administrador','Doctor') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT IGNORE INTO `usuario` (`id`, `nombre`, `usuario`, `pass`, `tipo`) VALUES
	(7, 'Nicolas Geronimo Perez Lopez', 'Nicolas', '12345678', 'Doctor'),
	(9, 'Luz María Hernández Pérez', 'luz Hernandez', '12345678', 'Administrador');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
