<?php
//Segunda parte da atividade;
require __DIR__ . '/../fullstackphp/fsphp.php';
?>

<html>
<h3> Vinícius Buffon </h3>
<h4> 25/10/2022 </h4>
<h4> Desenvolvimento De Aplicações Para Internet </h4>
<h4> Jonas Alberto Dhein </h4>

</html>

<?php
fullStackPHPClassSession("Crie um array com 5 registros e imprima na tela, o array deve armazenar valores do tipo string", __LINE__);

$rpg = array("Dados", "Cartas", "Fichas", "Personagens", "Vilões");
for ($i = 0; $i < count($rpg); $i++) {
    echo "<h4>$rpg[$i]</h4>";
};
//Terceira parte da atividade
fullStackPHPClassSession("Realize uma inserção no início do array com um novo item e imprima o resultado em tela", __LINE__);

array_unshift($rpg, "Dragões");
for ($i = 0; $i < count($rpg); $i++) {
    echo "<h4>$rpg[$i]</h4>";
};

//Quarta parte da atividade
fullStackPHPClassSession("Utilize a função in_array para localizar um determinado elemento dentro do array, realize o teste duas vezes, uma com um item que existe e outra com um item inexistente no array, imprima o resultado da consulta em tela (Existe ou não existe tal informação); ", __LINE__);

//Tentei muito colocar essa questão em uma function, porém não consegui... Consegue me mostrar como eu deveria ter feito?
$valor = "Dragões";

if (in_array("$valor", $rpg)) {
    echo "Existe no RPG {$valor}? ";
    $verdade = true;
}else{
    echo "Existe no RPG {$valor}? ";
    $verdade = false;
}; 
echo ($verdade ? "SIM! <br>" : "NÃO! <br>");

$valor = "Naves Espaciais";

if (in_array("$valor", $rpg)) {
    echo "Existe no RPG {$valor}? ";
    $verdade = true;
}else{
    echo "Existe no RPG {$valor}? ";
    $verdade = false;
}; 

echo ($verdade ? "SIM! <br>" : "NÃO! <br>");

//Quinta parte da atividade
fullStackPHPClassSession("Crie uma variável com uma frase qualquer e através de um método em PHP identifique o tamanho de caracteres presentes na frase", __LINE__);

    $frase = "RPG é uma sigla em inglês que pode ser traduzida como “Jogo de Interpretação de Papéis” ou “Jogo de Interpretação de Personagens”.";    

    echo $frase;

    $numDeLetras = mb_strlen($frase);

    echo "<br> A frase possui {$numDeLetras} caractéres.";

//Quinta parte da atividade
fullStackPHPClassSession("Converta a frase acima para CARACTERES MAIÚSCULOS, faça isso de duas formas, com os dois exemplos que vimos em aula.", __LINE__);

   echo mb_strtoupper($frase);

   echo "<br>";

   echo mb_convert_case($frase, MB_CASE_UPPER);
?>