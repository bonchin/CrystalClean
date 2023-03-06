-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 05 2023 г., 23:10
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
-- База данных: `clean`
--

-- --------------------------------------------------------

--
-- Структура таблицы `offer`
--

CREATE TABLE `offer` (
  `id` int NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_services` int NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `offer`
--

INSERT INTO `offer` (`id`, `fname`, `phone`, `email`, `id_services`, `description`, `date`) VALUES
(1, 'Pasha', '+375336212312', 'asdas@mail.ru', 2, 'Хочу такое', '2023-03-02'),
(2, 'Егор', '+375323123', 'egor4ik@mail.ru', 4, 'asasas', '2023-03-07');

-- --------------------------------------------------------

--
-- Структура таблицы `servicestest`
--

CREATE TABLE `servicestest` (
  `id_services` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `id_type_services` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `servicestest`
--

INSERT INTO `servicestest` (`id_services`, `name`, `price`, `id_type_services`) VALUES
(1, '1-комнатная квартира ', 50, 1),
(2, '2-комнатная квартира', 60, 1),
(3, '3-комнатная квартира', 70, 1),
(4, '4-комнатная квартира', 80, 1),
(5, 'Коттедж до 200 м²', 175, 1),
(6, 'Коттедж до 400 м²', 600, 1),
(7, 'Разовая уборка квартиры', 50, 2),
(8, 'Уборка квартиры 2 раза в месяц', 80, 2),
(9, 'Уборка квартиры 4 раза в месяц', 120, 2),
(10, 'Разовая уборка коттеджа ', 175, 2),
(11, 'Уборка коттеджа 4 раза в месяц', 600, 2),
(12, 'Уборка после ремонтных работ', 2, 3),
(13, 'Мытье окон', 7, 4),
(14, 'Химчистка синтетического ковра', 4, 5),
(15, 'Химчистка ковра с длиным ворсом', 4, 5),
(16, 'Химчистка шерстяного ковра', 4, 5),
(17, 'Ковролин', 4, 5),
(18, 'Ковровое покрытие', 4, 5),
(19, 'Пуф', 8, 6),
(20, 'кресло', 15, 6),
(21, 'Кресло-кровать', 17, 6),
(22, 'Диван двухместный', 33, 6),
(23, 'Диван трехместный', 40, 6),
(24, 'Диван четырехместный угловой', 45, 6),
(25, 'Диван пятиместный угловой', 55, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `typeservices`
--

CREATE TABLE `typeservices` (
  `id_type_services` int NOT NULL,
  `type_services` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `discription` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `typeservices`
--

INSERT INTO `typeservices` (`id_type_services`, `type_services`, `discription`) VALUES
(1, 'Генеральная уборка', 'Проведение генеральной уборки квартир, офисов в Гродно, мы сделаем всю грязную работу по низкой стоимости и в самые сжатые сроки. Для выполнения данной услуги мы подготовили целый комплекс мероприятий, который включает в себя уборку всех комнат, кухни, ванной и санузла, а также мытье бытовых приборов, зеркал, окон, чистку мебели и ковров. Для каждого помещения выбирается эффективная стратегия действий с использованием профессиональной техники и безопасных чистящих средств.'),
(2, 'Поддерживающая уборка ', 'Лучше всего суть этой услуги отражает её название - она используется для поддержания чистоты.\r\nПроводить поддерживающую уборку в квартире рекомендуется приблизительно раз в неделю, особенно если у вас есть дети или домашние животные. \r\nЗачем же нужна эта услуга?\r\nПомыть полы или протереть пыль можно и своими силами, но что делать, если у вас нет на это времени? \r\nА может быть, вы хотите, чтобы уборкой квартиры занимались профессионалы? \r\nТогда лучший выход - заказать эту услугу в клининговой компании.'),
(3, 'Уборка после ремонта', 'Всем нравится чистота и порядок, в котором хочется жить, а вот сам процесс - уборка квартир после ремонта и строительства мало кого вдохновляет.\r\nРаботники нашей клининговой компании с удовольствием окажут вам данную услугу и выполнят все на высоком уровне, а вы сможете потратить время на общение с родными или близкими, на любимое хобби и вернуться уже в чистое и опрятное жилище.'),
(4, 'Мойка окон', 'Многим может показаться, что мойка окон в офисе, квартире или частном доме достаточно простая работа.\r\nНа первый взгляд так и кажется, но если нет специального оборудования, моющих средств и необходимой квалификации, то задача становится трудновыполнимой, да еще и отнимет уйму сил и времени. \r\nРешить этот вопрос поможет клининговая компания, предлагающая качественные услуги мойки окон.\r\n'),
(5, 'Химчистка ковров', 'Химчистка ковров на дому - это единственный и правильный способ содержать напольные покрытия в чистоте и эстетически привлекательными. Интерьерная мода не стоит на месте и постоянно меняется, но ковры все также популярны и актуальны. Ковры не только создают уютную атмосферу, но и отлично поглощают шум, который характерен для квартир многоэтажных домов.'),
(6, 'Химчистка мебели', 'Глубокая чистка позволяет избавиться от пыли, грязи и вредных микроорганизмов, таких как клещи, которые отрицательным образом влияют на здоровье. \r\nНеобходимо учитывать некоторые детали химчистки мягкой мебели - это потертость в таких местах как спинка изделия и подлокотники, и запах животных. \r\nТщательный процесс чистки на обивке загрязнений не оставит, но потертые места будут отличаться от другой поверхности. \r\nЧто касается запаха от домашних питомцев, то благодаря антиуриновой обработке, загрязнения исчезают полностью.\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `usertype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `login`, `email`, `password`, `usertype`) VALUES
(1, 'Rolevik', 'yankov-0@list.ru', 'sasa', 'user'),
(2, 'antonkislonov', 'kric52223@gmail.com', 'saw12', 'user'),
(3, 'zxc', 'zxc@mail.ru', '123456', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service` (`id_services`);

--
-- Индексы таблицы `servicestest`
--
ALTER TABLE `servicestest`
  ADD PRIMARY KEY (`id_services`),
  ADD KEY `id_type_services` (`id_type_services`);

--
-- Индексы таблицы `typeservices`
--
ALTER TABLE `typeservices`
  ADD PRIMARY KEY (`id_type_services`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `servicestest`
--
ALTER TABLE `servicestest`
  MODIFY `id_services` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `typeservices`
--
ALTER TABLE `typeservices`
  MODIFY `id_type_services` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`id_services`) REFERENCES `servicestest` (`id_services`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `servicestest`
--
ALTER TABLE `servicestest`
  ADD CONSTRAINT `servicestest_ibfk_1` FOREIGN KEY (`id_type_services`) REFERENCES `typeservices` (`id_type_services`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
