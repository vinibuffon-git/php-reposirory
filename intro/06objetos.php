<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Manipulação de objetos");
/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

//criação de um objeto Stdclass
$objeto = new stdClass();
$objeto->name = "Jonas Dhein";
$objeto->company = "UNIVATES";

$array = [
    "name" => "Jonas Dhein",
    "company" => "UNIVATES"
];

echo var_dump($array);

//criar um objeto através de um array
$objPessoa = (object)$array;

echo var_dump($objPessoa);

echo var_dump($objeto);

//acessando informação através do array
echo "<h4>Meu nome é {$array["name"]}</h4>";

//acessando informação através do objeto
echo "<h4>Minha empresa é a {$objPessoa->company}</h4>";