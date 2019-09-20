<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/9
 * Time: 10:57
 */
require("../inc.php");

$index = 100000;
while(true){
    $index++;
    $temp = $redis->rPop('list1');
    var_dump($temp);
    if(empty($temp)) {
        echo $index;
        echo '<br>';
        break;
    }
    usleep(1);
}
