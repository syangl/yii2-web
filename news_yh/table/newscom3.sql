/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-02-12 19:38:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `newscom3`
-- ----------------------------
DROP TABLE IF EXISTS `newscom3`;
CREATE TABLE `newscom3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT '',
  `date` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom3
-- ----------------------------
INSERT INTO `newscom3` VALUES ('1', '学习', '2023-02-11 02:31:31');
INSERT INTO `newscom3` VALUES ('2', '哈哈哈哈哈哈', '2023-02-11 02:31:45');
