/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50629
Source Host           : localhost:3306
Source Database       : catalog

Target Server Type    : MYSQL
Target Server Version : 50629
File Encoding         : 65001

Date: 2016-11-13 23:24:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Первый товар', '777', 'Lorem ipsum dolor sit amet, quo feugait mentitum cu, rebum lorem scripta ad mei. Persius mandamus constituto ex mel. Mei no nostro corrumpit similique, per graeci molestie qualisque ea. Ea assum commodo vim, an soleat nominavi iracundia per.', 'images/pic.jpg');
INSERT INTO `products` VALUES ('2', 'Второй товар', '2344', 'Lorem ipsum dolor sit amet, quo feugait mentitum cu, rebum lorem scripta ad mei. Persius mandamus constituto ex mel. Mei no nostro corrumpit similique, per graeci molestie qualisque ea. Ea assum commodo vim, an soleat nominavi iracundia per.', 'images/pic.jpg');
INSERT INTO `products` VALUES ('3', 'Третий товар', '1233', 'Lorem ipsum dolor sit amet, quo feugait mentitum cu, rebum lorem scripta ad mei. Persius mandamus constituto ex mel. Mei no nostro corrumpit similique, per graeci molestie qualisque ea. Ea assum commodo vim, an soleat nominavi iracundia per.', 'images/pic.jpg');
INSERT INTO `products` VALUES ('4', 'Четвертый товар', '343', 'Lorem ipsum dolor sit amet, quo feugait mentitum cu, rebum lorem scripta ad mei. Persius mandamus constituto ex mel. Mei no nostro corrumpit similique, per graeci molestie qualisque ea. Ea assum commodo vim, an soleat nominavi iracundia per.', 'images/pic.jpg');
INSERT INTO `products` VALUES ('5', 'Пятый товар', '2222', 'Lorem ipsum dolor sit amet, quo feugait mentitum cu, rebum lorem scripta ad mei. Persius mandamus constituto ex mel. Mei no nostro corrumpit similique, per graeci molestie qualisque ea. Ea assum commodo vim, an soleat nominavi iracundia per.', 'images/pic.jpg');
INSERT INTO `products` VALUES ('77', 'Седьмой товар', '5678', 'Это новый товарчик', 'images/03f544613917945245041ea1581df0c2.jpg');
INSERT INTO `products` VALUES ('78', 'Восьмой товар', '9999', 'Это новый товарчик', 'images/f4e4b6af8c2d1b0e2111b045201aebc3.jpg');
INSERT INTO `products` VALUES ('79', 'Девятый товар', '8888', 'Это новый товарчик', 'images/1fd6b8f9b13318adc358fca5d1ea1b5b.jpg');
INSERT INTO `products` VALUES ('80', 'Десятый товар', '2333', 'Это новый товарчик', 'images/5677daf23249cd3061fec263776483bb.jpg');
INSERT INTO `products` VALUES ('81', '', '0', '', '');
INSERT INTO `products` VALUES ('82', '', '0', '', '');
INSERT INTO `products` VALUES ('83', '', '0', '', '');
INSERT INTO `products` VALUES ('84', '', '0', '', '');
INSERT INTO `products` VALUES ('85', '', '0', '', '');
INSERT INTO `products` VALUES ('86', '', '0', '', '');
INSERT INTO `products` VALUES ('87', '', '0', '', '');
INSERT INTO `products` VALUES ('88', '', '0', '', '');
INSERT INTO `products` VALUES ('89', '', '0', '', '');
INSERT INTO `products` VALUES ('90', '', '0', '', '');
INSERT INTO `products` VALUES ('91', '', '0', '', '');
