-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.154:3306
-- Время создания: Ноя 05 2022 г., 04:37
-- Версия сервера: 10.3.27-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `novohatsky_helpdesk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bid`
--

DROP TABLE IF EXISTS `bid`;
CREATE TABLE `bid` (
  `id_bid` mediumint(8) UNSIGNED NOT NULL,
  `author` varchar(100) NOT NULL COMMENT 'Автор заявки',
  `cabinet` varchar(10) NOT NULL,
  `id_service` mediumint(9) NOT NULL,
  `description` varchar(300) NOT NULL,
  `id_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `dt_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bid`
--

INSERT INTO `bid` (`id_bid`, `author`, `cabinet`, `id_service`, `description`, `id_status`, `dt_create`) VALUES
(1, 'sdfsd gdfgdfh ', '12', 1, 'sdfsdg dfgd f', 3, '2022-08-11 15:36:25'),
(2, 'Новохатский Валерий Александрович', '105', 5, 'Необходимо заменить картридж', 3, '2022-08-12 16:10:13'),
(3, 'test', '101', 4, 'ldkf;ldskfdsof[p', 3, '2022-08-15 15:48:38'),
(4, 'Test', '101', 3, 'Dndnjd', 3, '2022-08-15 19:41:57'),
(5, 'Новохатский Валерий Александрович', '304-2', 2, 'не работает компьютер', 3, '2022-08-16 10:04:09'),
(6, 'lkdjfkjdslkf', '105', 4, 'dfkdjflkjsdfliudsoif', 3, '2022-08-16 17:50:21'),
(7, 'wew', 'wewew', 1, 'w', 3, '2022-08-24 09:52:01'),
(8, 'учитель немецкого языка', '119', 5, 'hp LaserJet pro m130nw', 3, '2022-08-29 14:49:11'),
(9, 'Чубарова Наталья Эдуардовна', '314', 2, 'Телевизор не видит компьютер', 3, '2022-08-30 16:00:30'),
(10, 'Чубарова Наталья Эдуардовна', '314', 2, 'Телевизор не видит компьютер', 3, '2022-08-30 16:01:41'),
(11, 'Чубарова Наталья Эдуардовна', '314', 2, 'Не выводит презентацию на экран телевизора', 3, '2022-09-02 10:35:56'),
(12, 'Череухина', '1-121', 1, 'Не работает work teacher', 3, '2022-09-02 11:27:55'),
(13, 'Череухина', '1-121', 5, 'Hp laser jet 130', 3, '2022-09-02 11:28:45'),
(14, 'Пешков ЕО', '308', 1, 'не работает сетевая папка', 3, '2022-09-14 14:45:53'),
(15, 'Пешков ЕО', '305 (учите', 1, 'не работает интернет', 3, '2022-09-14 14:46:24'),
(16, 'Медик', 'мед. кабин', 6, 'установить МФУ', 3, '2022-09-16 11:16:08'),
(17, 'Хитракова С.В.', '216', 2, 'не работает телевизор', 3, '2022-09-16 12:16:59'),
(18, 'Хитракова С.В.', '216', 5, 'не работает принтер. ', 1, '2022-09-16 14:28:34'),
(19, 'Зверева Н.Н.', '315', 6, 'Прошу установить МФУ', 3, '2022-09-16 18:20:36'),
(20, 'Валеева Л.Д. ', '218', 4, 'Не могу войти в интернет для проведения уроков. Есть только вход в элжур, а мне нужны видео уроки.', 1, '2022-09-22 11:49:05'),
(21, 'Валеева Л.Д.', 'учительска', 2, 'нет возможности войти в элжур. ', 2, '2022-09-22 15:01:29'),
(22, 'Дидык Людмила Сергеевна', '305', 3, 'Прошу написать объявление в электронный журнал по работе с заявками', 2, '2022-09-30 11:14:29'),
(23, 'Генкель Анна Игоревна', '209', 6, 'установить принтер, кабинет информатики без принтера быть не может', 3, '2022-10-03 15:14:58'),
(24, 'Генкель Анна Игоревна', '306', 6, 'повесить интерактивную панель, предпочтительно в пятницу во вторую смену. ', 2, '2022-10-03 15:15:34'),
(25, 'Сергеева Е.Е.', '309', 6, 'поставить телевизор вместо проектора ', 2, '2022-10-18 12:15:21'),
(26, 'Макарова Е.П.', '116', 1, 'Сбилось время на компьютере, не могу установить', 3, '2022-10-24 16:46:05'),
(27, 'Чубарова Наталья Эдуардовна', '219', 2, 'Нет звука в компьютере или на телевизоре', 2, '2022-10-26 15:23:41');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id_service` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id_service`, `name`) VALUES
(2, 'Воостановление работоспособности оборудования'),
(3, 'Воостановление работоспособности ПО'),
(5, 'Замена картриджа'),
(1, 'Предоставление доступа в информационные системы'),
(6, 'Установка оборудования'),
(4, 'Установка программы');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id_status` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name`) VALUES
(2, 'в работе'),
(3, 'выполнено'),
(1, 'новая'),
(4, 'отклонена');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id_bid`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_status` (`id_status`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bid`
--
ALTER TABLE `bid`
  MODIFY `id_bid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id_service` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
