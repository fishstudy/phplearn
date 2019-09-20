<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/18
 * Time: 13:49
 */
$a1 = [1,2,3,'name'=>'zs',5,6];
$a2 = [1,2,3,8,9,4,7,3,'name'=>'lisi',8,'zs','w23'=>'232'];
echo '<pre>';
$temp = array_merge($a1,$a2);
var_dump($temp);

$temp = $a1+$a2;
print_r($temp);

$str = 'abcdef';
echo $str[0];
echo '<br>';
echo $str[1];

//$x = NULL;
//
//if ('0xFF' == 255) {
//    echo 88;
//    $x = (int)'0xFF';
//}
//var_dump($x);
//$x = (int)'0xFF';
//var_dump($x);
//
//$x = NULL;
//echo '<hr>';
//if (0123 == 83) {
//    echo 99;
//    $x = (int)'0100';
//}
//var_dump($x);
//$x = (int)'0100';
//var_dump($x);