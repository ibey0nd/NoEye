<?php


    require_once './lib/config.php';
    
    if(!isset($_SERVER['PATH_INFO'])){
        echo 'ERROR';
        exit();
    }
  
    $PATH = $_SERVER['PATH_INFO'];
   
    $res = explode('/',$PATH);
    $user = $res[1];
    $data = $res[2];
    $ip = $_SERVER['REMOTE_ADDR'];
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $time = time();

    $sql = "insert into record(data,username,ip,ua,time) value('$data','$user','$ip','$ua','$time')";
    // echo $sql;

    $result = mysql_query($sql);

    if($result){
        echo '1';
    }else{
        echo 'Error';
    }
