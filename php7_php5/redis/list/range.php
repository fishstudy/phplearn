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
//$second = $redis->set('string','hello shanghai');
//var_dump($redis->get('string'));
//echo '<br>';
//var_dump($redis->setRange('string',6,'xiangcheng'));
//echo '<br>';
//var_dump($redis->get('string'));

$res = $redis->lRange('list1',5,5);
echo '<pre>';
print_r($res);




;