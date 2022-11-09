<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Uma classe DateTime");

define("DATE_BR", "d/m/Y H:i:s");
/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

$dateNow = new DateTime();
$birthDate = new DateTime("1989-07-14"); //precisa ser no formato ANO - MES - DIA
//exemplo de criação de variável do tipo DateTime através de uma String em outro formato
// Conversão de: d/m/Y -> Y-m-d
$dateStatic = DateTime::createFromFormat(DATE_BR, "07/10/2000 21:00:00");

var_dump(
    $dateNow,
    $dateStatic,
    $birthDate
);

//Conversão de Y-m-d -> d/m/Y
echo "<h5>" . $dateNow->format(DATE_BR) . "</h5>";
echo "<h5>" . $birthDate->format("d/m/Y") . "</h5>";