<?php

$conn=new mysqli("localhost","lunatri", "ljh45387", "lunatri");
$conn->query('SET NAMES utf8');
$createid = $_GET['createid'];

$sql = "CREATE TABLE IF NOT EXISTS `$createid` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `date` (`date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('채팅방이 생성되었습니다.');</script>>";
} else {
    echo "<script>alert('이미 존재하는 채팅방입니다.');</script>>";
}
?>
