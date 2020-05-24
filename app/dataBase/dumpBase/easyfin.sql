-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2020 г., 13:23
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `easyfin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agents`
--

CREATE TABLE `agents` (
  `id` int(10) NOT NULL,
  `bin_iin` bigint(12) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adres` varchar(400) NOT NULL,
  `bik` varchar(8) DEFAULT NULL,
  `contacts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agents`
--

INSERT INTO `agents` (`id`, `bin_iin`, `name`, `adres`, `bik`, `contacts`) VALUES
(1, 991040001502, 'Объектно ориентированный ', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(2, 991040001502, 'Светлое ', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(3, 991040001502, 'Солнышко', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(4, 991040001502, 'Space', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(5, 991040001502, 'Луна', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(6, 991040001502, 'Фата', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(7, 991040001502, 'Очень очень длинное название компании этой', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15'),
(8, 991040001502, 'Hole', 'Республика Казахстан, город  Алматы, улица Жамбула, дом 75, н.п. 27', 'KCJBKZKX', '+86 595 4841 15');

-- --------------------------------------------------------

--
-- Структура таблицы `biks`
--

CREATE TABLE `biks` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `bik` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `biks`
--

INSERT INTO `biks` (`id`, `name`, `bik`) VALUES
(1, 'Altyn Bank', 'ATYNKZKA'),
(2, 'AsiaCredit Bank', 'LARIKZKA'),
(3, 'Bank RBK', 'KINCKZKA'),
(4, 'Capital Bank Kazakhstan', 'TBKBKZKA'),
(5, 'First Heartland Jýsan Bank', 'TSESKZKA'),
(6, 'ForteBank', 'IRTYKZKA'),
(7, 'Kaspi Bank', 'CASPKZKA'),
(8, 'Tengri Bank', 'TNGRKZKX'),
(9, 'АТФБанк', 'ALMNKZKA'),
(10, 'Банк Kassa Nova', 'KSNVKZKA'),
(11, 'Банк ЦентрКредит', 'KCJBKZKX'),
(12, 'ДБ \"Альфа-Банк\"', 'ALFAKZKA'),
(13, 'ДБ \"Банк Китая в Казахстане\"', 'BKCHKZKA'),
(14, 'ДБ «КЗИ Банк»', 'KZIBKZKA'),
(15, 'ДБ «Национальный Банк Пакистана»', 'NBPAKZKA'),
(16, 'ДБ АО \"Банк Хоум Кредит\"', 'INLMKZKA'),
(17, 'ДБ АО «Сбербанк России»', 'SABRKZKA'),
(18, 'ДО АО Банк ВТБ (Казахстан)', 'VTBAKZKZ'),
(19, 'Евразийский Банк', 'EURIKZKA'),
(20, 'Жилстройсбербанк Казахстана', 'HCSKKZKA'),
(21, 'Заман-Банк', 'ZAJSKZ22'),
(22, 'Исламский Банк \"Al-Hilal\"', 'HLALKZKZ'),
(23, 'Народный сберегательный банк Казахстана', 'HSBKKZKX'),
(24, 'Нурбанк', 'NURSKZKX'),
(25, 'Ситибанк Казахстан', 'CITIKZKA'),
(26, 'ТП Банк Китая в Алматы', 'ICBKKZKX'),
(27, 'Шинхан Банк Казахстан', 'SHBKKZKA');

-- --------------------------------------------------------

--
-- Структура таблицы `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `today` varchar(255) NOT NULL,
  `agent` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `value_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `invoice`
--

INSERT INTO `invoice` (`id`, `today`, `agent`, `items`, `value_1`) VALUES
(1, '22.05.2020', 'Объектно ориентированный', 'Ручка шариковая', 21),
(2, '22.05.2020', 'Фата', 'Карандаш цветной', 34),
(3, '22.05.2020', 'Луна', 'Линейка 20см.', 1),
(4, '22.05.2020', 'Фата', 'Тетрадь общая 80л.', 23423),
(5, '22.05.2020', 'Светлое', 'Тетрадь общая 40л.', 3),
(6, '24.05.2020', 'Space', 'Ручка шариковая', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(400) NOT NULL,
  `price` bigint(15) NOT NULL,
  `code` varchar(255) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `code_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `code`, `unit`, `code_price`) VALUES
(1, 'Ручка шариковая', 150, '99019901', 'шт.', 768),
(2, 'Карандаш графитовый', 70, '99019902', 'шт.', 768),
(3, 'Тетрадь общая 40л.', 715, '99019903', 'шт.', 768),
(4, 'Тетрадь 12л.', 52, '99019904', 'шт.', 768),
(5, 'Ручка шариковая(Красная)', 150, '99019905', 'шт.', 768),
(6, 'Карандаш цветной', 77, '99019906', 'шт.', 768),
(7, 'Тетрадь общая 80л.', 1215, '99019907', 'шт.', 768),
(8, 'Линейка 20см.', 300, '99019908', 'шт.', 768);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `bin_iin` bigint(12) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adres` varchar(400) DEFAULT NULL,
  `nds` tinyint(1) DEFAULT NULL,
  `bik` varchar(8) DEFAULT NULL,
  `bank` varchar(255) NOT NULL,
  `iik` varchar(22) DEFAULT NULL,
  `kbe` tinyint(2) DEFAULT NULL,
  `contacts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `bin_iin`, `name`, `adres`, `nds`, `bik`, `bank`, `iik`, `kbe`, `contacts`) VALUES
(1, 160240008320, 'MM Group of Companies', 'Республика Казахстан, город Алматы, Алмалинский район, проспект Райымбека, дом № 251Г, офис 2/4', 0, 'TNGRKZKX', 'Tengri Bank', 'KZ148562203102353638', 17, '+7 777 787 7787');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `biks`
--
ALTER TABLE `biks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT для таблицы `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `biks`
--
ALTER TABLE `biks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
