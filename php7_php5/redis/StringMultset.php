<?php
$redis = new Redis();
$redis->connect("192.168.38.253",6379);
$redis->select(0);


$student = array(
    1=>"李梦思",
    2=>"李明选",
    3=>"焦世展",
    4=>"田华勇",
    5=>"丁玉颖",
    6=>"田文杰",
    7=>"葛纪伟",
    8=>"陶悦",
    9=>"李紫薇",
    10=>"李记明",
    11=>"韩富景",
    12=>"毕恒斌",
    13=>"智军辉",
    14=>"刑远林",
);
$keys = array_keys($student);
print_r($keys);
//foreach($key as $v) {
//
//}
$res = $redis->MGET($keys);
var_dump($res);

//$res = $redis->MSET($student);
//var_dump($res);


?>