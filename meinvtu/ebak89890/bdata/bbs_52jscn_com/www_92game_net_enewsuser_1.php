<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsuser`;");
E_C("CREATE TABLE `www_92game_net_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsuser` values('1','admin','90e47e9c179c2df893d8ae3446f94672','5iBLochGco5zAKTUg3Jf','|','1','0','1','0','5KoofpPH','35','1496590907','127.0.0.1','','','0','1496589586','127.0.0.1','1473224769','127.0.0.1','DeclpdfpIf3GAnJj8ImcV09T0THeBDLuRSHWAEn1PA6HTF7R','754Q0YRQgdny3sYhbfVR','59427','62143','55807','');");
E_D("replace into `www_92game_net_enewsuser` values('4','92game','62c3bb7a902536f834789396bb21b0b4','3HGLb8r3fn4RedJ0n7Eu','|','1','0','1','0','IBu42lbG','12','1475660960','39.74.123.132','','','0','1475658224','39.74.123.132','1473846772','175.10.120.18','jfMUBBhG0qs4mULWELUYUqZe2KF8uj3xo8EegrSJbnl4nKof','zH6i960Tm0jawHAIHdYQ','0','0','20748','');");

require("../../inc/footer.php");
?>