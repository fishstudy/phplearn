<?php
$redis = new Redis();
$redis->connect("127.0.0.1",7200);

$redis->lPush("list",'a');
$redis->lPush("list",'b');
$redis->lPush("list",'c');

var_dump($redis->lPop('list'));
var_dump($redis->rPop('list'));
?>