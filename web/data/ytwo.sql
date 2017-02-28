/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : ytwo

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-02-27 17:24:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yii_follow
-- ----------------------------
DROP TABLE IF EXISTS `yii_follow`;
CREATE TABLE `yii_follow` (
  `uid` int(11) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yii_follow
-- ----------------------------
INSERT INTO `yii_follow` VALUES ('2', '1');
INSERT INTO `yii_follow` VALUES ('1', '2');

-- ----------------------------
-- Table structure for yii_msg
-- ----------------------------
DROP TABLE IF EXISTS `yii_msg`;
CREATE TABLE `yii_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `send_time` int(11) NOT NULL,
  `reply` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yii_msg
-- ----------------------------
INSERT INTO `yii_msg` VALUES ('30', '2', '1', 'djfjweofj', 'sdfsdf', '1', '1488164268', '0');
INSERT INTO `yii_msg` VALUES ('31', '2', '1', 'sdfasdf', 'asdfasdfwefwef', '1', '1488186592', '0');
INSERT INTO `yii_msg` VALUES ('32', '1', '2', 'sdfasdf', 'fwefwef', '0', '1488186695', '1');

-- ----------------------------
-- Table structure for yii_user
-- ----------------------------
DROP TABLE IF EXISTS `yii_user`;
CREATE TABLE `yii_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(225) NOT NULL,
  `pwd` char(32) NOT NULL,
  `authKey` char(200) NOT NULL,
  `accessToken` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yii_user
-- ----------------------------
INSERT INTO `yii_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'test100key', '100-token');
INSERT INTO `yii_user` VALUES ('2', 'zrb', '21232f297a57a5a743894a0e4a801fc3', '', '');
