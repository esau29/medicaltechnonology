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

-- Volcando estructura para tabla hospital.diagnostico
CREATE TABLE IF NOT EXISTS `diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomb` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `doc` varchar(50) NOT NULL,
  `fec` date NOT NULL,
  `dia` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_diagnostico_pacientes` (`nomb`),
  CONSTRAINT `FK_diagnostico_pacientes` FOREIGN KEY (`nomb`) REFERENCES `pacientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.diagnostico: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `diagnostico` DISABLE KEYS */;
INSERT IGNORE INTO `diagnostico` (`id`, `nomb`, `edad`, `area`, `doc`, `fec`, `dia`) VALUES
	(1, 11, 25, 'psicología', 'Andres Erera', '2018-08-08', 'sufre sicosis aguda'),
	(2, 15, 34, 'pedagojía', 'Andres Erera', '2018-08-16', 'se le isieron pruebas y se encontro q el paciente ');
/*!40000 ALTER TABLE `diagnostico` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.medicamentos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `medicamentos` DISABLE KEYS */;
INSERT IGNORE INTO `medicamentos` (`id`, `nombre`, `codigo`, `fecha_ad`, `fecha_cad`, `marca`, `cant`) VALUES
	(4, 'alcohol', '2134', '2018-07-01', '2018-07-10', 'similares', '10'),
	(6, 'naproxeno', '30610', '2018-07-24', '2019-08-23', 'farmaseutico', '45'),
	(7, 'bufanda', '30600', '2018-07-11', '2018-07-31', 'farmaseutico', '123'),
	(12, 'alcalselcer', '30600', '2018-08-08', '2018-08-08', 'milano', '45'),
	(13, 'mara', '2134', '2018-08-01', '2018-08-23', 'farmaseutico', '45'),
	(14, 'gdhse', '5346', '2018-08-01', '2018-08-09', 'farmaseutico', '23124');
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

-- Volcando datos para la tabla hospital.pacientes: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT IGNORE INTO `pacientes` (`id`, `nombre`, `fecha_nac`, `tel`, `dir`, `sexo`, `tipo_sangre`, `nss`, `en`) VALUES
	(11, 'Luz Maria Hernandez Perez', '1999-08-05', '9181226768', 'calle centro', 'Mujer', 'o+', '987654321', 'fiebre reumatica'),
	(15, 'María Isabek Hernández Pérez', '2018-07-02', '0987623456', 'barrio guadalupe', 'Mujer', 'o+', '123456789', 'fiebre reumatica'),
	(16, 'María Candelaria Hernández Pérez', '2018-07-02', '0987623456', 'barrio guadalupe', 'Mujer', 'o+', '123456789', 'fiebre reumatica');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `tipo` enum('Administrador','Doctor') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hospital.usuario: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT IGNORE INTO `usuario` (`id`, `nombre`, `usuario`, `pass`, `tipo`) VALUES
	(7, 'Nicolas Geronimo Perez Lopez', 'Nicolas', '1234', 'Doctor'),
	(9, 'Luz María Hernández Pérez', 'luz Hernandez', '12345678', 'Administrador'),
	(10, 'jorge', 'jorge', '12345678', 'Administrador'),
	(11, 'Luz María Hernández Pérez', 'luz Hernandez', '12345678', 'Administrador'),
	(12, 'Luz María Hernández Pérez', 'carlitos', '12345678', 'Administrador'),
	(13, 'Luz María Hernández Pérez', 'german', '1234', 'Administrador'),
	(14, 'Luz María Hernández Pérez', 'nino', '12345678', 'Administrador'),
	(15, 'miguel luna', 'miguel', '12345678', 'Administrador'),
	(16, 'luz', 'mara', '12345678', 'Administrador');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
