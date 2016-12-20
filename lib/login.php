<?php
    header("Content-type: text/html; charset=utf-8");
    require_once './config.php';
    require_once './function.php';
    if(filtersql($_POST['username'])){
       
         header("Location: ../error.php?id=1"); 
         exit();
    }
   
    $username = daddslashes($_POST['username']);
    session_start();
    
    $password = md5($_POST['password']);
   
    $res = mysql_fetch_array(mysql_query("select count(*) as count from user where username='$username' and password = '$password'"));
    if($res['count']>0){
        $_SESSION['username'] = $username;
       header("Location: ../home.php"); 
    }else{
         header('Location: ../error.php?id=2');
    }