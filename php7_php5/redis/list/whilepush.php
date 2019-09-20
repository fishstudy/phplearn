<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/9
 * Time: 10:57
 */
require("../inc.php");

$num = 0;
while(true){
    $rand =  rand (  1000000 , 9999999 );
    $temp = $redis->lPush('list1',$rand);
    $num++;
    if($num >10009) {
        break;
    }
}
