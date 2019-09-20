<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/8
 * Time: 15:36
 */
$redis = new Redis();
$redis->connect("192.168.38.253",6379);
$redis->select(0);