/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-02-12 19:31:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `content` varchar(500) DEFAULT '',
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('20', '我校获批2022年度天津市大学生创新创业拔尖项目立项\r\n', '南开新闻网讯（通讯员 李文茹）日前，天津市教育两委公布了2022年度天津市大学生创新创业拔尖项目立项名单，我校生命科学学院项目《“膜”王——细菌纤维素原材料行业开拓者》获批科技方向拔尖项目立项。\r\n\r\n　　“膜王”项目团队由微生物学博士后高歌、博士陈帅、硕士刘童童，保险学硕士金建崇，市场营销系本科生关腾龙等组成，项目从当前细菌纤维素市场痛点切入，开发出同时集优良菌株、新型生产工艺、高性能等优势于一身的新型细菌纤维素原材料产品——“膜王”。该产品的生产和推广将进一步推动国内以细菌纤维素为代表的生物材料产业发展，并积极响应国家的碳达峰政策，符合国家科研和产业布局计划。\r\n\r\n　　据悉，天津市大学生创新创业拔尖项目由市委教育工委、市教委设立，旨在培养和提高大学生创新、创意、创造、创业的意识和能力，助力高校就业创业教育、创业实践活动高质量发展，培育具有天津特色的高质量创新创业成果。本次全市共有13个项目获批立项，2021年度我校获批立项的《奇府——干细胞仿生赋能系统项目》在结项评审中获得优秀。', '2023-02-11 02:07:57');
INSERT INTO `news` VALUES ('21', '我校获批高校思想政治理论课教师研究专项重大课题攻关项目\r\n', '南开新闻网讯 （通讯员 郑杰）近日，教育部办公厅公布了2022年度高校思想政治理论课教师研究专项重大课题攻关项目立项结果，南开大学马克思主义学院付洪教授领衔申报的项目“‘大思政课’实践教学现状及体系构建研究”成功获批。\r\n\r\n　　据了解，该项目属于“教育部哲学社会科学研究重大课题攻关项目”，旨为深入贯彻落实习近平新时代中国特色社会主义思想，贯彻落实习近平总书记关于教育的重要论述，特别是在学校思想政治理论课教师座谈会上的重要讲话精神，大力提升思想政治理论课教师队伍教书育人能力素质，推动新时代思想政治理论课改革创新和高质量发展，不断增强思想政治理论课的思想性、理论性和亲和力、针对性，更好发挥高校思想政治理论课落实立德树人根本任务的关键课程作用。', '2023-02-11 02:09:05');