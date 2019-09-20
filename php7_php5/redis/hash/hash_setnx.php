<?php
require '../inc.php';

$res = $redis->hSetNx("user2","name","博士");
var_dump($res);
$redis->hSet("user2","sex","女");
$redis->hSet("user2","age",100);



/*var_dump($redis->hGet("user","name"));

var_dump($redis->hMGet("user",array("name","sex",'age')));*/

?>