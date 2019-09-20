<?php
require("../inc.php");

//$res = $redis->hDel('user2','age','sex');
//var_dump($res);

//var_dump($redis->hLen('user'));
$ary = $redis->hGetAll('user');
echo '<pre>';
print_r($ary);
//echo count($ary);

//$res = $redis->hExists('user','name---');
//var_dump($res);
//$res = $redis->hIncrBy('user','age',10);
//var_dump($res);
//
$res = $redis->hKeys('user');
var_dump($res);


$res = $redis->hVals('user');
var_dump($res);

?>