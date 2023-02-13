-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-13 10:11:48
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
-- 表的结构 `trueans`
--

CREATE TABLE `trueans` (
  `ID` int(11) NOT NULL,
  `TF` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `trueans`
--

INSERT INTO `trueans` (`ID`, `TF`, `reason`) VALUES
(1, 1, '本题表述正确，即南开大学于1937年遭侵华日军炸毁，学校南迁，与北京大学、清华大学组建国立长沙临时大学，1938年迁至昆明改名为国立西南联合大学。'),
(2, 0, '本题表述错误，“允公允能，日新月异”才是南开大学校训，而“自强不息，厚德载物”是清华大学的校训。'),
(3, 1, '本题表述正确，南开大学的校旗是紫色的。'),
(4, 1, '本题表述正确，南开大学创办于1919年，创办人是著名爱国教育家严范孙和张伯苓。'),
(5, 0, '本题表述错误，改革开放以来，经教育部与天津市共建支持，南开大学发展成为国家“211工程”和“985工程”重点建设的综合性研究型大学。');

--
-- 转储表的索引
--

--
-- 表的索引 `trueans`
--
ALTER TABLE `trueans`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
