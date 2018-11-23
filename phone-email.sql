-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 22 2018 г., 21:53
-- Версия сервера: 5.7.21-0ubuntu0.16.04.1
-- Версия PHP: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `phone-email`
--

CREATE TABLE `phone-email` (
  `id` int(3) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phone-email`
--

INSERT INTO `phone-email` (`id`, `phone`, `email`) VALUES
(1, '12312', 'asdfasdf@asasdf.gjg'),
(2, '456456456', 'dfsadsaf@sfgsdfg.vghn'),
(3, '123456789', 'asdfgh@asdf.asd'),
(4, '987654321', 'poiu@lkjh.mnb'),
(9, '321654987', '32165497@dfg.dfg'),
(10, '123', '123@123.123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `phone-email`
--
ALTER TABLE `phone-email`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `phone-email`
--
ALTER TABLE `phone-email`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
