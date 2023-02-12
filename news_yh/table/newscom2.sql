/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-02-12 19:38:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `newscom2`
-- ----------------------------
DROP TABLE IF EXISTS `newscom2`;
CREATE TABLE `newscom2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom2
-- ----------------------------
INSERT INTO `newscom2` VALUES ('1', '嘎嘎嘎', '2023-02-09 09:57:28');
INSERT INTO `newscom2` VALUES ('2', '嘎嘎嘎', '2023-02-09 09:57:53');
INSERT INTO `newscom2` VALUES ('3', '哈哈哈', '2023-02-09 09:58:09');
INSERT INTO `newscom2` VALUES ('4', '酷酷酷酷酷', '2023-02-09 10:02:11');
INSERT INTO `newscom2` VALUES ('5', '有趣', '2023-02-11 02:28:19');
