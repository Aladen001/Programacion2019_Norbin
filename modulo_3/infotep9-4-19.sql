-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 06:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotep`
--

-- --------------------------------------------------------

--
-- Table structure for table `celular`
--

CREATE TABLE `celular` (
  `id` int(10) UNSIGNED DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `marca` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `decimales_2`
--

CREATE TABLE `decimales_2` (
  `_float` float DEFAULT NULL,
  `_double` double(6,2) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `nombre` text DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`nombre`, `edad`, `id`) VALUES
('waddley belizaire', 25, 8791);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) DEFAULT NULL,
  `nombre` text DEFAULT NULL,
  `pays` text DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `pays`, `fecha_nac`) VALUES
(NULL, 'Cristian Nunez', 'DR', NULL),
(NULL, 'Waddley Belizaire', 'HT', NULL),
(NULL, 'Wentchelle Antoine', 'Baron', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `familia`
--

CREATE TABLE `familia` (
  `nombre` text DEFAULT NULL,
  `edad` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familia`
--

INSERT INTO `familia` (`nombre`, `edad`) VALUES
('fred', 29),
('flor', 255);

-- --------------------------------------------------------

--
-- Table structure for table `numericos_enteros`
--

CREATE TABLE `numericos_enteros` (
  `_tinyint` tinyint(4) DEFAULT NULL,
  `_smallint` smallint(6) DEFAULT NULL,
  `_mediumint` mediumint(9) DEFAULT NULL,
  `_int` int(11) DEFAULT NULL,
  `_bigint` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participantes`
--

CREATE TABLE `participantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` text DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `cedula` mediumint(9) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `telefono` mediumint(9) DEFAULT NULL,
  `estado_civil` varchar(9) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `fecha_naccimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participantes`
--

INSERT INTO `participantes` (`id`, `nombre`, `edad`, `cedula`, `sexo`, `direccion`, `telefono`, `estado_civil`, `correo`, `fecha_naccimiento`) VALUES
(1, 'Ford', 23, 8388607, 'M', 'st filomen', 8388607, 'soltero', 'kervens@gmail.com', '0000-00-00'),
(2, 'Wentchelle', 23, 8388607, 'F', 'citesoley', 8388607, 'Libre', 'went@gmail.com', '0000-00-00'),
(3, 'Norbin', 27, 8388607, 'M', 'st filomen', 8388607, 'hummmmm', 'waddbeliz@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `texto`
--

CREATE TABLE `texto` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texto`
--

INSERT INTO `texto` (`_char`, `_varchar`, `_text`) VALUES
('waddley', 'waddley', 'waddley'),
('Waddley beli', 'Waddley beli', 'Waddley belizaire N');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
