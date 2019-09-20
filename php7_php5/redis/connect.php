<?php
$redis = new Redis();
$redis->connect("127.0.0.1",7200);
$redis->select(0);

?>