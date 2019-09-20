<?php
require '../inc.php';

$redis->hSet("user","name","大学生");
$redis->hSet("user","sex","男");
$redis->hSet("user","age",1);



/*var_dump($redis->hGet("user","name"));

var_dump($redis->hMGet("user",array("name","sex",'age')));*/

?>