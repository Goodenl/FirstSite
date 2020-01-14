-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 16 2019 г., 20:27
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `polskapizda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(111) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Virgin'),
(2, 'Asian'),
(3, 'Ebony'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `author` varchar(11) NOT NULL DEFAULT 'anon',
  `text` text NOT NULL,
  `rating-comment` int(11) NOT NULL DEFAULT 0,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`author`, `text`, `rating-comment`, `video_id`) VALUES
('anon', 'heeeh', 0, 2),
('Georgi', 'Its my', 0, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rating` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `rating`) VALUES
(1, 'Cato', 'Cato@mail.com', '$2y$10$wd56P.lX4lfRCUbJqtF7cunRsNG8OLR.bYDpnvYcs1t.aFnzItAbO', NULL),
(2, 'test', 'test@hh.vo', '$2y$10$XniUe6.6Vp8Epv9LyrM6xe9bgvT/S.nUQSNXFOHSG0xSf5eTloFAC', 0),
(3, 'Kate', 'kate@gmail.com', '$2y$10$sDHhGOlDf9CfzrdPsWHnxuQM2QumTA0TTB3DWa0.QjIAMMWwzntna', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'anon',
  `view` int(11) NOT NULL DEFAULT 0,
  `rating` int(11) NOT NULL DEFAULT 0,
  `video_category` varchar(111) NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `title`, `author`, `view`, `rating`, `video_category`, `pubdate`) VALUES
(1, 'GardenMan', 'anon', 0, 0, '1', '2019-08-09 22:44:16'),
(2, 'FlameMan on dragon', 'Georgi', 32, 6, '2', '2019-08-09 22:45:50'),
(3, 'Man on dragon', 'Georgi', 16, 5, '2', '2019-08-09 22:45:54'),
(4, 'HomePhone', 'Anna', 6, 0, '4', '2019-08-09 23:06:07'),
(5, 'Mag', 'anon', 0, 0, '1', '2019-08-09 22:44:16'),
(6, 'Akupeli', 'Georgi', 7, 2, '2', '2019-08-09 22:45:50'),
(7, 'Colls', 'Georgi', 6, 5, '2', '2019-08-09 22:45:54'),
(8, 'Lovers', 'Anna', 12, 6, '4', '2019-08-09 23:06:07'),
(9, 'Goddmom', 'anon', 0, 0, '1', '2019-08-09 22:44:16'),
(10, 'Ice dragon!!', 'Georgi', 26, 6, '2', '2019-08-09 22:45:50'),
(11, 'Dungeon', 'Georgi', 322, 58, '2', '2019-08-09 22:45:54'),
(12, 'Irl', 'Anna', 29, 0, '4', '2019-08-09 23:06:07'),
(13, 'Gamlet', 'anon', 0, 0, '1', '2019-08-09 22:44:16'),
(14, 'Germiona', 'Georgi', 7, 2, '2', '2019-08-09 22:45:50'),
(15, 'Pitter', 'Georgi', 6, 5, '2', '2019-08-09 22:45:54'),
(16, 'Gloomers', 'Anna', 12, 6, '4', '2019-08-09 23:06:07'),
(17, '.mp4', 'Cato', 0, 0, '', '2019-09-16 19:39:35'),
(18, 'HorseMan.mp4', 'Cato', 0, 0, '3', '2019-09-16 19:39:55'),
(19, 'HorseMan.mp4', 'Cato', 0, 0, '3', '2019-09-16 19:41:37'),
(20, 'HorseMan', 'Cato', 0, 0, '3', '2019-09-16 19:42:23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
