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

//for($i=1; $i<15; $i++) {
//    $redis->delete("name_zjh".$i);
//}
$res = $redis->delete("name_zjh1","name_zjh11");
var_dump($res);

/*$redis->set("str",3);
$redis->incr("str",3);
$val = $redis->get("str");
var_dump($val);*/

?>