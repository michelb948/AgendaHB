<?php
session_start();
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

if (!isset($cpf, $senha)) {
    die('cpf e/ou senha não podem estar em branco');
}
//$logado = false;

$con = require 'connection.php';       

$sql = 'select * from docentes where cpf = ' . $cpf;

$sql1 = 'select * from docentes where senha = ' . $senha;

$result = $con->query($sql);

$result1 = $con->query($sql1);

//$linha = $result->fetch_array(MYSQLI_ASSOC);

//$linha1 = $result->fetch_array(MYSQLI_ASSOC);

//print_r(password_verify('1234567', $linha['senha']));
//print_r(password_verify('12345678910', $linha1['cpf']));

if (isset($cpf, $senha)) {
    if ($cpf = $result){
        if ($senha = $result1){
            header('Menu.php');
            }
        }
        else{
            return "login invalido teacher ;-; será que num é a senha não?";
        }
            
    }

else{
    return "cpf e/ou senha não preenchidos";
}