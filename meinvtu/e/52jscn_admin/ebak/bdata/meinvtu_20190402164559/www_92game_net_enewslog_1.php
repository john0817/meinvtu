<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewslog`;");
E_C("CREATE TABLE `www_92game_net_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewslog` values('1','admin','2016-09-07 13:06:14','127.0.0.1','1','','0','55807');");
E_D("replace into `www_92game_net_enewslog` values('2','admin','2016-09-08 17:49:29','127.0.0.1','1','','0','65202');");
E_D("replace into `www_92game_net_enewslog` values('3','admin','2016-09-08 22:08:58','127.0.0.1','1','','0','62096');");
E_D("replace into `www_92game_net_enewslog` values('4','admin','2016-09-11 15:39:57','127.0.0.1','1','','0','50229');");
E_D("replace into `www_92game_net_enewslog` values('5','admin','2016-09-11 17:04:06','60.181.132.102','1','','0','57189');");
E_D("replace into `www_92game_net_enewslog` values('6','admin','2016-09-11 17:09:23','60.181.132.102','1','','0','50375');");
E_D("replace into `www_92game_net_enewslog` values('7','admin','2016-09-11 17:09:36','60.181.132.102','1','','0','56441');");
E_D("replace into `www_92game_net_enewslog` values('8','92game','2016-09-12 09:00:36','115.237.84.30','0','','0','47149');");
E_D("replace into `www_92game_net_enewslog` values('9','admin','2016-09-12 09:00:43','115.237.84.30','0','','0','49381');");
E_D("replace into `www_92game_net_enewslog` values('10','admin','2016-09-12 16:14:31','60.181.132.102','0','','0','3595');");
E_D("replace into `www_92game_net_enewslog` values('11','admin','2016-09-12 16:14:37','60.181.132.102','1','','0','3588');");
E_D("replace into `www_92game_net_enewslog` values('12','admin','2016-09-12 16:15:19','60.181.132.102','1','','0','3652');");
E_D("replace into `www_92game_net_enewslog` values('13','admin','2016-09-12 18:47:25','60.181.132.102','1','','0','3508');");
E_D("replace into `www_92game_net_enewslog` values('14','admin','2016-09-12 18:49:48','60.181.132.102','1','','0','3802');");
E_D("replace into `www_92game_net_enewslog` values('15','admin','2016-09-12 19:02:09','60.181.132.102','1','','0','4399');");
E_D("replace into `www_92game_net_enewslog` values('16','admin','2016-09-12 19:03:04','60.181.132.102','1','','0','4386');");
E_D("replace into `www_92game_net_enewslog` values('17','admin','2016-09-12 20:56:45','60.181.132.102','1','','0','3321');");
E_D("replace into `www_92game_net_enewslog` values('18','admin','2016-09-12 22:27:55','60.181.132.102','1','','0','1863');");
E_D("replace into `www_92game_net_enewslog` values('19','admin','2016-09-12 22:28:49','60.181.132.102','1','','0','1953');");
E_D("replace into `www_92game_net_enewslog` values('20','zh','2016-09-13 00:35:00','211.149.197.136','1','','0','15152');");
E_D("replace into `www_92game_net_enewslog` values('21','zh','2016-09-13 00:35:14','211.149.197.136','1','','0','18997');");
E_D("replace into `www_92game_net_enewslog` values('22','zh','2016-09-13 00:35:27','211.149.197.136','1','','0','22001');");
E_D("replace into `www_92game_net_enewslog` values('23','zh','2016-09-13 00:35:50','211.149.197.136','1','','0','28112');");
E_D("replace into `www_92game_net_enewslog` values('24','zh','2016-09-13 00:36:05','211.149.197.136','1','','0','32177');");
E_D("replace into `www_92game_net_enewslog` values('25','zh','2016-09-13 00:36:30','211.149.197.136','1','','0','38554');");
E_D("replace into `www_92game_net_enewslog` values('26','admin','2016-09-13 14:13:10','60.181.132.102','1','','0','4675');");
E_D("replace into `www_92game_net_enewslog` values('27','admin','2016-09-13 14:43:02','211.149.197.136','1','','0','49913');");
E_D("replace into `www_92game_net_enewslog` values('28','admin','2016-09-13 14:43:34','211.149.197.136','1','','0','64686');");
E_D("replace into `www_92game_net_enewslog` values('29','admin','2016-09-13 14:44:08','60.181.132.102','1','','0','4670');");
E_D("replace into `www_92game_net_enewslog` values('30','zh','2016-09-13 14:53:29','211.149.197.136','1','','0','62105');");
E_D("replace into `www_92game_net_enewslog` values('31','adminn.cn','2016-09-13 15:28:29','10.148.99.52','0','','0','39142');");
E_D("replace into `www_92game_net_enewslog` values('32','zh','2016-09-13 15:29:46','10.148.99.84','1','','0','19299');");
E_D("replace into `www_92game_net_enewslog` values('33','92game','2016-09-13 17:37:19','42.48.102.62','0','','0','17112');");
E_D("replace into `www_92game_net_enewslog` values('34','admin','2016-09-13 17:37:26','42.48.102.62','0','','0','31303');");
E_D("replace into `www_92game_net_enewslog` values('35','admin','2016-09-13 17:37:32','42.48.102.62','0','','0','26837');");
E_D("replace into `www_92game_net_enewslog` values('36','zh','2016-09-13 18:53:48','211.149.197.136','1','','0','13067');");
E_D("replace into `www_92game_net_enewslog` values('37','zh','2016-09-13 21:36:35','60.181.135.55','1','','0','10770');");
E_D("replace into `www_92game_net_enewslog` values('38','92game','2016-09-14 08:03:23','42.48.102.65','0','','0','33111');");
E_D("replace into `www_92game_net_enewslog` values('39','zh','2016-09-14 11:07:31','175.10.120.18','1','','0','9924');");
E_D("replace into `www_92game_net_enewslog` values('40','zh','2016-09-14 13:24:04','60.181.135.55','0','','0','10019');");
E_D("replace into `www_92game_net_enewslog` values('41','zh','2016-09-14 13:24:10','60.181.135.55','1','','0','10019');");
E_D("replace into `www_92game_net_enewslog` values('42','zh','2016-09-14 13:26:43','60.181.135.55','1','','0','10217');");
E_D("replace into `www_92game_net_enewslog` values('43','zh','2016-09-14 14:40:21','27.38.9.72','1','','0','14891');");
E_D("replace into `www_92game_net_enewslog` values('44','zh','2016-09-14 17:33:10','60.181.135.55','1','','0','10612');");
E_D("replace into `www_92game_net_enewslog` values('45','92game','2016-09-14 17:51:59','175.10.120.18','0','','0','52918');");
E_D("replace into `www_92game_net_enewslog` values('46','zh','2016-09-14 17:52:05','175.10.120.18','1','','0','55846');");
E_D("replace into `www_92game_net_enewslog` values('47','92game','2016-09-14 18:00:05','175.10.120.18','1','','0','34658');");
E_D("replace into `www_92game_net_enewslog` values('48','zh','2016-09-14 18:03:52','60.181.135.55','1','','0','13144');");
E_D("replace into `www_92game_net_enewslog` values('49','92game','2016-09-15 10:24:25','58.20.85.155','0','','0','14945');");
E_D("replace into `www_92game_net_enewslog` values('50','adminn.cn','2016-09-18 10:21:55','113.246.92.13','1','','0','4331');");
E_D("replace into `www_92game_net_enewslog` values('51','92game','2016-09-26 17:52:54','127.0.0.1','1','','0','54425');");
E_D("replace into `www_92game_net_enewslog` values('52','92game','2016-09-26 19:36:43','127.0.0.1','1','','0','63152');");
E_D("replace into `www_92game_net_enewslog` values('53','adminn.cn','2016-09-26 19:40:33','127.0.0.1','1','','0','63449');");
E_D("replace into `www_92game_net_enewslog` values('54','adminn.cn','2016-09-27 12:16:32','127.0.0.1','1','','0','61730');");
E_D("replace into `www_92game_net_enewslog` values('55','adminn.cn','2016-09-27 13:05:21','127.0.0.1','1','','0','64524');");
E_D("replace into `www_92game_net_enewslog` values('56','adminn.cn','2016-09-27 16:46:32','127.0.0.1','1','','0','64733');");
E_D("replace into `www_92game_net_enewslog` values('57','adminn.cn','2016-09-27 19:46:33','127.0.0.1','1','','0','49470');");
E_D("replace into `www_92game_net_enewslog` values('58','adminn.cn','2016-09-27 20:47:57','127.0.0.1','1','','0','53703');");
E_D("replace into `www_92game_net_enewslog` values('59','adminn.cn','2016-10-02 10:24:42','222.133.24.242','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('60','admin','2016-10-02 10:25:45','222.133.24.242','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('61','92game','2016-10-02 11:05:37','222.133.24.242','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('62','92game','2016-10-02 13:27:41','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('63','admin','2016-10-02 13:30:24','172.87.31.13','0','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('64','admin','2016-10-02 13:30:32','172.87.31.13','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('65','92game','2016-10-02 22:09:56','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('66','92game','2016-10-02 23:29:34','39.74.123.132','0','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('67','92game','2016-10-02 23:29:41','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('68','92game','2016-10-03 23:54:00','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('69','92game','2016-10-04 13:52:25','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('70','admin','2016-10-04 16:28:11','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('71','admin','2016-10-04 17:14:05','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('72','92game','2016-10-04 17:15:22','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('73','92game','2016-10-05 17:03:37','39.74.123.132','0','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('74','92game','2016-10-05 17:03:44','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('75','92game','2016-10-05 17:49:20','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('76','admin','2016-10-06 10:42:43','39.74.123.132','1','','0','0');");
E_D("replace into `www_92game_net_enewslog` values('77','admin','2017-06-03 23:58:33','127.0.0.1','0','','0','63035');");
E_D("replace into `www_92game_net_enewslog` values('78','admin','2017-06-04 00:07:31','127.0.0.1','0','','0','61261');");
E_D("replace into `www_92game_net_enewslog` values('79','admin','2017-06-04 00:56:19','127.0.0.1','0','','0','57107');");
E_D("replace into `www_92game_net_enewslog` values('80','admin','2017-06-04 00:59:22','127.0.0.1','1','','0','57107');");
E_D("replace into `www_92game_net_enewslog` values('81','admin','2017-06-04 15:08:41','127.0.0.1','1','','0','59649');");
E_D("replace into `www_92game_net_enewslog` values('82','admin','2017-06-04 16:53:36','127.0.0.1','1','','0','63898');");
E_D("replace into `www_92game_net_enewslog` values('83','admin','2017-06-04 17:27:21','127.0.0.1','1','','0','60139');");
E_D("replace into `www_92game_net_enewslog` values('84','admin','2017-06-04 17:34:27','127.0.0.1','1','','0','63934');");
E_D("replace into `www_92game_net_enewslog` values('85','admin','2017-06-04 20:40:23','127.0.0.1','1','','0','58486');");
E_D("replace into `www_92game_net_enewslog` values('86','admin','2017-06-04 20:52:07','127.0.0.1','1','','0','58273');");
E_D("replace into `www_92game_net_enewslog` values('87','admin','2017-06-04 23:12:21','127.0.0.1','1','','0','61258');");
E_D("replace into `www_92game_net_enewslog` values('88','admin','2017-06-04 23:19:46','127.0.0.1','1','','0','62143');");
E_D("replace into `www_92game_net_enewslog` values('89','admin','2017-06-04 23:41:47','127.0.0.1','1','','0','59427');");
E_D("replace into `www_92game_net_enewslog` values('90','admin','2017-08-15 18:32:02','183.14.133.226','1','','0','33371');");
E_D("replace into `www_92game_net_enewslog` values('91','admin','2017-08-15 20:24:08','183.14.133.226','1','','0','62978');");
E_D("replace into `www_92game_net_enewslog` values('92','admin','2017-08-15 20:26:25','183.14.133.226','1','','0','52917');");
E_D("replace into `www_92game_net_enewslog` values('93','admin','2017-08-16 17:31:50','183.14.133.226','0','','0','43423');");
E_D("replace into `www_92game_net_enewslog` values('94','admin','2017-08-16 17:32:08','183.14.133.226','1','','0','29761');");
E_D("replace into `www_92game_net_enewslog` values('95','admin','2017-08-16 20:20:21','183.14.133.226','0','','0','9922');");
E_D("replace into `www_92game_net_enewslog` values('96','admin','2017-08-16 20:20:34','183.14.133.226','1','','0','55730');");
E_D("replace into `www_92game_net_enewslog` values('97','admin','2017-08-16 20:40:51','183.14.133.226','1','','0','44806');");
E_D("replace into `www_92game_net_enewslog` values('98','admin','2017-08-16 20:43:22','183.14.133.226','1','','0','34122');");
E_D("replace into `www_92game_net_enewslog` values('99','admin','2017-09-05 09:58:08','183.14.29.78','1','','0','46682');");
E_D("replace into `www_92game_net_enewslog` values('100','admin','2017-09-11 09:56:13','119.137.34.29','0','','0','11665');");
E_D("replace into `www_92game_net_enewslog` values('101','admin','2017-09-11 09:56:23','14.28.139.140','1','','0','15158');");
E_D("replace into `www_92game_net_enewslog` values('102','admin','2017-09-11 09:56:50','119.137.34.29','1','','0','35769');");
E_D("replace into `www_92game_net_enewslog` values('103','admin','2019-03-28 15:53:27','::1','0','','0','62398');");
E_D("replace into `www_92game_net_enewslog` values('104','admin','2019-03-28 16:01:43','::1','0','','0','62898');");
E_D("replace into `www_92game_net_enewslog` values('105','admin','2019-03-28 16:15:44','::1','1','','0','63764');");
E_D("replace into `www_92game_net_enewslog` values('106','admin','2019-03-28 16:33:18','::1','1','','0','65012');");
E_D("replace into `www_92game_net_enewslog` values('107','admin','2019-03-28 17:45:02','::1','1','','0','53386');");
E_D("replace into `www_92game_net_enewslog` values('108','admin','2019-03-28 19:58:47','::1','1','','0','62640');");
E_D("replace into `www_92game_net_enewslog` values('109','admin','2019-03-28 20:16:41','::1','1','','0','64232');");
E_D("replace into `www_92game_net_enewslog` values('110','admin','2019-03-29 11:34:48','::1','1','','0','55749');");
E_D("replace into `www_92game_net_enewslog` values('111','admin','2019-03-29 14:24:15','::1','1','','0','51746');");
E_D("replace into `www_92game_net_enewslog` values('112','admin','2019-03-29 15:54:54','::1','1','','0','57571');");
E_D("replace into `www_92game_net_enewslog` values('113','admin','2019-03-29 16:38:08','::1','1','','0','60894');");
E_D("replace into `www_92game_net_enewslog` values('114','admin','2019-03-29 16:56:24','::1','1','','0','62505');");
E_D("replace into `www_92game_net_enewslog` values('115','admin','2019-03-29 18:14:00','::1','1','','0','52444');");
E_D("replace into `www_92game_net_enewslog` values('116','admin','2019-03-29 18:26:10','::1','0','','0','53382');");
E_D("replace into `www_92game_net_enewslog` values('117','admin','2019-03-29 18:26:19','::1','1','','0','53383');");
E_D("replace into `www_92game_net_enewslog` values('118','admini','2019-03-29 19:47:37','::1','0','','0','61011');");
E_D("replace into `www_92game_net_enewslog` values('119','admin','2019-03-29 19:47:51','::1','1','','0','61030');");
E_D("replace into `www_92game_net_enewslog` values('120','admin','2019-03-29 19:51:26','::1','1','','0','61344');");
E_D("replace into `www_92game_net_enewslog` values('121','admin','2019-03-30 10:15:46','::1','1','','0','50479');");
E_D("replace into `www_92game_net_enewslog` values('122','admin','2019-03-30 12:12:04','::1','1','','0','58892');");
E_D("replace into `www_92game_net_enewslog` values('123','admin','2019-03-30 14:43:59','::1','1','','0','53476');");
E_D("replace into `www_92game_net_enewslog` values('124','admin','2019-03-30 17:41:27','::1','1','','0','57592');");
E_D("replace into `www_92game_net_enewslog` values('125','admin','2019-03-30 19:48:57','::1','1','','0','62274');");
E_D("replace into `www_92game_net_enewslog` values('126','admin','2019-03-30 22:04:49','::1','1','','0','59339');");
E_D("replace into `www_92game_net_enewslog` values('127','admin','2019-04-01 16:44:54','::1','0','','0','60484');");
E_D("replace into `www_92game_net_enewslog` values('128','admin','2019-04-01 16:45:05','::1','1','','0','60497');");
E_D("replace into `www_92game_net_enewslog` values('129','admin','2019-04-01 20:16:19','::1','1','','0','50451');");
E_D("replace into `www_92game_net_enewslog` values('130','admin','2019-04-01 21:27:58','::1','1','','0','52630');");
E_D("replace into `www_92game_net_enewslog` values('131','admin','2019-04-02 11:38:54','::1','1','','0','60700');");
E_D("replace into `www_92game_net_enewslog` values('132','admin','2019-04-02 11:51:50','::1','1','','0','62472');");
E_D("replace into `www_92game_net_enewslog` values('133','admin','2019-04-02 12:17:31','::1','1','','0','50448');");
E_D("replace into `www_92game_net_enewslog` values('134','admin','2019-04-02 12:39:28','::1','1','','0','54171');");
E_D("replace into `www_92game_net_enewslog` values('135','admin','2019-04-02 16:08:51','::1','1','','0','56446');");

@include("../../inc/footer.php");
?>