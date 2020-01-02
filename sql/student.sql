/*
 Navicat Premium Data Transfer

 Source Server         : MySQl
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : school

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 02/01/2020 15:34:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_name` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `number` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '账号',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `c_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '创建时间',
  `last_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '登陆时间',
  `delete_flag` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'root', 'root', 'root', '2019-12-28 11:40:07', '2020-01-02 15:31:31', '1');
INSERT INTO `admin` VALUES (5, 'asd', 'asd', 'asd', '2019-12-28 11:40:07', '2019-12-28 11:40:07', '1');
INSERT INTO `admin` VALUES (2, 'admin', 'admin', 'admin', '2019-12-28 11:40:07', '2019-13-12 20:45:12', '1');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `class_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '班级名',
  `college_id` int(10) NULL DEFAULT NULL COMMENT '学院id',
  `major_id` int(10) NULL DEFAULT NULL COMMENT '专业id',
  `c_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '创建时间',
  `u_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '修改时间',
  `delete_flag` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, '二班', 1, 1, '2019-12-28 11:40:07', '2019-12-28 11:40:07', '1');
INSERT INTO `class` VALUES (2, '一班', 2, 2, '2019-12-28 11:40:07\r\n', '2019-12-28 11:40:07\r\n', '1');
INSERT INTO `class` VALUES (3, '三班', 1, 1, '2019-12-31 14:57:02', '2019-12-28 11:40:07', '1');
INSERT INTO `class` VALUES (4, '二班', 2, 2, '2019-12-31 14:57:30', '2019-12-31 14:57:30', '1');
INSERT INTO `class` VALUES (5, '五班', 1, 3, '2019-12-31 16:41:01', '2019-12-31 17:34:42', '1');

-- ----------------------------
-- Table structure for college
-- ----------------------------
DROP TABLE IF EXISTS `college`;
CREATE TABLE `college`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `college_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '学院名',
  `c_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '创建时间',
  `u_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '修改时间',
  `delete_flag` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of college
-- ----------------------------
INSERT INTO `college` VALUES (1, '计算机科学学院', '2019-12-28 11:40:07', '2019-12-28 11:40:07', '1');
INSERT INTO `college` VALUES (2, '母猪养护学院', '2019-12-28 11:40:07\r\n', '2019-12-28 11:40:07\r\n', '1');
INSERT INTO `college` VALUES (3, '美术学院', '2019-12-28 11:40:07', '2019-12-28 11:40:07', '1');
INSERT INTO `college` VALUES (4, '土木学院', '2019-12-28 11:40:07', '2019-12-28 11:40:07', '1');
INSERT INTO `college` VALUES (5, '数学学院', '2019-12-31 11:17:27', '2019-12-31 17:15:57', '1');

-- ----------------------------
-- Table structure for major
-- ----------------------------
DROP TABLE IF EXISTS `major`;
CREATE TABLE `major`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `major_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '专业名',
  `college_id` int(11) NULL DEFAULT NULL COMMENT '学院id',
  `c_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '创建时间',
  `u_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '修改时间',
  `delete_flag` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of major
-- ----------------------------
INSERT INTO `major` VALUES (1, '软件工程', 1, '2019-12-28 11:40:07', '2019-12-28 11:40:07', '1');
INSERT INTO `major` VALUES (2, '母猪产后护理', 2, '2019-12-28 11:40:07\r\n', '2019-12-28 11:40:07\r\n', '1');
INSERT INTO `major` VALUES (3, '物联网工程', 1, '2019-12-31 11:36:11', '2019-12-31 17:23:35', '1');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `student_num` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学号',
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `phone_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号',
  `sex` enum('男','女') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '性别',
  `year` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '入学年份',
  `college_id` int(30) NULL DEFAULT NULL COMMENT '学院id',
  `major_id` int(30) NULL DEFAULT NULL COMMENT '专业id',
  `class_id` int(30) NULL DEFAULT NULL COMMENT '班级id',
  `c_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '创建时间',
  `u_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '修改时间',
  `delete_flag` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 69 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '这个表，他吧，就是干这个的。' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, '159874563', '偷偷摸摸', '12587496542', '男', '2017', 2, 2, 1, '2018-1-3', '2019-12-31', '1');
INSERT INTO `student` VALUES (2, '159458763', '王八犊子', '12845967521', '女', '2018', 1, 3, 5, '2018-5-6', '2019-12-31', '1');
INSERT INTO `student` VALUES (3, '254789615', '月黑风高', '12589456325', '男', '2018', 1, 1, 1, '2018-4-1', '2019-12-31', '1');
INSERT INTO `student` VALUES (4, '154825462', '梁淼', '15975364826', '男', '2013', 2, 2, 2, '2019-12-28', '2019-12-28', '1');
INSERT INTO `student` VALUES (68, '159874563', '偷偷摸摸', '12587496542', '男', '2017', 1, 1, 1, '2019-12-31', '2019-12-31', '1');

SET FOREIGN_KEY_CHECKS = 1;
