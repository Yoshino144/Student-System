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

 Date: 27/12/2019 16:33:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '这个表，他吧，就是干这个的。' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (3, '51513', 'b部分', '8514', '男', '012', 1, 1, 1, NULL, NULL);
INSERT INTO `student` VALUES (4, '5135', 't挺好', '84561', '男', '0210', 1, NULL, NULL, NULL, NULL);
INSERT INTO `student` VALUES (1, '121655', '三个人', '4654654', '男', '2018', 1, 1, 1, NULL, NULL);
INSERT INTO `student` VALUES (2, '54654', '得想办法', '64545', '男', '2012', 1, NULL, NULL, NULL, NULL);
INSERT INTO `student` VALUES (5, '35', 'h好的', '984651', '男', '210', 1, 1, 1, NULL, NULL);
INSERT INTO `student` VALUES (6, '1', '发条巨人', '984561', '男', '2020', 1, 11, NULL, NULL, NULL);
INSERT INTO `student` VALUES (7, '351', 'u；i月黑风高', '9856', '男', '2020', NULL, NULL, 1, NULL, NULL);
INSERT INTO `student` VALUES (8, '351', 'd的核心', '8954621', '男', '2020', 11, 1, NULL, NULL, NULL);
INSERT INTO `student` VALUES (9, '1', '头发也', '852', '男', '202', 1, NULL, 1, NULL, NULL);
INSERT INTO `student` VALUES (10, '35', '所以态度', '852', '男', '0200', 1, 1, NULL, NULL, NULL);
INSERT INTO `student` VALUES (11, '24651', 't挺好', '798465', '男', '2022', 1, 1, 1, NULL, NULL);
INSERT INTO `student` VALUES (12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
