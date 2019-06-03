-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 03 2019 г., 14:16
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `list`
--

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `producer_id` tinyint(3) NOT NULL,
  `model` char(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id`, `producer_id`, `model`) VALUES
(1, 1, 'Cerato'),
(2, 1, 'Ceed'),
(3, 1, 'Picanto'),
(4, 1, 'Optima'),
(5, 2, 'Accent'),
(6, 2, 'Santa Fe'),
(7, 2, 'IX35'),
(8, 2, 'Solaris'),
(9, 1, 'Rio'),
(10, 2, 'Getz'),
(11, 3, 'Granta'),
(12, 3, 'Priora'),
(13, 3, 'Kalina'),
(14, 3, 'Samara'),
(15, 3, '4x4'),
(16, 4, 'Aveo'),
(17, 4, 'Lacetti'),
(18, 4, 'Cobalt'),
(19, 4, 'Cruze'),
(20, 4, 'Captiva'),
(26, 5, 'Vectra'),
(27, 5, 'Mokka'),
(28, 5, 'Astra'),
(29, 5, 'Corsa');

-- --------------------------------------------------------

--
-- Структура таблицы `producers`
--

CREATE TABLE IF NOT EXISTS `producers` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `producer` char(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `producers`
--

INSERT INTO `producers` (`id`, `producer`) VALUES
(1, 'KIA'),
(2, 'Hyundai'),
(3, 'Lada'),
(4, 'Chevrolet'),
(5, 'Opel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
