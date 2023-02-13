-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-12 14:39:31
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `nku`
--

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`ID`, `txt`) VALUES
(1, '南开大学于1937年遭侵华日军炸毁，学校南迁，与北京大学、清华大学组建国立长沙临时大学，1938年迁至昆明改名为国立西南联合大学。请问该历史是否正确？'),
(2, '自强不息，厚德载物是南开大学的校训吗？'),
(3, '南开大学的校旗是紫色的吗？'),
(4, '南开大学创办于1919年，创办人是著名爱国教育家严范孙和张伯苓，这句话是否正确？'),
(5, '南开大学是985，不是211，这句话是否正确？');

--
-- 转储表的索引
--

--
-- 表的索引 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
