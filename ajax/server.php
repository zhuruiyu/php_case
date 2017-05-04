<?php

   header("content-type: application/json; charset=utf-8");

   $data =array(
     array('name'=>'lisi','age'=>23),
       array('name'=>'wangwu','age'=>34)
   );

  echo json_encode($data);




?>