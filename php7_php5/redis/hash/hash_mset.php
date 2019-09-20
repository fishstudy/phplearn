<?php
require '../inc.php';

$res = $redis->hMset("user3",array("name"=>"大学生","sex"=>"男"));
var_dump($res);

//$redis->hSet("user","sex","男");
//$redis->hSet("user","age",1);



/*var_dump($redis->hGet("user","name"));

var_dump($redis->hMGet("user",array("name","sex",'age')));*/

?>