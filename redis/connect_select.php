<?php
$redis = new Redis();
$redis->connect("192.168.38.253",6379);
$redis->select(0);


?>