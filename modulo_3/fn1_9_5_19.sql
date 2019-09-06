-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 06:23 PM
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
-- Database: `fn1`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`) VALUES
(1, 'Ford Kervens', NULL),
(2, 'Wentchelle Antoine', NULL),
(3, 'Mickey Jimbola', NULL),
(4, 'Marcelin Jumbow', NULL),
(5, 'Marcos Mateo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes_correo`
--

CREATE TABLE `estudiantes_correo` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes_correo`
--

INSERT INTO `estudiantes_correo` (`id`, `correo`) VALUES
(1, 'kervensford@gmail.com'),
(2, 'went@gmail.com'),
(3, 'bwettr@gmail.com'),
(4, 'bwigangyt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes_telefono`
--

CREATE TABLE `estudiantes_telefono` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes_telefono`
--

INSERT INTO `estudiantes_telefono` (`id`, `telefono`) VALUES
(1, '8760989999'),
(2, '2345466666'),
(3, '5098765678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
