<?php
require("../inc.php");

var_dump($redis->hGet("user","name----"));

print_r($redis->hMGet("user",array("name","sex",'age')));

?>