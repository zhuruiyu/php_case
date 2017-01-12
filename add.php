<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/16 0016
 * Time: 下午 2:52
 */
  include "conn.php"
   if(isset($_POST['sub'])){
       $title = $_POST['title'];
       $con = $_POST['con'];

       $sql = "insert into blog(bid,title,content,time) values(null,'$title','$con',now())";"
       
       $query=mysqli_query
       
   }
    
?>

<meta charset="utf-8">
<from action="add.php" name="post">
    标题：<input type="text" name="title"><br/>
    内容：<textarea
    
</from>
