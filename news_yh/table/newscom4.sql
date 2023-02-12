/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-02-12 19:38:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `newscom4`
-- ----------------------------
DROP TABLE IF EXISTS `newscom4`;
CREATE TABLE `newscom4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom4
-- ----------------------------
INSERT INTO `newscom4` VALUES ('1', '哈哈哈', '2023-02-11 02:40:14');
INSERT INTO `newscom4` VALUES ('2', 'funny', '2023-02-11 02:40:31');
