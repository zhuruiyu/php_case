<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/16 0016
 * Time: 下午 2:37
 */
     //打开数据库连接
     $link = @mysqli_connect('localhost','root') or die('数据库连接失败');
     // 选择数据库
     mysqli_select_db($link,'blog');
     //传输编码
     mysqli_set_charset($link,"utf8");

?>