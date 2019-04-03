/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost
 Source Database       : leave

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : utf-8

 Date: 04/03/2019 18:04:20 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员的数据表',
  `a_username` char(255) DEFAULT NULL COMMENT '管理员用户名',
  `a_password` char(255) DEFAULT NULL COMMENT '管理员密码',
  `a_addtime` char(255) DEFAULT NULL COMMENT '管理员账号添加时间',
  `a_state` tinyint(4) DEFAULT NULL COMMENT '管理员账号状态：是否可用',
  `a_status` tinyint(4) DEFAULT NULL COMMENT '管理员的类别：1老师，2学工助理',
  `a_email` char(255) DEFAULT NULL COMMENT '管理员邮箱',
  `a_phone` char(255) DEFAULT NULL COMMENT '管理员联系电话',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `class`
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '班级的表',
  `c_name` char(255) DEFAULT NULL COMMENT '班级名称',
  `c_addtime` char(255) DEFAULT NULL COMMENT '班级的添加时间',
  `c_grade` char(255) DEFAULT NULL COMMENT '班级所在的级别名称',
  `c_g_id` int(11) DEFAULT NULL COMMENT '班级所在的级别id',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `grade`
-- ----------------------------
DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '级别的表',
  `g_name` char(255) DEFAULT NULL COMMENT '级别的名称',
  `g_addtime` char(255) DEFAULT NULL COMMENT '级别的添加时间',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `leave`
-- ----------------------------
DROP TABLE IF EXISTS `leave`;
CREATE TABLE `leave` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '这是请假条的数据表',
  `l_s_card` char(255) DEFAULT NULL COMMENT '请假条中学生的学号',
  `l_s_username` char(255) DEFAULT NULL COMMENT '请假条中学生的姓名',
  `l_s_grade` char(255) DEFAULT NULL COMMENT '请假条中学生所在级别',
  `l_s_class` char(255) DEFAULT NULL COMMENT '请假条中学生所在班级',
  `l_s_phone` char(255) DEFAULT NULL COMMENT '请假条中学生手机号',
  `l_begintime` char(255) DEFAULT NULL COMMENT '请假开始时间',
  `l_endtime` char(255) DEFAULT NULL COMMENT '请假结束时间',
  `l_class_begin_time` char(255) DEFAULT NULL COMMENT '课假的开始时间',
  `l_class_end_time` char(255) DEFAULT NULL COMMENT '课假的结束时间',
  `l_night_begin_time` char(255) DEFAULT NULL COMMENT '夜假的开始时间',
  `l_night_end_time` char(255) DEFAULT NULL COMMENT '夜假的结束时间',
  `l_begin_class` char(255) DEFAULT NULL COMMENT '课假开始的第几大节',
  `l_end_class` char(255) DEFAULT NULL COMMENT '课假结束的第几大节',
  `l_day` int(11) DEFAULT NULL COMMENT '请假天数',
  `l_address` char(255) DEFAULT NULL COMMENT '请假前往的地点',
  `l_cause` text COMMENT '请假的原因',
  `l_charge` char(255) DEFAULT NULL COMMENT '请假条填写的负责人',
  `l_addtime` char(255) DEFAULT NULL COMMENT '请假条的添加时间',
  `l_state` tinyint(4) DEFAULT NULL COMMENT '请假条的状态，未销假为0',
  `l_logout` char(255) DEFAULT NULL COMMENT '销假时间的字段',
  `l_status` tinyint(4) DEFAULT NULL COMMENT '请假条的类型，长期为1，短期为2',
  `l_s_id` int(11) DEFAULT NULL COMMENT '请假条中学生的id',
  `l_c_id` int(11) DEFAULT NULL COMMENT '请假条中学生所在班级',
  `l_g_id` int(11) DEFAULT NULL COMMENT '请假条中学生所在的级别',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学生信息表',
  `s_card` char(255) DEFAULT NULL COMMENT '学生的学号',
  `s_username` char(255) DEFAULT NULL COMMENT '学生姓名',
  `s_phone` char(255) DEFAULT NULL COMMENT '学生联系方式',
  `s_addtime` char(255) DEFAULT NULL COMMENT '学生信息添加时间',
  `s_grade` char(255) DEFAULT NULL COMMENT '学生的年级，15,16,17',
  `s_class` char(255) DEFAULT NULL COMMENT '学生班级',
  `s_lastleave` char(255) DEFAULT NULL COMMENT '学生最后请假时间',
  `s_state` tinyint(4) DEFAULT NULL COMMENT '学生账号状态',
  `s_c_id` int(11) DEFAULT NULL COMMENT '学生所在班级，班级的id',
  `s_g_id` int(11) DEFAULT NULL COMMENT '学生所在年级，年级的id',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1773 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
