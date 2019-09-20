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

//$res = $redis->set("sub",'10');
$res = $redis->decr("sub34");

var_dump($res);

?>