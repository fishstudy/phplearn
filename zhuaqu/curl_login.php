<?php
    //设置post的数据 
    $post = array (
        'username' => 'allwel',
        'password' => '123456'
    );

    //登录地址 
    $url = "http://teacher.think.dev.com:8088/news/login/login";
    //设置cookie保存路径 
    $cookie = dirname(__FILE__) . '/cookie.txt';
//登录后要获取信息的地址 

    $content = login_post($url, $cookie, $post);

    $url2 = "http://teacher.think.dev.com:8088/news/news/newsList";
    //模拟登录
    $cookie = 'thinkphp_show_page_trace=0|0; admin_id=28; username=allwel';
    //获取登录页的信息 
    $content = get_content($url2, $cookie);
    //删除cookie文件
    var_dump($content);
function login_post($url, $cookie, $post) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
    $content = curl_exec($curl);
    curl_close($curl);

    return $content;
}

//登录成功后获取数据 
function get_content($url, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    $rs = curl_exec($ch);
    curl_close($ch);
    return $rs;
}