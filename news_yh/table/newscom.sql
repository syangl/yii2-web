/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-02-12 19:38:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `newscom`
-- ----------------------------
DROP TABLE IF EXISTS `newscom`;
CREATE TABLE `newscom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `date` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom
-- ----------------------------
INSERT INTO `newscom` VALUES ('46', '有趣\r\n', '2023-02-09 09:31:29');
INSERT INTO `newscom` VALUES ('47', '', '2023-02-09 09:34:56');
INSERT INTO `newscom` VALUES ('48', '', '2023-02-09 09:36:04');
INSERT INTO `newscom` VALUES ('49', '嘎嘎嘎嘎嘎嘎', '2023-02-09 09:38:11');
INSERT INTO `newscom` VALUES ('50', '仅仅就', '2023-02-09 09:40:10');
INSERT INTO `newscom` VALUES ('51', '很有趣哎\r\n', '2023-02-09 09:49:40');
INSERT INTO `newscom` VALUES ('52', '斤斤计较', '2023-02-09 09:51:37');
INSERT INTO `newscom` VALUES ('53', '酷酷酷', '2023-02-09 10:02:03');
INSERT INTO `newscom` VALUES ('54', '111111155555', '2023-02-12 11:01:09');
