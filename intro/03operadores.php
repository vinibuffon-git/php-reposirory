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

$varA = 5; //int
$varB = "5"; //int
$varC = 4; //int

$comparacoes = [
    "a == b" => ($varA == $varB), //Valor é igual?
    "a === b" => ($varA === $varB), //Valor e tipo são iguais?
    "a != b" => ($varA != $varB), //Valores são iguais?
    "a !== b" => ($varA !== $varB), //Valores e tipos são diferentes?
    "a > c" => ($varA > $varC), //Valor de A é maior?
    "a < c" => ($varA < $varC) //Valor de A é menor?
];

var_dump($comparacoes);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$pessoa1 = new stdClass();
$pessoa1->nome = "Jorge";
$pessoa1->idade = 18;
$pessoa1->possui_cnh = true;
$pessoa1->bebeu = false;

if ($pessoa1->idade >= 18 && $pessoa1->possui_cnh == true && $pessoa1->bebeu != true) {
    echo "{$pessoa1->nome} pode dirigir.";
} else {
    echo "{$pessoa1->nome} não pode dirigir.";
};

var_dump([
    $pessoa1
]);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;

$calculos = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB)
];

var_dump([
    $calculos
]);

fullStackPHPClassSession("exercício 1", __LINE__);

$numeArray = array(1,2,3,4,5,6,7,8,9,10);
$contador = 0;
for ($i=0; $i < count($numeArray); $i++) { 
    if($numeArray[$i]%2==0){
        $contador++;
    };
};
echo $contador;
