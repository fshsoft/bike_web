-- phpMyAdmin SQL Dump
-- version 4.0.3
-- http://www.phpmyadmin.net
--
-- 主机: qdm155041477.my3w.com
-- 生成日期: 2017 年 05 月 20 日 15:01
-- 服务器版本: 5.1.48-log
-- PHP 版本: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `qdm155041477_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `bike_comment`
--

CREATE TABLE IF NOT EXISTS `bike_comment` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接id',
  `name` varchar(20) NOT NULL COMMENT '游客昵称',
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL COMMENT '评论内容',
  `ip` varchar(20) NOT NULL,
  `createtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
