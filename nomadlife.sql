-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 20 2016 г., 01:05
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nomadlife`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`) VALUES
(0, 'Ð‘Ð¾Ð»ÑŒÑˆÐ°Ñ Ð²ÐµÑ‡ÐµÑ€Ð¸Ð½ÐºÐ°!', 'Ð’ Ñ‡ÐµÑÑ‚ÑŒ Ð¾Ñ‚ÐºÑ€Ñ‹Ñ‚Ð¸Ñ Ð½Ð°ÑˆÐµÐ¹ Ñ„Ð¸Ñ€Ð¼Ñ‹, Ð¼Ñ‹ Ñ€ÐµÑˆÐ¸Ð»Ð¸ ÑƒÑÑ‚Ñ€Ð¾Ð¸Ñ‚ÑŒ Ð½Ðµ Ð±Ð¾Ð»ÑŒÑˆÑƒÑŽ Ð²ÐµÑ‡ÐµÑ€Ð¸Ð½ÐºÑƒ!', '2016-06-30');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `description`) VALUES
(1, '/nomadlife/resources/images/mountains.jpg', 'Ð’ÐµÐ»Ð¸ÐºÐ¾Ð»ÐµÐ¿Ð½Ñ‹Ðµ Ð³Ð¾Ñ€Ñ‹ ÐºÑ‹Ñ€Ð³Ñ‹Ð·ÑÑ‚Ð°Ð½Ð°!'),
(2, '/nomadlife/resources/images/8883741222_db87613204_b.jpg', 'Ð•Ñ‰Ñ‘ Ð¾Ð´Ð½Ð¸ Ð³Ð¾Ñ€Ñ‹'),
(3, '/nomadlife/resources/images/foto_dlya_stat-i_klondajk.jpg', 'Ð’ÐµÐ»Ð¸ÐºÐ¾Ð»ÐµÐ¿Ð½Ñ‹Ð¹ Ñ…Ñ€ÐµÐ±ÐµÑ‚!'),
(4, '/nomadlife/resources/images/9_3899871ea5439d2d254f2ceefa4ff15a.jpg', 'ÐšÐ¾Ñ‡ÐµÐ²Ð°Ñ Ð¶Ð¸Ð·Ð½ÑŒ');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `subject`, `content`, `date`) VALUES
(1, '/nomadlife/resources/images/port_4.jpg', 'project title', 'Sed congue, dui vel tristique mollis...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa\r\n                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 'ÐžÑ‚Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¾: 2016-06-20'),
(2, '/nomadlife/resources/images/port_5.jpg', 'PROJECT TITLE', 'Sed congue, dui vel tristique mollis...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 'ÐžÑ‚Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¾: 2016-06-20'),
(3, '/nomadlife/resources/images/port_6.jpg', 'PROJECT TITLE', 'Sed congue, dui vel tristique mollis...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 'ÐžÑ‚Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¾: 2016-06-20'),
(4, '/nomadlife/resources/images/port_1.jpg', 'PROJECT TITLE', 'Sed congue, dui vel tristique mollis...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 'ÐžÑ‚Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¾: 2016-06-20'),
(5, '/nomadlife/resources/images/port_2.jpg', 'PROJECT TITLE', 'Sed congue, dui vel tristique mollis...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 'ÐžÑ‚Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¾: 2016-06-20'),
(6, '/nomadlife/resources/images/port_3.jpg', 'PROJECT TITLE', 'Sed congue, dui vel tristique mollis...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 'ÐžÑ‚Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¾: 2016-06-20');

-- --------------------------------------------------------

--
-- Структура таблицы `slider_items`
--

CREATE TABLE `slider_items` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `slider_items`
--

INSERT INTO `slider_items` (`id`, `image`, `title`, `content`, `link`) VALUES
(2, '/nomadlife/resources/images/slideritem1.jpg', 'ÐŸÐµÑˆÐ¸Ð¹ Ð¢ÑƒÑ€Ð¸Ð·Ð¼', 'ÐžÑ‚Ð¿Ñ€Ð°Ð²ÑŒÑ‚ÐµÑÑŒ Ð² ÑƒÐ²Ð»ÐµÐºÐ°Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ðµ Ð¿ÑƒÑ‚ÐµÑˆÐµÑÑ‚Ð²Ð¸Ðµ Ð¿Ð¾ ÐšÑ‹Ñ€Ð³Ñ‹Ð·ÑÑ‚Ð°Ð½Ñƒ Ð¿Ñ€ÐµÐ¾Ð´Ð¾Ð»ÐµÐ²Ð°Ñ Ð²ÑÐµ Ñ‚Ñ€ÑƒÐ´Ð½Ð¾ÑÑ‚Ð¸ ÐŸÐµÑˆÐºÐ¾Ð¼! ', '/nomadlife/?action=feedback'),
(3, '/nomadlife/resources/images/slideritem2.jpg', 'ÐšÐ¾Ð½Ð½Ñ‹Ð¹ Ñ‚ÑƒÑ€Ð¸Ð·Ð¼', 'Ð—Ð°Ð¿Ñ€ÑÐ³Ð°Ð¹Ñ‚Ðµ Ð»Ð¾ÑˆÐ°Ð´ÐµÐ¹ ÐºÑ€ÐµÐ¿Ñ‡Ðµ, Ð¿Ð¾Ñ‚Ð¾Ð¼Ñƒ Ñ‡Ñ‚Ð¾ Ð¼Ñ‹ ÑÐ¾Ð±Ð¸Ñ€Ð°ÐµÐ¼ÑÑ Ð½Ð° ÑÐ°Ð¼Ñ‹Ðµ ÐºÑ€Ð°ÑÐ¸Ð²Ñ‹Ðµ Ð³Ð¾Ñ€Ñ‹ ÑÑ‚Ð¾Ð¹ ÑÑ‚Ñ€Ð°Ð½Ñ‹!!!', '/nomadlife/?action=kyrgyz');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `user_type`) VALUES
(1, 'admin', '25d3afe5f60ef13ee6f84441ccec4d88', 'admin'),
(3, 'Erlan', '25d3afe5f60ef13ee6f84441ccec4d88', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_items`
--
ALTER TABLE `slider_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `slider_items`
--
ALTER TABLE `slider_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
