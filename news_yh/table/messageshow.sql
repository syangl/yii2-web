/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-02-13 22:51:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `messageshow`
-- ----------------------------
DROP TABLE IF EXISTS `messageshow`;
CREATE TABLE `messageshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `stu_id` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `per_message` varchar(500) DEFAULT NULL,
  `per_part` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of messageshow
-- ----------------------------
INSERT INTO `messageshow` VALUES ('1', '田翔宇', '2011748', '计算机科学与技术', '当代苦逼计算机人，常年奋战在修bug一线，不是在修bug就是在修bug的路上，但是还有头发。本人的愿望是30岁之前不脱发，顺便挣个小钱。', '负责问答板块页面与数据库的设计，承担结项展示PPT的制作。');
INSERT INTO `messageshow` VALUES ('2', '颜欢', '2013459', '信息安全', '本人社恐又佛系....这种留言对我而言真就蛮尴尬的哈哈哈...呵！就酱紫辣', '在团队作业中，我主要负责新闻部分前台后台的界面设计和代码编写，以及团队个人信息的展示以及代码编写~');
INSERT INTO `messageshow` VALUES ('3', null, null, null, null, null);
INSERT INTO `messageshow` VALUES ('4', null, null, null, null, null);
