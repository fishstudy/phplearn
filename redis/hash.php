<?php
$redis = new Redis();
$redis->connect("127.0.0.1",7200);

$redis->hSet("user","name","小学生");
$redis->hSet("user","sex","男");
$redis->hSet("user","age",1);

var_dump($redis->hGet("user","name"));

var_dump($redis->hMGet("user",array("name","sex",'age')));

?>