-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2024 г., 14:52
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Portal-City`
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
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Новая',
  `date` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `troubles`
--

INSERT INTO `troubles` (`id`, `user_id`, `name`, `description`, `category`, `photo`, `status`, `date`, `photo2`, `date2`, `reason`) VALUES
(30, 9, 'ertert22222qw', 'bvnbvnbvbnv', 'ремонт дорог', 'img/uploads/16992077901697559728pp.png', 'решена', '2024-03-31-19:36:53', 'img/uploads/16992868101697558327buket-kolokolchik.jpg', '2023-11-06-19:06:50', NULL),
(31, 9, 'gfhgf', 'gfhgfh', 'уборка мусора', 'img/uploads/1699207866169755985161d2f85b92b57c0004c64745.png', 'решена', '2023-11-05-21:11:06', 'img/uploads/16993091931697559728pp.png', '2023-11-07-01:19:53', NULL),
(32, 9, 'ertert', 'dfgdfg', 'ремонт дорог', 'img/uploads/16992104071697559351buket-kolokolchik.jpg', 'решена', '2023-11-05-21:53:27', 'img/uploads/16993092091697559671ipek.png', '2023-11-07-01:20:09', NULL),
(33, 9, 'gh', 'fghgf', 'ремонт дорог', 'img/uploads/16992104201697559671ipek.png', 'решена', '2023-11-05-21:53:40', 'img/uploads/1699216552169755985161d2f85b92b57c0004c64745.png', '2023-11-05-23:35:52', NULL),
(35, 9, 'vcbvcbvcb', 'bcvbcbcv', 'ремонт дорог', 'img/uploads/1699308787169755985161d2f85b92b57c0004c64745.png', 'решена', '2023-11-07-01:13:07', 'img/uploads/1700357528Снимок экрана (1).png', '2023-11-19-04:32:08', NULL),
(36, 9, 'vcbvcbvcb454e3545', 'bcvbcbcv4564645', 'ремонт дорог', 'img/uploads/1699308795169755985161d2f85b92b57c0004c64745.png', 'новая', '2023-11-07-01:13:15', 'img/uploads/1699309256', '2023-11-07-01:20:56', NULL),
(37, 9, 'bvcb', 'fg45', 'уборка мусора', 'img/uploads/16993088121697559427buket-kolokolchik.jpg', 'решена', '2023-11-07-01:13:32', 'img/uploads/16993091731697559728pp.png', '2023-11-07-01:19:33', NULL),
(38, 9, 'удаление винды', 'фигня винда', 'другое', 'img/uploads/1700494467Снимок экрана (1).png', 'решена', '2023-11-20-18:34:27', 'img/uploads/1700494527Снимок экрана (2).png', '2023-11-20-18:35:27', NULL),
(39, 9, 'hjhjhjhjh', 'jhjghjghjgh', 'уборка мусора', 'img/uploads/1700499038Снимок экрана (2).png', 'решена', '2023-11-20-19:51:00', 'img/uploads/1700499135Снимок экрана (1).png', '2023-11-20-19:52:15', NULL),
(40, 12, 'fsfdsf', 'dsfdsdsfds', 'уборка мусора', 'img/uploads/1700847420Снимок экрана (1).png', 'отклонена', '2023-11-24-20:37:00', 'img/uploads/1731411423', '2024-11-12-14:37:03', 'пипяо'),
(41, 14, 'Плохая дорога', 'Везде кочки, лужи, ехать невозможно', 'ремонт дорог', 'img/uploads/1701027370yamy-i-vyboiny.jpg', 'решена', '2023-11-26-22:36:47', 'img/uploads/1701027468paved-good-road_252085-10183.webp', '2023-11-26-22:37:48', NULL),
(43, 12, 'Очень грязный подъезд.', 'Граффити и много мусора', 'Уборка', 'img/uploads/1731411934Gryaznyj-podezd.jpg', 'решена', '2024-11-12-14:45:34', 'img/uploads/1731411983maxresdefault (1).jpg', '2024-11-12-14:46:23', '');

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
(9, 'dfgdfgdfg', 'gdfgfdg', 'dfgdfgfdgdfgdfg', 'gfhgfhgfh', 'gfhfhgfhfhgfh@fgdfgdfg.gdfg', '7694f4a66316e53c8cdd9d9954bd611d', 0),
(10, 'gdfgdfgd', 'gfgfdgdf', 'gdfgfdfgd', 'gfhgfhgfh', 'sfdsfsdf@sgsd.rt', 'ff33f1b12213e021c2c4a888141953ba', NULL),
(11, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(12, 'user', 'userov', 'userovich', 'user', 'user@example.com', '7694f4a66316e53c8cdd9d9954bd611d', 0),
(13, 'admin', 'adminov', 'adminovich', 'admin', 'admin@example.com', '7694f4a66316e53c8cdd9d9954bd611d', 1),
(14, 'durak', 'durakov', 'durakovich', 'durak777', 'durak@example.com', '7694f4a66316e53c8cdd9d9954bd611d', 0);

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `troubles`
--
ALTER TABLE `troubles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
