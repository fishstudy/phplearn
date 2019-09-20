<?php
require '../inc.php';

$res = $redis->hMget("user3",array("name","sex"));
var_dump($res);

//$redis->hSet("user","sex","男");
//$redis->hSet("user","age",1);



/*var_dump($redis->hGet("user","name"));

var_dump($redis->hMGet("user",array("name","sex",'age')));*/

?>