<?php

$valor = 1;

try {
    echo $valor ?? throw new Exception('Mensagem de erro');
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    echo $valor ?? throw new Exception;
} catch (Exception) {
    echo "<br>Ocorreu um erro";
}