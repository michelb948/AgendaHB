<?php
    $totaldeprojetores = 3;
    function reservarProjetor(){
        $Professor = $_POST['Professor(a)'];
        $Aula = $_POST['Aula'];
        return $Professor . "reservou um projetor para a" . $Aula ."º aula";
        $totaldeprojetores = $totaldeprojetores - 1;
    }
?>