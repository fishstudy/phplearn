<?php
require '../inc.php';

$array1  = array( "a"  =>  "green" ,  "red" ,  "blue" ,  "red" );
$array2  = array( "b"  =>  "green" ,  "yellow" ,  "red" );
$result  =  array_diff ( $array2 ,  $array1 );

echo '<pre>';
print_r($result);

print_r($redis->sDiff('set2','set1'));

