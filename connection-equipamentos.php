<?php

$dsn = "mysql:host=localhost;dbname=agendahb";
$user = 'root';
$pwd = "";

$con = new PDO($dsn, $user, $pwd);

return $con;