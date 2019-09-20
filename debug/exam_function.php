<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/17
 * Time: 14:28
 */

$a = 10;
$b = 30;

function test($a,&$b){
    $a = $a+$b; //40
    $b = $a+$b; //70
    echo $a.'_'.$b; //40_70
}

test($a, $b);

echo $a.'_'.$b; //10_30,10_70
