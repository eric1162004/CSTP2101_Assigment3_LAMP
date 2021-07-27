<?php

$host       = "localhost";
$username   = "eric";
$password   = "123456";
$dbname     = "test"; 
$dsn        = "mysql:host=$host;dbname=$dbname";

$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>