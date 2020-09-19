-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2020 at 05:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14907308_tsf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

DROP TABLE IF EXISTS `credit`;
CREATE TABLE IF NOT EXISTS `credit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `credit` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `name`, `email`, `contact`, `credit`) VALUES
(1, 'Arijit Ghosh', 'arijit420@gmail.com', '9865745123', 6000),
(2, 'Sagar Panda', 'sagar69@gmail.com', '7589546895', 5500),
(3, 'Kiran Bari', 'kirancse47@gmail.com', '8617589738', 9950),
(4, 'Niloy Biswas', 'niloydj69@gmail.com', '7895426387', 8000),
(5, 'Dibyendu Debnath', 'dibyendu.nir@gmail.com', '7841236987', 8500),
(6, 'Pradip Paul', 'pradip.asolvai2gmail.com', '8958712356', 9000),
(7, 'Samrat Kundu', 'samrat.hati.microrai@gmail.com', '8547963215', 12500),
(8, 'MD Hasan', 'mdhasan420@gmail.com', '89745123', 11500),
(9, 'Palash Bari', 'palashphysic2@gmail.com', '9578412563', 14550),
(10, 'Avijit Pal', 'avijitpal123@gmail.com', '7854123695', 4500),
(11, 'BODIAL JAMAL MALLICK', 'jamal.civil@gmail.com', '8965471523', 7500);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `payer` varchar(30) NOT NULL,
  `payee` varchar(30) NOT NULL,
  `amt` int(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`payer`, `payee`, `amt`, `date_time`) VALUES
('MD Hasan', 'Samrat Kundu', 1500, '2020-09-19 13:42:10'),
('Samrat Kundu', 'MD Hasan', 1500, '2020-09-19 14:53:05'),
('Samrat Kundu', 'MD Hasan', 1500, '2020-09-19 14:57:24'),
('MD Hasan', 'Samrat Kundu', 1500, '2020-09-19 14:57:51'),
('Arijit Ghosh', 'Sagar Panda', 500, '2020-09-19 15:03:26'),
('Palash Bari', 'Kiran Bari', 450, '2020-09-19 16:19:31'),
('BODIAL JAMAL MALLICK', 'Pradip Paul', 500, '2020-09-19 16:45:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







id14907308_tsf_db



id14907308_root


Kiranadmin@47






https://kirancredit.000webhostapp.com




















