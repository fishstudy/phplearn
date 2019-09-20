<?php
$redis = new Redis();
$redis->connect("127.0.0.1",7200);

$redis->zAdd("stu",100,"xiaoming100");
$redis->zAdd("stu",90,"xiaohua90");
$redis->zAdd("stu",85,"xiaoniu85");

var_dump($redis->zRange("stu",0,-1));
var_dump($redis->zRevRange("stu",0,-1));

?>