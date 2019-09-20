<?php
require '../inc.php';

$res = $redis->hGetAll("user3");
print_r($res);

//$redis->hSet("user","sex","男");
//$redis->hSet("user","age",1);



/*var_dump($redis->hGet("user","name"));

var_dump($redis->hMGet("user",array("name","sex",'age')));*/

?>