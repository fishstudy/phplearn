<?php
require '../inc.php';

//$redis->sAdd("set1",'a');
//$redis->sAdd("set1",'b');
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
var_dump($redis->sRandMember('set2'));

