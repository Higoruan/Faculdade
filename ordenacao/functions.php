<?php


function OrdenarDecrescente($numeros){
    rsort($numeros);

    $numerosInformadosOrdenados = implode(' | ', $numeros);

    return $numerosInformadosOrdenados;
}
function Numerico($array) {
    foreach ($array as $elemento) {
        if (!is_numeric($elemento)) {
            return false;
        }
    }
    return true;
}
