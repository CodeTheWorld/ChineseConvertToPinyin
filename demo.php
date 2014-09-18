<?php

require_once('Converter.class.php');

/**
 * Just a demo.
 * Created by deshengkong.
 * Date: 14-9-18
 * Time: 上午10:51
 */

$chinese_str = '屌炸天';
$pinyin_str = Converter::convert($chinese_str);
print $pinyin_str;
