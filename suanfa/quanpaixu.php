<?php
$str = 'abc';
$len = strlen($str);
fullSort($str,0,3);
/**
 * @param $str 字符串
 * @param $start 开始坐标
 * @param $len 字符串的长度
 */
function fullSort($str, $start,$len) {
    if($start == $len) {
        echo $str.'<br>';
        return ;
    }
    for($i=$start;$i<$len;++$i) {
	 if($i == $start ||$str[$i] != $str[$start]) {
        	swap($str,$i,$start);
        	fullSort($str,$start,$len);
       		 swap($str,$i,$start);
	}
    }
}

/**
 * @param $str 字符串
 * @param $raw 原字符串位置
 * @param $replace 替换字符串位置
 */
function swap(&$str,$raw,$replace){

    if(!is_string($str))
        return;

    $t=$str{$raw};

    $str{$raw}=$str{$replace};

    $str{$replace}=$t;

}
