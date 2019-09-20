<?php
require '../inc.php';
//
//$redis->sAdd("set1",'a');
//$redis->sAdd("set1",'b');


//var_dump($redis->zAdd("stu",1.2,"xiaoming11-1",-10,"xiaoniu8-18"));
//echo '<pre>';
//var_dump($redis->zCard('stu'));


echo '<pre>';
//var_dump($redis->ZCOUNT('stu',1,100));
//var_dump($redis->zScore('stu','xiaoniu85'));
var_dump($redis->ZINCRBY('stu',10,'xiaoniu8'));
































//var_dump($redis->sAdd("set1",'c'));
//var_dump($redis->sAdd("set1",'c'));
//var_dump($redis->sAdd("set1",'d'));

////var_dump($redis->sCard('set1'));
//print_r($redis->sMembers('set1'));
////var_dump($redis->SISMEMBER('set1','cc'));
//var_dump($redis->sCard('set1'));

//$redis->sAdd('set2','1');
//$redis->sAdd('set2','2');
//$redis->sAdd('set2','3');
//$redis->sAdd('set2','4');

//var_dump($redis->sMove('set1','set2','a'));
//var_dump($redis->spop('set2'));
//var_dump($redis->sRandMember('set2'));

