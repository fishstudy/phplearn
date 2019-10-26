<?php
/**
 * Created by PhpStorm.
 * User: yuxuefeng
 * Date: 2019/10/26
 * Time: 8:23 AM
 */
$redis = new Redis();
$redis->connect('127.0.0.1');


//用户uid
$uid = 1;

//记录有uid的key
$cacheKey = sprintf("sign_%d", $uid);

//开始有签到功能的日期
$startDate = '2017-01-01';

//今天的日期
$todayDate = '2017-01-21';

//计算offset
$startTime = strtotime($startDate);
$todayTime = strtotime($todayDate);
$offset = floor(($todayTime - $startTime) / 86400);
echo "今天是第{$offset}天" . PHP_EOL;

//签到
//一年一个用户会占用多少空间呢？大约365/8=45.625个字节，好小，有木有被惊呆？
$redis->setBit($cacheKey, $offset, 1);

//查询签到情况
$bitStatus = $redis->getBit($cacheKey, $offset);
echo 1 == $bitStatus ? '今天已经签到啦' : '还没有签到呢';
echo PHP_EOL;

//计算总签到次数
echo $redis->bitCount($cacheKey) . PHP_EOL;