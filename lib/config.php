<?php
    $dbconfig = array(
        'database_name' => 'eye',
        'server' => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    );
    $conn = mysql_connect($dbconfig['server'],$dbconfig['username'],$dbconfig['password']) or die('MySQL ERROR');
    mysql_select_db($dbconfig['database_name'],$conn);
    mysql_query("SET NAMES 'utf8'");
  
