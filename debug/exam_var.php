<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/17
 * Time: 15:48
 */

//$a = 'c';
//$c = 'wewe';
//$wewe = 32;
//echo $$$a;

$str = 'abcdefg';
//$astr = ['a','b','c','d','e','f','g'];
$len = strlen($str);
$return = '';
for($i=$len-1;$i>=0;$i--){
   echo $str[$i];
}
