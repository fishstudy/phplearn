<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/16
 * Time: 19:46
 */

error_reporting(6143);
$a = 1;
echo $b;
$c = 3;
a();
function a(){
    echo ' start  a call b';
    b();
    echo ' end  a call b';

}

function b(){
    echo ' start  b call c';
    c();
    echo ' end  b call c';

}

function c(){
    echo 'exec c';
}
//error_reporting(0);