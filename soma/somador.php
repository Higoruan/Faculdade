<?php

if(isset($_POST['btn_somar'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $soma = $n1 + $n2;

    if($soma > 10){
        $resultado = $soma + 8;
    }else {
        $resultado = $soma - 5;
    }

    header("Location: index.php?soma=$soma&resultado=$resultado&n1=$n1&n2=$n2");
}
