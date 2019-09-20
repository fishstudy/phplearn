<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/9
 * Time: 10:57
 */
require("../inc.php");
//$res = $redis->lpush('list1','hanfujing','limengsi','limingxuan');
//$second = $redis->rpush('list1  ','xingyuanlin','lijiming');
//$second = $redis->lPop('list1');
//var_dump($second);
//$second = $redis->rPop('list1');
//var_dump($second);
$index = 0;
while(true){
    $index++;
    $temp = $redis->rPop('list1');
    var_dump($temp);
    if(empty($temp)) {
        echo $index;
        echo '<br>';
        break;
    }
}
