<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/8/9
 * Time: 10:57
 */
require("../inc.php");
$res = $redis->llen('list1');
var_dump($res);

