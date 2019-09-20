<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/17
 * Time: 15:51
 */

$a = '10';
$b  = 10;
if($a == $b) {
    echo 'yes';
} else {
    echo 'no';
}

if($a === $b) {
    echo 'yes';
} else {
    echo 'no';
}

$x = 0;
$z = '';
$str = '0';
$ary = array(0);
$ary2 = array();
//yes no yes
if(empty($x)){
    echo 'yes,';
} else {
    echo 'no,';
}
//yes
if(!empty($z)){
    echo 'yes,';
} else {
    echo 'no,';
}
//no no no
if(empty($ary)){
    echo 'yes,';
} else {
    echo 'no,';
}
//yes no yes
if(empty($ary2)){
    echo 'yes,';
} else {
    echo 'no,';
}
//yes
if(empty($str)){
    echo 'yes';
} else {
    echo 'no';
}