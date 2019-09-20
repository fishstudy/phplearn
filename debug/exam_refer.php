<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/17
 * Time: 14:26
 */

echo '<hr>';
$a =  10;
$b =  $a;
$c =  &$a;

$a = 20;

echo $b;  //20,
echo $c;  //10,