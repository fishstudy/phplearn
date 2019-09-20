<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/19
 * Time: 13:36
 */
$opts  = array(
    'http' =>array(
        'method' => "POST" ,
        'header' => "Accept-language: en\r\n"  .
            "Cookie: foo=bar\r\n"
    )
);

$context  =  stream_context_create ( $opts );

// Open the file using the HTTP headers set above
$file  =  file_get_contents ( 'http://teacher.think.dev.com:8088/news/login/loginshow' ,  false ,  $context );
echo $file;