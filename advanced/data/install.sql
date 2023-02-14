-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-14 03:13:56
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `account`
--

CREATE TABLE `account` (
  `aid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `account`
--

INSERT INTO `account` (`aid`, `username`, `password`) VALUES
(1, 'root', 'rootroot'),
(16, 'user3', '333333'),
(18, 'user2', '222222'),
(19, 'user4', '444444'),
(20, '小明', '123456'),
(21, 'user1', '111111');

-- --------------------------------------------------------

--
-- 表的结构 `back_account`
--

CREATE TABLE `back_account` (
  `aid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `back_account`
--

INSERT INTO `back_account` (`aid`, `username`, `password`) VALUES
(1, 'admin1', '111111'),
(2, 'admin2', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `feeds`
--

CREATE TABLE `feeds` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `content` text NOT NULL COMMENT '留言内容',
  `created_at` int(11) NOT NULL COMMENT '留言时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `feeds`
--

INSERT INTO `feeds` (`id`, `username`, `content`, `created_at`) VALUES
(1, 'user1', 'hello world!', 1676202759),
(2, 'user2', 'HELLO\r\nWORLD\r\n!!!', 1676203050),
(3, '小明', '“允公允能，日新月异”的校训，表达了南开人的价值取向和精神品质。', 1676203617),
(4, '小明', '你好？世界！', 1676206949),
(5, '小明', '你好\r\n世界\r\n世界\r\n你好', 1676207046),
(6, '小明', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', 1676207134),
(7, 'root', 'wwwwwwwww', 1676207321),
(8, '小明', 'sadfgawfsd', 1676207450),
(9, '小明', 'lllllllll', 1676207637),
(10, '小明', 'oooooooooooo', 1676207790),
(11, '小明', 'yyyyyyyyyyyy', 1676207799),
(12, 'user1', '你好，世界！', 1676303671);

-- --------------------------------------------------------

--
-- 表的结构 `messageshow`
--

CREATE TABLE `messageshow` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `stu_id` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `per_message` varchar(500) DEFAULT NULL,
  `per_part` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `messageshow`
--

INSERT INTO `messageshow` (`id`, `name`, `stu_id`, `major`, `per_message`, `per_part`) VALUES
(1, '田翔宇', '2011748', '计算机科学与技术', '当代苦逼计算机人，常年奋战在修bug一线，不是在修bug就是在修bug的路上，但是还有头发。本人的愿望是30岁之前不脱发，顺便挣个小钱。', '负责问答板块页面与数据库的设计，承担结项展示PPT的制作。'),
(2, '颜欢', '2013459', '信息安全', '本人社恐又佛系....这种留言对我而言真就蛮尴尬的哈哈哈...呵！就酱紫辣', '在团队作业中，我主要负责新闻部分前台后台的界面设计和代码编写，以及团队个人信息的展示以及代码编写~'),
(3, '刘嗣旸', '2013458', '计算机科学与技术', '这里是不知道说什么的自我介绍，一个努力学习的程序员酱。\r\n喜欢摇滚、朋克，喜欢音乐（纯欣赏，不会演奏，更不会唱跳rap）\r\n二次元捏\r\n', '前台和后台模板嵌套和主页界面搭建（包括团队文档链接和作业下载）、前台用户账号和后台管理员账号系统、后台用户管理模块'),
(4, '施浩南', '2013350', '计算机科学与技术', '该成员没有留言。(（: >)他自己是这样说的）', '留言板模块相关功能');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1675769535),
('m130524_201442_init', 1675769540),
('m190124_110200_add_verification_token_column_to_user_table', 1675769541);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT '',
  `content` varchar(500) DEFAULT '',
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`) VALUES
(20, '我校获批2022年度天津市大学生创新创业拔尖项目立项\r\n', '南开新闻网讯（通讯员 李文茹）日前，天津市教育两委公布了2022年度天津市大学生创新创业拔尖项目立项名单，我校生命科学学院项目《“膜”王——细菌纤维素原材料行业开拓者》获批科技方向拔尖项目立项。\r\n\r\n　　“膜王”项目团队由微生物学博士后高歌、博士陈帅、硕士刘童童，保险学硕士金建崇，市场营销系本科生关腾龙等组成，项目从当前细菌纤维素市场痛点切入，开发出同时集优良菌株、新型生产工艺、高性能等优势于一身的新型细菌纤维素原材料产品——“膜王”。该产品的生产和推广将进一步推动国内以细菌纤维素为代表的生物材料产业发展，并积极响应国家的碳达峰政策，符合国家科研和产业布局计划。\r\n\r\n　　据悉，天津市大学生创新创业拔尖项目由市委教育工委、市教委设立，旨在培养和提高大学生创新、创意、创造、创业的意识和能力，助力高校就业创业教育、创业实践活动高质量发展，培育具有天津特色的高质量创新创业成果。本次全市共有13个项目获批立项，2021年度我校获批立项的《奇府——干细胞仿生赋能系统项目》在结项评审中获得优秀。', '2023-02-11 02:07:57'),
(21, '我校获批高校思想政治理论课教师研究专项重大课题攻关项目\r\n', '南开新闻网讯 （通讯员 郑杰）近日，教育部办公厅公布了2022年度高校思想政治理论课教师研究专项重大课题攻关项目立项结果，南开大学马克思主义学院付洪教授领衔申报的项目“‘大思政课’实践教学现状及体系构建研究”成功获批。\r\n\r\n　　据了解，该项目属于“教育部哲学社会科学研究重大课题攻关项目”，旨为深入贯彻落实习近平新时代中国特色社会主义思想，贯彻落实习近平总书记关于教育的重要论述，特别是在学校思想政治理论课教师座谈会上的重要讲话精神，大力提升思想政治理论课教师队伍教书育人能力素质，推动新时代思想政治理论课改革创新和高质量发展，不断增强思想政治理论课的思想性、理论性和亲和力、针对性，更好发挥高校思想政治理论课落实立德树人根本任务的关键课程作用。', '2023-02-11 02:09:05'),
(22, 'hhh', 'hhhhhhhhhhhhhhhhh', '2023-02-12 01:53:55');

-- --------------------------------------------------------

--
-- 表的结构 `newscom`
--

CREATE TABLE `newscom` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newscom`
--

INSERT INTO `newscom` (`id`, `content`, `date`) VALUES
(46, '有趣\r\n', '2023-02-09 09:31:29'),
(47, '', '2023-02-09 09:34:56'),
(48, '', '2023-02-09 09:36:04'),
(49, '嘎嘎嘎嘎嘎嘎', '2023-02-09 09:38:11'),
(50, '仅仅就', '2023-02-09 09:40:10'),
(51, '很有趣哎\r\n', '2023-02-09 09:49:40'),
(52, '斤斤计较', '2023-02-09 09:51:37'),
(53, '酷酷酷', '2023-02-09 10:02:03'),
(54, '111111155555', '2023-02-12 11:01:09'),
(55, 'OS', '2023-02-12 01:25:29'),
(56, 'hello，world！这是一条评论', '2023-02-13 04:53:05');

-- --------------------------------------------------------

--
-- 表的结构 `newscom2`
--

CREATE TABLE `newscom2` (
  `id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newscom2`
--

INSERT INTO `newscom2` (`id`, `content`, `date`) VALUES
(1, '嘎嘎嘎', '2023-02-09 09:57:28'),
(2, '嘎嘎嘎', '2023-02-09 09:57:53'),
(3, '哈哈哈', '2023-02-09 09:58:09'),
(4, '酷酷酷酷酷', '2023-02-09 10:02:11'),
(5, '有趣', '2023-02-11 02:28:19'),
(6, 'haohaohao', '2023-02-13 02:43:14');

-- --------------------------------------------------------

--
-- 表的结构 `newscom3`
--

CREATE TABLE `newscom3` (
  `id` int(11) NOT NULL,
  `content` varchar(200) DEFAULT '',
  `date` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newscom3`
--

INSERT INTO `newscom3` (`id`, `content`, `date`) VALUES
(1, '学习', '2023-02-11 02:31:31'),
(2, '哈哈哈哈哈哈', '2023-02-11 02:31:45');

-- --------------------------------------------------------

--
-- 表的结构 `newscom4`
--

CREATE TABLE `newscom4` (
  `id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newscom4`
--

INSERT INTO `newscom4` (`id`, `content`, `date`) VALUES
(1, '哈哈哈', '2023-02-11 02:40:14'),
(2, 'funny', '2023-02-11 02:40:31');

-- --------------------------------------------------------

--
-- 表的结构 `newscom5`
--

CREATE TABLE `newscom5` (
  `id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newscom5`
--

INSERT INTO `newscom5` (`id`, `content`, `date`) VALUES
(1, '有趣', '2023-02-11 03:10:46'),
(2, 'df', '2023-02-12 02:17:28');

-- --------------------------------------------------------

--
-- 表的结构 `newscom6`
--

CREATE TABLE `newscom6` (
  `id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newscom6`
--

INSERT INTO `newscom6` (`id`, `content`, `date`) VALUES
(1, '哈哈哈·\r\n', '2023-02-11 03:21:33');

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`ID`, `txt`) VALUES
(1, '南开大学于1937年遭侵华日军炸毁，学校南迁，与北京大学、清华大学组建国立长沙临时大学，1938年迁至昆明改名为国立西南联合大学。请问该历史是否正确？'),
(2, '自强不息，厚德载物是南开大学的校训吗？'),
(3, '南开大学的校旗是紫色的吗？'),
(4, '南开大学创办于1919年，创办人是著名爱国教育家严范孙和张伯苓，这句话是否正确？'),
(5, '南开大学是985，不是211，这句话是否正确？');

-- --------------------------------------------------------

--
-- 表的结构 `trueans`
--

CREATE TABLE `trueans` (
  `ID` int(11) NOT NULL,
  `TF` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `trueans`
--

INSERT INTO `trueans` (`ID`, `TF`, `reason`) VALUES
(1, 1, '本题表述正确，即南开大学于1937年遭侵华日军炸毁，学校南迁，与北京大学、清华大学组建国立长沙临时大学，1938年迁至昆明改名为国立西南联合大学。'),
(2, 0, '本题表述错误，“允公允能，日新月异”才是南开大学校训，而“自强不息，厚德载物”是清华大学的校训。'),
(3, 1, '本题表述正确，南开大学的校旗是紫色的。'),
(4, 1, '本题表述正确，南开大学创办于1919年，创办人是著名爱国教育家严范孙和张伯苓。'),
(5, 0, '本题表述错误，改革开放以来，经教育部与天津市共建支持，南开大学发展成为国家“211工程”和“985工程”重点建设的综合性研究型大学。');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(4, 'root', 'jT3Rp0BhlIUA7Aww59x2WmfRl1uTZR_T', '$2y$13$Dj4Lyj9s/f6TQw1Ca0Ykm.26JuJ6NZcpxXST7SNKSZniin3mqN6HC', NULL, 'root@example.com', 10, 1675771247, 1675771247, '8pDz3_lZhZuAM19AW1x2vU98U7aBZSDa_1675771247');

--
-- 转储表的索引
--

--
-- 表的索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`aid`,`username`);

--
-- 表的索引 `back_account`
--
ALTER TABLE `back_account`
  ADD PRIMARY KEY (`aid`,`username`);

--
-- 表的索引 `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `messageshow`
--
ALTER TABLE `messageshow`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newscom`
--
ALTER TABLE `newscom`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newscom2`
--
ALTER TABLE `newscom2`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newscom3`
--
ALTER TABLE `newscom3`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newscom4`
--
ALTER TABLE `newscom4`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newscom5`
--
ALTER TABLE `newscom5`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newscom6`
--
ALTER TABLE `newscom6`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `trueans`
--
ALTER TABLE `trueans`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `account`
--
ALTER TABLE `account`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `back_account`
--
ALTER TABLE `back_account`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用表AUTO_INCREMENT `messageshow`
--
ALTER TABLE `messageshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `newscom`
--
ALTER TABLE `newscom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- 使用表AUTO_INCREMENT `newscom2`
--
ALTER TABLE `newscom2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `newscom3`
--
ALTER TABLE `newscom3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `newscom4`
--
ALTER TABLE `newscom4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `newscom5`
--
ALTER TABLE `newscom5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `newscom6`
--
ALTER TABLE `newscom6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
