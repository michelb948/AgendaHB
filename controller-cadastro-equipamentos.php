<?php
if(isset($_POST['equipamento'])){
    $equipamento = $_POST['equipamento'];
} else {
    return "Campo equipamento não pode estar em branco ;-;";
}

$con = require 'connection-equipamentos.php';

if(!isset($con)){
    die("Conexão falhou!");
}
$sql = "INSERT INTO equipamentos(Equipamentos) VALUES(:Equipamento)";

$stmt = $con->prepare($sql); 
$stmt->bindParam(':Equipamento', $equipamento);

$rs = $stmt->execute();

if ($rs) {
    return "Equipamento cadastrado com sucesso! :D";
} else {
    return "Não foi possível cadastrar o equipamento ;-;";
}

