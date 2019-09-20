<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/9
 * Time: 10:57
 */
require("../inc.php");

//for($i =0;$i<10;$i++) {
//    $rand = rand(97,99);
//    $redis->lpush('list2',$rand);
//}
$ary = $redis->lRange('list2',0,9);
echo '<pre>';
print_r($ary);

//var_dump($redis->lSet('list2',2,666));
var_dump($redis->lIndex('list2',0));
var_dump($redis->lInsert('list2',Redis::AFTER,666,77));









;