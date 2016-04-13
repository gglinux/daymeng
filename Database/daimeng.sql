-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 09 月 04 日 18:20
-- 服务器版本: 5.5.38
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `daimeng`
--

-- --------------------------------------------------------

--
-- 表的结构 `dm_address`
--

CREATE TABLE IF NOT EXISTS `dm_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '收货地址ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `name` varchar(30) NOT NULL COMMENT '收件人姓名',
  `phone_number` varchar(30) NOT NULL COMMENT '收件电话',
  `postcode` varchar(30) NOT NULL COMMENT '收件邮编',
  `address` varchar(30) NOT NULL COMMENT '收货地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='收货地址' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_admin`
--

CREATE TABLE IF NOT EXISTS `dm_admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='管理员';

-- --------------------------------------------------------

--
-- 表的结构 `dm_campus_info`
--

CREATE TABLE IF NOT EXISTS `dm_campus_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '院校申请ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `success` tinyint(1) NOT NULL COMMENT '是否成功',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='院校申请信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_club_info`
--

CREATE TABLE IF NOT EXISTS `dm_club_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '社团申请ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `name` varchar(30) NOT NULL COMMENT '企业名称',
  `email` varchar(30) NOT NULL COMMENT '企业邮箱',
  `address` varchar(30) NOT NULL COMMENT '地址',
  `register_number` varchar(30) NOT NULL COMMENT '注册号',
  `scanner_address` varchar(30) NOT NULL COMMENT '扫描件地址',
  `code` varchar(30) NOT NULL COMMENT '组织机构代码',
  `card_id` varchar(30) NOT NULL COMMENT '身份证姓名',
  `card_address` varchar(30) NOT NULL COMMENT '证件照片地址',
  `phone_number` varchar(30) NOT NULL COMMENT '手机号码',
  `success` tinyint(1) NOT NULL COMMENT '是否成功',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='社团申请信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_community_comments`
--

CREATE TABLE IF NOT EXISTS `dm_community_comments` (
  `id` int(11) NOT NULL COMMENT '动态ID',
  `time` varchar(30) NOT NULL COMMENT '评论的时间',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `content` text NOT NULL COMMENT '评论内容'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='呆萌社区评论';

-- --------------------------------------------------------

--
-- 表的结构 `dm_company_info`
--

CREATE TABLE IF NOT EXISTS `dm_company_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '企业名称',
  `name` varchar(30) NOT NULL COMMENT '企业名称',
  `email` varchar(30) NOT NULL COMMENT '企业邮箱',
  `address` varchar(30) NOT NULL COMMENT '地址',
  `register_number` varchar(30) NOT NULL COMMENT '注册号',
  `scanner_address` varchar(30) NOT NULL COMMENT '扫描件地址',
  `code` varchar(30) NOT NULL COMMENT '组织机构代码',
  `id_name` varchar(30) NOT NULL COMMENT '身份证姓名',
  `idcard_photo_address` varchar(30) NOT NULL COMMENT '证件照片地址',
  `phone_number` varchar(30) NOT NULL COMMENT '手机号码',
  `success` tinyint(1) NOT NULL COMMENT '是否成功',
  `id` int(11) NOT NULL DEFAULT '0' COMMENT '企业申请ID',
  PRIMARY KEY (`user_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='企业申请信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_detailitem_comment`
--

CREATE TABLE IF NOT EXISTS `dm_detailitem_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '话题ID',
  `items_id` int(11) NOT NULL COMMENT '项目ID',
  `content` text NOT NULL COMMENT '话题内容',
  `time` varchar(30) NOT NULL COMMENT '话题产生时间',
  `comment_number` int(11) NOT NULL COMMENT '话题的评论数',
  `prise_numbe` int(11) NOT NULL COMMENT '话题的赞数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='详细项目评论' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_groupmsg`
--

CREATE TABLE IF NOT EXISTS `dm_groupmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '群发消息id',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `content` text NOT NULL COMMENT '内容',
  `time` varchar(30) NOT NULL COMMENT '群发时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='群发信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_items`
--

CREATE TABLE IF NOT EXISTS `dm_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '项目ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `items_description` text NOT NULL COMMENT '项目简介',
  `items_classes` varchar(30) NOT NULL COMMENT '项目类别',
  `position` varchar(30) NOT NULL COMMENT '筹集地点',
  `details` text NOT NULL COMMENT '详细内容',
  `time` varchar(30) NOT NULL COMMENT '项目生成时间',
  `gain` int(30) NOT NULL COMMENT '已经达到金额',
  `people` int(30) NOT NULL COMMENT '已经达到人数',
  `sup` int(11) NOT NULL COMMENT '支持数',
  `attention` int(11) NOT NULL COMMENT '关注数',
  `prise` int(11) NOT NULL COMMENT '赞的数目',
  `img` varchar(30) NOT NULL COMMENT '项目简介图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='项目' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_items_support`
--

CREATE TABLE IF NOT EXISTS `dm_items_support` (
  `items_id` int(11) NOT NULL COMMENT '项目ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `sup` tinyint(1) NOT NULL COMMENT '是否支持',
  `prise` tinyint(1) NOT NULL COMMENT '是否赞',
  `attention` tinyint(1) NOT NULL COMMENT '是否关注'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='项目支持';

-- --------------------------------------------------------

--
-- 表的结构 `dm_others_info`
--

CREATE TABLE IF NOT EXISTS `dm_others_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '其他组织申请',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `name` varchar(30) NOT NULL COMMENT '企业名称',
  `email` varchar(30) NOT NULL COMMENT '企业邮箱',
  `address` varchar(30) NOT NULL COMMENT '地址',
  `register_number` varchar(30) NOT NULL COMMENT '注册号',
  `scanner_address` varchar(30) NOT NULL COMMENT '扫描件地址',
  `code` varchar(30) NOT NULL COMMENT '组织机构代码',
  `card_id` varchar(30) NOT NULL COMMENT '身份证姓名',
  `card_address` varchar(30) NOT NULL COMMENT '证件照片地址',
  `phone_number` varchar(30) NOT NULL COMMENT '手机号码',
  `success` tinyint(1) NOT NULL COMMENT '是否成功',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='其他组织申请信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_person_crowfunding`
--

CREATE TABLE IF NOT EXISTS `dm_person_crowfunding` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '个人众筹ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `items_sup_id` int(11) NOT NULL COMMENT '支持的项目ID',
  `items_start_id` int(11) NOT NULL COMMENT '发起的项目ID',
  `items_attention_id` int(11) NOT NULL COMMENT '关注的项目ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='个人众筹' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_person_friends`
--

CREATE TABLE IF NOT EXISTS `dm_person_friends` (
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `friend_id` int(11) NOT NULL COMMENT '关注的好友ID'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='个人好友';

-- --------------------------------------------------------

--
-- 表的结构 `dm_person_info`
--

CREATE TABLE IF NOT EXISTS `dm_person_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '个人申请id',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `name` varchar(30) NOT NULL COMMENT '企业名称',
  `email` varchar(30) NOT NULL COMMENT '企业邮箱',
  `address` varchar(30) NOT NULL COMMENT '地址',
  `register_number` varchar(30) NOT NULL COMMENT '注册号',
  `scanner_address` varchar(30) NOT NULL COMMENT '扫描件地址',
  `code` varchar(30) NOT NULL COMMENT '组织机构代码',
  `card_id` varchar(30) NOT NULL COMMENT '身份证姓名',
  `card_address` varchar(30) NOT NULL COMMENT '证件照片地址',
  `phone_number` varchar(30) NOT NULL COMMENT '手机号码',
  `success` tinyint(1) NOT NULL COMMENT '是否成功',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='个人申请信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_privatemsg`
--

CREATE TABLE IF NOT EXISTS `dm_privatemsg` (
  `sender_id` int(11) NOT NULL COMMENT '发送者id(',
  `receiver_id` int(11) NOT NULL COMMENT '接受者id',
  `content` text NOT NULL COMMENT '内容',
  `time` varchar(30) NOT NULL COMMENT '发送时间'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='私信';

-- --------------------------------------------------------

--
-- 表的结构 `dm_repay`
--

CREATE TABLE IF NOT EXISTS `dm_repay` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回报ID',
  `items_id` int(11) NOT NULL COMMENT '项目ID',
  `money` int(11) NOT NULL COMMENT '支持金额',
  `content` text NOT NULL COMMENT '回报内容',
  `img` varchar(30) NOT NULL COMMENT '说明图片地址',
  `limits` int(11) NOT NULL COMMENT '限定名额',
  `send_money` int(11) NOT NULL COMMENT '运费',
  `time` varchar(30) NOT NULL COMMENT '回报时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='回报信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_replymsg`
--

CREATE TABLE IF NOT EXISTS `dm_replymsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回复信息ID',
  `sender_id` int(11) NOT NULL COMMENT '发消息者ID',
  `receiver_id` int(11) NOT NULL COMMENT '接收者ID',
  `content` text NOT NULL COMMENT '内容',
  `time` varchar(30) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='回复信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_systemmsg`
--

CREATE TABLE IF NOT EXISTS `dm_systemmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '消息ID',
  `time` varchar(30) NOT NULL COMMENT '消息发送时间',
  `content` text NOT NULL COMMENT '内容',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='系统消息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_topics`
--

CREATE TABLE IF NOT EXISTS `dm_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '动态ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `content` text NOT NULL COMMENT '动态内容',
  `time` varchar(30) NOT NULL COMMENT '时间',
  `comment_numebr` int(11) NOT NULL COMMENT '话题的评论数',
  `prise_number` int(11) NOT NULL COMMENT '话题的赞数',
  `img` varchar(30) NOT NULL COMMENT '说说图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='说说' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_trade_info`
--

CREATE TABLE IF NOT EXISTS `dm_trade_info` (
  `id int` int(11) NOT NULL AUTO_INCREMENT COMMENT '交易ID',
  `repay_id` int(11) NOT NULL COMMENT '回报ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `items_id` int(11) NOT NULL COMMENT '项目ID',
  `time` varchar(30) NOT NULL COMMENT '交易生成时间',
  `money` int(11) NOT NULL COMMENT '金额',
  PRIMARY KEY (`id int`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='交易信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_user`
--

CREATE TABLE IF NOT EXISTS `dm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(30) NOT NULL COMMENT '账号',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `lock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '锁',
  `niker` varchar(30) NOT NULL COMMENT '昵称',
  `logintime` varchar(30) NOT NULL COMMENT '后一次登陆时间',
  `loginip` varchar(30) NOT NULL COMMENT '最后一次登陆ip',
  `public` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启公众平台',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='用户登陆' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dm_user_info`
--

CREATE TABLE IF NOT EXISTS `dm_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `img` varchar(30) NOT NULL COMMENT '个人图片路径',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `bird` varchar(30) NOT NULL COMMENT '出生日期',
  `address` varchar(30) NOT NULL COMMENT '地址',
  `person_description` varchar(30) NOT NULL COMMENT '个人说明',
  `last_change_time` varchar(30) NOT NULL COMMENT '最后一次更改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='用户信息' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
