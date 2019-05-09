-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 09 2019 г., 20:26
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sudoku`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fields`
--

DROP TABLE IF EXISTS `fields`;
CREATE TABLE `fields` (
  `ID` int(11) NOT NULL,
  `Field` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `fields`
--

INSERT INTO `fields` (`ID`, `Field`) VALUES
(1, '200080300\r\n060070084\r\n030500209\r\n000105408\r\n000000000\r\n402706000\r\n301007040\r\n720040060\r\n004010003'),
(2, '000125400\r\n008400000\r\n420800000\r\n030000095\r\n060902010\r\n510000060\r\n000003049\r\n000007200\r\n001298000'),
(3, '003020600\r\n900305001\r\n001806400\r\n008102900\r\n700000008\r\n006708200\r\n002609500\r\n800203009\r\n005010300'),
(4, '630000000\r\n000500008\r\n005674000\r\n000020000\r\n003401020\r\n000000345\r\n000007004\r\n080300902\r\n947100080'),
(5, '000020040\r\n008035000\r\n000070602\r\n031046970\r\n200000000\r\n000501203\r\n049000730\r\n000000010\r\n800004000'),
(6, '080005000\r\n000003457\r\n000070809\r\n060400903\r\n007010500\r\n408007020\r\n901020000\r\n842300000\r\n000100080'),
(7, '005000006\r\n070009020\r\n000500107\r\n804150000\r\n000803000\r\n000092805\r\n907006000\r\n030400010\r\n200000600'),
(8, '004000000\r\n000030002\r\n390700080\r\n400009001\r\n209801307\r\n600200008\r\n010008053\r\n900040000\r\n000000800'),
(9, '007256400\r\n400000005\r\n010030060\r\n000508000\r\n008060200\r\n000107000\r\n030070090\r\n200000004\r\n006312700'),
(10, '050010040\r\n107000602\r\n000905000\r\n208030501\r\n040070020\r\n901080406\r\n000401000\r\n304000709\r\n020060010'),
(11, '000602000\r\n400050001\r\n085010620\r\n038206710\r\n000000000\r\n019407350\r\n026040530\r\n900020007\r\n000809000'),
(12, '904200007\r\n010000000\r\n000706500\r\n000800090\r\n020904060\r\n040002000\r\n001607000\r\n000000030\r\n300005702');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fields`
--
ALTER TABLE `fields`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;