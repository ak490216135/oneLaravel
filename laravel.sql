/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-12-28 18:18:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tag` int(255) DEFAULT NULL,
  `date` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', null, '1111111', 'title', 'desc', 'content');
INSERT INTO `article` VALUES ('2', null, '222222222', 't2', 'd2', 'c2');
INSERT INTO `article` VALUES ('3', null, '0', '3333', '3333333', '333333333333333');
INSERT INTO `article` VALUES ('4', null, '0', '444', '4444444444444', '444444444444444444');
INSERT INTO `article` VALUES ('5', null, '0', '55', '55555555555', '555555555555555');
INSERT INTO `article` VALUES ('6', null, '0', '666666666', '66666666666666', '666666666666666');
INSERT INTO `article` VALUES ('7', null, '0', '7', '77', '777');
INSERT INTO `article` VALUES ('8', null, '0', '8', '88', '888');
INSERT INTO `article` VALUES ('9', null, '0', '9', '99', '999');
INSERT INTO `article` VALUES ('10', null, '0', '10', '101', '1011');
INSERT INTO `article` VALUES ('11', null, '0', '12', '122', '1222');
INSERT INTO `article` VALUES ('12', null, '0', 'ttt', null, 'contenttttttt');
INSERT INTO `article` VALUES ('13', null, '0', 'ttt', null, 'contenttttttt');
INSERT INTO `article` VALUES ('14', null, '0', 'ttt', null, 'contenttttttt');

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------
