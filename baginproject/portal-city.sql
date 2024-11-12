-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2024 г., 10:27
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
-- База данных: `portal-city`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Ремонт'),
(2, 'Уборка'),
(3, 'Дороги'),
(4, 'ямы во дворе');

-- --------------------------------------------------------

--
-- Структура таблицы `troubles`
--

CREATE TABLE `troubles` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'новая',
  `date` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `troubles`
--

INSERT INTO `troubles` (`id`, `user_id`, `name`, `description`, `category`, `photo`, `status`, `date`, `photo2`, `date2`, `reason`) VALUES
(41, 12, 'Уборка Санечки', 'Плоха(((', 'Уборка', 'img/uploads/1711030907Без названия.jfif', 'решена', '2024-03-21-17:21:47', 'img/uploads/1714656299kyrgyzstan.png', '2024-05-02-16:24:59', ''),
(42, 15, 'Уборка Санечки2', 'Плоха2(((', 'Ремонт', 'img/uploads/1711031272leg4.jpg', 'решена', '2024-03-21-17:27:52', 'img/uploads/1716287350lunk heads.jpeg', '2024-05-21-13:29:10', ''),
(43, 15, 'Уборка Санечки3', 'Плоха3(((', 'Уборка', 'img/uploads/1711031294leg5.jpg', 'отклонена', '2024-03-21-17:28:14', 'img/uploads/1713965780', '2024-04-24-16:36:20', 'чё?'),
(44, 12, 'Oh shit... here we go again.', 'lglglflflflfllllprpotgmprdgmkdrgm;kthnjtgnhdgjrndnhrtjgnrknhdrkltjmngkhdnrfghjfrntgjkkhdrfglhdfghlhrnrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrhhkkkkkkkkkkkkkkdofvb,zddddfmngbkffnkfdngjkfdfkgjmninnnnnthrjgtnhf', 'Дороги', 'img/uploads/1711094647leg6.jpg', 'решена', '2024-03-22-11:34:00', 'img/uploads/1716287586png-transparent-smiley-thumb-signal-emoticon-smiley-miscellaneous-face-smiley.png', '2024-05-21-13:33:06', ''),
(45, 12, 'fg', 'sdfgdffg', 'Уборка', 'img/uploads/1711186566Без названия.jfif', 'решена', '2024-03-23-12:36:06', 'img/uploads/1716287803ЛУЧШИЙ МЕМ.jpg', '2024-05-21-13:36:43', ''),
(46, 12, 'Яма', 'Заделайте яму', 'ямы во дворе', 'img/uploads/1714656681kyrgyzstan.png', 'решена', '2024-05-02-16:31:21', 'img/uploads/1716288075lunk heads.jpeg', '2024-05-21-13:41:15', ''),
(49, 17, 'xvbxcvxcvx', 'xcvxcvvxvc', 'Уборка', 'img/uploads/1716289563lunk heads.jpeg', 'решена', '2024-05-21-14:06:03', 'img/uploads/1716291006Снимок6.JPG', '2024-05-21-14:30:06', ''),
(50, 17, 'fdgdfgdf', 'gdfgdfg', 'Дороги', 'img/uploads/1716289581make-disney-pixar-movie-poster-about-only-one-whit-EhPYMMrUSQu9M-WwrFpnQA-5iYv4iyHQRCUGtyksZvYXg.jpeg', 'новая', '2024-05-21-14:06:21', NULL, NULL, NULL),
(51, 17, 'gdfgdfgfd5', 'gdfgfdgfdgdg', 'Ремонт', 'img/uploads/1716289597pink.jpg', 'новая', '2024-05-22-14:22:23', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `otchestvo` varchar(255) DEFAULT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` int DEFAULT '0' COMMENT '0="user", 1="admin", 2="superadmin"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `otchestvo`, `login`, `email`, `password`, `role`) VALUES
(9, 'admin', 'admin', 'admin', 'admin', 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3', 1),
(12, 'user', 'user', 'user', 'user', 'admin@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(15, 'user2', 'userov2', 'userovich2', 'user2', 'example2@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(16, 'dsfsdfsd', 'sdfsdfsdf', 'fdsfsd', 'fdsfsdf', 'sdfdsfds@gg.co', '7aa6b6e69f16a93101bc51832f331b1f', 0),
(17, 'user3', 'userov3', 'userovich3', 'user3', '123fg@gdfgfgfdgff.rdfgdfgf', 'c4ca4238a0b923820dcc509a6f75849b', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `troubles`
--
ALTER TABLE `troubles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `troubles_ibfk_1` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `troubles`
--
ALTER TABLE `troubles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `troubles`
--
ALTER TABLE `troubles`
  ADD CONSTRAINT `troubles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
