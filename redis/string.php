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
//$redis->set("weight","200");
for($i=1; $i<15; $i++) {
    $redis->set("name_00".$i,$student[$i]);
}
$val = $redis->get("name_001");
echo $val;


/*$redis->set("str",3);
$redis->incr("str",3);
$val = $redis->get("str");
var_dump($val);*/


?>