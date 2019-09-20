<?php
/**
 * Created by PhpStorm.
 * User: kona
 * Date: 2019/9/18
 * Time: 9:30
 */
$str = 1852271352;
echo substr_replace($str,'***',3,3);   //output:185***1351
echo '<br>';
echo str_pad("abc",10,' ');