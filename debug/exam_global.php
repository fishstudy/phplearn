<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/17
 * Time: 14:28
 */

$a = 10;

function test(){
    $a = 21;
    echo "<br>test:".$a; //21,21
    global $a;
    $a +=10;
    echo "<br>test:".$a; //20,20
}

echo "<br>first ".$a; //10,10
test();
echo  "<br>".$a; //10,20


//function test(){
//    $num = 10;
//    echo $num;
//}
//test();   //output 10
//echo $num;
//$num = $num+10;
//echo $num;
