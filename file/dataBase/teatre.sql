-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2024 г., 12:48
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teatre`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `cardNumber` int NOT NULL,
  `cardCvv` int NOT NULL,
  `cardDate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `place`
--

CREATE TABLE `place` (
  `id` int NOT NULL,
  `row` varchar(1) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `rowId` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `place`
--

INSERT INTO `place` (`id`, `row`, `rowId`, `status`) VALUES
(1, 'a', 1, 1),
(3, 'a', 2, 1),
(4, 'a', 3, 1),
(5, 'a', 4, 1),
(6, 'a', 5, 1),
(7, 'a', 6, 0),
(8, 'a', 7, 1),
(9, 'a', 8, 1),
(10, 'a', 9, 1),
(11, 'a', 10, 1),
(12, 'a', 11, 0),
(13, 'a', 12, 1),
(14, 'a', 13, 0),
(15, 'a', 14, 0),
(16, 'a', 15, 0),
(17, 'a', 16, 0),
(18, 'a', 17, 0),
(19, 'a', 18, 0),
(20, 'a', 19, 0),
(21, 'a', 20, 0),
(22, 'b', 1, 0),
(23, 'b', 2, 0),
(24, 'b', 3, 0),
(25, 'b', 4, 1),
(26, 'b', 5, 0),
(27, 'b', 6, 1),
(28, 'b', 7, 1),
(29, 'b', 8, 1),
(30, 'b', 9, 1),
(31, 'b', 10, 1),
(32, 'b', 11, 1),
(33, 'b', 12, 1),
(34, 'b', 13, 0),
(35, 'b', 14, 1),
(36, 'b', 15, 0),
(37, 'b', 16, 0),
(38, 'b', 17, 0),
(39, 'b', 18, 0),
(40, 'b', 19, 0),
(41, 'b', 20, 0),
(42, 'c', 1, 1),
(43, 'c', 2, 0),
(44, 'c', 3, 0),
(45, 'c', 4, 0),
(46, 'c', 5, 1),
(47, 'c', 6, 1),
(48, 'c', 7, 1),
(49, 'c', 8, 1),
(50, 'c', 9, 1),
(51, 'c', 10, 1),
(52, 'c', 11, 1),
(53, 'c', 12, 0),
(54, 'c', 13, 0),
(55, 'c', 14, 1),
(56, 'c', 15, 0),
(57, 'c', 16, 0),
(58, 'c', 17, 0),
(59, 'c', 18, 0),
(60, 'c', 19, 0),
(61, 'c', 20, 0),
(62, 'd', 1, 1),
(63, 'd', 2, 1),
(64, 'd', 3, 0),
(65, 'd', 4, 0),
(66, 'd', 5, 1),
(67, 'd', 6, 1),
(68, 'd', 7, 1),
(69, 'd', 8, 1),
(70, 'd', 9, 1),
(71, 'd', 10, 1),
(72, 'd', 11, 1),
(73, 'd', 12, 0),
(74, 'd', 13, 0),
(75, 'd', 14, 0),
(76, 'd', 15, 0),
(77, 'd', 16, 0),
(78, 'd', 17, 0),
(79, 'd', 18, 0),
(80, 'd', 19, 0),
(81, 'd', 20, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `userDeal`
--

CREATE TABLE `userDeal` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `place_id` int NOT NULL,
  `receipt` varchar(20) NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `userDeal`
--

INSERT INTO `userDeal` (`id`, `user_id`, `place_id`, `receipt`, `cost`) VALUES
(2, 1, 47, '40037263808933793570', 500),
(3, 1, 67, '08154239707636571198', 500),
(4, 1, 9, '05101511637492797275', 500),
(5, 1, 8, '52168957756472527012', 500),
(6, 1, 28, '37730187802445416029', 500),
(7, 1, 27, '67112055191979921252', 500);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `number` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `userStatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `name`, `number`, `userStatus`) VALUES
(1, 'aragog@mail.com', '12345678', 'паук', '88005553536', 1),
(3, 'arboba@mail.com', '12345678', 'Даниссимо', '88005553535', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userDeal`
--
ALTER TABLE `userDeal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `place`
--
ALTER TABLE `place`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблицы `userDeal`
--
ALTER TABLE `userDeal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `userDeal`
--
ALTER TABLE `userDeal`
  ADD CONSTRAINT `userdeal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `userdeal_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
