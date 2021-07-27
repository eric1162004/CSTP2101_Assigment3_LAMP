<?php

// mysql://b9c30605b2dc9c:207e2305@us-cdbr-east-04.cleardb.com/heroku_9df057ec49d00a5?reconnect=true

$host       = "us-cdbr-east-04.cleardb.com";
$username   = "b9c30605b2dc9c";
$password   = "207e2305";
$dbname     = "heroku_9df057ec49d00a5"; 
$dsn        = "mysql:host=$host;dbname=$dbname";

$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>