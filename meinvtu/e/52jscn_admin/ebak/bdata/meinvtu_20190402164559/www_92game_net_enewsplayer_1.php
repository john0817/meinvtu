<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewsplayer`;");
E_C("CREATE TABLE `www_92game_net_enewsplayer` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `player` varchar(30) NOT NULL DEFAULT '',
  `filename` varchar(20) NOT NULL DEFAULT '',
  `bz` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsplayer` values('1','RealPlayer','realplayer.php','RealPlayer播放�\�');");
E_D("replace into `www_92game_net_enewsplayer` values('2','MediaPlayer','mediaplayer.php','MediaPlayer播放�\�');");
E_D("replace into `www_92game_net_enewsplayer` values('3','FLASH','flasher.php','FLASH播放�\�');");
E_D("replace into `www_92game_net_enewsplayer` values('4','FLV播放�\�','flver.php','FLV播放�\�');");

@include("../../inc/footer.php");
?>