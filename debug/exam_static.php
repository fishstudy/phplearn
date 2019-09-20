<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/17
 * Time: 14:40
 */


$a = 100;
function test(){
  static  $a = 21;
  //echo $a++;
    echo ++$a;
}

test(); //101  21 21
test(); //102  22 22
test(); //103  23 23
