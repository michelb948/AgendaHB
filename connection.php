<?php

$host = "localhost";
$banco = "agendahb";
$user = "root";
$senha_user = "";

$con = mysqli_connect($host, $user, $senha_user, $banco);

return $con;