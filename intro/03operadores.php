<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
echo fullStackPHPClassName("Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA = 10;

echo "<h5>operadorA = {$operadorA}</h5>";
$operadores = [
    "operadorA += 5" => $operadorA += 5, //15
    "operadorA -= 5" => $operadorA -= 5, //10
    "operadorA *= 5" => $operadorA *= 5, //50
    "operadorA /= 5" => $operadorA /= 5, //10
];

var_dump($operadores);

$operadorB = 5;

echo "<h5>operadorB = {$operadorB}</h5>";
$incrementos = [
    "pós-incremento" => $operadorB++, //5
    "res-incremento" => $operadorB, //6
    "pré-incremento" => ++$operadorB, //7
    "pós-decremento" => $operadorB--, //7
    "res-decremento" => $operadorB, //6
    "pré-decremento" => --$operadorB, //5
];

var_dump($incrementos);


/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);


/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);