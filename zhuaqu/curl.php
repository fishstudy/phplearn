<?php
    //创建了一个curl会话资源，成功返回一个句柄；
    $ch = curl_init();

    //设置URL，不用说；
    curl_setopt($ch, CURLOPT_URL, "gitlab.kona.dev.com/users/sign_in");

   //这是设置是否将响应结果存入变量，1是存入，0是直接echo出

//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

     curl_exec($ch);

    curl_close($ch);
?>