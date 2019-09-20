<?php
require '../inc.php';

//$array1 = array(true,2,3);
//$array2 = array( 2, 3, 4, 5, 6);

//print_r(array_intersect($array1, $array2));

//print_r($redis->sInter('set1','set2'));
print_r($redis->sUnion('set1','set2'));
