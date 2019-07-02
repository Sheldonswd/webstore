# Host: localhost  (Version: 5.5.53)
# Date: 2018-07-16 13:35:30
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "daohang"
#

DROP TABLE IF EXISTS `daohang`;
CREATE TABLE `daohang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `ico` varchar(50) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `paixu` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

#
# Data for table "daohang"
#

/*!40000 ALTER TABLE `daohang` DISABLE KEYS */;
INSERT INTO `daohang` VALUES (1,'1','','','123','中国最大的IT社区和服务平台',0),(2,'1','','','123','只有高手分享的中文技术社区',0),(3,'1','','','123','面向开源及私有软件项目的git托管平台',0),(4,'1','','','123','国外编程相关的IT技术问答网站',0),(5,'1','','','123','一个专注于解决编程问题，提高开发技能的社区',0),(6,'1','','','123','与世界分享你的知识、经验和见解与世界分享你的知识、经验和见解',0),(7,'1','','','123','博客模式的技术分享社区',0),(8,'1','','','123','目前中国最大的开源技术社区',0),(9,'1','','','123','一个关于分享和探索的地方',0),(10,'1','','','123','中国最大的git平台',0),(11,'2','','','123','腾讯Web前端团队，代表作品WebQQ，致力于前端技术的研究',0),(12,'2','','','123','腾讯社交用户体验设计，简称ISUX，腾讯设计团队网站',0),(13,'2','','','123','百度Web前端研发部出品',0),(14,'2','','','123','用技术为体验提供无限可能',0),(15,'2','','','123','京东用户体验设计部出品',0),(16,'2','','','123','奇虎360旗下前端开发团队出品',0),(17,'2','','','123','由百度多个遵循统一技术体系的前端团队所组成',0),(18,'3','','','123','优秀的JavaScript代码库',0),(19,'3','','','123','基于HTML/CSS/Javscript的前端框架',0),(20,'3','','','123','构建数据驱动的web界面的渐进式框架',0),(21,'4','','','123',NULL,0),(22,'4','','','123',NULL,0),(23,'4','','','123',NULL,0),(24,'4','','','123',NULL,0),(25,'4','','','123',NULL,0),(26,'4','','','123',NULL,0),(27,'4','','','123',NULL,0),(28,'4','','','123',NULL,0),(29,'5','','','123','优秀设计师的贴心伴侣。',0),(30,'5','','','123','花瓣，陪你做生活的设计师',0),(31,'5','','','123','设计作品的交流平台',0),(32,'5','','','123','系列设计作品开放平台',0),(33,'5','','','123','图片分享类的社交网站',0),(34,'5','','','123','打开站酷,发现更好的设计!',0),(35,'5','','','123','互动多媒体网站收录平台',0),(39,'7','','','123',NULL,0),(40,'7','','','123',NULL,0),(41,'7','','','123',NULL,0),(42,'7','','','123',NULL,0),(43,'7','','','123',NULL,0),(44,'7','','','123',NULL,0),(45,'7','','','123',NULL,0),(46,'7','','','123',NULL,0),(47,'8','https://www.52pojie.cn/','./images/daohang/52pojie.jpg','吾爱破解论坛','吾爱破解论坛是致力于软件安全与病毒分析的非营利性技术论坛',0),(66,'8','www.baidu.com','','百度','',1);
/*!40000 ALTER TABLE `daohang` ENABLE KEYS */;

#
# Structure for table "leibie"
#

DROP TABLE IF EXISTS `leibie`;
CREATE TABLE `leibie` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `xuhao` int(3) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "leibie"
#

/*!40000 ALTER TABLE `leibie` DISABLE KEYS */;
INSERT INTO `leibie` VALUES (1,'开发社区',3),(2,'技术博客',4),(3,'参考文档',5),(4,'实用工具',6),(5,'设计资源',7),(6,'学无止境',2),(7,'网络运营',8),(8,'技术论坛',1);
/*!40000 ALTER TABLE `leibie` ENABLE KEYS */;

#
# Structure for table "user_reg_info"
#

DROP TABLE IF EXISTS `user_reg_info`;
CREATE TABLE `user_reg_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `ok` int(3) DEFAULT '0',
  `cishu` int(3) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "user_reg_info"
#

/*!40000 ALTER TABLE `user_reg_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_reg_info` ENABLE KEYS */;

#
# Structure for table "yiqi_feifa"
#

DROP TABLE IF EXISTS `yiqi_feifa`;
CREATE TABLE `yiqi_feifa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

#
# Data for table "yiqi_feifa"
#

/*!40000 ALTER TABLE `yiqi_feifa` DISABLE KEYS */;
INSERT INTO `yiqi_feifa` VALUES (30,'192.168.1.10','2018-07-14 11:02:14','绕过前端提交数据'),(31,'192.168.1.10','2018-07-14 11:03:18','绕过前端提交数据'),(32,'192.168.1.10','2018-07-14 11:04:07','绕过前端提交数据'),(33,'192.168.1.10','2018-07-14 11:05:09','绕过前端提交数据'),(34,'192.168.1.10','2018-07-14 11:05:17','绕过前端提交数据'),(35,'192.168.1.10','2018-07-14 11:06:15','绕过前端提交数据'),(36,'192.168.1.10','2018-07-14 11:06:47','绕过前端提交数据'),(37,'192.168.1.10','2018-07-14 11:29:12','绕过前端提交数据'),(38,'192.168.1.10','2018-07-14 11:29:33','绕过前端提交数据'),(39,'192.168.1.10','2018-07-14 11:29:35','绕过前端提交数据'),(40,'192.168.1.10','2018-07-14 11:29:54','绕过前端提交数据'),(41,'192.168.1.10','2018-07-14 11:31:25','绕过前端提交数据'),(42,'192.168.1.10','2018-07-14 11:31:52','绕过前端提交数据'),(43,'192.168.1.10','2018-07-14 11:32:11','绕过前端提交数据'),(44,'192.168.1.10','2018-07-15 11:05:29','绕过前端提交数据'),(45,'192.168.1.10','2018-07-15 15:23:30','绕过前端提交数据');
/*!40000 ALTER TABLE `yiqi_feifa` ENABLE KEYS */;

#
# Structure for table "yiqi_user"
#

DROP TABLE IF EXISTS `yiqi_user`;
CREATE TABLE `yiqi_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `vip` int(3) DEFAULT '0',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `zctime` varchar(50) DEFAULT NULL,
  `zcip` varchar(255) DEFAULT NULL,
  `dlip` varchar(255) DEFAULT NULL,
  `dltime` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "yiqi_user"
#

/*!40000 ALTER TABLE `yiqi_user` DISABLE KEYS */;
INSERT INTO `yiqi_user` VALUES (1,0,'admin','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,'192.168.1.10','2018-07-16 13:21:35');
/*!40000 ALTER TABLE `yiqi_user` ENABLE KEYS */;

#
# Structure for table "yiqi_user_login_info"
#

DROP TABLE IF EXISTS `yiqi_user_login_info`;
CREATE TABLE `yiqi_user_login_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `ok` int(3) DEFAULT '0',
  `cishu` int(3) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

#
# Data for table "yiqi_user_login_info"
#

/*!40000 ALTER TABLE `yiqi_user_login_info` DISABLE KEYS */;
INSERT INTO `yiqi_user_login_info` VALUES (30,'admin','192.168.1.10','2018-07-14 12:46:17',0,6),(31,'123456','192.168.1.10','2018-07-14 12:32:34',0,0),(32,'admin','192.168.1.10','2018-07-14 13:57:46',1,0),(33,'admin','192.168.1.10','2018-07-14 15:26:58',1,0),(34,'admin','192.168.1.10','2018-07-14 22:04:37',1,0),(35,'admin','192.168.1.10','2018-07-15 09:11:29',1,0),(36,'admin','192.168.1.10','2018-07-15 11:16:03',1,0),(37,'admin','192.168.1.10','2018-07-15 15:58:21',1,0),(38,'admin','192.168.1.10','2018-07-15 22:52:57',1,0),(39,'admin','192.168.1.10','2018-07-16 09:33:38',1,0),(40,'admin','192.168.1.10','2018-07-16 12:31:36',1,1),(41,'admin','192.168.1.10','2018-07-16 13:21:35',1,0);
/*!40000 ALTER TABLE `yiqi_user_login_info` ENABLE KEYS */;
