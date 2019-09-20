<?php
$redis  =  new  redis(); 
$result  =  $redis->connect('192.168.38.253',  6379);
$mywatchkey  =  $redis->get("mywatchkey"); 
$rob_total  =  100;   //抢购数量 
if($mywatchkey<$rob_total){ 
  $redis->watch("mywatchkey"); 
  $redis->multi();
  //设置延迟，方便测试效果。 
  sleep(5); 
  //插入抢购数据 
  $redis->hSet("mywatchlist","user_id_".mt_rand(1,  9999),time()); 
  $redis->set("mywatchkey",$mywatchkey-1);
  $rob_result  =  $redis->exec(); 
  if($rob_result){ 
    $mywatchlist  =  $redis->hGetAll("mywatchlist"); 
    echo  "抢购成功！<br/>"; 
    echo  "剩余数量：".($rob_total-$mywatchkey-1)."<br/>"; 
    echo  "用户列表：<pre>"; 
    var_dump($mywatchlist); //打印抢购成功用户
  }else{ 
    echo  "手气不好，再抢购！";exit; 
  } 
}
