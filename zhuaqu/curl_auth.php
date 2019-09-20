<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/18
 * Time: 19:33
 */
function curl_auth($url, $user, $passwd)
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_USERPWD => $user . ':' . $passwd,
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$authurl = 'http://要请求HTTP认证的地址';
echo curl_auth($authurl, 'vace', 'passwd');