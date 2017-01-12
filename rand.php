<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9 0009
 * Time: 下午 2:47
 */
   $str="adoijfkdsdo9wna3902unla";
   $ss="";
   $num=strlen($str)-1;
   for($i=0;$i<8;$i++){
       $ss.=$str[rand(0,$num)];
   }
   echo  $ss;
?>