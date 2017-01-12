-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?09 �?23 �?10:11
-- 服务器版本: 5.5.40
-- PHP 版本: 5.6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `album`
--

-- --------------------------------------------------------

--
-- 表的结构 `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `leaf` smallint(2) NOT NULL DEFAULT '1' COMMENT '是否是叶子1是叶子0不是叶子',
  `address` varchar(255) NOT NULL COMMENT '存储地址',
  `state` smallint(2) NOT NULL DEFAULT '1' COMMENT '1启用0停用',
  `uptime` char(30) NOT NULL COMMENT '上传时间',
  `ip` varchar(50) DEFAULT NULL COMMENT '上传者ip',
  `md5` char(32) NOT NULL COMMENT '图片的MD5值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='相册和图片都用一个表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `album`
--

INSERT INTO `album` (`id`, `parent_id`, `title`, `leaf`, `address`, `state`, `uptime`, `ip`, `md5`) VALUES
(1, 0, 'u=512488808,1947245461&fm=21&gp=0.jpg', 1, 'Public/Uploads/2016-09-20/57e0e62d81802.jpg', 1, '1474356781', NULL, 'd2cc63e15094f957ee9ebc603651c3ff'),
(2, 0, 'u=1978205210,2226637880&fm=21&gp=0.jpg', 1, 'Public/Uploads/2016-09-20/57e0e62dadc74.jpg', 1, '1474356781', NULL, '981d8ef71d2cf3312b9f1a74d5053ec9'),
(3, 0, '二级文件夹', 0, '', 1, '', NULL, ''),
(4, 3, 'u=2223853973,2522494354&fm=21&gp=0.jpg', 1, 'Public/Uploads/2016-09-20/57e0e66386f84.jpg', 1, '1474356835', NULL, 'c5534f96e71980525aa379b269d33c37'),
(5, 3, 'u=3048407890,708373550&fm=21&gp=0.jpg', 1, 'Public/Uploads/2016-09-20/57e0e6638f75c.jpg', 1, '1474356835', NULL, 'b0e9be8a2f52f382019881730a74d09a'),
(6, 3, '三级文件夹', 0, '', 1, '', NULL, ''),
(7, 6, 'u=4284225736,2541214612&fm=21&gp=0.jpg', 1, 'Public/Uploads/2016-09-20/57e0e68ab70c2.jpg', 1, '1474356874', NULL, '6feec32b1d37079495d6c9f90fcbeab6'),
(8, 6, '下载 (1).jpg', 1, 'Public/Uploads/2016-09-20/57e0e68ac0991.jpg', 1, '1474356874', NULL, 'c3cc1e401cff1c39f202cfea1ea9269e'),
(9, 6, '下载 (2).jpg', 1, 'Public/Uploads/2016-09-20/57e0e68aca2e6.jpg', 1, '1474356874', NULL, '3f7748c9f4b2e0c7fdfe0b7e627b3cb0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
