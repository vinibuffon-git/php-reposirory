<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$firstName = "Vinícius";
$city = "Lajeado";
$years =  20;

echo ("<h1>Olá me chamo " . $firstName . " e moro em " . $city . " esse ano fiz " . $years . " anos de idade.</h1>");

$pre_feito = "<h1>Olá me chamo %s e moro em %s esse ano fiz %d anos de idade.</h1>";
printf($pre_feito, $firstName, $city, $years);

var_dump([
    "IDADE: " => $years
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$verdade = true;
$falso = false;

$idadePessoa = 20;
$maiorIdade = ($idadePessoa >= 18);

echo "MAIOR IDADE = " . ($maiorIdade ? "SIM" : "NÃO");

var_dump([$verdade, $falso, $maiorIdade]);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<h3>Título H3</h3><h4>Título H4</h4>";
$cleanCode = call_user_func("strip_tags", $code);
echo $code;
echo $cleanCode;

var_dump([
    'code' => $code,
    'cleancode' => $cleanCode
]);

$retorno = function ($parametro1, $parametro2) {
    echo "Saída = " . ($parametro1 + $parametro2);
};

$retorno(5, 10);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Vini";
$array = array("Olá", "Mundo");
$objeto = new stdClass();
$objeto->nome = $string;
$objeto->idade = $years;
$objeto->cidade = $city;

$int = 10;
$float = 127.50;
$null = null;

echo "<pre>";
var_dump([
    $string,
    $array,
    $objeto
]);
echo "</pre>";

fullStackPHPClassSession("exercício 1", __LINE__);

$pessoa1 = new stdClass();
$pessoa1->nome = "Caio";
$pessoa1->idade = 17;
$pessoa1->cidade = "Lajeado";

$pessoa2 = new stdClass();
$pessoa2->nome = "Fernanda";
$pessoa2->idade = 17;
$pessoa2->cidade = "Estrela";


if ($pessoa1->idade > $pessoa2->idade) {
    echo "{$pessoa1->nome} tem mais idade que {$pessoa2->nome}.";
} else if ($pessoa1->idade < $pessoa2->idade) {
    echo "{$pessoa2->nome} tem mais idade que {$pessoa1->nome}.";
} else {
    echo "Ambos possuem a mesma idade.";
}

var_dump([
    $pessoa1,
    $pessoa2
]);

fullStackPHPClassSession("exercício 2", __LINE__);

    $olaMundo = "<h1>Olá <span><i>Mundo</i></span></h1>";
    $mundoSemHTML = call_user_func("strip_tags", $olaMundo);
    echo $olaMundo;
    echo $mundoSemHTML;