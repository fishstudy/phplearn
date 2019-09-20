<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/9
 * Time: 10:57
 */
require("../inc.php");
//$res = $redis->lpush('list1','hanfujing','limengsi','limingxuan');
//$second = $redis->rpush('list1  ','xingyuanlin','lijiming');
$second = $redis->lpushx('list1','taoyue');
var_dump($second);