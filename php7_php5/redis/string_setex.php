<?php

/**
 *  set("key", "111") 设置
 *  get("name_zhh"); 获取
 *  delete("key")  删除
 *  select(1); 选择数据库
 */
$redis = new Redis();
$redis->connect("192.168.38.253",6379);
$redis->select(0);

$res = $redis->setex("fishex",3600,'2112');
$res = $redis->get("fishex");
sleep(20);
$time = $redis->ttl('fishex');
var_dump($time);

?>