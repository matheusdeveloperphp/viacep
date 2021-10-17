<?php
require_once 'vendor/autoload.php';

/**
 * Dependência
 */
use \App\webService\ViaCEP;

//verificar a existencia do cep no comando
//if (!isset($argv[1])){
//    die("CEP não definido\n");
//}

//execulta a consulta de ceps
$dadosCEP = ViaCEP::consultarCEP('35504-129');

//imprime o resultado
print_r($dadosCEP);